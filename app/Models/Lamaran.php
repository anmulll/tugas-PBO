<?php
// Model untuk tabel lamaran pekerjaan

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    protected $table = 'lamaran';
    protected $primaryKey = 'id_lamaran';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'id_lamaran',
        'status',
        'id_user',
        'id_lowongan',
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_user', 'uid');
    }

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'id_lowongan', 'id_lowongan');
    }
}