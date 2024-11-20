<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Show all posts
    public function index()
    {
        $posts = Post::with('comments')->get();
        return view('posts.index', compact('posts'));
    }

    // Show a single post with its comments
    public function show($id)
    {
        $post = Post::with('comments')->findOrFail($id);
        return view('posts.show', compact('post'));
    }
    public function getcomment(){
    
        $data=Post::with('Comments')->get();
        dd($data);
    }
}
