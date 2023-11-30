@extends('layouts.page')

@section('content')
    <div class="container m-auto py-16 px-4">
        {{-- Heading --}}
        <h2 class="font-lg font-semibold uppercase text-orange-500 tracking-wider"> Popular Artists</h2>

        <div class="all-content grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-4 mt-4">
            @if (sizeOf($persons) > 0)
                @foreach ($persons as $person)
                    <div class="artist bg-white rounded-md overflow-hidden text-gray-800">
                        <a href="{{ url('/artist/details') }}/{{ $person['id'] }}">
                            @if ($person['profile_path'])
                                <img src="https://image.tmdb.org/t/p/w235_and_h235_face{{ $person['profile_path'] }}"
                                    alt="Image" class="w-full hover:opacity-75 transition-all">
                            @else
                                <img src="https://ui-avatars.com/api?name={{ $person['original_name'] }}&size=500"
                                    alt="Image" class="w-full hover:opacity-75 transition-all object-cover">
                            @endif
                        </a>
                        <div class="person-details p-2">
                            <div class="font-bold text-md">{{ $person['original_name'] }}</div>
                            <div class="text-thin italic text-xs">
                                <div>
                                    @foreach ($person['known_for'] as $details)
                                        {{-- Show artist know for details --}}
                                        @if (isset($details['name']))
                                            <span> {{ $details['name'] }} </span>
                                        @else
                                            <span>{{ $details['title'] }}</span>
                                        @endif

                                        {{-- adding | seprator between known for details --}}
                                        @if (sizeof($person['known_for']) > $loop->iteration)
                                            <span class="text-orange-500 font-bold text-md">|</span>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @else

                    <div class="text-center">
                        No data found for page index {{ $page }}
                    </div>

            @endif

        </div>
        <div class="page-load-status text-center mt-5">
            <div class="text-center infinite-scroll-request">
                <span  class="loader w-10 h-40"style="width: 50px;height: 50px;" ></span>
            </div>
            <p class="infinite-scroll-last">End of content</p>
            <p class="infinite-scroll-error">No more pages to load</p>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
<script>
    let elem = document.querySelector('.all-content');
    let infScroll = new InfiniteScroll( elem, {
        // options
        path: '/people/@{{#}}',
        append: '.artist',
        status: '.page-load-status',
        history: true
    });
</script>
@endsection
