<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';
    
    protected $fillable = [
        'id_bus',
        'id_rute',
        'waktu_berangkat',
        'waktu_tiba',
    ];

    public function bus()
    {
        return $this->belongsTo(Bus::class, 'id_bus');
    }

    public function rute()
    {
        return $this->belongsTo(Rute::class, 'id_rute');
    }
    
    
}
