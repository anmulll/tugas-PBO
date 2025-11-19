<?php
// Routes untuk web interface

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebAuthController;
use App\Http\Controllers\WebPerusahaanController;
use App\Http\Controllers\WebLowonganController;
use App\Http\Controllers\WebLamaranController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect()->route('login.form');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [WebAuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [WebAuthController::class, 'register'])->name('register');
    Route::get('/login', [WebAuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [WebAuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [WebAuthController::class, 'logout'])->name('logout');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

    Route::get('/dashboard', [WebAuthController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/perusahaan', [WebPerusahaanController::class, 'index'])->name('perusahaan.index');
    Route::get('/lowongan', [WebLowonganController::class, 'index'])->name('lowongan.index');
    Route::get('/lowongan/{id}', [WebLowonganController::class, 'show'])->name('lowongan.show');
    Route::get('/lamaran', [WebLamaranController::class, 'index'])->name('lamaran.index');
});