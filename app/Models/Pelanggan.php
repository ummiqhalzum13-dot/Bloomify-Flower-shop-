<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    // Mendaftarkan kolom yang boleh diisi data
    protected $fillable = [
        'nama_pelanggan',
        'nomor_telepon',
        'alamat'
    ];
}
