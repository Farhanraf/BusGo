<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Login untuk User
    public function loginUser(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Cek login untuk user
        if (Auth::guard('web')->attempt($request->only('username', 'password'))) {
            return redirect('/mainview')->with('success', 'Login User berhasil');
        }

        return back()->with('error', 'Username atau password salah');
    }

    public function loginAdmin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Cek login untuk admin
        if (Auth::guard('admin')->attempt($request->only('username', 'password'))) {
            return redirect('/admin/dashboard')->with('success', 'Login Admin berhasil');
        }

        return back()->with('error', 'Username atau password salah');
    }


    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'email'    => 'required|email|unique:users',
        ]);

        // Membuat user baru
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email'    => $request->email,  // Menambahkan email ke dalam data
        ]);

        // Redirect ke halaman login dengan flash message
        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login');
    }
}
