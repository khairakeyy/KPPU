<?php

use Illuminate\Support\Facades\Route;

// Ganti route bawaan dengan ini:
Route::get('/home', function () {return view('home');});
Route::get('/berita', function () {return view('berita');});

