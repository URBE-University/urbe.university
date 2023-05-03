<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pages</h2>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page:create')): ?>
                <a href="<?php echo e(route('admin.page.create')); ?>" class="btn-link">Add new page</a>
            <?php endif; ?>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-4 bg-white shadow rounded-md">
                <?php $__empty_1 = true; $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'flex items-center justify-between px-6 py-4 rounded-md hover:bg-slate-50',
                        'border-t rounded-t-none' => !$loop->first
                    ]) ?>">
                        <div class="flex items-center space-x-6">
                            <?php if($page->featured_image): ?>
                                <img src="<?php echo e(asset($page->featured_image)); ?>" class="w-20 h-20 aspect-square rounded-md shadow">
                            <?php endif; ?>
                            <div class="">
                                <a href="<?php echo e(route('admin.page.edit', ['page' => $page->id])); ?>" title="Click to open article on a new tab.">
                                    <h1 class="text-2xl font-bold"><?php echo e($page->title); ?></h1>
                                </a>
                                <span class="flex items-center space-x-1">
                                    <?php if($page->published_at): ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-green-500">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                                        </svg>
                                        <time class="text-slate-600 text-sm font-light" datetime="">
                                            <?php echo e(Carbon\Carbon::parse($page->published_at)->format('M d, Y')); ?>

                                        </time>
                                    <?php else: ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-slate-500">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z" clip-rule="evenodd" />
                                        </svg>
                                        <time class="text-slate-600 text-sm font-light" datetime="">
                                            <?php echo e(Carbon\Carbon::parse($page->published_at)->format('M d, Y')); ?>

                                        </time>
                                    <?php endif; ?>
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-end space-x-3">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page:update')): ?>
                                <a href="<?php echo e(route('admin.page.edit', ['page' => $page->id])); ?>" class="text-slate-600 hover:text-slate-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                        <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                    </svg>
                                </a>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page:delete')): ?>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.page.delete', ['page' => $page])->html();
} elseif ($_instance->childHasBeenRendered('del-'.$page->id)) {
    $componentId = $_instance->getRenderedChildComponentId('del-'.$page->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('del-'.$page->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('del-'.$page->id);
} else {
    $response = \Livewire\Livewire::mount('admin.page.delete', ['page' => $page]);
    $html = $response->html();
    $_instance->logRenderedChild('del-'.$page->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="text-center p-12">
                        <img src="<?php echo e(asset('static_assets/undraw_adventure_map_hnin.svg')); ?>" alt="no pages found image"
                            class="w-48 aspect-auto mx-auto">
                        <h1 class="mt-12 text-2xl font-semibold">No pages found</h1>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page:create')): ?>
                            <div class="mt-12">
                                <a href="<?php echo e(route('admin.page.create')); ?>" class="btn-link">Add new page</a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mt-6">
                <?php echo e($pages->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/page/index.blade.php ENDPATH**/ ?>