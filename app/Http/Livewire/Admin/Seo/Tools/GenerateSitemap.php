<?php

namespace App\Http\Livewire\Admin\Seo\Tools;

use App\Models\Post;
use Livewire\Component;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapIndex;
use Illuminate\Support\Facades\Log;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Component
{
    public $modal;

    public function render()
    {
        return view('livewire.admin.seo.tools.generate-sitemap');
    }

    public function save()
    {
        try {
            SitemapGenerator::create( config('app.url') )->writeToFile(public_path('/') . 'pages_sitemap.xml');
            Sitemap::create( config('app.url') )->add(Post::all())->writeToFile(public_path('/') . 'posts_sitemap.xml');
            SitemapIndex::create()
                ->add('/pages_sitemap.xml')
                ->add('/posts_sitemap.xml')
                ->writeToFile(public_path('/') . 'sitemap.xml');

            session()->flash('flash.banner', 'Sitemap successfully updated!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.seo.home');
    }
}
