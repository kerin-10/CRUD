<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataSewa extends Model
{
    protected $table = 'data_sewa';

    protected $fillable = [
        'kamar_id',
        'penghuni_id',
        'tanggal_sewa',
        'tanggal_selesai',
        'lama_sewa_bulan',
        'total_bayar',
        'status_pembayaran',
        'keterangan',
    ];

    public function kamar(): BelongsTo
    {
        return $this->belongsTo(Kamar::class, 'kamar_id');
    }

    public function penghuni(): BelongsTo
    {
        return $this->belongsTo(Penghuni::class, 'penghuni_id');
    }
}