<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    // ...
    
    /**
     * Update the specified Company in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $user = Auth::user();
            $company = Company::where('user_id', $user->id)->findOrFail($id);

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

            // Update data perusahaan berdasarkan input dari form
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
        } catch (\Exception $e) {
            Log::error('Error while updating company: ' . $e->getMessage());

            $validator = Validator::make([], []);
            $validator->errors()->add('error', 'Failed to update company. Please try again.');
            $errors = $validator->errors();

            foreach ($errors->all() as $error) {
                Log::error('Validation error: ' . $error);
            }

            // Redirect kembali ke halaman sebelumnya dengan pesan error
            return back()->withInput()->withErrors($errors);
        }
    }

    // ...
}
