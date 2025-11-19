<?php
// Main seeder untuk populate database

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PerusahaanSeeder::class,
            PenggunaSeeder::class,
            LowonganSeeder::class,
            LamaranSeeder::class,
            RekomendasiKursusSeeder::class,
        ]);
    }
}