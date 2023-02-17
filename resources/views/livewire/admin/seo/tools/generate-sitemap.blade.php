<div>
    <div class="text-left flex items-center justify-center space-x-4">
        <a href="{{ config('app.url') }}/sitemap.xml" target="_blank" class="secondary-btn">Details</a>
        <x-jet-secondary-button wire:click="$toggle('modal')">Update</x-jet-secondary-button>

        <x-jet-dialog-modal wire:model="modal" class="text-left">
            <x-slot name="title">Update Sitemap</x-slot>
            <x-slot name="content">
                This will crawl the entire website and will generate a new  <strong>sitemap.xml</strong> file in your public directory.
            </x-slot>
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('modal')">Cancels</x-jet-secondary-button>
                <x-jet-button wire:click="save" class="ml-4">Update Sitemap</x-jet-button>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
