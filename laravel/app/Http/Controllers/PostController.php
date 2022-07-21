<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CommentBlogs;
use App\Models\Post;
use App\Models\Tag;
use App\Models\TagPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $categorys = Category::all();
        $tags = Tag::all();
        return view('admin.post.index',[
            'posts'=>$posts,
            'categorys'=>$categorys,
            'tags'=>$tags,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $tags = $request->tags;
        // dd(count($tags));
        $messages = [
            'required' => 'Data Harus Disi Semua',
            'image' => 'File Harus Berupa Gambar',
            'mimes' => 'Format Gambar Salah',
            'max' => 'Gambar Harus Kurang Dari 2 MB',
        ];
        $request->validate([
            'title' => 'required',
            'body' =>'required',
            'tags' =>'required',
            'image'=>'required|image|mimes:jpg,png,gif,svg,|max:2048',   
        ],$messages);
        $path = $request->file('image')->store('public/img/post');
        $post = new Post;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->category_id = $request->category_id;
        $post->body = $request->body;
        $post->image = $path;
        $post->published_at = date('Y-m-d h:i:s');
        $post->status = "publish";
        $post->save();

        $post_id = $post->id;
        $tags = $request->tags;
        $count = count($tags);
        
        for($x=0;$x<$count;$x++){
            $tag = new TagPost;
            $tag->post_id = $post_id;
            $tag->tag_id = $tags[$x];
            $tag->save();
        }
        // Alert::success('Congrats', 'You\'ve Successfully Insert Data');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'required' => 'Data Harus Disi Semua',
        ];
        $request->validate([
            'title' => 'required',
            'body' =>'required',
        ],$messages);   
        $post = Post::find($id);
        if($request->category_id != NULL){
            $post->category_id = $request->category_id;   
        }
        if($request->status != NULL){
            $post->status = $request->status;
            $post->published_at = date('Y-m-d h:i:s');
        }
        if($request->hasFile('image')){
            $messages2 = [
                'required' => 'Data Harus Disi Semua',
                'image' => 'File Harus Berupa Gambar',
                'mimes' => 'Format Gambar Salah',
                'max' => 'Gambar Harus Kurang Dari 2 MB',
            ];
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ],$messages2);
            Storage::delete($post->image);
            $path = $request->file('image')->store('public/img/post');
            $post->image = $path;
        }
        $post->title = $request->title;   
        $post->body = $request->body;   
        $post->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        Storage::delete($post->image);
        $post->delete();
        return redirect()->back();
    }

    public function hapus_komen($id)
    {
        $comment = CommentBlogs::findOrFail($id);
        $comment->delete();
        return redirect()->back();
    }
}
