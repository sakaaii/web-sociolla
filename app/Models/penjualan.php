<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'tanggal_penjualan',
        'total_harga',
        'id_pelanggan',
    ];

    public function pelanggan()
    {
        return $this->belongsTo( Pelanggan::class, 'id_pelanggan' ,'id');
    }

    public function user()
    {
        return $this->belongsTo( User::class, 'id_user' ,'id');
    }

    public function detailpenjualan()
    {
        return $this->belongsTo( DetailPenjualan::class, 'id_detailpenjualan' ,'id');
    }
}

