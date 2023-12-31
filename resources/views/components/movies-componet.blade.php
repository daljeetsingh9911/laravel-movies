<div class="group card-box mt-8 shadow-md shadow-gray-800 rounded-sm overflow-hidden sm:hover:shadow-xl transition-all sm:hover:scale-110 sm:hover:bg-white sm:hover:shadow-gray-900">
    <a href="/details/{{ $movie['id'] }}">
        <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path']}}" alt="{{ $movie['title']}}" class="transition-all">
    </a>
    <div class="description mt-2 p-3">
        <a href="/details" class="text-lg sm:group-hover:text-gray-900">
           {{ $movie['title']}}
        </a>
        
        <div class="text-center text-gray-500 text-sm font-thin sm:group-hover:text-gray-900">
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