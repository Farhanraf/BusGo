<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;


class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    protected $table = 'users';


    protected $fillable = ['username', 'password'];

    protected $hidden = ['password', 'remember_token'];
}

$user = Auth::user();
