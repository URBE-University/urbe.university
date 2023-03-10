<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Categories</h2>
            <div class="flex items-center space-x-4">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('post:create')): ?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.category.create')->html();
} elseif ($_instance->childHasBeenRendered('l301398739-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l301398739-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l301398739-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l301398739-0');
} else {
    $response = \Livewire\Livewire::mount('admin.category.create');
    $html = $response->html();
    $_instance->logRenderedChild('l301398739-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Slug
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Posts
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo e($category->name); ?>

                                </th>
                                <td class="px-6 py-4">
                                    <?php echo e($category->slug); ?>

                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-2 py-0.5 rounded text-xs tracking-wider text-slate-600 bg-slate-100">
                                        <?php echo e($category->posts->count()); ?>

                                    </span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.category.delete', ['category' => $category])->html();
} elseif ($_instance->childHasBeenRendered('delete-' . $category->id)) {
    $componentId = $_instance->getRenderedChildComponentId('delete-' . $category->id);
    $componentTag = $_instance->getRenderedChildComponentTagName('delete-' . $category->id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('delete-' . $category->id);
} else {
    $response = \Livewire\Livewire::mount('admin.category.delete', ['category' => $category]);
    $html = $response->html();
    $_instance->logRenderedChild('delete-' . $category->id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/category/index.blade.php ENDPATH**/ ?>