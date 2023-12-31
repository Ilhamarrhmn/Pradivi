<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'nama', 'kontak', 'lokasi', 'image', 'instansi', 'deskripsi'
    ];

    protected $table = "emergencys";
}
