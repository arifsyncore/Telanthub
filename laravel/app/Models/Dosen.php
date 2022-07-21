<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = "dosen";
    protected $fillable = [
        'nama_lengkap', 
        'nidn',  
        'tgl_lahir', 
        'jekel', 
        'email',
        'no_telp',
        'perguruan_tinggi',
        'fakultas',
        'gelar',
        'penelitian',
    ];
}
