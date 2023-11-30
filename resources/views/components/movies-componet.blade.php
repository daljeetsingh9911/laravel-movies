<div class="mt-8">
    <a href="/details/{{ $movie['id'] }}">
        <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path']}}" alt="{{ $movie['title']}}" class="hover:opacity-75 transition-all">
    </a>
    <div class="description mt-2">
        <a href="/details" class="text-lg hover:text-gray-300">
           {{ $movie['title']}}
        </a>
        <div class="details grid grap-5 grid-cols-2 text-gray-300 text-sm leading-8">
            <span>Stars</span>
            <span>85%</span>
            <span>Feb 20 2022</span>
        </div>
        <div class="text-center text-gray-300 text-sm ">
            <ul class="flex gap-2  flex-wrap">
                @foreach ($genres as $genre)
                    @if(in_array($genre["id"],$movie['genre_ids']))
                         <li>{{ $genre['name'] }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>