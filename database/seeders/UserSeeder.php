<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['username' => 'admin1', 'password' => Hash::make('password1')],
            ['username' => 'admin2', 'password' => Hash::make('password2')],
            ['username' => 'admin3', 'password' => Hash::make('password3')],
        ]);
    }
}
