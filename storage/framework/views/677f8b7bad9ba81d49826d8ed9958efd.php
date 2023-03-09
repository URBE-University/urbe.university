<div @click.away="open = false" class="flex flex-col w-full md:w-64 text-slate-400 bg-white flex-shrink-0"
    x-data="{ open: false }">
    <div class="flex-shrink-0 p-4 flex flex-row items-center justify-between">
        <a href="<?php echo e(route('dashboard')); ?>">
            <img src="<?php echo e(asset('static_assets/urbe-logo.svg')); ?>" alt="URBE University logo" class="block h-10 w-auto">
        </a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                    clip-rule="evenodd">
                </path>
                <path x-show="open" fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd">
                </path>
            </svg>
        </button>
    </div>

    <nav :class="{'block': open, 'hidden': !open}"
        class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto text-slate-600"
        x-cloak>

        <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
            'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('dashboard'),
        ]) ?>">
            <?php echo e(__('Dashboard')); ?>

        </a>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('post:view')): ?>
            <a href="<?php echo e(route('admin.posts')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('admin.posts'),
            ]) ?>">
                <?php echo e(__('Posts')); ?>

            </a>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('event:view')): ?>
            <a href="<?php echo e(route('admin.events')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('admin.events'),
            ]) ?>">
                <?php echo e(__('Events')); ?>

            </a>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('page:view')): ?>
            <a href="<?php echo e(route('admin.pages')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('admin.pages'),
            ]) ?>">
                <?php echo e(__('Pages')); ?>

            </a>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu:view')): ?>
            <a href="<?php echo e(route('admin.menus', ['selector' => 'navbar'])); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('admin.menus'),
            ]) ?>">
                <?php echo e(__('Menu')); ?>

            </a>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('seo:view')): ?>
            <a href="<?php echo e(route('admin.seo.home')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('admin.seo.home'),
            ]) ?>">
                <?php echo e(__('SEO')); ?>

            </a>
        <?php endif; ?>

        <div class="my-6 md:mt-48"></div>

        <div class="text-xs font-medium tracking-wide text-gray-400 uppercase pl-2">
            <?php echo e(__('System Management')); ?>

        </div>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user:view')): ?>
            <a href="<?php echo e(route('admin.users')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('users'),
            ]) ?>">
                <?php echo e(__('Users')); ?>

            </a>
        <?php endif; ?>

        <a href="<?php echo e(route('profile.show')); ?>"
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('profile-show'),
            ]) ?>">
            <?php echo e(__("Profile")); ?>

        </a>

        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <a href="<?php echo e(route('logout')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'rounded focus:ring-2 focus:ring-blue-300 focus:outline-none px-2 py-2 block w-full text-base font-medium rounded-md focus:ring-inset focus:ring-2 text-slate-600 hover:bg-slate-100 hover:text-slate-900',
                'bg-slate-200 hover:bg-slate-200 text-slate-900' => request()->routeIs('Logout'),
            ]) ?>" onclick="event.preventDefault(); this.closest('form').submit();">
                <?php echo e(__('Log Out')); ?>

            </a>
        </form>
        
        
    </nav>
</div>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/layouts/partials/nav.blade.php ENDPATH**/ ?>