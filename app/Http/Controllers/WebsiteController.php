<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * Elegantly manage website redirects
     */
    public function redirect(Request $request)
    {
        $dbUrl = DB::table('redirects')->where('source_url', $request->getRequestUri())->first();
        if ($dbUrl) {
            return redirect()->away($dbUrl->destination_url, $dbUrl->code);
        } else {
            abort(404, "The page you are trying to access does not exist or is no longer accessible.");
        }
    }
}
