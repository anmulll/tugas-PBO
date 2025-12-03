<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PerusahaanSeeder extends Seeder
{
    public static array $ids = []; // Simpan ID perusahaan

    public function run(): void
    {
        $id1 = Str::uuid()->toString();
        $id2 = Str::uuid()->toString();

        self::$ids = [$id1, $id2];

        DB::table('perusahaan')->updateOrInsert(
            ['id_perusahaan' => $id1],
            [
                'nama_perusahaan' => 'PT. Tech Indonesia',
                'deskripsi' => 'Perusahaan teknologi terkemuka di Indonesia',
                'logo_url' => 'https://via.placeholder.com/200x200?text=Tech+Indo',
            ]
        );

        DB::table('perusahaan')->updateOrInsert(
            ['id_perusahaan' => $id2],
            [
                'nama_perusahaan' => 'PT. Digital Nusantara',
                'deskripsi' => 'Pionir solusi digital di Asia Tenggara',
                'logo_url' => 'https://via.placeholder.com/200x200?text=Digital+Nusantara',
            ]
        );
    }
}
