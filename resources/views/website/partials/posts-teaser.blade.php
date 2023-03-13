<section class="py-12 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-4xl text-urbe font-serif font-bold capitalize">{{ __("Latest News") }}</h2>
    <p class="mt-4 text-slate-500">From our blog</p>

    <div class="mt-6 grid grid-cols-3 gap-8 text-left">
        @forelse (\App\Models\Post::whereNotNull('published_at')->orderBy('published_at', 'DESC')->take(3)->get() as $post)
        <article>
            <a href="{{ route('blog.post.show', ['slug' => $post->slug]) }}" class="col-span-3 md:col-span-1">
                <img src="{{ asset($post->featured_image) }}" alt="{{ $post->featured_image_alt_text }}"
                    class="w-full aspect-video md:aspect-square rounded-lg object-cover object-center">
                <p class="mt-2 font-medium text-lg text-urbe flex items-center justify-between">{{ $post->title }}</p>
                <p class="mt-2 text-sm">{{ strip_tags( preg_replace("/[\[{\(].*?[\]}\)]/", '', str($post->content)->limit(60)) ) }}[...]</p>
            </a>
        </article>
        @empty

        @endforelse
    </div>
    <div class="mt-12">
        <a href="#" class="px-5 py-2.5 border rounded-lg text-base text-slate-600 hover:bg-sky-500 hover:text-white hover:border-sky-500 transition-all">Read more articles</a>
    </div>
</section>
