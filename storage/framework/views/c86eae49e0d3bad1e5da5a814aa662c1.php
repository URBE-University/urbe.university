<?php $__env->startSection('content'); ?>

<div class="w-full h-56" style="background-image: url(<?php echo e(asset('static_assets/page-header-bg.webp')); ?>)">
    <div class="h-full flex items-center justify-center">
        <h1 class="text-5xl font-extrabold text-white">| URBE Blogs</h1>
    </div>
    <div class="bg-slate-100">
        <div class="max-w-7xl mx-auto">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.breadcrumbs')->html();
} elseif ($_instance->childHasBeenRendered('QiyGtzL')) {
    $componentId = $_instance->getRenderedChildComponentId('QiyGtzL');
    $componentTag = $_instance->getRenderedChildComponentTagName('QiyGtzL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QiyGtzL');
} else {
    $response = \Livewire\Livewire::mount('website.breadcrumbs');
    $html = $response->html();
    $_instance->logRenderedChild('QiyGtzL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>

<div class="py-6"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="mt-6 w-full mx-auto text-center">
        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <a href="<?php echo e(route('blog.category.show', ['category' => $category->slug])); ?>"
                class="px-3 py-1 rounded-full bg-slate-100 hover:bg-slate-200 text-sm text-black transition-all"
            ><?php echo e($category->slug); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <?php endif; ?>
    </div>
    <div class="py-6"></div>
    <div class="grid grid-cols-3 gap-8">
        <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-span-3 md:col-span-1">
                <div class="w-full">
                    <a href="<?php echo e(route('blog.post.show', ['slug' => $post->slug])); ?>" aria-label="Link to post">
                        <img src="<?php echo e(asset($post->featured_image)); ?>" alt="<?php echo e($post->featured_image_alt_text); ?>" class="w-full aspect-auto rounded-lg shadow">
                    </a>
                    <div class="mt-2">
                        <a href="<?php echo e(route('blog.post.show', ['slug' => $post->slug])); ?>">
                            <h2 class="font-medium text-urbe text-xl underline"><?php echo e($post->title); ?></h2>
                        </a>
                        <p class="mt-2 text-base"><?php echo e(str($post->content)->limit(96)); ?></p>
                        <div class="mt-4 flex items-center space-x-3">
                            <img src="<?php echo e(asset($post->user->profile_photo_url)); ?>" alt="<?php echo e($post->user->name); ?>"
                                class="flex-none w-10 h-10 object-cover object-center rounded-full">
                            <div class="text-sm font-mono">
                                <p class="text-sky-500 font-medium"><?php echo e(__("Written by")); ?> <a class="underline" href="<?php echo e(route('blog.author.show', ['author' => str($post->user->name)->slug()])); ?>"><?php echo e($post->user->name); ?></a></p>
                                <p><?php echo e(Carbon\Carbon::parse($post->published_at)->format('F d, Y')); ?> &middot; <a class="underline" href="<?php echo e(route('blog.post.show', ['slug' => $post->slug])); ?>"><?php echo e(__("Read article")); ?></a></p>
                            </div>
                        </div>
                        <div class="mt-2">
                            <?php $__empty_2 = true; $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                <a href="<?php echo e(route('blog.category.show', ['category' => $postCategory->slug])); ?>" class="px-3 py-1 rounded-full bg-slate-100 hover:bg-slate-200 text-sm text-black transition-all"><?php echo e($postCategory->slug); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="text-xl">Abel, write something here...</div>
        <?php endif; ?>
    </div>

    <div class="mt-6">
        <?php echo e($posts->links()); ?>

    </div>
</div>

<div class="py-6"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', ['settings' => $settings, 'title' => 'The blog'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/website/blog/index.blade.php ENDPATH**/ ?>