<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\SiteSettings;

class EventController extends Controller
{
    public $settings;

    public function __construct()
    {
        $this->settings = SiteSettings::first();
    }

    /**
     * Display all upcoming events
     */
    public function index()
    {
        $upcomingEvents = Event::whereNotNull('published_at')
            ->where('start_date', '>=', today()->addDay())
            ->orderBy('start_date', 'ASC')
            ->paginate(9);
        $pastEvents = Event::whereNotNull('published_at')
            ->where('start_date', '<=', today()->subDay())
            ->orderBy('start_date', 'ASC')
            ->paginate(9);

        $currentEvents = Event::whereNotNull('published_at')
            ->whereBetween('start_date', [today()->format('Y-m-d\TH:i'), today()->endOfDay()->format('Y-m-d\TH:i')])
            ->orderBy('start_date', 'ASC')
            ->paginate(9);

        return view('website.events.index', [
            'upcomingEvents' => $upcomingEvents,
            'pastEvents' => $pastEvents,
            'currentEvents' => $currentEvents,
            'settings' => $this->settings,
        ]);
    }

    public function show($slug)
    {
        return view('website.events.show', [
            'event' => Event::whereNotNull('published_at')->where('slug', $slug)->firstorfail(),
            'settings' => $this->settings,
        ]);
    }
}
