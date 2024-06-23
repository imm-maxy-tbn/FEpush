<?php
namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    // ...

    public function update(Request $request, $id)
    {
        try {
<<<<<<< HEAD
            $user = Auth::user(); // Mendapatkan user yang sedang login
            $company = Company::where('user_id', $user->id)->findOrFail($id); // Mendapatkan perusahaan berdasarkan user_id

            // Validasi input dari form
            $validated = $request->validate([
                'nama_depan' => 'required',
                'nama_belakang' => 'required',
                'company_name' => 'required',
                'email' => 'required|email',
                'profile' => 'required',
                'nama_pic' => 'required',
                'posisi_pic' => 'required',
                'telepon' => 'required',
                'jumlah_karyawan' => 'required',
                'company_type' => 'required',
                'negara' => 'required',
                'provinsi' => 'required',
                'kabupaten' => 'required',
            ]);

            // Update data perusahaan
            $company->update([
                'nama' => $validated['company_name'],
                'profile' => $validated['profile'],
                'nama_pic' => $validated['nama_pic'],
                'posisi_pic' => $validated['posisi_pic'],
                'telepon' => $validated['telepon'],
                'jumlah_karyawan' => $validated['jumlah_karyawan'],
                'tipe' => $validated['company_type'],
                'negara' => $validated['negara'],
                'provinsi' => $validated['provinsi'],
                'kabupaten' => $validated['kabupaten'],
            ]);

            // Update data user (jika perlu)
            $user->update([
                'nama_depan' => $validated['nama_depan'],
                'nama_belakang' => $validated['nama_belakang'],
                'email' => $validated['email'],
            ]);

            return redirect()->route('home')->with('success', 'Company updated successfully.');
=======
            // Validate the request data
            $validated = $request->validate([
                'nama' => 'required|string|max:255',
                'profile' => 'required|string|max:255',
                'tipe' => 'required|string|max:255',
                'nama_pic' => 'required|string|max:255',
                'posisi_pic' => 'required|string|max:255',
                'telepon' => 'required|string|max:20',
                'negara' => 'required|string|max:255',
                'provinsi' => 'required|string|max:255',
                'kabupaten' => 'required|string|max:255',
                'jumlah_karyawan' => 'required|integer',
            ]);

            // Create the company
            Company::create([
                'user_id' => Auth::id(), // Assign the currently logged-in user ID
                'nama' => $validated['nama'],
                'profile' => $validated['profile'],
                'tipe' => $validated['tipe'],
                'nama_pic' => $validated['nama_pic'],
                'posisi_pic' => $validated['posisi_pic'],
                'telepon' => $validated['telepon'],
                'negara' => $validated['negara'],
                'provinsi' => $validated['provinsi'],
                'kabupaten' => $validated['kabupaten'],
                'jumlah_karyawan' => $validated['jumlah_karyawan'],
            ]);

            return view('homepageimm.homepage')
                ->with('success', 'Company created successfully.');
>>>>>>> 6727a490c701fb6c76a1b56899fa99c7d3590ec2
        } catch (\Exception $e) {
            Log::error('Error while updating company: ' . $e->getMessage());

            $validator = Validator::make([], []);
            $validator->errors()->add('error', 'Failed to update company. Please try again.');
            $errors = $validator->errors();

            foreach ($errors->all() as $error) {
                Log::error('Validation error: ' . $error);
            }

            return back()->withInput()->withErrors($errors);
        }
    }

<<<<<<< HEAD
    // ...
=======
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
>>>>>>> 6727a490c701fb6c76a1b56899fa99c7d3590ec2
}

