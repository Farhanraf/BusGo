<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;

    protected $table = 'rute'; // Nama tabel di database
    protected $primaryKey = 'id_rute'; // Primary key

    protected $fillable = [
        'kota_awal', 'kota_tujuan', 'jarak', 'harga'
    ];
}
