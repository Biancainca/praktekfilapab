<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function detail($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post.detail', ['post' => $post]);
    }

    public function list()
    {
        $post_list = Post::where('published', true)->orderByDesc('published_at')->paginate(10);
        return view('post.list', compact('post_list'));
    }


    public function author()
    {
        $post = Post::where('published', false)->firstOrFail();
        return view('post.penulis', compact('post'));
    }
}
