@if (\App\Models\StartDate::where('start_date', '>', today())->count() > 0)
@php
    $apply_by_date = Carbon\Carbon::parse(\App\Models\StartDate::where('start_date', '>', today())->orderBy('start_date', 'ASC')->first()->apply_by_date)->format('F jS');
    $start_date = Carbon\Carbon::parse(\App\Models\StartDate::where('start_date', '>', today())->orderBy('start_date', 'ASC')->first()->start_date)->format('F jS');
@endphp
    <div class="max-w-full mx-auto px-4 sm:px-6 py-4 sm:h-24 sm:flex items-center justify-between bg-white shadow-lg shadow-sky-100 sm:rounded-2xl">
        <div class="h-full flex items-center justify-evenly space-x-6 lg:space-x-12">
            <div class="h-full flex items-center gap-2">
                <div class="w-12 h-12 flex items-center justify-center bg-sky-100 text-sky-600 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                    </svg>
                </div>
                <div>
                    <div class="text-xs font-medium text-slate-500 uppercase">{{__("Register by")}}</div>
                    <div class="text-xl font-bold text-urbe">{!! Str::substr($apply_by_date, 0, -2) . "<sup class='font-light text-xs ml-0.5'>" . Str::substr($apply_by_date, -2) . "</sup>" !!}</div>
                </div>
            </div>

            <div class="h-full flex items-center gap-2">
                <div class="w-12 h-12 flex items-center justify-center bg-pink-100 text-pink-600 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>
                </div>

                <div class="">
                    <div class="text-xs font-medium text-slate-500 uppercase">{{__("To start on")}}</div>
                    <div class="text-xl font-bold text-urbe">{!! Str::substr($start_date, 0, -2) . "<sup class='font-light text-xs ml-0.5'>" . Str::substr($start_date, -2) . "</sup>" !!}</div>
                </div>
            </div>
        </div>

        <div class="h-full mt-6 sm:mt-0 sm:flex items-center">
            <a href="https://admissions.urbeuniversity.edu?utm_campaign='website_traffic'&utm_source='{{url()->current()}}'&utm_medium='start_date_banner'"
                target="_blank"
                class="w-full h-12 px-5 flex shadow-lg shadow-sky-200 items-center justify-center bg-sky-500 hover:bg-sky-600 transition-all rounded-full text-white font-medium"
            >{{__("Apply Now")}}</a>
        </div>
    </div>
@endif
