@extends('layouts.app')

@section('title', 'Chapakhana - Every page tells your story')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <!-- Hero Slider Section -->
    <section class="relative bg-white py-3">
        <div class="max-w-7xl mx-auto relative h-[400px] md:h-[460px] overflow-hidden px-4 sm:px-6 lg:px-8">
            <!-- Slider Container -->
            <div id="heroSlider" class="relative h-full">
                <!-- Slide 1 -->
                <div class="slider-item active absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?w=1920&h=600&fit=crop" alt="Hero Background 1" class="absolute inset-0 w-full h-full object-cover">
                    <div class="relative h-full flex flex-col md:flex-row md:items-center">
                        <div class="w-full md:w-1/2 px-4 sm:px-6 lg:px-16 mt-4 md:mt-0">
                            <div class="bg-white inline-block px-5 py-3 rounded-md shadow-lg mb-8">
                                <div class="flex items-start gap-3">
                                    <div class="text-left">
                                        <div class="text-4xl font-bold text-gray-900 leading-none">93<span class="text-2xl align-top">%</span></div>
                                        <div class="text-[10px] text-gray-600 mt-1 leading-tight">
                                            of our customers<br>
                                            would buy again from<br>
                                            Pixartprinting
                                        </div>
                                    </div>
                                    <div class="border-l border-gray-300 pl-3">
                                        <div class="flex items-center gap-1 mb-1">
                                            <span class="text-yellow-400 text-lg">★</span>
                                            <span class="font-bold text-gray-900 text-sm">feefo</span>
                                        </div>
                                        <div class="text-[10px] text-gray-700 underline cursor-pointer hover:text-gray-900">
                                            Read 256,839 reviews
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-4 sm:px-6 lg:px-16 md:absolute md:right-8 lg:right-24 md:top-1/2 md:-translate-y-1/2 text-left md:text-right mt-6 md:mt-0">
                            <h1 class="text-2xl sm:text-3xl md:text-4xl xl:text-5xl font-bold text-white leading-tight">
                                Every page tells your story.
                                <span class="block text-xl sm:text-2xl md:text-3xl xl:text-4xl mt-2 font-bold">We print it with care, So your brand speaks louder.</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slider-item absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=1920&h=600&fit=crop" alt="Hero Background 2" class="absolute inset-0 w-full h-full object-cover">
                    <div class="relative h-full flex flex-col md:flex-row md:items-center">
                        <div class="w-full md:w-1/2 px-4 sm:px-6 lg:px-16 mt-4 md:mt-0">
                            <div class="bg-white inline-block px-5 py-3 rounded-md shadow-lg mb-8">
                                <div class="flex items-start gap-3">
                                    <div class="text-left">
                                        <div class="text-4xl font-bold text-gray-900 leading-none">93<span class="text-2xl align-top">%</span></div>
                                        <div class="text-[10px] text-gray-600 mt-1 leading-tight">
                                            of our customers<br>
                                            would buy again from<br>
                                            Pixartprinting
                                        </div>
                                    </div>
                                    <div class="border-l border-gray-300 pl-3">
                                        <div class="flex items-center gap-1 mb-1">
                                            <span class="text-yellow-400 text-lg">★</span>
                                            <span class="font-bold text-gray-900 text-sm">feefo</span>
                                        </div>
                                        <div class="text-[10px] text-gray-700 underline cursor-pointer hover:text-gray-900">
                                            Read 256,839 reviews
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-4 sm:px-6 lg:px-16 md:absolute md:right-8 lg:right-24 md:top-1/2 md:-translate-y-1/2 text-left md:text-right mt-6 md:mt-0">
                            <h1 class="text-2xl sm:text-3xl md:text-4xl xl:text-5xl font-bold text-white leading-tight mb-4 md:mb-6">
                                Not just printers. True partners.
                                <span class="block text-xl sm:text-2xl md:text-3xl xl:text-4xl mt-2 font-bold">Real people by your side, Every step of the way.</span>
                            </h1>
                            <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2.5 px-6 sm:py-3 sm:px-8 rounded-full text-base sm:text-lg shadow-lg transition-all transform hover:scale-105">
                                TALK TO US
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="slider-item absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=1920&h=600&fit=crop" alt="Hero Background 3" class="absolute inset-0 w-full h-full object-cover">
                    <div class="relative h-full flex flex-col md:flex-row md:items-center">
                        <div class="w-full md:w-1/2 px-4 sm:px-6 lg:px-16 mt-4 md:mt-0">
                            <div class="bg-white inline-block px-5 py-3 rounded-md shadow-lg mb-8">
                                <div class="flex items-start gap-3">
                                    <div class="text-left">
                                        <div class="text-4xl font-bold text-gray-900 leading-none">93<span class="text-2xl align-top">%</span></div>
                                        <div class="text-[10px] text-gray-600 mt-1 leading-tight">
                                            of our customers<br>
                                            would buy again from<br>
                                            Pixartprinting
                                        </div>
                                    </div>
                                    <div class="border-l border-gray-300 pl-3">
                                        <div class="flex items-center gap-1 mb-1">
                                            <span class="text-yellow-400 text-lg">★</span>
                                            <span class="font-bold text-gray-900 text-sm">feefo</span>
                                        </div>
                                        <div class="text-[10px] text-gray-700 underline cursor-pointer hover:text-gray-900">
                                            Read 256,839 reviews
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 px-4 sm:px-6 lg:px-16 md:absolute md:right-8 lg:right-24 md:top-1/2 md:-translate-y-1/2 text-left md:text-right mt-6 md:mt-0">
                            <h1 class="text-2xl sm:text-3xl md:text-4xl xl:text-5xl font-bold text-white leading-tight">
                                Transform Your Ideas
                                <span class="block text-xl sm:text-2xl md:text-3xl xl:text-4xl mt-2 font-bold">Into Beautiful Prints That Stand Out.</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Previous Button - Left -->
            <button onclick="prevSlide()" class="absolute left-0 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 p-2 sm:p-3 rounded-full shadow-lg transition z-10 ml-2 sm:ml-4">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>

            <!-- Next Button - Right -->
            <button onclick="nextSlide()" class="absolute right-0 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 p-2 sm:p-3 rounded-full shadow-lg transition z-10 mr-2 sm:mr-4">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

            <!-- Dots Indicator -->
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-10">
                <button onclick="goToSlide(0)" class="slider-dot w-3 h-3 rounded-full bg-white/60 hover:bg-white transition"></button>
                <button onclick="goToSlide(1)" class="slider-dot w-3 h-3 rounded-full bg-white/60 hover:bg-white transition"></button>
                <button onclick="goToSlide(2)" class="slider-dot w-3 h-3 rounded-full bg-white/60 hover:bg-white transition"></button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-12 sm:py-14 lg:py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 sm:gap-8">
                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mb-3 sm:mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm sm:text-base">Committed to quality</h3>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mb-3 sm:mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm sm:text-base">Value for money</h3>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mb-3 sm:mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm sm:text-base">Speed & Reliability</h3>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mb-3 sm:mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm sm:text-base">Happy clients first</h3>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mb-3 sm:mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm sm:text-base">Professional adviser</h3>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mb-3 sm:mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm sm:text-base">Tons of products</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Sellers Section -->
    <section class="py-12 sm:py-16 lg:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-8 sm:mb-12">Best Sellers</h2>
            <div class="relative">
                <div class="flex gap-4 sm:gap-6 overflow-x-auto scrollbar-hide snap-x snap-mandatory pb-4 cursor-grab scroll-smooth select-none touch-pan-y" id="bestSellersContainer">
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <a href="/books" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=400&h=400&fit=crop" alt="Books" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Books</h3>
                            </div>
                        </a>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <a href="/business-cards" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=400&h=400&fit=crop" alt="Business Cards" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Business Cards</h3>
                            </div>
                        </a>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <a href="/stickers" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1611532736579-6b16e2b50449?w=400&h=400&fit=crop" alt="Stickers" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Stickers</h3>
                            </div>
                        </a>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <a href="/postcards-invitations" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1557682224-5b8590cd9ec5?w=400&h=400&fit=crop" alt="Postcards and Invitations" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Postcards and Invitations</h3>
                            </div>
                        </a>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1553729459-efe14ef6055d?w=400&h=400&fit=crop" alt="Booklets" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Booklets</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1489515217757-5fd1be406fef?w=400&h=400&fit=crop" alt="Catalogs" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Catalogs</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=400&h=400&fit=crop" alt="Magazines" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Magazines</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1504198458632-1631c46f4506?w=400&h=400&fit=crop" alt="Banners" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Banners</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1489515217757-5fd1be406fef?w=400&h=400&fit=crop" alt="Stationery" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Stationery</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=400&h=400&fit=crop" alt="Signage" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Signage</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <button onclick="scrollBestSellers('left')" class="hidden lg:block absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white hover:bg-gray-50 text-gray-800 p-3 rounded-full shadow-lg transition z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button onclick="scrollBestSellers('right')" class="hidden lg:block absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white hover:bg-gray-50 text-gray-800 p-3 rounded-full shadow-lg transition z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Magazines, Books, and Catalogs Section -->
    <section class="py-12 sm:py-16 lg:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">
                        Magazines, Books, and Catalogs
                    </h2>
                    <p class="text-base sm:text-lg text-gray-600 mb-6 sm:mb-8 leading-relaxed">
                        Describe your brand, tell your story, or showcase all your products in style. Choose the size, material, and binding that suit you, and customize magazines, books and catalogs quickly and easily—just the way you like.
                    </p>
                    <a href="/books" class="inline-block border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white font-semibold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105">
                        Discover More
                    </a>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=800&h=500&fit=crop" alt="Magazines, Books, and Catalogs" class="w-full h-auto rounded-lg shadow-2xl">
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-blue-500 rounded-lg -z-10 hidden sm:block"></div>
                        <div class="absolute -top-4 -left-4 w-32 h-32 bg-green-500 rounded-lg -z-10 hidden sm:block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Signs & Banners Section -->
    <section class="py-12 sm:py-16 lg:py-20 bg-gradient-to-b from-gray-100 to-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-6 items-center">
                <div class="lg:col-span-3">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Signs & Banners</h2>
                    <p class="text-base text-gray-700 mb-6 leading-relaxed">
                        Make your message stand out with custom banners, indoor signs, and storefront displays. Durable, professional, and budget-friendly—perfect for promotions, trade shows, and more.
                    </p>
                    <a href="#" class="inline-block border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white font-semibold py-2.5 px-6 rounded-full transition-all duration-300">
                        Browse All
                    </a>
                </div>
                <div class="lg:col-span-9 grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-5">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-[4/3] bg-white flex items-center justify-center p-4">
                            <img src="https://images.unsplash.com/photo-1557425493-6f90ae4659fc?w=400&h=300&fit=crop" alt="Retractable Banner Stands" class="w-full h-full object-contain">
                        </div>
                        <div class="p-3 text-center border-t border-gray-100">
                            <h3 class="text-sm font-semibold text-gray-900">Retractable Banner<br>Stands</h3>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-[4/3] bg-white flex items-center justify-center p-4">
                            <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?w=400&h=300&fit=crop" alt="Advertising Flags" class="w-full h-full object-contain">
                        </div>
                        <div class="p-3 text-center border-t border-gray-100">
                            <h3 class="text-sm font-semibold text-gray-900">Advertising Flags</h3>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-[4/3] bg-white flex items-center justify-center p-4">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=300&fit=crop" alt="Vinyl Banners" class="w-full h-full object-contain">
                        </div>
                        <div class="p-3 text-center border-t border-gray-100">
                            <h3 class="text-sm font-semibold text-gray-900">Vinyl Banners</h3>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-[4/3] bg-white flex items-center justify-center p-4">
                            <img src="https://images.unsplash.com/photo-1606663889134-b1dedb5ed8b7?w=400&h=300&fit=crop" alt="Foam Board Signs" class="w-full h-full object-contain">
                        </div>
                        <div class="p-3 text-center border-t border-gray-100">
                            <h3 class="text-sm font-semibold text-gray-900">Foam Board Signs</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Categories Section -->
    <section class="py-12 sm:py-16 lg:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6">
                <div class="group">
                    <a href="/books" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="aspect-square bg-gray-50 flex items-center justify-center p-6">
                            <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=300&h=300&fit=crop" alt="Books" class="w-full h-full object-contain">
                        </div>
                        <div class="p-4 text-center bg-white">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-900">Books</h3>
                        </div>
                    </a>
                </div>
                <div class="group">
                    <a href="/catalogs" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="aspect-square bg-gray-50 flex items-center justify-center p-6">
                            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=300&h=300&fit=crop" alt="Catalogs" class="w-full h-full object-contain">
                        </div>
                        <div class="p-4 text-center bg-white">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-900">Catalogs</h3>
                        </div>
                    </a>
                </div>
                <div class="group">
                    <a href="/magazines" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="aspect-square bg-gray-50 flex items-center justify-center p-6">
                            <img src="https://images.unsplash.com/photo-1586210579191-33b45e38fa8c?w=300&h=300&fit=crop" alt="Magazines" class="w-full h-full object-contain">
                        </div>
                        <div class="p-4 text-center bg-white">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-900">Magazines</h3>
                        </div>
                    </a>
                </div>
                <div class="group">
                    <a href="/booklets" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="aspect-square bg-gray-50 flex items-center justify-center p-6">
                            <img src="https://images.unsplash.com/photo-1553729459-efe14ef6055d?w=300&h=300&fit=crop" alt="Booklets" class="w-full h-full object-contain">
                        </div>
                        <div class="p-4 text-center bg-white">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-900">Booklets</h3>
                        </div>
                    </a>
                </div>
                <div class="group">
                    <a href="/books" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="aspect-square bg-gray-50 flex items-center justify-center p-6">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop" alt="Manuals" class="w-full h-full object-contain">
                        </div>
                        <div class="p-4 text-center bg-white">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-900">Manuals</h3>
                        </div>
                    </a>
                </div>
                <div class="group">
                    <a href="/books" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="aspect-square bg-gray-50 flex items-center justify-center p-6">
                            <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=300&h=300&fit=crop" alt="Zines" class="w-full h-full object-contain">
                        </div>
                        <div class="p-4 text-center bg-white">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-900">Zines</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Signs & Banners Section (Alternative Layout) -->
    <section class="py-12 sm:py-16 lg:py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
                <div class="lg:w-80 flex-shrink-0">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Signs & Banners</h2>
                    <p class="text-base text-gray-700 mb-6 leading-relaxed">
                        Make your message stand out with custom banners, indoor signs, and storefront displays. Durable, professional, and budget-friendly—perfect for promotions, trade shows, and more.
                    </p>
                    <a href="/banners" class="inline-block border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white font-semibold py-3 px-8 rounded-full transition-all duration-300">
                        Browse All
                    </a>
                </div>
                <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <a href="/banners/roll-up-banners" class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-[4/3] bg-white flex items-center justify-center p-6">
                            <img src="https://images.unsplash.com/photo-1557425493-6f90ae4659fc?w=400&h=300&fit=crop" alt="Retractable Banner Stands" class="w-full h-full object-cover rounded">
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-sm sm:text-base font-semibold text-gray-900 leading-tight">Retractable Banner<br>Stands</h3>
                        </div>
                    </a>
                    <a href="/banners/fabric-banners" class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-[4/3] bg-white flex items-center justify-center p-6">
                            <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?w=400&h=300&fit=crop" alt="Advertising Flags" class="w-full h-full object-cover rounded">
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-sm sm:text-base font-semibold text-gray-900">Advertising Flags</h3>
                        </div>
                    </a>
                    <a href="/banners/vinyl-banners" class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-[4/3] bg-white flex items-center justify-center p-6">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=300&fit=crop" alt="Vinyl Banners" class="w-full h-full object-cover rounded">
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-sm sm:text-base font-semibold text-gray-900">Vinyl Banners</h3>
                        </div>
                    </a>
                    <a href="/banners/mesh-banners" class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-[4/3] bg-white flex items-center justify-center p-6">
                            <img src="https://images.unsplash.com/photo-1606663889134-b1dedb5ed8b7?w=400&h=300&fit=crop" alt="Foam Board Signs" class="w-full h-full object-cover rounded">
                        </div>
                        <div class="p-4 text-center">
                            <h3 class="text-sm sm:text-base font-semibold text-gray-900">Foam Board Signs</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Explore our Display Signs Section -->
    <section class="py-12 sm:py-16 lg:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-8 sm:mb-12">Explore our Display Signs</h2>
            <div class="relative">
                <div class="flex gap-4 sm:gap-6 overflow-x-auto scrollbar-hide snap-x snap-mandatory pb-4" id="displaySignsContainer">
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="aspect-square bg-gray-50 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1557425493-6f90ae4659fc?w=400&h=400&fit=crop" alt="Step & Repeat Banners" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-900">Step & Repeat Banners</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="aspect-square bg-gray-50 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1533073526757-2c8ca1df9f1c?w=400&h=400&fit=crop" alt="Pop-up Displays" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-900">Pop-up Displays</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="aspect-square bg-gray-50 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?w=400&h=400&fit=crop" alt="Retractable Banners" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-900">Retractable Banners</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="aspect-square bg-gray-50 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=400&fit=crop" alt="Feather Flags" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-900">Feather Flags</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="aspect-square bg-gray-50 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1606663889134-b1dedb5ed8b7?w=400&h=400&fit=crop" alt="Tension Fabric Banners" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-900">Tension Fabric Banners</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <button onclick="scrollDisplaySigns('left')" class="hidden lg:block absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white hover:bg-gray-50 text-gray-800 p-3 rounded-full shadow-lg transition z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button onclick="scrollDisplaySigns('right')" class="hidden lg:block absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white hover:bg-gray-50 text-gray-800 p-3 rounded-full shadow-lg transition z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 sm:py-20 lg:py-24 bg-gray-50 content-justify">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 mb-6">
                Online Printing Services: Professional and Affordable Solutions for Your Business
            </h1>
            <div class="space-y-6 mb-12">
                <p class="text-base text-gray-700 leading-relaxed">
                    Welcome to <strong>Pixartprinting</strong>, wich provides exceptional <strong>online printing services</strong> for businesses of all sizes. With over 30 years in the industry, we have built a solid reputation for offering high-quality, affordable, and custom <strong>printing services</strong>. Serving over a million customers, our team of more than 1,200 employees processes more than 15,000 orders every day. We are proud to have received over 60,000 online reviews, showcasing our commitment to delivering the best customer experience possible.
                </p>
                <p class="text-base text-gray-700 leading-relaxed">
                    At Pixartprinting, we understand that your printing needs go beyond just <strong>high-quality products</strong>. We offer professional advice, custom solutions, and expert file checks to ensure that your prints are exactly what you need. Our quick and easy payment options make it simple to order, and our dedicated <strong>customer support team</strong> is always available to assist with any questions or concerns. Whether you're looking for one-off prints or bulk orders, we make sure every project meets the highest standards.
                </p>
            </div>
            <div class="mb-12">
                <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900 mb-4">
                    Book and Magazine Printing: Bring Your Ideas to Life with Professional Printing Services
                </h2>
                <div class="space-y-4">
                    <p class="text-base text-gray-700 leading-relaxed">
                        Pixartprinting offers a wide range of <a href="#" class="text-blue-600 hover:underline font-medium">book and magazine printing</a> options, perfect for both personal projects and professional needs. Whether you're looking to print a <a href="#" class="text-blue-600 hover:underline font-medium">catalog</a>, <a href="#" class="text-blue-600 hover:underline font-medium">booklet</a>, or a full-length <a href="#" class="text-blue-600 hover:underline font-medium">magazine</a>, we provide the highest quality <strong>printing services</strong>. We specialize in <a href="#" class="text-blue-600 hover:underline font-medium">saddle stitch</a> and <a href="#" class="text-blue-600 hover:underline font-medium">perfect binding</a> to create professional-looking, durable publications that will stand the test of time.
                    </p>
                    <p class="text-base text-gray-700 leading-relaxed">
                        Our <strong>online printing services for books and magazines</strong> are designed to be easy and efficient. With our custom printing services, you can upload your files, choose the perfect paper, and select your binding options—all from the comfort of your home or office. Whether you need a small run or large-scale printing, Pixartprinting delivers fast turnaround times without compromising on quality.
                    </p>
                </div>
            </div>
            <div class="mb-12">
                <h2 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-900 mb-4">
                    Label and Sticker Printing: Custom Solutions for Your Branding Needs
                </h2>
                <div class="space-y-4">
                    <p class="text-base text-gray-700 leading-relaxed">
                        Enhance your brand visibility with our <a href="#" class="text-blue-600 hover:underline font-medium">custom sticker</a> and <a href="#" class="text-blue-600 hover:underline font-medium">label printing services</a>. Pixartprinting offers a variety of sticker and label types that are perfect for product packaging, marketing campaigns, and promotional materials. Our <strong>custom stickers</strong> are made from durable materials, ensuring long-lasting quality for both indoor and outdoor use.
                    </p>
                    <p class="text-base text-gray-700 leading-relaxed">
                        Whether you need custom stickers for a product launch or <a href="#" class="text-blue-600 hover:underline font-medium">roll labels</a> for your packaging, we offer fully <strong>personalized printing services</strong> to help you stand out. Choose from different shapes, sizes, and finishes to create the perfect stickers or labels for your business needs.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@push('scripts')
<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slider-item');
    const dots = document.querySelectorAll('.slider-dot');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('bg-white'));
        dots.forEach(dot => dot.classList.add('bg-white/60'));
        slides[index].classList.add('active');
        dots[index].classList.remove('bg-white/60');
        dots[index].classList.add('bg-white');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    function goToSlide(index) {
        currentSlide = index;
        showSlide(currentSlide);
    }

    setInterval(nextSlide, 5000);
    showSlide(0);

    function scrollBestSellers(direction) {
        const container = document.getElementById('bestSellersContainer');
        const scrollAmount = 320;
        if (direction === 'left') {
            container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        } else {
            container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }

    function scrollDisplaySigns(direction) {
        const container = document.getElementById('displaySignsContainer');
        const scrollAmount = 300;
        if (direction === 'left') {
            container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        } else {
            container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }

    // Smooth drag scrolling with momentum
    function initDragScroll() {
        const container = document.getElementById('bestSellersContainer');
        if (!container) return;

        let isDown = false;
        let startX = 0;
        let scrollLeft = 0;
        let velocity = 0;
        let lastX = 0;
        let lastTime = 0;
        let animationId = null;

        const maxVelocity = 5.5;

        const stopMomentum = () => {
            if (animationId) cancelAnimationFrame(animationId);
        };

        const applyMomentum = () => {
            let currentVelocity = velocity;
            const friction = 0.96;
            const minVelocity = 0.05;

            const animate = () => {
                if (Math.abs(currentVelocity) > minVelocity) {
                    container.scrollLeft += currentVelocity * 20;
                    currentVelocity *= friction;
                    animationId = requestAnimationFrame(animate);
                }
            };

            animationId = requestAnimationFrame(animate);
        };

        container.addEventListener('mousedown', (e) => {
            if (e.button !== 0) return;
            isDown = true;
            startX = e.pageX;
            scrollLeft = container.scrollLeft;
            lastX = startX;
            lastTime = Date.now();
            velocity = 0;
            container.style.cursor = 'grabbing';
            stopMomentum();
            e.preventDefault();
        });

        container.addEventListener('mouseleave', () => {
            if (isDown) {
                isDown = false;
                container.style.cursor = 'grab';
                if (Math.abs(velocity) > 0.5) {
                    applyMomentum();
                }
            }
        });

        container.addEventListener('mouseup', () => {
            if (isDown) {
                isDown = false;
                container.style.cursor = 'grab';
                if (Math.abs(velocity) > 0.5) {
                    applyMomentum();
                }
            }
        });

        container.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();

            const x = e.pageX;
            const walk = x - startX;
            const now = Date.now();
            const timeDelta = Math.max(now - lastTime, 1);

            velocity = Math.max(Math.min((lastX - x) / timeDelta, maxVelocity), -maxVelocity);
            lastX = x;
            lastTime = now;

            container.scrollLeft = scrollLeft - walk;
        });

        // Touch support
        container.addEventListener('touchstart', (e) => {
            isDown = true;
            startX = e.touches[0].pageX;
            scrollLeft = container.scrollLeft;
            lastX = startX;
            lastTime = Date.now();
            velocity = 0;
            stopMomentum();
        });

        container.addEventListener('touchend', () => {
            if (isDown) {
                isDown = false;
                if (Math.abs(velocity) > 0.5) {
                    applyMomentum();
                }
            }
        });

        container.addEventListener('touchmove', (e) => {
            if (!isDown) return;

            const x = e.touches[0].pageX;
            const walk = x - startX;
            const now = Date.now();
            const timeDelta = Math.max(now - lastTime, 1);

            velocity = Math.max(Math.min((lastX - x) / timeDelta, maxVelocity), -maxVelocity);
            lastX = x;
            lastTime = now;

            container.scrollLeft = scrollLeft - walk;
        });
    }

    // Initialize on page load
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initDragScroll);
    } else {
        initDragScroll();
    }
</script>
@endpush
