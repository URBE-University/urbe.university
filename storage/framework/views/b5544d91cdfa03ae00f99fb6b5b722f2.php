<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Start dates</h2>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.school.start-dates.create')->html();
} elseif ($_instance->childHasBeenRendered('l2921013066-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2921013066-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2921013066-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2921013066-0');
} else {
    $response = \Livewire\Livewire::mount('admin.school.start-dates.create');
    $html = $response->html();
    $_instance->logRenderedChild('l2921013066-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                                Start date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Apply by
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Semester
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $semesters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $semester): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo e(Carbon\Carbon::parse($semester->start_date)->format('M d, Y')); ?>

                                </th>
                                <td class="px-6 py-4">
                                    <?php echo e(Carbon\Carbon::parse($semester->apply_by_date)->format('M d, Y')); ?>

                                </td>
                                <td class="px-6 py-4">
                                    <?php echo e($semester->semester); ?>

                                </td>
                                <td class="px-6 py-4 text-right">

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
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/school/start-dates/index.blade.php ENDPATH**/ ?>