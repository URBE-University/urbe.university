<div>
    <div class="border bg-white shadow sm:rounded-md" wire:sortable="reorder">
        @forelse ($items as $item)
            <div @class([
                'max-w-7xl w-full bg-white',
                'border-b' => !$loop->last,
                'rounded-t-lg' => $loop->first,
                'rounded-b-lg' => $loop->last
            ]) x-data="{ open_{{$item->id}}: false }" x-cloak
            wire:sortable.item="{{ $item->id }}" wire:key="link-{{ $item->id }}"
            >
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center space-x-3">
                        <button wire:sortable.handle>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path d="M7 2a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>
                        </button>
                        <span class="">{{ $item->label }}</span>
                        @if ($item->type == 'dropdown')
                            <span class="text-green-600 text-sm bg-green-100 px-1 py-0.5 rounded">Dropdown</span>
                        @endif
                        @if ($item->type == 'megamenu')
                            <span class="text-fuchsia-500 text-sm bg-fuchsia-100 px-1 py-0.5 rounded">Megamenu</span>
                        @endif
                    </div>

                    <div class="flex items-center">
                        <div class="flex items-center bg-slate-100 px-2 py-1 rounded">
                            @can('menu:update')
                                @livewire('admin.menu.edit', ['selector' => 'navbar', 'menu' => $item], key('edit-{{$item->id}}'))
                            @endcan
                            @can('menu:delete')
                                @livewire('admin.menu.delete', ['menu' => $item], key('delete-{{$item->id}}'))
                            @endcan
                        </div>
                        @if ($item->type == 'dropdown' || $item->type == 'megamenu')
                            <div class="text-2xl font-light ml-3"
                            @click="open_{{$item->id}} = !open_{{$item->id}}"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 cursor-pointer hover:text-urbe" x-show="!open_{{$item->id}}">
                                    <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 cursor-pointer hover:text-urbe" x-show="open_{{$item->id}}">
                                    <path fill-rule="evenodd" d="M5.25 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5H6a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        @endif
                    </div>
                </div>

                @if ($item->type == 'dropdown' || $item->type == 'megamenu')
                    <div class="" x-show="open_{{$item->id}}" @click.outside="open_{{$item->id}} = false" x-cloak>
                        @livewire('admin.menu.children', ['selector' => 'navbar', 'parent' => $item->id], key('children-{{$item->id}}'))
                        <div @class([
                            'mt-2 py-2 bg-slate-50',
                            'rounded-b-lg' => $loop->last
                        ])>
                            @can('menu:create')
                                @livewire('admin.menu.create', ['selector' => 'navbar', 'parent' => $item->id])
                            @endcan
                        </div>
                    </div>
                @endif
            </div>
        @empty
            <div class="text-center p-12">
                <img src="{{ asset('static_assets/undraw_adventure_map_hnin.svg') }}" alt="no posts found image"
                    class="w-48 aspect-auto mx-auto">
                <h1 class="mt-12 text-2xl font-semibold">No menu items found</h1>
            </div>
        @endforelse
    </div>

    <div class="my-12"></div>
    @can('menu:create')
        @livewire('admin.menu.create', ['selector' => 'navbar'])
    @endcan
</div>
