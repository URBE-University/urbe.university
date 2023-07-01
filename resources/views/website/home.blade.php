@extends('layouts.website', ['settings' => $settings, 'title' => 'URBE University'])

@section('content')
    {{-- Header --}}
    <header class="relative flex items-center justify-center md:h-[calc(100vh-74px)] mb-12 overflow-hidden">
        {{-- Header Content --}}
        <div class="z-20 relative h-full w-full p-5 py-12 md:py-0 text-white bg-urbe bg-opacity-80 flex items-center justify-center">
            <div class="max-w-5xl sm:px-6 lg:px-8">
                <h1 class="text-5xl lg:text-6xl font-black">Welcome to URBE University</h1>
                <p class="mt-6 text-lg md:text-xl">Explore our undergraduate and graduate programs in business, communications, education and more.</p>

                <div class="mt-6 sm:flex items-center space-y-4 sm:space-y-0 text-center sm:space-x-4">
                    <a href="/academics" class="block sm:inline-block text-slate-600 bg-white focus:ring-4 focus:ring-sky-300 font-medium rounded-md text-base px-5 py-3 md:px-6 md:py-3 mr-1 md:mr-0 focus:outline-none"
                    >{{ __("Learn more about our programs") }}</a>
                    <a href="https://admissions.urbe.university" target="_blank" rel="dofollow"
                        class="block sm:inline-block text-white bg-sky-500 hover:bg-sky-400 focus:ring-4 focus:ring-sky-300 font-medium rounded-md text-base px-5 py-3 md:px-6 md:py-3 mr-1 md:mr-0 focus:outline-none"
                    >{{ __("Apply now") }}</a>
                </div>
            </div>
        </div>
        {{-- End | Header Content --}}
        <video autoplay loop muted playsinline class="absolute z-10 w-auto min-w-full min-h-full max-w-full object-cover">
            <source src="{{ asset('videos/urbe-intro-video.webm') }}" type="video/webm"/>
            <source src="{{ asset('videos/video.mp4') }}" type="video/mp4"/>
            <img src="{{ asset('static_assets/page-header-bg.webp') }}" title="Your browser does not support the <video> tag">
        </video>
    </header>

    {{-- Why learn with URBE --}}
    {{-- <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 md:col-span-1">
                <h2 class="text-4xl text-urbe font-serif font-bold">{{ __("Why learn with URBE?") }}</h2>
                <a href="/about-us" class="inline-flex mt-4 space-x-3 px-3 py-1 rounded text-sm items-center group bg-[#ffd308] transition-all">
                    <span>{{ __("Take the tour") }}</span>
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
            <div class="w-full col-span-3 md:col-span-1 rounded-md" style="background-image: url(https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg)">
                <div class="h-full w-full bg-white/90 p-4 sm:p-6 lg:p-8 overflow-hidden">
                    <div class="h-full flex flex-col justify-center">
                        <p class="text-xl text-urbe font-medium">Lorem ipsum dolor</p>
                        <p class="mt-4 text-slate-800 text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut doloribus saepe excepturi tenetur quaerat dicta odit voluptatum similique voluptatibus perspiciatis quam consequuntur officia quis, modi nulla nesciunt molestias praesentium magni?</p>
                    </div>
                </div>
            </div>
            <div class="w-full col-span-3 md:col-span-1 rounded-md" style="background-image: url(https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg)">
                <div class="h-full w-full bg-white/90 p-4 sm:p-6 lg:p-8 overflow-hidden">
                    <div class="h-full flex flex-col justify-center">
                        <p class="text-xl text-urbe font-medium">Lorem ipsum dolor</p>
                        <p class="mt-4 text-slate-800 text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut doloribus saepe excepturi tenetur quaerat dicta odit voluptatum similique voluptatibus perspiciatis quam consequuntur officia quis, modi nulla nesciunt molestias praesentium magni?</p>
                    </div>
                </div>
            </div>
            <div class="w-full col-span-3 md:col-span-1 rounded-md" style="background-image: url(https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg)">
                <div class="h-full w-full bg-white/90 p-4 sm:p-6 lg:p-8 overflow-hidden">
                    <div class="h-full flex flex-col justify-center">
                        <p class="text-xl text-urbe font-medium">Lorem ipsum dolor</p>
                        <p class="mt-4 text-slate-800 text-base">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut doloribus saepe excepturi tenetur quaerat dicta odit voluptatum similique voluptatibus perspiciatis quam consequuntur officia quis, modi nulla nesciunt molestias praesentium magni?</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="py-12"></div>

    {{-- Mission --}}
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-4xl text-urbe font-serif font-bold">{{__("Our Mission")}}</h2>
            <p class="mt-4 max-w-3xl mx-auto text-slate-700">
                {{ __("URBE University provides students opportunities to become professional and competent in careers that lead towards employment in a dynamic global labor workforce.") }}
            </p>
        </div>
        <div class="mt-6">
            <video class="rounded-md w-full h-auto overflow-hidden" controls controlslist="play">
                <source src="{{ asset('videos/video.webm') }}" type="video/webm"/>
                <source src="{{ asset('videos/video.mp4') }}" type="video/mp4"/>
            </video>
        </div>
    </section>

    <div class="py-12"></div>

    {{-- Discover our programs --}}
    <section class="w-full pt-16 pb-24 bg-gradient-to-t from-sky-50 to-white">
        <div class="mx-auto max-w-5xl px-4 text-center sm:px-6 lg:px-8">
            <div class="mt-12 grid grid-cols-2 gap-8 text-left">
                <div class="col-span-2 rounded-lg bg-white shadow md:col-span-1">
                <img src="/images/hsz2ntvXkAk4kckHk3KsCeI2CCbixKRqkCmhAFb3.webp" alt="" class="h-56 md:h-64 w-full rounded-t-lg object-cover object-center" />
                <div class="p-6">
                    <span class="text-urbe rounded-full bg-yellow-100 px-3 py-1 text-sm">{{ __("Bachelor of Science") }}</span>
                    <a href="/academics/bachelor-of-science-in-business-administration" class="text-urbe mt-2 flex items-center justify-between text-xl font-medium">
                    <span>{{ __("Business Administration") }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                    </svg>
                    </a>
                    <p class="mt-4 text-slate-700">{{__("Launch your career in business with our Bachelor of Science in Business Administration. Gain vital skills in ethics, resource management, and personnel development. Click now for more info and unlock a world of exciting management opportunities.")}}</p>
                </div>
                </div>
                <div class="col-span-2 rounded-lg bg-white shadow md:col-span-1">
                <img src="/images/raouJoRWOD5VjwTUiBXzZPK0vNarb9S79Yyxm3r6.webp" alt="" class="h-56 md:h-64 w-full rounded-t-lg object-cover object-center" />
                <div class="p-6">
                    <span class="text-urbe rounded-full bg-yellow-100 px-3 py-1 text-sm">{{ __("Bachelor of Science") }}</span>
                    <a href="/academics/bachelor-of-science-in-mass-communication-and-marketing" class="text-urbe mt-2 flex items-center justify-between text-xl font-medium">
                    <span>{{ __("Mass Communications and Marketing") }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                    </svg>
                    </a>
                    <p class="mt-4 text-slate-700">{{ __("Ignite your media career with our Mass Communication program. Gain practical and theoretical insights into the power of mass media. Prepare for exciting opportunities or advance your studies. Click for more information.") }}</p>
                </div>
                </div>
                <div class="col-span-2 rounded-lg bg-white shadow md:col-span-1">
                <img src="/images/5bjRa4SqX3Wa66rQlnGUGL3imioGnLlKxcTvcXEo.webp" alt="" class="h-56 md:h-64 w-full rounded-t-lg object-cover object-center" />
                <div class="p-6">
                    <span class="text-urbe rounded-full bg-sky-100 px-3 py-1 text-sm">{{ __("Master of Science") }}</span>
                    <a href="/academics/master-of-science-in-business-administration" class="text-urbe mt-2 flex items-center justify-between text-xl font-medium">
                    <span>{{ __("Business Administration") }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                    </svg>
                    </a>
                    <p class="mt-4 text-slate-700">{{ __("Elevate your career with URBE University's comprehensive MBA program. Customize your learning with concentrations in Accounting, Finance, Healthcare Admin, HR Management, Info Security, Management, or Supply Chain. Click for more info on our 45-credit hour program and unlock your leadership potential.") }}</p>
                </div>
                </div>
                <div class="col-span-2 rounded-lg bg-white shadow md:col-span-1">
                <img src="/images/gEc92yZLbGeATKc6pRdjMgddeTJ9dORmBbPsbeA9.webp" alt="" class="h-56 md:h-64 w-full rounded-t-lg object-cover object-center" />
                <div class="p-6">
                    <span class="text-urbe rounded-full bg-sky-100 px-3 py-1 text-sm">{{ __("Master of Science") }}</span>
                    <a href="/academics/master-of-science-in-instructional-design-and-technology" class="text-urbe mt-2 flex items-center justify-between text-xl font-medium">
                    <span>{{ __("Instructional Design and Technology") }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                    </svg>
                    </a>
                    <p class="mt-4 text-slate-700">{{ __("Gain expertise in utilizing instructional resources to enhance technology-based learning. Create, implement, and evaluate modern educational experiences. With concentrations in Virtual Learning, Learning Design and Technology, and Instructional Design and Development, our program prepares you to excel in diverse educational contexts.") }}</p>
                </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Blog --}}
    @include('website.partials.posts-teaser')

    {{-- Events --}}
    @include('website.partials.events-teaser')

    <div class="py-12"></div>

    {{-- Owner's phrase --}}
    @include('website.partials.owner-banner')

    <div class="py-12"></div>

    @include('website.partials.cta')

    <div class="py-12"></div>
@endsection
