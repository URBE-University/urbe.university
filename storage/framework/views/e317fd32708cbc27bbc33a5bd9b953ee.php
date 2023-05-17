<?php if(\App\Models\StartDate::where('start_date', '>', today())->count() > 0): ?>
    <div class="bg-white rounded-full py-4 px-6 shadow">
        <div class="grid grid-cols-12 gap-4 items-center">
            <div class="col-span-4 flex items-center gap-2">
                <div class="w-12 h-12 flex items-center justify-center bg-sky-100 text-sky-600 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                    </svg>
                </div>
                <div class="">
                    <p class="text-sm font-medium text-slate-500 uppercase">Register by</p>
                    <h2 class="text-2xl font-bold"><?php echo e(Carbon\Carbon::parse(\App\Models\StartDate::where('start_date', '>', today())->orderBy('start_date', 'ASC')->first()->apply_by_date)->format('F jS')); ?></h2>
                </div>
            </div>

            <div class="col-span-3 flex items-center gap-2">
                <div class="w-12 h-12 flex items-center justify-center bg-pink-100 text-pink-600 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>
                </div>
                <div class="">
                    <p class="text-sm font-medium text-slate-500 uppercase">To start on</p>
                    <h2 class="text-2xl font-bold"><?php echo e(Carbon\Carbon::parse(\App\Models\StartDate::where('start_date', '>', today())->orderBy('start_date', 'ASC')->first()->start_date)->format('F jS')); ?></h2>
                </div>
            </div>
            <div class="col-span-3 col-start-10">
                <a href="" class="block w-full py-4 bg-sky-500 rounded-full text-white text-center">Apply Now</a>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/website/partials/start-date-banner/regular.blade.php ENDPATH**/ ?>