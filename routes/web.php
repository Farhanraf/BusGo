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

Route::get('/cektravel', function () {
    return view('cektravel');
});

Route::get('/destinasi', function () {
    return view('destinasi');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/admin', function () {
    return view('admin/index');
});