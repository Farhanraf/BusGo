<?php

// app/Http/Controllers/PemesananController.php

namespace App\Http\Controllers;

use App\Models\Pemesanan;

class PemesananController extends Controller
{
    /**
     * Tampilkan semua data pemesanan.
     */
    public function index()
    {
        // Mengambil semua data pemesanan beserta relasi user dan jadwal
        $pemesanans = Pemesanan::with(['user', 'jadwal'])->get();

        // Mengirimkan data ke view
        return view('admin.order', compact('pemesanans'));
    }
    
}
