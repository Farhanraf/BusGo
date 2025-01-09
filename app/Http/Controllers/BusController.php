<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    // Menampilkan halaman manage bus
    public function index()
    {
        $buses = Bus::all();
        return view('admin.managebus', compact('buses'));
    }

    public function edit($id)
    {
        $bus = Bus::findOrFail($id); // Cari bus berdasarkan ID
        return view('admin.managebus.edit', compact('bus')); // Tampilkan view form edit
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_bus' => 'required|string|max:100',
            'kapasitas' => 'required|integer',
            'plat_nomor' => 'required|string|max:50|unique:bus,plat_nomor,' . $id . ',id_bus',
            'supir' => 'required|string|max:100',
        ]);

        // Cari bus berdasarkan ID dan update data
        $bus = Bus::findOrFail($id);
        $bus->update($request->all());

        // Redirect ke halaman Manage Bus dengan pesan sukses
        return redirect()->route('bus.index')->with('success', 'Data bus berhasil diperbarui.');
    }

    // Menyimpan data bus baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_bus' => 'required|string|max:100',
            'kapasitas' => 'required|integer',
            'plat_nomor' => 'required|string|max:50|unique:bus,plat_nomor',
            'supir' => 'required|string|max:100',
        ]);

        Bus::create($validated);
        return redirect()->back()->with('success', 'Bus berhasil ditambahkan.');
    }

    // Menghapus data bus
    public function destroy($id)
    {
        $bus = Bus::findOrFail($id);
        $bus->delete();
        return redirect()->back()->with('success', 'Bus berhasil dihapus.');
    }
}
