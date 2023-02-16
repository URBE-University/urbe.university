<div>
    <button wire:click="$toggle('modal')" class="font-medium text-blue-600 hover:underline">Edit</button>

    <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title">Edit redirect</x-slot>
        <x-slot name="content">
            <div>
                <x-jet-label for="source_url" value="Source URL" />
                <x-jet-input id="source_url" type="text" class="mt-1 w-full" wire:model="source_url" placeholder="/your-unique-endpoint-here" />
                <p class="mt-1 text-xs font-medium tracking-wide text-slate-600">Make sure this endpoint is unique, or it will override any existing urls.</p>
                <x-jet-input-error for="source_url"/>
            </div>
            <div class="mt-6">
                <x-jet-label for="destination_url" value="Destination URL" />
                <textarea id="destination_url" cols="30" rows="6" wire:model="destination_url"
                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"></textarea>
                <x-jet-input-error for="destination_url"/>
            </div>
            <div class="mt-6">
                <x-jet-label for="code" value="Redirect type" />
                <select id="code" wire:model="code"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1">
                    <option value="">Select an option</option>
                    <option value="301">301 Permanent</option>
                    <option value="302">302 Temporary</option>
                </select>
                <x-jet-input-error for="code"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modal')">Cancel</x-jet-secondary-button>
            <x-jet-button wire:click="save" class="ml-4">Save changes</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
