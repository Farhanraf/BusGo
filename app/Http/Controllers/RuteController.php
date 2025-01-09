<?php

namespace App\Http\Controllers;

use App\Models\Rute;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    // Menampilkan halaman manage rute
    public function index()
    {
        $rutes = Rute::all();
        return view('admin.managerute', compact('rutes'));
    }

    // Menyimpan data rute baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kota_awal' => 'required|string|max:100',
            'kota_tujuan' => 'required|string|max:100',
            'jarak' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        Rute::create($validated);
        return redirect()->back()->with('success', 'Rute berhasil ditambahkan.');
    }

    // Menghapus data rute
    public function destroy($id)
    {
        $rute = Rute::findOrFail($id);
        $rute->delete();
        return redirect()->back()->with('success', 'Rute berhasil dihapus.');
    }
}
