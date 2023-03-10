<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Events</h2>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('event:create')): ?>
                <a href="<?php echo e(route('admin.event.create')); ?>" class="btn-link">Add new event</a>
            <?php endif; ?>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button wire:click="$toggle('showTrashed')" class="text-sm hover:underline ">Trash (<?php echo e(\App\Models\Event::onlyTrashed()->count()); ?>)</button>
            <div class="mt-4 bg-white shadow rounded-lg">
                <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="p-4 flex items-center justify-between rounded-lg hover:bg-slate-100">
                        <div class="flex items-center space-x-3">
                            <div class="w-20 h-20 aspect-square rounded-lg border flex items-center justify-center">
                                <div class="">
                                    <p class="text-2xl font-bold">
                                        <?php echo e(Carbon\Carbon::parse($event->start_date)->format('d')); ?>

                                    </p>
                                    <p class="">
                                        <?php echo e(Carbon\Carbon::parse($event->start_date)->format('M')); ?>

                                    </p>
                                </div>
                            </div>
                            <h1 class="text-2xl font-bold"><?php echo e($event->name); ?></h1>
                        </div>
                        <div class="flex items-center justify-end space-x-3">
                            <?php if($event->deleted_at): ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('event:delete')): ?>
                                    <button wire:click="restore(<?php echo e($event->id); ?>)" class="text-sm">Restore</button>
                                    <button wire:click="delete(<?php echo e($event->id); ?>)" class="text-sm text-red-600">Permanently delete</button>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('event:update')): ?>
                                <a href="<?php echo e(route('admin.event.edit', ['event' => $event])); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                        <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                    </svg>
                                </a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('event:delete')): ?>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.event.delete', ['event' => $event])->html();
} elseif ($_instance->childHasBeenRendered('del-' . $event->id)) {
    $componentId = $_instance->getRenderedChildComponentId('del-' . $event->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('del-' . $event->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('del-' . $event->id);
} else {
    $response = \Livewire\Livewire::mount('admin.event.delete', ['event' => $event]);
    $html = $response->html();
    $_instance->logRenderedChild('del-' . $event->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="text-center p-12">
                        <img src="<?php echo e(asset('static_assets/undraw_adventure_map_hnin.svg')); ?>" alt="no events found image" class="w-48 aspect-auto mx-auto">
                        <h1 class="mt-12 text-2xl font-semibold">No events found</h1>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('event:create')): ?>
                            <div class="mt-12">
                                <a href="<?php echo e(route('admin.event.create')); ?>" class="btn-link">Add new event</a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mt-6">
                <?php echo e($events->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/event/index.blade.php ENDPATH**/ ?>