<div class="border-b  border-gray-800">
    {{-- main header on large screens --}}
    <nav class="container hidden items-center justify-between m-auto  md:flex">
        <div class="items-center  flex py-6 " >
            <ul class="flex">
                <li>
                    <a href="{{ url('/') }}" class="flex item-center gap-4 text-al justify-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-white fill-current" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M448 32H361.9l-1 1-127 127h92.1l1-1L453.8 32.3c-1.9-.2-3.8-.3-5.8-.3zm64 128V96c0-15.1-5.3-29.1-14-40l-104 104H512zM294.1 32H201.9l-1 1L73.9 160h92.1l1-1 127-127zM64 32C28.7 32 0 60.7 0 96v64H6.1l1-1 127-127H64zM512 192H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192z"/></svg> 
                        <span >MoviesAPP</span>
                    </a>
                </li>
                <li class="ml-16"><a href="{{ url('/') }}"  wire:navigate class="hover:text-gray-300"> Movies</a></li>
                <li class="ml-6"><a href="{{ url('/tv') }}" wire:navigate class="hover:text-gray-300"> TV Shows</a> </li>
                <li class="ml-6"><a href="{{ url('/people') }}"  class="hover:text-gray-300"> People</a></li>
            </ul>
        </div>
        <div class="flex items-center">
            <livewire:search-drop-down />
            <img class="inline-block h-7 w-7 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        </div>
    </nav>
    {{-- main header on large screens --}}

    {{-- mobile header --}}

    <nav class="md:hidden p-4" x-data="{ open: false }">
        <div class="flex justify-between  item-center">
            <a href="{{ url('/') }}" class="flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-white fill-current" height="1.5em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M448 32H361.9l-1 1-127 127h92.1l1-1L453.8 32.3c-1.9-.2-3.8-.3-5.8-.3zm64 128V96c0-15.1-5.3-29.1-14-40l-104 104H512zM294.1 32H201.9l-1 1L73.9 160h92.1l1-1 127-127zM64 32C28.7 32 0 60.7 0 96v64H6.1l1-1 127-127H64zM512 192H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192z"/></svg> 
                <span >MoviesAPP</span>
            </a>
            <span x-on:click="open = ! open">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-white" height="26" width="24" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
            </span>
        </div>
       
        <div class="pt-4 " x-show="open">
            <div class="flex items-center justify-between pt-2">
                <livewire:search-drop-down />
                <img class="inline-block h-7 w-7 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <ul class="block mt-2">
                <li class="p-2  border-b  border-gray-800"><a href="{{ url('/') }}"  wire:navigate class="hover:text-gray-300"> Movies</a></li>
                <li class="p-2  border-b border-gray-800"><a href="{{ url('/tv') }}" wire:navigate class="hover:text-gray-300"> TV Shows</a> </li>
                <li class="pt-2 "><a href="{{ url('/people') }}"  class="hover:text-gray-300"> People</a></li>
            </ul>
        </div>
    </nav>

</div>
