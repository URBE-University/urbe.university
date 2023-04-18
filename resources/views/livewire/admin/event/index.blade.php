<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Events</h2>
            @can('event:create')
                <a href="{{ route('admin.event.create') }}" class="btn-link">Add new event</a>
            @endcan
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button wire:click="$toggle('showTrashed')" class="text-sm hover:underline ">Trash ({{ \App\Models\Event::onlyTrashed()->count() }})</button>
            <div class="mt-4 bg-white shadow rounded-md">
                @forelse ($events as $event)
                    <div class="p-4 flex items-center justify-between rounded-md hover:bg-slate-100">
                        <div class="flex items-center space-x-3">
                            <div class="w-20 h-20 aspect-square rounded-md border flex items-center justify-center">
                                <div class="">
                                    <p class="text-2xl font-bold">
                                        {{ Carbon\Carbon::parse($event->start_date)->format('d') }}
                                    </p>
                                    <p class="">
                                        {{ Carbon\Carbon::parse($event->start_date)->format('M') }}
                                    </p>
                                </div>
                            </div>
                            <div class="">
                                <h1 class="text-2xl font-bold">{{ $event->name }}</h1>
                                @if ($event->published_at)
                                    <p class="inline-block px-3 py-1 text-sm rounded-full bg-green-100 text-green-800">Published</p>
                                @endif
                            </div>
                        </div>
                        <div class="flex items-center justify-end space-x-3">
                            @if ($event->deleted_at)
                                @can('event:delete')
                                    <button wire:click="restore({{$event->id}})" class="text-sm">Restore</button>
                                    <button wire:click="delete({{$event->id}})" class="text-sm text-red-600">Permanently delete</button>
                                @endcan
                            @else
                                @can('event:update')
                                <a href="{{ route('admin.event.edit', ['event' => $event]) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                        <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                    </svg>
                                </a>
                                @endcan
                                @can('event:delete')
                                    @livewire('admin.event.delete', ['event' => $event], key('del-' . $event->id))
                                @endcan
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="text-center p-12">
                        <img src="{{ asset('static_assets/undraw_adventure_map_hnin.svg') }}" alt="no events found image" class="w-48 aspect-auto mx-auto">
                        <h1 class="mt-12 text-2xl font-semibold">No events found</h1>
                        @can('event:create')
                            <div class="mt-12">
                                <a href="{{ route('admin.event.create') }}" class="btn-link">Add new event</a>
                            </div>
                        @endcan
                    </div>
                @endforelse
            </div>
            <div class="mt-6">
                {{ $events->links() }}
            </div>
        </div>
    </div>
</div>
