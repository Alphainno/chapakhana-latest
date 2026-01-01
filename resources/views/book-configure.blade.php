@extends('layouts.app')

@section('title', ($productTitle ?? 'Book') . ' | Chapakhana')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <!-- Product Header -->
    <section class="bg-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Left: Product Info -->
                <div>
                    <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">{{ $productTitle ?? 'Book' }}</h1>
                    <p class="text-gray-700 mb-6">
                        Give your project a unique look with our premium {{ strtolower($productTitle ?? 'book') }} printing. Perfect for showcasing your content with professional quality and durability.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-700 mb-6">
                        <li>• Premium quality printing</li>
                        <li>• Multiple binding options</li>
                        <li>• Available from 40 pages</li>
                    </ul>

                    <!-- Rating -->
                    <div class="flex items-center gap-4 p-4 border border-gray-200 rounded-lg mb-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-gray-900">4.5</div>
                            <div class="text-xs text-gray-600">Trustile</div>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-1 text-yellow-400 mb-1">
                                <span>★★★★★</span>
                            </div>
                            <p class="text-xs text-gray-600">602 reviews</p>
                        </div>
                        <img src="https://via.placeholder.com/60x60?text=Cert" alt="Certification" class="w-16 h-16">
                    </div>
                </div>

                <!-- Right: Product Image -->
                <div>
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=800&h=600&fit=crop" alt="Edged CMYK book" class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Configuration Form -->
    <section class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Configure your product and get a quote</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column: Configuration Options -->
                <div class="lg:col-span-2 space-y-8">
                    
                    <!-- Binding -->
                    <div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-6">Binding</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                            <button data-category="binding" data-price="12.10" class="binding-option group border border-gray-200 rounded-2xl p-4 bg-white hover:border-blue-500 hover:shadow-md transition text-left">
                                <div class="aspect-square rounded-xl bg-white border border-gray-200 flex items-center justify-center mb-4">
                                    <svg class="w-48 h-48 text-gray-500" viewBox="0 0 200 200" fill="none" stroke="currentColor" stroke-width="4">
                                        <path d="M40 100 L90 150"/>
                                        <path d="M90 150 Q120 130 150 110"/>
                                        <path d="M150 110 L150 60"/>
                                    </svg>
                                </div>
                                <div class="text-lg font-semibold text-blue-700">Saddle stitch</div>
                            </button>

                            <button data-category="binding" data-price="18.40" class="binding-option group border border-gray-200 rounded-2xl p-4 bg-white hover:border-blue-500 hover:shadow-md transition text-left">
                                <div class="aspect-square rounded-xl bg-white border border-gray-200 flex items-center justify-center mb-4">
                                    <svg class="w-48 h-48 text-gray-500" viewBox="0 0 200 200" fill="none" stroke="currentColor" stroke-width="4">
                                        <path d="M70 50 L130 110"/>
                                        <path d="M130 110 L130 170"/>
                                        <path d="M70 50 L70 150"/>
                                        <path d="M70 150 L130 170"/>
                                    </svg>
                                </div>
                                <div class="text-lg font-semibold text-blue-700">Paperback perfect</div>
                            </button>

                            <button data-category="binding" data-price="25.90" class="binding-option group border-2 border-blue-600 rounded-2xl p-4 bg-blue-50 shadow-md transition text-left">
                                <div class="aspect-square rounded-xl bg-white border-2 border-blue-100 flex items-center justify-center mb-4">
                                    <svg class="w-48 h-48 text-gray-500" viewBox="0 0 200 200" fill="none" stroke="currentColor" stroke-width="4">
                                        <path d="M80 60 L150 130"/>
                                        <path d="M80 60 L80 160"/>
                                        <path d="M150 130 L150 180"/>
                                        <path d="M80 160 L150 180"/>
                                        <path d="M150 130 L120 145"/>
                                    </svg>
                                </div>
                                <div class="text-lg font-semibold text-blue-700">Hardcover perfect</div>
                            </button>
                        </div>
                    </div>

                    <!-- Size -->
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-bold text-gray-900">Size</h3>
                            <button class="text-blue-600 hover:text-blue-700 text-sm">Show all</button>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3">
                            <button data-category="size" data-price="1.20" class="price-option border border-gray-300 rounded-lg p-4 text-center hover:border-blue-600 transition">
                                <div class="w-12 h-16 mx-auto mb-2 bg-gray-200 rounded border border-gray-400"></div>
                                <div class="text-xs font-medium">US Letter (8.5'' x 11'')</div>
                            </button>
                            <button data-category="size" data-price="0.80" class="price-option border border-gray-300 rounded-lg p-4 text-center hover:border-blue-600 transition">
                                <div class="w-12 h-16 mx-auto mb-2 bg-gray-200 rounded border border-gray-400"></div>
                                <div class="text-xs font-medium">Standard Portrait (8'' x 10'')</div>
                            </button>
                            <button data-category="size" data-price="0.60" class="price-option border border-gray-300 rounded-lg p-4 text-center hover:border-blue-600 transition">
                                <div class="w-10 h-16 mx-auto mb-2 bg-gray-200 rounded border border-gray-400"></div>
                                <div class="text-xs font-medium">US Trade (6'' x 9'')</div>
                            </button>
                            <button data-category="size" data-price="0.00" class="price-option border-2 border-blue-600 bg-blue-50 rounded-lg p-4 text-center">
                                <div class="w-10 h-14 mx-auto mb-2 bg-gray-300 rounded border-2 border-blue-400"></div>
                                <div class="text-xs font-bold text-blue-600">Digest (5.5'' x 8.5'')</div>
                            </button>
                            <button data-category="size" data-price="1.50" class="price-option border border-gray-300 rounded-lg p-4 text-center hover:border-blue-600 transition">
                                <div class="w-12 h-16 mx-auto mb-2 bg-gray-200 rounded border border-dashed border-gray-400 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                </div>
                                <div class="text-xs font-medium">Custom</div>
                            </button>
                        </div>
                    </div>

                    <!-- Orientation -->
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-bold text-gray-900">Orientation</h3>
                            <button class="text-blue-600 hover:text-blue-700">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm0-8a1 1 0 11-2 0 1 1 0 012 0zm4 4a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <button data-category="orientation" data-price="0.00" class="price-option border-2 border-blue-600 bg-blue-50 rounded-lg p-6 text-center hover:shadow-md transition">
                                <div class="w-16 h-20 mx-auto mb-3 bg-gray-200 rounded flex items-center justify-center">
                                    <svg class="w-8 h-10 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                        <rect x="7" y="4" width="10" height="16" stroke="currentColor" stroke-width="1.5" fill="none"/>
                                        <line x1="9" y1="7" x2="15" y2="7" stroke="currentColor" stroke-width="1"/>
                                        <line x1="9" y1="10" x2="15" y2="10" stroke="currentColor" stroke-width="1"/>
                                    </svg>
                                </div>
                                <div class="text-sm font-bold text-blue-600">Portrait</div>
                            </button>
                            <button data-category="orientation" data-price="0.50" class="price-option border border-gray-300 rounded-lg p-6 text-center hover:border-blue-600 transition">
                                <div class="w-20 h-14 mx-auto mb-3 bg-gray-200 rounded flex items-center justify-center">
                                    <svg class="w-10 h-7 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                        <rect x="4" y="8" width="16" height="10" stroke="currentColor" stroke-width="1.5" fill="none"/>
                                        <line x1="7" y1="10" x2="7" y2="16" stroke="currentColor" stroke-width="1"/>
                                        <line x1="12" y1="10" x2="12" y2="16" stroke="currentColor" stroke-width="1"/>
                                    </svg>
                                </div>
                                <div class="text-sm font-medium text-gray-900">Landscape</div>
                            </button>
                        </div>
                    </div>

                    <!-- Pages -->
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-bold text-gray-900">Pages</h3>
                            <button class="text-blue-600 hover:text-blue-700">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm0-8a1 1 0 11-2 0 1 1 0 012 0zm4 4a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                        <input type="number" id="numPages" value="40" min="40" step="4" class="w-full md:w-64 px-6 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Paper Type -->
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Paper Type</h3>
                        <div class="border border-gray-300 rounded-lg overflow-hidden">
                            <div class="grid grid-cols-3 border-b border-gray-300">
                                <button class="px-6 py-3 bg-gray-100 text-gray-900 font-medium text-sm hover:bg-gray-200 transition">Uncoated</button>
                                <button class="px-6 py-3 bg-white text-gray-900 font-medium text-sm hover:bg-gray-50 transition">Satin</button>
                                <button class="px-6 py-3 bg-gray-100 text-gray-900 font-medium text-sm hover:bg-gray-200 transition">Gloss</button>
                            </div>
                            <div class="p-6 space-y-3">
                                <label class="flex items-start gap-3 cursor-pointer">
                                    <input type="radio" name="paper_type" value="70lb-satin" data-category="paper" data-price="0.50" class="mt-1 text-blue-600">
                                    <div class="flex-1">
                                        <div class="text-sm font-bold text-blue-600">70 lb. Satin</div>
                                    </div>
                                    <button class="text-blue-600 hover:text-blue-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm0-8a1 1 0 11-2 0 1 1 0 012 0zm4 4a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </label>
                                <label class="flex items-start gap-3 cursor-pointer">
                                    <input type="radio" name="paper_type" value="80lb-satin" checked data-category="paper" data-price="1.00" class="mt-1 text-blue-600">
                                    <div class="flex-1">
                                        <div class="text-sm font-bold text-blue-600">80 lb. Satin</div>
                                    </div>
                                    <button class="text-blue-600 hover:text-blue-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm0-8a1 1 0 11-2 0 1 1 0 012 0zm4 4a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </label>
                                <label class="flex items-start gap-3 cursor-pointer">
                                    <input type="radio" name="paper_type" value="100lb-satin" data-category="paper" data-price="1.50" class="mt-1 text-blue-600">
                                    <div class="flex-1">
                                        <div class="text-sm font-bold text-blue-600">100 lb. Satin</div>
                                    </div>
                                    <button class="text-blue-600 hover:text-blue-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm0-8a1 1 0 11-2 0 1 1 0 012 0zm4 4a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Cover Paper Type -->
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Cover Paper Type</h3>
                        <div class="border border-gray-300 rounded-lg overflow-hidden">
                            <div class="grid grid-cols-3 border-b border-gray-300">
                                <button class="px-6 py-3 bg-gray-100 text-gray-900 font-medium text-sm hover:bg-gray-200 transition">Uncoated</button>
                                <button class="px-6 py-3 bg-white text-gray-900 font-medium text-sm hover:bg-gray-50 transition">Satin</button>
                                <button class="px-6 py-3 bg-gray-100 text-gray-900 font-medium text-sm hover:bg-gray-200 transition">Gloss</button>
                            </div>
                            <div class="p-6 space-y-3">
                                <label class="flex items-start gap-3 cursor-pointer">
                                    <input type="radio" name="cover_paper_type" value="80lb-satin" data-category="cover" data-price="1.00" class="mt-1 text-blue-600">
                                    <div class="flex-1">
                                        <div class="text-sm font-bold text-blue-600">80 lb. Satin</div>
                                    </div>
                                    <button class="text-blue-600 hover:text-blue-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm0-8a1 1 0 11-2 0 1 1 0 012 0zm4 4a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </label>
                                <label class="flex items-start gap-3 cursor-pointer">
                                    <input type="radio" name="cover_paper_type" value="100lb-satin" checked data-category="cover" data-price="1.50" class="mt-1 text-blue-600">
                                    <div class="flex-1">
                                        <div class="text-sm font-bold text-blue-600">100 lb. Satin</div>
                                    </div>
                                    <button class="text-blue-600 hover:text-blue-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm0-8a1 1 0 11-2 0 1 1 0 012 0zm4 4a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </label>
                                <label class="flex items-start gap-3 cursor-pointer">
                                    <input type="radio" name="cover_paper_type" value="130lb-satin" data-category="cover" data-price="2.00" class="mt-1 text-blue-600">
                                    <div class="flex-1">
                                        <div class="text-sm font-bold text-blue-600">130 lb. Satin</div>
                                    </div>
                                    <button class="text-blue-600 hover:text-blue-700">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm0-8a1 1 0 11-2 0 1 1 0 012 0zm4 4a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Coating -->
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-bold text-gray-900">Coating</h3>
                            <button class="text-blue-600 hover:text-blue-700">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm0-8a1 1 0 11-2 0 1 1 0 012 0zm4 4a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                        <div class="relative">
                            <select id="coatingSelect" class="w-full md:w-64 px-6 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 appearance-none bg-white">
                                <option value="matte" data-category="coating" data-price="0.80">Matte</option>
                                <option value="gloss" data-category="coating" data-price="0.60">Gloss</option>
                                <option value="none" data-category="coating" data-price="0.00">None</option>
                            </select>
                            <svg class="absolute right-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Coating Options -->
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Coating options</h3>
                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                            <input type="text" value="Cover Outside Only" readonly class="flex-1 px-6 py-3 rounded-full border border-gray-300 bg-gray-50 text-gray-700">
                            <button class="bg-blue-600 text-white p-3 rounded-full hover:bg-blue-700 transition self-start sm:self-auto">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586l1.293-1.293a1 1 0 111.414 1.414l-2 2a1 1 0 01-1.414 0l-2-2a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Spine Size -->
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Spine Size (In)</h3>
                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                            <input type="text" value="0.11" readonly class="flex-1 md:w-64 px-6 py-3 rounded-full border border-gray-300 bg-gray-50 text-gray-700">
                            <button class="bg-blue-600 text-white p-3 rounded-full hover:bg-blue-700 transition self-start sm:self-auto">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586l1.293-1.293a1 1 0 111.414 1.414l-2 2a1 1 0 01-1.414 0l-2-2a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Item Name -->
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Item name</h3>
                        <input type="text" placeholder="Name this print job" class="w-full md:w-96 px-6 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Price and Delivery -->
                    <div class="mt-12 space-y-6">
                        <div class="flex items-start justify-between gap-3">
                            <h3 class="text-2xl sm:text-3xl font-bold text-gray-900">Select price and delivery date</h3>
                            <button class="text-blue-600 hover:text-blue-700" aria-label="Price info">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm0-8a1 1 0 11-2 0 1 1 0 012 0zm0 4a1 1 0 00-1-1H9a1 1 0 000 2h1a1 1 0 001-1z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>

                        <div>
                            <h4 class="text-xl font-semibold text-gray-900 mb-3">Custom quantity</h4>
                            <input type="number" value="1" min="1" class="w-full sm:w-80 px-4 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div class="overflow-x-auto">
                            <div class="min-w-[720px] space-y-2">
                                <div class="grid grid-cols-4 gap-3 text-sm font-semibold text-gray-900">
                                    <div class="text-center">Quantity</div>
                                    <div class="text-center">Wednesday 01/07</div>
                                    <div class="text-center">Friday 01/09</div>
                                    <div class="text-center">Monday 01/12</div>
                                </div>
                                @php
                                    $quantities = [1,10,25,50,100,150,250,500,750,1000,1500,2000];
                                    $prices = [
                                        ["$16.10", "$15.40", "$14.00"],
                                        ["$48.52", "$46.41", "$42.19"],
                                        ["$102.86", "$98.39", "$89.44"],
                                        ["$193.41", "$185.00", "$168.19"],
                                        ["$374.53", "$358.24", "$325.67"],
                                        ["$537.12", "$513.76", "$467.06"],
                                        ["$826.08", "$790.16", "$718.33"],
                                        ["$1,458.74", "$1,395.32", "$1,268.47"],
                                        ["$2,046.74", "$1,957.75", "$1,779.77"],
                                        ["$2,544.18", "$2,433.57", "$2,212.33"],
                                        ["$3,811.97", "$3,646.23", "$3,314.75"],
                                        ["$5,079.75", "$4,858.89", "$4,417.18"],
                                    ];
                                @endphp
                                @foreach($quantities as $index => $qty)
                                    <div class="grid grid-cols-4 gap-3">
                                        <div class="h-14 rounded-xl border border-gray-200 bg-blue-50 flex items-center justify-center font-semibold text-gray-900">{{ $qty }}</div>
                                        @foreach($prices[$index] as $priceIndex => $price)
                                            <button data-qty="{{ $qty }}" data-date="{{ ['Wednesday 01/07', 'Friday 01/09', 'Monday 01/12'][$priceIndex] }}" data-price="{{ trim($price, '$') }}" class="price-date-option h-14 rounded-xl border border-gray-200 flex items-center justify-center text-sm font-semibold {{ $index === 0 && $priceIndex === 0 ? 'bg-blue-600 text-white' : 'bg-white text-gray-900 hover:border-blue-400 transition' }}">{{ $price }}</button>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-2">Promocode</h4>
                                <div class="flex flex-col sm:flex-row gap-3">
                                    <input type="text" placeholder="Enter your promocode here" class="flex-1 px-4 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <button class="px-6 py-3 rounded-full bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">Apply</button>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-gray-900 mb-2">Delivery postcode</h4>
                                <div class="flex flex-col sm:flex-row gap-3">
                                    <input type="text" placeholder="Enter your postcode" class="flex-1 px-4 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <button class="px-6 py-3 rounded-full bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">CHECK</button>
                                </div>
                            </div>
                        </div>

                        <div class="bg-amber-50 rounded-2xl p-6 md:p-8 grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                            <div class="space-y-3">
                                <h5 class="text-lg font-bold text-gray-900">Where can you upload your file?</h5>
                                <p class="text-sm text-gray-800">First, complete your order. Then you can access the upload area in one of the following ways:</p>
                                <ul class="list-disc list-inside text-sm text-gray-800 space-y-1">
                                    <li>via the link on the order confirmation page</li>
                                    <li>by clicking "Upload Area" at the top right of the page</li>
                                </ul>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <button class="px-6 py-3 rounded-full bg-black text-white font-semibold hover:bg-gray-900 transition">Instructions</button>
                                <button class="px-6 py-3 rounded-full bg-black text-white font-semibold hover:bg-gray-900 transition">Template</button>
                            </div>
                        </div>

                        <label class="flex items-start gap-3 text-lg font-bold text-gray-900">
                            <input type="checkbox" class="mt-1 w-5 h-5 text-blue-600 rounded border-gray-300 focus:ring-blue-500">
                            <span>PRO File Check &amp; Fix (+ $5.00)</span>
                        </label>
                    </div>

                </div>

                <!-- Right Column: Job Recap -->
                <div>
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
                                    <span id="netPrice" class="font-semibold">$25.90</span>
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
                                    <span id="totalQuote" class="text-lg font-bold text-green-400">$25.90</span>
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
    <!-- Reviews Section -->
    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">Reviews verified by Feefo</h2>
                <div class="flex items-center justify-center gap-4 mb-4">
                    <div class="flex items-center gap-2">
                        <span class="text-3xl font-bold">4.5</span>
                        <div class="text-yellow-400">★★★★★</div>
                    </div>
                    <div class="text-sm text-gray-600">602 reviews: 574 with comments</div>
                </div>

                <!-- Rating Bars -->
                <div class="max-w-md mx-auto mb-6">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-sm w-12">5★</span>
                        <div class="flex-1 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-full bg-yellow-400" style="width: 85%"></div>
                        </div>
                        <span class="text-sm w-12 text-right">85%</span>
                    </div>
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-sm w-12">4★</span>
                        <div class="flex-1 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-full bg-yellow-400" style="width: 10%"></div>
                        </div>
                        <span class="text-sm w-12 text-right">10%</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-sm w-12">3★</span>
                        <div class="flex-1 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-full bg-yellow-400" style="width: 5%"></div>
                        </div>
                        <span class="text-sm w-12 text-right">5%</span>
                    </div>
                </div>

                <button class="bg-blue-600 text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-blue-700">Read more reviews</button>
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
