@extends('layouts.website')

@section('content')
    {{-- Header --}}
    <header class="relative flex items-center justify-center h-96 md:h-screen mb-12 overflow-hidden">
        <div class="z-10 relative p-5 text-2xl text-white bg-purple-300 bg-opacity-50 rounded-xl">Welcome to my site!</div>
        <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
        <source src="{{ asset('videos/video.mp4') }}" type="video/mp4"/>Your browser does not support the video tag.</video>
    </header>

    <div class="py-12"></div>

    {{-- Why learn with URBE --}}
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-8">
            <div class="col-span-2 md:col-span-1">
                <h2 class="text-4xl text-urbe font-serif font-bold">{{ __("Why learn with URBE?") }}</h2>
                <a href="" class="inline-flex mt-4 space-x-3 items-center">
                    <span>Take the tour</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
            <div class="col-span-2 md:col-span-1">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta non aliquid aut ipsum, ullam optio odit quo tempore dolor, necessitatibus, et facere iste? Dolores atque placeat temporibus unde cum maxime?</p>
            </div>
        </div>
        <div class="py-8"></div>
        <div class="grid grid-cols-3 gap-8">
            <div class="md:h-96 col-span-3 md:col-span-1 bg-slate-50 rounded-xl bg-center bg-cover" style="background-image: url(https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg)">
                <div class="h-full w-full bg-white/90 backdrop-blur-sm p-4 sm:p-6 lg:p-8 rounded-xl">
                    <div class="flex justify-end">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-sky-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                        </svg>
                    </div>
                    <div class="h-full flex flex-col justify-center">
                        <p class="text-xl text-urbe font-medium">Lorem ipsum dolor</p>
                        <p class="mt-4 text-slate-800">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut doloribus saepe excepturi tenetur quaerat dicta odit voluptatum similique voluptatibus perspiciatis quam consequuntur officia quis, modi nulla nesciunt molestias praesentium magni?</p>
                        <div class="pb-6"></div>
                    </div>
                </div>
            </div>
            <div class="md:h-96 col-span-3 md:col-span-1 bg-slate-50 rounded-xl bg-center bg-cover" style="background-image: url(https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg)">
                <div class="h-full w-full bg-white/90 backdrop-blur-sm p-4 sm:p-6 lg:p-8 rounded-xl">
                    <div class="flex justify-end">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-sky-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                        </svg>
                    </div>
                    <div class="h-full flex flex-col justify-center">
                        <p class="text-xl text-urbe font-medium">Lorem ipsum dolor</p>
                        <p class="mt-4 text-slate-800">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut doloribus saepe excepturi tenetur quaerat dicta odit voluptatum similique voluptatibus perspiciatis quam consequuntur officia quis, modi nulla nesciunt molestias praesentium magni?</p>
                        <div class="pb-6"></div>
                    </div>
                </div>
            </div>
            <div class="md:h-96 col-span-3 md:col-span-1 bg-slate-50 rounded-xl bg-center bg-cover" style="background-image: url(https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg)">
                <div class="h-full w-full bg-white/90 backdrop-blur-sm p-4 sm:p-6 lg:p-8 rounded-xl">
                    <div class="flex justify-end">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-sky-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                        </svg>
                    </div>
                    <div class="h-full flex flex-col justify-center">
                        <p class="text-xl text-urbe font-medium">Lorem ipsum dolor</p>
                        <p class="mt-4 text-slate-800">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut doloribus saepe excepturi tenetur quaerat dicta odit voluptatum similique voluptatibus perspiciatis quam consequuntur officia quis, modi nulla nesciunt molestias praesentium magni?</p>
                        <div class="pb-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="py-12"></div>

    {{-- Mission --}}
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-4xl text-urbe font-serif font-bold">Our Mission</h2>
            <p class="mt-4 max-w-3xl mx-auto text-slate-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus quam totam quos eius quasi, rem amet ab mollitia aperiam, magnam consectetur reprehenderit ex id est neque ipsa magni nemo officiis?</p>
        </div>
        <div class="mt-6 max-w-3xl mx-auto w-auto">
            <video class="rounded-lg" src="{{ asset('videos/video.mp4') }}" controls></video>
        </div>
    </section>

    <div class="py-12"></div>

    {{-- Discover our programs --}}
    <section class="w-full pt-16 pb-24 bg-sky-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl text-urbe font-serif font-bold capitalize">{{ __("Discover our programs") }}</h2>

            <div class="mt-12 grid grid-cols-2 gap-8 text-left">
                <div class="col-span-2 md:col-span-1 bg-white rounded-lg shadow">
                    <img src="https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg" alt="" class="h-56 w-full object-top object-cover rounded-t-lg">
                    <div class="p-4">
                        <span class="text-xs bg-sky-100 text-sky-600 px-3 py-1 rounded-full">Master of Science</span>
                        <a href="#" class="mt-2 font-medium text-lg text-urbe flex items-center justify-between">
                            <span>Business Administration</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <p class="mt-4 text-base text-slate-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aperiam! Nam dolorum hic, harum iste sint, provident velit accusamus autem natus dolorem debitis inventore maiores quibusdam ipsam incidunt dolore nihil.
                        </p>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1 bg-white rounded-lg shadow">
                    <img src="https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg" alt="" class="h-56 w-full object-top object-cover rounded-t-lg">
                    <div class="p-4">
                        <span class="text-xs bg-sky-100 text-sky-600 px-3 py-1 rounded-full">Master of Science</span>
                        <a href="#" class="mt-2 font-medium text-lg text-urbe flex items-center justify-between">
                            <span>Business Administration</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <p class="mt-4 text-base text-slate-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aperiam! Nam dolorum hic, harum iste sint, provident velit accusamus autem natus dolorem debitis inventore maiores quibusdam ipsam incidunt dolore nihil.
                        </p>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1 bg-white rounded-lg shadow">
                    <img src="https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg" alt="" class="h-56 w-full object-top object-cover rounded-t-lg">
                    <div class="p-4">
                        <span class="text-xs bg-sky-100 text-sky-600 px-3 py-1 rounded-full">Master of Science</span>
                        <a href="#" class="mt-2 font-medium text-lg text-urbe flex items-center justify-between">
                            <span>Business Administration</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <p class="mt-4 text-base text-slate-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aperiam! Nam dolorum hic, harum iste sint, provident velit accusamus autem natus dolorem debitis inventore maiores quibusdam ipsam incidunt dolore nihil.
                        </p>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1 bg-white rounded-lg shadow">
                    <img src="https://urbe.university/wp-content/uploads/2019/02/MBA-Student.jpg" alt="" class="h-56 w-full object-top object-cover rounded-t-lg">
                    <div class="p-4">
                        <span class="text-xs bg-sky-100 text-sky-600 px-3 py-1 rounded-full">Master of Science</span>
                        <a href="#" class="mt-2 font-medium text-lg text-urbe flex items-center justify-between">
                            <span>Business Administration</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <p class="mt-4 text-base text-slate-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, aperiam! Nam dolorum hic, harum iste sint, provident velit accusamus autem natus dolorem debitis inventore maiores quibusdam ipsam incidunt dolore nihil.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="py-12"></div>

    {{-- Blog --}}
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl text-urbe font-serif font-bold capitalize">{{ __("Latest News") }}</h2>
        <span class="text-slate-600 text-xs">From our blog</span>

        <div class="mt-6 grid grid-cols-3 gap-8 text-left">
            <a href="#" class="col-span-3 md:col-span-1">
                <img src="https://urbe.university/wp-content/uploads/2019/02/Mass-Communications-Student.jpg" alt="" class="w-full aspect-video md:aspect-square rounded-lg object-cover object-center">
                <p class="mt-2 font-medium text-lg text-urbe flex items-center justify-between">Lorem ipsum dolor asit met.</p>
                <p class="mt-2 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit[...]</p>
            </a>
            <a href="#" class="col-span-3 md:col-span-1">
                <img src="https://urbe.university/wp-content/uploads/2019/02/Mass-Communications-Student.jpg" alt="" class="w-full aspect-video md:aspect-square rounded-lg object-cover object-center">
                <p class="mt-2 font-medium text-lg text-urbe flex items-center justify-between">Lorem ipsum dolor asit met.</p>
                <p class="mt-2 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit[...]</p>
            </a>
            <a href="#" class="col-span-3 md:col-span-1">
                <img src="https://urbe.university/wp-content/uploads/2019/02/Mass-Communications-Student.jpg" alt="" class="w-full aspect-video md:aspect-square rounded-lg object-cover object-center">
                <p class="mt-2 font-medium text-lg text-urbe flex items-center justify-between">Lorem ipsum dolor asit met.</p>
                <p class="mt-2 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit[...]</p>
            </a>
        </div>
        <div class="mt-12">
            <a href="#" class="px-5 py-2 border rounded-lg text-sm text-slate-600 hover:bg-sky-500 hover:text-white hover:border-sky-500 transition-all">Read more articles...</a>
        </div>
    </section>

    <div class="py-12"></div>

    {{-- Events --}}
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl text-urbe font-serif font-bold capitalize">{{ __("Upcoming Events") }}</h2>

        <div class="mt-6">
            <a href="" class="block mt-6">
                <div class="w-full border-2 border-slate-200 py-6 px-4 sm:px-6 lg:px-8 rounded-lg hover:border-sky-500 transition-all">
                    <div class="md:flex items-center md:space-x-4">
                        <div class="flex-none pr-4 md:border-r h-full text-left text-slate-800">
                            <p class="text-sm">Feb 24</p>
                            <p class="font-medium">10:00 AM</p>
                        </div>
                        <div class="text-left border-t md:border-t-0">
                            <p class="font-medium text-lg text-urbe flex items-center justify-between">The event title goes here.</p>
                            <p class="mt-2 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus sed itaque vel dolore sequi? Quasi commodi laboriosam suscipit tempora, doloribus sit delectus perspiciatis ex. Illo, aliquid! Nam perspiciatis numquam consequatur.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="mt-12">
            <a href="#" class="px-5 py-2 border rounded-lg text-sm text-slate-600 hover:bg-sky-500 hover:text-white hover:border-sky-500 transition-all">View all events...</a>
        </div>
    </section>

    <div class="py-12"></div>

    {{-- Owner's phrase --}}
    <section class="w-full bg-urbe text-white">
        <div class="py-12 md:py-24 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full grid grid-cols-6 items-center gap-8">
                <div class="col-span-6 md:col-span-2">
                    <img src="https://lp.urbe.university/dr-belloso-bw.webp" alt="Dr. Oscar Belloso Medina black and white portrait" class="mx-auto md:mx-0 border-[8px] border-white rounded-full w-2/3 md:w-full">
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

    @include('website.partials.cta')

    <div class="py-12"></div>

@endsection
