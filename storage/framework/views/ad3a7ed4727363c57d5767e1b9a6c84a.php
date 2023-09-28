<div class="">
    <?php $__env->startSection('content'); ?>
        <div class="w-full bg-center bg-no-repeat bg-cover" style="background-image: url(<?php echo e($page->featured_image ? asset($page->featured_image) : "https://urbeuniversity.edu/static_assets/page-header-bg.webp"); ?>)">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
                <div class="text-white py-12 sm:py-24">
                <h1 class="border-l-8 border-l-white pl-4 text-5xl font-extrabold"><?php echo eval("?>$page->title"); ?></h1>
                <p class="mt-6 text-lg md:text-xl"><?php echo eval("?>$page->subtitle"); ?></p>
                </div>
            </div>
        </div>

        <div class="w-full py-12 sm:py-24">
            <div class="mx-auto max-w-6xl px-4 text-center sm:px-6 lg:px-8">

                <div class="grid grid-cols-12 items-start gap-6">
                    <main class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'col-span-12 text-left w-full',
                        'md:col-span-9' => $page->menu_id
                    ]); ?>">
                        <?php echo eval("?>" . $page_content); ?>

                    </main>

                    <?php if($page->menu_id): ?>
                        <aside class="col-span-12 hidden justify-end text-base md:col-span-3 md:flex">
                            <ul class="text-left">
                                <li class="mt-2">
                                    <p class="border-l-urbe text-urbe border-l-4 pl-2 text-xl font-semibold"><?php echo e(__("In this section")); ?></p>
                                </li>
                                <?php $__empty_1 = true; $__currentLoopData = \App\Models\Menu::where('parent', $page->menu_id)->where('location', 'sidenav')->orderBy('order', 'asc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <li class="mt-2">
                                        <a href="<?php echo e($link->url); ?>" <?php if($link->opens_in_new_tab): ?> target="_blank" <?php endif; ?> class="transition-all hover:text-sky-500 hover:underline"><?php echo e($link->label); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </ul>
                        </aside>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="pb-12">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <p class="text-sm text-slate-600">
                    <?php echo e(__("This page was last updated on ") . \Carbon\Carbon::parse($page->updated_at)->format('M d, Y')); ?>. <?php echo e(__("You can refer to our")); ?> <a href="<?php echo e(route('catalog.show')); ?>" target="_blank" class="underline text-sky-500">Catalog</a> <?php echo e(__("to find the latest information on this topic")); ?>.
                </p>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
</div>

<?php echo $__env->make('layouts.website', ['settings' => $settings, 'page' => $page], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/website/page.blade.php ENDPATH**/ ?>