<div>
    <script>
        localStorage.removeItem('code');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/ace.js" integrity="sha512-NSbvq6xPdfFIa2wwSh8vtsPL7AyYAYRAUWRDCqFH34kYIjQ4M7H2POiULf3CH11TRcq3Ww6FZDdLZ8msYhMxjg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/ext-language_tools.min.js" integrity="sha512-jwHjfXzlZZWm/JrYIjGauBO9fNDoxtrl5uVEh8SVu5nZGO38FCFiHx7N5NfLQWsi+cjT4vQcZl9UNLc3oCm+TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/theme-one_dark.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editing page</h2>
            @can('page:create')
                <x-button wire:click="save">Save changes</x-button>
            @endcan
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-12 gap-8 lg:gap-12">
                <div class="col-span-12 md:col-span-8 rounded-lg overflow-hidden">
                    <div>
                        <div class="relative min-h-[700px] w-full">
                            <div wire:ignore id="editor" class="absolute top-0 right-0 bottom-0 left-0 text-base leading-6"></div>
                            <input type="text" id="content" wire:model="code" class="sr-only">
                            <div x-data="{
                                content: '',
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
                        </div>
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
