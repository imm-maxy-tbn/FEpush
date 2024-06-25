<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SurveyController;

// Rute untuk autentikasi
Auth::routes();

// Rute yang bisa diakses tanpa login (Login dan Register)
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('responden/{id}', [SurveyController::class, 'view'])->name('surveys.view');
Route::get('responden-data-diri/{id}', [SurveyController::class, 'dataDiri'])->name('surveys.data-diri');
Route::post('responden/{id}', [SurveyController::class, 'registerUser'])->name('surveys.register-user');
Route::post('responden/{survey}/{user}/submit', [SurveyController::class, 'submit'])->name('surveys.submit');

// Rute yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/welcome', function () {
        return view('tampilanawalhome.welcome');
    })->name('home'); /* ini berfungsi untuk memindahkan dari login ke home */

    Route::get('/imm', function () {
        return view('imm.imm');
    })->middleware('check.company.registration');

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

    Route::get('/impact', function () {
        return view('myproject.impact');
    })->name('impact.impact');;

    Route::get('/profile', function () {
        return view('profile.profile');
    });

    Route::get('/matrixreport', function () {
        return view('myproject.creatproject.matrixreport');
    });

    Route::get('/review', function () {
        return view('myproject.creatproject.review');
    });

    Route::get('/edit', function () {
        return view('profile.edit');
    });

    Route::get('/pemilihansdgs', function () {
        return view('myproject.creatproject.pemilihansdgs');
    });

    Route::get('/indicator', function () {
        return view('myproject.creatproject.indicator');
    });

    Route::get('/metrix', function () {
        return view('myproject.creatproject.metrix');
    });

    Route::get('/detailreview', function () {
        return view('myproject.creatproject.detailreview');
    });

    Route::get('/edit-survey', function () {
        // return view('survey.edit-survey.edit-survey');
        return view('survey.edit-survey.edit-survey-new');
    });

    Route::get('/detail-kelas', function () {
        return view('kelas.detail-kelas');
    });

    Route::get('/bootcamp', function () {
        return view('bootcamp.bootcamp');
    });

    Route::get('/succes', function () {
        return view('event.succes');
    });

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
    Route::get('/blogarticle/{id}/view', [PostController::class, 'view'])->name('blog.view');

    Route::get('/imm3', [VerificationController::class, 'showVerificationForm'])->name('imm3');
    Route::get('/kodeotp', [VerificationController::class, 'showOtpVerification'])->name('kodeotp');
    Route::post('/send-otp', [VerificationController::class, 'sendVerificationEmail'])->name('send-otp');
    Route::post('/verify-code', [VerificationController::class, 'verifyCode'])->name('verify-code');

    Route::resource('projects', ProjectController::class);
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/creatproject', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::post('/projects/filter-metrics', [ProjectController::class, 'filterMetrics'])->name('projects.filterMetrics');
    Route::get('/detail/{id}', [ProjectController::class, 'view'])->name('projects.view');

    Route::resource('companies', CompanyController::class);
    Route::post('/companies/store', [CompanyController::class, 'store'])->name('companies.store');

    Route::put('event/{id}', [EventController::class, 'update'])->name('events.update');

    Route::post('survey', [SurveyController::class, 'store'])->name('surveys.store');
});

Route::get('event', [EventController::class, 'index'])->name('events.index');
Route::get('event/{id}', [EventController::class, 'view'])->name('events.view');
Route::get('event-register/{id}', [EventController::class, 'edit'])->name('events.edit');
