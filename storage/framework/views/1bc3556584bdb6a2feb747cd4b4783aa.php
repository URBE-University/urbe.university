<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pages</h2>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page:create')): ?>
                <a href="<?php echo e(route('admin.page.create')); ?>" class="btn-link">Add new page</a>
            <?php endif; ?>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        </div>
    </div>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/page/index.blade.php ENDPATH**/ ?>