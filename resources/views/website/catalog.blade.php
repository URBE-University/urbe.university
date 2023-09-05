@extends('layouts.website', ['settings' => $settings, 'title' => 'URBE University'])

@section('content')
<div class="w-full" style="background-image: url(https://urbeuniversity.edu/static_assets/page-header-bg.webp)">
    <div class="mx-auto h-full max-w-6xl px-4 sm:px-6 lg:px-8">
      <div class="py-12 text-white sm:py-24">
        <h1 class="text-5xl font-extrabold">{{ __("URBE Catalogs") }}</h1>
      </div>
    </div>
  </div>
  <section class="w-full pb-24 pt-16">
    <div class="mx-auto max-w-6xl px-4 text-center sm:px-6 lg:px-8">
      <div class="grid grid-cols-6 items-start gap-8">
        <main class="col-span-6 md:col-span-4">
            <h2></h2>
            <embed src="{{asset($catalog->path)}}?toolbar=0&navpanes=0&scrollbar=0"
                type="application/pdf"
                width="100%"
                height="800px"
                class="mt-6"
            >
        </main>

        <!-- Sidenav -->
        <aside class="col-span-6 hidden justify-end text-base md:col-span-2 md:flex">
          <ul class="text-left">
            <li class="mt-2 mb-4">
              <p class="border-l-urbe text-urbe border-l-4 pl-2 text-xl font-semibold">{{ __("Other versions") }}</p>
            </li>
            @forelse (\App\Models\Catalog::orderBy('year', 'DESC')->get() as $cat)
                <li class="mt-2">
                    <a href="{{ route('catalog.show', ['year' => $cat->year]) }}" class="transition-all hover:text-sky-500 hover:underline">{{ $cat->year . __(" University Catalog") }}</a>
                </li>
            @empty
            @endforelse
          </ul>
        </aside>
      </div>
    </div>
  </section>
@endsection
