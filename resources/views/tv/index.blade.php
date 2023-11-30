@extends('layouts.page')

@section('content')
    <div class="container m-auto pt-16 px-4">
        {{-- Heading  --}}
        <h2 class="font-lg font-semibold uppercase text-orange-500 tracking-wider"> Popular TV-SHOWS</h2>

        {{-- Grid Section --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-4">
            {{-- All Card will goes here --}}
            @foreach ($popularTvshow as $tvshow)
                <x-tv-component :tvShow="$tvshow" :genres="$genres" />
            @endforeach
            {{-- All Card will goes here --}}
        </div>
        {{-- Grid Section --}}

        <div class="my-10 border-b-2 border-gray-700"></div>

        {{-- Heading  --}}
        <h2 class="font-lg font-semibold uppercase text-orange-500 tracking-wider"> Top Rated Shows</h2>

        {{-- Grid Section --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-4">
            {{-- All Card will goes here --}}
            @foreach ($topRated as $tvshow)
                <x-tv-component :tvShow="$tvshow" :genres="$genres" />
            @endforeach
            {{-- All Card will goes here --}}
        </div>
        {{-- Grid Section --}}
    </div>
@endsection
