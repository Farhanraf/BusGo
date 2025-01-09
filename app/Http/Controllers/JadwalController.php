<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Bus;
use App\Models\Rute;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::with(['bus', 'rute'])->get();
        $buses = Bus::all();
        $rutes = Rute::all();
        return view('admin.managejadwal', compact('jadwals', 'buses', 'rutes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_bus' => 'required',
            'id_rute' => 'required',
            'waktu_berangkat' => 'required|date',
            'waktu_tiba' => 'required|date',
        ]);

        Jadwal::create([
            'id_bus' => $request->id_bus,
            'id_rute' => $request->id_rute,
            'waktu_berangkat' => $request->waktu_berangkat,
            'waktu_tiba' => $request->waktu_tiba,
        ]);

        return redirect()->route('jadwal.index');
    }

    public function destroy($id)
    {
        Jadwal::findOrFail($id)->delete();
        return redirect()->route('jadwal.index');
    }

    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $buses = Bus::all();
        $rutes = Rute::all();
        return view('editjadwal', compact('jadwal', 'buses', 'rutes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_bus' => 'required',
            'id_rute' => 'required',
            'waktu_berangkat' => 'required|date',
            'waktu_tiba' => 'required|date',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update([
            'id_bus' => $request->id_bus,
            'id_rute' => $request->id_rute,
            'waktu_berangkat' => $request->waktu_berangkat,
            'waktu_tiba' => $request->waktu_tiba,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui');
    }
}
