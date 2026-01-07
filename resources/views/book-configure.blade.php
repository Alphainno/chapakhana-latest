@extends('layouts.app')

@section('title', ($productTitle ?? 'Book') . ' | Chapakhana')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <!-- Breadcrumbs -->
    <div class="bg-white py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-xs text-gray-500 flex items-center gap-1">
                <a href="/" class="hover:text-blue-600 hover:underline">হোম</a>
                <span>/</span>
                <a href="/books" class="hover:text-blue-600 hover:underline">বই</a>
                <span>/</span>
                <span class="text-gray-800">{{ $productTitle ?? 'Book' }}</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-50 to-indigo-50 py-12 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="space-y-6">
                    <h1 class="text-4xl lg:text-5xl font-bold text-gray-900">
                        {{ $productTitle ?? 'Book' }}
                    </h1>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        আপনার প্রজেক্টকে অনন্য রূপ দিন আমাদের প্রিমিয়াম {{ strtolower($productTitle ?? 'বই') }} প্রিন্টিং এর মাধ্যমে। পেশাদার মান এবং টেকসই গুণমান সহ আপনার কন্টেন্ট প্রদর্শনের জন্য পারফেক্ট।
                    </p>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>প্রিমিয়াম মানের প্রিন্টিং</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>একাধিক বাইন্ডিং অপশন</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-green-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>৪০ পৃষ্ঠা থেকে উপলব্ধ</span>
                        </li>
                    </ul>
                    <div class="flex gap-4 pt-4">
                        <a href="#configure" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition shadow-lg hover:shadow-xl">
                            এখনই কনফিগার করুন
                        </a>
                        <a href="#details" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold border-2 border-blue-600 hover:bg-blue-50 transition">
                            বিস্তারিত দেখুন
                        </a>
                    </div>
                </div>
                <!-- Right Image -->
                <div class="relative">
                    <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=800&h=600&fit=crop" alt="{{ $productTitle ?? 'Book' }}" class="w-full h-full object-cover">
                    </div>
                    <!-- Decorative elements -->
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-blue-200 rounded-full opacity-50 blur-2xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-indigo-200 rounded-full opacity-50 blur-2xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Configuration Form -->
    <section class="bg-white py-16" id="configure">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">আপনার পণ্য কনফিগার করুন এবং কোট পান</h2>
                <p class="text-lg text-gray-600">আপনার প্রয়োজন অনুযায়ী অপশন নির্বাচন করুন</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column: Configuration Options -->
                <div class="lg:col-span-2 space-y-8">
                    
                    <!-- Binding -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-700 mb-6">Binding</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <button data-category="binding" data-price="8.50" class="binding-option group border border-gray-300 rounded-xl p-6 bg-white hover:border-blue-600 hover:shadow-lg transition text-center">
                                <div class="w-full h-40 rounded-lg bg-gray-50 border border-gray-200 flex items-center justify-center mb-4">
                                    <svg class="w-24 h-24 text-gray-400" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path d="M30 50 L45 65 Q55 60 65 50 L65 30"/>
                                        <line x1="35" y1="40" x2="35" y2="70"/>
                                        <line x1="40" y1="35" x2="40" y2="75"/>
                                    </svg>
                                </div>
                                <div class="text-base font-semibold text-blue-600">Saddle stitch</div>
                            </button>
                            <button data-category="binding" data-price="12.10" class="binding-option group border-2 border-blue-600 bg-blue-50 rounded-xl p-6 hover:shadow-lg transition text-center">
                                <div class="w-full h-40 rounded-lg bg-white border border-gray-200 flex items-center justify-center mb-4">
                                    <svg class="w-24 h-24 text-gray-400" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <rect x="25" y="20" width="40" height="60" rx="2" fill="white"/>
                                        <line x1="25" y1="20" x2="25" y2="80" stroke-width="3"/>
                                        <line x1="28" y1="25" x2="60" y2="25"/>
                                        <line x1="28" y1="32" x2="60" y2="32"/>
                                        <line x1="28" y1="39" x2="55" y2="39"/>
                                    </svg>
                                </div>
                                <div class="text-base font-bold text-blue-600">Paperback perfect</div>
                            </button>
                        </div>
                    </div>

                    <!-- Size -->
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-2xl font-bold text-gray-700">Size</h3>
                            <button class="text-gray-700 hover:text-gray-900 text-sm font-semibold flex items-center gap-1">
                                Show all
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="flex gap-4 overflow-x-auto pb-2">
                            <button data-category="size" data-price="1.20" class="price-option border-2 border-blue-600 bg-blue-50 rounded-lg p-4 text-center hover:shadow-md transition flex-shrink-0" style="min-width: 160px;">
                                <div class="w-20 h-24 mx-auto mb-3 bg-white rounded border-2 border-blue-600 flex items-center justify-center">
                                    <div class="text-gray-600 text-xs font-medium">8.5" x 11"</div>
                                </div>
                                <div class="text-sm font-bold text-blue-600">US Letter (8.5" x 11")</div>
                            </button>
                            <button data-category="size" data-price="0.80" class="price-option border border-gray-300 rounded-lg p-4 text-center hover:border-blue-600 transition flex-shrink-0" style="min-width: 160px;">
                                <div class="w-20 h-24 mx-auto mb-3 bg-white rounded border border-gray-300 flex items-center justify-center">
                                    <div class="text-gray-400 text-xs font-medium">8" x 10"</div>
                                </div>
                                <div class="text-sm font-semibold text-gray-700">Standard Portrait (8" x 10")</div>
                            </button>
                            <button data-category="size" data-price="0.60" class="price-option border border-gray-300 rounded-lg p-4 text-center hover:border-blue-600 transition flex-shrink-0" style="min-width: 160px;">
                                <div class="w-16 h-24 mx-auto mb-3 bg-white rounded border border-gray-300 flex items-center justify-center">
                                    <div class="text-gray-400 text-xs font-medium">6" x 9"</div>
                                </div>
                                <div class="text-sm font-semibold text-gray-700">US Trade (6" x 9")</div>
                            </button>
                            <button data-category="size" data-price="0.50" class="price-option border border-gray-300 rounded-lg p-4 text-center hover:border-blue-600 transition flex-shrink-0" style="min-width: 160px;">
                                <div class="w-14 h-24 mx-auto mb-3 bg-white rounded border border-gray-300 flex items-center justify-center">
                                    <div class="text-gray-400 text-xs font-medium">5.5" x 8.5"</div>
                                </div>
                                <div class="text-sm font-semibold text-gray-700">Digest (5.5" x 8.5")</div>
                            </button>
                            <button data-category="size" data-price="0.00" class="price-option border border-gray-300 rounded-lg p-4 text-center hover:border-blue-600 transition flex-shrink-0" style="min-width: 160px;">
                                <div class="w-12 h-12 mx-auto mb-3 bg-white rounded border border-gray-300 flex items-center justify-center">
                                    <div class="text-gray-400 text-xs font-medium">Custom</div>
                                </div>
                                <div class="text-sm font-semibold text-gray-700">Custom</div>
                            </button>
                        </div>
                    </div>

                    <!-- Printing orientation -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-700 mb-6">Printing orientation</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <button data-category="orientation" data-price="0.00" class="price-option border-2 border-blue-600 bg-blue-50 rounded-lg p-6 text-center hover:shadow-md transition">
                                <div class="w-24 h-32 mx-auto mb-4 bg-white rounded border-2 border-blue-600 flex items-center justify-center">
                                    <svg class="w-16 h-20 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                        <rect x="6" y="3" width="12" height="18" rx="1"/>
                                        <line x1="9" y1="7" x2="15" y2="7"/>
                                        <line x1="9" y1="10" x2="15" y2="10"/>
                                        <line x1="9" y1="13" x2="13" y2="13"/>
                                        <circle cx="15" cy="17" r="1.5" fill="currentColor"/>
                                        <path d="M11 16 L13 18 L11 18 Z" fill="currentColor"/>
                                    </svg>
                                </div>
                                <div class="text-lg font-bold text-blue-600">Portrait</div>
                            </button>
                            <button data-category="orientation" data-price="0.50" class="price-option border border-gray-300 rounded-lg p-6 text-center hover:border-blue-600 transition">
                                <div class="w-32 h-24 mx-auto mb-4 bg-white rounded border border-gray-300 flex items-center justify-center">
                                    <svg class="w-20 h-14 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                        <rect x="3" y="6" width="18" height="12" rx="1"/>
                                        <line x1="6" y1="9" x2="6" y2="15"/>
                                        <line x1="10" y1="9" x2="10" y2="15"/>
                                        <line x1="14" y1="9" x2="14" y2="12"/>
                                        <circle cx="18" cy="13" r="1.5" fill="currentColor"/>
                                    </svg>
                                </div>
                                <div class="text-lg font-semibold text-blue-600">Landscape</div>
                            </button>
                        </div>
                    </div>

                    <!-- Pages -->
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <h3 class="text-2xl font-bold text-gray-700">Pages</h3>
                            <button type="button" class="text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                        <div class="relative">
                            <input type="number" id="numPages" value="40" min="8" step="4" class="w-full px-6 py-4 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-lg font-medium text-blue-600 bg-white">
                        </div>
                    </div>

                    <!-- Paper Type -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-700 mb-4">Paper Type</h3>
                        <div class="border border-gray-300 rounded-lg overflow-hidden">
                            <div class="grid grid-cols-3 bg-gray-100">
                                <button class="px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-200 transition">Uncoated</button>
                                <button class="px-4 py-3 text-sm font-semibold text-gray-900 bg-white">Satin</button>
                                <button class="px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-200 transition">Gloss</button>
                            </div>
                            <div class="p-6 space-y-4">
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input type="radio" name="paper_type" value="70lb-satin" data-category="paper" data-price="0.50" class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                                    <div class="flex-1 flex items-center justify-between">
                                        <span class="text-base font-semibold text-blue-600">70 lb. Satin</span>
                                        <button type="button" class="text-gray-400 hover:text-gray-600">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input type="radio" name="paper_type" value="80lb-satin" checked data-category="paper" data-price="1.00" class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                                    <div class="flex-1 flex items-center justify-between">
                                        <span class="text-base font-semibold text-blue-600">80 lb. Satin</span>
                                        <button type="button" class="text-gray-400 hover:text-gray-600">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input type="radio" name="paper_type" value="100lb-satin" data-category="paper" data-price="1.50" class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                                    <div class="flex-1 flex items-center justify-between">
                                        <span class="text-base font-semibold text-blue-600">100 lb. Satin</span>
                                        <button type="button" class="text-gray-400 hover:text-gray-600">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Cover Paper Type -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-700 mb-4">Cover Paper Type</h3>
                        <div class="border border-gray-300 rounded-lg overflow-hidden">
                            <div class="grid grid-cols-3 bg-gray-100">
                                <button class="px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-200 transition">Uncoated</button>
                                <button class="px-4 py-3 text-sm font-semibold text-gray-900 bg-white">Satin</button>
                                <button class="px-4 py-3 text-sm font-medium text-gray-600 hover:bg-gray-200 transition">Gloss</button>
                            </div>
                            <div class="p-6 space-y-4">
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input type="radio" name="cover_paper_type" value="80lb-satin" data-category="cover" data-price="1.00" class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                                    <div class="flex-1 flex items-center justify-between">
                                        <span class="text-base font-semibold text-blue-600">80 lb. Satin</span>
                                        <button type="button" class="text-gray-400 hover:text-gray-600">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input type="radio" name="cover_paper_type" value="100lb-satin" checked data-category="cover" data-price="1.50" class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                                    <div class="flex-1 flex items-center justify-between">
                                        <span class="text-base font-semibold text-blue-600">100 lb. Satin</span>
                                        <button type="button" class="text-gray-400 hover:text-gray-600">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input type="radio" name="cover_paper_type" value="130lb-satin" data-category="cover" data-price="2.00" class="w-5 h-5 text-blue-600 border-gray-300 focus:ring-blue-500">
                                    <div class="flex-1 flex items-center justify-between">
                                        <span class="text-base font-semibold text-blue-600">130 lb. Satin</span>
                                        <button type="button" class="text-gray-400 hover:text-gray-600">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                            </svg>
                                        </button>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Coating -->
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <h3 class="text-2xl font-bold text-gray-700">Coating</h3>
                            <button type="button" class="text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                        <div class="relative">
                            <select id="coatingSelect" data-category="coating" data-price="2.50" class="w-full px-6 py-4 pr-12 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base font-medium text-blue-600 bg-white appearance-none">
                                <option value="matte" data-price="2.50" selected>Matte</option>
                                <option value="gloss" data-price="2.50">Gloss</option>
                                <option value="none" data-price="0.00">None</option>
                                <option value="soft-touch" data-price="3.50">Soft Touch</option>
                            </select>
                            <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Coating options -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-700 mb-4">Coating options</h3>
                        <div class="relative">
                            <input type="text" value="Cover Outside Only" readonly class="w-full px-6 py-4 pr-16 rounded-full border border-gray-300 bg-white text-base font-medium text-gray-700">
                            <button class="absolute right-4 top-1/2 -translate-y-1/2 bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700 transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Spine Size -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-700 mb-4">Spine Size (In)</h3>
                        <div class="relative">
                            <input type="text" value="0.11" readonly class="w-full px-6 py-4 pr-16 rounded-full border border-gray-300 bg-white text-base font-medium text-gray-700">
                            <button class="absolute right-4 top-1/2 -translate-y-1/2 bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700 transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Item Name -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-700 mb-4">Item name</h3>
                        <input type="text" placeholder="Name this print job" class="w-full px-6 py-4 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base placeholder-gray-400">
                    </div>

                    <!-- Select price and delivery date -->
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <h3 class="text-2xl font-bold text-gray-700">Select price and delivery date</h3>
                            <button type="button" class="text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Custom quantity -->
                    <div>
                        <h3 class="text-xl font-semibold text-gray-700 mb-4">Custom quantity</h3>
                        <input type="number" value="2" min="1" class="w-full px-6 py-4 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base font-medium text-blue-600">
                    </div>
                </div>

                <!-- Right Column - Price Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-gray-800 text-white rounded-lg overflow-hidden sticky top-24">
                        <!-- Header Tabs -->
                        <div class="grid grid-cols-2 border-b border-gray-700">
                            <button class="px-4 py-3 bg-gray-700 font-semibold text-sm hover:bg-gray-600">Job recap</button>
                            <button class="px-4 py-3 font-semibold text-sm hover:bg-gray-700">Job quotation</button>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-6">
                            <div class="space-y-4 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-300">Quantity</span>
                                    <span class="font-semibold">1</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-300">Estimated delivery date</span>
                                    <span class="font-semibold">01/07</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-300">Net price</span>
                                    <span id="netPrice" class="font-semibold">$15.80</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-300">Shipping costs</span>
                                    <span class="text-gray-400">Calculated at checkout</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-300">Sales Tax</span>
                                    <span class="text-gray-400">Calculated at checkout</span>
                                </div>
                                
                                <div class="border-t border-gray-700 pt-4 flex justify-between">
                                    <span class="font-semibold">Total quote</span>
                                    <span id="totalQuote" class="text-lg font-bold text-green-400">$15.80</span>
                                </div>
                            </div>

                            <button class="w-full mt-6 bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-full flex items-center justify-center gap-2 transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 6H6.28l-.31-1.243A1 1 0 005 4H3z"/>
                                </svg>
                                ADD TO BASKET
                            </button>

                            <p class="text-xs text-gray-400 mt-4">
                                • Free delivery on orders over $50<br>
                                • Estimated delivery: 5-6 working days<br>
                                • 100% satisfaction guaranteed
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Price aggregation across left-side options
        document.addEventListener('DOMContentLoaded', () => {
            const netPriceEl = document.getElementById('netPrice');
            const totalQuoteEl = document.getElementById('totalQuote');
            const numPagesInput = document.getElementById('numPages');

            const priceState = {
                binding: 0,
                size: 0,
                orientation: 0,
                paper: 0,
                cover: 0,
                coating: 0,
                pages: 0, // derived from page count
            };

            function format(val) {
                return `$${val.toFixed(2)}`;
            }

            function updateDisplay() {
                const total = Object.values(priceState).reduce((a, b) => a + b, 0);
                if (netPriceEl) netPriceEl.textContent = format(total);
                if (totalQuoteEl) totalQuoteEl.textContent = format(total);
            }

            // Handle generic option clicks (buttons)
            function wireButtons() {
                const buttons = document.querySelectorAll('[data-category][data-price]');
                buttons.forEach(btn => {
                    btn.addEventListener('click', () => {
                        const cat = btn.dataset.category;
                        const price = parseFloat(btn.dataset.price || '0');

                        // Toggle selected visual only for binding/size/orientation sets
                        if (cat) {
                            const siblings = document.querySelectorAll(`[data-category="${cat}"]`);
                            siblings.forEach(sib => {
                                sib.classList.remove('border-2', 'border-blue-600', 'bg-blue-50', 'shadow-md');
                                sib.classList.add('border', 'border-gray-200', 'bg-white');
                            });
                            btn.classList.remove('border', 'border-gray-200', 'bg-white');
                            btn.classList.add('border-2', 'border-blue-600', 'bg-blue-50', 'shadow-md');
                        }

                        priceState[cat] = price;
                        updateDisplay();
                    });
                });
            }

            // Handle radio inputs with data-price
            function wireRadios() {
                const radios = document.querySelectorAll('input[type="radio"][data-category][data-price]');
                radios.forEach(r => {
                    r.addEventListener('change', () => {
                        if (!r.checked) return;
                        const cat = r.dataset.category;
                        const price = parseFloat(r.dataset.price || '0');
                        priceState[cat] = price;
                        updateDisplay();
                    });
                });
            }

            // Coating select
            function wireCoating() {
                const select = document.getElementById('coatingSelect');
                if (!select) return;
                select.addEventListener('change', () => {
                    const option = select.selectedOptions[0];
                    const price = parseFloat(option?.dataset.price || '0');
                    priceState.coating = price;
                    updateDisplay();
                });
            }

            // Pages price: add a small increment per 4 pages over base 40
            function wirePages() {
                if (!numPagesInput) return;
                const handler = () => {
                    const pages = Math.max(40, parseInt(numPagesInput.value || '40', 10));
                    const steps = Math.max(0, Math.floor((pages - 40) / 4));
                    priceState.pages = steps * 0.50; // $0.50 per extra 4 pages
                    updateDisplay();
                };
                numPagesInput.addEventListener('input', handler);
                handler();
            }

            // Pricing table buttons
            function wirePriceDateOptions() {
                const priceDateButtons = document.querySelectorAll('.price-date-option');
                console.log('Found price buttons:', priceDateButtons.length);
                
                priceDateButtons.forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        e.preventDefault();
                        console.log('Clicked price button:', btn.dataset.price);
                        
                        // Clear all selected styles
                        priceDateButtons.forEach(b => {
                            b.classList.remove('bg-blue-600', 'text-white');
                            b.classList.add('bg-white', 'text-gray-900');
                        });

                        // Mark selected
                        btn.classList.remove('bg-white', 'text-gray-900');
                        btn.classList.add('bg-blue-600', 'text-white');

                        // Update price state with selected price
                        const selectedPrice = parseFloat(btn.dataset.price || '0');
                        console.log('Setting price to:', selectedPrice);

                        // Update display elements
                        if (netPriceEl) {
                            netPriceEl.textContent = format(selectedPrice);
                            console.log('Updated netPrice:', netPriceEl.textContent);
                        }
                        if (totalQuoteEl) {
                            totalQuoteEl.textContent = format(selectedPrice);
                            console.log('Updated totalQuote:', totalQuoteEl.textContent);
                        }
                    });
                });
            }

            wireButtons();
            wireRadios();
            wireCoating();
            wirePages();
            wirePriceDateOptions();

            // Initialize defaults based on preselected elements
            const preselectedButtons = document.querySelectorAll('.border-blue-600[data-category][data-price]');
            preselectedButtons.forEach(btn => {
                const cat = btn.dataset.category;
                const price = parseFloat(btn.dataset.price || '0');
                priceState[cat] = price;
            });

            const checkedRadios = document.querySelectorAll('input[type="radio"][data-category][data-price]:checked');
            checkedRadios.forEach(r => {
                priceState[r.dataset.category] = parseFloat(r.dataset.price || '0');
            });

            const select = document.getElementById('coatingSelect');
            if (select) {
                const option = select.selectedOptions[0];
                priceState.coating = parseFloat(option?.dataset.price || '0');
            }

            updateDisplay();
        });
    </script>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
