<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::name('auth.')->prefix('auth')->group(function () {
    Route::view('/', 'pages.auth.login')->name('login');
});