<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = [
        'nota_pesanan',
        'nama_bunga_dipesan',
        'jumlah_beli',
        'total_bayar'
    ];
}
