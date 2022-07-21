<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";
    protected $fillable = [
        'category_id', 'title', 'slug', 'image', 'body', 'status'. 'published_at'
    ];
    public function category(){ 
        return $this->belongsTo(Category::class);
    }
    public function comment(){ 
        return $this->belongsTo(CommentBlogs::class);
    }
    public function tags(){ 
        return $this->hasMany(TagPost::class,'post_id');
    }
   

}
