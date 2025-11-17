<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SatuanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.auth');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/barang', [BarangController::class, 'index']);
Route::delete('/barang/hapus/{id}', [BarangController::class, 'destroy']);
Route::get('/satuan', [SatuanController::class, 'index']);
Route::delete('/satuan/hapus/{id}', [SatuanController::class, 'destroy']);
Route::get('/peran', [RoleController::class, 'index']);
Route::delete('/peran/hapus/{id}', [RoleController::class, 'destroy']);
