<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected $fillable = [
        'namaumkm', 'namaproduk', 'harga', 'kategori', 'berat', 'fotoproduk', 'deskripsi', 'whatsapp', 'facebook', 'instagram', 'tokoonline',
    ];
}
