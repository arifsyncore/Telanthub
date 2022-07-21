<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MhsInformasi extends Model
{
    use HasFactory;
    protected $table = "mhsinformasi";
    protected $fillable = [
        'mhs_id', 'informasi'  
    ];
}
