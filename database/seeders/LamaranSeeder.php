<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lamaran;
use Database\Seeders\LowonganSeeder;

class LamaranSeeder extends Seeder
{
    public function run(): void
    {
        $lowonganIds = LowonganSeeder::$ids;

        Lamaran::updateOrCreate(
            ['id_lamaran' => 'LA001'],
            [
                'status' => 'Pending',
                'id_user' => 'USR002',
                'id_lowongan' => $lowonganIds[0],
            ]
        );

        Lamaran::updateOrCreate(
            ['id_lamaran' => 'LA002'],
            [
                'status' => 'Accepted',
                'id_user' => 'USR002',
                'id_lowongan' => $lowonganIds[1],
            ]
        );
    }
}
