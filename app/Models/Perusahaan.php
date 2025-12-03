<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'perusahaan';
    protected $primaryKey = 'idPerusahaan';

    protected $fillable = ['user_id', 'namaPerusahaan', 'deskripsi', 'logoUrl'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lowongan()
    {
        return $this->hasMany(Lowongan::class, 'idPerusahaan', 'idPerusahaan');
    }
}
