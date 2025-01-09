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

    public function cekJadwal(Request $request)
    {
        // Mendapatkan semua data bus dan rute untuk ditampilkan di form
        $buses = Bus::all(); // Ambil semua data bus
        $rutes = Rute::all(); // Ambil semua data rute

        // Validasi input
        $request->validate([
            'asal-kota' => 'required|string',
            'tujuan-kota' => 'required|string',
            'id_bus' => 'nullable|exists:bus,id_bus',
            'id_rute' => 'nullable|exists:rute,id_rute',
        ]);

        // Mencari jadwal berdasarkan input
        $query = Jadwal::join('bus', 'jadwal.id_bus', '=', 'bus.id_bus')
            ->join('rute', 'jadwal.id_rute', '=', 'rute.id_rute')
            ->where('rute.kota_awal', 'like', '%' . $request->get('asal-kota') . '%')
            ->where('rute.kota_tujuan', 'like', '%' . $request->get('tujuan-kota') . '%');

        if ($request->has('id_bus') && $request->get('id_bus') != '') {
            $query->where('jadwal.id_bus', $request->get('id_bus'));
        }

        if ($request->has('id_rute') && $request->get('id_rute') != '') {
            $query->where('jadwal.id_rute', $request->get('id_rute'));
        }

        // Menampilkan hasil pencarian
        $jadwals = $query->select('jadwal.*', 'bus.nama_bus', 'rute.nama_rute', 'rute.kota_awal', 'rute.kota_tujuan')
            ->get();

        return view('cekJadwal', compact('jadwals', 'buses', 'rutes')); // Mengirimkan data ke view
    }
}
