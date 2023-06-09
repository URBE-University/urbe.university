<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">School Catalog</h2>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.school.catalog.create')->html();
} elseif ($_instance->childHasBeenRendered('l96422159-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l96422159-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l96422159-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l96422159-0');
} else {
    $response = \Livewire\Livewire::mount('admin.school.catalog.create');
    $html = $response->html();
    $_instance->logRenderedChild('l96422159-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-md">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Year
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date Uploaded
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <a href="<?php echo e(asset($catalog->path)); ?>" target="_blank" class="underline"><?php echo e($catalog->year); ?></a>
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo e(Carbon\Carbon::parse($catalog->created_at)->format('M d, Y')); ?>

                                </td>
                                <td class="px-6 py-4 text-right">
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.school.catalog.delete', ['catalog' => $catalog])->html();
} elseif ($_instance->childHasBeenRendered('delete'.$catalog->id)) {
    $componentId = $_instance->getRenderedChildComponentId('delete'.$catalog->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('delete'.$catalog->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('delete'.$catalog->id);
} else {
    $response = \Livewire\Livewire::mount('admin.school.catalog.delete', ['catalog' => $catalog]);
    $html = $response->html();
    $_instance->logRenderedChild('delete'.$catalog->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/school/catalog/index.blade.php ENDPATH**/ ?>