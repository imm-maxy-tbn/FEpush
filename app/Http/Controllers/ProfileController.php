<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('profile.profile', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_depan' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,
            'current_password' => 'nullable|required_with:new_password',
            'new_password' => 'nullable|min:8|max:12|required_with:current_password',
            'password_confirmation' => 'nullable|min:8|max:12|required_with:new_password|same:new_password'
        ]);

        $user = Auth::user();
        $user->nama_depan = $request->input('nama_depan');
        $user->email = $request->input('email');

        if (!is_null($request->input('current_password'))) {
            if (Hash::check($request->input('current_password'), $user->password)) {
                $user->password = bcrypt($request->input('new_password'));
            } else {
                return redirect()->back()->withInput();
            }
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }

    public function editCompanyProfile()
    {
        $user = Auth::user();
        $company = $user->companies()->first();

        if (!$company) {
            return redirect()->route('buat-company'); // Arahkan ke halaman pembuatan perusahaan jika tidak ditemukan
        }

        return view('profile.profile-commpany', compact('user', 'company'));
    }

    public function updateCompanyProfile(Request $request, $id)
    {
        $request->validate([
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

        $company = Company::findOrFail($id);
        $company->update([
            'nama' => $request->input('nama'),
            'profile' => $request->input('profile'),
            'tipe' => $request->input('tipe'),
            'nama_pic' => $request->input('nama_pic'),
            'posisi_pic' => $request->input('posisi_pic'),
            'telepon' => $request->input('telepon'),
            'negara' => $request->input('negara'),
            'provinsi' => $request->input('provinsi'),
            'kabupaten' => $request->input('kabupaten'),
            'jumlah_karyawan' => $request->input('jumlah_karyawan'),
        ]);

        return redirect()->route('profile-commpany')->with('success', 'Company profile updated successfully.');
    }
}
