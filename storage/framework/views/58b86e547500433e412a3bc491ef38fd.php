<div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

        <div>
            <h2 class="font-semibold">Column 1</h2>
            <div class="mt-2 border bg-white shadow sm:rounded-lg" wire:sortable="reorder">
                <?php $__empty_1 = true; $__currentLoopData = $items->where('column', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'md:max-w-sm w-full bg-white',
                        'border-b' => !$loop->last,
                        'rounded-t-lg' => $loop->first,
                        'rounded-b-lg' => $loop->last
                    ]) ?>" x-data="{ open_<?php echo e($item->id); ?>: false }" x-cloak
                    wire:sortable.item="<?php echo e($item->id); ?>" wire:key="link-<?php echo e($item->id); ?>"
                    >
                        <div class="flex items-center justify-between p-4">
                            <div class="flex items-center space-x-3">
                                <button wire:sortable.handle>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                        <path d="M7 2a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                    </svg>
                                </button>
                                <span class="text-lg"><?php echo e($item->label); ?></span>
                            </div>

                            <div class="flex items-center">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:update')): ?>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.edit', ['selector' => 'footer', 'menu' => $item])->html();
} elseif ($_instance->childHasBeenRendered('edit-<?php echo e($item->id); ?>')) {
    $componentId = $_instance->getRenderedChildComponentId('edit-<?php echo e($item->id); ?>');
    $componentTag = $_instance->getRenderedChildComponentTagName('edit-<?php echo e($item->id); ?>');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('edit-<?php echo e($item->id); ?>');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.edit', ['selector' => 'footer', 'menu' => $item]);
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
                                <?php if($item->type == 'dropdown'): ?>
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

                        <?php if($item->type == 'dropdown'): ?>
                            <div class="" x-show="open_<?php echo e($item->id); ?>" @click.outside="open_<?php echo e($item->id); ?> = false" x-cloak>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.children', ['selector' => 'footer', 'parent' => $item->id])->html();
} elseif ($_instance->childHasBeenRendered('children-<?php echo e($item->id); ?>')) {
    $componentId = $_instance->getRenderedChildComponentId('children-<?php echo e($item->id); ?>');
    $componentTag = $_instance->getRenderedChildComponentTagName('children-<?php echo e($item->id); ?>');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('children-<?php echo e($item->id); ?>');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.children', ['selector' => 'footer', 'parent' => $item->id]);
    $html = $response->html();
    $_instance->logRenderedChild('children-<?php echo e($item->id); ?>', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                    'mt-2 py-2 bg-slate-50',
                                    'rounded-b-lg' => $loop->last
                                ]) ?>">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:create')): ?>
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.create', ['selector' => 'footer', 'parent' => $item->id])->html();
} elseif ($_instance->childHasBeenRendered('l3267169930-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l3267169930-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3267169930-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3267169930-3');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.create', ['selector' => 'footer', 'parent' => $item->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l3267169930-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                        <img src="<?php echo e(asset('images/undraw_adventure_map_hnin.svg')); ?>" alt="no posts found image"
                            class="w-48 aspect-auto mx-auto">
                        <h1 class="mt-12 text-2xl font-semibold">No menu items found</h1>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div>
            <h2 class="font-semibold">Column 2</h2>
            <div class="mt-2 border bg-white shadow sm:rounded-lg" wire:sortable="reorder">
                <?php $__empty_1 = true; $__currentLoopData = $items->where('column', 2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'md:max-w-sm w-full bg-white',
                        'border-b' => !$loop->last,
                        'rounded-t-lg' => $loop->first,
                        'rounded-b-lg' => $loop->last
                    ]) ?>" x-data="{ open_<?php echo e($item->id); ?>: false }" x-cloak
                    wire:sortable.item="<?php echo e($item->id); ?>" wire:key="link-<?php echo e($item->id); ?>"
                    >
                        <div class="flex items-center justify-between p-4">
                            <div class="flex items-center space-x-3">
                                <button wire:sortable.handle>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                        <path d="M7 2a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                    </svg>
                                </button>
                                <span class="text-lg"><?php echo e($item->label); ?></span>
                            </div>

                            <div class="flex items-center">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:update')): ?>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.edit', ['selector' => 'footer', 'menu' => $item])->html();
} elseif ($_instance->childHasBeenRendered('edit-<?php echo e($item->id); ?>')) {
    $componentId = $_instance->getRenderedChildComponentId('edit-<?php echo e($item->id); ?>');
    $componentTag = $_instance->getRenderedChildComponentTagName('edit-<?php echo e($item->id); ?>');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('edit-<?php echo e($item->id); ?>');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.edit', ['selector' => 'footer', 'menu' => $item]);
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
                                <?php if($item->type == 'dropdown'): ?>
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

                        <?php if($item->type == 'dropdown'): ?>
                            <div class="" x-show="open_<?php echo e($item->id); ?>" @click.outside="open_<?php echo e($item->id); ?> = false" x-cloak>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.children', ['selector' => 'footer', 'parent' => $item->id])->html();
} elseif ($_instance->childHasBeenRendered('children-<?php echo e($item->id); ?>')) {
    $componentId = $_instance->getRenderedChildComponentId('children-<?php echo e($item->id); ?>');
    $componentTag = $_instance->getRenderedChildComponentTagName('children-<?php echo e($item->id); ?>');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('children-<?php echo e($item->id); ?>');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.children', ['selector' => 'footer', 'parent' => $item->id]);
    $html = $response->html();
    $_instance->logRenderedChild('children-<?php echo e($item->id); ?>', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                    'mt-2 py-2 bg-slate-50',
                                    'rounded-b-lg' => $loop->last
                                ]) ?>">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:create')): ?>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.create', ['selector' => 'footer', 'parent' => $item->id])->html();
} elseif ($_instance->childHasBeenRendered('l3267169930-7')) {
    $componentId = $_instance->getRenderedChildComponentId('l3267169930-7');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3267169930-7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3267169930-7');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.create', ['selector' => 'footer', 'parent' => $item->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l3267169930-7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
        </div>

        <div>
            <h2 class="font-semibold">Column 3</h2>
            <div class="mt-2 border bg-white shadow sm:rounded-lg" wire:sortable="reorder">
                <?php $__empty_1 = true; $__currentLoopData = $items->where('column', 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'md:max-w-sm w-full bg-white',
                        'border-b' => !$loop->last,
                        'rounded-t-lg' => $loop->first,
                        'rounded-b-lg' => $loop->last
                    ]) ?>" x-data="{ open_<?php echo e($item->id); ?>: false }" x-cloak
                    wire:sortable.item="<?php echo e($item->id); ?>" wire:key="link-<?php echo e($item->id); ?>"
                    >
                        <div class="flex items-center justify-between p-4">
                            <div class="flex items-center space-x-3">
                                <button wire:sortable.handle>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                                        <path d="M7 2a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-3 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                    </svg>
                                </button>
                                <span class="text-lg"><?php echo e($item->label); ?></span>
                            </div>

                            <div class="flex items-center">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:update')): ?>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.edit', ['selector' => 'footer', 'menu' => $item])->html();
} elseif ($_instance->childHasBeenRendered('edit-<?php echo e($item->id); ?>')) {
    $componentId = $_instance->getRenderedChildComponentId('edit-<?php echo e($item->id); ?>');
    $componentTag = $_instance->getRenderedChildComponentTagName('edit-<?php echo e($item->id); ?>');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('edit-<?php echo e($item->id); ?>');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.edit', ['selector' => 'footer', 'menu' => $item]);
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
                                <?php if($item->type == 'dropdown'): ?>
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

                        <?php if($item->type == 'dropdown'): ?>
                            <div class="" x-show="open_<?php echo e($item->id); ?>" @click.outside="open_<?php echo e($item->id); ?> = false" x-cloak>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.children', ['selector' => 'footer', 'parent' => $item->id])->html();
} elseif ($_instance->childHasBeenRendered('children-<?php echo e($item->id); ?>')) {
    $componentId = $_instance->getRenderedChildComponentId('children-<?php echo e($item->id); ?>');
    $componentTag = $_instance->getRenderedChildComponentTagName('children-<?php echo e($item->id); ?>');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('children-<?php echo e($item->id); ?>');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.children', ['selector' => 'footer', 'parent' => $item->id]);
    $html = $response->html();
    $_instance->logRenderedChild('children-<?php echo e($item->id); ?>', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                    'mt-2 py-2 bg-slate-50',
                                    'rounded-b-lg' => $loop->last
                                ]) ?>">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:create')): ?>
                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.create', ['selector' => 'footer', 'parent' => $item->id])->html();
} elseif ($_instance->childHasBeenRendered('l3267169930-11')) {
    $componentId = $_instance->getRenderedChildComponentId('l3267169930-11');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3267169930-11');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3267169930-11');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.create', ['selector' => 'footer', 'parent' => $item->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l3267169930-11', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
        </div>
    </div>

    <div class="my-12"></div>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:create')): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.menu.create', ['selector' => 'footer'])->html();
} elseif ($_instance->childHasBeenRendered('l3267169930-12')) {
    $componentId = $_instance->getRenderedChildComponentId('l3267169930-12');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3267169930-12');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3267169930-12');
} else {
    $response = \Livewire\Livewire::mount('admin.menu.create', ['selector' => 'footer']);
    $html = $response->html();
    $_instance->logRenderedChild('l3267169930-12', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php endif; ?>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/menu/footer.blade.php ENDPATH**/ ?>