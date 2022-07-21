<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagPost extends Model
{
    use HasFactory;
    protected $table = "tagspost";
    protected $fillable = [
        'post_id', 'tag_id'    
    ];
    public function post(){
    	return $this->belongsTo(Post::class);
    }

    public function tag(){
    	return $this->belongsTo(Tag::class);
    }
}
