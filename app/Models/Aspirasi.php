<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'telepon',
        'kelurahan',
        'kategori',
        'pesan',
        'status',
    ];
}
