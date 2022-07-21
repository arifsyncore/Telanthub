<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenInformasi extends Model
{
    use HasFactory;
    protected $table = "doseninformasi";
    protected $fillable = [
        'dosen_id', 'informasi'  
    ];
}
