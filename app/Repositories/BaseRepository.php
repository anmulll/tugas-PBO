<?php
// Base repository untuk operasi CRUD dasar

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

abstract class BaseRepository
{
    protected Model $model;
    protected string $primaryKey;

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById(string $id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        if (!isset($data[$this->primaryKey])) {
            $data[$this->primaryKey] = Str::uuid()->toString();
        }
        return $this->model->create($data);
    }

    public function update(string $id, array $data)
    {
        $record = $this->getById($id);
        $record->update($data);
        return $record->fresh();
    }

    public function delete(string $id): bool
    {
        return $this->getById($id)->delete();
    }
}