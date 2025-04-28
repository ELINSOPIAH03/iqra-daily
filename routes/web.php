<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing.index');
});

Route::name('auth.')->prefix('auth')->group(function () {
    Route::view('/', 'pages.auth.login')->name('login');
});

Route::name('landing.')->prefix('landing')->group(function () {
    Route::view('/', 'pages.landing.index')->name('index');
});