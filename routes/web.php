<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/mainview', function () {
    return view('mainview');
});

Route::get('/booking', function () {
    return view('booking');
});