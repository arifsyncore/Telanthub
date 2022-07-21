<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MhsKeahlian extends Model
{
    use HasFactory;
    protected $table = "mhskeahlian";
    protected $fillable = [
        'mhs_id', 'keahlian' 
    ];
}
