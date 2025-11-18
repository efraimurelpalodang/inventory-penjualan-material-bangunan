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
Route::resource('barang', BarangController::class); 
Route::resource('satuan', SatuanController::class); 
Route::resource('role', RoleController::class); 
