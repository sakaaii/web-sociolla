<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailpenjualan extends Model
{
    use HasFactory;
    protected $fillable =[
        'id_penjualan',
        'id_produk',
        'jumlah',
        'sub_total',
    ];

    // public function penjualan()
    // {
    //     return $this->hasMany( Penjualan:: class, 'id_nobon','id');
    // }
}
