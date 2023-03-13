<div>
    <button wire:click="$toggle('modal')" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.confirmation-modal','data' => ['wire:model' => 'modal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('confirmation-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'modal']); ?>
         <?php $__env->slot('title', null, []); ?> 
            <?php echo e(__("Are you sure you want to delete this category?")); ?>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('content', null, []); ?> 
            <?php echo e(__("This action cannot be undone. If you need to restore this category later on, you will need to create it again.")); ?>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('footer', null, []); ?> 
            <button wire:click="$toggle('modal')"><?php echo e(__("Nevermind")); ?></button>
            <button wire:click="delete" class="ml-4 px-4 py-2 border-none rounded-md text-white text-xs uppercase tracking-wider font-medium bg-red-600 hover:bg-red-500 transition-all"><?php echo e(__("Delete category")); ?></button>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/category/delete.blade.php ENDPATH**/ ?>