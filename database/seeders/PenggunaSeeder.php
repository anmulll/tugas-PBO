<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\PerusahaanSeeder;

class PenggunaSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil UUID perusahaan dari PerusahaanSeeder
        $perusahaanIds = PerusahaanSeeder::$ids;

        // Admin (tanpa perusahaan)
        Pengguna::updateOrCreate(
            ['uid' => 'USR001'],
            [
                'nama' => 'Admin Sistem',
                'email' => 'admin@company.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'skills' => ['Laravel', 'PHP', 'Database'],
                'id_perusahaan' => null,
            ]
        );

        // User contoh
        Pengguna::updateOrCreate(
            ['uid' => 'USR002'],
            [
                'nama' => 'User Contoh',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user123'),
                'role' => 'user',
                'skills' => ['Design','UI/UX'],
                'id_perusahaan' => $perusahaanIds[0],
            ]
        );
    }
}
