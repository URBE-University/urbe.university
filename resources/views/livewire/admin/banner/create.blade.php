<div>
    <x-button wire:click="$toggle('modal')">{{ __("New Banner") }}</x-button>

    <x-dialog-modal wire:model="modal">
        <x-slot name="title">New Banner</x-slot>
        <x-slot name="content">
            <div class="">
                <x-label for="title" value="Title"/>
                <x-input type="text" id="title" wire:model="title" placeholder="Internal name for this banner" class="w-full mt-1"/>
                <x-input-error for="title"/>
            </div>
            <div class="mt-6">
                <x-label for="content" value="Content"/>
                <x-textarea id="content" wire:model="content" placeholder="This field supports markdown" class="w-full mt-1"/>
                <x-input-error for="content"/>
            </div>
            <div class="mt-6">
                <x-label for="starts_at" value="Start showing on"/>
                <x-input type="date" id="starts_at" wire:model="starts_at" class="w-full mt-1"/>
                <x-input-error for="starts_at"/>
            </div>
            <div class="mt-6">
                <x-label for="ends_at" value="Stop showing on"/>
                <x-input type="date" id="ends_at" wire:model="ends_at" class="w-full mt-1"/>
                <x-input-error for="ends_at"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modal')">Cancel</x-secondary-button>
            <x-button wire:click.prevent="save" class="ml-4">Add banner</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
