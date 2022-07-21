<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentBlogs extends Model
{
    use HasFactory;
    protected $table = "commentblogs";
    protected $fillable = [
        'post_id', 'name', 'email', 'website', 'comment'
    ];
    public function post(){
    	return $this->hasMany(Post::class);
    }
}
