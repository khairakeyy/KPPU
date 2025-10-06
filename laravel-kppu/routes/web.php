<?php

use Illuminate\Support\Facades\Route;

// Ganti route bawaan dengan ini:
Route::get('/', function () {
    return view('home'); 
});
Route::get('/', function () {
    return view('berita');
});
