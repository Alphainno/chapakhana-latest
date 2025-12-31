<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/books', function () {
    return view('books');
});
Route::get('/book-configure', function () {
    return view('books');
});
