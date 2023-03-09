<div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/ace.js" integrity="sha512-NSbvq6xPdfFIa2wwSh8vtsPL7AyYAYRAUWRDCqFH34kYIjQ4M7H2POiULf3CH11TRcq3Ww6FZDdLZ8msYhMxjg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/ext-language_tools.min.js" integrity="sha512-jwHjfXzlZZWm/JrYIjGauBO9fNDoxtrl5uVEh8SVu5nZGO38FCFiHx7N5NfLQWsi+cjT4vQcZl9UNLc3oCm+TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/theme-one_dark.min.js" integrity="sha512-fkBNFFo3vuNzwUVCyDJh2aNl7nViFet/XHeWQRjALcuO7a7AdOfGI9iKBhoBt/nV1HsJvzLssyRTuotxAx+YBA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div id="editor" class="absolute top-0 right-0 bottom-0 left-0 text-base leading-6"></div>
    <input type="text" id="content" wire:model="content" class="hidden">

    <div x-data="{
            content: '{{ $content }}',
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
                });
            }
        }"></div>
</div>
