<div>
    <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="flex items-center justify-between text-sm py-2 hover:bg-slate-50 px-4 ml-8 rounded-md">
            <div class="flex items-center space-x-3">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                        <path d="M7 2a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                </button>
                <span class="text-lg"><?php echo e($item->label); ?></span>
            </div>
            <div class="flex items-center">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.edit', ['selector' => $item->location, 'menu' => $item])->html();
} elseif ($_instance->childHasBeenRendered('edit-<?php echo e($item->id); ?>')) {
    $componentId = $_instance->getRenderedChildComponentId('edit-<?php echo e($item->id); ?>');
    $componentTag = $_instance->getRenderedChildComponentTagName('edit-<?php echo e($item->id); ?>');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('edit-<?php echo e($item->id); ?>');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.edit', ['selector' => $item->location, 'menu' => $item]);
    $html = $response->html();
    $_instance->logRenderedChild('edit-<?php echo e($item->id); ?>', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.delete', ['menu' => $item])->html();
} elseif ($_instance->childHasBeenRendered('delete-<?php echo e($item->id); ?>')) {
    $componentId = $_instance->getRenderedChildComponentId('delete-<?php echo e($item->id); ?>');
    $componentTag = $_instance->getRenderedChildComponentTagName('delete-<?php echo e($item->id); ?>');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('delete-<?php echo e($item->id); ?>');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.delete', ['menu' => $item]);
    $html = $response->html();
    $_instance->logRenderedChild('delete-<?php echo e($item->id); ?>', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

    <?php endif; ?>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/menu/children.blade.php ENDPATH**/ ?>