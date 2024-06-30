<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/login'; // Redirect to login page after registration

    public function __construct()
    {
        $this->middleware('guest');
    }

    // Show registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle registration form submission
    protected function register(Request $request)
    {
        $this->validator($request->all())->validate();

        // Create the user
        $user = $this->create($request->all());

        // Redirect to the login page after registration
        return redirect($this->redirectTo)->with('success', 'Registration successful! Please login.');
    }

    // Validate registration form data
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'], // Add any additional validation rules
            'nik' => ['required', 'string', 'max:16'],
            'negara' => ['required', 'string', 'max:50'],
            'provinsi' => ['required', 'string', 'max:50'],
            'alamat' => ['required', 'string', 'max:255'],
            'telepon' => ['required', 'string', 'max:13'],
        ]);
    }

    // Create a new user instance after a valid registration
    protected function create(array $data)
    {
        return User::create([
            'nama_depan' => $data['nama'],
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
}
