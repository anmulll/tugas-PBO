<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $table = 'lowongan';
    protected $primaryKey = 'idLowongan';

    protected $fillable = [
        'judul',
        'skillDibutuhkan',
        'idPerusahaan'
    ];

    protected $casts = [
        'skillDibutuhkan' => 'array'
    ];

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'idPerusahaan', 'idPerusahaan');
    }

    public function lamaran()
    {
        return $this->hasMany(Lamaran::class, 'idLowongan', 'idLowongan');
    }
}
