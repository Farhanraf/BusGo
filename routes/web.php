<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::post('/login/user', [AuthController::class, 'loginUser']);
Route::post('/login/admin', [AuthController::class, 'loginAdmin']);


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

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::post('/login/user', [AuthController::class, 'loginUser']);
Route::post('/login/admin', [AuthController::class, 'loginAdmin']);
Route::post('/register', [AuthController::class, 'register']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
