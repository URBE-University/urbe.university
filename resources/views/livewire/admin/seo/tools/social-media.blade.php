<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Social media</h2>
                <a href="{{route('admin.seo.home')}}" class="bg-slate-100 p-2 -m-2 rounded-lg text-slate-600 hover:text-blue-500 hover:bg-blue-100 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full bg-white rounded-lg shadow">
                <div class="p-8">
                    <div class="flex items-center space-x-3 fill-slate-600">
                        <p class="text-xl font-semibold">Social media urls</p>
                    </div>

                    <div class="mt-6">
                        <x-jet-label for="facebook_url">Facebook</x-jet-label>
                        <div class="mt-1 flex items-center space-x-6">
                            <div class="w-full sm:w-2/3">
                                <x-jet-input id="facebook_url" type="url" wire:model="facebook_url" class="w-full"/>
                                <x-jet-input-error for="facebook_url"/>
                            </div>
                            @if ($facebook_url)
                                <div class="p-2 bg-green-100 border border-green-300 rounded-lg text-green-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="mt-6">
                        <x-jet-label for="facebook_url">Instagram</x-jet-label>
                        <div class="mt-1 flex items-center space-x-6">
                            <div class="w-full sm:w-2/3">
                                <x-jet-input id="instagram_url" type="url" wire:model="instagram_url" class="w-full"/>
                                <x-jet-input-error for="instagram_url"/>
                            </div>
                            @if ($instagram_url)
                                <div class="p-2 bg-green-100 border border-green-300 rounded-lg text-green-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="mt-6">
                        <x-jet-label for="twitter_url">Twitter</x-jet-label>
                        <div class="mt-1 flex items-center space-x-6">
                            <div class="w-full sm:w-2/3">
                                <x-jet-input id="twitter_url" type="url" wire:model="twitter_url" class="w-full"/>
                                <x-jet-input-error for="twitter_url"/>
                            </div>
                            @if ($twitter_url)
                                <div class="p-2 bg-green-100 border border-green-300 rounded-lg text-green-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="mt-6">
                        <x-jet-label for="linkedin_url">Linkedin</x-jet-label>
                        <div class="mt-1 flex items-center space-x-6">
                            <div class="w-full sm:w-2/3">
                                <x-jet-input id="linkedin_url" type="url" wire:model="linkedin_url" class="w-full"/>
                                <x-jet-input-error for="linkedin_url"/>
                            </div>
                            @if ($linkedin_url)
                                <div class="p-2 bg-green-100 border border-green-300 rounded-lg text-green-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="mt-6">
                        <x-jet-label for="tiktok_url">Tiktok</x-jet-label>
                        <div class="mt-1 flex items-center space-x-6">
                            <div class="w-full sm:w-2/3">
                                <x-jet-input id="tiktok_url" type="url" wire:model="tiktok_url" class="w-full"/>
                                <x-jet-input-error for="tiktok_url"/>
                            </div>
                            @if ($tiktok_url)
                                <div class="p-2 bg-green-100 border border-green-300 rounded-lg text-green-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="mt-6">
                        <x-jet-label for="youtube_url">Youtube</x-jet-label>
                        <div class="mt-1 flex items-center space-x-6">
                            <div class="w-full sm:w-2/3">
                                <x-jet-input id="youtube_url" type="url" wire:model="youtube_url" class="w-full"/>
                                <x-jet-input-error for="youtube_url"/>
                            </div>
                            @if ($youtube_url)
                                <div class="p-2 bg-green-100 border border-green-300 rounded-lg text-green-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="px-4 py-3 bg-slate-100 flex justify-end rounded-b-lg">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-slate-800 border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-slate-700 active:bg-slate-900 focus:outline-none focus:border-slate-900 focus:ring focus:ring-slate-300 disabled:opacity-25 transition" wire:click="save">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
