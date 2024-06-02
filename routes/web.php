<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('home'); /* ini befungsi untuk memindahkan dari login ke home */

// Route::get('/login', function () {
//     return view('login');
// }); /* ini befungsi untuk memindahkan ke halaman login  */

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/imm', function () {
    return view('imm');
});

Route::get('/imm2', function () {
    return view('imm2');
});

Route::get('/imm3', function () {
    return view('imm3');
});

Route::get('/imm4', function () {
    return view('imm4');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/myproject', function () {
    return view('myproject');
});

Route::get('/survey', function () {
    return view('survey');
});

Route::get('/creatp', function () {
    return view('creatp');
});

Route::get('/creatp1', function () {
    return view('creatp1');
});

use App\Http\Controllers\HomeController;
Route::get('/home', [HomeController::class, 'index'])->name('home');

use App\Http\Controllers\CompanyController;
Route::post('/register-company', [CompanyController::class, 'store']);

use App\Http\Controllers\OTPController;

Route::post('/send-otp', [OTPController::class, 'sendOTP']);
Route::post('/verify-otp', [OTPController::class, 'verifyOTP']);
