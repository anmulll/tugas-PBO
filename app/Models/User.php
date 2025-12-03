<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role'];

    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',  // <-- WAJIB
        ];
    }

    public function pengguna()
    {
        return $this->hasOne(Pengguna::class, 'user_id', 'id');
    }

    public function perusahaan()
    {
        return $this->hasOne(Perusahaan::class, 'user_id', 'id');
    }
}
