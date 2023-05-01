<div>
    <x-secondary-button wire:click="$toggle('modal')">Suspend user</x-secondary-button>

    <x-confirmation-modal wire:model="modal">
        <x-slot name="title">Suspend User</x-slot>
        <x-slot name="content">
            {{ __("Are you sure you want to suspend this user? This will remove all permissions from the user profile. To re-enable this user, you need to reasign permissions to it.") }}
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modal')">Cancel</x-secondary-button>
            <x-button class="ml-3" wire:click="suspend">Suspend User</x-button>
        </x-slot>
    </x-confirmation-modal>
</div>
