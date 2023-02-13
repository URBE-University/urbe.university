<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class PageStatusController extends Controller
{

    // Gets new static routes if exist
    public static function updateSiteLinks()
    {
        $routes = Route::getRoutes();
        foreach ($routes as $route) {
            if (array_key_exists('prefix', $route->action)
                && $route->action['prefix'] == ''
                && $route->methods[0] == 'GET'
                && !str($route->uri)->contains(['password', 'two-factor', 'login', 'register'])
            ) {

                $request = Request::create($route->uri);
                $finalUrl = trim(explode("{", $request->getPathInfo())[0]);

                DB::table('static_routes')->updateOrInsert(
                    ['name' => $route->getName()],
                    ['route' => $finalUrl, 'active' => true, 'message' => '']
                );
            }
        }
    }

    // Check other database tables for urls, and make sure they are up and running.
    public static function checkStaticRoutes()
    {
        foreach (DB::table('static_routes')->get() as $staticRoute) {
            $url = config('app.url') . $staticRoute->route;
            $response = Http::get($url);
            DB::table('static_routes')->where('id', $staticRoute->id)->update([
                'code' => $response->status(),
                'message' => ($response->status() !== 200 && $response->status() !== 301 && $response->status() !== 302) ? "Something is wrong with this link." : "Endpoint operational"
            ]);
        }
    }
}
