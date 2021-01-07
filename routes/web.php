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
});

// Logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::view('/about-us', 'pages.about');
Route::view('/affiliate', 'pages.affiliate');
Route::view('/awards', 'pages.awards');
Route::view('/play', 'pages.play');
Route::view('/lottery', 'pages.lottery');
Route::view('/tournaments', 'pages.tournaments');
Route::view('/bonus', 'pages.bonus');
Route::view('/faq', 'pages.faq');
Route::view('/how-it-work', 'pages.how-it-work');
Route::view('/terms-conditions', 'pages.terms-conditions');
Route::view('/contact', 'pages.contact');
Route::view('/cart', 'pages.cart');
Route::view('/test', 'pages.test');
Route::view('/result', 'pages.result');