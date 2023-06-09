<div>
    <x-button wire:click="$toggle('modal')">Upload catalog</x-button>

    <x-dialog-modal wire:model="modal">
        <x-slot name="title">Upload catalog file</x-slot>
        <x-slot name="content">
            <div class="">
                <x-label for="year">Select the effective school year</x-label>
                <x-input type="number" id="year" wire:model="year" class="mt-1"/>
                <x-input-error for="year" />
            </div>

            <div class="mt-6">
                <x-label for="file">File</x-label>
                <x-input type="file" id="file" wire:model="file" accept="application/pdf" class="mt-1"/>
                <x-input-error for="file" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modal')">Cancel</x-secondary-button>
            <x-button wire:click="save" class="ml-4">Upload</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
