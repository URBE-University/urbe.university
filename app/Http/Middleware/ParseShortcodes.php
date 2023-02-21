<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ParseShortcodes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $cta = View::make('website.partials.cta');
        $posts_teaser = View::make('website.partials.posts-teaser');
        $events_teaser = View::make('website.partials.events-teaser');

        $content = str_replace([
            '[cta]',
            '[posts_teaser]',
            '[events_teaser]',
            ], [
                $cta->render(),
                $posts_teaser->render(),
                $events_teaser->render()
            ],
            $response->getContent()
        );

        $response->setContent($content);
        return $response;
    }
}
