<?php
// Repository untuk operasi database pengguna

namespace App\Repositories;

use App\Models\Pengguna;

class PenggunaRepository extends BaseRepository
{
    public function __construct(Pengguna $model)
    {
        $this->model = $model;
        $this->primaryKey = 'uid';
    }

    public function findByEmail(string $email): ?Pengguna
    {
        return $this->model->where('email', $email)->first();
    }
}