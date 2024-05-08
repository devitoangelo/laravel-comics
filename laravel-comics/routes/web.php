<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/comics', function () {

    $comics = config('db.comics');
    //ho passato l'array in config,db.php

    return view('comics', compact('comics'));
})->name('comics');



Route::get('/blog', function () {
    return view('blog');
})->name('blog');




//prende il singola elemento
Route::get('/comics/{id}', function ($id) {


    $comics = config('db.comics')[$id];
    dd($comics);
    return view('comics', compact('comics'));
});



