<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'harga',
        'stock',
        'deskripsi',
        'image', // Tambahkan image ke fillable agar dapat disimpan ke database
    ];
    
}
