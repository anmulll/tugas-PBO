<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebAuthController;
use App\Http\Controllers\WebLowonganController;
use App\Http\Controllers\WebLamaranController;
use App\Http\Controllers\RekomendasiKursusController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\NotificationController;


/*
|--------------------------------------------------------------------------
| ROUTE AUTH
|--------------------------------------------------------------------------
*/
Route::get('/login', [WebAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [WebAuthController::class, 'login']);

Route::post('/logout', [WebAuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| ROUTE DASHBOARD (SELALU BERHASIL LOGIN)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', [WebAuthController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');


/*
|--------------------------------------------------------------------------
| ROUTE PUBLIC
|--------------------------------------------------------------------------
*/
Route::get('/', [WebLowonganController::class, 'index'])->name('home');
Route::get('/lowongan/{id}', [WebLowonganController::class, 'show'])->name('lowongan.show');


Route::middleware('auth')->group(function () {

    // Show edit profile page
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    // Update basic profile info
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    // Update profile picture
    Route::post('/profile/picture', [ProfileController::class, 'updatePicture'])
        ->name('profile.update.picture');

    // Update password
    Route::post('/profile/password', [ProfileController::class, 'updatePassword'])
        ->name('profile.update.password');

});





/*
|--------------------------------------------------------------------------
| ROUTE PERUSAHAAN
|--------------------------------------------------------------------------
*/
Route::prefix('/company')->middleware(['auth', 'role:company'])->group(function () {

    Route::get('/profil', [PerusahaanController::class, 'index'])
        ->name('company.profile.index');

    Route::post('/profil/update', [PerusahaanController::class, 'update'])
        ->name('company.profile.update');

    Route::get('/lowongan', [LowonganController::class, 'index'])
        ->name('company.lowongan.index');

    Route::get('/lowongan/create', [LowonganController::class, 'create'])
        ->name('company.lowongan.create');

    Route::post('/lowongan/store', [LowonganController::class, 'store'])
        ->name('company.lowongan.store');

    Route::get('/lamaran', [LamaranController::class, 'index'])
        ->name('company.lamaran.index');

    Route::post('/lamaran/{id}/update', [LamaranController::class, 'update'])
        ->name('company.lamaran.update');
});

// Register Multi-Step
Route::get('/register/step1', [WebAuthController::class, 'registerStep1'])->name('register.step1');
Route::post('/register/step1', [WebAuthController::class, 'registerStep1Post']);

Route::get('/register/step2', [WebAuthController::class, 'registerStep2'])->name('register.step2');
Route::post('/register/step2', [WebAuthController::class, 'registerStep2Post']);

Route::get('/register/step3', [WebAuthController::class, 'registerStep3'])->name('register.step3');
Route::post('/register/step3', [WebAuthController::class, 'registerStep3Post']);

Route::get('/register/step4', [WebAuthController::class, 'registerStep4'])->name('register.step4');
Route::post('/register/complete', [WebAuthController::class, 'completeRegister'])->name('register.complete');



Route::middleware(['auth'])->group(function () {
    Route::get('/notification', [NotificationController::class, 'index'])
        ->name('notification.index');
});

Route::get('/application-progress', function () {
    return view('application-progress');
})->middleware('auth')->name('application.progress');

Route::get('/skill-gap-overview', function () {
    return view('skill-gap-overview');
})->middleware('auth')->name('skill.gap');

// ===================== JOBS FINDER (STATIC UI) =====================
Route::get('/jobs', function () {
    return view('jobs-finder'); // resources/views/jobs-finder.blade.php
})->name('jobs.finder');


Route::middleware('auth')->group(function () {
    Route::get('/my-courses', [RekomendasiKursusController::class, 'index'])->name('courses.index');
});

Route::get('/my-courses/recommended', function () {
        return view('course.mycourses_recommended'); // file static yg barusan dibuat
    })->name('mycourses.recommended');

Route::get('/saved-jobs', function () {
    return view('saved-jobs');
})->name('saved.jobs')->middleware('auth');

Route::get('/skill-profile', function () {
        return view('skill-profile');
    })->name('skill.profile');

    Route::get('/skill-profile/hard-skill/edit', function () {
        return view('skill-profile-edit-hard');
    })->name('skill.hard.edit');

    Route::get('/skill-profile/soft-skill/edit', function () {
        return view('skill-profile-edit-soft');
    })->name('skill.soft.edit');

    Route::get('/skill-profile/experience/edit', function () {
        return view('skill-profile-edit-experience');
    })->name('skill.experience.edit');

    Route::get('/skill-profile/review-cv', function () {
        return view('review-cv');
    })->name('skill.review.cv');


    Route::get('/jobs/ui-ux-designer', function () {
    return view('job-detail');
})->name('jobs.detail.uiux');


Route::get('/jobs/applied/personal', function () {
    return view('job-apply-personal');
})->name('jobs.apply.personal');

Route::get('/jobs/applied/upload', function () {
    return view('job-apply-upload');
})->name('jobs.apply.upload');

Route::get('/jobs/applied/review', function () {
    return view('job-apply-review');
})->name('jobs.apply.review');

Route::get('/jobs/applied/success', function () {
    return view('job-apply-succes');
})->name('jobs.apply.success');
