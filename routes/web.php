<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

Route::group(['middleware' => 'guest'], function () {
    // Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    
    // Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

// Halaman depan
Route::get('/', [DepanController::class, 'index'])->name('index');

Route::group(['middleware' => 'auth'], function () {
    // Dashboard
    Route::get('/secret', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/secret', [DashboardController::class, 'store'])->name('store');
});

// Logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
