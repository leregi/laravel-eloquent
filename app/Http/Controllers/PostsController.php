<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    public function index() {

        return view('posts', [
            'post' => Post::all()
        ]);
    }
    public function show($slug) 
    {
        // $post = \DB::table('posts')->where('slug', $slug)->first();       
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts', [
            'post' => $post
        ]);
    }
}
