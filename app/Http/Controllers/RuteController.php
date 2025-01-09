<?php

namespace App\Http\Controllers;

use App\Models\Rute;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    /**
     * Menampilkan halaman utama dengan tabel rute.
     */
    public function index()
    {
        $rutes = Rute::all();
        @dd($rutes);
        return view('admin.managerute', compact('rutes'));
    }

    /**
     * Menyimpan data rute baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kota_awal' => 'required|max:100',
            'kota_tujuan' => 'required|max:100',
            'jarak' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        Rute::create([
            'kota_awal' => $request->kota_awal,
            'kota_tujuan' => $request->kota_tujuan,
            'jarak' => $request->jarak,
            'harga' => $request->harga,
        ]);

        return redirect()->route('rute.index')->with('success', 'Rute berhasil ditambahkan');
    }

    public function edit($id)
    {
        $rute = Rute::findOrFail($id);
        return view('editrute', compact('rute'));
    }

    // Mengupdate data rute
    public function update(Request $request, $id)
    {
        $request->validate([
            'kota_awal' => 'required|max:100',
            'kota_tujuan' => 'required|max:100',
            'jarak' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        $rute = Rute::findOrFail($id);
        $rute->update($request->all());
        return redirect()->route('rute.index')->with('success', 'Rute berhasil diperbarui');
    }

    /**
     * Menghapus data rute berdasarkan ID.
     */
    public function destroy($id)
    {
        $rute = Rute::findOrFail($id);
        $rute->delete();

        return redirect()->route('rute.index')->with('success', 'Rute berhasil dihapus');
    }
}
