@extends('layouts.page')

@section('content')
    <div class="container m-auto py-16 px-4">
        <div class="py-16 m-auto flex z-10 gap-5">
            {{-- lef Side Section start --}}
            <div class="w-1/3 grid item-center">
                <img class="rounded-md w-full" src="https://image.tmdb.org/t/p/w500{{ $person['profile_path'] }}"
                    alt="{{ $person['name'] }}">
            </div>
            {{-- Right side section --}}
            <div class="w-2/3">
                <h2 class="font-bold text-5xl">{{ $person['name'] }}</h2>

                <div class="font-semibold text-sm text-gray-400 my-3">
                    <p class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-300" height="16"
                            width="14"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path
                                d="M86.4 5.5L61.8 47.6C58 54.1 56 61.6 56 69.2V72c0 22.1 17.9 40 40 40s40-17.9 40-40V69.2c0-7.6-2-15-5.8-21.6L105.6 5.5C103.6 2.1 100 0 96 0s-7.6 2.1-9.6 5.5zm128 0L189.8 47.6c-3.8 6.5-5.8 14-5.8 21.6V72c0 22.1 17.9 40 40 40s40-17.9 40-40V69.2c0-7.6-2-15-5.8-21.6L233.6 5.5C231.6 2.1 228 0 224 0s-7.6 2.1-9.6 5.5zM317.8 47.6c-3.8 6.5-5.8 14-5.8 21.6V72c0 22.1 17.9 40 40 40s40-17.9 40-40V69.2c0-7.6-2-15-5.8-21.6L361.6 5.5C359.6 2.1 356 0 352 0s-7.6 2.1-9.6 5.5L317.8 47.6zM128 176c0-17.7-14.3-32-32-32s-32 14.3-32 32v48c-35.3 0-64 28.7-64 64v71c8.3 5.2 18.1 9 28.8 9c13.5 0 27.2-6.1 38.4-13.4c5.4-3.5 9.9-7.1 13-9.7c1.5-1.3 2.7-2.4 3.5-3.1c.4-.4 .7-.6 .8-.8l.1-.1 0 0 0 0s0 0 0 0s0 0 0 0c3.1-3.2 7.4-4.9 11.9-4.8s8.6 2.1 11.6 5.4l0 0 0 0 .1 .1c.1 .1 .4 .4 .7 .7c.7 .7 1.7 1.7 3.1 3c2.8 2.6 6.8 6.1 11.8 9.5c10.2 7.1 23 13.1 36.3 13.1s26.1-6 36.3-13.1c5-3.5 9-6.9 11.8-9.5c1.4-1.3 2.4-2.3 3.1-3c.3-.3 .6-.6 .7-.7l.1-.1c3-3.5 7.4-5.4 12-5.4s9 2 12 5.4l.1 .1c.1 .1 .4 .4 .7 .7c.7 .7 1.7 1.7 3.1 3c2.8 2.6 6.8 6.1 11.8 9.5c10.2 7.1 23 13.1 36.3 13.1s26.1-6 36.3-13.1c5-3.5 9-6.9 11.8-9.5c1.4-1.3 2.4-2.3 3.1-3c.3-.3 .6-.6 .7-.7l.1-.1c2.9-3.4 7.1-5.3 11.6-5.4s8.7 1.6 11.9 4.8l0 0 0 0 0 0 .1 .1c.2 .2 .4 .4 .8 .8c.8 .7 1.9 1.8 3.5 3.1c3.1 2.6 7.5 6.2 13 9.7c11.2 7.3 24.9 13.4 38.4 13.4c10.7 0 20.5-3.9 28.8-9V288c0-35.3-28.7-64-64-64V176c0-17.7-14.3-32-32-32s-32 14.3-32 32v48H256V176c0-17.7-14.3-32-32-32s-32 14.3-32 32v48H128V176zM448 394.6c-8.5 3.3-18.2 5.4-28.8 5.4c-22.5 0-42.4-9.9-55.8-18.6c-4.1-2.7-7.8-5.4-10.9-7.8c-2.8 2.4-6.1 5-9.8 7.5C329.8 390 310.6 400 288 400s-41.8-10-54.6-18.9c-3.5-2.4-6.7-4.9-9.4-7.2c-2.7 2.3-5.9 4.7-9.4 7.2C201.8 390 182.6 400 160 400s-41.8-10-54.6-18.9c-3.7-2.6-7-5.2-9.8-7.5c-3.1 2.4-6.8 5.1-10.9 7.8C71.2 390.1 51.3 400 28.8 400c-10.6 0-20.3-2.2-28.8-5.4V480c0 17.7 14.3 32 32 32H416c17.7 0 32-14.3 32-32V394.6z" />
                        </svg>
                        <small>{{ date('d  M, y ', strtotime($person['birthday'])) }}</small>
                    </p>
                    <p class="flex gap-2 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-300" height="16"
                            width="12"
                            viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path
                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                        </svg>
                        {{ $person['place_of_birth'] }}
                    </p>
                </div>

                <div class="description mt-3 text-sm font-sans text-gray-400 tracking-wide leading-8">
                    {{ $person['biography'] }}
                </div>

                <section class="know-for mt-10">
                    <ul class="flex justify-between">
                        @foreach ($knownFor as $known)
                            <li class="w-36">
                                <a href="{{ route('movies.details', $known['id']) }}" target="_blank">
                                    <img src="https://image.tmdb.org/t/p/w150_and_h225_bestv2{{ $known['poster_path'] }}"
                                        alt="Image" class="hover:opacity-75 transition-all rounded-md h-64 object-cover">
                                </a>
                                <p class="text-center text-sm pt-1">{{ $known['original_title'] }} </p>
                            </li>
                        @endforeach
                    </ul>
                </section>
            </div>
        </div>


        <section>
            <ul class="rounded-sm">
                @foreach ($cast as $castinfo)
                    <li class="flex gap-8 p-5 border bg-white text-gray-800  items-center">
                        {{-- dates --}}
                        @if (isset($castinfo['release_date']))
                            
                            <span>
                                @if(empty($castinfo['release_date']))
                                    <span>Not defined</span>
                                @else
                                  {{ $castinfo['release_date'] }}
                                @endif
                            </span>

                        @else

                            <span>
                                @if(empty($castinfo['first_air_date']))
                                    <span>Not defined</span>
                                @else
                                {{ $castinfo['first_air_date'] }}
                                @endif
                            </span>
                        @endif

                       
                        {{-- dates --}}
                        
                        {{-- Title --}}
                        <div>
                            @if (isset($castinfo['title']))
                               <span class="font-bold text-md">{{ $castinfo['title'] }}</span> 
                            @else
                               <span class="font-bold text-md">{{ $castinfo['name'] }}</span> 
                            @endif

                            <div class="font-thin">
                                {{ $castinfo['character'] }}
                            </div>
                        </div>  
                        {{-- Title --}}

                    </li>
                @endforeach
            </ul>
        </section>
    </div>
@endsection
