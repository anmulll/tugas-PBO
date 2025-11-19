<?php
// Model untuk tabel rekomendasi kursus

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekomendasiKursus extends Model
{
    protected $table = 'rekomendasi_kursus';

    protected $fillable = [
        'nama_skill',
        'judul_kursus',
        'url',
    ];
}