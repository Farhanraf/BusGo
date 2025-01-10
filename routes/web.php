<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\JadwalController;

Route::post('/login/user', [AuthController::class, 'loginUser']);
Route::post('/login/admin', [AuthController::class, 'loginAdmin']);
Route::post('/login/admin', [AdminController::class, 'login'])->name('admin.login');

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

Route::get('/managerutes', function () {
    return view('admin/managerute');
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
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/manage', [AdminController::class, 'manage'])->name('admin.manage');
});


Route::get('/manage-user', [UserController::class, 'index'])->name('manageuser');
Route::get('/manageuser', [UserController::class, 'index'])->name('manageuser');
Route::get('/manageuser', [UserController::class, 'index'])->name('manageuser.index');
Route::get('/manageuser/create', [UserController::class, 'create'])->name('manageuser.create');
Route::post('/manageuser', [UserController::class, 'store'])->name('manageuser.store');
Route::get('/manageuser/{id}/edit', [UserController::class, 'edit'])->name('manageuser.edit');
Route::put('/manageuser/{id}', [UserController::class, 'update'])->name('manageuser.update');
Route::delete('/manageuser/{id}', [UserController::class, 'destroy'])->name('manageuser.destroy');

Route::middleware(['auth'])->group(function () {
    Route::get('/manage-users', [UserController::class, 'index'])->name('manageusers.index');
});



Route::get('/managebus', [BusController::class, 'index'])->name('bus.index');
Route::post('/managebus', [BusController::class, 'store'])->name('bus.store');
Route::delete('/managebus/{id}', [BusController::class, 'destroy'])->name('bus.destroy');
// Route untuk menampilkan form edit bus
Route::get('/bus/{id}/edit', [BusController::class, 'edit'])->name('bus.edit');

// Route untuk mengupdate data bus
Route::put('/bus/{id}', [BusController::class, 'update'])->name('bus.update');


// Menampilkan halaman manage jadwal dan tabel jadwal
Route::get('/managejadwal', [JadwalController::class, 'index'])->name('jadwal.index');

// Menyimpan data jadwal baru
Route::post('/managejadwal', [JadwalController::class, 'store'])->name('jadwal.store');

// Menghapus data jadwal berdasarkan ID
Route::delete('/managejadwal/{id}', [JadwalController::class, 'destroy'])->name('jadwal.destroy');

// Menampilkan form edit jadwal
Route::get('/jadwal/{id}/edit', [JadwalController::class, 'edit'])->name('jadwal.edit');

// Mengupdate data jadwal berdasarkan ID
Route::put('/jadwal/{id}', [JadwalController::class, 'update'])->name('jadwal.update');


// Menampilkan halaman utama manage rute
Route::get('/managerute', [RuteController::class, 'index'])->name('rute.index');

// Menyimpan data rute baru
Route::post('/managerute', [RuteController::class, 'store'])->name('rute.store');

// Menghapus data rute berdasarkan ID
Route::delete('/managerute/{id}', [RuteController::class, 'destroy'])->name('rute.destroy');

// Menampilkan form edit rute berdasarkan ID
Route::get('/rute/{id}/edit', [RuteController::class, 'edit'])->name('rute.edit');

// Mengupdate data rute berdasarkan ID
Route::put('/rute/{id}', [RuteController::class, 'update'])->name('rute.update');


Route::get('/cek-jadwal', [JadwalController::class, 'cekJadwal'])->name('cek-jadwal');
Route::post('/jadwal/pesan', [JadwalController::class, 'pesan'])->name('jadwal.pesan');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
