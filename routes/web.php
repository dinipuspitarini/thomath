<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\LihatNilaiController;


Route::get('/', [LandingController::class, 'index']);
Route::get('/register-wali', [LandingController::class, 'registerWaliView']);
Route::get('/login-wali', [LandingController::class, 'loginWaliView']);

Route::post('/register-wali', [RegisterController::class, 'registerWali']);
Route::post('/login-wali', [LoginController::class, 'loginWali']);

Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::get('/konsultasi', [KonsultasiController::class, 'view']);
Route::post('/konsultasi', [KonsultasiController::class, 'store']);

Route::get('/lihat-nilai/{id}', [LihatNilaiController::class, 'view']);
