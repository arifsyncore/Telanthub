<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CommentBlogs;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('published_at','desc')->paginate(5);
        $recent_post = Post::orderBy('published_at','desc')->limit(3)->get();
        //dd($post);
        $data = [
            'posts' => $posts,
            'recent_post' => $recent_post,
        ];
        return view('blog.content.index')->with($data);
    }

    public function single($slug)
    {
        $posts = Post::whereSlug($slug)->get();
        $posts2 = Post::whereSlug($slug)->first();
        $id_post = $posts2->id;
        $id_category = $posts2->category_id;
        $first_post = Post::orderBy('published_at','desc')->whereNotIn('id',[$id_post])->limit(1)->get();
        $recent_post = Post::orderBy('published_at','desc')->limit(3)->get();
        $other_post = Post::orderBy('published_at','desc')->where('category_id',$id_category)->whereNotIn('id',[$id_post])->limit(2)->get();
        $comments = CommentBlogs::where('post_id',$id_post)->get();
        $data = [
            'posts'=>$posts,
            'first_post'=>$first_post,
            'recent_post' => $recent_post,
            'other_post' => $other_post,
            'posts2' => $posts2,
            'comments' => $comments,
        ];
        return view('blog.single.index')->with($data);
    }

    public function comment(Request $request, $id)
    {
        $comment = new CommentBlogs;
        $comment->name = $request->name;
        $comment->post_id = $id;
        $comment->email = $request->email;
        $comment->website = $request->website;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->back();
    }

    public function category($slug)
    {
        $categorys = Category::whereSlug($slug)->first();
        $id = $categorys->id;
        $posts = Post::where('category_id',$id)->paginate(5);
        $first_post = Post::orderBy('published_at','desc')->where('category_id',$id)->limit(1)->get();
        $recent_post = Post::orderBy('published_at','desc')->where('category_id',$id)->limit(3)->get();
        $data = [
            'posts' =>$posts,
            'categorys' => $categorys,
            'first_post'=>$first_post,
            'recent_post'=>$recent_post,
        ];
        return view('blog.category.index')->with($data);
    }
    public function tag($slug)
    {
        $tags = Tag::whereSlug($slug)->first();
        $id = $tags->id;
        $posts = Post::join('tagspost','posts.id','=','tagspost.post_id')->where('tag_id',$id)->paginate(5);
        $first_post = Post::join('tagspost','posts.id','=','tagspost.post_id')->orderBy('published_at','desc')->where('tag_id',$id)->limit(1)->get();
        $recent_post = Post::join('tagspost','posts.id','=','tagspost.post_id')->orderBy('published_at','desc')->where('tag_id',$id)->limit(3)->get();
        $data = [
            'posts' =>$posts,
            'tags' => $tags,
            'first_post'=>$first_post,
            'recent_post'=>$recent_post,
        ];
        return view('blog.tag.index')->with($data);
    }
}
