<?php $__env->startSection('content'); ?>
    <div class="w-full h-56" style="background-image: url(<?php echo e(asset('static_assets/page-header-bg.webp')); ?>)">
        <div class="h-full flex items-center justify-center">
            <h1 class="text-5xl font-extrabold text-white">| URBE Catalogs</h1>
        </div>
    </div>
    <div class="py-12 max-w-5xl mx-auto">
        <h2 class="text-2xl font-semibold">Course catalog for the year <?php echo e($catalog->year); ?></h2>
        <embed src="<?php echo e(asset($catalog->path)); ?>#toolbar=0&navpanes=0&scrollbar=0"
            type="application/pdf"
            width="100%"
            height="800px"
            class="mt-6"
        >
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', ['settings' => $settings, 'title' => 'URBE University'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/website/catalog.blade.php ENDPATH**/ ?>