<?php
// Repository untuk operasi database lowongan

namespace App\Repositories;

use App\Models\Lowongan;

class LowonganRepository extends BaseRepository
{
    public function __construct(Lowongan $model)
    {
        $this->model = $model;
        $this->primaryKey = 'id_lowongan';
    }

    public function getByPerusahaan(string $idPerusahaan)
    {
        return $this->model->where('id_perusahaan', $idPerusahaan)->get();
    }

    public function searchBySkills(array $skills)
    {
        return $this->model->get()->filter(function ($lowongan) use ($skills) {
            $matchingSkills = array_intersect(
                array_map('strtolower', $lowongan->skill_dibutuhkan),
                array_map('strtolower', $skills)
            );
            return count($matchingSkills) > 0;
        });
    }
}