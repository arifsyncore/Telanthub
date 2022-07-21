<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswas";
    protected $fillable = [
        'nama_lengkap', 
        'nim', 
        'pendidikan_terakhir', 
        'tgl_lahir', 
        'jekel', 
        'id_layanan',
        'id_program',
        'email',
        'no_telp',
        'perguruan_tinggi',
        'fakultas',
        'prodi',
        'gelar',
        'mulai_bulan',
        'mulai_thn',
        'akhir_bulan',
        'akhir_thn',
    ];
}
