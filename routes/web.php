<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::get('/order', function () {
    return view('admin/order');
});

Route::get('/managebus', function () {
    return view('admin/managebus');
});

Route::get('/managejadwal', function () {
    return view('admin/managejadwal');
});
Route::get('/manageadmin', function () {
    return view('admin/manageadmin');
});
Route::get('/manageuser', function () {
    return view('admin/manageusers');
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


Route::get('/manageadmin', [AdminController::class, 'manageadmin'])->name('admin.manageadmin');

Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/{id_admin}', [AdminController::class, 'destroy'])->name('admin.destroy');
Route::get('/manage-admin', [AdminController::class, 'index'])->name('manage.admin');



// Route untuk halaman edit admin
Route::get('/admin/{id_admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');

// Route untuk update data admin
Route::put('admin/{id_admin}', [AdminController::class, 'update'])->name('admin.update');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // route lainnya...
});

Route::get('/manage-user', [UserController::class, 'index'])->name('manageuser');
Route::get('/manageuser', [UserController::class, 'index'])->name('manageuser');
Route::get('/manageuser', [UserController::class, 'index'])->name('manageuser.index');
Route::get('/manageuser/create', [UserController::class, 'create'])->name('manageuser.create');
Route::post('/manageuser', [UserController::class, 'store'])->name('manageuser.store');
Route::get('/manageuser/{id}/edit', [UserController::class, 'edit'])->name('manageuser.edit');
Route::put('/manageuser/{id}', [UserController::class, 'update'])->name('manageuser.update');
Route::delete('/manageuser/{id}', [UserController::class, 'destroy'])->name('manageuser.destroy');