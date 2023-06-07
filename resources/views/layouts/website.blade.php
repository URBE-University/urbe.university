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
            <meta property="og:description" content="{{ $settings->description }}" />
            <meta property="og:image"       content="{{ asset($settings->card_image) ?? '' }}" />
        @endif

        @if (request()->routeIs('blog.post.show'))
            <meta property="og:url"         content="{{ request()->url() }}" />
            <meta property="og:type"        content="article" />
            <meta property="og:title"       content="{{ $page->title ?? $title }}" />
            <meta property="og:description" content="{{ Str::of($page->content)->limit(120) }}" />
            <meta property="og:image"       content="{{ asset($page->featured_image) ?? '' }}" />
        @endif

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=playfair-display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-white text-slate-800 antialiased">
        @include('website.partials.subnavbar')
        @include('website.partials.navbar')
        @yield('content')
        @include('website.partials.footer')

        @stack('modals')

        @livewireScripts
    </body>
</html>
