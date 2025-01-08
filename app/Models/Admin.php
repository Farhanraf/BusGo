<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins'; // Nama tabel di database

    protected $primaryKey = 'id_admin'; // Primary key

    public $timestamps = true; // Mengaktifkan created_at dan updated_at

    protected $fillable = [
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
