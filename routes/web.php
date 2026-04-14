<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    return view('home', compact('comics'));
})->name("home");

Route::get('/comics/{id}', function ($id) {

    $comics = config('comics');
    if (!isset($comics[$id])) {
        abort(404);
    }
    $comic = $comics[$id];



    return view('comics', compact('comic'));
})->name("comics");

Route::get('/shop', function () {
    return view('shop');
})->name("shop");


Route::get('/about', function () {
    return view('about');
})->name("about");
