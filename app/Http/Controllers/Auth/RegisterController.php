<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Auth\Auth;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login'; // Contoh pengalihan ke halaman profil

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');

    }

    
    public function index()
    {
        $user = auth()->user(); // Mendapatkan user yang sedang terautentikasi
    
        // Cek apakah user memiliki company
        if ($user->company) {
            $company = $user->company;
            return view('homepageimm.homepage', compact('user', 'company'));
        } else {
            // Jika user tidak memiliki company, tindakan selanjutnya sesuai kebutuhan aplikasi Anda
            return redirect()->route('buat-company'); // Contoh pengalihan ke halaman membuat company baru
        }
    }
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'confirmed'], //add minimum
            'nik' => ['required', 'string', 'max:16'],
            'negara' => ['required', 'string', 'max:50'],
            'provinsi' => ['required', 'string', 'max:50'],
            'alamat' => ['required', 'string', 'max:255'],
            'telepon' => ['required', 'string', 'max:13'],
        ]);

        if ($validator->fails()) {
            // Mendapatkan daftar atribut yang tidak valid
            $invalidAttributes = $validator->failed();

            // Loop melalui daftar atribut yang tidak valid
            foreach ($invalidAttributes as $attribute => $rules) {
                // Mendapatkan pesan kesalahan validasi untuk atribut tersebut
                $errors = $validator->errors()->get($attribute);

                // Menyimpan pesan kesalahan validasi dalam log
                foreach ($errors as $error) {
                    Log::error('Kesalahan validasi pada atribut ' . $attribute . ': ' . $error);
                }
            }
        }

        return $validator;
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::where('email', $data['email'])->first();

        if ($user && $user->nik === null && $user->negara === null && $user->provinsi === null && $user->role === 'USER') {
            $user->update([
                'nama_depan' => $data['nama'],
                'nama_belakang' => null,
                'password' => $data['password'],
                'nik' => $data['nik'],
                'negara' => $data['negara'],
                'provinsi' => $data['provinsi'],
                'alamat' => $data['alamat'],
                'telepon' => $data['telepon'],
                'role' => 'USER',
            ]);

            return $user;
        } elseif (!$user) {
            return User::create([
                'nama_depan' => $data['nama'],
                'nama_belakang' => null,
                'email' => $data['email'],
                'password' => $data['password'],
                'nik' => $data['nik'],
                'negara' => $data['negara'],
                'provinsi' => $data['provinsi'],
                'alamat' => $data['alamat'],
                'telepon' => $data['telepon'],
                'role' => 'USER',
            ]);
        }

        // If the user exists and doesn't have 'nonlogin' as the password, throw a validation exception.
        throw ValidationException::withMessages([
            'email' => ['The email address is already in use and cannot be registered again.'],
        ]);
    }
}
