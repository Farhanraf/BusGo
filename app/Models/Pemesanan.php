<?php

// app/Models/Pemesanan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'pemesanan';

    // Kolom yang dapat diisi
    protected $fillable = [
        'id_user',
        'id_jadwal',
        'nomor_kursi',
        'status_pemesanan',
        'status_pembayaran',
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi dengan Jadwal
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }
}
