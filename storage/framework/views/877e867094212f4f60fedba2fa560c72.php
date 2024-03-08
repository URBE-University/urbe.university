<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Banners</h2>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.banner.create')->html();
} elseif ($_instance->childHasBeenRendered('l1674141272-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1674141272-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1674141272-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1674141272-0');
} else {
    $response = \Livewire\Livewire::mount('admin.banner.create');
    $html = $response->html();
    $_instance->logRenderedChild('l1674141272-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                            <th scope="col" class="px-6 py-3">Running</th>
                            <th scope="col" class="px-6 py-3">
                                Start | End
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                        'inline-block',
                                        'bg-green-500 h-5 w-5 rounded-full' => Carbon\Carbon::now()->between(Carbon\Carbon::parse($banner->starts_at)->startOfDay(), Carbon\Carbon::parse($banner->ends_at)->endOfDay()),
                                        'bg-slate-500 w-5 h-2 rounded' => !Carbon\Carbon::now()->between(Carbon\Carbon::parse($banner->starts_at)->startOfDay(), Carbon\Carbon::parse($banner->ends_at)->endOfDay())
                                    ]); ?>"></div>
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 text-xs whitespace-nowrap flex items-center">
                                    <span class="inline-flex items-center space-x-1 px-1.5 py-0.5 bg-sky-100 text-sky-700 border  rounded-full border-sky-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd" d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z" clip-rule="evenodd" />
                                        </svg>
                                        <span><?php echo e(Carbon\Carbon::parse($banner->starts_at)->format('M d, Y')); ?></span>
                                    </span>
                                    <span class="ml-3 inline-flex items-center space-x-1 px-1.5 py-0.5 bg-rose-100 text-rose-700 border  rounded-full border-rose-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                            <path fill-rule="evenodd" d="M4.5 7.5a3 3 0 013-3h9a3 3 0 013 3v9a3 3 0 01-3 3h-9a3 3 0 01-3-3v-9z" clip-rule="evenodd" />
                                        </svg>
                                        <span><?php echo e(Carbon\Carbon::parse($banner->ends_at)->format('M d, Y')); ?></span>
                                    </span>
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo e($banner->title); ?>

                                </td>
                                <td class="px-6 py-4 text-right flex items-center space-x-3 justify-end">
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.banner.edit', ['banner' => $banner])->html();
} elseif ($_instance->childHasBeenRendered('edit'.$banner->id)) {
    $componentId = $_instance->getRenderedChildComponentId('edit'.$banner->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('edit'.$banner->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('edit'.$banner->id);
} else {
    $response = \Livewire\Livewire::mount('admin.banner.edit', ['banner' => $banner]);
    $html = $response->html();
    $_instance->logRenderedChild('edit'.$banner->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.banner.delete', ['banner' => $banner])->html();
} elseif ($_instance->childHasBeenRendered('delete'.$banner->id)) {
    $componentId = $_instance->getRenderedChildComponentId('delete'.$banner->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('delete'.$banner->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('delete'.$banner->id);
} else {
    $response = \Livewire\Livewire::mount('admin.banner.delete', ['banner' => $banner]);
    $html = $response->html();
    $_instance->logRenderedChild('delete'.$banner->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/banner/index.blade.php ENDPATH**/ ?>