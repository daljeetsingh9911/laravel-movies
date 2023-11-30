<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\TvController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// movies routes
Route::get('/',[MoviesController::class,'index'])->name('movies.index');
Route::get('/details/{id}',[MoviesController::class,'details'])->name('movies.details');

// people routes


Route::get('/people/{page?}',[PeopleController::class,'index'])->name('people.index');

// People deatails view
Route::get('/artist/details/{id}',[PeopleController::class,'details'])->name('people.details');


//Tv routes

// movies routes
Route::get('/tv',[TvController::class,'index'])->name('tv.index');
Route::get('/tv/details/{id}',[TvController::class,'details'])->name('tv.details');



//clear cache
Route::get('/cache/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
})->name('admin-cache-clear');