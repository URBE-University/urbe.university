<div>
    <button wire:click="$toggle('modal')" class="px-3 py-1 rounded-md border border-red-300 bg-red-100 text-red-600 text-sm">{{ __("Delete") }}</button>

    <x-confirmation-modal wire:model="modal">
        <x-slot name="title">{{ __("Deleting ") . $media->file_name }}</x-slot>
        <x-slot name="content">
            <p>Are you sure you want to delete this file? This action cannot be undone, and the media file will stop showing on any posts, events, or pages it may have been previously used.</p>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modal')">Cancel</x-secondary-button>
            <x-danger-button wire:click="delete" class="ml-4">I understand. Delete file</x-danger-button>
        </x-slot>
    </x-confirmation-modal>
</div>
