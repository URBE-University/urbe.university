<div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/ace.js" integrity="sha512-NSbvq6xPdfFIa2wwSh8vtsPL7AyYAYRAUWRDCqFH34kYIjQ4M7H2POiULf3CH11TRcq3Ww6FZDdLZ8msYhMxjg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/ext-language_tools.min.js" integrity="sha512-jwHjfXzlZZWm/JrYIjGauBO9fNDoxtrl5uVEh8SVu5nZGO38FCFiHx7N5NfLQWsi+cjT4vQcZl9UNLc3oCm+TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/theme-one_dark.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Header code</h2>
                <a href="{{route('admin.seo.home')}}" class="bg-slate-100 p-2 -m-2 rounded-md text-slate-600 hover:text-blue-500 hover:bg-blue-100 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div>
                <div class="relative min-h-[400px] w-full">
                    <div wire:ignore id="editor" class="absolute top-0 right-0 bottom-0 left-0 text-base leading-6"></div>
                    <input type="text" id="content" wire:model="content" class="sr-only">
                    <div wire:ignore x-data="{
                        content: '',
                        init() {
                            let contentInput = document.getElementById('content');
                            let editor = ace.edit('editor');
                            editor.setValue(contentInput.value);
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
                <x-button class="mt-6" wire:click="save">Save changes</x-button>
            </div>
        </div>
    </div>
</div>
