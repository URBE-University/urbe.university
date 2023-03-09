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
                <x-jet-button wire:click="save">Save changes</x-jet-button>
            @endcan
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <input type="text" wire:model="title" class="bg-transparent border-0 w-full text-4xl text-gray-900 font-bold outline-none border-transparent focus:border-transparent focus:ring-0" placeholder="{{ __('Page title') }}">
            <div class="mt-6 relative h-[700px] w-full">
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
            {{-- Shortcodes Legend --}}
            @include('layouts.partials.shortcodes')
        </div>
    </div>
</div>
