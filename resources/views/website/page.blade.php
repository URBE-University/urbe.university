@extends('layouts.website', ['settings' => $settings, 'page' => $page])

<div class="">
    @section('content')
        <div class="w-full bg-center bg-no-repeat bg-cover" style="background-image: url({{ $page->featured_image ? asset($page->featured_image) : "https://urbeuniversity.edu/static_assets/page-header-bg.webp" }})">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="text-white py-12 sm:py-24">
                <h1 class="border-l-8 border-l-white pl-4 text-5xl font-extrabold">{!! eval("?>$page->title") !!}</h1>
                <p class="mt-6 text-lg md:text-xl">{!! eval("?>$page->subtitle") !!}</p>
                </div>
            </div>
        </div>

        <div class="w-full py-12 sm:py-24">
            <div class="mx-auto max-w-6xl px-4 text-center sm:px-6 lg:px-8">

                <div class="grid grid-cols-12 items-start gap-6">
                    <main @class([
                        'col-span-12 text-left w-full',
                        'md:col-span-9' => $page->menu_id
                    ])>
                        {!! eval("?>" . $page_content) !!}
                    </main>

                    @if ($page->menu_id)
                        <aside class="col-span-12 hidden justify-end text-base md:col-span-3 md:flex">
                            <ul class="text-left">
                                <li class="mt-2">
                                    <p class="border-l-urbe text-urbe border-l-4 pl-2 text-xl font-semibold">{{__("In this section")}}</p>
                                </li>
                                @forelse (\App\Models\Menu::where('parent', $page->menu_id)->where('location', 'sidenav')->orderBy('order', 'asc')->get() as $link)
                                    <li class="mt-2">
                                        <a href="{{ $link->url }}" @if ($link->opens_in_new_tab) target="_blank" @endif class="transition-all hover:text-sky-500 hover:underline">{{$link->label}}</a>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </aside>
                    @endif
                </div>
            </div>
        </div>
        <div class="pb-12">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <p class="text-sm text-slate-600">
                    {{ __("This page was last updated on ") . \Carbon\Carbon::parse($page->updated_at)->format('M d, Y') }}. {{__("You can refer to our")}} <a href="{{ route('catalog.show') }}" target="_blank" class="underline text-sky-500">Catalog</a> {{__("to find the latest information on this topic")}}.
                </p>
            </div>
        </div>
    @endsection
</div>
