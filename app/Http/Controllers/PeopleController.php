<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PeopleController extends Controller
{
    //
    public function index($page = 1){

        abort_if($page > 500 ,204);

        $persons = Http::withToken(Config('services.tmbd.token'))
        ->get("https://api.themoviedb.org/3/person/popular?language=en-US&page={$page}")
        ->json();

        return view("artists.index",[
            "persons"=> ($page <= 0 || $page > 500)?[]:$persons['results'],
            "page"=>$page
        ]);
    }

    public function details($id){
        $person = Http::withToken(Config('services.tmbd.token'))
        ->get("https://api.themoviedb.org/3/person/{$id}?language=en-US")
        ->json();

        $socialAccounts = Http::withToken(Config('services.tmbd.token'))
        ->get("https://api.themoviedb.org/3/person/{$id}/external_ids")
        ->json();

        $credits = Http::withToken(Config('services.tmbd.token'))
        ->get("https://api.themoviedb.org/3/person/{$id}/combined_credits")
        ->json();

        $kownFor = collect($credits['cast']);

        $kownFor = collect($kownFor)->where('media_type', 'movie')->sortByDesc('popularity')->take(5);
        

        return view("artists.detail",[
            'person'=>$person,
            'socialAccounts'=>$socialAccounts,
            'knownFor'=>$kownFor,
            'cast'=>$credits['cast']
        ]);

    }
}
