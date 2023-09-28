<div>
    <div class="" wire:sortable="reorder">
        @forelse ($items as $item)
            <div class="flex items-center justify-between text-sm py-2 hover:bg-slate-50 px-4 ml-8 rounded-md"
                wire:sortable.item="{{ $item->id }}" wire:key="link-{{ $item->id }}"
            >
                <div class="flex items-center space-x-3">
                    <button wire:sortable.handle>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                            <path d="M7 2a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                    </button>
                    <span class="text-lg">{{ $item->label }}</span>
                </div>
                <div class="flex items-center">
                    @livewire('admin.menu.sidenav.edit', ['selector' => $item->location, 'menu' => $item], key('edit-{{$item->id}}'))
                    @livewire('admin.menu.sidenav.delete', ['menu' => $item], key('delete-{{$item->id}}'))
                </div>
            </div>
        @empty
        @endforelse
    </div>
</div>
