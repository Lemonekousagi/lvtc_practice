<?php

namespace App\Http\Controllers;

use App\Models\Post;
//use Illuminate\Http\Request;
use App\Http\Requests\PostRequest; 

class PostController extends Controller
{
    public function index(Post $post)
    {
        //$test = $post->orderBy('updated_at', 'DESC')->limit(2)->toSql();
        //dump($test); 
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(3)]);
    }

    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        /*
        $post->title = $input["title"];
        $post->body = $input["body"];
        $post->save();
        */
        return redirect('/posts/' . $post->id);
    }
}
