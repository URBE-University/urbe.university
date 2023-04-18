@extends('layouts.website', ['settings' => $settings, 'page' => $post])

@section('content')
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <div class="text-center">
            <h1 class="text-4xl font-serif font-bold text-urbe">{{ $post->title }}</h1>
            <p class="mt-6 text-base font-mono">Written by <a class="underline" href="{{ route('blog.author.show', ['author' => str($post->user->name)->slug()]) }}">{{ $post->user->name }}</a> &middot; {{ Carbon\Carbon::parse($post->published_at)->format('F d, Y') }} &middot; {{ round(str_word_count($post->content) / 200) }} min read</p>
            <div class="mt-6 w-full mx-auto text-center">
                @forelse ($categories as $category)
                    <a href="{{ route('blog.category.show', ['category' => $category->slug]) }}"
                        class="px-3 py-1 rounded-full bg-slate-100 hover:bg-slate-200 text-sm font-mono text-gray-800 transition-all"
                    >{{ $category->slug }}</a>
                @empty

                @endforelse
            </div>
            <img src="{{ asset($post->featured_image) }}" alt="{{ $post->featured_image_alt_text }}" class="mt-12 w-full aspect-video object-cover object-center rounded-xl shadow">
        </div>

        <div class="mt-12 prose prose-sky prose-headings:font-sans prose-img:rounded-xl prose-img:shadow max-w-full">
            {!! str($post->content)->markdown() !!}
        </div>

        <div class="mt-6 border-t border-t-gray-200"></div>

        <div class="mt-6">
            <h2 class="text-xl font-bold font-sans">You may also like</h2>

            <div class="mt-6 grid grid-cols-4 gap-8">
                @forelse ($relatedPosts as $related)
                    <div class="col-span-3 md:col-span-1">
                        <div class="w-full">
                            <a href="{{ route('blog.post.show', ['slug' => $related->slug]) }}" aria-label="Link to post">
                                <img src="{{ asset($related->featured_image) }}" alt="{{ $related->featured_image_alt_text }}" class="w-full aspect-auto rounded-md shadow">
                            </a>
                            <div class="mt-2">
                                <a href="{{ route('blog.post.show', ['slug' => $related->slug]) }}">
                                    <h2 class="font-medium text-urbe text-base underline">{{ $related->title }}</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
