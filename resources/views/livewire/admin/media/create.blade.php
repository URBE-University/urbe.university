<div>
    <x-button wire:click="$toggle('modal')">{{ __("Upload files") }}</x-button>

    <x-dialog-modal wire:model="modal">
        <x-slot name="title"></x-slot>
        <x-slot name="content">
            <input type="file" wire:model="files" multiple accept=".webp,.pdf">
            @error('files.*') <span class="block mt-2 text-sm text-red-500">{{ $message }}</span> @enderror
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modal')">Cancel</x-secondary-button>
            <x-button wire:click="save" class="ml-4">Upload files</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
