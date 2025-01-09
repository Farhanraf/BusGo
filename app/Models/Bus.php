<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $table = 'bus'; // Nama tabel di database

    protected $primaryKey = 'id_bus'; // Primary key

    protected $fillable = [
        'nama_bus', 'kapasitas', 'plat_nomor', 'supir'
    ];
}
