<div>
    <button wire:click="$toggle('modal')" class="font-medium text-red-600 hover:underline">Delete</button>

    <x-confirmation-modal wire:model="modal">
        <x-slot name="title">Delete redirect</x-slot>
        <x-slot name="content">You are trying to delete the redirect with entry point <strong>{{ $redirect['source_url'] }}</strong>.<br>Are you sure you want to delete it? This action cannot be undone.</x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modal')">Cancel</x-secondary-button>
            <x-danger-button wire:click="delete" class="ml-4">Delete</x-danger-button>
        </x-slot>
    </x-confirmation-modal>
</div>
