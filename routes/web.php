<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SettingController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\LogActivityController;

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return "Artisan success";
});

Route::group(['middleware' => 'guest'], function () {
    // Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    // Login
    Route::get('/admin_area', [LoginController::class, 'index'])->name('login');
    Route::post('/admin_area', [LoginController::class, 'store']);
});

// Halaman depan
Route::get('/', [DepanController::class, 'index'])->name('index');

Route::get('/all-result', [ResultController::class, 'index'])->name('result');

Route::group(['middleware' => 'auth'], function () {
    // Dashboard
    Route::get('/backend', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/backend', [DashboardController::class, 'store'])->name('store');
    Route::get('/backend/edit/{id}', [DashboardController::class, 'edit']);
    Route::post('/backend/update', [DashboardController::class, 'update'])->name('update');
    Route::post('/backend/delete/{id}', [DashboardController::class, 'delete']);
    Route::get('/backend/log-activity', [LogActivityController::class, 'index'])->name('log');

    Route::get('/backend/setting', [SettingController::class, 'index'])->name('setting');
    Route::put('/backend/setting/update', [SettingController::class, 'update'])->name('setting-update');
});

// Logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

// Route::view('/about-us', 'pages.about');
// Route::view('/affiliate', 'pages.affiliate');
// Route::view('/awards', 'pages.awards');
// Route::view('/play', 'pages.play');
// Route::view('/lottery', 'pages.lottery');
// Route::view('/tournaments', 'pages.tournaments');
// Route::view('/bonus', 'pages.bonus');
// Route::view('/faq', 'pages.faq');
// Route::view('/how-it-work', 'pages.how-it-work');
// Route::view('/terms-conditions', 'pages.terms-conditions');
// Route::view('/contact', 'pages.contact');
// Route::view('/cart', 'pages.cart');
// Route::view('/test', 'pages.test');
// Route::view('/result', 'pages.result');