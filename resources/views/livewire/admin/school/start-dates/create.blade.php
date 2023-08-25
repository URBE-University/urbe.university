<div>
    <x-button wire:click="$toggle('modal')">{{ __("New Date") }}</x-button>

    <x-dialog-modal wire:model="modal">
        <x-slot name="title">New start date</x-slot>
        <x-slot name="content">
            <div class="">
                <x-label for="semester" value="Semester"/>
                <x-input type="text" id="semester" wire:model="semester" placeholder="Fall A" class="w-full mt-1"/>
                <x-input-error for="semester"/>
            </div>
            <div class="mt-6">
                <x-label for="starts_at" value="Starts at"/>
                <x-input type="date" id="starts_at" wire:model="starts_at" class="w-full mt-1"/>
                <x-input-error for="starts_at"/>
            </div>
            <div class="mt-6">
                <x-label for="apply_by_date" value="Apply by date"/>
                <x-input type="date" id="apply_by_date" wire:model="apply_by_date" class="w-full mt-1"/>
                <x-input-error for="starts_at"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modal')">Cancel</x-secondary-button>
            <x-button wire:click.prevent="save" class="ml-4">Add date</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
