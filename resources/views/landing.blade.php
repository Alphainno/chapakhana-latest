@extends('layouts.app')

@section('title', 'Chapakhana - Every page tells your story')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <!-- Hero Slider Section -->
    <section class="relative bg-white py-3">
        <div class="max-w-7xl rounded-[24px] mx-auto relative h-[400px] md:h-[460px] overflow-hidden">
            <div class="h-full px-4 sm:px-6 lg:px-8">
            <!-- Slider Container -->
            <div id="heroSlider" class="relative h-full">
                <!-- Slide 1 -->
                <div class="slider-item active absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?w=1920&h=600&fit=crop" alt="Hero Background 1" class="absolute inset-0 w-full h-full object-cover">
                    <div class="relative h-full flex flex-col md:flex-row md:items-center">
                        <div class="w-full md:w-1/2 px-4 sm:px-6 lg:px-16 mt-4 md:mt-0">
                            <div class="bg-white inline-block px-5 py-3 rounded-2xl shadow-lg mb-8">
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
                                আপনার গল্প, আমাদের ছাপা
                                <span class="block text-xl sm:text-2xl md:text-3xl xl:text-4xl mt-2 font-bold">মানসম্মত প্রিন্টিং সেবা, সাশ্রয়ী মূল্যে</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slider-item absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=1920&h=600&fit=crop" alt="Hero Background 2" class="absolute inset-0 w-full h-full object-cover">
                    <div class="relative h-full flex flex-col md:flex-row md:items-center">
                        <div class="w-full md:w-1/2 px-4 sm:px-6 lg:px-16 mt-4 md:mt-0">
                            <div class="bg-white inline-block px-5 py-3 rounded-2xl shadow-lg mb-8">
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
                                শুধু প্রিন্টার নয়, আপনার বিশ্বস্ত সঙ্গী
                                <span class="block text-xl sm:text-2xl md:text-3xl xl:text-4xl mt-2 font-bold">প্রতিটি পদক্ষেপে আমরা আছি আপনার পাশে</span>
                            </h1>
                            <button class="bg-green-600 hover:bg-green-700 text-white font-bold py-2.5 px-6 sm:py-3 sm:px-8 rounded-full text-base sm:text-lg shadow-lg transition-all transform hover:scale-105">
                                যোগাযোগ করুন
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="slider-item absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=1920&h=600&fit=crop" alt="Hero Background 3" class="absolute inset-0 w-full h-full object-cover">
                    <div class="relative h-full flex flex-col md:flex-row md:items-center">
                        <div class="w-full md:w-1/2 px-4 sm:px-6 lg:px-16 mt-4 md:mt-0">
                            <div class="bg-white inline-block px-5 py-3 rounded-2xl shadow-lg mb-8">
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
                                আপনার আইডিয়াকে বাস্তবে রূপান্তরিত করুন
                                <span class="block text-xl sm:text-2xl md:text-3xl xl:text-4xl mt-2 font-bold">দেশসেরা মানের প্রিন্টিং এ</span>
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
        </div>
    </section>

    <!-- Headline & Short Description in Bangla Section -->
    <section class="py-12 sm:py-16 lg:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                আপনার স্বপ্নকে বাস্তবে রূপান্তরিত করুন
            </h2>
            <p class="text-lg sm:text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                চাপাখানা হলো আপনার বিশ্বস্ত প্রিন্টিং সঙ্গী। উচ্চমানের প্রিন্টিং সেবা, দ্রুত ডেলিভারি এবং প্রতিযোগিতামূলক মূল্যে আমরা আপনার ব্যবসায়িক লক্ষ্য অর্জনে সহায়তা করি। বই, ম্যাগাজিন, ব্যানার থেকে শুরু করে সকল ধরনের মার্কেটিং ম্যাটেরিয়াল - সবকিছুই পাবেন এক জায়গায়।
            </p>
        </div>
    </section>

    <!-- Features Section -->
    {{-- <section class="py-12 sm:py-14 lg:py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 sm:gap-8">
                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mb-3 sm:mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm sm:text-base">মান নিশ্চিতকরণ</h3>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mb-3 sm:mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm sm:text-base">সাশ্রয়ী মূল্য</h3>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mb-3 sm:mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm sm:text-base">দ্রুত ডেলিভারি</h3>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mb-3 sm:mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm sm:text-base">গ্রাহক সন্তুষ্টি</h3>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mb-3 sm:mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm sm:text-base">পেশাদার পরামর্শ</h3>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 mb-3 sm:mb-4 flex items-center justify-center">
                        <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 text-sm sm:text-base">বিশাল সংগ্রহ</h3>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- How to Order Banner Section -->
    <section class="py-12 sm:py-16 lg:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <!-- Left Side - Order Instructions -->
                <div class="space-y-6">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                        <span class="text-green-600">০ টাকা</span> বিনিয়োগে শুরু করুন
                    </h2>
                    
                    <div class="space-y-6">
                        <!-- Step 1 -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 rounded-full bg-gray-900 flex items-center justify-center">
                                    <span class="text-lg font-bold text-white">১</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-1">পণ্য নির্বাচন করুন</h3>
                                <p class="text-gray-600 text-base leading-relaxed">
                                    ১০০০+ উচ্চমানের পণ্য থেকে আপনার পছন্দের পণ্য বেছে নিন
                                </p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 rounded-full bg-gray-900 flex items-center justify-center">
                                    <span class="text-lg font-bold text-white">২</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-1">ডিজাইন যুক্ত করুন</h3>
                                <p class="text-gray-600 text-base leading-relaxed">
                                    সহজ এবং মজাদার উপায়ে আপনার পণ্যের ডিজাইন করুন!
                                </p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex gap-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 rounded-full bg-gray-900 flex items-center justify-center">
                                    <span class="text-lg font-bold text-white">৩</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-1">বিক্রয় শুরু করুন</h3>
                                <p class="text-gray-600 text-base leading-relaxed">
                                    আপনি লাভের মার্জিন নির্ধারণ করুন, উৎপাদন ও ডেলিভারি আমরা করবো
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="/shop" class="inline-flex items-center justify-center bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-bold py-3 px-8 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 text-base">
                            ডিজাইন শুরু করুন
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="#learn-more" class="inline-flex items-center justify-center bg-white hover:bg-gray-50 text-gray-900 font-bold py-3 px-8 rounded-lg border-2 border-gray-300 hover:border-gray-400 transition-all duration-300 text-base">
                            আরও জানুন
                        </a>
                    </div>
                </div>

                <!-- Right Side - Video Frame -->
                <div class="relative flex items-center justify-start lg:justify-center lg:pl-8">
                    <!-- Video Container -->
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-gray-900 w-full max-w-md aspect-square">
                        <!-- Video Player -->
                        <video 
                            class="w-full h-full object-cover" 
                            controls 
                            poster="https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=1200&h=1200&fit=crop">
                            <source src="/videos/how-it-works.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        
                        <!-- Play Button Overlay (visible before video starts) -->
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-20 hover:bg-opacity-30 transition-all duration-300 cursor-pointer group" onclick="this.previousElementSibling.play(); this.style.display='none';">
                            <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-2xl transform group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-green-600 ml-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative Elements -->
                    <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-orange-100 rounded-full -z-10"></div>
                    <div class="absolute -top-4 -left-4 w-32 h-32 bg-green-100 rounded-full -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Sellers Section -->
    <section class="py-12 sm:py-16 lg:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-8 sm:mb-12">জনপ্রিয় পণ্য</h2>
            <div class="relative">
                <div class="flex gap-4 sm:gap-6 overflow-x-auto scrollbar-hide snap-x snap-mandatory pb-4 cursor-grab scroll-smooth select-none touch-pan-y" id="bestSellersContainer">
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <a href="/magazines" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=400&h=400&fit=crop" alt="Magazines" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Magazines</h3>
                            </div>
                        </a>
                    </div>
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
                        <a href="/catalogs" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1489515217757-5fd1be406fef?w=400&h=400&fit=crop" alt="Catalogs" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Catalog</h3>
                            </div>
                        </a>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <a href="/brochures" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1553729459-efe14ef6055d?w=400&h=400&fit=crop" alt="Marketing Material" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Marketing Material</h3>
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
                        <a href="/postcards-invitations" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1557682224-5b8590cd9ec5?w=400&h=400&fit=crop" alt="Invitation & Stationery" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Invitation & Stationery</h3>
                            </div>
                        </a>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <a href="/banners" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1504198458632-1631c46f4506?w=400&h=400&fit=crop" alt="Banners" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Banners</h3>
                            </div>
                        </a>
                    </div>
                    <div class="flex-none w-64 sm:w-72 snap-center">
                        <a href="/promotional-items" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <div class="aspect-square bg-gray-100 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1611532736579-6b16e2b50449?w=400&h=400&fit=crop" alt="Promotional Items" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-lg font-semibold text-gray-900">Promotional Items</h3>
                            </div>
                        </a>
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

    <!-- Testimonials Section -->
    <section class="py-12 sm:py-16 lg:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">গ্রাহকদের মতামত</h2>
                <p class="text-lg text-gray-600">সারা বাংলাদেশ জুড়ে হাজারো ব্যবসায়ীর বিশ্বস্ত সঙ্গী</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 rounded-xl p-6 shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-4 leading-relaxed">"অসাধারণ প্রিন্ট কোয়ালিটি এবং দ্রুত ডেলিভারি! আমাদের সব মার্কেটিং ম্যাটেরিয়ালের জন্য চাপাখানা এখন প্রথম পছন্দ। অবশ্যই সুপারিশ করব!"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-700 font-bold text-lg">আ</div>
                        <div class="ml-3">
                            <p class="font-semibold text-gray-900">আহমেদ রহমান</p>
                            <p class="text-sm text-gray-500">সিইও, টেক সলিউশন্স লিমিটেড</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-50 rounded-xl p-6 shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-4 leading-relaxed">"চমৎকার সেবা এবং সাশ্রয়ী মূল্য। আমাদের কোম্পানির ক্যাটালগ তারা অসাধারণভাবে প্রিন্ট করেছে এবং সময়মতো ডেলিভারি দিয়েছে। আবারও ব্যবহার করবো!"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center text-orange-700 font-bold text-lg">সা</div>
                        <div class="ml-3">
                            <p class="font-semibold text-gray-900">সাদিয়া করিম</p>
                            <p class="text-sm text-gray-500">মার্কেটিং ম্যানেজার, ফ্যাশন হাব</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-50 rounded-xl p-6 shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-4">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-4 leading-relaxed">"পেশাদার টিম এবং দারুণ কাস্টমার সাপোর্ট। আমাদের বিয়ের কার্ড ডিজাইন ও প্রিন্ট করতে তারা সাহায্য করেছে। ধন্যবাদ চাপাখানা!"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center text-red-700 font-bold text-lg">র</div>
                        <div class="ml-3">
                            <p class="font-semibold text-gray-900">রফিক হোসেন</p>
                            <p class="text-sm text-gray-500">ব্যবসায়ী</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who Trust Us Section -->


    <!-- Offer Banner Section -->
  

    <!-- Magazines, Books, and Catalogs Section -->
    {{-- <section class="py-12 sm:py-16 lg:py-20 bg-white">
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
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Stickers & Labels</h2>
                    <p class="text-base text-gray-700 mb-6 leading-relaxed">
                        Enhance your brand visibility with custom stickers and labels. Perfect for product packaging, promotions, and branding. Durable, high-quality materials for indoor and outdoor use.
                    </p>
                    <a href="/stickers" class="inline-block border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white font-semibold py-2.5 px-6 rounded-full transition-all duration-300">
                        Browse All
                    </a>
                </div>
                <div class="lg:col-span-9 grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-5">
                    <a href="/stickers/die-cut" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-[4/3] bg-white flex items-center justify-center p-4">
                            <img src="https://images.unsplash.com/photo-1611532736579-6b16e2b50449?w=400&h=300&fit=crop" alt="Die Cut Stickers" class="w-full h-full object-contain">
                        </div>
                        <div class="p-3 text-center border-t border-gray-100">
                            <h3 class="text-sm font-semibold text-gray-900">Die Cut Stickers</h3>
                        </div>
                    </a>
                    <a href="/stickers/vinyl" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-[4/3] bg-white flex items-center justify-center p-4">
                            <img src="https://images.unsplash.com/photo-1599080876691-3e99ed1ab7e6?w=400&h=300&fit=crop" alt="Roll Labels" class="w-full h-full object-contain">
                        </div>
                        <div class="p-3 text-center border-t border-gray-100">
                            <h3 class="text-sm font-semibold text-gray-900">Roll Labels</h3>
                        </div>
                    </a>
                    <a href="/stickers/kiss-cut" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-[4/3] bg-white flex items-center justify-center p-4">
                            <img src="https://images.unsplash.com/photo-1585308317918-d1ab32fe8e90?w=400&h=300&fit=crop" alt="Sheet Labels" class="w-full h-full object-contain">
                        </div>
                        <div class="p-3 text-center border-t border-gray-100">
                            <h3 class="text-sm font-semibold text-gray-900">Sheet Labels</h3>
                        </div>
                    </a>
                    <a href="/stickers/holographic" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-[4/3] bg-white flex items-center justify-center p-4">
                            <img src="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=400&h=300&fit=crop" alt="Holographic Stickers" class="w-full h-full object-contain">
                        </div>
                        <div class="p-3 text-center border-t border-gray-100">
                            <h3 class="text-sm font-semibold text-gray-900">Holographic Stickers</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Categories Section (Individual Items Slider) -->
    <section class="py-12 sm:py-16 lg:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative">
                <div class="flex gap-4 sm:gap-6 overflow-x-auto scrollbar-hide snap-x snap-mandatory pb-4 cursor-grab scroll-smooth select-none touch-pan-y" id="productItemsContainer">
                    <!-- Paperback Book -->
                    <div class="flex-none w-48 sm:w-56 snap-center">
                        <a href="/books/paperback" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 h-full">
                            <div class="aspect-[4/3] bg-gray-50 flex items-center justify-center p-4">
                                <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=300&h=225&fit=crop" alt="Paperback book" class="w-full h-full object-cover rounded">
                            </div>
                            <div class="p-3 text-center bg-white">
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Paperback book</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Hardback Book -->
                    <div class="flex-none w-48 sm:w-56 snap-center">
                        <a href="/books/hardback" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 h-full">
                            <div class="aspect-[4/3] bg-gray-50 flex items-center justify-center p-4">
                                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=300&h=225&fit=crop" alt="Hardback book" class="w-full h-full object-cover rounded">
                            </div>
                            <div class="p-3 text-center bg-white">
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Hardback book</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Special Finish Hardback -->
                    <div class="flex-none w-48 sm:w-56 snap-center">
                        <a href="/books/special-finish-hardback" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 h-full">
                            <div class="aspect-[4/3] bg-gray-50 flex items-center justify-center p-4">
                                <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=300&h=225&fit=crop" alt="Special Finish Hardback" class="w-full h-full object-cover rounded">
                            </div>
                            <div class="p-3 text-center bg-white">
                                <h3 class="text-sm sm:text-base font-semibold text-blue-600">Special Finish Hardback</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Comics -->
                    <div class="flex-none w-48 sm:w-56 snap-center">
                        <a href="/books/comics" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 h-full">
                            <div class="aspect-[4/3] bg-gray-50 flex items-center justify-center p-4">
                                <img src="https://images.unsplash.com/photo-1612036782180-6f0b6cd846fe?w=300&h=225&fit=crop" alt="Comics" class="w-full h-full object-cover rounded">
                            </div>
                            <div class="p-3 text-center bg-white">
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Comics</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Self-published book -->
                    <div class="flex-none w-48 sm:w-56 snap-center">
                        <a href="/books/self-published" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 h-full">
                            <div class="aspect-[4/3] bg-gray-50 flex items-center justify-center p-4">
                                <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=300&h=225&fit=crop" alt="Self-published book" class="w-full h-full object-cover rounded">
                            </div>
                            <div class="p-3 text-center bg-white">
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Self-published book</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Business Cards Classic -->
                    <div class="flex-none w-48 sm:w-56 snap-center">
                        <a href="/business-cards/classic" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 h-full">
                            <div class="aspect-[4/3] bg-gray-50 flex items-center justify-center p-4">
                                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=300&h=225&fit=crop" alt="Classic Business Cards" class="w-full h-full object-cover rounded">
                            </div>
                            <div class="p-3 text-center bg-white">
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Classic Business Cards</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Roll Labels -->
                    <div class="flex-none w-48 sm:w-56 snap-center">
                        <a href="/stickers" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 h-full">
                            <div class="aspect-[4/3] bg-gray-50 flex items-center justify-center p-4">
                                <img src="https://images.unsplash.com/photo-1599080876691-3e99ed1ab7e6?w=300&h=225&fit=crop" alt="Roll Labels" class="w-full h-full object-cover rounded">
                            </div>
                            <div class="p-3 text-center bg-white">
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Roll Labels</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Die Cut Stickers -->
                    <div class="flex-none w-48 sm:w-56 snap-center">
                        <a href="/stickers" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 h-full">
                            <div class="aspect-[4/3] bg-gray-50 flex items-center justify-center p-4">
                                <img src="https://images.unsplash.com/photo-1611532736579-6b16e2b50449?w=300&h=225&fit=crop" alt="Die Cut Stickers" class="w-full h-full object-cover rounded">
                            </div>
                            <div class="p-3 text-center bg-white">
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Die Cut Stickers</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Magazine -->
                    <div class="flex-none w-48 sm:w-56 snap-center">
                        <a href="/magazines" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 h-full">
                            <div class="aspect-[4/3] bg-gray-50 flex items-center justify-center p-4">
                                <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=300&h=225&fit=crop" alt="Magazine" class="w-full h-full object-cover rounded">
                            </div>
                            <div class="p-3 text-center bg-white">
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Magazine</h3>
                            </div>
                        </a>
                    </div>
                    <!-- Vinyl Banner -->
                    <div class="flex-none w-48 sm:w-56 snap-center">
                        <a href="/banners/vinyl-banners" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 h-full">
                            <div class="aspect-[4/3] bg-gray-50 flex items-center justify-center p-4">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=300&h=225&fit=crop" alt="Vinyl Banner" class="w-full h-full object-cover rounded">
                            </div>
                            <div class="p-3 text-center bg-white">
                                <h3 class="text-sm sm:text-base font-semibold text-gray-900">Vinyl Banner</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <button onclick="scrollProductItems('left')" class="hidden lg:block absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white hover:bg-gray-50 text-gray-800 p-3 rounded-full shadow-lg transition z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button onclick="scrollProductItems('right')" class="hidden lg:block absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white hover:bg-gray-50 text-gray-800 p-3 rounded-full shadow-lg transition z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Stickers & Labels Section (Individual Layout) -->
    <section class="py-12 sm:py-16 lg:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6">
                        Stickers & Labels
                    </h2>
                    <p class="text-base sm:text-lg text-gray-600 mb-6 sm:mb-8 leading-relaxed">
                        Enhance your brand visibility with custom stickers and labels. Perfect for product packaging, promotions, and branding. Durable, high-quality materials for indoor and outdoor use.
                    </p>
                    <a href="/stickers" class="inline-block border-2 border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white font-semibold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105">
                        Discover More
                    </a>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1611532736579-6b16e2b50449?w=800&h=500&fit=crop" alt="Stickers & Labels" class="w-full h-auto rounded-lg shadow-2xl">
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-blue-500 rounded-lg -z-10 hidden sm:block"></div>
                        <div class="absolute -top-4 -left-4 w-32 h-32 bg-purple-500 rounded-lg -z-10 hidden sm:block"></div>
                    </div>
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
                    <a href="/banners" class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="aspect-square bg-gray-50 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1557425493-6f90ae4659fc?w=400&h=400&fit=crop" alt="Step & Repeat Banners" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-900">Step & Repeat Banners</h3>
                            </div>
                        </div>
                    </a>
                    <a href="/banners" class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="aspect-square bg-gray-50 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1533073526757-2c8ca1df9f1c?w=400&h=400&fit=crop" alt="Pop-up Displays" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-900">Pop-up Displays</h3>
                            </div>
                        </div>
                    </a>
                    <a href="/banners" class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="aspect-square bg-gray-50 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?w=400&h=400&fit=crop" alt="Retractable Banners" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-900">Retractable Banners</h3>
                            </div>
                        </div>
                    </a>
                    <a href="/banners" class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="aspect-square bg-gray-50 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=400&fit=crop" alt="Feather Flags" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-900">Feather Flags</h3>
                            </div>
                        </div>
                    </a>
                    <a href="/banners" class="flex-none w-64 sm:w-72 snap-center">
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="aspect-square bg-gray-50 flex items-center justify-center p-8">
                                <img src="https://images.unsplash.com/photo-1606663889134-b1dedb5ed8b7?w=400&h=400&fit=crop" alt="Tension Fabric Banners" class="w-full h-full object-contain">
                            </div>
                            <div class="p-4 text-center">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-900">Tension Fabric Banners</h3>
                            </div>
                        </div>
                    </a>
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
    </section> --}}

   <section class="py-12 sm:py-16 lg:py-20 bg-gradient-to-r from-green-600 to-green-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-white">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4">বিশেষ অফার!</h2>
                <p class="text-xl sm:text-2xl mb-6">প্রথম অর্ডারে পাচ্ছেন ২০% ছাড়</p>
                <p class="text-lg mb-8 max-w-2xl mx-auto">নতুন গ্রাহকরা সকল প্রিন্টিং সার্ভিসে বিশেষ ছাড় উপভোগ করতে পারবেন। সীমিত সময়ের অফার!</p>
                <a href="/shop" class="inline-block bg-white text-green-700 hover:bg-orange-50 font-bold py-4 px-10 rounded-full text-lg shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                    এখনই অফার নিন
                </a>
            </div>
        </div>
    </section>

        <section class="py-12 sm:py-16 lg:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">যারা আমাদের বিশ্বাস করেন</h2>
                <p class="text-lg text-gray-600">শত শত প্রতিষ্ঠান তাদের প্রিন্টিং এর জন্য আমাদের উপর আস্থা রাখেন</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 items-center">
                <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="text-2xl font-bold text-gray-400">Brand 1</div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="text-2xl font-bold text-gray-400">Brand 2</div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="text-2xl font-bold text-gray-400">Brand 3</div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="text-2xl font-bold text-gray-400">Brand 4</div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="text-2xl font-bold text-gray-400">Brand 5</div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="text-2xl font-bold text-gray-400">Brand 6</div>
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

    function scrollProductItems(direction) {
        const container = document.getElementById('productItemsContainer');
        const scrollAmount = 240;
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
