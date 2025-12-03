<?php
// Repository untuk operasi database lamaran

namespace App\Repositories;

use App\Models\Lamaran;

class LamaranRepository extends BaseRepository
{
    public function __construct(Lamaran $model)
    {
        $this->model = $model;
        $this->primaryKey = 'id_lamaran';
    }

    public function getByUser(string $userId)
    {
        return $this->model->where('id_user', $userId)->with('lowongan.perusahaan')->get();
    }

    public function getByLowongan(string $idLowongan)
    {
        return $this->model->where('id_lowongan', $idLowongan)->with('pengguna')->get();
    }
}