<div>
    <div class="flex items-center justify-center">
        <x-jet-button wire:click="$toggle('modal')">Add menu item</x-jet-button>
    </div>

    <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title">New menu item</x-slot>
        <x-slot name="content">
            <div class="">
                <x-jet-label for="label" value="Label" />
                <x-jet-input id="label" type="text" wire:model="label" class="mt-1 w-full" />
                <x-jet-input-error for="label" />
            </div>
            <div class="mt-4">
                <x-jet-label for="type" value="Type"/>
                <select wire:model="type" id="type"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"
                >
                    <option value="">Select an option</option>
                    <option value="link">Link</option>
                    <option value="dropdown">Dropdown</option>
                </select>
                <x-jet-input-error for="type" />
            </div>

            @if ($type == 'link')
                <div class="mt-4">
                    <x-jet-label for="url" value="Url" />
                    <x-jet-input id="url" type="text" wire:model="url" class="mt-1 w-full" />
                    <x-jet-input-error for="url" />
                </div>
                <div class="mt-4">
                    <label for="opens_in_new_tab">
                        <x-jet-input id="opens_in_new_tab" type="checkbox" wire:model="opens_in_new_tab" />
                        <span>Open link in new tab</span>
                    </label>
                </div>
            @endif
        </x-slot>
        <x-slot name="footer">
            <x-jet-button wire:click="save">Add item</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
