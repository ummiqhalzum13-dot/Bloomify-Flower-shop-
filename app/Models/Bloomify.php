<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bloomify extends Model
{
    // Mengatur nama tabel secara manual karena tidak memakai akhiran 's'
    protected $table = 'Bloomify';

    // Daftarkan kolom yang diizinkan untuk diisi data (Mass Assignment)
    protected $fillable = [
        'nama_bunga',
        'harga',
        'stok',
        'kategori'
    ];
}
