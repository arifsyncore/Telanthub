<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = "tags";
    protected $fillable = [
        'name', 'slug'    
    ];

    public function tags(){
    	return $this->hasOne(TagPost::class,'tag_id');
    }
}
