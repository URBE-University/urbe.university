<div>
    <button wire:click="$toggle('modal')" class="btn-link">Invite User</button>

    <x-dialog-modal wire:model="modal">
        <x-slot name="title">
            Invite a user
        </x-slot>
        <x-slot name="content">
            <x-label for="name" value="Full Name"/>
            <x-input id="name" type="text" wire:model="name" class="mt-1 w-full" placeholder="Jane Doe"/>
            <x-input-error for="name" />

            <div class="mt-6">
                <x-label for="email" value="Email"/>
                <x-input id="email" type="email" wire:model="email" class="mt-1 w-full" placeholder="janed@example.com"/>
                <x-input-error for="email" />
            </div>

            <div class="mt-6">
                <label class="block font-medium text-sm text-gray-700">Permissions</label>
                    <div class="mt-1 grid grid-cols-4 gap-4">
                        @forelse (config('app.permissions') as $permission)
                            <label for="{{ $permission }}" class="flex items-center space-x-3">
                                <x-input id="{{ $permission }}" type="checkbox" wire:model="permissions" value="{{ $permission }}"/>
                                <span>{{ $permission }}</span>
                            </label>
                        @empty
                        @endforelse
                    </div>
                <x-input-error for="permissions" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modal')">Cancel</x-secondary-button>
            <x-button wire:click="invite" class="ml-3">Send invitation</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
