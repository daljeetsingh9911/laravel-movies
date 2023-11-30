<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropDown extends Component
{
    public String $searchInp = '';
    public function render()
    {
        $searchResults = [];

        if(strlen($this->searchInp) > 2) {
            $searchResults = Http::withToken(Config('services.tmbd.token'))
            ->get("https://api.themoviedb.org/3/search/movie?&language=en-US&page=1&query={$this->searchInp}")
            ->json()['results'];
        }

        return view('livewire.search-drop-down',[
            'searchResults' => $searchResults
        ]);
    }
}
