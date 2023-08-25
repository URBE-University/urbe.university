<div>
    <p class="mt-8 text-sm font-medium text-slate-600"><?php echo e(__("Categories")); ?></p>
    <ul class="mt-2 h-44 bg-gray-100 rounded-md overflow-y-auto">
        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li class="px-2 py-2 w-full flex items-center justify-between hover:bg-white rounded-md">
                <label for="<?php echo e($item->slug . $item->id); ?>" class="flex items-center space-x-3">
                    <input type="checkbox"
                        wire:click="syncCategories(<?php echo e($item->id); ?>)"
                        class="rounded"
                        id="<?php echo e($item->slug . $item->id); ?>" value="<?php echo e($item->id); ?>"
                        <?php echo e(($this->post->categories->where('id', $item->id)->count() == 1 ? ' checked' : '')); ?>

                    >
                    <span><?php echo e($item->name); ?></span>
                </label>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
    </ul>
    <div x-data="{show_new_category_dialog : false}" class="my-6">
        <button type="button" @click="show_new_category_dialog = ! show_new_category_dialog" class="text-sm text-blue-600 hover:text-blue-500"><?php echo e(__("Add a new category")); ?></button>
        <div x-show="show_new_category_dialog" class="mt-2">
            <div class="relative">
                <input type="text" wire:keydown.enter="addCategory" wire:model="newCategory" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="" required>
                <button type="button" wire:click="addCategory" class="text-white absolute right-2.5 bottom-2.5 bg-gray-900 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-md text-sm px-4 py-2">Save</button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/post/manage-categories.blade.php ENDPATH**/ ?>