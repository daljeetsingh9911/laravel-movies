<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
   
    public $genres;

    function __construct(){
        
    }
    //
    function index():View {
        $popularMovies = Http::withToken(Config('services.tmbd.token'))
        ->get("https://api.themoviedb.org/3/movie/popular?language=en-US&page=1")
        ->json()['results'];

      
        $newPlaying = Http::withToken(Config('services.tmbd.token'))
        ->get("https://api.themoviedb.org/3/movie/now_playing?language=en-US&page=1")
        ->json()['results'];
        
        $genres = Http::withToken(Config('services.tmbd.token'))
        ->get("https://api.themoviedb.org/3/genre/movie/list?language=en")
        ->json()['genres'];

        return view("movies.index",[
            'popularMovies' => $popularMovies,
            'genres' => $genres,
            'newPlaying'=>$newPlaying
        ]);
    }

    function details(String $id):View {

        $movie = Http::withToken(Config('services.tmbd.token'))
        ->get("https://api.themoviedb.org/3/movie/{$id}?language=en-US&page=1&append_to_response=credits,videos,images")
        ->json();
        
        return view("movies.detail",[
            'movie'=>$movie
        ]);
    }

}
