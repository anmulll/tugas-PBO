<?php
// Routes untuk API endpoints

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\RekomendasiKursusController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);

    Route::apiResource('perusahaan', PerusahaanController::class);
    Route::apiResource('lowongan', LowonganController::class);
    Route::apiResource('lamaran', LamaranController::class);
    Route::apiResource('rekomendasi-kursus', RekomendasiKursusController::class);

    Route::get('/lowongan/{id}/analisa', [LowonganController::class, 'analisaKesesuaian']);
    Route::get('/lowongan-search', [LowonganController::class, 'searchBySkills']);
    Route::get('/my-applications', [LamaranController::class, 'myApplications']);
    Route::get('/rekomendasi/{idLowongan}', [RekomendasiKursusController::class, 'rekomendasiUntukLowongan']);
});