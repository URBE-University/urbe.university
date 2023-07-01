<?php $__env->startSection('content'); ?>
    
    <header class="relative flex items-center justify-center md:h-[calc(100vh-74px)] mb-12 overflow-hidden">
        
        <div class="z-20 relative h-full w-full p-5 py-12 text-white bg-urbe bg-opacity-80 flex items-center justify-center">
            <div class="max-w-5xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-5xl lg:text-6xl font-black">Welcome to URBE University</h1>
                <p class="mt-6 text-lg md:text-xl">Explore our undergraduate and graduate programs in business, communications, education and more.</p>

                <div class="mt-6 sm:flex items-center space-y-4 sm:space-y-0 text-center sm:space-x-4">
                    <a href="/academics" class="block sm:inline-block text-slate-600 bg-white focus:ring-4 focus:ring-sky-300 font-medium rounded-md text-base px-5 py-3 md:px-6 md:py-3 mr-1 md:mr-0 focus:outline-none"
                    ><?php echo e(__("Learn more about our programs")); ?></a>
                    <a href="https://admissions.urbe.university" target="_blank" rel="dofollow"
                        class="block sm:inline-block text-white bg-sky-500 hover:bg-sky-400 focus:ring-4 focus:ring-sky-300 font-medium rounded-md text-base px-5 py-3 md:px-6 md:py-3 mr-1 md:mr-0 focus:outline-none"
                    ><?php echo e(__("Apply now")); ?></a>
                </div>
            </div>
        </div>
        
        <video autoplay loop muted playsinline class="absolute z-10 w-auto min-w-full min-h-full max-w-full object-cover">
            <source src="<?php echo e(asset('videos/urbe-intro-video.webm')); ?>" type="video/webm"/>
            <source src="<?php echo e(asset('videos/video.mp4')); ?>" type="video/mp4"/>
            <img src="<?php echo e(asset('static_assets/page-header-bg.webp')); ?>" title="Your browser does not support the <video> tag">
        </video>
    </header>

    
    

    <div class="py-12"></div>

    
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-4xl text-urbe font-serif font-bold"><?php echo e(__("Our Mission")); ?></h2>
            <p class="mt-4 max-w-3xl mx-auto text-slate-700">
                <?php echo e(__("URBE University provides students opportunities to become professional and competent in careers that lead towards employment in a dynamic global labor workforce.")); ?>

            </p>
        </div>
        <div class="mt-6">
            <video class="rounded-md w-full h-auto overflow-hidden" controls controlslist="play">
                <source src="<?php echo e(asset('videos/video.webm')); ?>" type="video/webm"/>
                <source src="<?php echo e(asset('videos/video.mp4')); ?>" type="video/mp4"/>
            </video>
        </div>
    </section>

    <div class="py-12"></div>

    
    <section class="w-full pt-16 pb-24 bg-gradient-to-t from-sky-50 to-white">
        <div class="mx-auto max-w-5xl px-4 text-center sm:px-6 lg:px-8">
            <div class="mt-12 grid grid-cols-2 gap-8 text-left">
                <div class="col-span-2 rounded-lg bg-white shadow md:col-span-1">
                <img src="/images/hsz2ntvXkAk4kckHk3KsCeI2CCbixKRqkCmhAFb3.webp" alt="" class="h-56 md:h-64 w-full rounded-t-lg object-cover object-center" />
                <div class="p-6">
                    <span class="text-urbe rounded-full bg-yellow-100 px-3 py-1 text-sm"><?php echo e(__("Bachelor of Science")); ?></span>
                    <a href="/academics/bachelor-of-science-in-business-administration" class="text-urbe mt-2 flex items-center justify-between text-xl font-medium">
                    <span><?php echo e(__("Business Administration")); ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                    </svg>
                    </a>
                    <p class="mt-4 text-slate-700"><?php echo e(__("Launch your career in business with our Bachelor of Science in Business Administration. Gain vital skills in ethics, resource management, and personnel development. Click now for more info and unlock a world of exciting management opportunities.")); ?></p>
                </div>
                </div>
                <div class="col-span-2 rounded-lg bg-white shadow md:col-span-1">
                <img src="/images/raouJoRWOD5VjwTUiBXzZPK0vNarb9S79Yyxm3r6.webp" alt="" class="h-56 md:h-64 w-full rounded-t-lg object-cover object-center" />
                <div class="p-6">
                    <span class="text-urbe rounded-full bg-yellow-100 px-3 py-1 text-sm"><?php echo e(__("Bachelor of Science")); ?></span>
                    <a href="/academics/bachelor-of-science-in-mass-communication-and-marketing" class="text-urbe mt-2 flex items-center justify-between text-xl font-medium">
                    <span><?php echo e(__("Mass Communications and Marketing")); ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                    </svg>
                    </a>
                    <p class="mt-4 text-slate-700"><?php echo e(__("Ignite your media career with our Mass Communication program. Gain practical and theoretical insights into the power of mass media. Prepare for exciting opportunities or advance your studies. Click for more information.")); ?></p>
                </div>
                </div>
                <div class="col-span-2 rounded-lg bg-white shadow md:col-span-1">
                <img src="/images/5bjRa4SqX3Wa66rQlnGUGL3imioGnLlKxcTvcXEo.webp" alt="" class="h-56 md:h-64 w-full rounded-t-lg object-cover object-center" />
                <div class="p-6">
                    <span class="text-urbe rounded-full bg-sky-100 px-3 py-1 text-sm"><?php echo e(__("Master of Science")); ?></span>
                    <a href="/academics/master-of-science-in-business-administration" class="text-urbe mt-2 flex items-center justify-between text-xl font-medium">
                    <span><?php echo e(__("Business Administration")); ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                    </svg>
                    </a>
                    <p class="mt-4 text-slate-700"><?php echo e(__("Elevate your career with URBE University's comprehensive MBA program. Customize your learning with concentrations in Accounting, Finance, Healthcare Admin, HR Management, Info Security, Management, or Supply Chain. Click for more info on our 45-credit hour program and unlock your leadership potential.")); ?></p>
                </div>
                </div>
                <div class="col-span-2 rounded-lg bg-white shadow md:col-span-1">
                <img src="/images/gEc92yZLbGeATKc6pRdjMgddeTJ9dORmBbPsbeA9.webp" alt="" class="h-56 md:h-64 w-full rounded-t-lg object-cover object-center" />
                <div class="p-6">
                    <span class="text-urbe rounded-full bg-sky-100 px-3 py-1 text-sm"><?php echo e(__("Master of Science")); ?></span>
                    <a href="/academics/master-of-science-in-instructional-design-and-technology" class="text-urbe mt-2 flex items-center justify-between text-xl font-medium">
                    <span><?php echo e(__("Instructional Design and Technology")); ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                    </svg>
                    </a>
                    <p class="mt-4 text-slate-700"><?php echo e(__("Gain expertise in utilizing instructional resources to enhance technology-based learning. Create, implement, and evaluate modern educational experiences. With concentrations in Virtual Learning, Learning Design and Technology, and Instructional Design and Development, our program prepares you to excel in diverse educational contexts.")); ?></p>
                </div>
                </div>
            </div>
        </div>
    </section>

    
    <?php echo $__env->make('website.partials.posts-teaser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('website.partials.events-teaser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="py-12"></div>

    
    <?php echo $__env->make('website.partials.owner-banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="py-12"></div>

    <?php echo $__env->make('website.partials.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="py-12"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', ['settings' => $settings, 'title' => 'URBE University'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/website/home.blade.php ENDPATH**/ ?>