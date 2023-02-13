<?php

namespace App\Http\Livewire\Admin\Seo\Tools;

use App\Http\Controllers\PageStatusController;
use App\Models\Post;
use App\Models\Event;
use Livewire\Component;
use App\Models\SiteSettings;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

class Monitor404 extends Component
{
    public $settings, $staticRoutes, $postRoutes, $eventRoutes;

    public function mount()
    {
        // (PageStatusController::updateSiteLinks());
        // (PageStatusController::checkStaticRoutes());

        $this->settings = SiteSettings::first();
        $this->staticRoutes = DB::table('static_routes')->get();
        $this->postRoutes = Post::get('slug');
        $this->eventRoutes = Event::get('slug');
    }

    public function render()
    {
        return view('livewire.admin.seo.tools.monitor404');
    }
}
