<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editing Article</h2>

            @can('post:update')
                <div class="flex items-center space-x-4">
                    @livewire('admin.post.options', ['post' => $post])
                    <div @class([
                        'border-0 rounded-md text-sm font-medium tracking-wider px-2 py-0.5',
                        'bg-green-200 text-green-800' => !is_null($post->published_at),
                        'bg-gray-200 text-gray-800' => is_null($post->published_at),
                        ])>{{ !is_null($post->published_at) ? 'Published' : 'Draft'   }}</div>

                    <x-secondary-button wire:click="publish">{{ !is_null($post->published_at) ? 'Unpublish' : 'Publish' }}</x-secondary-button>
                    <x-button wire:click="save">Save changes</x-button>
                </div>
            @endcan
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <input type="text" wire:model.defer="title"
                class="bg-transparent border-0 w-full text-2xl text-gray-900 font-extrabold outline-none border-transparent focus:border-transparent focus:ring-0"
                placeholder="{{ __('Title') }}">
            <x-input-error for="title" />
            <div class="mt-6">
                @livewire('markdown-x', ['content' => $content])
                <x-input-error for="body" />
            </div>

            @include('layouts.partials.shortcodes')

        </div>
    </div>

</div>
