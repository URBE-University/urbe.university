<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;

class PostController extends Controller
{

    public $settings;

    public function __construct()
    {
        $this->settings = SiteSettings::first();
    }

    public function index()
    {
        return view('website.blog.index', [
            'posts' => Post::whereNotNull('published_at')->orderBy('published_at', 'DESC')->get()
        ]);
    }

    public function post($post)
    {
        $post = Post::where('slug', $post)->whereNotNull('published_at')->firstorfail();
        // $cta = View::make('website.partials.cta');
        // $postTeaser = View::make('website.partials.posts-teaser');

        return view('website.blog.show', [
            'content' => $post->content,
            'settings' => $this->settings,
        ]);
    }
}

// str_replace([
//     '[cta]',
//     '[posts_teaser]'
// ], [
//     $cta->render(),
//     $postTeaser->render()
// ],
// $post->content),
