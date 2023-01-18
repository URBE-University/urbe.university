<div>
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Events</h2>
            @can('event:create')
                <a href="{{ route('admin.event.create') }}" class="btn-link">Add new event</a>
            @endcan
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg">

                @forelse ($events as $event)
                    <div class="flex items-center justify-between p-4 rounded-lg hover:bg-slate-50">
                        <div class="flex items-center space-x-3">
                            <img src="https://picsum.photos/200" alt="" class="w-20 h-20 aspect-square rounded-lg shadow">
                            <div class="">
                                <p class="text-slate-600 text-sm font-semibold">Author's name</p>
                                <a href="" target="_blank" title="Click to open article on a new tab.">
                                    <h1 class="text-2xl font-bold">Article's title here</h1>
                                </a>
                                <time class="text-slate-600 text-sm font-light" datetime="">January 18, 2023</time>
                            </div>
                        </div>
                        <div class="flex items-center justify-end space-x-3">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                    <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                </svg>
                            </a>
                            @livewire('admin.post.delete')
                        </div>
                    </div>
                @empty
                    <div class="text-center p-12">
                        <img src="{{ asset('images/undraw_adventure_map_hnin.svg') }}" alt="no events found image" class="w-48 aspect-auto mx-auto">
                        <h1 class="mt-12 text-2xl font-semibold">No events found</h1>
                        @can('event:create')
                            <div class="mt-12">
                                <a href="{{ route('admin.event.create') }}" class="btn-link">Add new event</a>
                            </div>
                        @endcan
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</div>
