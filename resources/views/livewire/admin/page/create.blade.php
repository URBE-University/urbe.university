<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editing page</h2>
            @can('page:create')
                <div class="flex items-center space-x-4">
                    <x-jet-secondary-button>Preview</x-jet-secondary-button>
                    <select wire:model="status" @class([
                        'border py-2 rounded-md text-xs focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 shadow-sm uppercase font-semibold',
                        'border-green-300 bg-green-100 text-green-800' => $status == 'published',
                        'border-yellow-300 bg-yellow-100 text-yellow-800' => $status == 'draft',
                        ])>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    <x-jet-button>Save changes</x-jet-button>
                </div>
            @endcan
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <input type="text" wire:model="title" class="bg-transparent border-0 w-full text-2xl text-gray-900 font-extrabold outline-none border-transparent focus:border-transparent focus:ring-0" placeholder="{{ __('Page title') }}">
            <div class="mt-6 relative h-[700px] w-full">
                @livewire('code-editor')
            </div>

            {{-- Shortcodes Legend --}}
            @include('layouts.partials.shortcodes')

        </div>
    </div>
</div>
