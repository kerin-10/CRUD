<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    protected $table = 'penghunis';

    protected $fillable = [
        'nama_lengkap',
        'nik',
        'umur',
        'kamar_id',
        'no_hp',
        'email',

    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}