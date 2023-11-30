@extends('layouts.page')
@section('content')
    <div class="pb-40">
        <div class="bg-no-repeat backdrop-blur-0 bg-cover relative"
            style="background-image: url({{ 'https://image.tmdb.org/t/p/w500' . $tvShow['backdrop_path'] }})">
            {{-- backdrop on background image --}}
            <div class="absolute top-0 bottom-0 left-0 right-0 bg-black blur-0 z-[-1] opacity-70"></div>
            {{-- backdrop on background image --}}
            <div class="container py-16 m-auto flex z-10 gap-5">
                {{-- lef Side Section start --}}
                <div class="w-1/3">
                    <img src="https://image.tmdb.org/t/p/w500{{ $tvShow['poster_path'] }}" alt="{{ $tvShow['name'] }}">
                </div>
                {{-- Right side section --}}
                <div class="w-2/3">
                    <h2 class="font-bold text-5xl">{{ $tvShow['name'] }}</h2>

                    <div class="font-semibold text-sm text-gray-400 my-3">
                        Release date {{ date('d/m/y', strtotime($tvShow['first_air_date'])) }}
                    </div>
                    <ul class="flex flex-wrap justify-start gap-4 text-gray-400 text-xs ">
                        @foreach ($tvShow['genres'] as $genre)
                            <li>{{ $genre['name'] }}</li>
                        @endforeach
                    </ul>

                    <p class="text-xl my-5 italic font-light ">{{ $tvShow['tagline'] }}</p>

                    <div class="description mt-3">
                        {{ $tvShow['overview'] }}
                    </div>


                </div>
            </div>

        </div>
        {{-- end of info section --}}

        <div class="container m-auto mt-10 ">
            <h4 class="font-bold text-white text-3xl mb-4">Cast</h4>
            <div class="cast-details grid grid-cols-6 gap-5 mt-8">
                @foreach ($tvShow['credits']['cast'] as $cast)
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

        @if (sizeof($tvShow['images']['backdrops']) > 0)
            <h4 class="font-bold text-white text-3xl mb-4">Images</h4>
            <div class="cast-details grid grid-cols-6 gap-5 mt-8">
                @foreach ($tvShow['images']['backdrops'] as $image)
                    <div class="bg-white rounded-md overflow-hidden text-gray-800">
                        <img src="https://image.tmdb.org/t/p/w500{{ $image['file_path'] }}" alt="Image"
                            class="hover:opacity-75 transition-all">
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
