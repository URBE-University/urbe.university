<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight"><span class="text-slate-600">Users / </span>{{$user->name}}</h2>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-5xl mx-auto bg-white rounded-lg shadow">
            <div class="pt-6 px-4 sm:px-6 lg:px-8 rounded-t-lg">
                <img src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" class="rounded-full h-20 w-20 object-cover">
                <h1 class="mt-6 text-4xl font-bold">{{ $user->name }}</h1>
                <p>{{ $user->email }}</p>
                <div class="mt-6">
                    <p class="text-lg font-medium">Permissions</p>
                    @forelse ($user->permissions as $permission)
                        <p class="text-sm">{{ $permission }}</p>
                    @empty
                    @endforelse
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end space-x-4 bg-slate-100 py-4 px-4 sm:px-6 lg:px-8 rounded-b-lg">
                <x-secondary-button wire:click="$toggle('modal')">Update permissions</x-secondary-button>
                @can('user:update')
                    @if ($user->permissions)
                        @livewire('admin.user.suspend', ['user' => $user])
                    @endif
                @endcan
                @can('user:delete')
                    @livewire('admin.user.delete', ['user' => $user])
                @endcan
            </div>
        </div>
    </div>

    {{-- Update permissions modal --}}
    <x-dialog-modal wire:model="modal">
        <x-slot name="title">Update permissions</x-slot>
        <x-slot name="content">
            <div class="mt-1 grid grid-cols-4 gap-4">
                @forelse (config('app.permissions') as $permission)
                    <label for="{{ $permission }}" class="flex items-center space-x-3">
                        <x-input id="{{ $permission }}" type="checkbox" wire:model="permissions" value="{{ $permission }}"/>
                        <span class="text-sm">{{ $permission }}</span>
                    </label>
                @empty
                @endforelse
            </div>
            <x-input-error class="mt-4" for="permissions"/>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modal')">Cancel</x-secondary-button>
            <x-button wire:click="save" class="ml-3">Update permissions</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
