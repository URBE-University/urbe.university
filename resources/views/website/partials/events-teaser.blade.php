@if (\App\Models\Event::whereNotNull('published_at')->where( 'start_date', '>=', today()->addDay() )->count() > 0)
    <section class="py-12 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl text-urbe font-serif font-bold capitalize">{{ __("Upcoming Events") }}</h2>

        <div class="mt-6">
            @forelse ( \App\Models\Event::whereNotNull('published_at')->where('start_date', '>=', today()->addDay())->orderBy('start_date', 'ASC')->take(3)->get() as $event)
                <a href="{{ route('events.show', ['slug' => $event->slug]) }}" class="block mt-6">
                    <div class="w-full border-2 border-slate-200 py-6 px-4 sm:px-6 lg:px-8 rounded-lg hover:border-sky-300 group transition-all">
                        <div class="md:flex items-center md:space-x-4">
                            <div class="flex-none pr-4 md:border-r h-full text-center text-xl text-slate-800">
                                <p class="text-2xl font-black group-hover:text-sky-500 transition-all">{{ Carbon\Carbon::parse($event->start_date)->format('M d') }}</p>
                                <time class="block mt-2 font-medium group-hover:text-sky-500 transition-all">{{ Carbon\Carbon::parse($event->start_date)->format('H:i A') }}</time>
                            </div>
                            <div class="text-left border-t md:border-t-0">
                                <p class="font-medium text-urbe text-xl">{{ $event->name }}</p>
                                <p class="mt-2 text-base">{{ str($event->description)->limit(120) }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
            @endforelse
        </div>

        <div class="mt-12">
            <a href="{{ route('events.index') }}"
                class="px-5 py-2.5 border rounded-lg text-base text-slate-600 hover:bg-sky-500 hover:text-white hover:border-sky-500 transition-all"
            >View all events</a>
        </div>
    </section>
@endif
