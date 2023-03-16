<?php $__env->startSection('content'); ?>
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <div class="text-center">
            <h1 class="text-4xl font-serif font-bold text-urbe"><?php echo e($post->title); ?></h1>
            <p class="mt-6 text-base font-mono">Written by <a class="underline" href="<?php echo e(route('blog.author.show', ['author' => str($post->user->name)->slug()])); ?>"><?php echo e($post->user->name); ?></a> &middot; <?php echo e(Carbon\Carbon::parse($post->published_at)->format('F d, Y')); ?> &middot; <?php echo e(round(str_word_count($post->content) / 200)); ?> min read</p>
            <div class="mt-6 w-full mx-auto text-center">
                <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e(route('blog.category.show', ['category' => $category->slug])); ?>"
                        class="px-3 py-1 rounded-full bg-slate-100 hover:bg-slate-200 text-sm font-mono text-gray-800 transition-all"
                    ><?php echo e($category->slug); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <?php endif; ?>
            </div>
            <img src="<?php echo e(asset($post->featured_image)); ?>" alt="<?php echo e($post->featured_image_alt_text); ?>" class="mt-12 w-full aspect-video object-cover object-center rounded-xl shadow">
        </div>

        <div class="mt-12 prose prose-sky prose-headings:font-sans prose-img:rounded-xl prose-img:shadow max-w-full">
            <?php echo str($post->content)->markdown(); ?>

        </div>

        <div class="mt-6 border-t border-t-gray-200"></div>

        <div class="mt-6">
            <h2 class="text-xl font-bold font-sans">You may also like</h2>

            <div class="mt-6 grid grid-cols-4 gap-8">
                <?php $__empty_1 = true; $__currentLoopData = $relatedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-span-3 md:col-span-1">
                        <div class="w-full">
                            <a href="<?php echo e(route('blog.post.show', ['slug' => $related->slug])); ?>" aria-label="Link to post">
                                <img src="<?php echo e(asset($related->featured_image)); ?>" alt="<?php echo e($related->featured_image_alt_text); ?>" class="w-full aspect-auto rounded-lg shadow">
                            </a>
                            <div class="mt-2">
                                <a href="<?php echo e(route('blog.post.show', ['slug' => $related->slug])); ?>">
                                    <h2 class="font-medium text-urbe text-base underline"><?php echo e($related->title); ?></h2>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', ['settings' => $settings, 'title' => $post->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/website/blog/show.blade.php ENDPATH**/ ?>