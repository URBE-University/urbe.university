<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Catalog;
use App\Models\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Blade;

class WebsiteController extends Controller
{
    public $settings;

    public function __construct()
    {
        $this->settings = SiteSettings::first();
    }


    public function home ()
    {
        return view('website.home', [
            'settings' => $this->settings,
        ]);
    }

    /**
     * Handle and return dynamic pages that are
     * created through the dashboard.
     */
    public function page($url)
    {
        $page = Page::where('url', $url)->first();

        if (is_null($page)) {
            return $this->redirect($url);
        }

        return view('website.page', [
            'page' => $page,
            'page_content' => Blade::compileString($page->content),
            'settings' => $this->settings,
        ]);
    }

    /**
     * Elegantly manage website redirects
     */
    public function redirect($url)
    {
        $dbUrl = DB::table('redirects')->where('source_url', $url)->first();
        if ($dbUrl) {
            return redirect()->away($dbUrl->destination_url, $dbUrl->code);
        } else {
            abort(404, "The page you are trying to access does not exist or is no longer accessible.");
        }
    }

    /**
     * Display catalog based on year
     */
    public function showCatalog(Request $request)
    {
        $catalog = NULL;

        $catalog = (!is_null($request->year))
            ? Catalog::where('year', $request->year)->firstorfail()
            : Catalog::latest()->first();

        return view('website.catalog', [
            'catalog' => $catalog,
            'settings' => $this->settings,
        ]);
    }
}
