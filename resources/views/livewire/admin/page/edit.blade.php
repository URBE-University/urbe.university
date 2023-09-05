<div>
    <script>
        localStorage.removeItem('code');
        localStorage.setItem('code', `{!! session('code') !!}`);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/ace.js" integrity="sha512-NSbvq6xPdfFIa2wwSh8vtsPL7AyYAYRAUWRDCqFH34kYIjQ4M7H2POiULf3CH11TRcq3Ww6FZDdLZ8msYhMxjg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/ext-language_tools.min.js" integrity="sha512-jwHjfXzlZZWm/JrYIjGauBO9fNDoxtrl5uVEh8SVu5nZGO38FCFiHx7N5NfLQWsi+cjT4vQcZl9UNLc3oCm+TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/theme-one_dark.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editing page</h2>
            @can('page:update')
                <div class="flex items-center space-x-4">
                    <a  class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition"
                        href="{{ route('web.page', ['uri' => $page->url]) }}" target="_blank"
                    >Preview</a>
                    @livewire('admin.page.options', ['page' => $page])
                    <select wire:model="status" @class([
                        'border py-2 rounded-md text-xs focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 shadow-sm uppercase font-semibold',
                        'border-green-300 bg-green-100 text-green-800' => $status == 'published',
                        'border-yellow-300 bg-yellow-100 text-yellow-800' => $status == 'draft',
                        ])>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    <x-button wire:click="save" wire:loading.attr="disabled" wire:target="save">
                        <span wire:loading.remove wire:target="save">Save changes</span>
                        <span wire:loading wire:target="save">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 animate-spin">
                                <path fill-rule="evenodd" d="M15.312 11.424a5.5 5.5 0 01-9.201 2.466l-.312-.311h2.433a.75.75 0 000-1.5H3.989a.75.75 0 00-.75.75v4.242a.75.75 0 001.5 0v-2.43l.31.31a7 7 0 0011.712-3.138.75.75 0 00-1.449-.39zm1.23-3.723a.75.75 0 00.219-.53V2.929a.75.75 0 00-1.5 0V5.36l-.31-.31A7 7 0 003.239 8.188a.75.75 0 101.448.389A5.5 5.5 0 0113.89 6.11l.311.31h-2.432a.75.75 0 000 1.5h4.243a.75.75 0 00.53-.219z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </x-button>
                </div>
            @endcan
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-12 gap-8 lg:gap-12">
                <div class="col-span-12 md:col-span-8 rounded-lg overflow-hidden">
                    <div class="relative min-h-[700px] w-full">
                        <div wire:ignore id="editor" class="absolute top-0 right-0 bottom-0 left-0 text-base leading-6"></div>
                        <input type="text" id="content" wire:model="code" class="sr-only">
                        <div x-data="{
                            content: localStorage.getItem('code'),
                            init() {
                                let contentInput = document.getElementById('content');
                                let editor = ace.edit('editor');
                                editor.setValue(this.content);
                                editor.setTheme('ace/theme/one_dark');
                                editor.session.setMode('ace/mode/html');
                                editor.container.style.lineHeight = 2.5;
                                editor.setShowPrintMargin(false);
                                editor.setOptions({
                                    enableBasicAutocompletion: true
                                });

                                editor.session.on('change', function() {
                                    this.content = editor.getValue();
                                    contentInput.value = this.content;
                                    window.livewire.emit('codeUpdated', this.content);
                                    window.localStorage.setItem('code', this.content);
                                });
                            }
                        }"></div>
                        <x-input-error for="content" />
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4 p-4 bg-white shadow rounded-lg">
                    <div class="">
                        <x-label for="title" value="Title"/>
                        <x-input type="text" wire:model="title" class="mt-1 block w-full text-lg font-bold" placeholder="{{ __('Title') }}" />
                        <x-input-error for="title" />
                    </div>
                    <div class="mt-4">
                        <x-label for="subtitle" value="Subtitle"/>
                        <x-input type="text" wire:model="subtitle" class="mt-1 block w-full" placeholder="{{ __('Subtitle') }}"/>
                    </div>

                    <hr class="my-6">
                    {{-- Shortcodes Legend --}}
                    @include('layouts.partials.shortcodes')
                </div>
            </div>
        </div>
    </div>
</div>
