<?php $__env->startSection('content'); ?>
<div class="w-full h-56 bg-center bg-cover" style="background-image: url(<?php echo e(asset($event->featured_image)); ?>)">
    <div class="h-full w-full backdrop-blur-lg">
        <div class="max-w-5xl mx-auto h-full px-4 sm:px-6 lg:px-8 flex items-center">
            <h1 class="text-5xl font-extrabold text-white"><?php echo e($event->name); ?></h1>
        </div>
    </div>
    <div class="bg-slate-100">
        <div class="max-w-7xl mx-auto">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('website.breadcrumbs')->html();
} elseif ($_instance->childHasBeenRendered('xSy7iTm')) {
    $componentId = $_instance->getRenderedChildComponentId('xSy7iTm');
    $componentTag = $_instance->getRenderedChildComponentTagName('xSy7iTm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xSy7iTm');
} else {
    $response = \Livewire\Livewire::mount('website.breadcrumbs');
    $html = $response->html();
    $_instance->logRenderedChild('xSy7iTm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>

<div class="py-12"></div>
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-3 gap-8">
        <div class="col-span-3">
            <img src="<?php echo e(asset($event->featured_image)); ?>" alt="<?php echo e($event->name); ?>" class="w-full aspect-video rounded-xl object-cover object-center">
        </div>
        <div class="col-span-3 sm:col-span-1">
            <div class="flex items-start space-x-4">
                <div class="bg-sky-100 text-urbe p-2 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                        <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="">
                    <p class="font-semibold font-base"><?php echo e(__("Date and time")); ?></p>
                    <time class="text-sm"><?php echo e(Carbon\Carbon::parse($event->start_date)->format('M d, Y \a\t H:i A')); ?></time>
                </div>
            </div>
        </div>
        <div class="col-span-3 sm:col-span-1">
            <div class="flex items-start space-x-4">
                <div class="bg-sky-100 text-urbe p-2 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="">
                    <p class="font-semibold font-base"><?php echo e(__("Address")); ?></p>
                    <a href="https://www.google.com/maps/place/<?php echo e($event->address); ?>" target="_blank" class="text-sm underline"><?php echo e($event->address); ?></a>
                </div>
            </div>
        </div>
        <div class="col-span-3 sm:col-span-1">
            <a href="<?php echo e($event->rsvp_url); ?>" target="_blank" class="block w-full text-center font-medium rounded-lg px-4 py-3 bg-sky-500 text-white hover:bg-sky-400 transition-all"><?php echo e(__("Reserve spot")); ?></a>
        </div>

        <div class="mt-6 col-span-3">
            <h2 class="text-xl font-bold">Event details</h2>
            <div class="mt-4 prose prose-lg prose-sky max-w-full">
                <?php echo $event->description; ?>

            </div>
        </div>
    </div>
</div>
<div class="py-6"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', ['settings' => $settings, 'title' => $event->name], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/website/events/show.blade.php ENDPATH**/ ?>