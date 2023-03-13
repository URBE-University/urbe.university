<nav class="bg-white border-gray-200 py-4">
    <div class="flex flex-wrap items-center justify-between max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ megamenu: false }" x-cloak>
        <a href="<?php echo e(route('home')); ?>" class="flex items-center">
            <img src="<?php echo e(asset('static_assets/urbe-logo.svg')); ?>" alt="URBE Logo" class="h-12">
        </a>

        <div class="flex items-center md:order-2">

            <a href="https://admissions.urbe.university"
                class="text-white bg-sky-500 hover:bg-sky-400 focus:ring-4 focus:ring-sky-300 font-medium rounded-lg text-base px-5 py-2 md:px-6 md:py-3 mr-1 md:mr-0 focus:outline-none"
            ><?php echo e(__("Apply Now")); ?></a>

            <button @click="megamenu = !megamenu" data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>

        <div id="mega-menu" class="z-40 items-center justify-between  w-full text-base md:flex md:w-auto md:order-1" :class="megamenu ? '' : 'hidden'">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                <?php $__empty_1 = true; $__currentLoopData = \App\Models\Menu::whereNull('parent')->where('location', 'navbar')->orderBy('order', 'asc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($item->type == 'dropdown'): ?>
                        <li x-data="{open: false}" x-cloak>
                            <button @click="open = !open" id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-sky-500 md:p-0">
                                <?php echo e($item->label); ?>

                                <svg aria-hidden="true" class="w-5 h-5 ml-1 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div @click.outside="open = false" x-show="open" id="mega-menu-dropdown" class="md:mt-4 absolute z-50 md:w-auto text-base bg-white border border-gray-100 rounded-lg shadow-md">
                                <ul class="p-4 grid grid-cols-3 gap-4 md:gap-8" aria-labelledby="mega-menu-dropdown-button">
                                    <?php $__empty_2 = true; $__currentLoopData = \App\Models\Menu::where('location', 'navbar')->whereNotNull('parent')->where('parent', $item->id)->orderBy('order', 'ASC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                        <li class="col-span-1">
                                            <a href="<?php echo e($child->url); ?>" <?php if($child->opens_in_new_tab): ?> target="_blank" <?php endif; ?> class="text-gray-500 hover:text-sky-500"><?php echo e($child->label); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                        <li class="col-span-1 text-gray-500">
                                            <?php echo e(__("No items here.")); ?>

                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo e($item->url); ?>" <?php if($item->opens_in_new_tab): ?> target="_blank" <?php endif; ?>
                                 class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-sky-500 md:p-0">
                                <?php echo e($item->label); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/website/partials/navbar.blade.php ENDPATH**/ ?>