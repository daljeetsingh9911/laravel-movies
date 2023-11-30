<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PeopleController extends Controller
{
    //
    public function index(){


        $persons = Http::withToken(Config('services.tmbd.token'))
        ->get("https://api.themoviedb.org/3/person/popular?language=en-US&page=1")
        ->json()['results'];

        return view("artists.index",[
            "persons"=> $persons
        ]);
    }

    public function details(Request $request){
        return view("artists.detail");

    }
}
