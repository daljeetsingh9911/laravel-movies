<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    function index():View {
        $popularMovies = Http::withToken(Config('services.tmbd.token'))
        ->get("https://api.themoviedb.org/3/tv/popular?language=en-US&page=1")
        ->json()['results'];

        $top_rated = Http::withToken(Config('services.tmbd.token'))
        ->get("https://api.themoviedb.org/3/tv/top_rated?language=en-US&page=1")
        ->json()['results'];
      
    
        $genres = Http::withToken(Config('services.tmbd.token'))
        ->get("https://api.themoviedb.org/3/genre/tv/list?language=en")
        ->json()['genres'];


        return view("tv.index",[
            'popularTvshow' => $popularMovies,
            'genres' => $genres,
            'topRated'=>$top_rated
        ]);
    }

    function details(String $id):View {

        $movie = Http::withToken(Config('services.tmbd.token'))
        ->get("https://api.themoviedb.org/3/movie/{$id}?language=en-US&page=1&append_to_response=credits,videos,images")
        ->json();
        
        return view("tv.detail",[
            'movie'=>$movie
        ]);
    }

}
