<?php $__env->startSection('content'); ?>
<div class="w-full" style="background-image: url(https://urbeuniversity.edu/static_assets/page-header-bg.webp)">
    <div class="mx-auto h-full max-w-6xl px-4 sm:px-6 lg:px-8">
      <div class="py-12 text-white sm:py-24">
        <h1 class="text-5xl font-extrabold"><?php echo e(__("URBE Catalogs")); ?></h1>
      </div>
    </div>
  </div>
  <section class="w-full pb-24 pt-16">
    <div class="mx-auto max-w-6xl px-4 text-center sm:px-6 lg:px-8">
      <div class="grid grid-cols-6 items-start gap-8">
        <main class="col-span-6 md:col-span-4">
            <h2></h2>
            <embed src="<?php echo e(asset($catalog->path)); ?>?toolbar=0&navpanes=0&scrollbar=0"
                type="application/pdf"
                width="100%"
                height="800px"
                class="mt-6"
            >
        </main>

        <!-- Sidenav -->
        <aside class="col-span-6 hidden justify-end text-base md:col-span-2 md:flex">
          <ul class="text-left">
            <li class="mt-2 mb-4">
              <p class="border-l-urbe text-urbe border-l-4 pl-2 text-xl font-semibold"><?php echo e(__("Other versions")); ?></p>
            </li>
            <?php $__empty_1 = true; $__currentLoopData = \App\Models\Catalog::orderBy('year', 'DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <li class="mt-2">
                    <a href="<?php echo e(route('catalog.show', ['year' => $cat->year])); ?>" class="transition-all hover:text-sky-500 hover:underline"><?php echo e($cat->year . __(" University Catalog")); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
          </ul>
        </aside>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', ['settings' => $settings, 'title' => 'URBE University'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/website/catalog.blade.php ENDPATH**/ ?>