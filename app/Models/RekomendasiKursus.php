<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekomendasiKursus extends Model
{
    protected $table = 'rekomendasi_kursus';

    protected $fillable = [
        'namaSkill',
        'judulKursus',
        'url'
    ];
}
