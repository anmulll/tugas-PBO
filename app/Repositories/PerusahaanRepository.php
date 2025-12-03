<?php
// Repository untuk operasi database perusahaan

namespace App\Repositories;

use App\Models\Perusahaan;

class PerusahaanRepository extends BaseRepository
{
    public function __construct(Perusahaan $model)
    {
        $this->model = $model;
        $this->primaryKey = 'id_perusahaan';
    }
}