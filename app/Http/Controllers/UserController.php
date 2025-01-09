<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // 1. Menampilkan daftar pengguna (READ)
    public function index()
    {
        $users = User::all(); // Mengambil semua data pengguna
        return view('admin.manageusers', compact('users'));
    }

    // 2. Menampilkan form tambah pengguna (CREATE)
    public function create()
    {
        return view('admin.createuser');
    }

    // 3. Menyimpan data pengguna baru (STORE)
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('manageusers.index')->with('success', 'User berhasil ditambahkan');
    }

    // 4. Menampilkan form edit pengguna (EDIT)
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edituser', compact('user'));
    }

    // 5. Mengupdate data pengguna (UPDATE)
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|max:255|unique:users,username,' . $id,
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'username' => $request->username,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('manageusers.index')->with('success', 'User berhasil diperbarui');
    }

    // 6. Menghapus data pengguna (DELETE)
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('manageusers.index')->with('success', 'User berhasil dihapus');
    }
}
