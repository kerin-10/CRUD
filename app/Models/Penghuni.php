<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penghuni extends Model
{
    use HasFactory;

    protected $table = 'penghuni'; // tabel tetap ini

    protected $fillable = [
        'nama_lengkap',
        'nik',
        'umur',
        'no_kamar',
        'no_hp',
        'email'
    ];
}