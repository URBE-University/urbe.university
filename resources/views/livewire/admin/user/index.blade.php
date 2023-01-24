<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Users</h2>
            @can('user:create')
                @livewire('admin.user.invite')
            @endcan
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg">

                @forelse ($users as $user)
                    <a href="{{ (auth()->user()->id === $user->id) ? route('profile.show') : route('admin.user.edit', ['user' => $user]) }}"
                            @class([
                                'flex items-center justify-between p-4 hover:bg-slate-100',
                                'rounded-t-lg' => $loop->first,
                                'rounded-b-lg' => $loop->last,
                            ])>
                        <div class="flex items-center space-x-3">
                            <img class="h-20 w-20 rounded-full object-cover shadow" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                            <div>
                                <p class="text-slate-600 text-sm font-light">{{ $user->email }}</p>
                                <h1 class="text-2xl font-bold">{{ $user->name }}</h1>
                                @if ($user->isAdmin())
                                    <p class="mt-2 inline-block text-sm bg-indigo-500 px-2 py-0.5 text-white rounded">Admin</p>
                                @else
                                    <p class="mt-2 inline-block text-sm bg-slate-700 px-2 py-0.5 text-white rounded">User</p>
                                @endif
                                @if (!$user->is_active)
                                    <p class="mt-2 inline-block text-sm bg-yellow-200 px-2 py-0.5 text-yellow-700 rounded">Pending activation</p>
                                @endif
                                @if ($user->is_suspended)
                                    <p class="mt-2 inline-block text-sm bg-red-200 px-2 py-0.5 text-red-700 rounded">Account suspended</p>
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
