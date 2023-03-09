<div>
    <x-jet-button wire:click="$toggle('modal')">{{ __("Upload files") }}</x-jet-button>

    <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title"></x-slot>
        <x-slot name="content">
            <input type="file" wire:model="files" multiple accept=".webp,.pdf">
            @error('files.*') <span class="block mt-2 text-sm text-red-500">{{ $message }}</span> @enderror
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modal')">Cancel</x-jet-secondary-button>
            <x-jet-button wire:click="save" class="ml-4">Upload files</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
