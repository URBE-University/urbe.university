<div>
    <div class="flex items-center justify-center">
        <x-button wire:click="$toggle('modal')">Add menu</x-button>
    </div>

    <x-dialog-modal wire:model="modal">
        <x-slot name="title">New menu item</x-slot>
        <x-slot name="content">
            @if ($sidenav_menus->count() > 0)
                <div>
                    <x-label for="type" value="Type"/>
                    <select wire:model="type" id="type"
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"
                    >
                        <option value="">Select an option</option>
                        <option value="sidenav">Page Menu (Top Level)</option>
                        <option value="link">Link</option>
                    </select>
                    <x-input-error for="type" />
                </div>
            @endif

            <div class="mt-4">
                <x-label for="label" value="Label" />
                <x-input id="label" type="text" wire:model="label" class="mt-1 w-full" />
                <x-input-error for="label" />
            </div>

            @if ($type == 'link')
                <div class="mt-4">
                    <x-label for="url" value="Url" />
                    <x-input id="url" type="text" wire:model="url" class="mt-1 w-full" />
                    <x-input-error for="url" />
                </div>
                <div class="mt-4">
                    <x-label for="parent" value="Select parent menu" />
                    <select name="parent" id="parent" wire:model="parent"
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"
                    >
                        <option value="">Select an option</option>
                        @forelse ($sidenav_menus as $parent)
                            <option value="{{$parent->id}}">{{ $parent->label }}</option>
                        @empty
                        @endforelse
                    </select>
                    <x-input-error for="parent" />
                </div>
                <div class="mt-4">
                    <label for="opens_in_new_tab">
                        <x-input id="opens_in_new_tab" type="checkbox" wire:model="opens_in_new_tab" />
                        <span>Open link in new tab</span>
                    </label>
                </div>
            @endif
        </x-slot>
        <x-slot name="footer">
            <x-button wire:click="save">Add item</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
