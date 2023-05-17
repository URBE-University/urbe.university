<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Users</h2>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user:create')): ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.user.invite')->html();
} elseif ($_instance->childHasBeenRendered('l2935106555-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2935106555-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2935106555-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2935106555-0');
} else {
    $response = \Livewire\Livewire::mount('admin.user.invite');
    $html = $response->html();
    $_instance->logRenderedChild('l2935106555-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php endif; ?>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-md">

                <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e((auth()->user()->id === $user->id) ? route('profile.show') : route('admin.user.edit', ['user' => $user])); ?>"
                            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                'flex items-center justify-between p-4 hover:bg-slate-100',
                                'rounded-t-lg' => $loop->first,
                                'rounded-b-lg' => $loop->last,
                            ]) ?>">
                        <div class="flex items-center space-x-3">
                            <img class="h-20 w-20 rounded-full object-cover shadow" src="<?php echo e($user->profile_photo_url); ?>" alt="<?php echo e($user->name); ?>" />
                            <div>
                                <p class="text-slate-600 text-sm font-light"><?php echo e($user->email); ?></p>
                                <h1 class="text-2xl font-bold"><?php echo e($user->name); ?></h1>
                                <?php if($user->isAdmin()): ?>
                                    <p class="mt-2 inline-block text-sm bg-indigo-500 px-2 py-0.5 text-white rounded">Admin</p>
                                <?php else: ?>
                                    <p class="mt-2 inline-block text-sm bg-slate-700 px-2 py-0.5 text-white rounded">User</p>
                                <?php endif; ?>
                                <?php if(!$user->is_active): ?>
                                    <p class="mt-2 inline-block text-sm bg-yellow-200 px-2 py-0.5 text-yellow-700 rounded">Pending activation</p>
                                <?php endif; ?>
                                <?php if($user->is_suspended): ?>
                                    <p class="mt-2 inline-block text-sm bg-red-200 px-2 py-0.5 text-red-700 rounded">Account suspended</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="flex items-center justify-end space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="text-center p-12">
                        <img src="<?php echo e(asset('static_assets/undraw_adventure_map_hnin.svg')); ?>" alt="no users found image" class="w-48 aspect-auto mx-auto">
                        <h1 class="mt-12 text-2xl font-semibold">No users found</h1>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user:create')): ?>
                            <div class="mt-12">
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.user.invite')->html();
} elseif ($_instance->childHasBeenRendered('l2935106555-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2935106555-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2935106555-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2935106555-1');
} else {
    $response = \Livewire\Livewire::mount('admin.user.invite');
    $html = $response->html();
    $_instance->logRenderedChild('l2935106555-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/livewire/admin/user/index.blade.php ENDPATH**/ ?>