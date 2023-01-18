<div>
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Users</h2>
            @can('user:create')
                @livewire('admin.user.invite')
            @endcan
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg">

                @forelse ($users as $user)
                    <a href="{{ (auth()->user()->id === $user->id) ? route('profile.show') : route('admin.user.edit', ['user' => $user]) }}" class="flex items-center justify-between p-4 rounded-lg hover:bg-slate-50">
                        <div class="flex items-center space-x-3">
                            <img class="h-24 w-24 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                            <div>
                                <p class="text-slate-600 text-sm font-light">{{ $user->email }}</p>
                                <h1 class="text-2xl font-bold">{{ $user->name }}</h1>
                                @if ($user->isAdmin())
                                    <p class="mt-2 inline-block text-sm bg-slate-700 px-2 py-0.5 text-white rounded">Admin</p>
                                @endif
                            </div>
                        </div>
                        <div class="flex items-center justify-end space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                    </a>
                @empty
                    <div class="text-center p-12">
                        <img src="{{ asset('images/undraw_adventure_map_hnin.svg') }}" alt="no users found image" class="w-48 aspect-auto mx-auto">
                        <h1 class="mt-12 text-2xl font-semibold">No users found</h1>
                        @can('user:create')
                            <div class="mt-12">
                                @livewire('admin.user.invite')
                            </div>
                        @endcan
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</div>
