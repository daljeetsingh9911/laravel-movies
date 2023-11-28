@extends('layouts.page')

@section('content')
    <div class="container m-auto pt-16 px-4">
        {{-- Heading  --}}
        <h2 class="font-lg font-semibold uppercase text-orange-500 tracking-wider"> Popular Movies</h2>

        {{-- Grid Section --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-4">
            {{-- All Card will goes here --}}
            @foreach ($popularMovies['results'] as $popularMovie )
                    
            <div class="mt-8">
                <a href="/details">
                    <img src="https://image.tmdb.org/t/p/w500/{{ $popularMovie['poster_path']}}" alt="{{ $popularMovie['title']}}" class="hover:opacity-75 transition-all">
                </a>
                <div class="description mt-2">
                    <a href="/details" class="text-lg hover:text-gray-300">
                       {{ $popularMovie['title']}}
                    </a>
                    <div class="details grid grap-5 grid-cols-2 text-gray-300 text-sm leading-8">
                        <span>Stars</span>
                        <span>85%</span>
                        <span>Feb 20 2022</span>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- All Card will goes here --}}
        </div>
        {{-- Grid Section --}}

        <div class="my-10 border-b-2 border-gray-700"></div>

        {{-- Heading  --}}
        <h2 class="font-lg font-semibold uppercase text-orange-500 tracking-wider"> Now Playing</h2>

        {{-- Grid Section --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-4">
            {{-- All Card will goes here --}}
            <div class="mt-8">
                <a href="/details">
                    <img src="/img/scam.jpg" alt="scam" class="hover:opacity-75 transition-all">
                </a>
                <div class="description mt-2">
                    <a href="/details" class="text-lg hover:text-gray-300">
                        Scam 1992
                    </a>
                    <div class="details grid grap-5 grid-cols-2 text-gray-300 text-sm leading-8">
                        <span>Stars</span>
                        <span>85%</span>
                        <span>Feb 20 2022</span>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="/details">
                    <img src="/img/scam.jpg" alt="scam" class="hover:opacity-75 transition-all">
                </a>
                <div class="description mt-2">
                    <a href="/details" class="text-lg hover:text-gray-300">
                        Scam 1992
                    </a>
                    <div class="details grid grap-5 grid-cols-2 text-gray-300 text-sm leading-8">
                        <span>Stars</span>
                        <span>85%</span>
                        <span>Feb 20 2022</span>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="/details">
                    <img src="/img/scam.jpg" alt="scam" class="hover:opacity-75 transition-all">
                </a>
                <div class="description mt-2">
                    <a href="/details" class="text-lg hover:text-gray-300">
                        Scam 1992
                    </a>
                    <div class="details grid grap-5 grid-cols-2 text-gray-300 text-sm leading-8">
                        <span>Stars</span>
                        <span>85%</span>
                        <span>Feb 20 2022</span>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="/details">
                    <img src="/img/scam.jpg" alt="scam" class="hover:opacity-75 transition-all">
                </a>
                <div class="description mt-2">
                    <a href="/details" class="text-lg hover:text-gray-300">
                        Scam 1992
                    </a>
                    <div class="details grid grap-5 grid-cols-2 text-gray-300 text-sm leading-8">
                        <span>Stars</span>
                        <span>85%</span>
                        <span>Feb 20 2022</span>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="/details">
                    <img src="/img/scam.jpg" alt="scam" class="hover:opacity-75 transition-all">
                </a>
                <div class="description mt-2">
                    <a href="/details" class="text-lg hover:text-gray-300">
                        Scam 1992
                    </a>
                    <div class="details grid grap-5 grid-cols-2 text-gray-300 text-sm leading-8">
                        <span>Stars</span>
                        <span>85%</span>
                        <span>Feb 20 2022</span>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="/details">
                    <img src="/img/scam.jpg" alt="scam" class="hover:opacity-75 transition-all">
                </a>
                <div class="description mt-2">
                    <a href="/details" class="text-lg hover:text-gray-300">
                        Scam 1992
                    </a>
                    <div class="details grid grap-5 grid-cols-2 text-gray-300 text-sm leading-8">
                        <span>Stars</span>
                        <span>85%</span>
                        <span>Feb 20 2022</span>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="/details">
                    <img src="/img/scam.jpg" alt="scam" class="hover:opacity-75 transition-all">
                </a>
                <div class="description mt-2">
                    <a href="/details" class="text-lg hover:text-gray-300">
                        Scam 1992
                    </a>
                    <div class="details grid grap-5 grid-cols-2 text-gray-300 text-sm leading-8">
                        <span>Stars</span>
                        <span>85%</span>
                        <span>Feb 20 2022</span>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="/details">
                    <img src="/img/scam.jpg" alt="scam" class="hover:opacity-75 transition-all">
                </a>
                <div class="description mt-2">
                    <a href="/details" class="text-lg hover:text-gray-300">
                        Scam 1992
                    </a>
                    <div class="details grid grap-5 grid-cols-2 text-gray-300 text-sm leading-8">
                        <span>Stars</span>
                        <span>85%</span>
                        <span>Feb 20 2022</span>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="/details">
                    <img src="/img/scam.jpg" alt="scam" class="hover:opacity-75 transition-all">
                </a>
                <div class="description mt-2">
                    <a href="/details" class="text-lg hover:text-gray-300">
                        Scam 1992
                    </a>
                    <div class="details grid grap-5 grid-cols-2 text-gray-300 text-sm leading-8">
                        <span>Stars</span>
                        <span>85%</span>
                        <span>Feb 20 2022</span>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="/details">
                    <img src="/img/scam.jpg" alt="scam" class="hover:opacity-75 transition-all">
                </a>
                <div class="description mt-2">
                    <a href="/details" class="text-lg hover:text-gray-300">
                        Scam 1992
                    </a>
                    <div class="details grid grap-5 grid-cols-2 text-gray-300 text-sm leading-8">
                        <span>Stars</span>
                        <span>85%</span>
                        <span>Feb 20 2022</span>
                    </div>
                </div>
            </div>

            
            {{-- All Card will goes here --}}
        </div>
        {{-- Grid Section --}}
    </div>
@endsection
