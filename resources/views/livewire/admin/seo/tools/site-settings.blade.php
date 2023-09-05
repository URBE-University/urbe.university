<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Site Settings</h2>
                <a href="{{route('admin.seo.home')}}" class="bg-slate-100 p-2 -m-2 rounded-md text-slate-600 hover:text-blue-500 hover:bg-blue-100 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full bg-white rounded-md shadow">
                <div class="p-8">
                    <div class="flex items-center space-x-3 fill-slate-600">
                        <p class="text-xl font-semibold">Site information</p>
                    </div>

                    <div class="mt-6">
                        <x-label for="name">Site name</x-label>
                        <x-input id="name" type="text" wire:model="name" class="mt-1 w-2/3"/>
                        <x-input-error for="name" class="mt-1"/>
                    </div>

                    <div class="mt-6">
                        <x-label for="description">Site description</x-label>
                        <textarea id="description" cols="30" rows="3" wire:model="description"
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"
                        ></textarea>
                        <x-input-error for="description" class="mt-1"/>
                    </div>

                    <div class="mt-6">
                        <x-label for="canonical_url">Site canonical URL</x-label>
                        <x-input id="canonical_url" type="url" wire:model="canonicalUrl" class="mt-1 w-2/3" placeholder="https://yourawesomewebsite.com"/>
                        <p class="mt-1 text-xs font-medium text-slate-600">If you change this url, make sure you also change the site url in the environment file.</p>
                    </div>

                    <div class="mt-6">
                        <x-label for="keywords">Keywords</x-label>
                        <textarea id="keywords" cols="30" rows="3" wire:model="keywords"
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"
                        ></textarea>
                        <p class="mt-1 text-xs font-medium text-slate-600">Google may not be using the keyword meta tag any longer, but it doesn't hurt to try. Enter each keyword separated by a comma.</p>
                    </div>

                    <div class="mt-6">
                        <p class="block font-medium text-sm text-gray-700">Favicon</p>
                        <div class="mt-2 flex items-center space-x-6">
                            <div class="shrink-0">
                                <img class="h-16 w-16 object-cover rounded bg-blue-50 flex items-center text-xs justify-center uppercase text-blue-500 font-bold" src="{{ $favicon ? asset($favicon->temporaryUrl()) : asset($settings?->favicon) }}" alt="Favicon" />
                            </div>
                            <label class="block">
                                <span class="sr-only">Choose favicon</span>
                                <input type="file" wire:model="favicon" accept=".png,.svg" class="block w-full text-sm text-slate-500
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-blue-50 file:text-blue-700
                                  hover:file:bg-blue-100
                                "/>
                              </label>
                        </div>
                        <p class="mt-1 text-xs font-medium text-slate-600">Upload only .svg or .png, 16x16 pixels.</p>
                        <x-input-error for="favicon" class="mt-1"/>
                    </div>

                    <div class="mt-6">
                        <p class="block font-medium text-sm text-gray-700">Card image</p>
                        <div class="mt-2">
                            <div class="shrink-0">
                                <img class="h-96 w-full object-cover rounded-md bg-blue-50 flex items-center text-xs justify-center uppercase text-blue-500 font-bold" src="{{ $card_image ? asset($card_image->temporaryUrl()) : asset($settings?->card_image) }}" alt="Card image" />
                            </div>
                            <p class="mt-1 text-xs font-medium text-slate-600">Upload only .webp images, 800x418 pixels.</p>
                            <label class="mt-4 block border:none">
                                <span class="sr-only">Choose the card image</span>
                                <input type="file" wire:model="card_image" accept=".webp" class="block w-full text-sm text-slate-500
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-blue-50 file:text-blue-700
                                  hover:file:bg-blue-100
                                "/>
                              </label>
                        </div>
                        <x-input-error for="card_image" class="mt-1"/>

                    </div>


                </div>
                <div class="px-4 py-3 bg-slate-100 flex justify-end rounded-b-lg">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-slate-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-slate-700 active:bg-slate-900 focus:outline-none focus:border-slate-900 focus:ring focus:ring-slate-300 disabled:opacity-25 transition" wire:click="save">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
