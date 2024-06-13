<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Metode untuk memeriksa apakah pengguna adalah admin
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    // Metode untuk memeriksa apakah pengguna adalah pembeli
    public function isPembeli()
    {
        return $this->role === 'pembeli';
    }

    // Metode untuk memeriksa apakah pengguna adalah pemasok
    public function isPemasok()
    {
        return $this->role === 'pemasok';
    }
}
