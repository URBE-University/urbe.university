<div>
    <div class="border bg-white shadow sm:rounded-md" wire:sortable="reorder">
        <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'max-w-7xl w-full bg-white',
                'border-b' => !$loop->last,
                'rounded-t-lg' => $loop->first,
                'rounded-b-lg' => $loop->last
            ]); ?>" x-data="{ open_<?php echo e($item->id); ?>: false }" x-cloak
            wire:sortable.item="<?php echo e($item->id); ?>" wire:key="link-<?php echo e($item->id); ?>"
            >
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center space-x-3">
                        <button wire:sortable.handle>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                <path d="M7 2a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>
                        </button>
                        <span class=""><?php echo e($item->label); ?></span>
                        <?php if($item->type == 'dropdown'): ?>
                            <span class="text-green-600 text-sm bg-green-100 px-1 py-0.5 rounded">Dropdown</span>
                        <?php endif; ?>
                        <?php if($item->type == 'megamenu'): ?>
                            <span class="text-fuchsia-500 text-sm bg-fuchsia-100 px-1 py-0.5 rounded">Megamenu</span>
                        <?php endif; ?>
                    </div>

                    <div class="flex items-center">
                        <div class="flex items-center bg-slate-100 px-2 py-1 rounded">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:update')): ?>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.edit', ['selector' => 'navbar', 'menu' => $item])->html();
} elseif ($_instance->childHasBeenRendered('edit-<?php echo e($item->id); ?>')) {
    $componentId = $_instance->getRenderedChildComponentId('edit-<?php echo e($item->id); ?>');
    $componentTag = $_instance->getRenderedChildComponentTagName('edit-<?php echo e($item->id); ?>');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('edit-<?php echo e($item->id); ?>');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.edit', ['selector' => 'navbar', 'menu' => $item]);
    $html = $response->html();
    $_instance->logRenderedChild('edit-<?php echo e($item->id); ?>', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:delete')): ?>
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
                            <?php endif; ?>
                        </div>
                        <?php if($item->type == 'dropdown' || $item->type == 'megamenu'): ?>
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

                <?php if($item->type == 'dropdown' || $item->type == 'megamenu'): ?>
                    <div class="" x-show="open_<?php echo e($item->id); ?>" @click.outside="open_<?php echo e($item->id); ?> = false" x-cloak>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.children', ['selector' => 'navbar', 'parent' => $item->id])->html();
} elseif ($_instance->childHasBeenRendered('children-<?php echo e($item->id); ?>')) {
    $componentId = $_instance->getRenderedChildComponentId('children-<?php echo e($item->id); ?>');
    $componentTag = $_instance->getRenderedChildComponentTagName('children-<?php echo e($item->id); ?>');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('children-<?php echo e($item->id); ?>');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.children', ['selector' => 'navbar', 'parent' => $item->id]);
    $html = $response->html();
    $_instance->logRenderedChild('children-<?php echo e($item->id); ?>', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                            'mt-2 py-2 bg-slate-50',
                            'rounded-b-lg' => $loop->last
                        ]); ?>">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:create')): ?>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.create', ['selector' => 'navbar', 'parent' => $item->id])->html();
} elseif ($_instance->childHasBeenRendered('l2212301028-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l2212301028-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2212301028-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2212301028-3');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.create', ['selector' => 'navbar', 'parent' => $item->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l2212301028-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="text-center p-12">
                <img src="<?php echo e(asset('static_assets/undraw_adventure_map_hnin.svg')); ?>" alt="no posts found image"
                    class="w-48 aspect-auto mx-auto">
                <h1 class="mt-12 text-2xl font-semibold">No menu items found</h1>
            </div>
        <?php endif; ?>
    </div>

    <div class="my-12"></div>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:create')): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.create', ['selector' => 'navbar'])->html();
} elseif ($_instance->childHasBeenRendered('l2212301028-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l2212301028-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2212301028-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2212301028-4');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.create', ['selector' => 'navbar']);
    $html = $response->html();
    $_instance->logRenderedChild('l2212301028-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/menu/navbar.blade.php ENDPATH**/ ?>