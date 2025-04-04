<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ObatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.app');
});

Route::get('/dokter/dashboard', function () {
    return view('dokter.index');
})->name('dokter.dashboard');

// Jika langsung mengarah ke view
// Route::get('/dokter/obat', function () {
//     return view('dokter.obat');
// });

// Jika menggunakan controller
Route::get('/dokter/obat', [ObatController::class, 'index']);
Route::get('/dokter/obat/create', [ObatController::class, 'create']);
Route::post('/dokter/obat', [ObatController::class, 'store']);
Route::get('/dokter/obat/{id}/edit', [ObatController::class, 'edit']);
Route::put('/dokter/obat/{id}', [ObatController::class, 'update']);
Route::delete('/dokter/obat/{id}', [ObatController::class, 'destroy']);

Route::get('/pasien/dashboard', function () {
    return view('pasien.index');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
    Route::get('/register', 'showRegisterForm')->name('register');
    Route::post('/register', 'register');
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
