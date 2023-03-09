<div @click.away="open = false" class="flex flex-col w-full md:w-64 text-slate-400 bg-white flex-shrink-0"
    x-data="{ open: false }">
    <div class="flex-shrink-0 p-4 flex flex-row items-center justify-between">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('static_assets/urbe-logo.svg') }}" alt="URBE University logo" class="block h-10 w-auto">
        </a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                    clip-rule="evenodd">
                </path>
                <path x-show="open" fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd">
                </path>
            </svg>
        </button>
    </div>

    <nav :class="{'block': open, 'hidden': !open}"
        class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto text-slate-600"
        x-cloak>

        <a href="{{ route('dashboard') }}" @class([
            'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
            'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('dashboard'),
        ])>
            {{ __('Dashboard') }}
        </a>

        @can('post:view')
            <a href="{{ route('admin.posts') }}" @class([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('admin.posts'),
            ])>
                {{ __('Posts') }}
            </a>
        @endcan

        @can('post:view')
            <a href="{{ route('admin.categories') }}" @class([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('admin.categories'),
            ])>
                {{ __('Categories') }}
            </a>
        @endcan

        @can('event:view')
            <a href="{{ route('admin.events') }}" @class([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('admin.events'),
            ])>
                {{ __('Events') }}
            </a>
        @endcan

        @can('media:view')
            <a href="{{ route('admin.media') }}" @class([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('admin.media'),
            ])>
                {{ __('Media') }}
            </a>
        @endcan

        @can('page:view')
            <a href="{{ route('admin.pages') }}" @class([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('admin.pages'),
            ])>
                {{ __('Pages') }}
            </a>
        @endcan

        @can('menu:view')
            <a href="{{ route('admin.menus', ['selector' => 'navbar']) }}" @class([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('admin.menus'),
            ])>
                {{ __('Menu') }}
            </a>
        @endcan

        @can('seo:view')
            <a href="{{ route('admin.seo.home') }}" @class([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('admin.seo.home'),
            ])>
                {{ __('SEO') }}
            </a>
        @endcan

        <div class="my-6 md:mt-48"></div>

        <div class="text-xs font-medium tracking-wide text-gray-400 uppercase pl-2">
            {{ __('System Management') }}
        </div>

        @can('user:view')
            <a href="{{ route('admin.users') }}" @class([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('users'),
            ])>
                {{ __('Users') }}
            </a>
        @endcan

        <a href="{{ route('profile.show') }}"
            @class([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('profile-show'),
            ])>
            {{ __("Profile") }}
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" @class([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('Logout'),
            ]) onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
            </a>
        </form>
        {{-- Notification Center --}}
        {{-- @include('partials.cta') --}}
    </nav>
</div>
