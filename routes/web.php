<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/books', function () {
    return view('books');
});

// Individual book product routes
Route::get('/books/paperback', function () {
    return view('book-configure', ['productType' => 'paperback', 'productTitle' => 'Paperback book']);
});
Route::get('/books/hardback', function () {
    return view('book-configure', ['productType' => 'hardback', 'productTitle' => 'Hardback book']);
});
Route::get('/books/special-finish-hardback', function () {
    return view('book-configure', ['productType' => 'special-finish-hardback', 'productTitle' => 'Special Finish Hardback']);
});
Route::get('/books/comics', function () {
    return view('book-configure', ['productType' => 'comics', 'productTitle' => 'Comics']);
});
Route::get('/books/self-published', function () {
    return view('book-configure', ['productType' => 'self-published', 'productTitle' => 'Self-published book']);
});
Route::get('/books/recipe-book', function () {
    return view('book-configure', ['productType' => 'recipe-book', 'productTitle' => 'Recipe book']);
});
Route::get('/books/cookery-book', function () {
    return view('book-configure', ['productType' => 'cookery-book', 'productTitle' => 'Cookery Book']);
});
Route::get('/books/pocket-sized', function () {
    return view('book-configure', ['productType' => 'pocket-sized', 'productTitle' => 'Pocket-sized book']);
});
Route::get('/books/lookbook', function () {
    return view('book-configure', ['productType' => 'lookbook', 'productTitle' => 'Lookbook']);
});
Route::get('/books/manga', function () {
    return view('book-configure', ['productType' => 'manga', 'productTitle' => 'Manga']);
});
