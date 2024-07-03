<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Company;
use App\Models\Tag;
use App\Models\Sdg;
use App\Models\Indicator;
use App\Models\Metric;
use App\Models\TargetPelanggan;
use App\Models\Dana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $allProjects = Project::with('tags', 'sdgs', 'indicators', 'metrics', 'targetPelanggan', 'dana')
            ->whereHas('company', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })
            ->get();

        $ongoingProjects = $allProjects->where('status', 'Belum selesai');
        $completedProjects = $allProjects->where('status', 'Selesai');

        return view('myproject.myproject', compact('allProjects', 'ongoingProjects', 'completedProjects'));
    }


    public function create()
    {
        $companies = Company::all();
        $tags = Tag::all();
        $sdgs = Sdg::all();
        $indicators = Indicator::all();
        $metrics = Metric::all();
        $targetPelanggan = TargetPelanggan::all();
        $dana = Dana::all();

        return view('myproject.creatproject.creatproject', compact('companies', 'tags', 'sdgs', 'indicators', 'metrics', 'targetPelanggan', 'dana'));
    }

    public function filterMetrics(Request $request)
    {
        $tagIds = $request->input('tag_ids', []);
        $indicatorIds = $request->input('indicator_ids', []);

        // Menggunakan Eloquent Builder untuk memfilter data dengan paginasi
        $metricsQuery = Metric::query()
            ->orWhereHas('tags', function ($query) use ($tagIds) {
                $query->whereIn('tags.id', $tagIds);
            })
            ->orWhereHas('indicators', function ($query) use ($indicatorIds) {
                $query->whereIn('indicators.id', $indicatorIds);
            })
            ->with('relatedMetrics'); // Mengambil relasi terkait jika diperlukan

        // Menentukan jumlah item per halaman
        $perPage = 10; // Misalnya, 10 item per halaman
        $metrics = $metricsQuery->paginate($perPage);

        return response()->json($metrics);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'tujuan' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'gmaps' => 'required|string',
            'jumlah_pendanaan' => 'required|numeric',
            'dana' => 'required|array',
            'dana.*.jenis_dana' => 'required|string',
            'dana.*.nominal' => 'required|numeric',
            'company_id' => 'required|exists:companies,id',
            'tag_ids' => 'array',
            'tag_ids.*' => 'exists:tags,id',
            'sdg_ids' => 'array',
            'sdg_ids.*' => 'exists:sdgs,id',
            'indicator_ids' => 'array',
            'indicator_ids.*' => 'exists:indicators,id',
            'metric_ids' => 'array',
            'metric_ids.*' => 'exists:metrics,id',
            'target_pelanggans' => 'array',
            'target_pelanggans.*.status' => 'nullable|string',
            'target_pelanggans.*.rentang_usia' => 'nullable|string',
            'target_pelanggans.*.deskripsi_pelanggan' => 'nullable|string',
        ]);
        $validatedData['status'] = 'Belum selesai';
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $imageName);
            $validatedData['img'] = $imageName;
        }

        $project = Project::create($validatedData);

        $project->tags()->attach($request->input('tag_ids'));
        $project->sdgs()->attach($request->input('sdg_ids'));
        $project->indicators()->attach($request->input('indicator_ids'));
        $project->metrics()->attach($request->input('metric_ids'));

        if ($request->has('dana')) {
            foreach ($request->dana as $dana) {
                $project->dana()->create([
                    'jenis_dana' => $dana['jenis_dana'],
                    'nominal' => $dana['nominal'],
                ]);
            }
        }

        if ($request->has('target_pelanggans')) {
            foreach ($request->target_pelanggans as $target) {
                $project->targetPelanggan()->create([
                    'status' => $target['status'],
                    'rentang_usia' => $target['rentang_usia'],
                    'deskripsi_pelanggan' => $target['deskripsi_pelanggan'],
                ]);
            }
        }

        return redirect()->route('myproject.myproject')->with('success', 'Project created successfully');
    }

    public function edit($id)
    {
        $project = Project::with(['tags', 'sdgs', 'metrics', 'targetPelanggan', 'dana'])->findOrFail($id);
        $companies = Company::all();
        $tags = Tag::all();
        $sdgs = SDG::with('indicators')->get();
        $indicators = Indicator::all();
        $metrics = Metric::all();
        $targetPelanggan = TargetPelanggan::all();

        return view('projects.edit', compact('project', 'companies', 'tags', 'sdgs', 'indicators', 'metrics', 'targetPelanggan'));
    }

    public function view($id)
    {
        $project = Project::with('tags', 'sdgs', 'indicators', 'metrics', 'targetPelanggan', 'dana', 'surveys')->findOrFail($id);
        $documents = DB::table('project_dokumen')
            ->where('project_id', $id)
            ->get();

        // Pass the project and documents to the view
        return view('myproject.detail', compact('project', 'documents'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        // Validate the request
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'documents.*' => 'file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048', // Adjust mime types and max size as needed
        ]);

        // Update project details
        $project->nama = $request->nama;
        $project->deskripsi = $request->deskripsi;
        $project->save();

        // Handle file uploads
        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $file) {
                $filename = time() . '-' . $file->getClientOriginalName();
                $file->move(public_path('files'), $filename);

                // Check if the document already exists
                $existingDocument = DB::table('project_dokumen')
                    ->where('project_id', $project->id)
                    ->where('dokumen_validitas', $filename)
                    ->first();

                // If the document does not exist, insert it
                if (!$existingDocument) {
                    DB::table('project_dokumen')->insert([
                        'project_id' => $project->id,
                        'dokumen_validitas' => $filename,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }

        // Handle document deletions
        if ($request->has('delete_documents')) {
            foreach ($request->delete_documents as $docId) {
                $document = DB::table('project_dokumen')->where('id', $docId)->first();
                if ($document) {
                    // Delete the file from the public/files directory
                    File::delete(public_path('files') . '/' . $document->dokumen_validitas);
                    // Delete the record from the database
                    DB::table('project_dokumen')->where('id', $docId)->delete();
                }
            }
        }

        return redirect()->back()->with('success', 'Project updated successfully');
    }


    public function destroy($id)
    {
        Project::destroy($id);
        return redirect()->route('projects.index')->with('success', 'Project deleted successfull');
    }
}
