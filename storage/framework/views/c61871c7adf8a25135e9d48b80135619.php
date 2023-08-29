<div>
    <div class="border bg-white shadow sm:rounded-md">
        <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'max-w-7xl w-full bg-white',
                'border-b' => !$loop->last,
                'rounded-t-lg' => $loop->first,
                'rounded-b-lg' => $loop->last
            ]); ?>"
            x-data="{ open_<?php echo e($item->id); ?>: false }"
            x-cloak
            >
                
                <div class="flex items-center justify-between p-4">
                    <div class=""><?php echo e($item->label); ?></div>

                    <div class="flex items-center">
                        <div class="flex items-center bg-slate-100 px-2 py-1 rounded">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:update')): ?>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.sidenav.edit', ['selector' => $item->location, 'menu' => $item])->html();
} elseif ($_instance->childHasBeenRendered('edit-<?php echo e($item->id); ?>')) {
    $componentId = $_instance->getRenderedChildComponentId('edit-<?php echo e($item->id); ?>');
    $componentTag = $_instance->getRenderedChildComponentTagName('edit-<?php echo e($item->id); ?>');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('edit-<?php echo e($item->id); ?>');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.sidenav.edit', ['selector' => $item->location, 'menu' => $item]);
    $html = $response->html();
    $_instance->logRenderedChild('edit-<?php echo e($item->id); ?>', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:delete')): ?>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.sidenav.delete', ['menu' => $item])->html();
} elseif ($_instance->childHasBeenRendered('delete-<?php echo e($item->id); ?>')) {
    $componentId = $_instance->getRenderedChildComponentId('delete-<?php echo e($item->id); ?>');
    $componentTag = $_instance->getRenderedChildComponentTagName('delete-<?php echo e($item->id); ?>');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('delete-<?php echo e($item->id); ?>');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.sidenav.delete', ['menu' => $item]);
    $html = $response->html();
    $_instance->logRenderedChild('delete-<?php echo e($item->id); ?>', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            <?php endif; ?>
                        </div>
                        <?php if($item->type == "sidenav"): ?>
                            <div class="text-2xl font-light ml-3"
                                @click="open_<?php echo e($item->id); ?> = !open_<?php echo e($item->id); ?>"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 cursor-pointer hover:text-urbe" x-show="!open_<?php echo e($item->id); ?>">
                                    <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 cursor-pointer hover:text-urbe" x-show="open_<?php echo e($item->id); ?>">
                                    <path fill-rule="evenodd" d="M5.25 12a.75.75 0 01.75-.75h12a.75.75 0 010 1.5H6a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if($item->type == 'sidenav'): ?>
                    <div class="" x-show="open_<?php echo e($item->id); ?>" @click.outside="open_<?php echo e($item->id); ?> = false" x-cloak>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.sidenav.children', ['selector' => 'sidenav', 'parent' => $item->id])->html();
} elseif ($_instance->childHasBeenRendered('children-<?php echo e($item->id); ?>')) {
    $componentId = $_instance->getRenderedChildComponentId('children-<?php echo e($item->id); ?>');
    $componentTag = $_instance->getRenderedChildComponentTagName('children-<?php echo e($item->id); ?>');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('children-<?php echo e($item->id); ?>');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.sidenav.children', ['selector' => 'sidenav', 'parent' => $item->id]);
    $html = $response->html();
    $_instance->logRenderedChild('children-<?php echo e($item->id); ?>', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                <?php endif; ?>
                
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <?php endif; ?>
    </div>

    <div class="my-12"></div>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:create')): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.sidenav.create', ['selector' => 'sidenav'])->html();
} elseif ($_instance->childHasBeenRendered('l2208802800-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l2208802800-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2208802800-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2208802800-3');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.sidenav.create', ['selector' => 'sidenav']);
    $html = $response->html();
    $_instance->logRenderedChild('l2208802800-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>

</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/menu/sidenav/index.blade.php ENDPATH**/ ?>