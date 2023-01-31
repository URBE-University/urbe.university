<div>
    <x-jet-danger-button wire:click="$toggle('modal')">Delete user</x-jet-danger-button>

    <x-jet-confirmation-modal wire:model="modal">
        <x-slot name="title">Delete User</x-slot>
        <x-slot name="content">
            {{ __("Are you sure you want to delete this user? This action cannot be undone.") }}
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modal')">Cancel</x-jet-secondary-button>
            <x-jet-danger-button class="ml-3" wire:click="delete">Delete User</x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
</div>
