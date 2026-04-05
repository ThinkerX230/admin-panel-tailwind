<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/users', function () {
    return view('pages.users');
});

Route::get('/settings', function () {
    return view('pages.settings');
});
