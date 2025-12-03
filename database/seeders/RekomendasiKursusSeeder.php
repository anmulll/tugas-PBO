<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RekomendasiKursus;

class RekomendasiKursusSeeder extends Seeder
{
    public function run(): void
    {
        RekomendasiKursus::updateOrCreate(
            ['nama_skill' => 'Laravel'],
            [
                'judul_kursus' => 'Belajar Laravel dari Dasar',
                'url' => 'https://example.com/laravel-course',
            ]
        );

        RekomendasiKursus::updateOrCreate(
            ['nama_skill' => 'UI/UX'],
            [
                'judul_kursus' => 'UI/UX Design Fundamental',
                'url' => 'https://example.com/uiux-course',
            ]
        );
    }
}
