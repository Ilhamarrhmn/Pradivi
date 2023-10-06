<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'namaacara', 'jenisacara', 'tglmulai', 'tglselesai', 'tempat', 'pelaksana', 'foto'
    ];
}
