<?php $__env->startSection('content'); ?>
    
    <header class="relative flex items-center justify-center h-96 md:h-[calc(100vh-74px)] mb-12 overflow-hidden">
        <div class="z-10 relative p-5 text-2xl text-white bg-purple-300 bg-opacity-50 rounded-xl">Welcome to my site!</div>
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
        <source src="<?php echo e(asset('videos/urbe-intro-video.webm')); ?>" type="video/webm"/>Your browser does not support the video tag.</video>
    </header>

    <div class="py-12"></div>

    
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 md:col-span-1">
                <h2 class="text-4xl text-urbe font-serif font-bold"><?php echo e(__("Why learn with URBE?")); ?></h2>
                <a href="" class="inline-flex mt-4 space-x-3 px-3 py-1 rounded text-sm items-center group bg-[#ffd308] transition-all">
                    <span><?php echo e(__("Take the tour")); ?></span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 group-hover:translate-x-1 transition-all">
                        <title>Take the tour</title>
                        <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class="col-span-2 md:col-span-1">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta non aliquid aut ipsum, ullam optio odit quo tempore dolor, necessitatibus, et facere iste? Dolores atque placeat temporibus unde cum maxime?</p>
            </div>
        </div>
        <div class="py-8"></div>
        
        <div class="grid grid-cols-3 gap-8">
            <div class="w-full col-span-3 md:col-span-1 rounded-lg" style="background-image: url(https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg)">
                <div class="h-full w-full bg-white/90 p-4 sm:p-6 lg:p-8 overflow-hidden">
                    <div class="h-full flex flex-col justify-center">
                        <p class="text-xl text-urbe font-medium">Lorem ipsum dolor</p>
                        <p class="mt-4 text-slate-800 text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut doloribus saepe excepturi tenetur quaerat dicta odit voluptatum similique voluptatibus perspiciatis quam consequuntur officia quis, modi nulla nesciunt molestias praesentium magni?</p>
                    </div>
                </div>
            </div>
            <div class="w-full col-span-3 md:col-span-1 rounded-lg" style="background-image: url(https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg)">
                <div class="h-full w-full bg-white/90 p-4 sm:p-6 lg:p-8 overflow-hidden">
                    <div class="h-full flex flex-col justify-center">
                        <p class="text-xl text-urbe font-medium">Lorem ipsum dolor</p>
                        <p class="mt-4 text-slate-800 text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut doloribus saepe excepturi tenetur quaerat dicta odit voluptatum similique voluptatibus perspiciatis quam consequuntur officia quis, modi nulla nesciunt molestias praesentium magni?</p>
                    </div>
                </div>
            </div>
            <div class="w-full col-span-3 md:col-span-1 rounded-lg" style="background-image: url(https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg)">
                <div class="h-full w-full bg-white/90 p-4 sm:p-6 lg:p-8 overflow-hidden">
                    <div class="h-full flex flex-col justify-center">
                        <p class="text-xl text-urbe font-medium">Lorem ipsum dolor</p>
                        <p class="mt-4 text-slate-800 text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut doloribus saepe excepturi tenetur quaerat dicta odit voluptatum similique voluptatibus perspiciatis quam consequuntur officia quis, modi nulla nesciunt molestias praesentium magni?</p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <div class="py-12"></div>

    
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-4xl text-urbe font-serif font-bold">Our Mission</h2>
            <p class="mt-4 max-w-3xl mx-auto text-slate-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus quam totam quos eius quasi, rem amet ab mollitia aperiam, magnam consectetur reprehenderit ex id est neque ipsa magni nemo officiis?</p>
        </div>
        <div class="mt-6">
            <video class="rounded-lg w-full aspect-video" src="<?php echo e(asset('videos/urbe-intro-video.webm')); ?>" type="video/webm" controls></video>
        </div>
    </section>

    <div class="py-12"></div>

    
    <section class="w-full pt-16 pb-24 bg-sky-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl text-urbe font-serif font-bold capitalize"><?php echo e(__("Discover our programs")); ?></h2>

            <div class="mt-12 grid grid-cols-2 gap-8 text-left">
                <div class="col-span-2 md:col-span-1 bg-white rounded-lg shadow">
                    <img src="https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg" alt="" class="h-56 w-full object-top object-cover rounded-t-lg">
                    <div class="p-6">
                        <span class="text-sm bg-sky-100 text-urbe px-3 py-1 rounded-full">Master of Science</span>
                        <a href="#" class="mt-2 font-medium text-xl text-urbe flex items-center justify-between">
                            <span>Business Administration</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <p class="mt-4 text-slate-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aperiam! Nam dolorum hic, harum iste sint, provident velit accusamus autem natus dolorem debitis inventore maiores quibusdam ipsam incidunt dolore nihil.
                        </p>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1 bg-white rounded-lg shadow">
                    <img src="https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg" alt="" class="h-56 w-full object-top object-cover rounded-t-lg">
                    <div class="p-6">
                        <span class="text-sm bg-sky-100 text-urbe px-3 py-1 rounded-full">Master of Science</span>
                        <a href="#" class="mt-2 font-medium text-xl text-urbe flex items-center justify-between">
                            <span>Business Administration</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <p class="mt-4 text-slate-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aperiam! Nam dolorum hic, harum iste sint, provident velit accusamus autem natus dolorem debitis inventore maiores quibusdam ipsam incidunt dolore nihil.
                        </p>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1 bg-white rounded-lg shadow">
                    <img src="https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg" alt="" class="h-56 w-full object-top object-cover rounded-t-lg">
                    <div class="p-6">
                        <span class="text-sm bg-sky-100 text-urbe px-3 py-1 rounded-full">Master of Science</span>
                        <a href="#" class="mt-2 font-medium text-xl text-urbe flex items-center justify-between">
                            <span>Business Administration</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <p class="mt-4 text-slate-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aperiam! Nam dolorum hic, harum iste sint, provident velit accusamus autem natus dolorem debitis inventore maiores quibusdam ipsam incidunt dolore nihil.
                        </p>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1 bg-white rounded-lg shadow">
                    <img src="https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg" alt="" class="h-56 w-full object-top object-cover rounded-t-lg">
                    <div class="p-6">
                        <span class="text-sm bg-sky-100 text-urbe px-3 py-1 rounded-full">Master of Science</span>
                        <a href="#" class="mt-2 font-medium text-xl text-urbe flex items-center justify-between">
                            <span>Business Administration</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <p class="mt-4 text-slate-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aperiam! Nam dolorum hic, harum iste sint, provident velit accusamus autem natus dolorem debitis inventore maiores quibusdam ipsam incidunt dolore nihil.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <?php echo $__env->make('website.partials.posts-teaser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->make('website.partials.events-teaser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="py-12"></div>

    
    <section class="w-full bg-urbe text-white">
        <div class="py-12 md:py-24 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full grid grid-cols-6 items-center gap-8">
                <div class="col-span-6 md:col-span-2">
                    <img src="<?php echo e(asset('static_assets/dr-belloso-bw.webp')); ?>" loading="lazy" alt="Dr. Oscar Belloso Medina black and white portrait" class="mx-auto md:mx-0 border-[8px] border-white rounded-full w-2/3 md:w-full">
                </div>
                <div class="col-span-6 md:col-span-4">
                    <h2 class="text-2xl lg:text-3xl font-bold text-white uppercase">We educate future alumni to become marketable, skilled, and progressive leaders who are socially responsible and uphold ethical business standards.</h2>
                    <p class="mt-4 font-bold text-lg text-white">Dr. Oscar Belloso Medina</p>
                    <p class="text-white"> Chancellor &amp; Founder</p>
                </div>
            </div>
        </div>
    </section>

    <div class="py-12"></div>

    <?php echo $__env->make('website.partials.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="py-12"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', ['settings' => $settings], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/website/home.blade.php ENDPATH**/ ?>