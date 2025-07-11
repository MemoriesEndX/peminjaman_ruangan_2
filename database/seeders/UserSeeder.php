<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Seeder untuk user biasa
        User::create([
            'name' => 'Ikmal Usamah',
            'email' => 'ikmal.usamah@gmail.com',
            'password' => Hash::make('76517601'),
            'role' => 'user', // pastikan ada kolom 'role' di tabel users
        ]);

        // Seeder untuk admin
        User::create([
            'name' => 'Admin Untirta',
            'email' => '3337230079@untirta.ac.id',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
    }
}
