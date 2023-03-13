<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
            'settings' => $this->settings,
            'posts' => Post::whereNotNull('published_at')->orderBy('published_at', 'DESC')->paginate(9),
            'categories' => Category::take(12)->get(),
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
