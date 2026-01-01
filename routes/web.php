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

// Business Cards routes
Route::get('/business-cards', function () {
    return view('business-cards');
});

Route::get('/business-cards/classic', function () {
    return view('book-configure', ['productType' => 'classic', 'productTitle' => 'Classic Business Cards']);
});
Route::get('/business-cards/square', function () {
    return view('book-configure', ['productType' => 'square', 'productTitle' => 'Square Business Cards']);
});
Route::get('/business-cards/rounded-corners', function () {
    return view('book-configure', ['productType' => 'rounded-corners', 'productTitle' => 'Rounded Corner Business Cards']);
});
Route::get('/business-cards/matte', function () {
    return view('book-configure', ['productType' => 'matte', 'productTitle' => 'Matte Business Cards']);
});
Route::get('/business-cards/glossy', function () {
    return view('book-configure', ['productType' => 'glossy', 'productTitle' => 'Glossy Business Cards']);
});
Route::get('/business-cards/premium', function () {
    return view('book-configure', ['productType' => 'premium', 'productTitle' => 'Premium Business Cards']);
});

// Stickers routes
Route::get('/stickers', function () {
    return view('stickers');
});

Route::get('/stickers/die-cut', function () {
    return view('book-configure', ['productType' => 'die-cut', 'productTitle' => 'Die Cut Stickers']);
});
Route::get('/stickers/kiss-cut', function () {
    return view('book-configure', ['productType' => 'kiss-cut', 'productTitle' => 'Kiss Cut Stickers']);
});
Route::get('/stickers/vinyl', function () {
    return view('book-configure', ['productType' => 'vinyl', 'productTitle' => 'Vinyl Stickers']);
});
Route::get('/stickers/clear', function () {
    return view('book-configure', ['productType' => 'clear', 'productTitle' => 'Clear Stickers']);
});
Route::get('/stickers/holographic', function () {
    return view('book-configure', ['productType' => 'holographic', 'productTitle' => 'Holographic Stickers']);
});
Route::get('/stickers/bumper', function () {
    return view('book-configure', ['productType' => 'bumper', 'productTitle' => 'Bumper Stickers']);
});

// Postcards and Invitations routes
Route::get('/postcards-invitations', function () {
    return view('postcards-invitations');
});

Route::get('/postcards-invitations/postcards', function () {
    return view('book-configure', ['productType' => 'postcards', 'productTitle' => 'Postcards']);
});
Route::get('/postcards-invitations/wedding-invitations', function () {
    return view('book-configure', ['productType' => 'wedding-invitations', 'productTitle' => 'Wedding Invitations']);
});
Route::get('/postcards-invitations/birthday-invitations', function () {
    return view('book-configure', ['productType' => 'birthday-invitations', 'productTitle' => 'Birthday Invitations']);
});
Route::get('/postcards-invitations/greeting-cards', function () {
    return view('book-configure', ['productType' => 'greeting-cards', 'productTitle' => 'Greeting Cards']);
});
Route::get('/postcards-invitations/thank-you-cards', function () {
    return view('book-configure', ['productType' => 'thank-you-cards', 'productTitle' => 'Thank You Cards']);
});
Route::get('/postcards-invitations/announcements', function () {
    return view('book-configure', ['productType' => 'announcements', 'productTitle' => 'Announcements']);
});

// Booklets routes
Route::get('/booklets', function () {
    return view('booklets');
});

Route::get('/booklets/saddle-stitch', function () {
    return view('book-configure', ['productType' => 'saddle-stitch', 'productTitle' => 'Saddle Stitch Booklets']);
});
Route::get('/booklets/perfect-bound', function () {
    return view('book-configure', ['productType' => 'perfect-bound', 'productTitle' => 'Perfect Bound Booklets']);
});
Route::get('/booklets/spiral', function () {
    return view('book-configure', ['productType' => 'spiral', 'productTitle' => 'Spiral Bound Booklets']);
});
Route::get('/booklets/wire-binding', function () {
    return view('book-configure', ['productType' => 'wire-binding', 'productTitle' => 'Wire Binding Booklets']);
});
Route::get('/booklets/comb-binding', function () {
    return view('book-configure', ['productType' => 'comb-binding', 'productTitle' => 'Comb Binding Booklets']);
});
Route::get('/booklets/coil-binding', function () {
    return view('book-configure', ['productType' => 'coil-binding', 'productTitle' => 'Coil Binding Booklets']);
});

// Catalogs routes
Route::get('/catalogs', function () {
    return view('catalogs');
});

Route::get('/catalogs/product-catalogs', function () {
    return view('book-configure', ['productType' => 'product-catalogs', 'productTitle' => 'Product Catalogs']);
});
Route::get('/catalogs/service-catalogs', function () {
    return view('book-configure', ['productType' => 'service-catalogs', 'productTitle' => 'Service Catalogs']);
});
Route::get('/catalogs/fashion-catalogs', function () {
    return view('book-configure', ['productType' => 'fashion-catalogs', 'productTitle' => 'Fashion Catalogs']);
});
Route::get('/catalogs/trade-show', function () {
    return view('book-configure', ['productType' => 'trade-show', 'productTitle' => 'Trade Show Catalogs']);
});
Route::get('/catalogs/digital-catalogs', function () {
    return view('book-configure', ['productType' => 'digital-catalogs', 'productTitle' => 'Digital Catalogs']);
});
Route::get('/catalogs/luxury-catalogs', function () {
    return view('book-configure', ['productType' => 'luxury-catalogs', 'productTitle' => 'Luxury Catalogs']);
});

// Magazines routes
Route::get('/magazines', function () {
    return view('magazines');
});

Route::get('/magazines/standard-magazines', function () {
    return view('book-configure', ['productType' => 'standard-magazines', 'productTitle' => 'Standard Magazines']);
});
Route::get('/magazines/digital-magazines', function () {
    return view('book-configure', ['productType' => 'digital-magazines', 'productTitle' => 'Digital Magazines']);
});
Route::get('/magazines/lifestyle-magazines', function () {
    return view('book-configure', ['productType' => 'lifestyle-magazines', 'productTitle' => 'Lifestyle Magazines']);
});
Route::get('/magazines/business-magazines', function () {
    return view('book-configure', ['productType' => 'business-magazines', 'productTitle' => 'Business Magazines']);
});
Route::get('/magazines/custom-magazines', function () {
    return view('book-configure', ['productType' => 'custom-magazines', 'productTitle' => 'Custom Magazines']);
});
Route::get('/magazines/special-editions', function () {
    return view('book-configure', ['productType' => 'special-editions', 'productTitle' => 'Special Edition Magazines']);
});

// Banners routes
Route::get('/banners', function () {
    return view('banners');
});

Route::get('/banners/roll-up-banners', function () {
    return view('book-configure', ['productType' => 'roll-up-banners', 'productTitle' => 'Roll Up Banners']);
});
Route::get('/banners/fabric-banners', function () {
    return view('book-configure', ['productType' => 'fabric-banners', 'productTitle' => 'Fabric Banners']);
});
Route::get('/banners/vinyl-banners', function () {
    return view('book-configure', ['productType' => 'vinyl-banners', 'productTitle' => 'Vinyl Banners']);
});
Route::get('/banners/mesh-banners', function () {
    return view('book-configure', ['productType' => 'mesh-banners', 'productTitle' => 'Mesh Banners']);
});
Route::get('/banners/pop-up-banners', function () {
    return view('book-configure', ['productType' => 'pop-up-banners', 'productTitle' => 'Pop Up Banners']);
});
Route::get('/banners/hanging-banners', function () {
    return view('book-configure', ['productType' => 'hanging-banners', 'productTitle' => 'Hanging Banners']);
});
