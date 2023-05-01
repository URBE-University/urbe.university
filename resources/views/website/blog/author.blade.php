@extends('layouts.website', ['settings' => $settings, 'title' => 'Articles by ' . $author->name])
@section('content')

<div class="w-full h-56" style="background-image: url({{ asset('static_assets/page-header-bg.webp') }})">
    <div class="h-full flex items-center justify-center">
        <h1 class="text-5xl font-extrabold text-white">{{ __("Articles by ") . $author->name }}</h1>
    </div>
    <div class="bg-slate-100">
        <div class="max-w-7xl mx-auto">
            @livewire('website.breadcrumbs')
        </div>
    </div>
</div>

<div class="py-6"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="py-6"></div>
    <div class="grid grid-cols-3 gap-8">
        @forelse ($author->posts as $post)
            <div class="col-span-3 md:col-span-1">
                <div class="w-full">
                    <a href="{{ route('blog.post.show', ['slug' => $post->slug]) }}" aria-label="Link to post">
                        <img src="{{ asset($post->featured_image) }}" alt="{{ $post->featured_image_alt_text }}" class="w-full aspect-auto rounded-md shadow">
                    </a>
                    <div class="mt-2">
                        <a href="{{ route('blog.post.show', ['slug' => $post->slug]) }}">
                            <h2 class="font-medium text-urbe text-xl underline">{{ $post->title }}</h2>
                        </a>
                        <p class="mt-2 text-base">{{ strip_tags(str($post->content)->markdown()->limit(92)) }}</p>
                        <div class="mt-4 flex items-center space-x-3">
                            <img src="{{ asset($post->user->profile_photo_url) }}" alt="{{ $post->user->name }}"
                                class="flex-none w-10 h-10 object-cover object-center rounded-full">
                            <div class="text-sm font-mono">
                                <p class="text-sky-500 font-medium">{{ __("Written by") }} <a class="underline" href="{{ route('blog.author.show', ['author' => str($post->user->name)->slug()]) }}">{{ $post->user->name }}</a></p>
                                <p>{{ Carbon\Carbon::parse($post->published_at)->format('F d, Y') }} &middot; <a class="underline" href="{{ route('blog.post.show', ['slug' => $post->slug]) }}">{{ __("Read article") }}</a></p>
                            </div>
                        </div>
                        <div class="mt-2">
                            @forelse ($post->categories as $postCategory)
                                <a href="{{ route('blog.category.show', ['category' => $postCategory->slug]) }}" class="px-3 py-1 rounded-full bg-slate-100 hover:bg-slate-200 text-sm text-black transition-all">{{ $postCategory->slug }}</a>
                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>
</div>

<div class="py-6"></div>
@endsection
