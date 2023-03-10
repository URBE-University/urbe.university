<nav class="bg-white border-gray-200 py-4">
    <div class="flex flex-wrap items-center justify-between max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ megamenu: false }" x-cloak>
        <a href="<?php echo e(route('home')); ?>" class="flex items-center">
            <img src="<?php echo e(asset('static_assets/urbe-logo.svg')); ?>" alt="URBE Logo" class="h-12">
        </a>

        <div class="flex items-center md:order-2">
            <a href="#" class="text-white bg-sky-500 hover:bg-sky-400 focus:ring-4 focus:ring-sky-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 mr-1 md:mr-0 focus:outline-none">Apply Now</a>
            <button @click="megamenu = !megamenu" data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>

        <div id="mega-menu" class="z-50 items-center justify-between  w-full text-sm md:flex md:w-auto md:order-1" :class="megamenu ? '' : 'hidden'">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                <li x-data="{open: false}" x-cloak>
                    <button @click="open = !open" id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-sky-500 md:p-0">
                        About <svg aria-hidden="true" class="w-5 h-5 ml-1 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div @click.outside="open = false" x-show="open" id="mega-menu-dropdown" class="mt-4 absolute z-30 grid w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md md:grid-cols-3">
                        <div class="p-4 pb-0 text-gray-900 md:pb-4">
                            <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-sky-500">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-sky-500">
                                        Library
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-sky-500">
                                        Resources
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-sky-500">
                                        Pro Version
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 pb-0 text-gray-900 md:pb-4">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-sky-500">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-sky-500">
                                        Newsletter
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-sky-500">
                                        Playground
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-sky-500">
                                        License
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 text-gray-900">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-sky-500">
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-sky-500">
                                        Support Center
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 hover:text-sky-500">
                                        Terms
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-sky-500 md:p-0">
                        <?php echo e(__("Admissions")); ?>

                    </a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-sky-500 md:p-0">
                        <?php echo e(__("Academics")); ?>

                    </a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-sky-500 md:p-0">
                        <?php echo e(__("Student Services")); ?>

                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/website/partials/navbar.blade.php ENDPATH**/ ?>