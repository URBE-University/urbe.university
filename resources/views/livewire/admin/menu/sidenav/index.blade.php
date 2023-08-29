<div>
    <div class="border bg-white shadow sm:rounded-md">
        @forelse ($items as $item)
            <div @class([
                'max-w-7xl w-full bg-white',
                'border-b' => !$loop->last,
                'rounded-t-lg' => $loop->first,
                'rounded-b-lg' => $loop->last
            ])
            x-data="{ open_{{$item->id}}: false }"
            x-cloak
            >
                {{-- Item --}}
                <div class="flex items-center justify-between p-4">
                    <div class="">{{ $item->label }}</div>

                    <div class="flex items-center">
                        <div class="flex items-center bg-slate-100 px-2 py-1 rounded">
                            @can('menu:update')
                                @livewire('admin.menu.sidenav.edit', ['selector' => $item->location, 'menu' => $item], key('edit-{{$item->id}}'))
                            @endcan
                            @can('menu:delete')
                                @livewire('admin.menu.sidenav.delete', ['menu' => $item], key('delete-{{$item->id}}'))
                            @endcan
                        </div>
                        @if ($item->type == "sidenav")
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
                @if ($item->type == 'sidenav')
                    <div class="" x-show="open_{{$item->id}}" @click.outside="open_{{$item->id}} = false" x-cloak>
                        @livewire('admin.menu.sidenav.children', ['selector' => 'sidenav', 'parent' => $item->id], key('children-{{$item->id}}'))
                    </div>
                @endif
                {{-- Item | End of --}}
            </div>
        @empty

        @endforelse
    </div>

    <div class="my-12"></div>
    @can('menu:create')
        @livewire('admin.menu.sidenav.create', ['selector' => 'sidenav'])
    @endcan

</div>
