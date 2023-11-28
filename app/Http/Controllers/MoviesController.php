<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    //
    function index():View {
        $popularMovies = Http::withToken(Config('services.tmbd.token'))
        ->get("https://api.themoviedb.org/3/movie/popular?language=en-US&page=1")
        ->json();
        
        return view("index",[
            'popularMovies' => $popularMovies,

        ]);
    }

    function details():View{
        return view("detail");
    }

}
