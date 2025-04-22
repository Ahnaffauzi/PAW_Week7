<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galaxy extends Model
{
    protected $fillable = [
        'nama_galaksi',
        'nama_blackhole',
        'jumlah_bintang',
        'jarak_dari_bumi',
        'tipe_galaksi'
    ];
    
}
