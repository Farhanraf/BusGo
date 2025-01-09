<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Admin extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    protected $table = 'admins'; // Pastikan nama tabel sesuai dengan tabel di database
    protected $fillable = ['username', 'password']; // Nama tabel di database

    protected $primaryKey = 'id_admin'; // Primary key

    public $timestamps = true; // Mengaktifkan created_at dan updated_at

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
