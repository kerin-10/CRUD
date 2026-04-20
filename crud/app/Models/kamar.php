<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kamar extends Model
{
    protected $table = 'kamar';

    protected $fillable = [
        'nomor_kamar',
        'kategori',
        'harga_sewa',
        'fasilitas',
        'status',
    ];

    public function dataSewa(): HasMany
    {
        return $this->hasMany(DataSewa::class, 'kamar_id');
    }
    public function penghuni()
{
    return $this->hasMany(Penghuni::class);
}
}