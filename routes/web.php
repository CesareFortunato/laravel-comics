<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/comics', function () {
    return view('comics');
})->name("comics");


Route::get('/about', function () {
    return view('about');
})->name("about");
