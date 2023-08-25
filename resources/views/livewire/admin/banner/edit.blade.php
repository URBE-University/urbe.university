<div class="text-left">
    <button wire:click="$toggle('modal')" class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
            <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
            <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
          </svg>
    </button>

    <x-dialog-modal wire:model="modal">
        <x-slot name="title">Editing Banner</x-slot>
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
            <x-button wire:click.prevent="save" class="ml-4">Save changes</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
