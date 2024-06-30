<?php

namespace App\Http\Controllers;

use App\Models\CompanyOutcome;
use App\Models\Company;
use App\Models\Project;
use App\Models\Dana;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CompanyOutcomeController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $company = $user->companies; // Mengambil company terkait dengan user
        
        if (!$company) {
            // Handle jika user tidak terhubung dengan company
            return redirect()->back()->with('error', 'User tidak terhubung dengan company.');
        }
        
        $companyId = $company->id;
        
        $projects = Project::where('company_id', $companyId)
            ->whereHas('dana', function ($query) {
                $query->where('jenis_dana', 'Hibah');
            })
            ->with(['dana' => function ($query) {
                $query->where('jenis_dana', 'Hibah');
            }])
            ->get();
        
        
        return $projects;
    }
    public function detailOutcome($project_id)
    {
        $outcomes = CompanyOutcome::where('project_id', $project_id)->get();
        
        if ($outcomes->isEmpty()) {
            // Handle jika tidak ada data yang ditemukan
            return view('homepageimm.detailbiaya', ['project_id' => $project_id, 'outcomes' => collect()]); // Mengirim koleksi kosong
        }
    
        return view('homepageimm.detailbiaya', compact('outcomes', 'project_id'));
    }
    public function create($project_id)
    {
        $project = Project::findOrFail($project_id);
        return view('homepageimm.tambahpenggunaandana', compact('project'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'jumlah_biaya' => 'required|numeric',
            'keterangan' => 'required|string|max:255',
            'bukti' => 'nullable|file|mimes:pdf,jpeg,jpg,png|max:5000', // Adjust max file size as needed
            'project_id' => 'required|exists:projects,id',
        ]);
    
        $buktiFileName = null;
    
        if ($request->hasFile('bukti')) {
            $buktiFile = $request->file('bukti');
            $buktiFileName =time() . '.' . $request->bukti->extension();
            $buktiFile->move(public_path('images'), $buktiFileName);
        }
    
        CompanyOutcome::create([
            'date' => $validatedData['date'],
            'jumlah_biaya' => $validatedData['jumlah_biaya'],
            'keterangan' => $validatedData['keterangan'],
            'bukti' => $buktiFileName,
            'project_id' => $validatedData['project_id'],
        ]);
    
        return redirect()->route('homepageimm.detailbiaya', ['project_id' => $validatedData['project_id']])
                        ->with('success', 'Company outcome created successfully.');
    }
    
    
}
