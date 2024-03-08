<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/svg" href="{{ asset('static_assets/u-logo.svg') }}">
        <title>{{ $page->title ?? $title . ' | ' . config('app.name', 'URBE University') }}</title>

        @if (request()->routeIs('home'))
            <meta property="og:url"         content="{{ request()->url() }}" />
            <meta property="og:type"        content="page" />
            <meta property="og:title"       content="{{ $settings->title }}" />
            <meta name="description" content="{{ $settings->description }}">
            <meta property="og:description" content="{{ $settings->description }}" />
            <meta property="og:image"       content="{{ asset($settings->card_image) ?? '' }}" />
            <meta name="google-site-verification" content="{{ $settings->google_search_id }}" />
            <meta name="msvalidate.01" content="{{ $settings->bing_webmaster_id }}" />
        @endif

        @if (request()->routeIs('blog.post.show'))
            <meta property="og:url"         content="{{ request()->url() }}" />
            <meta property="og:type"        content="article" />
            <meta property="og:title"       content="{{ $page->title ?? $title }}" />
            <meta name="description" content="{{ Str::of($page->content)->limit(165) }}">
            <meta property="og:description" content="{{ Str::of($page->content)->limit(120) }}" />
            <meta property="og:image"       content="{{ asset($page->featured_image) ?? '' }}" />
        @endif

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=playfair-display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Google Ads Tag --}}
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-700340760"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'AW-700340760');
        </script>

        {{-- Fathom Analytics --}}
        <script src="https://cdn.usefathom.com/script.js" data-site="FHSKFCYK" defer></script>

        <script type="text/javascript">
            (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
            })(window, document, "clarity", "script", "i97m7bmlcw");
        </script>
        {{-- This operation is risky, so make sure you don't include any harmful code here. --}}
        {!!\App\Models\SiteSettings::first()->custom_head_content !!}

    </head>
    <body class="font-sans bg-white text-slate-800 antialiased">
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZXH6TF2" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        {{-- Banners --}}
        @forelse (\App\Models\Banner::where('starts_at', '<=', today())->where('ends_at', '>=', today())->get() as $banner)
            <div class="w-full bg-yellow-400 text-black text-base">
                <div class="max-w-6xl mx-auto h-12 px-4 sm:px-6 lg:px-8">
                    <div class="h-full flex items-center prose">
                        {{ Illuminate\Mail\Markdown::parse($banner->content) }}
                    </div>
                </div>
            </div>
        @empty
        @endforelse
        {{-- Banners | End --}}

        @include('website.partials.subnavbar')
        @include('website.partials.navbar')
        @yield('content')
        @include('website.partials.footer')

        @include('website.partials.chat')

        @stack('modals')

        @livewireScripts
    </body>
</html>
