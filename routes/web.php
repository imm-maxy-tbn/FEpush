<?php

use App\Models\Company;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\ProfileController;

// Rute untuk autentikasi
Auth::routes();

// Rute yang bisa diakses tanpa login (Login dan Register)
Route::get('/', function () {
    return view('home');
})->name('home'); 
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('welcome');
  Route::get('event', [EventController::class, 'index'])->name('events.index');

Route::get('/register', function () {
    return view('auth.register');
})->name('register'); 
Route::get('event/{id}', [EventController::class, 'view'])->name('events.view');


Route::get('responden/{id}', [SurveyController::class, 'view'])->name('surveys.view');
Route::get('responden-data-diri/{id}', [SurveyController::class, 'dataDiri'])->name('surveys.data-diri');
Route::post('responden/{id}', [SurveyController::class, 'registerUser'])->name('surveys.register-user');
Route::post('responden/{survey}/{user}/submit', [SurveyController::class, 'submit'])->name('surveys.submit');

// Rute yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/verifikasidiri', function () {
        return view('imm.verifikasidiri');
    })->name('verifikasidiri');

    Route::get('/homepage', [CompanyController::class, 'index'])->name('homepage')->middleware('check.company');

    Route::get('/imm', function () {
        return view('imm.imm');
    })->middleware('check.company');

    Route::get('/blog', function () {
        return view('blog.blog');
    });

    Route::get('/kodeotp', function () {
        return view('imm.kodeotp');
    });

    Route::get('/pendaftaranperusahaan', function () {
        return view('imm.pendaftaranperusahaan');
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
    })->name('impact.impact');

    Route::get('/profile', function () {
        $user = Auth::user();
        if ($user) {
            return view('profile.profile', ['user' => $user]);
        } else {
            return redirect('/login');
        }
    })->middleware('auth');

    Route::get('/matrixreport', function () {
        return view('myproject.creatproject.matrixreport');
    });

    Route::get('/review', function () {
        return view('myproject.creatproject.review');
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

    Route::get('/edit-survey-new', function () {
        return view('survey.edit-survey.edit-survey-new');
    });

    Route::get('/bootcamp', function () {
        return view('bootcamp.bootcamp');
    });

    Route::get('/succes', function () {
        return view('event.succes');
    });

 

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
    Route::get('/myproject', [ProjectController::class, 'index'])->name('myproject.myproject');

    Route::get('/companies', [CompanyController::class, 'index']);

    Route::resource('companies', 'CompanyController');
    Route::post('/homepage', [CompanyController::class, 'store'])->name('companies.store');

  
  
    Route::get('event-register/{id}', [EventController::class, 'edit'])->name('events.edit');
    Route::put('event/{id}', [EventController::class, 'update'])->name('events.update');

    Route::post('survey', [SurveyController::class, 'store'])->name('surveys.store');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
 
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');



Route::get('/profile-commpany', [ProfileController::class, 'editCompanyProfile'])->name('profile-commpany');
Route::put('/profile-commpany/{id}', [ProfileController::class, 'updateCompanyProfile'])->name('profile-commpany.update');
Route::get('/profile-commpany', [ProfileController::class, 'editCompanyProfile'])
    ->name('profile-commpany')
    ->middleware('check.company');

    Route::get('/profile-commpany', [ProfileController::class, 'editCompanyProfile'])->name('profile-commpany')->middleware('check.company');

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

Route::get('/detail-kelas', function () {
    return view('kelas.detail-kelas');
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
});

Route::get('/matrixreport', function () {
    return view('myproject.creatproject.matrixreport');
});

Route::get('/review', function () {
    return view('myproject.creatproject.review');
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

Route::get('/responden', function () {
    return view('survey.responden.responden');
});

Route::get('/responden-data-diri', function () {
    return view('survey.responden.responden-data-diri');
});

Route::get('/responden-esay', function () {
    return view('survey.responden.responden-esay');
});

Route::get('/kelolapengeluaran', function () {
    return view('homepageimm.kelolapengeluaran');
});

Route::get('/detailbiaya', function () {
    return view('homepageimm.detailbiaya');
});

Route::get('/unggahdokumen', function () {
    return view('myproject.creatproject.unggahdokumen');
});

Route::get('/tambahpenggunaandana', function () {
    return view('homepageimm.tambahpenggunaandana');
});

Route::get('/responden-pilihan-ganda', function () {
    return view('survey.responden.responden-pilihan-ganda');
});

Route::get('/responden-skala', function () {
    return view('survey.responden.responden-skala');
});

Route::get('/responden-penutup-survey', function () {
    return view('survey.responden.responden-penutup-survey');
});



Route::get('/event-detail', function () {
    return view('event.event-detail');
});

Route::get('/detail-kelas', function () {
    return view('kelas.detail-kelas');
});

Route::get('/bootcamp', function () {
    return view('bootcamp.bootcamp');
});

Route::get('/event-register', function () {
    return view('event.event-register');
});

Route::get('/succes', function () {
    return view('event.succes');
});

Route::get('/kuesioner', function () {
    return view('survey.responden.kuesioner');
});

Route::get('/responden/{id}', 'SurveyController@view')->name('survey.responden.view');


Route::get('/homepage', function () {
    $user = auth()->user();
    $company = $user->company;

    return view('homepageimm.homepage', compact('company', 'user'));
})->name('homepage')->middleware('check.company');

Route::get('/detail/{id}', [ProjectController::class, 'vieww'])->name('projects.view');

Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blogarticle/{id}/view', [PostController::class, 'view'])->name('blog.view');

Route::get('/imm3', [VerificationController::class, 'showVerificationForm'])->name('imm3');
Route::post('/send-otp', [VerificationController::class, 'sendVerificationEmail'])->name('send-otp');
Route::post('/verify-code', [VerificationController::class, 'verifyCode'])->name('verify-code');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/creatproject', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');

Route::get('/projects/filter-metrics', [ProjectController::class, 'filterMetrics'])->name('projects.filterMetrics');

Route::get('/verifikasi-diri', function () {
    return view('imm.imm');
})->name('verifikasidiri');

Route::get('/berhasilverif', function () {
    return view('imm.berhasilverif');
})->name('berhasilverif');

Route::get('responden/{id}', [SurveyController::class, 'view'])->name('surveys.view');
Route::get('responden-data-diri/{id}', [SurveyController::class, 'dataDiri'])->name('surveys.data-diri');
Route::post('responden/{id}', [SurveyController::class, 'registerUser'])->name('surveys.register-user');
Route::post('responden/{survey}/{user}/submit', [SurveyController::class, 'submit'])->name('surveys.submit');
Route::post('survey', [SurveyController::class, 'store'])->name('surveys.store');
Route::get('/responden/{id}', [SurveyController::class, 'view'])->name('surveys.view');

Route::get('/about', [HomeController::class,'about']);
Route::get('/edit-survey-new/{survey}', [SurveyController::class, 'edit'])->name('surveys.edit');
