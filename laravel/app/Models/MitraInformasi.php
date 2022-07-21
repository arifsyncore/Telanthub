<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraInformasi extends Model
{
    use HasFactory;
    protected $table = "mitrainformasi";
    protected $fillable = [
        'mitra_id', 'informasi'  
    ];
}
