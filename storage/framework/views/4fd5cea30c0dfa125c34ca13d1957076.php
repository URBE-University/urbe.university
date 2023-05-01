<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Media</h2>
            <div class="flex items-center space-x-4">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('media:create')): ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.media.create')->html();
} elseif ($_instance->childHasBeenRendered('l2345180784-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2345180784-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2345180784-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2345180784-0');
} else {
    $response = \Livewire\Livewire::mount('admin.media.create');
    $html = $response->html();
    $_instance->logRenderedChild('l2345180784-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-8">
                <?php $__empty_1 = true; $__currentLoopData = $media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-span-1 bg-slate-100 hover:bg-slate-200 rounded-md p-4 w-full aspect-square">
                        <div class="h-full w-full flex items-center justify-center">
                            <?php if($item->file_type != 'pdf'): ?>
                                <img src="<?php echo e(asset($item->url)); ?>" alt="<?php echo e($item->alt_text); ?>" class="w-full aspect-square rounded-md object-contain object-center">
                            <?php else: ?>
                                <svg role="img" viewBox="0 0 24 24" class="w-16 h-16 fill-[#EC1C24]" xmlns="http://www.w3.org/2000/svg"><title>Adobe Acrobat Reader</title><path d="M23.63 15.3c-.71-.745-2.166-1.17-4.224-1.17-1.1 0-2.377.106-3.761.354a19.443 19.443 0 0 1-2.307-2.661c-.532-.71-.994-1.49-1.42-2.236.817-2.484 1.207-4.507 1.207-5.962 0-1.632-.603-3.336-2.342-3.336-.532 0-1.065.32-1.349.781-.78 1.384-.425 4.4.923 7.381a60.277 60.277 0 0 1-1.703 4.507c-.568 1.349-1.207 2.733-1.917 4.01C2.834 18.53.314 20.34.03 21.758c-.106.533.071 1.03.462 1.42.142.107.639.533 1.49.533 2.59 0 5.323-4.188 6.707-6.707 1.065-.355 2.13-.71 3.194-.994a34.963 34.963 0 0 1 3.407-.745c2.732 2.448 5.145 2.839 6.352 2.839 1.49 0 2.023-.604 2.2-1.1.32-.64.106-1.349-.213-1.704zm-1.42 1.03c-.107.532-.64.887-1.384.887-.213 0-.39-.036-.604-.071-1.348-.32-2.626-.994-3.903-2.059a17.717 17.717 0 0 1 2.98-.248c.746 0 1.385.035 1.81.142.497.106 1.278.426 1.1 1.348zm-7.524-1.668a38.01 38.01 0 0 0-2.945.674 39.68 39.68 0 0 0-2.52.745 40.05 40.05 0 0 0 1.207-2.555c.426-.994.78-2.023 1.136-2.981.354.603.745 1.207 1.135 1.739a50.127 50.127 0 0 0 1.987 2.378zM10.038 1.46a.768.768 0 0 1 .674-.425c.745 0 .887.851.887 1.526 0 1.135-.355 2.874-.958 4.861-1.03-2.768-1.1-5.074-.603-5.962zM6.134 17.997c-1.81 2.981-3.549 4.826-4.613 4.826a.872.872 0 0 1-.532-.177c-.213-.213-.32-.461-.249-.745.213-1.065 2.271-2.555 5.394-3.904Z"/></svg>
                            <?php endif; ?>
                        </div>
                        <p class="text-sm text-slate-700 text-center"><?php echo e($item->file_name); ?></p>
                        <div class="mt-4 flex items-center justify-center space-x-3">
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.media.update', ['media' => $item])->html();
} elseif ($_instance->childHasBeenRendered('edit-' . $item->id)) {
    $componentId = $_instance->getRenderedChildComponentId('edit-' . $item->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('edit-' . $item->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('edit-' . $item->id);
} else {
    $response = \Livewire\Livewire::mount('admin.media.update', ['media' => $item]);
    $html = $response->html();
    $_instance->logRenderedChild('edit-' . $item->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.media.delete', ['media' => $item])->html();
} elseif ($_instance->childHasBeenRendered('delete-' . $item->id)) {
    $componentId = $_instance->getRenderedChildComponentId('delete-' . $item->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('delete-' . $item->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('delete-' . $item->id);
} else {
    $response = \Livewire\Livewire::mount('admin.media.delete', ['media' => $item]);
    $html = $response->html();
    $_instance->logRenderedChild('delete-' . $item->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </div>
            <div class="mt-6">
                <?php echo e($media->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/media/index.blade.php ENDPATH**/ ?>
