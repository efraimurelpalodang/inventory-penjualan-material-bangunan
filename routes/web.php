<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SatuanController;
use Illuminate\Support\Facades\Route;

// === HALAMAN LOGIN & LOGOUT ===
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])
    ->middleware('guest'); 

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])
    ->name('logout');

// Halaman utama kalau belum login 
Route::get('/', function () {
    return view('auth.login');
});

// === SEMUA HALAMAN YANG BUTUH LOGIN ===
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('/home', function () {
        return redirect('/dashboard');
    });

    Route::resource('barang', BarangController::class);
    Route::resource('satuan', SatuanController::class);
    Route::resource('role', RoleController::class);
    Route::resource('pengguna', PenggunaController::class);
});