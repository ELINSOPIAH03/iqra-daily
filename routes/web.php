<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing.index');
});

Route::name('auth.')->prefix('auth')->group(function () {
    Route::view('/', 'pages.auth.login')->name('login');
    Route::view('/registrasi', 'pages.auth.registrasi')->name('registrasi');
});

Route::name('landing.')->prefix('landing')->group(function () {
    Route::view('/', 'pages.landing.index')->name('index');
});

Route::name('dashboard.')->prefix('dashboard')->group(function () {
    Route::view('/', 'pages.dashboard.index')->name('index');
});