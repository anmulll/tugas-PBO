<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    protected $table = 'lamaran';
    protected $primaryKey = 'idLamaran';

    protected $fillable = [
        'status',
        'idUser',
        'idLowongan'
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'idUser', 'idPengguna');
    }

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'idLowongan', 'idLowongan');
    }
}
