@extends('layouts.page')
@section('content')
    <div class="pb-40">
        <div class="bg-no-repeat backdrop-blur-0 bg-cover relative"
            style="background-image: url({{ 'https://image.tmdb.org/t/p/w500' . $movie['backdrop_path'] }})">
            {{-- backdrop on background image --}}
            <div class="absolute top-0 bottom-0 left-0 right-0 bg-black blur-0 z-[-1] opacity-70"></div>
            {{-- backdrop on background image --}}
            <div class="container py-16 m-auto grid grid-cols-1 justify-center md:flex z-10 gap-5 px-4">
                {{-- lef Side Section start --}}
                <div class="w-full md:w-1/3 ">
                    <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}" class="w-full"
                        alt="{{ $movie['original_title'] }}">
                </div>
                {{-- Right side section --}}
                <div class="w-full md:w-2/3 ">
                    <h2 class="font-bold text-5xl">{{ $movie['original_title'] }}</h2>

                    <div class="font-semibold text-sm text-gray-400 my-3">
                        Release date {{ date('d/m/y', strtotime($movie['release_date'])) }}
                    </div>
                    <ul class="flex flex-wrap justify-start gap-4 text-gray-400 text-xs ">
                        @foreach ($movie['genres'] as $genre)
                            <li>{{ $genre['name'] }}</li>
                        @endforeach
                    </ul>

                    <p class="text-xl my-5 italic font-light ">{{ $movie['tagline'] }}</p>

                    <div class="description mt-3">
                        {{ $movie['overview'] }}
                    </div>

                    <div class="flex mt-7 justify-between">
                        @foreach ($movie['credits']['crew'] as $crew)
                            {{-- break loop after 3 record --}}
                            @if ($loop->index > 2)
                            @break
                        @endif
                        {{-- break loop after 3 record --}}

                        <div>
                            <p class="font-bold text-sm">{{ $crew['name'] }}</p>
                            <div class="text-xs text-gray-400 font-thin">{{ $crew['job'] }}</div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-10">
                    <a href="https://www.youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" 
                        class="bg-orange-400 p-3 rounded-md no-underline flex item-center gap-3 float-left flex-wrap"  
                        target="_blank" style="align-items: center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-white" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM48 368v32c0 8.8 7.2 16 16 16H96c8.8 0 16-7.2 16-16V368c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16zm368-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V368c0-8.8-7.2-16-16-16H416zM48 240v32c0 8.8 7.2 16 16 16H96c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16zm368-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H416zM48 112v32c0 8.8 7.2 16 16 16H96c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16zM416 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H416zM160 128v64c0 17.7 14.3 32 32 32H320c17.7 0 32-14.3 32-32V128c0-17.7-14.3-32-32-32H192c-17.7 0-32 14.3-32 32zm32 160c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H320c17.7 0 32-14.3 32-32V320c0-17.7-14.3-32-32-32H192z"/></svg>
                        <span>Trialer</span> 
                    </a>
                </div>

            </div>
        </div>
    </div>
    {{-- end of info section --}}

    <div class="container m-auto mt-10 ">
        <h4 class="font-bold text-white text-3xl mb-4 px-5">Cast</h4>
        <div class="cast-details grid xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-6 gap-5 mt-8 px-5">
            @foreach ($movie['credits']['cast'] as $cast)
                {{-- break loop after 3 record --}}
                @if ($loop->index > 5)
                  @break
                @endif
                 {{-- break loop after 3 record --}}

                <div class="bg-white rounded-md overflow-hidden text-gray-800">
                    <a href="{{ route('people.details',$cast['id']) }}">
                        <img src="https://image.tmdb.org/t/p/w500{{ $cast['profile_path'] }}" alt="{{ $cast['name'] }}">
                    </a>
                    <div class="info p-2">
                        <p class="font-semibold">{{ $cast['name'] }}</p>
                        <p class="text-xs">{{ $cast['character'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        @if (sizeof($movie['images']['backdrops']) > 0)
            <h4 class="font-bold text-white text-3xl mb-4">Images</h4>
            <div class="cast-details grid xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-6 gap-5 mt-8 px-5">
                @foreach ($movie['images']['backdrops'] as $image)
                    <div class="bg-white rounded-md overflow-hidden text-gray-800">
                        <img src="https://image.tmdb.org/t/p/w500{{ $image['file_path'] }}" alt="Image" class="hover:opacity-75 transition-all">
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
