<div>
    <x-button wire:click="$toggle('modal')">Submit URLs</x-button>

    <x-dialog-modal wire:model="modal">
        <x-slot name="title">Instant Indexing Options</x-slot>
        <x-slot name="content">
            <div class="">
                <x-label for="urls" value="Insert URLs to send to the IndexNow API (one per line, up to 1000):" />
                <div class="mt-1 flex items-center space-x-4">
                    <textarea id="urls" cols="30" rows="14"
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"
                        placeholder="{{ config('app.url') }}/hello-world"
                        wire:model="urls"
                    ></textarea>
                </div>
                <p class="mt-1 text-xs font-medium text-slate-600">{{ __("The IndexNow API key proves the ownership of the site. It is generated automatically. You can change the key if it becomes known to third parties.") }}</p>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modal')">Close</x-secondary-button>
            <x-button wire:click="save" class="ml-4">Submit URLs</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
