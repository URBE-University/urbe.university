<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Manage redirects</h2>
                <div class="flex items-center space-x-8">
                    <a href="<?php echo e(route('admin.seo.home')); ?>" class="bg-slate-100 p-2 -m-2 rounded-lg text-slate-600 hover:text-blue-500 hover:bg-blue-100 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['type' => 'search','wire:model' => 'query','class' => 'py-1','placeholder' => 'Search...']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'search','wire:model' => 'query','class' => 'py-1','placeholder' => 'Search...']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.seo.tools.redirects.create')->html();
} elseif ($_instance->childHasBeenRendered('l1497782413-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1497782413-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1497782413-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1497782413-0');
} else {
    $response = \Livewire\Livewire::mount('admin.seo.tools.redirects.create');
    $html = $response->html();
    $_instance->logRenderedChild('l1497782413-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
            <div class="mt-6 relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 rounded-lg">
                    <thead class="text-xs text-gray-700 uppercase bg-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Endpoint
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Redirects to
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Type
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                ><?php echo e(config('app.url') . '/go-to' . $item->source_url); ?></th>
                                <td class="px-6 py-4">
                                    <?php echo e($item->destination_url); ?>

                                </td>
                                <td class="px-6 py-4">
                                    <?php echo e($item->code); ?>

                                </td>
                                <td class="px-6 py-4 flex items-center justify-end space-x-3">
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.seo.tools.redirects.edit', ['redirect' => $item])->html();
} elseif ($_instance->childHasBeenRendered('edit-'.$item->id)) {
    $componentId = $_instance->getRenderedChildComponentId('edit-'.$item->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('edit-'.$item->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('edit-'.$item->id);
} else {
    $response = \Livewire\Livewire::mount('admin.seo.tools.redirects.edit', ['redirect' => $item]);
    $html = $response->html();
    $_instance->logRenderedChild('edit-'.$item->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.seo.tools.redirects.delete', ['redirect' => $item])->html();
} elseif ($_instance->childHasBeenRendered('delete-'.$item->id)) {
    $componentId = $_instance->getRenderedChildComponentId('delete-'.$item->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('delete-'.$item->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('delete-'.$item->id);
} else {
    $response = \Livewire\Livewire::mount('admin.seo.tools.redirects.delete', ['redirect' => $item]);
    $html = $response->html();
    $_instance->logRenderedChild('delete-'.$item->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="mt-6">
                <?php echo e($items->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/seo/tools/redirects/index.blade.php ENDPATH**/ ?>