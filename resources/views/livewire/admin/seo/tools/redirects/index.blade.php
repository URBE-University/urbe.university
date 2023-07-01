<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Manage redirects</h2>
                <div class="flex items-center space-x-8">
                    <a href="{{route('admin.seo.home')}}" class="bg-slate-100 p-2 -m-2 rounded-md text-slate-600 hover:text-blue-500 hover:bg-blue-100 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <x-input type="search" wire:model="query" class="py-1" placeholder="Search..."/>
                @livewire('admin.seo.tools.redirects.create')
            </div>
            <div class="mt-6 relative overflow-x-auto shadow-md sm:rounded-md">
                <table class="w-full text-sm text-left text-gray-500 rounded-md">
                    <thead class="text-xs text-gray-700 uppercase bg-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Endpoint
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Redirects to
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Type
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                >{{ config('app.url') . '/' . $item->source_url }}</th>
                                <td class="px-6 py-4 truncate">
                                    {{ str($item->destination_url)->limit(64) }}
                                </td>
                                <td class="px-6 py-4">
                                    <span class="truncate">{{ $item->code }}</span>
                                </td>
                                <td class="px-6 py-4 flex items-center justify-end space-x-3">
                                    @livewire('admin.seo.tools.redirects.edit', ['redirect' => $item], key('edit-'.$item->id))
                                    @livewire('admin.seo.tools.redirects.delete', ['redirect' => $item], key('delete-'.$item->id))
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-6">
                {{ $items->links() }}
            </div>
        </div>
    </div>
</div>
