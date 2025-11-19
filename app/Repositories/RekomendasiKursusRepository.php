<?php
// Repository untuk operasi database rekomendasi kursus

namespace App\Repositories;

use App\Models\RekomendasiKursus;

class RekomendasiKursusRepository extends BaseRepository
{
    public function __construct(RekomendasiKursus $model)
    {
        $this->model = $model;
        $this->primaryKey = 'id';
    }

    public function getBySkill(string $skill)
    {
        return $this->model->where('nama_skill', 'like', '%' . $skill . '%')->get();
    }
}