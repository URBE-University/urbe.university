<div>
    <script>
        localStorage.removeItem('code');
        localStorage.setItem('code', '<?php echo e(session('code')); ?>');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/ace.js" integrity="sha512-NSbvq6xPdfFIa2wwSh8vtsPL7AyYAYRAUWRDCqFH34kYIjQ4M7H2POiULf3CH11TRcq3Ww6FZDdLZ8msYhMxjg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/ext-language_tools.min.js" integrity="sha512-jwHjfXzlZZWm/JrYIjGauBO9fNDoxtrl5uVEh8SVu5nZGO38FCFiHx7N5NfLQWsi+cjT4vQcZl9UNLc3oCm+TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.15.2/theme-one_dark.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editing page</h2>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page:update')): ?>
                <div class="flex items-center space-x-4">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.secondary-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-secondary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Preview <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.page.options', ['page' => $page])->html();
} elseif ($_instance->childHasBeenRendered('l961925433-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l961925433-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l961925433-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l961925433-0');
} else {
    $response = \Livewire\Livewire::mount('admin.page.options', ['page' => $page]);
    $html = $response->html();
    $_instance->logRenderedChild('l961925433-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <select wire:model="status" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'border py-2 rounded-md text-xs focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 shadow-sm uppercase font-semibold',
                        'border-green-300 bg-green-100 text-green-800' => $status == 'published',
                        'border-yellow-300 bg-yellow-100 text-yellow-800' => $status == 'draft',
                        ]) ?>">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.button','data' => ['wire:click' => 'save']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'save']); ?>Save changes <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <input type="text" wire:model="title" class="bg-transparent border-0 w-full text-4xl text-gray-900 font-bold outline-none border-transparent focus:border-transparent focus:ring-0" placeholder="<?php echo e(__('Page title')); ?>">
            <div class="mt-6 relative h-[700px] w-full">
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
            </div>
            
            <?php echo $__env->make('layouts.partials.shortcodes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/page/edit.blade.php ENDPATH**/ ?>