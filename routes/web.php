<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    return view('home', compact('comics'));
})->name("home");

Route::get('/comics', function () {
    return view('comics');
})->name("comics");


Route::get('/about', function () {
    return view('about');
})->name("about");
