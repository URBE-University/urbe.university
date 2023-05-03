<?php

namespace App\Http\Controllers;

use App\Models\Page;
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
        $page = Page::where('url', $url)->firstorfail();

        return view('website.page', [
            'page' => $page,
            'page_content' => Blade::compileString($page->content),
            'settings' => $this->settings,
        ]);
    }

    /**
     * Elegantly manage website redirects
     */
    public function redirect(Request $request)
    {
        $dbUrl = DB::table('redirects')->where('source_url', '/' . $request['uri'])->first();
        if ($dbUrl) {
            return redirect()->away($dbUrl->destination_url, $dbUrl->code);
        } else {
            abort(404, "The page you are trying to access does not exist or is no longer accessible.");
        }
    }
}
