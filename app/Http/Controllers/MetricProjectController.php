<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Metric;
use App\Models\MetricProject;
use App\Charts\MonthlyReportChart;
use App\Models\MatrixReport;


class MetricProjectController extends Controller
{
    public function selectProject()
    {
        $projects = Project::all();
        return view('metric_projects.select_project', compact('projects'));
    }

    public function index($id)
    {
        $project = Project::findOrFail($id);

        // Fetch initial metrics (where report_month and report_year are null)
        $initialMetricProjects = $project->metricProjects()->whereNull('report_month')->whereNull('report_year')->get();

        $IndicatorProjects = $project->indicatorProjects()->get();
        $ProjectSdg = $project->projectSdg()->get();
        $Survey = $project->survey()->get();
        $ProjectDokumen = $project->projectDokumen()->get();

        // Fetch report metrics (where report_month and report_year are not null)
        $reportMetricProjects = $project->metricProjects()->whereNotNull('report_month')->whereNotNull('report_year')->get();

        // Fetch monthly report data
        $monthlyReports = MetricProject::selectRaw('report_month, report_year, SUM(value) as total_value')
            ->where('project_id', $id)
            ->whereNotNull('report_month')
            ->whereNotNull('report_year')
            ->groupBy('report_year', 'report_month')
            ->orderBy('report_year')
            ->orderBy('report_month')
            ->get();

        // Transform the data for the chart
        $labels = $monthlyReports->map(function ($report) {
            $months = [
                1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
                5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
                9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
            ];
            $monthName = $months[$report->report_month];
            return $monthName . '/' . $report->report_year;
        });

        $values = $monthlyReports->pluck('total_value');

        // Create chart
        $chart = new MonthlyReportChart;
        $chart->labels($labels);
        $chart->dataset('Total Values', 'line', $values)
            ->color('rgba(75, 192, 192, 1)')
            ->backgroundcolor('rgba(75, 192, 192, 0.2)');

        return view('myproject.detail', compact('project', 'initialMetricProjects', 'reportMetricProjects', 'chart', 'IndicatorProjects', 'ProjectSdg', 'Survey', 'ProjectDokumen'));
    }

    public function create($id)
    {
        $project = Project::findOrFail($id);
        $metrics = $project->metrics;
        return view('metric_projects.create', compact('project', 'metrics'));
    }

    public function store(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $request->validate([
            'metric_id' => 'required|exists:metrics,id',
            'value' => 'nullable|string',
            'report_month' => 'nullable|integer|min:1|max:12',
            'report_year' => 'nullable|integer',
        ]);

        $metricProject = MetricProject::create([
            'project_id' => $project->id,
            'metric_id' => $request->metric_id,
            'value' => $request->value,
            'report_month' => $request->report_month,
            'report_year' => $request->report_year,
            'metric_project_id' => null,
        ]);

        return redirect()->route('myproject.impact', $project->id)->with('success', 'Metric project created successfully.');
    }

    public function addReport($projectId, $metricProjectId)
    {
        $project = Project::findOrFail($projectId);
        $metricProject = MetricProject::findOrFail($metricProjectId);
    
        // Fetch report metrics (where report_month and report_year are not null)
        $reportMetricProjects = $project->metricProjects()->whereNotNull('report_month')->whereNotNull('report_year')->get();
    
        // Fetch monthly report data
        $monthlyReports = MetricProject::selectRaw('report_month, report_year, SUM(value) as total_value')
            ->where('project_id', $projectId)
            ->whereNotNull('report_month')
            ->whereNotNull('report_year')
            ->groupBy('report_year', 'report_month')
            ->orderBy('report_year')
            ->orderBy('report_month')
            ->get();
    
        // Transform the data for the chart
        $labels = $monthlyReports->map(function ($report) {
            $months = [
                1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
                5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
                9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
            ];
            $monthName = $months[$report->report_month];
            return $monthName . '/' . $report->report_year;
        });
    
        $values = $monthlyReports->pluck('total_value');
        // Create chart
        $chart = new MonthlyReportChart;
        $chart->labels($labels);
        $chart->dataset('Total Values', 'bar', $values)
            ->color('#5940CB')
            ->backgroundcolor('#5940CB');
    
        // Fetch matrix reports
        $matrixReports = MatrixReport::where('project_id', $projectId)->get();
    
        return view('myproject.impact', compact('project', 'metricProject', 'chart', 'reportMetricProjects', 'matrixReports'));
    }
    

    public function storeReport(Request $request, $projectId, $metricProjectId)
    {
        try {
            $project = Project::findOrFail($projectId);
            $metricProject = MetricProject::findOrFail($metricProjectId);

            $validatedData = $request->validate([
                'value' => 'required|string',
                'report_month' => 'required|integer|min:1|max:12',
                'report_year' => 'required|integer',
            ]);

            $newMetricProject = MetricProject::create([
                'project_id' => $project->id,
                'metric_id' => $metricProject->metric_id,
                'value' => $validatedData['value'],
                'report_month' => $validatedData['report_month'],
                'report_year' => $validatedData['report_year'],
                'metric_project_id' => $metricProject->id,
            ]);


            // Optionally, if you want to redirect back to the project impact page with a success message
            return redirect()->route('metric-projects.addReport', ['project' => $project->id, 'metricProject' => $metricProjectId])->with('success', 'Metric report added successfully.');
        } catch (\Exception $e) {
            // Return JSON response for debugging purposes
            return response()->json([
                'success' => false,
                'message' => 'An error occurred: ' . $e->getMessage()
            ], 500);
        }
    }

    public function edit($projectId, $metricProjectId)
    {
        $project = Project::findOrFail($projectId);
        $metricProject = MetricProject::findOrFail($metricProjectId);
        $metrics = $project->metrics;
        return view('metric_projects.edit', compact('project', 'metricProject', 'metrics'));
    }

    public function update(Request $request, $projectId, $metricProjectId)
    {
        $project = Project::findOrFail($projectId);
        $metricProject = MetricProject::findOrFail($metricProjectId);

        $request->validate([
            'metric_id' => 'required|exists:metrics,id',
            'value' => 'nullable|string',
            'report_month' => 'nullable|integer|min:1|max:12',
            'report_year' => 'nullable|integer',
        ]);

        $metricProject->update($request->all());

        return redirect()->route('metric-projects.index', $project->id)->with('success', 'Metric project updated successfully.');
    }

    public function destroy($projectId, $metricProjectId)
    {
        // Find the report metric project
        $project = Project::findOrFail($projectId);
        $metricProject = MetricProject::findOrFail($metricProjectId);

        // Delete the report metric project
        $metricProject->delete();

        // Redirect back with success message
        return redirect()->route('metric-projects.index', $project->id)->with('success', 'Metric project deleted successfully.');
    }

    public function matrixReport($id)
    {
        $project = Project::findOrFail($id);

        // Fetch metricProject, assuming the first metricProject is used for the view
        $metricProject = $project->metricProjects()->first();

        // Fetch monthly report data
        $monthlyReports = MetricProject::selectRaw('report_month, report_year, SUM(value) as total_value')
            ->where('project_id', $id)
            ->whereNotNull('report_month')
            ->whereNotNull('report_year')
            ->groupBy('report_year', 'report_month')
            ->orderBy('report_year')
            ->orderBy('report_month')
            ->get();

        // Transform the data for the chart
        $labels = $monthlyReports->map(function ($report) {
            $months = [
                1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
                5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
                9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
            ];
            $monthName = $months[$report->report_month];
            return $monthName . '/' . $report->report_year;
        });

        $values = $monthlyReports->pluck('total_value');

        // Create chart
        $chart = new MonthlyReportChart;
        $chart->labels($labels);
        $chart->dataset('Total Values', 'bar', $values)
            ->color('#5940CB')
            ->backgroundcolor('#5940CB');

        $matrixReports = MatrixReport::where('project_id', $id)->get();

        return view('myproject.creatproject.matrixreport', compact('project', 'metricProject', 'chart', 'matrixReports'));
    }

    public function getMetricReport($projectId, $metricId)
    {
        $project = Project::findOrFail($projectId);
        $metricProject = MetricProject::where('project_id', $projectId)->where('metric_id', $metricId)->firstOrFail();

        // Fetch monthly report data
        $monthlyReports = MetricProject::selectRaw('report_month, report_year, SUM(value) as total_value')
            ->where('project_id', $projectId)
            ->whereNotNull('report_month')
            ->whereNotNull('report_year')
            ->groupBy('report_year', 'report_month')
            ->orderBy('report_year')
            ->orderBy('report_month')
            ->get();

        // Transform the data for the chart
        $labels = $monthlyReports->map(function ($report) {
            $months = [
                1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
                5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
                9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
            ];
            $monthName = $months[$report->report_month];
            return $monthName . '/' . $report->report_year;
        });

        $values = $monthlyReports->pluck('total_value');

        // Create chart
        $chart = new MonthlyReportChart;
        $chart->labels($labels);
        $chart->dataset('Total Values', 'bar', $values)
            ->color('#5940CB')
            ->backgroundcolor('#5940CB');

        $matrixReports = MatrixReport::where('project_id', $projectId)->get();

        return view('myproject.creatproject.matrixreport', compact('project', 'metricProject', 'chart', 'matrixReports'));
    }

    public function createMatrixReport($projectId)
    {
        $project = Project::findOrFail($projectId);
        $metricProject = MetricProject::where('project_id', $projectId)->firstOrFail();
    
        // Ambil data laporan bulanan
        $monthlyReports = MetricProject::selectRaw('report_month, report_year, SUM(value) as total_value')
            ->where('project_id', $projectId)
            ->whereNotNull('report_month')
            ->whereNotNull('report_year')
            ->groupBy('report_year', 'report_month')
            ->orderBy('report_year')
            ->orderBy('report_month')
            ->get();
    
        // Transformasi data untuk grafik
        $labels = $monthlyReports->map(function ($report) {
            $months = [
                1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
                5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
                9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
            ];
            $monthName = $months[$report->report_month];
            return $monthName . '/' . $report->report_year;
        });
    
        $values = $monthlyReports->pluck('total_value');
    
        // Buat grafik
        $chart = new MonthlyReportChart;
        $chart->labels($labels);
        $chart->dataset('Total Values', 'bar', $values)
            ->color('#5940CB')
            ->backgroundcolor('#5940CB');
    
        return view('myproject.creatproject.add_matrixreport', compact('project', 'metricProject', 'chart'));
    }
    
    public function storeMatrixReport(Request $request, $projectId)
    {
        $validatedData = $request->validate([
            'metric_id' => 'required|exists:metrics,id',
            'evaluation' => 'required|string',
            'analysis' => 'required|string',
        ]);
    
        MatrixReport::create([
            'project_id' => $projectId,
            'metric_id' => $validatedData['metric_id'],
            'evaluation' => $validatedData['evaluation'],
            'analysis' => $validatedData['analysis'],
        ]);
    
        return back()->with('success', 'Matrix report created successfully.');
    }
    
    public function showReport($projectId, $metricId, $reportId)
    {
        $project = Project::findOrFail($projectId);
        $metricProject = MetricProject::findOrFail($reportId);
    
        // Ambil data laporan bulanan
        $monthlyReports = MetricProject::selectRaw('report_month, report_year, SUM(value) as total_value')
            ->where('project_id', $projectId)
            ->whereNotNull('report_month')
            ->whereNotNull('report_year')
            ->groupBy('report_year', 'report_month')
            ->orderBy('report_year')
            ->orderBy('report_month')
            ->get();
    
        // Transformasi data untuk grafik
        $labels = $monthlyReports->map(function ($report) {
            $months = [
                1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
                5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
                9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
            ];
            $monthName = $months[$report->report_month];
            return $monthName . '/' . $report->report_year;
        });
    
        $values = $monthlyReports->pluck('total_value');
    
        // Buat grafik
        $chart = new MonthlyReportChart;
        $chart->labels($labels);
        $chart->dataset('Total Values', 'bar', $values)
            ->color('#5940CB')
            ->backgroundcolor('#5940CB');
    
        // Ambil detail laporan matrix
        $matrixReport = MatrixReport::where('project_id', $projectId)
            ->where('metric_id', $metricId)
            ->where('id', $reportId)
            ->first();
    
        return view('myproject.creatproject.show_matrixreport', compact('project', 'metricProject', 'chart', 'matrixReport'));
    }
    
    public function updateMatrixReport(Request $request, $projectId, $reportId)
    {
        $validatedData = $request->validate([
            'metric_id' => 'required|exists:metrics,id',
            'evaluation' => 'required|string',
            'analysis' => 'required|string',
        ]);
    
        $matrixReport = MatrixReport::findOrFail($reportId);
        $matrixReport->update([
            'evaluation' => $validatedData['evaluation'],
            'analysis' => $validatedData['analysis'],
        ]);
    
        return back()->with('success', 'Matrix report updated successfully.');
    }
    
    public function impact($projectId)
    {
        $project = Project::findOrFail($projectId);
        $matrixReports = MatrixReport::where('project_id', $projectId)->get();
    
        return view('myproject.impact', compact('project', 'matrixReports'));
    }
    
}
