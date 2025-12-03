<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lowongan;
use Database\Seeders\PerusahaanSeeder;
use Illuminate\Support\Str;

class LowonganSeeder extends Seeder
{
    public static array $ids = [];

    public function run(): void
    {
        $perusahaanIds = PerusahaanSeeder::$ids;

        $id1 = Str::uuid()->toString();
        $id2 = Str::uuid()->toString();

        self::$ids = [$id1, $id2];

        Lowongan::updateOrCreate(
            ['id_lowongan' => $id1],
            [
                'judul' => 'Frontend Developer',
                'skill_dibutuhkan' => ['HTML', 'CSS', 'JavaScript', 'Vue.js'],
                'id_perusahaan' => $perusahaanIds[0],
            ]
        );

        Lowongan::updateOrCreate(
            ['id_lowongan' => $id2],
            [
                'judul' => 'UI/UX Designer',
                'skill_dibutuhkan' => ['Figma', 'Adobe XD', 'Design Thinking'],
                'id_perusahaan' => $perusahaanIds[1],
            ]
        );
    }
}
