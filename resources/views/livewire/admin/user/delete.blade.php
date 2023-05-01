<div>
    <x-danger-button wire:click="$toggle('modal')">Delete user</x-danger-button>

    <x-confirmation-modal wire:model="modal">
        <x-slot name="title">Delete User</x-slot>
        <x-slot name="content">
            {{ __("Are you sure you want to delete this user? This action cannot be undone.") }}
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modal')">Cancel</x-secondary-button>
            <x-danger-button class="ml-3" wire:click="delete">Delete User</x-danger-button>
        </x-slot>
    </x-confirmation-modal>
</div>
