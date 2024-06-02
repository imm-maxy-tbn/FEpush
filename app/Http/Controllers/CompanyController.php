<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function view($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.view', compact('company'));
    }

    /**
     * Store a newly created Company in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'nama' => 'required',
                'profile' => 'required',
                'tipe' => 'required',
                'nama_pic' => 'required',
                'posisi_pic' => 'required',
                'telepon' => 'required',
                'negara' => 'required',
                'provinsi' => 'required',
                'kabupaten' => 'required',
                'jumlah_karyawan' => 'required',
            ]);

            $validated['user_id'] = Auth::id();

            Company::create($validated);

            return redirect()->route('home')
                ->with('success', 'Company created successfully.');
        } catch (\Exception $e) {
            Log::error('Error while storing company: ' . $e->getMessage());

            $validator = Validator::make([], []);
            $validator->errors()->add('error', 'Failed to create company. Please try again.');
            $errors = $validator->errors();

            foreach ($errors->all() as $error) {
                Log::error('Kesalahan validasi: ' . $error);
            }

            // Redirect kembali ke halaman sebelumnya dengan pesan error
            return back()->withInput()->withErrors($errors);
        }
    }


    /**
     * Display the specified Company.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified Company.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified Company in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'profile' => 'required',
            'tipe' => 'required',
            'nama_pic' => 'required',
            'posisi_pic' => 'required',
            'telepon' => 'required',
            'negara' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'jumlah_karyawan' => 'required',
        ]);

        $company = Company::findOrFail($id);
        $company->update($request->all());

        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }


    /**
     * Remove the specified Company from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->route('companies.index')
            ->with('success', 'Company deleted successfully.');
    }
}
