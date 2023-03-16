<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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

    public function show($post)
    {
        $post = Post::where('slug', $post)->whereNotNull('published_at')->firstorfail();
        $categories = $post->categories->modelKeys();
        $relatedPosts = Post::whereHas('categories', function ($q) use ($categories) {
            $q->whereIn('categories.id', $categories);
        })->where('id', '<>', $post->id)->take(4)->get();

        return view('website.blog.show', [
            'post' => $post,
            'categories' => $post->categories,
            'relatedPosts' => $relatedPosts,
            'settings' => $this->settings,
        ]);
    }

    public function author($author)
    {
        $author = User::where('name', 'like', '%' . ucwords( str_replace('-', ' ', $author) ) . '%' )->firstorfail();

        return view('website.blog.author', [
            'author' => $author,
            'settings' => $this->settings,
        ]);
    }

    public function category($category)
    {
        $category = Category::where('slug', $category)->firstorfail();

        return view('website.blog.category', [
            'category' => $category,
            'settings' => $this->settings,
        ]);
    }
}
