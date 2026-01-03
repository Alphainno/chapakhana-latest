<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use App\Models\Format;

Route::get('/', function () {
    return view('landing');
});

Route::get('/shop', function () {
    $products = Product::with('category')
        ->where('is_active', true)
        ->where('stock', true)
        ->latest()
        ->get();

    $categories = Category::where('is_active', true)->get();
    $formats = Format::where('is_active', true)->orderBy('name')->get();
    $hero = \App\Models\ShopHeroSection::first();

    return view('shop', compact('products', 'categories', 'formats', 'hero'));
});

Route::get('/books', function () {
    return view('books');
});

// Auth routes
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// Admin routes
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/dashboard/login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.login.post');
Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard/home', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/dashboard/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

    // Category management
    Route::resource('dashboard/categories', App\Http\Controllers\CategoryController::class, [
        'as' => 'admin'
    ]);

    // Product management
    Route::resource('dashboard/products', App\Http\Controllers\ProductController::class, [
        'as' => 'admin'
    ]);

    // Format management
    Route::resource('dashboard/formats', App\Http\Controllers\FormatController::class, [
        'as' => 'admin'
    ]);

    // Order management
    Route::get('dashboard/orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin.orders.index');
    Route::get('dashboard/orders/{order}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('admin.orders.show');
    Route::patch('dashboard/orders/{order}/status', [App\Http\Controllers\Admin\OrderController::class, 'updateStatus'])->name('admin.orders.status');
    Route::delete('dashboard/orders/{order}', [App\Http\Controllers\Admin\OrderController::class, 'destroy'])->name('admin.orders.destroy');

    // Checkout field management
    Route::resource('dashboard/checkout-fields', App\Http\Controllers\Admin\CheckoutFieldController::class, [
        'as' => 'admin'
    ])->only(['index', 'edit', 'update']);

    // Shop hero section management
    Route::get('dashboard/shop-hero', [App\Http\Controllers\Admin\ShopHeroController::class, 'edit'])->name('admin.shop-hero.edit');
    Route::put('dashboard/shop-hero', [App\Http\Controllers\Admin\ShopHeroController::class, 'update'])->name('admin.shop-hero.update');
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

// Stationery Routes
Route::get('/stationery', function () {
    return view('stationery');
});

Route::get('/stationery/letterheads', function () {
    return view('book-configure', ['productType' => 'letterheads', 'productTitle' => 'Letterheads']);
});
Route::get('/stationery/envelopes', function () {
    return view('book-configure', ['productType' => 'envelopes', 'productTitle' => 'Envelopes']);
});
Route::get('/stationery/notepads', function () {
    return view('book-configure', ['productType' => 'notepads', 'productTitle' => 'Notepads']);
});
Route::get('/stationery/folders', function () {
    return view('book-configure', ['productType' => 'folders', 'productTitle' => 'Folders']);
});
Route::get('/stationery/notebooks', function () {
    return view('book-configure', ['productType' => 'notebooks', 'productTitle' => 'Notebooks']);
});
Route::get('/stationery/sticky-notes', function () {
    return view('book-configure', ['productType' => 'sticky-notes', 'productTitle' => 'Sticky Notes']);
});

// Cart Routes
Route::prefix('cart')->name('cart.')->middleware('auth')->group(function () {
    Route::get('/', 'App\Http\Controllers\CartController@index')->name('index');
    Route::post('/add', 'App\Http\Controllers\CartController@add')->name('add');
    Route::delete('/remove', 'App\Http\Controllers\CartController@remove')->name('remove');
    Route::post('/update', 'App\Http\Controllers\CartController@update')->name('update');
    Route::post('/clear', 'App\Http\Controllers\CartController@clear')->name('clear');
    Route::get('/count', 'App\Http\Controllers\CartController@getCount')->name('count');
});

// Checkout Routes (requires authentication)
Route::middleware('auth')->group(function () {
    Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index')->name('checkout.index');
    Route::post('/checkout/process', 'App\Http\Controllers\CheckoutController@process')->name('checkout.process');
    Route::get('/checkout/success', 'App\Http\Controllers\CheckoutController@success')->name('checkout.success');
});

