<div>
    <button wire:click="$toggle('modal')" class="px-3 py-1 rounded-md border border-indigo-300 bg-indigo-100 text-indigo-600 text-sm">{{ __("Details") }}</button>

    <x-dialog-modal wire:model="modal" maxWidth="5xl">
        <x-slot name="title">
            <div class="flex items-center justify-between">
                <p class="text-sm text-slate-700">{{ $media->file_name }}</p>
                <button wire:click="$toggle('modal')" class="p-2 bg-slate-100 rounded-lg hover:bg-red-100 hover:text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </x-slot>
        <x-slot name="content">
            <div class="grid grid-cols-8 gap-8">
                <div class="col-span-8 md:col-span-3 flex items-center justify-center">
                    @if ($media->file_type != 'pdf')
                        <img src="{{ asset($media->url) }}" alt="{{ $media->alt_text }}" class="w-full aspect-square rounded-lg object-cover object-center">
                    @else
                        <object data="{{ asset($media->url) }}" type="application/pdf" class="w-full h-[400px]"></object>
                    @endif
                </div>
                <div class="col-span-8 md:col-span-5">
                    <div class="">
                        <x-label for="title">{{ __("Title") }}</x-label>
                        <x-input type="text" id="title" wire:model="title" class="w-full mt-1"/>
                    </div>
                    <div class="mt-6">
                        <x-label for="alt_text">{{ __("Alt text") }}</x-label>
                        <x-input type="text" id="alt_text" wire:model="alt_text" class="w-full mt-1"/>
                    </div>
                    <div class="mt-6">
                        <x-label for="alt_text">{{ __("Media URL") }}</x-label>
                        <div class="block w-full mt-1 border rounded-md text-sm text-slate-600 px-4 py-2">
                            {{ url($media->url) }}
                        </div>
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="w-full flex items-center justify-between">
                <div class="flex items-center space-x-6">
                    <p class="text-sm "><span class="font-semibold text-slate-600">Size:</span> {{ $fileSize }}</p>
                    <p class="text-sm "><span class="font-semibold text-slate-600">Type:</span> {{ $media->file_type }}</p>
                </div>
                <x-button wire:click="save">Update</x-button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
