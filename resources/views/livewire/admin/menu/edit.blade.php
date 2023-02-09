<div class="flex items-center">
    <button wire:click="$toggle('modal')">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
            <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
            <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
        </svg>
    </button>

    <x-jet-dialog-modal wire:model.defer="modal">
        <x-slot name="title">Edit: {{ $menu->label }}</x-slot>
        <x-slot name="content">
            <div class="">
                <x-jet-label for="label" value="Label" />
                <x-jet-input id="label" type="text" wire:model.defer="label" class="mt-1 w-full" />
                <x-jet-input-error for="label" />
            </div>
            @if ($selector == 'footer')
                <div class="mt-4">
                    <x-jet-label for="column" value="Select footer column"/>
                    <select wire:model="column" id="column"
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"
                    >
                        <option value="">Select an option</option>
                        <option value="1">Column 1</option>
                        <option value="2">Column 2</option>
                        <option value="3">Column 3</option>
                    </select>
                    <x-jet-input-error for="column" />
                </div>
            @else
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
            @endif

            @if ($type == 'link')
                <div class="mt-4">
                    <x-jet-label for="url" value="Url" />
                    <x-jet-input id="url" type="text" wire:model.defer="url" class="mt-1 w-full" />
                    <x-jet-input-error for="url" />
                </div>
                <div class="mt-4">
                    <label for="opens_in_new_tab_{{$menu->id}}">
                        <x-jet-input id="opens_in_new_tab_{{$menu->id}}" type="checkbox" wire:model.defer="opens_in_new_tab" />
                        <span>Open link in new tab</span>
                    </label>
                </div>
            @endif
        </x-slot>
        <x-slot name="footer">
            <x-jet-button wire:click="save">Save changes</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
