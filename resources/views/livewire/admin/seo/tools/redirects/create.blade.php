<div>
    <x-button wire:click="$toggle('modal')">Add redirect</x-button>

    <x-dialog-modal wire:model="modal">
        <x-slot name="title">Add redirect</x-slot>
        <x-slot name="content">
            <div>
                <x-label for="source_url" value="Source URL" />
                <x-input id="source_url" type="text" class="mt-1 w-full" wire:model="source_url" placeholder="/your-unique-endpoint-here" />
                <p class="mt-1 text-xs font-medium tracking-wide text-slate-600">Make sure this endpoint is unique, or it will override any existing urls.</p>
                <x-input-error for="source_url"/>
            </div>
            <div class="mt-6">
                <x-label for="destination_url" value="Destination URL" />
                <textarea id="destination_url" cols="30" rows="6" wire:model="destination_url"
                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"></textarea>
                <x-input-error for="destination_url"/>
            </div>
            <div class="mt-6">
                <x-label for="code" value="Redirect type" />
                <select id="code" wire:model="code"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1">
                    <option value="">Select an option</option>
                    <option value="301">301 Permanent</option>
                    <option value="302">302 Temporary</option>
                </select>
                <x-input-error for="code"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modal')">Cancel</x-secondary-button>
            <x-button wire:click="save" class="ml-4">Save</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
