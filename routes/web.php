<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\EnsureUserIsAuthenticated;

Route::get('/', function () {
    return view('pages.landing.index');
});

Route::name('auth.')->prefix('auth')->group(function () {
    Route::view('/', 'pages.auth.login')->name('login');
    Route::view('/registrasi', 'pages.auth.registrasi')->name('registrasi');

    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::name('landing.')->prefix('landing')->group(function () {
    Route::view('/', 'pages.landing.index')->name('index');
});

// Route::name('dashboard.')->prefix('dashboard')->group(function () {
//     Route::view('/', 'pages.dashboard.index')->name('index');
// });

Route::name('dashboard.')->prefix('dashboard')->middleware('auth.custom')->group(function () {
    Route::view('/', 'pages.dashboard.index')->name('index');
});

