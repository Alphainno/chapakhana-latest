<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/books', function () {
    return view('category', [
        'categoryTitle' => 'বই',
        'categoryDescription' => 'পেপারব্যাক থেকে হার্ডব্যাক - সব ধরনের বই প্রিন্টিং সেবা',
        'heroSlides' => [
            [
                'title' => 'বই প্রিন্টিং',
                'description' => 'আপনার গল্প বলুন আমাদের পেশাদার বই প্রিন্টিং সেবার মাধ্যমে। পেপারব্যাক, হার্ডব্যাক এবং আরও অনেক অপশন।',
                'image' => 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=800&h=600&fit=crop'
            ],
            [
                'title' => 'সেল্ফ-পাবলিশিং',
                'description' => 'নিজের বই নিজেই প্রকাশ করুন। সহজ প্রক্রিয়া, সাশ্রয়ী মূল্য এবং পেশাদার মান।',
                'image' => 'https://images.unsplash.com/photo-1512820790803-83ca734da794?w=800&h=600&fit=crop'
            ]
        ],
        'headline' => 'পেশাদার বই প্রিন্টিং সেবা',
        'shortDescription' => 'লেখক থেকে পাঠক - আপনার সৃজনশীলতাকে বাস্তবে রূপান্তরিত করুন। উচ্চ মানের কাগজ, প্রিমিয়াম বাইন্ডিং এবং দ্রুত ডেলিভারি।',
        'gridTitle' => 'বইয়ের ধরন নির্বাচন করুন',
        'gridSubtitle' => 'আপনার প্রয়োজন অনুযায়ী সেরা অপশন',
        'products' => [
            ['title' => 'পেপারব্যাক বই', 'url' => '/books/paperback', 'img' => 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=300&h=300&fit=crop', 'price' => '৩০০', 'badge' => 'জনপ্রিয়'],
            ['title' => 'হার্ডব্যাক বই', 'url' => '/books/hardback', 'img' => 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=300&h=300&fit=crop', 'price' => '৮০০'],
            ['title' => 'স্পেশাল ফিনিশ হার্ডব্যাক', 'url' => '/books/special-finish-hardback', 'img' => 'https://images.unsplash.com/photo-1512820790803-83ca734da794?w=300&h=300&fit=crop', 'price' => '১২০০'],
            ['title' => 'কমিকস', 'url' => '/books/comics', 'img' => 'https://images.unsplash.com/photo-1612036782180-6f0b6cd846fe?w=300&h=300&fit=crop', 'price' => '২৫০'],
            ['title' => 'সেল্ফ-পাবলিশড বই', 'url' => '/books/self-published', 'img' => 'https://images.unsplash.com/photo-1519682337058-a94d519337bc?w=300&h=300&fit=crop', 'price' => '৫০০', 'badge' => 'নতুন'],
            ['title' => 'রেসিপি বই', 'url' => '/books/recipe-book', 'img' => 'https://images.unsplash.com/photo-1495195134817-aeb325a55b65?w=300&h=300&fit=crop', 'price' => '৬০০'],
            ['title' => 'কুকারি বই', 'url' => '/books/cookery-book', 'img' => 'https://images.unsplash.com/photo-1466637574441-749b8f19452f?w=300&h=300&fit=crop', 'price' => '৬৫০'],
            ['title' => 'পকেট সাইজ বই', 'url' => '/books/pocket-sized', 'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop', 'price' => '২০০'],
            ['title' => 'লুকবুক', 'url' => '/books/lookbook', 'img' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?w=300&h=300&fit=crop', 'price' => '৯০০'],
            ['title' => 'মাঙ্গা', 'url' => '/books/manga', 'img' => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=300&h=300&fit=crop', 'price' => '৩৫০'],
        ],
        'offerTitle' => '📚 বই প্রিন্টিং এ মেগা অফার 📚',
        'offerText' => '৫০+ বই অর্ডারে পাচ্ছেন ২৫% ছাড়!',
        'offerDetails' => 'বাল্ক অর্ডারে বিশেষ ছাড়। লেখক এবং প্রকাশকদের জন্য বিশেষ প্যাকেজ।'
    ]);
});

// Auth routes
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

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
    return view('category', [
        'categoryTitle' => 'বিজনেস কার্ড',
        'categoryDescription' => 'পেশাদার বিজনেস কার্ড - আপনার ব্যবসার প্রথম ছাপ',
        'heroSlides' => [
            [
                'title' => 'বিজনেস কার্ড প্রিন্টিং',
                'description' => 'আপনার ব্যবসার জন্য পেশাদার এবং আকর্ষণীয় বিজনেস কার্ড। বিভিন্ন সাইজ, ডিজাইন এবং ফিনিশিং অপশন।',
                'image' => 'https://images.unsplash.com/photo-1589939705384-5185137a7f0f?w=800&h=600&fit=crop'
            ],
            [
                'title' => 'প্রিমিয়াম কার্ড',
                'description' => 'বিশেষ কাগজ এবং ফিনিশিং সহ প্রিমিয়াম বিজনেস কার্ড। আপনার ব্র্যান্ডকে আলাদা করুন।',
                'image' => 'https://images.unsplash.com/photo-1553729459-efe14ef6055d?w=800&h=600&fit=crop'
            ]
        ],
        'headline' => 'পেশাদার বিজনেস কার্ড প্রিন্টিং',
        'shortDescription' => 'ক্লাসিক থেকে প্রিমিয়াম - সব ধরনের বিজনেস কার্ড প্রিন্টিং সেবা। উচ্চ মানের কাগজ, আকর্ষণীয় ডিজাইন এবং দ্রুত ডেলিভারি।',
        'gridTitle' => 'কার্ডের ধরন নির্বাচন করুন',
        'gridSubtitle' => 'আপনার পছন্দের স্টাইল এবং ফিনিশিং',
        'products' => [
            ['title' => 'ক্লাসিক বিজনেস কার্ড', 'url' => '/business-cards/classic', 'img' => 'https://images.unsplash.com/photo-1589939705384-5185137a7f0f?w=300&h=300&fit=crop', 'price' => '২০০', 'badge' => 'জনপ্রিয়'],
            ['title' => 'স্কয়ার কার্ড', 'url' => '/business-cards/square', 'img' => 'https://images.unsplash.com/photo-1586075010923-2dd4570fb338?w=300&h=300&fit=crop', 'price' => '২৫০'],
            ['title' => 'রাউন্ডেড কর্নার', 'url' => '/business-cards/rounded-corners', 'img' => 'https://images.unsplash.com/photo-1553729459-efe14ef6055d?w=300&h=300&fit=crop', 'price' => '২৮০'],
            ['title' => 'ম্যাট কার্ড', 'url' => '/business-cards/matte', 'img' => 'https://images.unsplash.com/photo-1590650153855-d9e808231d41?w=300&h=300&fit=crop', 'price' => '৩০০'],
            ['title' => 'গ্লসি কার্ড', 'url' => '/business-cards/glossy', 'img' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=300&h=300&fit=crop', 'price' => '৩২০'],
            ['title' => 'প্রিমিয়াম কার্ড', 'url' => '/business-cards/premium', 'img' => 'https://images.unsplash.com/photo-1563906267088-b029e7101114?w=300&h=300&fit=crop', 'price' => '৫০০', 'badge' => 'নতুন'],
        ],
        'offerTitle' => '💼 বিজনেস কার্ড অফার 💼',
        'offerText' => '৫০০+ কার্ড অর্ডারে পাচ্ছেন ৪০% ছাড়!',
        'offerDetails' => 'বাল্ক অর্ডারে বিশেষ ছাড়। আপনার পুরো টিমের জন্য কার্ড প্রিন্ট করুন সাশ্রয়ী মূল্যে।'
    ]);
});

Route::get('/business-cards/classic', function () {
    return view('business-card-configure', ['productType' => 'classic', 'productTitle' => 'Classic Business Cards']);
});
Route::get('/business-cards/square', function () {
    return view('business-card-configure', ['productType' => 'square', 'productTitle' => 'Square Business Cards']);
});
Route::get('/business-cards/rounded-corners', function () {
    return view('business-card-configure', ['productType' => 'rounded-corners', 'productTitle' => 'Rounded Corner Business Cards']);
});
Route::get('/business-cards/matte', function () {
    return view('business-card-configure', ['productType' => 'matte', 'productTitle' => 'Matte Business Cards']);
});
Route::get('/business-cards/glossy', function () {
    return view('business-card-configure', ['productType' => 'glossy', 'productTitle' => 'Glossy Business Cards']);
});
Route::get('/business-cards/premium', function () {
    return view('business-card-configure', ['productType' => 'premium', 'productTitle' => 'Premium Business Cards']);
});

// Stickers routes
Route::get('/stickers', function () {
    return view('category', [
        'categoryTitle' => 'স্টিকার',
        'categoryDescription' => 'কাস্টম স্টিকার এবং লেবেল প্রিন্টিং',
        'heroSlides' => [
            [
                'title' => 'স্টিকার প্রিন্টিং',
                'description' => 'ব্র্যান্ডিং, প্যাকেজিং এবং প্রচারের জন্য কাস্টম স্টিকার। ডাই-কাট, ভিনাইল, হলোগ্রাফিক এবং আরো অনেক অপশন।',
                'image' => 'https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=800&h=600&fit=crop'
            ],
            [
                'title' => 'যেকোনো আকার',
                'description' => 'গোল, বর্গাকার বা কাস্টম আকার - আপনার পছন্দ অনুযায়ী যেকোনো ডিজাইন।',
                'image' => 'https://images.unsplash.com/photo-1595433707802-6b2626ef1c91?w=800&h=600&fit=crop'
            ]
        ],
        'headline' => 'কাস্টম স্টিকার প্রিন্টিং',
        'shortDescription' => 'ব্যবসায়িক লেবেল থেকে প্রচারমূলক স্টিকার - সব ধরনের স্টিকার প্রিন্টিং সেবা। উচ্চ মানের মুদ্রণ এবং টেকসই উপাদান।',
        'gridTitle' => 'স্টিকারের ধরন নির্বাচন করুন',
        'gridSubtitle' => 'আপনার প্রয়োজন অনুযায়ী স্টাইল',
        'products' => [
            ['title' => 'ডাই-কাট স্টিকার', 'url' => '/stickers/die-cut', 'img' => 'https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=300&h=300&fit=crop', 'price' => '৩৫০', 'badge' => 'জনপ্রিয়'],
            ['title' => 'কিস-কাট স্টিকার', 'url' => '/stickers/kiss-cut', 'img' => 'https://images.unsplash.com/photo-1595433707802-6b2626ef1c91?w=300&h=300&fit=crop', 'price' => '৩০০'],
            ['title' => 'ভিনাইল স্টিকার', 'url' => '/stickers/vinyl', 'img' => 'https://images.unsplash.com/photo-1583225214464-9296029427aa?w=300&h=300&fit=crop', 'price' => '৫০০'],
            ['title' => 'ক্লিয়ার স্টিকার', 'url' => '/stickers/clear', 'img' => 'https://images.unsplash.com/photo-1594007652996-c85c3b0c67b1?w=300&h=300&fit=crop', 'price' => '৫৫০'],
            ['title' => 'হলোগ্রাফিক স্টিকার', 'url' => '/stickers/holographic', 'img' => 'https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?w=300&h=300&fit=crop', 'price' => '৬০০', 'badge' => 'নতুন'],
            ['title' => 'বাম্পার স্টিকার', 'url' => '/stickers/bumper', 'img' => 'https://images.unsplash.com/photo-1614963366795-38f374e51cb6?w=300&h=300&fit=crop', 'price' => '৭৫০'],
        ],
        'offerTitle' => '✨ স্টিকার প্রিন্টিং অফার ✨',
        'offerText' => '১০০০+ স্টিকার অর্ডারে ৪৫% ছাড়!',
        'offerDetails' => 'বাল্ক অর্ডারে বিশেষ ছাড়। ব্র্যান্ডিং এবং প্যাকেজিং এর জন্য বিশেষ প্যাকেজ।'
    ]);
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
    return view('category', [
        'categoryTitle' => 'পোস্টকার্ড এবং নিমন্ত্রণপত্র',
        'categoryDescription' => 'বিয়ে, জন্মদিন এবং বিশেষ অনুষ্ঠানের জন্য নিমন্ত্রণপত্র',
        'heroSlides' => [
            [
                'title' => 'নিমন্ত্রণপত্র প্রিন্টিং',
                'description' => 'আপনার বিশেষ দিনগুলি আরো সুন্দর করে তুলুন। বিয়ে, জন্মদিন এবং সব ধরনের অনুষ্ঠানের জন্য আকর্ষণীয় নিমন্ত্রণপত্র।',
                'image' => 'https://images.unsplash.com/photo-1511285560929-80b456fea0bc?w=800&h=600&fit=crop'
            ],
            [
                'title' => 'কাস্টম ডিজাইন',
                'description' => 'আপনার স্বপ্নের নিমন্ত্রণপত্র ডিজাইন করুন। প্রিমিয়াম কাগজ এবং বিশেষ ফিনিশিং।',
                'image' => 'https://images.unsplash.com/photo-1530103862676-de8c9debad1d?w=800&h=600&fit=crop'
            ]
        ],
        'headline' => 'বিশেষ মুহূর্তের জন্য নিমন্ত্রণপত্র',
        'shortDescription' => 'বিয়ে, জন্মদিন, পোস্টকার্ড এবং ধন্যবাদ কার্ড - সব ধরনের নিমন্ত্রণপত্র এবং কার্ড প্রিন্টিং সেবা। উচ্চ মানের প্রিন্ট এবং প্রিমিয়াম কাগজ।',
        'gridTitle' => 'কার্ডের ধরন নির্বাচন করুন',
        'gridSubtitle' => 'আপনার অনুষ্ঠানের জন্য উপযুক্ত কার্ড',
        'products' => [
            ['title' => 'পোস্টকার্ড', 'url' => '/postcards-invitations/postcards', 'img' => 'https://images.unsplash.com/photo-1584464491033-06628f3a6b7b?w=300&h=300&fit=crop', 'price' => '৩০০', 'badge' => 'জনপ্রিয়'],
            ['title' => 'বিয়ের নিমন্ত্রণপত্র', 'url' => '/postcards-invitations/wedding-invitations', 'img' => 'https://images.unsplash.com/photo-1511285560929-80b456fea0bc?w=300&h=300&fit=crop', 'price' => '১০০০', 'badge' => 'প্রিমিয়াম'],
            ['title' => 'জন্মদিনের নিমন্ত্রণপত্র', 'url' => '/postcards-invitations/birthday-invitations', 'img' => 'https://images.unsplash.com/photo-1530103862676-de8c9debad1d?w=300&h=300&fit=crop', 'price' => '৬০০'],
            ['title' => 'গ্রিটিং কার্ড', 'url' => '/postcards-invitations/greeting-cards', 'img' => 'https://images.unsplash.com/photo-1513885535751-8b9238bd345a?w=300&h=300&fit=crop', 'price' => '৫০০'],
            ['title' => 'ধন্যবাদ কার্ড', 'url' => '/postcards-invitations/thank-you-cards', 'img' => 'https://images.unsplash.com/photo-1486369358152-d2fdebb5e92a?w=300&h=300&fit=crop', 'price' => '৪৫০'],
            ['title' => 'ঘোষণা কার্ড', 'url' => '/postcards-invitations/announcements', 'img' => 'https://images.unsplash.com/photo-1516979187457-637abb4f9353?w=300&h=300&fit=crop', 'price' => '৫৫০'],
        ],
        'offerTitle' => '💌 নিমন্ত্রণপত্র অফার 💌',
        'offerText' => '১০০+ কার্ড অর্ডারে ৩০% ছাড়!',
        'offerDetails' => 'বিয়ে এবং বড় অনুষ্ঠানের জন্য বিশেষ ছাড়। এখনই অর্ডার করুন এবং খরচ বাঁচান।'
    ]);
});

Route::get('/postcards-invitations/postcards', function () {
    return view('invitation-stationery-configure', ['productType' => 'postcards', 'productTitle' => 'Postcards']);
});
Route::get('/postcards-invitations/wedding-invitations', function () {
    return view('invitation-stationery-configure', ['productType' => 'wedding-invitations', 'productTitle' => 'Wedding Invitations']);
});
Route::get('/postcards-invitations/birthday-invitations', function () {
    return view('invitation-stationery-configure', ['productType' => 'birthday-invitations', 'productTitle' => 'Birthday Invitations']);
});
Route::get('/postcards-invitations/greeting-cards', function () {
    return view('invitation-stationery-configure', ['productType' => 'greeting-cards', 'productTitle' => 'Greeting Cards']);
});
Route::get('/postcards-invitations/thank-you-cards', function () {
    return view('invitation-stationery-configure', ['productType' => 'thank-you-cards', 'productTitle' => 'Thank You Cards']);
});
Route::get('/postcards-invitations/announcements', function () {
    return view('invitation-stationery-configure', ['productType' => 'announcements', 'productTitle' => 'Announcements']);
});

// Booklets routes
Route::get('/booklets', function () {
    return view('category', [
        'categoryTitle' => 'বুকলেট',
        'categoryDescription' => 'ব্রোশার, ম্যাগাজিন এবং ট্রেনিং ম্যাটেরিয়ালের জন্য বুকলেট',
        'heroSlides' => [
            [
                'title' => 'বুকলেট প্রিন্টিং',
                'description' => 'পেশাদার বুকলেট প্রিন্টিং সেবা। স্যাডল স্টিচ, পারফেক্ট বাউন্ড, স্পাইরাল এবং আরো অনেক বাইন্ডিং অপশন।',
                'image' => 'https://images.unsplash.com/photo-1553729459-efe14ef6055d?w=800&h=600&fit=crop'
            ],
            [
                'title' => 'বিভিন্ন বাইন্ডিং',
                'description' => 'আপনার প্রয়োজন অনুযায়ী বিভিন্ন ধরনের বাইন্ডিং। মানসম্পন্ন কাগজ এবং প্রিন্ট।',
                'image' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=800&h=600&fit=crop'
            ]
        ],
        'headline' => 'পেশাদার বুকলেট প্রিন্টিং',
        'shortDescription' => 'কর্পোরেট ব্রোশার থেকে ট্রেনিং ম্যানুয়াল - সব ধরনের বুকলেট প্রিন্টিং সেবা। বিভিন্ন বাইন্ডিং অপশন এবং উচ্চ মানের প্রিন্ট।',
        'gridTitle' => 'বাইন্ডিং এর ধরন নির্বাচন করুন',
        'gridSubtitle' => 'আপনার প্রজেক্টের জন্য উপযুক্ত বাইন্ডিং',
        'products' => [
            ['title' => 'স্যাডল স্টিচ', 'url' => '/booklets/saddle-stitch', 'img' => 'https://images.unsplash.com/photo-1553729459-efe14ef6055d?w=300&h=300&fit=crop', 'price' => '৫০০', 'badge' => 'জনপ্রিয়'],
            ['title' => 'পারফেক্ট বাউন্ড', 'url' => '/booklets/perfect-bound', 'img' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=300&h=300&fit=crop', 'price' => '৮০০'],
            ['title' => 'স্পাইরাল বাইন্ডিং', 'url' => '/booklets/spiral', 'img' => 'https://images.unsplash.com/photo-1519682337058-a94d519337bc?w=300&h=300&fit=crop', 'price' => '৭৫০'],
            ['title' => 'ওয়ায়ার বাইন্ডিং', 'url' => '/booklets/wire-binding', 'img' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?w=300&h=300&fit=crop', 'price' => '৮০০'],
            ['title' => 'কোম্ব বাইন্ডিং', 'url' => '/booklets/comb-binding', 'img' => 'https://images.unsplash.com/photo-1516979187457-637abb4f9353?w=300&h=300&fit=crop', 'price' => '৭০০'],
            ['title' => 'কয়েল বাইন্ডিং', 'url' => '/booklets/coil-binding', 'img' => 'https://images.unsplash.com/photo-1512820790803-83ca734da794?w=300&h=300&fit=crop', 'price' => '৮৫০'],
        ],
        'offerTitle' => '📖 বুকলেট প্রিন্টিং অফার 📖',
        'offerText' => '৫০+ বুকলেট অর্ডারে ২৫% ছাড়!',
        'offerDetails' => 'কর্পোরেট প্রজেক্টের জন্য বিশেষ ছাড়। বাল্ক অর্ডারে আরো বেশি সুবিধা।'
    ]);
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
    return view('category', [
        'categoryTitle' => 'ক্যাটালগ',
        'categoryDescription' => 'পণ্য এবং সেবার জন্য পেশাদার ক্যাটালগ প্রিন্টিং',
        'heroSlides' => [
            [
                'title' => 'ক্যাটালগ প্রিন্টিং',
                'description' => 'আপনার ব্যবসার জন্য আকর্ষণীয় এবং তথ্যবহুল ক্যাটালগ। প্রিমিয়াম কাগজ এবং উজ্জ্বল রঙে মুদ্রিত।',
                'image' => 'https://images.unsplash.com/photo-1568667256549-094345857637?w=800&h=600&fit=crop'
            ],
            [
                'title' => 'কাস্টম লেআউট',
                'description' => 'আপনার ব্র্যান্ডের সাথে মানানসই কাস্টম ডিজাইন এবং লেআউট।',
                'image' => 'https://images.unsplash.com/photo-1524502397800-2eeaad7c3fe5?w=800&h=600&fit=crop'
            ]
        ],
        'headline' => 'আকর্ষণীয় ক্যাটালগ ডিজাইন এবং প্রিন্ট',
        'shortDescription' => 'ফ্যাশন, পণ্য বা সেবা - যেকোনো ধরনের ক্যাটালগ প্রিন্টিং সেবা পাবেন এক জায়গায়। উচ্চ মানের প্রিন্ট এবং দ্রুত ডেলিভারি।',
        'gridTitle' => 'ক্যাটালগের ধরন নির্বাচন করুন',
        'gridSubtitle' => 'আপনার ব্যবসার জন্য সঠিক ক্যাটালগ',
        'products' => [
            ['title' => 'পণ্য ক্যাটালগ', 'url' => '/catalogs/product-catalogs', 'img' => 'https://images.unsplash.com/photo-1568667256549-094345857637?w=300&h=300&fit=crop', 'price' => '৬০০', 'badge' => 'জনপ্রিয়'],
            ['title' => 'সেবা ক্যাটালগ', 'url' => '/catalogs/service-catalogs', 'img' => 'https://images.unsplash.com/photo-1524502397800-2eeaad7c3fe5?w=300&h=300&fit=crop', 'price' => '৫৫০'],
            ['title' => 'ফ্যাশন ক্যাটালগ', 'url' => '/catalogs/fashion-catalogs', 'img' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?w=300&h=300&fit=crop', 'price' => '৮০০'],
            ['title' => 'ট্রেড শো ক্যাটালগ', 'url' => '/catalogs/trade-show', 'img' => 'https://images.unsplash.com/photo-1540317580384-e5d43616528e?w=300&h=300&fit=crop', 'price' => '৭০০'],
            ['title' => 'ডিজিটাল ক্যাটালগ', 'url' => '/catalogs/digital-catalogs', 'img' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=300&h=300&fit=crop', 'price' => '৪৫০', 'badge' => 'নতুন'],
            ['title' => 'লাক্সারি ক্যাটালগ', 'url' => '/catalogs/luxury-catalogs', 'img' => 'https://images.unsplash.com/photo-1513094735237-8f2714d57c13?w=300&h=300&fit=crop', 'price' => '১২০০'],
        ],
        'offerTitle' => '🎨 ক্যাটালগ প্রিন্টিং অফার 🎨',
        'offerText' => 'বাল্ক অর্ডারে পাচ্ছেন ৩৫% পর্যন্ত ছাড়!',
        'offerDetails' => '১০০+ ক্যাটালগ অর্ডার করুন এবং বিশেষ ছাড় পান। অফারটি সীমিত সময়ের জন্য।'
    ]);
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
    return view('category', [
        'categoryTitle' => 'ম্যাগাজিন',
        'categoryDescription' => 'পেশাদার ম্যাগাজিন প্রিন্টিং সেবা - উচ্চ মানের কাগজ এবং আকর্ষণীয় ডিজাইন',
        'heroSlides' => [
            [
                'title' => 'ম্যাগাজিন প্রিন্টিং',
                'description' => 'আপনার ব্র্যান্ডের জন্য পেশাদার মানের ম্যাগাজিন। উচ্চ মানের কাগজ, প্রিমিয়াম ফিনিশিং এবং দ্রুত ডেলিভারি।',
                'image' => 'https://images.unsplash.com/photo-1586210579191-33b45e38fa8c?w=800&h=600&fit=crop'
            ],
            [
                'title' => 'কাস্টম ডিজাইন',
                'description' => 'আপনার পছন্দ অনুযায়ী কাস্টম ডিজাইন এবং লেআউট। আমাদের ডিজাইন টিম আপনাকে সাহায্য করতে প্রস্তুত।',
                'image' => 'https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=800&h=600&fit=crop'
            ]
        ],
        'headline' => 'পেশাদার ম্যাগাজিন প্রিন্টিং সেবা',
        'shortDescription' => 'কর্পোরেট প্রকাশনা থেকে লাইফস্টাইল ম্যাগাজিন - সব ধরনের ম্যাগাজিন প্রিন্টিং সেবা পাবেন এক জায়গায়। প্রিমিয়াম কাগজ, আকর্ষণীয় রঙ এবং উন্নত ফিনিশিং এর সাথে।',
        'gridTitle' => 'ম্যাগাজিনের ধরন নির্বাচন করুন',
        'gridSubtitle' => 'আপনার প্রয়োজন অনুযায়ী সেরা অপশন খুঁজে নিন',
        'products' => [
            ['title' => 'স্ট্যান্ডার্ড ম্যাগাজিন', 'url' => '/magazines/standard-magazines', 'img' => 'https://images.unsplash.com/photo-1586210579191-33b45e38fa8c?w=300&h=300&fit=crop', 'price' => '৫০০', 'badge' => 'জনপ্রিয়'],
            ['title' => 'ডিজিটাল ম্যাগাজিন', 'url' => '/magazines/digital-magazines', 'img' => 'https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=300&h=300&fit=crop', 'price' => '৪০০'],
            ['title' => 'লাইফস্টাইল ম্যাগাজিন', 'url' => '/magazines/lifestyle-magazines', 'img' => 'https://images.unsplash.com/photo-1553729459-efe14ef6055d?w=300&h=300&fit=crop', 'price' => '৬০০'],
            ['title' => 'বিজনেস ম্যাগাজিন', 'url' => '/magazines/business-magazines', 'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop', 'price' => '৭০০'],
            ['title' => 'কাস্টম ম্যাগাজিন', 'url' => '/magazines/custom-magazines', 'img' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=300&h=300&fit=crop', 'price' => '৮০০', 'badge' => 'নতুন'],
            ['title' => 'স্পেশাল এডিশন', 'url' => '/magazines/special-editions', 'img' => 'https://images.unsplash.com/photo-1512820790803-83ca734da794?w=300&h=300&fit=crop', 'price' => '৯০০'],
        ],
        'offerTitle' => '🎉 ম্যাগাজিন প্রিন্টিং এ বিশেষ ছাড় 🎉',
        'offerText' => '১০০+ কপি অর্ডারে পাচ্ছেন ৩০% ছাড়!',
        'offerDetails' => 'বাল্ক অর্ডারে বিশেষ ছাড়। এখনই অর্ডার করুন এবং আপনার খরচ সাশ্রয় করুন।'
    ]);
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

// Marketing Material routes
Route::get('/brochures', function () {
    return view('category', [
        'categoryTitle' => 'ব্রোশার এবং মার্কেটিং ম্যাটেরিয়াল',
        'categoryDescription' => 'আকর্ষণীয় ব্রোশার, ফ্লায়ার এবং প্রচারমূলক সামগ্রী',
        'heroSlides' => [
            [
                'title' => 'মার্কেটিং ম্যাটেরিয়াল',
                'description' => 'আপনার ব্যবসা প্রচারের জন্য পেশাদার ব্রোশার, ফ্লায়ার এবং পোস্টার। উচ্চ মানের প্রিন্ট এবং বিভিন্ন ফোল্ডিং অপশন।',
                'image' => 'https://images.unsplash.com/photo-1586864387634-6b447d4cbb86?w=800&h=600&fit=crop'
            ],
            [
                'title' => 'কাস্টম ডিজাইন',
                'description' => 'আপনার ব্র্যান্ডের সাথে মানানসই কাস্টম ডিজাইন। বিভিন্ন সাইজ এবং ফিনিশিং অপশন।',
                'image' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800&h=600&fit=crop'
            ]
        ],
        'headline' => 'পেশাদার মার্কেটিং ম্যাটেরিয়াল',
        'shortDescription' => 'ব্রোশার, ফ্লায়ার, পোস্টার এবং আরো অনেক কিছু। আপনার ব্যবসা প্রচারের জন্য সব ধরনের প্রচারমূলক সামগ্রী এক জায়গায়।',
        'gridTitle' => 'মার্কেটিং ম্যাটেরিয়াল নির্বাচন করুন',
        'gridSubtitle' => 'আপনার প্রচারের জন্য সেরা অপশন',
        'products' => [
            ['title' => 'ফ্লায়ার', 'url' => '/brochures/flyers', 'img' => 'https://images.unsplash.com/photo-1586864387634-6b447d4cbb86?w=300&h=300&fit=crop', 'price' => '১৫০', 'badge' => 'জনপ্রিয়'],
            ['title' => 'ট্রাই-ফোল্ড ব্রোশার', 'url' => '/brochures/tri-fold', 'img' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=300&h=300&fit=crop', 'price' => '৩৫০'],
            ['title' => 'বাই-ফোল্ড ব্রোশার', 'url' => '/brochures/bi-fold', 'img' => 'https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?w=300&h=300&fit=crop', 'price' => '৩০০'],
            ['title' => 'পোস্টার', 'url' => '/brochures/posters', 'img' => 'https://images.unsplash.com/photo-1557825835-70d97c4aa567?w=300&h=300&fit=crop', 'price' => '৩০০'],
            ['title' => 'র্যাক কার্ড', 'url' => '/brochures/rack-cards', 'img' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=300&h=300&fit=crop', 'price' => '২৫০'],
            ['title' => 'ডোর হ্যাঙার', 'url' => '/brochures/door-hangers', 'img' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=300&h=300&fit=crop', 'price' => '৩৫০'],
            ['title' => 'লিফলেট', 'url' => '/brochures/leaflets', 'img' => 'https://images.unsplash.com/photo-1553729459-efe14ef6055d?w=300&h=300&fit=crop', 'price' => '২০০'],
            ['title' => 'মেনু', 'url' => '/brochures/menus', 'img' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=300&h=300&fit=crop', 'price' => '৫০০'],
            ['title' => 'প্রেজেন্টেশন ফোল্ডার', 'url' => '/brochures/presentation-folders', 'img' => 'https://images.unsplash.com/photo-1568992687947-868a62a9f521?w=300&h=300&fit=crop', 'price' => '৮০০', 'badge' => 'নতুন'],
            ['title' => 'ইভেন্ট হ্যান্ডআউট', 'url' => '/brochures/event-handouts', 'img' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=300&h=300&fit=crop', 'price' => '৩০০'],
        ],
        'offerTitle' => '📣 মার্কেটিং ম্যাটেরিয়াল অফার 📣',
        'offerText' => 'বাল্ক অর্ডারে ৩০% পর্যন্ত ছাড়!',
        'offerDetails' => '৫০০+ পীস অর্ডার করুন এবং বিশেষ ছাড় পান। মার্কেটিং ক্যাম্পেইনের জন্য বিশেষ প্যাকেজ।'
    ]);
});

Route::prefix('brochures')->group(function () {
    Route::get('/flyers', function () {
        return view('marketing-material-configure', ['productType' => 'flyers', 'productTitle' => 'Flyers']);
    });
    Route::get('/tri-fold', function () {
        return view('marketing-material-configure', ['productType' => 'tri-fold', 'productTitle' => 'Tri-fold Brochures']);
    });
    Route::get('/bi-fold', function () {
        return view('marketing-material-configure', ['productType' => 'bi-fold', 'productTitle' => 'Bi-fold Brochures']);
    });
    Route::get('/posters', function () {
        return view('marketing-material-configure', ['productType' => 'posters', 'productTitle' => 'Posters']);
    });
    Route::get('/rack-cards', function () {
        return view('marketing-material-configure', ['productType' => 'rack-cards', 'productTitle' => 'Rack Cards']);
    });
    Route::get('/door-hangers', function () {
        return view('marketing-material-configure', ['productType' => 'door-hangers', 'productTitle' => 'Door Hangers']);
    });
    Route::get('/leaflets', function () {
        return view('marketing-material-configure', ['productType' => 'leaflets', 'productTitle' => 'Leaflets']);
    });
    Route::get('/menus', function () {
        return view('marketing-material-configure', ['productType' => 'menus', 'productTitle' => 'Menus']);
    });
    Route::get('/presentation-folders', function () {
        return view('marketing-material-configure', ['productType' => 'presentation-folders', 'productTitle' => 'Presentation Folders']);
    });
    Route::get('/event-handouts', function () {
        return view('marketing-material-configure', ['productType' => 'event-handouts', 'productTitle' => 'Event Handouts']);
    });
});

// Banners routes
Route::get('/banners', function () {
    return view('category', [
        'categoryTitle' => 'ব্যানার',
        'categoryDescription' => 'ইভেন্ট এবং প্রচারের জন্য বড় সাইজের ব্যানার',
        'heroSlides' => [
            [
                'title' => 'ব্যানার প্রিন্টিং',
                'description' => 'ইভেন্ট, প্রচার এবং বিজ্ঞাপনের জন্য আকর্ষণীয় ব্যানার। ভিনাইল, ফ্যাব্রিক এবং আরো অনেক অপশন।',
                'image' => 'https://images.unsplash.com/photo-1540317580384-e5d43616528e?w=800&h=600&fit=crop'
            ],
            [
                'title' => 'কাস্টম সাইজ',
                'description' => 'আপনার প্রয়োজন অনুযায়ী যেকোনো সাইজের ব্যানার। উচ্চ মানের প্রিন্ট এবং টেকসই উপাদান।',
                'image' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?w=800&h=600&fit=crop'
            ]
        ],
        'headline' => 'বড় সাইজের ব্যানার প্রিন্টিং',
        'shortDescription' => 'ইভেন্ট, ব্যবসা এবং প্রচারের জন্য পেশাদার মানের ব্যানার। রোল-আপ, ভিনাইল, ফ্যাব্রিক এবং আরো অনেক ধরনের ব্যানার।',
        'gridTitle' => 'ব্যানারের ধরন নির্বাচন করুন',
        'gridSubtitle' => 'আপনার ইভেন্টের জন্য উপযুক্ত ব্যানার',
        'products' => [
            ['title' => 'রোল-আপ ব্যানার', 'url' => '/banners/roll-up-banners', 'img' => 'https://images.unsplash.com/photo-1540317580384-e5d43616528e?w=300&h=300&fit=crop', 'price' => '১৫০০', 'badge' => 'জনপ্রিয়'],
            ['title' => 'ফ্যাব্রিক ব্যানার', 'url' => '/banners/fabric-banners', 'img' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?w=300&h=300&fit=crop', 'price' => '২০০০'],
            ['title' => 'ভিনাইল ব্যানার', 'url' => '/banners/vinyl-banners', 'img' => 'https://images.unsplash.com/photo-1555421689-d68471e189f2?w=300&h=300&fit=crop', 'price' => '১৮০০'],
            ['title' => 'মেশ ব্যানার', 'url' => '/banners/mesh-banners', 'img' => 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=300&h=300&fit=crop', 'price' => '১৭০০'],
            ['title' => 'পপ-আপ ব্যানার', 'url' => '/banners/pop-up-banners', 'img' => 'https://images.unsplash.com/photo-1572021335469-31706a17aaef?w=300&h=300&fit=crop', 'price' => '২৫০০', 'badge' => 'নতুন'],
            ['title' => 'হ্যাঙিং ব্যানার', 'url' => '/banners/hanging-banners', 'img' => 'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=300&h=300&fit=crop', 'price' => '২২০০'],
        ],
        'offerTitle' => '🎉 ব্যানার প্রিন্টিং অফার 🎉',
        'offerText' => 'বড় সাইজের অর্ডারে ২০% ছাড়!',
        'offerDetails' => '১০+ ব্যানার অর্ডার করুন এবং বিশেষ ছাড় পান। ইভেন্ট অর্গানাইজারদের জন্য বিশেষ প্যাকেজ।'
    ]);
});

Route::get('/banners/roll-up-banners', function () {
    return view('banner-configure', ['productType' => 'roll-up-banners', 'productTitle' => 'Roll Up Banners']);
});
Route::get('/banners/fabric-banners', function () {
    return view('banner-configure', ['productType' => 'fabric-banners', 'productTitle' => 'Fabric Banners']);
});
Route::get('/banners/vinyl-banners', function () {
    return view('banner-configure', ['productType' => 'vinyl-banners', 'productTitle' => 'Vinyl Banners']);
});
Route::get('/banners/mesh-banners', function () {
    return view('banner-configure', ['productType' => 'mesh-banners', 'productTitle' => 'Mesh Banners']);
});
Route::get('/banners/pop-up-banners', function () {
    return view('banner-configure', ['productType' => 'pop-up-banners', 'productTitle' => 'Pop Up Banners']);
});
Route::get('/banners/hanging-banners', function () {
    return view('banner-configure', ['productType' => 'hanging-banners', 'productTitle' => 'Hanging Banners']);
});

// Stationery Routes
Route::get('/stationery', function () {
    return view('category', [
        'categoryTitle' => 'স্টেশনারি',
        'categoryDescription' => 'অফিস এবং ব্যবসার জন্য পেশাদার স্টেশনারি',
        'heroSlides' => [
            [
                'title' => 'ব্যবসায়িক স্টেশনারি',
                'description' => 'আপনার অফিসের জন্য পেশাদার মানের লেটারহেড, এনভেলপ, নোটপ্যাড এবং আরো অনেক কিছু।',
                'image' => 'https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?w=800&h=600&fit=crop'
            ],
            [
                'title' => 'কাস্টম প্রিন্ট',
                'description' => 'আপনার ব্র্যান্ডের সাথে মানানসই কাস্টম ডিজাইন। উচ্চ মানের কাগজ এবং প্রিন্ট।',
                'image' => 'https://images.unsplash.com/photo-1565688534245-05d6b5be184a?w=800&h=600&fit=crop'
            ]
        ],
        'headline' => 'পেশাদার স্টেশনারি প্রিন্টিং',
        'shortDescription' => 'অফিস, ব্যবসা এবং ব্যক্তিগত ব্যবহারের জন্য সমস্ত ধরনের স্টেশনারি। লেটারহেড থেকে নোটবুক - সবই এক জায়গায়।',
        'gridTitle' => 'স্টেশনারি আইটেম নির্বাচন করুন',
        'gridSubtitle' => 'আপনার অফিসের জন্য প্রয়োজনীয় সবকিছু',
        'products' => [
            ['title' => 'লেটারহেড', 'url' => '/stationery/letterheads', 'img' => 'https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1?w=300&h=300&fit=crop', 'price' => '৩৫০', 'badge' => 'জনপ্রিয়'],
            ['title' => 'এনভেলপ', 'url' => '/stationery/envelopes', 'img' => 'https://images.unsplash.com/photo-1565688534245-05d6b5be184a?w=300&h=300&fit=crop', 'price' => '২৫০'],
            ['title' => 'নোটপ্যাড', 'url' => '/stationery/notepads', 'img' => 'https://images.unsplash.com/photo-1586075010923-2dd4570fb338?w=300&h=300&fit=crop', 'price' => '৩০০'],
            ['title' => 'ফোল্ডার', 'url' => '/stationery/folders', 'img' => 'https://images.unsplash.com/photo-1568992687947-868a62a9f521?w=300&h=300&fit=crop', 'price' => '৫০০'],
            ['title' => 'নোটবুক', 'url' => '/stationery/notebooks', 'img' => 'https://images.unsplash.com/photo-1589829085413-56de8ae18c73?w=300&h=300&fit=crop', 'price' => '৬৫০', 'badge' => 'নতুন'],
            ['title' => 'স্টিকি নোট', 'url' => '/stationery/sticky-notes', 'img' => 'https://images.unsplash.com/photo-1590650153855-d9e808231d41?w=300&h=300&fit=crop', 'price' => '২০০'],
        ],
        'offerTitle' => '✍️ স্টেশনারি অফার ✍️',
        'offerText' => 'অফিস প্যাকেজে ৩৫% ছাড়!',
        'offerDetails' => 'লেটারহেড, এনভেলপ এবং বিজনেস কার্ড একসাথে অর্ডার করুন এবং বিশেষ ছাড় পান।'
    ]);
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

// Promotional Items routes
Route::get('/promotional-items', function () {
    return view('category', [
        'categoryTitle' => 'প্রমোশনাল আইটেম',
        'categoryDescription' => 'ব্র্যান্ডিং এবং প্রচারের জন্য কাস্টম প্রমোশনাল পণ্য',
        'heroSlides' => [
            [
                'title' => 'প্রমোশনাল পণ্য',
                'description' => 'আপনার ব্র্যান্ড প্রচারের জন্য কাস্টম প্রমোশনাল আইটেম। মগ, টি-শার্ট, পেন, টোট ব্যাগ এবং আরো অনেক কিছু।',
                'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&h=600&fit=crop'
            ],
            [
                'title' => 'কাস্টম ব্র্যান্ডিং',
                'description' => 'আপনার লোগো এবং ডিজাইন দিয়ে কাস্টম প্রডাক্ট। উচ্চ মানের প্রিন্ট এবং টেকসই পণ্য।',
                'image' => 'https://images.unsplash.com/photo-1523381210434-271e8be1f52b?w=800&h=600&fit=crop'
            ]
        ],
        'headline' => 'কাস্টম প্রমোশনাল পণ্য',
        'shortDescription' => 'মগ, টি-শার্ট, পেন থেকে ইউএসবি ড্রাইভ - ব্র্যান্ডিং এর জন্য সমস্ত ধরনের প্রমোশনাল পণ্য। আপনার লোগো এবং ডিজাইন দিয়ে কাস্টমাইজ করুন।',
        'gridTitle' => 'প্রমোশনাল আইটেম নির্বাচন করুন',
        'gridSubtitle' => 'আপনার ব্র্যান্ডিং এর জন্য পারফেক্ট পণ্য',
        'products' => [
            ['title' => 'মগ', 'url' => '/promotional-items/mugs', 'img' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=300&h=300&fit=crop', 'price' => '৩৫০', 'badge' => 'জনপ্রিয়'],
            ['title' => 'টি-শার্ট', 'url' => '/promotional-items/t-shirts', 'img' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=300&h=300&fit=crop', 'price' => '৬৫০'],
            ['title' => 'পেন', 'url' => '/promotional-items/pens', 'img' => 'https://images.unsplash.com/photo-1586158291800-2665f07bba79?w=300&h=300&fit=crop', 'price' => '১৫০'],
            ['title' => 'কীচেইন', 'url' => '/promotional-items/keychains', 'img' => 'https://images.unsplash.com/photo-1582719201952-087c59d078e9?w=300&h=300&fit=crop', 'price' => '২৫০'],
            ['title' => 'টোট ব্যাগ', 'url' => '/promotional-items/tote-bags', 'img' => 'https://images.unsplash.com/photo-1590874103328-eac38a683ce7?w=300&h=300&fit=crop', 'price' => '৫৫০', 'badge' => 'নতুন'],
            ['title' => 'ক্যাপ', 'url' => '/promotional-items/caps', 'img' => 'https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=300&h=300&fit=crop', 'price' => '৪৫০'],
            ['title' => 'নোটবুক', 'url' => '/promotional-items/notebooks', 'img' => 'https://images.unsplash.com/photo-1589829085413-56de8ae18c73?w=300&h=300&fit=crop', 'price' => '৩৫০'],
            ['title' => 'ব্যাজ', 'url' => '/promotional-items/badges', 'img' => 'https://images.unsplash.com/photo-1624378515195-6bbdb73dac49?w=300&h=300&fit=crop', 'price' => '২০০'],
            ['title' => 'ইউএসবি ড্রাইভ', 'url' => '/promotional-items/usb-drives', 'img' => 'https://images.unsplash.com/photo-1624823183493-ed5832f48f18?w=300&h=300&fit=crop', 'price' => '৮০০'],
            ['title' => 'ওয়াটার বোতল', 'url' => '/promotional-items/water-bottles', 'img' => 'https://images.unsplash.com/photo-1602143407151-7111542de6e8?w=300&h=300&fit=crop', 'price' => '৫০০'],
        ],
        'offerTitle' => '🎁 প্রমোশনাল আইটেম অফার 🎁',
        'offerText' => '৫০+ পীস অর্ডারে ৩৫% ছাড়!',
        'offerDetails' => 'বাল্ক অর্ডারে বিশেষ ছাড়। কর্পোরেট গিফ্ট এবং ইভেন্ট গিভাওয়ের জন্য বিশেষ প্যাকেজ।'
    ]);
});

Route::prefix('promotional-items')->group(function () {
    Route::get('/mugs', function () {
        return view('book-configure', ['productType' => 'mugs', 'productTitle' => 'Mugs']);
    });
    Route::get('/t-shirts', function () {
        return view('book-configure', ['productType' => 't-shirts', 'productTitle' => 'T-Shirts']);
    });
    Route::get('/pens', function () {
        return view('book-configure', ['productType' => 'pens', 'productTitle' => 'Pens']);
    });
    Route::get('/keychains', function () {
        return view('book-configure', ['productType' => 'keychains', 'productTitle' => 'Keychains']);
    });
    Route::get('/tote-bags', function () {
        return view('book-configure', ['productType' => 'tote-bags', 'productTitle' => 'Tote Bags']);
    });
    Route::get('/caps', function () {
        return view('book-configure', ['productType' => 'caps', 'productTitle' => 'Caps']);
    });
    Route::get('/notebooks', function () {
        return view('book-configure', ['productType' => 'notebooks', 'productTitle' => 'Notebooks']);
    });
    Route::get('/badges', function () {
        return view('book-configure', ['productType' => 'badges', 'productTitle' => 'Badges']);
    });
    Route::get('/usb-drives', function () {
        return view('book-configure', ['productType' => 'usb-drives', 'productTitle' => 'USB Drives']);
    });
    Route::get('/water-bottles', function () {
        return view('book-configure', ['productType' => 'water-bottles', 'productTitle' => 'Water Bottles']);
    });
});

// Cart Routes
Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', 'App\Http\Controllers\CartController@index')->name('index');
    Route::post('/add', 'App\Http\Controllers\CartController@add')->name('add');
    Route::delete('/remove', 'App\Http\Controllers\CartController@remove')->name('remove');
    Route::post('/update', 'App\Http\Controllers\CartController@update')->name('update');
    Route::post('/clear', 'App\Http\Controllers\CartController@clear')->name('clear');
    Route::get('/count', 'App\Http\Controllers\CartController@getCount')->name('count');
});

