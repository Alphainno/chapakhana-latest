@extends('layouts.app')

@section('title', 'Books | Chapakhana')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <!-- Breadcrumbs -->
    <div class="bg-white py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-xs text-gray-500 flex items-center gap-1">
                <a href="/" class="hover:text-blue-600 hover:underline">Home</a>
                <span>/</span>
                <a href="#" class="hover:text-blue-600 hover:underline">Magazines, Books & Catalogues</a>
                <span>/</span>
                <span class="text-gray-800">Books</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-white pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Left Content -->
                <div class="space-y-6 pt-4">
                    <h1 class="text-4xl font-bold text-gray-900">Books</h1>
                    <p class="text-sm text-gray-600 leading-relaxed max-w-lg">
                        Give your book the treatment it deserves: our catalogue contains all the paper and binding options and special finishes you need to customise your publication. And from just one copy.
                    </p>

                    <div class="flex items-center gap-6">
                        <!-- Feefo Rating -->
                        <div class="flex items-center gap-2 border border-gray-200 rounded p-2">
                            <div class="flex flex-col items-center justify-center px-2">
                                <span class="text-xl font-bold text-gray-800">4.5</span>
                                <div class="flex text-yellow-400 text-xs">
                                    ★★★★☆
                                </div>
                            </div>
                            <div class="text-xs font-bold text-gray-800 border-l border-gray-200 pl-2">
                                feefo<br>
                                <span class="font-normal text-gray-500">Read 80 reviews</span>
                            </div>
                        </div>

                        <!-- FSC Badge -->
                        <div class="flex items-center gap-2">
                            <div class="bg-green-800 text-white text-xs font-bold p-1 rounded-sm">FSC</div>
                            <p class="text-xs text-gray-500 max-w-[150px]">
                                The majority of our products are FSC® certified – explore them now!
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Image Slider -->
                <div class="relative group">
                    <div id="hero-slider" class="overflow-hidden rounded-lg">
                        <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=800&h=400&fit=crop" alt="Books Collage 1" class="w-full h-auto object-cover transition-opacity duration-500" id="slider-image">
                    </div>

                    <!-- Navigation Arrows -->
                    <button onclick="prevSlide()" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 p-2 rounded-full shadow hover:bg-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button onclick="nextSlide()" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 p-2 rounded-full shadow hover:bg-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Grid -->
    <section class="bg-white pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Choose by product type</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                @php
                    $books = [
                        ['title' => 'Paperback book', 'img' => 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=300&h=300&fit=crop'],
                        ['title' => 'Hardback book', 'img' => 'https://images.unsplash.com/photo-1543002588-bfa74002ed7e?w=300&h=300&fit=crop'],
                        ['title' => 'Special Finish Hardback', 'img' => 'https://images.unsplash.com/photo-1519681393784-d120267933ba?w=300&h=300&fit=crop'],
                        ['title' => 'Comics', 'img' => 'https://images.unsplash.com/photo-1612036782180-6f0b6cd846fe?w=300&h=300&fit=crop'],
                        ['title' => 'Self-published book', 'img' => 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=300&h=300&fit=crop'],
                        ['title' => 'Recipe book', 'img' => 'https://images.unsplash.com/photo-1592430599438-26d6e9a5b975?w=300&h=300&fit=crop'],
                        ['title' => 'Cookery Book', 'img' => 'https://images.unsplash.com/photo-1507048331197-7d4ac70811cf?w=300&h=300&fit=crop'],
                        ['title' => 'Pocket-sized book', 'img' => 'https://images.unsplash.com/photo-1512820790803-83ca734da794?w=300&h=300&fit=crop'],
                        ['title' => 'Lookbook', 'img' => 'https://images.unsplash.com/photo-1535905557558-afc4877a26fc?w=300&h=300&fit=crop'],
                        ['title' => 'Manga', 'img' => 'https://images.unsplash.com/photo-1608889825205-eebdb9fc5806?w=300&h=300&fit=crop'],

                    ];
                @endphp

                @foreach($books as $book)
                    <a href="#" class="group flex flex-col items-center text-center">
                        <div class="w-full aspect-square bg-gray-50 mb-3 overflow-hidden rounded-sm hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                            <img src="{{ $book['img'] }}" alt="{{ $book['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <h3 class="text-xs font-bold text-gray-800 group-hover:text-blue-600">{{ $book['title'] }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Others Category Grid -->
    <section class="bg-white pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Others Category</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                @php
                    $otherCategories = [
                        ['title' => 'Magazines', 'img' => 'https://images.unsplash.com/photo-1555485038-a63855aa7ba9?w=300&h=300&fit=crop'],
                        ['title' => 'Brochures', 'img' => 'https://images.unsplash.com/photo-1576670393302-bc2c44473f0f?w=300&h=300&fit=crop'],
                        ['title' => 'Flyers', 'img' => 'https://images.unsplash.com/photo-1586075010923-2dd4570fb338?w=300&h=300&fit=crop'],
                        ['title' => 'Posters', 'img' => 'https://images.unsplash.com/photo-1578301978693-85fa9c0320b9?w=300&h=300&fit=crop'],
                        ['title' => 'Business Cards', 'img' => 'https://images.unsplash.com/photo-1559526324-593bc073d938?w=300&h=300&fit=crop'],
                        ['title' => 'Calendars', 'img' => 'https://images.unsplash.com/photo-1506784983877-45594efa4cbe?w=300&h=300&fit=crop'],
                        ['title' => 'Stickers', 'img' => 'https://images.unsplash.com/photo-1572375992501-4b0892d50c69?w=300&h=300&fit=crop'],
                        ['title' => 'Packaging', 'img' => 'https://images.unsplash.com/photo-1605648916319-cf082f7524a1?w=300&h=300&fit=crop'],
                        ['title' => 'Envelopes', 'img' => 'https://images.unsplash.com/photo-1596275469886-439d6e6a62e3?w=300&h=300&fit=crop'],
                        ['title' => 'Letterheads', 'img' => 'https://images.unsplash.com/photo-1586075010923-2dd4570fb338?w=300&h=300&fit=crop'],
                    ];
                @endphp

                @foreach($otherCategories as $category)
                    <a href="#" class="group flex flex-col items-center text-center">
                        <div class="w-full aspect-square bg-gray-50 mb-3 overflow-hidden rounded-sm hover:shadow-lg transition-shadow duration-300 border border-gray-100">
                            <img src="{{ $category['img'] }}" alt="{{ $category['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <h3 class="text-xs font-bold text-gray-800 group-hover:text-blue-600">{{ $category['title'] }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Feature Section 1: You write it, we'll print it! -->
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?w=600&h=400&fit=crop" alt="Paperback Books" class="w-full rounded-lg shadow-sm">
                </div>
                <div class="order-1 md:order-2">
                    <h2 class="text-2xl font-bold text-blue-500 mb-4">You write it, we'll print it!</h2>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Easy to handle and available in custom dimensions, paperback books are the ideal solution for printing novels, comics, picture books and fairy tales.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section 2: Style or durability? Have both! -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-2xl font-bold text-blue-500 mb-4">Style or durability? Have both!</h2>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Choose hardback books for your most important publications. Whether it's a photo book, a thesis or the catalogue for your exhibition, a hardback book gives your work a sense of durability and authority.
                    </p>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?w=600&h=400&fit=crop" alt="Hardback Books" class="w-full rounded-lg shadow-sm">
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="bg-white py-12 border-t border-gray-100">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h3 class="text-lg font-bold text-gray-900 mb-6 flex items-center justify-center gap-2">
                Reviews verified by <span class="text-yellow-500">Feefo</span>
                <span class="bg-yellow-400 rounded-full w-2 h-2 inline-block"></span>
            </h3>

            <div class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-16">
                <div class="text-center">
                    <div class="flex justify-center text-yellow-400 text-xl mb-1">
                        ★★★★☆
                    </div>
                    <div class="text-sm font-medium text-gray-600">4.5 / 5</div>
                    <div class="text-xs text-gray-500 mt-1">80 reviews, 29 with comments</div>
                </div>

                <div class="flex-1 w-full max-w-xs">
                    <div class="flex items-center gap-4 text-xs text-gray-600 mb-1">
                        <span>Value for money</span>
                        <span class="ml-auto font-bold">4.2</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                        <div class="bg-yellow-400 h-1.5 rounded-full" style="width: 84%"></div>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <a href="#" class="inline-block px-6 py-2 bg-blue-600 text-white text-sm font-semibold rounded-full hover:bg-blue-700 transition">
                    Discover more
                </a>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@push('scripts')
<script>
    const images = [
        "https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=800&h=400&fit=crop",
        "https://images.unsplash.com/photo-1512820790803-83ca734da794?w=800&h=400&fit=crop",
        "https://images.unsplash.com/photo-1507842217343-583bb7270b66?w=800&h=400&fit=crop"
    ];
    let currentIndex = 0;
    const imgElement = document.getElementById('slider-image');

    function showSlide(index) {
        imgElement.style.opacity = '0';
        setTimeout(() => {
            imgElement.src = images[index];
            imgElement.onload = () => {
                imgElement.style.opacity = '1';
            };
        }, 200);
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % images.length;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showSlide(currentIndex);
    }
</script>
@endpush
