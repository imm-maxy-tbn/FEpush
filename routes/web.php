<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/', function () {
    return view('tampilanawalhome.welcome');
});

Route::get('/welcome', function () {
    return view('tampilanawalhome.welcome');
})->name('home'); /* ini befungsi untuk memindahkan dari login ke home */

// Route::get('/login', function () {
//     return view('login');
// }); /* ini befungsi untuk memindahkan ke halaman login  */

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/imm', function () {
    return view('imm.imm');
});

Route::get('/verifikasidiri', function () {
    return view('imm.verifikasidiri');
});

Route::get('/blog', function () {
    return view('blog.blog');
});

Route::get('/kodeotp', function () {
    return view('imm.kodeotp');
});

Route::get('/pendaftaranperusahaan', function () {
    return view('imm.pendaftaranperusahaan');
});

Route::get('/homepage', function () {
    return view('homepageimm.homepage');
});

Route::get('/myproject', function () {
    return view('myproject.myproject');
});

Route::get('/survey', function () {
    return view('myproject.survey');
});

Route::get('/blogarticle', function () {
    return view('blog.blogarticle');
});

Route::get('/laporanproject', function () {
    return view('homepageimm.laporanproject');
});

Route::get('/reportbulanpertama', function () {
    return view('homepageimm.reportbulanpertama');
});

Route::get('/detail', function () {
    return view('myproject.detail');
});

Route::get('/profile', function () {
    return view('profile.profile');
});

Route::get('/edit', function () {
    return view('profile.edit');
});

use App\Http\Controllers\HomeController;
Route::get('/home', [HomeController::class, 'index'])->name('home');

use App\Http\Controllers\CompanyController;
Route::post('/companies/store', [CompanyController::class, 'store'])->name('companies.store');

use App\Http\Controllers\OTPController;

Route::post('/send-otp', [OTPController::class, 'sendOTP'])->name('send-otp');
Route::post('/verify-otp', [OTPController::class, 'verifyOTP']);
