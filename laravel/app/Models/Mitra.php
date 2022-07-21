<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $table = "mitra";
    protected $fillable = [
        'nama_lengkap', 
        'jekel', 
        'email',
        'no_telp',
        'nama_perusahaan',
        'industri',
        'devisi',
        'posisi',
        'alamat',
    ];
}
