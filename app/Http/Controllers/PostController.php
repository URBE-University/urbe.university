<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('website.blog.index', [
            'posts' => Post::whereNotNull('published_at')->orderBy('published_at', 'DESC')->get()
        ]);
    }

    public function post($post)
    {
        return view('website.blog.show', [
            'post' => Post::where('slug', $post)->whereNotNull('published_at')->firstorfail()
        ]);
    }
}
