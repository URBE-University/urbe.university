<?php $__env->startSection('content'); ?>
<div x-data="{ currentEvents: false, upcomingEvents: true, pastEvents: false }">
    <div class="w-full h-56" style="background-image: url(<?php echo e(asset('static_assets/page-header-bg.webp')); ?>)">
        <div class="h-full flex items-center justify-center">
            <h1 class="text-5xl font-extrabold text-white">| <span x-show="upcomingEvents">Upcoming Events</span> <span x-show="currentEvents">Happening Now</span> <span x-show="pastEvents">Past Events</span></h1>
        </div>
    </div>


    <div class="py-6"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-3 flex items-center space-x-4">
            <button x-on:click="upcomingEvents = true; pastEvents = false; currentEvents = false;" class="px-4 py-1 border-2 rounded-full text-base hover:border-sky-400 transition-all" :class="upcomingEvents ? 'bg-sky-500 border-sky-500 text-white' : '' ">Upcoming</button>
            <button x-on:click="upcomingEvents = false; pastEvents = false; currentEvents = true;" class="px-4 py-1 border-2 rounded-full text-base hover:border-sky-400 transition-all" :class="currentEvents ? 'bg-sky-500 border-sky-500 text-white' : '' ">Happening now</button>
            <button x-on:click="upcomingEvents = false; pastEvents = true; currentEvents = false;" class="px-4 py-1 border-2 rounded-full text-base hover:border-sky-400 transition-all" :class="pastEvents ? 'bg-sky-500 border-sky-500 text-white' : '' ">Past</button>
        </div>

        
        <div x-cloak x-show="upcomingEvents" class="mt-6 w-full mx-auto text-center">
            <div class="grid grid-cols-3 gap-8">
                <?php $__empty_1 = true; $__currentLoopData = $upcomingEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-span-3 md:col-span-1">
                    <div class="w-full">
                        <a href="<?php echo e(route('events.show', ['slug' => $event->slug])); ?>" aria-label="Link to post">
                            <img src="<?php echo e(asset($event->featured_image)); ?>" alt="<?php echo e($event->featured_image_alt_text); ?>" class="w-full aspect-video object-cover object-center rounded-lg shadow">
                        </a>
                        <div class="mt-2 text-left">
                            <a href="<?php echo e(route('events.show', ['slug' => $event->slug])); ?>">
                                <h2 class="font-medium text-urbe text-lg"><?php echo e($event->name); ?></h2>
                            </a>
                            <p class="mt-2 text-sm font-mono"><?php echo e(Carbon\Carbon::parse($event->start_date)->format('M d Y \a\t H:i A')); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </div>
            <div class="mt-6">
                <?php echo e($upcomingEvents->links()); ?>

            </div>
        </div>

        
        <div x-cloak x-show="pastEvents" class="mt-6 w-full mx-auto text-center">
            <div class="grid grid-cols-3 gap-8">
                <?php $__empty_1 = true; $__currentLoopData = $pastEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-span-3 md:col-span-1">
                    <div class="w-full">
                        <a href="<?php echo e(route('events.show', ['slug' => $event->slug])); ?>" aria-label="Link to post">
                            <img src="<?php echo e(asset($event->featured_image)); ?>" alt="<?php echo e($event->featured_image_alt_text); ?>" class="w-full aspect-video object-cover object-center rounded-lg shadow">
                        </a>
                        <div class="mt-2 text-left">
                            <a href="<?php echo e(route('events.show', ['slug' => $event->slug])); ?>">
                                <h2 class="font-medium text-urbe text-lg"><?php echo e($event->name); ?></h2>
                            </a>
                            <p class="mt-2 text-sm font-mono line-through"><?php echo e(Carbon\Carbon::parse($event->start_date)->format('M d Y \a\t H:i A')); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </div>
            <div class="mt-6">
                <?php echo e($pastEvents->links()); ?>

            </div>
        </div>

        
        <div x-cloak x-show="currentEvents" class="mt-6 w-full mx-auto text-center">
            <div class="grid grid-cols-3 gap-8">
                <?php $__empty_1 = true; $__currentLoopData = $currentEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-span-3 md:col-span-1">
                    <div class="w-full">
                        <a href="<?php echo e(route('events.show', ['slug' => $event->slug])); ?>" aria-label="Link to post">
                            <img src="<?php echo e(asset($event->featured_image)); ?>" alt="<?php echo e($event->featured_image_alt_text); ?>" class="w-full aspect-video object-cover object-center rounded-lg shadow">
                        </a>
                        <div class="mt-2 text-left">
                            <a href="<?php echo e(route('events.show', ['slug' => $event->slug])); ?>">
                                <h2 class="font-medium text-urbe text-lg"><?php echo e($event->name); ?></h2>
                            </a>
                            <p class="mt-2 text-sm font-mono">Today at <?php echo e(Carbon\Carbon::parse($event->start_date)->format('H:i A')); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </div>
            <div class="mt-6">
                <?php echo e($currentEvents->links()); ?>

            </div>
        </div>
    </div>
    <div class="py-6"></div>
</div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', ['settings' => $settings, 'title' => 'Upcoming Events'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/website/events/index.blade.php ENDPATH**/ ?>