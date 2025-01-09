<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Menampilkan data admin
    public function index()
    {
        $admins = Admin::all();  // Mengambil semua data admin
        return view('admin.index', compact('admins'));
    }

    public function manageadmin()
    {
        $admins = Admin::all();  // Mengambil semua data admin
        return view('admin.manageadmin', compact('admins'));
    }

    // Menyimpan data admin baru
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:admins',
            'password' => 'required|min:6'
        ]);

        Admin::create([
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('manage.admin')->with('success', 'Admin berhasil ditambahkan');
    }


    // Menampilkan form edit admin
    public function edit($id_admin)
    {
        // Mencari admin berdasarkan ID
        $admin = Admin::findOrFail($id_admin);

        // Menampilkan form edit dengan data admin
        return view('admin.edit', compact('admin'));
    }


    // Mengupdate data admin
    public function update(Request $request, $id_admin)
{
    $admin = Admin::find($id_admin);

    if (!$admin) {
        return redirect()->back()->with('error', 'Admin tidak ditemukan.');
    }

    // Update username dan password jika ada
    $admin->username = $request->input('username');
    if ($request->input('password')) {
        $admin->password = bcrypt($request->input('password')); // Encrypt password
    }

    $admin->save();

    // Redirect ke halaman daftar admin dengan pesan sukses
    return redirect()->route('admin.manage')->with('success', 'Admin berhasil diperbarui.');
}



    // Menghapus data admin
    public function destroy($id_admin)
    {
        $admin = Admin::findOrFail($id_admin);
        $admin->delete();

        return redirect()->route('manage.admin')->with('success', 'Admin berhasil dihapus');
    }
}
