<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">SEO Settings</h2>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-8">

                <div class="col-span-4 sm:col-span-2 lg:col-span-1 rounded-md shadow bg-white text-center flex flex-col justify-between">
                    <div class="p-6">
                        <div class="text-blue-600 p-3 bg-blue-100 inline-flex rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                            </svg>
                        </div>
                        <h2 class="mt-4 text-lg font-medium">Site Settings</h2>
                        <p class="mt-2 text-sm text-slate-600">Maintain essential website settings, such as title, description, favicon, and canonical link.</p>
                    </div>
                    <div class="px-6 py-2 w-full bg-slate-100 rounded-b-lg">
                        <a href="{{ route('admin.tools.site.settings') }}" class="secondary-btn">Manage</a>
                    </div>
                </div>

                <div class="col-span-4 sm:col-span-2 lg:col-span-1 rounded-md shadow bg-white text-center flex flex-col justify-between">
                    <div class="p-6">
                        <div class="text-green-600 p-3 bg-green-100 inline-flex rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                            </svg>
                        </div>
                        <h2 class="mt-4 text-lg font-medium">Social Media</h2>
                        <p class="mt-2 text-sm text-slate-600">Manage your social media urls and icons here. The system will insert your new urls as soon as they are saved.</p>
                    </div>
                    <div class="px-6 py-2 bg-slate-100 rounded-b-lg">
                        <a href="{{ route('admin.tools.socialmedia') }}" class="secondary-btn">Manage</a>
                    </div>
                </div>

                <div class="col-span-4 sm:col-span-2 lg:col-span-1 rounded-md shadow bg-white text-center flex flex-col justify-between">
                    <div class="p-6">
                        <div class="text-pink-600 p-3 bg-pink-100 inline-flex rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                            </svg>
                        </div>
                        <h2 class="mt-4 text-lg font-medium">Banners</h2>
                        <p class="mt-2 text-sm text-slate-600">Display short announcements on the top of every page with banners.</p>
                    </div>
                    <div class="px-6 py-2 bg-slate-100 rounded-b-lg">
                        <a href="{{ route('admin.tools.banners') }}" class="secondary-btn">Manage</a>
                    </div>
                </div>

                <div class="col-span-4 sm:col-span-2 lg:col-span-1 rounded-md shadow bg-white text-center flex flex-col justify-between">
                    <div class="p-6">
                        <div class="text-indigo-600 p-3 bg-indigo-100 inline-flex rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </div>
                        <h2 class="mt-4 text-lg font-medium">Webmaster Tools</h2>
                        <p class="mt-2 text-sm text-slate-600">Enter and store the verification codes for multiple search engine consoles such as the Google Search Console, and others.</p>
                    </div>
                    <div class="px-6 py-2 bg-slate-100 rounded-b-lg">
                        <a href="{{ route('admin.tools.webmaster.tools') }}" class="secondary-btn">Manage</a>
                    </div>
                </div>

                <div class="col-span-4 sm:col-span-2 lg:col-span-1 rounded-md shadow bg-white text-center flex flex-col justify-between">
                    <div class="p-6">
                        <div class="text-yellow-600 p-3 bg-yellow-100 inline-flex rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                            </svg>
                        </div>
                        <h2 class="mt-4 text-lg font-medium">Instant Indexing</h2>
                        <p class="mt-2 text-sm text-slate-600">Notify search engines using the IndexNow API when pages are added, updated and removed, or submit URLs manually.</p>
                    </div>
                    <div class="px-6 py-2 bg-slate-100 rounded-b-lg">
                        <a href="{{ route('admin.tools.instant.index') }}" class="secondary-btn">Manage</a>
                    </div>
                </div>

                <div class="col-span-4 sm:col-span-2 lg:col-span-1 rounded-md shadow bg-white text-center flex flex-col justify-between">
                    <div class="p-6">
                        <div class="text-purple-600 p-3 bg-purple-100 inline-flex rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                            </svg>
                        </div>
                        <h2 class="mt-4 text-lg font-medium">Redirections</h2>
                        <p class="mt-2 text-sm text-slate-600">Redirect non-existent content easily with 301 and 302 status code. This can help improve site ranking.</p>
                    </div>
                    <div class="px-6 py-2 bg-slate-100 rounded-b-lg">
                        <a href="{{ route('admin.tools.redirects') }}" class="secondary-btn">Manage</a>
                    </div>
                </div>

                <div class="col-span-4 sm:col-span-2 lg:col-span-1 rounded-md shadow bg-white text-center flex flex-col justify-between">
                    <div class="p-6">
                        <div class="text-cyan-600 p-3 bg-cyan-100 inline-flex rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                            </svg>
                        </div>
                        <h2 class="mt-4 text-lg font-medium">Sitemap</h2>
                        <p class="mt-2 text-sm text-slate-600">Enable the sitemap feature, which helps search engines intelligently crawl your website's content. It also supports hreflang tag.</p>
                    </div>
                    <div class="px-6 py-2 bg-slate-100 rounded-b-lg">
                        @livewire('admin.seo.tools.generate-sitemap')
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
