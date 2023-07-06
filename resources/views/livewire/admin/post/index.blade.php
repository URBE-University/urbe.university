<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Posts</h2>
            <div class="flex items-center space-x-4">
                @can('post:create')
                    <a href="{{ route('admin.post.create') }}" class="btn-link">Add new post</a>
                @endcan
            </div>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <x-input type="search" wire:model="query" placeholder="Search by title..."/>
                <button wire:click="$toggle('showTrashed')" class="text-sm hover:underline ">Trash ({{ \App\Models\Post::onlyTrashed()->count() }})</button>
            </div>
            <div class="mt-4 bg-white shadow rounded-md">
                @forelse ($posts as $post)
                    <div @class([
                        'flex items-center justify-between px-6 py-4 rounded-md hover:bg-slate-50',
                        'border-t rounded-t-none' => !$loop->first
                    ])>
                        <div class="flex items-center space-x-6">
                            @if ($post->featured_image)
                                <img src="{{ asset($post->featured_image) }}" class="w-16 h-16 aspect-square rounded object-center object-cover shadow">
                            @endif
                            <div class="">
                                <p class="text-slate-600 text-sm font-semibold">{{ $post->user->name }}</p>
                                <a href="" target="_blank" title="Click to open article on a new tab.">
                                    <h1 class="text-base font-bold">{{ $post->title }}</h1>
                                </a>
                                <span class="flex items-center space-x-1">
                                    @if ($post->published_at)
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-green-500">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                        </svg>
                                        <time class="text-slate-600 text-sm font-light" datetime="">
                                            {{ Carbon\Carbon::parse($post->published_at)->format('M d, Y') }}
                                        </time>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-slate-500">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z" clip-rule="evenodd" />
                                        </svg>
                                        <time class="text-slate-600 text-sm font-light" datetime="">
                                            {{ Carbon\Carbon::parse($post->published_at)->format('M d, Y') }}
                                        </time>
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-end space-x-3">
                            @if ($post->deleted_at)
                                @can('post:delete')
                                    <button wire:click="restore({{$post->id}})" class="text-sm">Restore</button>
                                    <button wire:click="delete({{$post->id}})" class="text-sm text-red-600">Permanently delete</button>
                                @endcan
                            @else
                                @can('post:update')
                                    <a href="{{ route('admin.post.edit', ['post' => $post->id]) }}" class="text-slate-600 hover:text-slate-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                            <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                        </svg>
                                    </a>
                                @endcan
                                @can('post:delete')
                                    @livewire('admin.post.delete', ['post' => $post], key('del-'.$post->id))
                                @endcan
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="text-center p-12">
                        <img src="{{ asset('static_assets/undraw_adventure_map_hnin.svg') }}" alt="no posts found image"
                            class="w-48 aspect-auto mx-auto">
                        <h1 class="mt-12 text-2xl font-semibold">No posts found</h1>
                        @can('post:create')
                            <div class="mt-12">
                                <a href="{{ route('admin.post.create') }}" class="btn-link">Add new post</a>
                            </div>
                        @endcan
                    </div>
                @endforelse
            </div>
            <div class="mt-6">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
