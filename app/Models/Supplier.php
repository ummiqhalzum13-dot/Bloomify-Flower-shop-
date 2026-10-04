<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'nama_supplier',
        'nama_tanaman_pasokan',
        'kontak_supplier'
    ];
}
