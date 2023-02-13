<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Webmaster Tools</h2>
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
            <div class="w-full bg-white sm:rounded-lg shadow">
                <div class="px-4 sm:px-6 lg:px-8 py-8">
                    <div class="flex items-center space-x-3">
                        <p class="text-lg font-semibold">Enter verification codes for third-party webmaster tools.</p>
                    </div>

                    <div class="mt-6">
                        <x-jet-label for="google_search_id">Google Search Console</x-jet-label>
                        <div class="mt-1 flex items-center space-x-6">
                            <div class="w-full sm:w-2/3">
                                <x-jet-input id="google_search_id" type="url" wire:model="google_search_id" class="w-full"/>
                                <p class="mt-1 text-xs font-medium tracking-wide text-slate-600">{{__("Enter your Google Search Console verification ID.")}}</p>
                                <x-jet-input-error for="google_search_id"/>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <x-jet-label for="bing_webmaster_id">Bing Webmaster Tools</x-jet-label>
                        <div class="mt-1 flex items-center space-x-6">
                            <div class="w-full sm:w-2/3">
                                <x-jet-input id="bing_webmaster_id" type="url" wire:model="bing_webmaster_id" class="w-full"/>
                                <p class="mt-1 text-xs font-medium tracking-wide text-slate-600">{{__("Enter your Bing Webmaster Tools verification ID.")}}</p>
                                <x-jet-input-error for="bing_webmaster_id"/>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <x-jet-label for="yandex_webmaster_id">Yandex Webmaster Tools</x-jet-label>
                        <div class="mt-1 flex items-center space-x-6">
                            <div class="w-full sm:w-2/3">
                                <x-jet-input id="yandex_webmaster_id" type="url" wire:model="yandex_webmaster_id" class="w-full"/>
                                <p class="mt-1 text-xs font-medium tracking-wide text-slate-600">{{__("Enter your Yandex verification ID.")}}</p>
                                <x-jet-input-error for="yandex_webmaster_id"/>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="px-4 sm:px-6 lg:px-8 py-3 bg-slate-100 flex justify-end rounded-b-lg">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-slate-800 border border-transparent rounded-lg font-semibold text-xs text-white uppercase tracking-widest hover:bg-slate-700 active:bg-slate-900 focus:outline-none focus:border-slate-900 focus:ring focus:ring-slate-300 disabled:opacity-25 transition" wire:click="save">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
