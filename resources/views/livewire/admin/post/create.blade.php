<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">New Post</h2>
            @can('post:create')
                <x-jet-button wire:click="save">Save changes</x-jet-button>
            @endcan
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <input type="text" wire:model="title"
                class="bg-transparent border-0 w-full text-2xl text-gray-900 font-extrabold outline-none border-transparent focus:border-transparent focus:ring-0"
                placeholder="{{ __('Title') }}">
            <x-jet-input-error for="title" />
            <div class="mt-6">
                <livewire:markdown-x />
                <x-jet-input-error for="body" />
            </div>

            @include('layouts.partials.shortcodes')

        </div>
    </div>

</div>
