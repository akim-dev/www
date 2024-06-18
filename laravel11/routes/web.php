<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [ 'nama'=> 'Djayom']);
});


Route::get('/blog', function () {
    return view('blog',[ 'judul'=>'lorejasdhfjhfjsdhfjsdhf']);
});


Route::get('/contact', function () {
    return view('contact');
});