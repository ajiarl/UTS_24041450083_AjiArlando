<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\KecamatanController;
use Illuminate\Support\Facades\Route;

// Rute Publik Portal Warga
Route::get('/', [KecamatanController::class, 'index'])->name('kecamatan.home');
Route::post('/aspirasi', [KecamatanController::class, 'aspirasi'])->name('kecamatan.aspirasi');

// Rute Panel Administrator
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::patch('/aspirasi/{id}/status', [AdminDashboardController::class, 'updateStatus'])->name('aspirasi.status');
        Route::delete('/aspirasi/{id}', [AdminDashboardController::class, 'destroy'])->name('aspirasi.destroy');
    });
});
