<div class="relative" x-data="{ isOpen: true }" @click.away="isOpen = false" >
    {{-- search bar --}}

    <div class="relative mr-5">
        <span class="absolute top-2.5 left-3 inline-block ">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-grey-500" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
        </span>
        <input 
        @focus="isOpen=true" 
        @keydown.escape.window="isOpen=false"
        @keydown.shift.tab="isOpen=false"
        x-ref="searchBar"
        @keydown.window="
        if(event.keyCode ==191){
            $refs.search.focus('searchBar');
        }
        "
        type="text"  wire:model.live.debounce.500ms="searchInp" placeholder="Seach (press / to foucs)" class="pl-10 focus:outline-none focus:shadow-outline rounded-full py-1.5 bg-gray-800 w-64" >
        <div wire:loading class="loading absolute right-2 top-2">
            <span  class="loader"></span>
        </div>
    </div>

    {{-- drop down section --}}
    @if(strlen($searchInp) > 2)
        <div class="absolute bg-gray-700 rounded-md w-64 mt-3 text-sm max-h-96 overflow-y-scroll overflow-x-hidden z-30"
             x-show="isOpen"
           
        >
            @if (sizeOf($searchResults) > 0)
            <ul>
                @foreach ($searchResults as $result) 
                    <li class="border-b border-gray-900 p-1">
                        <a href="{{ route('movies.details',$result['id']) }}">
                          <div class="flex items-center gap-2">
                                @if($result['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w92{{ $result['poster_path'] }}"  alt="{{ $result['original_title'] }}" class="w-10">
                                @else 
                                    <img src="https://via.placeholder.com/50x70"  alt="{{ $result['original_title'] }}" class="w-10">

                                @endif
                              
                                <div>
                                    {{ $result['original_title'] }}
                                </div> 
                          </div>
                        </a>
                    </li>
                @endforeach
             </ul>

             @else
             
             <div class="px-4 py-4">
                No result found for {{ $searchInp }}
             </div>
                
            @endif
        </div>
    @endif

</div>