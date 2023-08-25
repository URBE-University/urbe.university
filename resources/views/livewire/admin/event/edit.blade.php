<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editing Event</h2>
            @can('event:update')
                <div class="flex items-center space-x-4">
                    <select wire:model="status" @class([
                        'border-0 rounded-md text-sm py-1.5',
                        'bg-green-100 text-green-800' => $status == 'published',
                        'bg-yellow-100 text-yellow-800' => $status == 'draft',
                        ])>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    <x-button wire:click="save">Save changes</x-button>
                </div>
            @endcan
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <input type="text" wire:model="name"
                class="bg-transparent border-0 w-full text-2xl text-gray-900 font-extrabold outline-none border-transparent focus:border-transparent focus:ring-0 px-0"
                placeholder="{{ __('Event name') }}">
            <x-input-error for="name" />

            <div class="mt-6">
                <x-label for="description" value="Description"/>
                <textarea id="description" wire:model="description" cols="30" rows="10"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"
                ></textarea>
                <x-input-error for="description" />
            </div>

            <div class="mt-6">
                <div class="grid grid-cols-2 gap-8">
                    <div class="col-span-2 md:col-span-1">
                        <x-label for="start_date" value="Start date & time"/>
                        <x-input id="start_Date" type="datetime-local" wire:model="start_date" class="mt-1"/>
                        <x-input-error for="start_date"/>
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <x-label for="end_date" value="End date & time (optional)"/>
                        <x-input id="end_date" type="datetime-local" wire:model="end_date" class="block mt-1"/>
                        <small class="text-slate-600">{{ __("For multi-day events only.") }}</small>
                        <x-input-error for="end_date"/>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <x-label for="address" value="Postal address (optional)"/>
                <x-input type="text" id="address" wire:model="address" class="mt-1 w-full" placeholder="11430 NW 20th Street, Sweetwater Fl 33172"/>
                <x-input-error for="address" />
            </div>

            <div class="mt-6">
<<<<<<< HEAD
                <x-label for="rsvp_url" value="Reservation url (optional)"/>
=======
                <x-label for="address" value="Reservation url (optional)"/>
>>>>>>> 13e88f4 (..)
                <x-input type="text" id="address" wire:model="rsvp_url" class="mt-1 w-full" />
                <small class="text-slate-600">{{ __("If you have a link to a reservation page, add it here. When someone views this event, they will be shown the option to RSVP through your link.") }}</small>
                <x-input-error for="rsvp_url" />
            </div>

            <div class="mt-6">
                <x-label value="Featured image"/>
                <div class="mt-1 grid grid-cols-6 gap-8 items-center">
                    <div class="col-span-6 md:col-span-2">
                        @if ($image)
                        <img src="{{ $image->temporaryUrl() }}" class="h-40 w-full aspect-auto object-center object-cover rounded-md">
                        @elseif ($featured_image && !$image)
                        <img src="{{ asset($featured_image) }}" class="h-40 w-full aspect-auto object-center object-cover rounded-md">
                        @else
                            <div class="h-40 w-full bg-indigo-50 text-indigo-500 rounded-md flex items-center justify-center">
                                <div class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 mx-auto">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                    <p class="block mt-1 text-sm text-indigo-500">{{ __("WEBP up to 2MB") }}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-span-6 md:col-span-4">
                        <label class="block">
                            <span class="sr-only">Choose featured photo</span>
                            <input type="file" accept="image/webp" wire:model="image" class="inline-block text-sm text-slate-500
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-full file:border-0
                              file:text-sm file:font-semibold
                              file:bg-indigo-50 file:text-indigo-700
                              hover:file:bg-indigo-100
                            "/>
                          </label>
                    </div>
                </div>
                <x-input-error for="image" />
            </div>

            @include('layouts.partials.shortcodes')

        </div>
    </div>
</div>
