<section class="py-12 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-4xl text-urbe font-serif font-bold capitalize">{{ __("Latest News") }}</h2>
    <p class="mt-4 text-slate-500">From our blog</p>

    <div class="mt-6 grid grid-cols-3 gap-8 text-left">
        @forelse (\App\Models\Post::whereNotNull('published_at')->orderBy('published_at', 'DESC')->take(3)->get() as $post)
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
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>

    <div class="mt-12">
        <a href="{{ route('blog.post.index') }}" class="px-5 py-2.5 border rounded-md text-base text-slate-600 hover:bg-sky-500 hover:text-white hover:border-sky-500 transition-all">Read more articles</a>
    </div>
</section>
