<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editing Article</h2>

            @can('post:update')
                <div class="flex items-center space-x-4">
                    @livewire('admin.post.options', ['post' => $post])
                    <select wire:model="status" @class([
                        'border-0 rounded-lg text-sm py-1.5',
                        'bg-green-100 text-green-800' => $status == 'published',
                        'bg-yellow-100 text-yellow-800' => $status == 'draft',
                        ])>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    <x-jet-button wire:click="save">Save changes</x-jet-button>
                </div>
            @endcan
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <input type="text" wire:model.defer="title"
                class="bg-transparent border-0 w-full text-2xl text-gray-900 font-extrabold outline-none border-transparent focus:border-transparent focus:ring-0"
                placeholder="{{ __('Title') }}">
            <x-jet-input-error for="title" />
            <div class="mt-6">
                @livewire('markdown-x', ['content' => $content])
                <x-jet-input-error for="body" />
            </div>
        </div>
    </div>

</div>
