<div>
    <header class="bg-white border-b border-b-slate-100">
        <div class="py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">School Tools</h2>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-8">
                <div class="col-span-4 sm:col-span-2 lg:col-span-1 rounded-md shadow bg-white text-center flex flex-col justify-between">
                    <div class="p-6">
                        <div class="text-blue-600 p-3 bg-blue-100 inline-flex rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <h2 class="mt-4 text-lg font-medium">School Catalog</h2>
                        <p class="mt-2 text-sm text-slate-600">Keep the school catalog up to date, and maintain older versions.</p>
                    </div>
                    <div class="px-6 py-2 w-full bg-slate-100 rounded-b-lg">
                        <a href="{{ route('admin.school.catalog') }}" class="secondary-btn">Manage</a>
                    </div>
                </div>

                <div class="col-span-4 sm:col-span-2 lg:col-span-1 rounded-md shadow bg-white text-center flex flex-col justify-between">
                    <div class="p-6">
                        <div class="text-pink-600 p-3 bg-pink-100 inline-flex rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                        </div>
                        <h2 class="mt-4 text-lg font-medium">Start Dates</h2>
                        <p class="mt-2 text-sm text-slate-600">Manage the semester start dates here.</p>
                    </div>
                    <div class="px-6 py-2 w-full bg-slate-100 rounded-b-lg">
                        <a href="{{ route('admin.school.start-dates') }}" class="secondary-btn">Manage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
