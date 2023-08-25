<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Banners</h2>
            @livewire('admin.banner.create')
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-md">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Running</th>
                            <th scope="col" class="px-6 py-3">
                                Start | End
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($banners as $banner)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div @class([
                                        'inline-block',
                                        'bg-green-500 h-5 w-5 rounded-full' => Carbon\Carbon::now()->between(Carbon\Carbon::parse($banner->starts_at)->startOfDay(), Carbon\Carbon::parse($banner->ends_at)->endOfDay()),
                                        'bg-slate-500 w-5 h-2 rounded' => !Carbon\Carbon::now()->between(Carbon\Carbon::parse($banner->starts_at)->startOfDay(), Carbon\Carbon::parse($banner->ends_at)->endOfDay())
                                    ])></div>
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 text-xs whitespace-nowrap flex items-center">
                                    <span class="inline-flex items-center space-x-1 px-1.5 py-0.5 bg-sky-100 text-sky-700 border  rounded-full border-sky-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd" d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z" clip-rule="evenodd" />
                                        </svg>
                                        <span>{{ Carbon\Carbon::parse($banner->starts_at)->format('M d, Y') }}</span>
                                    </span>
                                    <span class="ml-3 inline-flex items-center space-x-1 px-1.5 py-0.5 bg-rose-100 text-rose-700 border  rounded-full border-rose-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd" d="M4.5 7.5a3 3 0 013-3h9a3 3 0 013 3v9a3 3 0 01-3 3h-9a3 3 0 01-3-3v-9z" clip-rule="evenodd" />
                                        </svg>
                                        <span>{{ Carbon\Carbon::parse($banner->ends_at)->format('M d, Y') }}</span>
                                    </span>
                                </th>
                                <td class="px-6 py-4">
                                    {{ $banner->title }}
                                </td>
                                <td class="px-6 py-4 text-right flex items-center space-x-3 justify-end">
                                    @livewire('admin.banner.edit', ['banner' => $banner], key('edit'.$banner->id))
                                    @livewire('admin.banner.delete', ['banner' => $banner], key('delete'.$banner->id))
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
