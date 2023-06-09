<div>
    <button wire:click="$toggle('modal')">Delete</button>

    <x-confirmation-modal wire:model="modal">
        <x-slot name="title">Deleting {{$catalog->year}} catalog</x-slot>
        <x-slot name="content">
            This action cannot be undone.
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modal')">Cancel</x-secondary-button>
            <x-danger-button wire:click="delete" class="ml-4">Delete</x-danger-button>
        </x-slot>
    </x-confirmation-modal>
</div>
