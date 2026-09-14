<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
}); 

Route::get('/peta-wilayah', function () {
    return view('peta-wilayah');
})->name('peta.wilayah');