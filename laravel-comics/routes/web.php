<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/comics', function () {

    //ho passato l'array in config,db.php
    $comics = config('db.comics');

    return view('comics', ['comic' => $comics]);
})->name('comics');



Route::get('/blog', function () {
    return view('blog');
})->name('blog');




//prende il singola elemento
Route::get('/comics/{id}', function ($id) {


    abort_unless(
        $id >= 0 && $id < count(config('db.comics')), 404, 'Not Found');




    $comic = config('db.comics')[$id];

    return view('comic', compact('comic'));
})->name('comic');
