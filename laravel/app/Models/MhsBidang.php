<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MhsBidang extends Model
{
    use HasFactory;
    protected $table = "mhsbidang";
    protected $fillable = [
        'mhs_id', 'bidang'  
    ];
}
