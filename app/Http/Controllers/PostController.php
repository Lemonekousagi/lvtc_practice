<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        //$test = $post->orderBy('updated_at', 'DESC')->limit(2)->toSql();
        //dump($test); 
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(3)]);
    }
}
