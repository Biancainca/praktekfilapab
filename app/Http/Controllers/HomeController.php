<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    //
    public function index()
    {
        $featured_post = Post::first();
        $post_list = Post::where('published', true)->get()->sortByDesc('published_at')->take(6);
        return view('view.home.index', compact('featured_post', 'post_list'));
    }
}
