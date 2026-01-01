@extends('layouts.app')

@section('title', ($productTitle ?? 'Book') . ' | Chapakhana')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <!-- Breadcrumb -->
    <section class="bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="text-sm text-gray-600 flex items-center gap-2">
                <a href="/" class="hover:text-gray-900">Home</a>
                <span>/</span>
                <a href="/books" class="hover:text-gray-900">Magazines, Books & Catalogs</a>
                <span>/</span>
                <a href="#" class="hover:text-gray-900">Books</a>
                <span>/</span>
                <span class="text-gray-900">{{ $productTitle ?? 'Book' }}</span>
            </nav>
        </div>
    </section>

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
    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column: Configuration Options -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Configure your product and get a quote</h2>

                        <!-- Binding -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-900 mb-3">Binding</label>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                <button type="button" data-option="binding" data-value="perfect" data-price="0" class="option-btn border-2 border-blue-600 rounded-lg p-4 hover:bg-blue-50 transition">
                                    <div class="aspect-square mb-2 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <rect x="4" y="4" width="16" height="16" stroke-width="1.5"/>
                                        </svg>
                                    </div>
                                    <div class="text-xs font-medium text-center">Perfect bound</div>
                                </button>
                                <button type="button" data-option="binding" data-value="saddle" data-price="5" class="option-btn border-2 border-gray-200 rounded-lg p-4 hover:bg-gray-50 transition">
                                    <div class="aspect-square mb-2 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <rect x="4" y="4" width="16" height="16" stroke-width="1.5"/>
                                            <line x1="4" y1="12" x2="20" y2="12" stroke-width="1.5"/>
                                        </svg>
                                    </div>
                                    <div class="text-xs font-medium text-center">Saddle stitch</div>
                                </button>
                            </div>
                        </div>

                        <!-- Format -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-900 mb-3">Format <span class="text-blue-600">More ℹ</span></label>
                            <div class="grid grid-cols-2 sm:grid-cols-5 gap-3">
                                <button type="button" data-option="format" data-value="square" data-price="3" class="option-btn border border-gray-300 rounded-lg p-3 text-center hover:border-blue-600 transition">
                                    <div class="text-sm font-medium">Square format</div>
                                    <div class="text-xs text-gray-600">210 x 210 mm</div>
                                </button>
                                <button type="button" data-option="format" data-value="a5" data-price="0" class="option-btn border-2 border-blue-600 rounded-lg p-3 text-center bg-blue-50">
                                    <div class="text-sm font-medium">Small A5</div>
                                    <div class="text-xs text-gray-600">148 x 210 mm</div>
                                </button>
                                <button type="button" data-option="format" data-value="a4" data-price="8" class="option-btn border border-gray-300 rounded-lg p-3 text-center hover:border-blue-600 transition">
                                    <div class="text-sm font-medium">Large A4</div>
                                    <div class="text-xs text-gray-600">210 x 297 mm</div>
                                </button>
                                <button type="button" data-option="format" data-value="letter" data-price="7" class="option-btn border border-gray-300 rounded-lg p-3 text-center hover:border-blue-600 transition">
                                    <div class="text-sm font-medium">US Letter</div>
                                    <div class="text-xs text-gray-600">216 x 279 mm</div>
                                </button>
                                <button type="button" data-option="format" data-value="custom" data-price="12" class="option-btn border border-gray-300 rounded-lg p-3 text-center hover:border-blue-600 transition">
                                    <div class="text-sm font-medium">Custom</div>
                                </button>
                            </div>
                        </div>

                        <!-- Finishing orientation -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-900 mb-3">Finishing orientation</label>
                            <div class="grid grid-cols-2 gap-4">
                                <button class="border-2 border-blue-600 rounded-lg p-4 hover:bg-blue-50 transition">
                                    <div class="text-sm font-medium text-center">Portrait</div>
                                </button>
                                <button class="border-2 border-gray-200 rounded-lg p-4 hover:bg-gray-50 transition">
                                    <div class="text-sm font-medium text-center">Landscape</div>
                                </button>
                            </div>
                        </div>

                        <!-- Width and Height -->
                        <div class="mb-8 grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-900 mb-2">Width (mm) <span class="text-blue-600">ℹ</span></label>
                                <input type="number" value="148" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-900 mb-2">Height (mm) <span class="text-blue-600">ℹ</span></label>
                                <input type="number" value="210" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>

                        <!-- Number of pages -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-900 mb-2">Number of pages (cover included) <span class="text-blue-600">ℹ</span></label>
                            <input type="number" id="numPages" value="40" min="40" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <!-- Black and white printing -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-900 mb-3">Black and white printing of inside pages</label>
                            <div class="flex items-center gap-6">
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="bw_printing" value="yes" class="w-4 h-4 text-blue-600">
                                    <span class="text-sm">Yes</span>
                                </label>
                                <label class="flex items-center gap-2">
                                    <input type="radio" name="bw_printing" value="no" checked class="w-4 h-4 text-blue-600">
                                    <span class="text-sm">No</span>
                                </label>
                            </div>
                        </div>

                        <!-- Cover type -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-900 mb-3">Cover type</label>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                                <button type="button" data-option="cover" data-value="soft" data-price="0" class="option-btn border-2 border-blue-600 rounded-lg p-4 hover:bg-blue-50 transition">
                                    <div class="aspect-square mb-2 bg-gray-100 rounded flex items-center justify-center">
                                        <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M4 4h16v16H4z"/>
                                        </svg>
                                    </div>
                                    <div class="text-xs font-medium text-center">Soft cover</div>
                                </button>
                                <button type="button" data-option="cover" data-value="hard" data-price="15" class="option-btn border-2 border-gray-200 rounded-lg p-4 hover:bg-gray-50 transition">
                                    <div class="aspect-square mb-2 bg-gray-100 rounded flex items-center justify-center">
                                        <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M4 4h16v16H4z"/>
                                        </svg>
                                    </div>
                                    <div class="text-xs font-medium text-center">Hard cover</div>
                                </button>
                            </div>
                        </div>

                        <!-- Paper (inside pages) -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-900 mb-3">Paper (inside pages)</label>
                            <div class="space-y-3">
                                <label class="flex items-start gap-3 p-3 border-2 border-blue-600 rounded-lg bg-blue-50 cursor-pointer">
                                    <input type="radio" name="paper_inside" value="satin" data-price="0" checked class="mt-1 paper-option">
                                    <div class="flex-1">
                                        <div class="font-medium text-sm">Satin coated, White (90 / 115 gsm)</div>
                                        <div class="text-xs text-gray-600">Semi-glossy finish with a velvety feel. Ideal for high-quality images and text.</div>
                                    </div>
                                </label>
                                <label class="flex items-start gap-3 p-3 border border-gray-300 rounded-lg cursor-pointer hover:border-blue-600">
                                    <input type="radio" name="paper_inside" value="uncoated" data-price="2" class="mt-1 paper-option">
                                    <div class="flex-1">
                                        <div class="font-medium text-sm">Offset uncoated, White (80 gsm)</div>
                                        <div class="text-xs text-gray-600">Natural paper surface, perfect for writing notes.</div>
                                    </div>
                                </label>
                                <label class="flex items-start gap-3 p-3 border border-gray-300 rounded-lg cursor-pointer hover:border-blue-600">
                                    <input type="radio" name="paper_inside" value="recycled" data-price="4" class="mt-1 paper-option">
                                    <div class="flex-1">
                                        <div class="font-medium text-sm">Recycled, White (80 gsm)</div>
                                        <div class="text-xs text-gray-600">Eco-friendly recycled paper with natural texture.</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Paper (cover) -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-900 mb-3">Paper (cover)</label>
                            <div class="space-y-3">
                                <label class="flex items-start gap-3 p-3 border-2 border-blue-600 rounded-lg bg-blue-50 cursor-pointer">
                                    <input type="radio" name="paper_cover" value="satin" checked class="mt-1">
                                    <div class="flex-1">
                                        <div class="font-medium text-sm">Coated, Satin coated (250 gsm)</div>
                                        <div class="text-xs text-gray-600">Premium finish for vibrant cover designs.</div>
                                    </div>
                                </label>
                                <label class="flex items-start gap-3 p-3 border border-gray-300 rounded-lg cursor-pointer hover:border-blue-600">
                                    <input type="radio" name="paper_cover" value="uncoated">
                                    <div class="flex-1">
                                        <div class="font-medium text-sm">Uncoated, Natural (250 gsm)</div>
                                        <div class="text-xs text-gray-600">Textured surface with natural feel.</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Weight -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-900 mb-3">Weight <span class="text-blue-600">ℹ</span></label>
                            <div class="grid grid-cols-2 gap-4">
                                <button type="button" data-option="weight" data-value="115" data-price="0" class="option-btn border-2 border-blue-600 rounded-lg p-3 text-center bg-blue-50">
                                    <div class="text-sm font-medium">115 gsm</div>
                                </button>
                                <button type="button" data-option="weight" data-value="135" data-price="6" class="option-btn border border-gray-300 rounded-lg p-3 text-center hover:border-blue-600 transition">
                                    <div class="text-sm font-medium">135 gsm</div>
                                </button>
                            </div>
                        </div>

                        <!-- Lamination -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-900 mb-3">Lamination</label>
                            <div class="grid grid-cols-2 gap-4">
                                <button type="button" data-option="lamination" data-value="matt" data-price="5" class="option-btn border-2 border-blue-600 rounded-lg p-3 text-center bg-blue-50">
                                    <div class="text-sm font-medium">Matt</div>
                                </button>
                                <button type="button" data-option="lamination" data-value="none" data-price="0" class="option-btn border border-gray-300 rounded-lg p-3 text-center hover:border-blue-600 transition">
                                    <div class="text-sm font-medium">None</div>
                                </button>
                            </div>
                        </div>

                        <!-- Spine (mm) -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-900 mb-2">Spine (mm)</label>
                            <input type="number" value="4" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" readonly>
                        </div>

                        <!-- Special finish for cover -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-900 mb-3">Special finish for cover <span class="text-blue-600">ℹ</span></label>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                <button class="border-2 border-blue-600 rounded-lg p-4 hover:bg-blue-50 transition">
                                    <div class="aspect-square mb-2 bg-gray-100 rounded-full"></div>
                                    <div class="text-xs font-medium text-center">None</div>
                                </button>
                                <button class="border border-gray-300 rounded-lg p-4 hover:bg-gray-50 transition">
                                    <div class="aspect-square mb-2 bg-yellow-100 rounded-full"></div>
                                    <div class="text-xs font-medium text-center">Gold foil</div>
                                </button>
                                <button class="border border-gray-300 rounded-lg p-4 hover:bg-gray-50 transition">
                                    <div class="aspect-square mb-2 bg-gray-300 rounded-full"></div>
                                    <div class="text-xs font-medium text-center">Silver foil</div>
                                </button>
                            </div>
                        </div>

                        <!-- Spine name -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-900 mb-2">Spine name</label>
                            <input type="text" placeholder="Enter spine text" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Price and Delivery -->
                    <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Select price and delivery date</h3>

                        <!-- Custom quantity -->
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-900 mb-2">Custom quantity</label>
                            <div class="flex items-center gap-3">
                                <button class="w-10 h-10 border border-gray-300 rounded-lg flex items-center justify-center hover:bg-gray-50">−</button>
                                <input type="number" value="1" min="1" class="w-24 border border-gray-300 rounded-lg px-3 py-2 text-center focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <button class="w-10 h-10 border border-gray-300 rounded-lg flex items-center justify-center hover:bg-gray-50">+</button>
                            </div>
                        </div>

                        <!-- Pricing Table -->
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse text-sm">
                                <thead>
                                    <tr class="border-b-2 border-gray-300">
                                        <th class="text-left py-3 px-2 font-semibold">Quantity</th>
                                        <th class="text-center py-3 px-2 font-semibold">
                                            <div>5-6 days</div>
                                            <div class="text-xs font-normal text-gray-600">Production</div>
                                        </th>
                                        <th class="text-center py-3 px-2 font-semibold">
                                            <div>3-4 days</div>
                                            <div class="text-xs font-normal text-gray-600">Express</div>
                                        </th>
                                        <th class="text-center py-3 px-2 font-semibold">
                                            <div>24h</div>
                                            <div class="text-xs font-normal text-gray-600">Superexpress</div>
                                        </th>
                                        <th class="text-center py-3 px-2 font-semibold bg-orange-100">
                                            <div>Overnight</div>
                                            <div class="text-xs font-normal text-gray-600">Next day</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                                        <td class="py-3 px-2">1</td>
                                        <td class="py-3 px-2 text-center">£58.79</td>
                                        <td class="py-3 px-2 text-center">£80.77</td>
                                        <td class="py-3 px-2 text-center">£94.24</td>
                                        <td class="py-3 px-2 text-center">Unavailable</td>
                                    </tr>
                                    <tr class="border-b border-gray-200 bg-blue-50">
                                        <td class="py-3 px-2 font-semibold">5</td>
                                        <td class="py-3 px-2 text-center">
                                            <button class="bg-blue-600 text-white px-4 py-2 rounded-full text-xs font-semibold hover:bg-blue-700">£44.16 Add to basket</button>
                                        </td>
                                        <td class="py-3 px-2 text-center">£55.70</td>
                                        <td class="py-3 px-2 text-center">£64.64</td>
                                        <td class="py-3 px-2 text-center bg-orange-50">£89.00</td>
                                    </tr>
                                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                                        <td class="py-3 px-2">10</td>
                                        <td class="py-3 px-2 text-center">£29.38</td>
                                        <td class="py-3 px-2 text-center">£37.13</td>
                                        <td class="py-3 px-2 text-center">£43.08</td>
                                        <td class="py-3 px-2 text-center">£59.33 <span class="text-orange-600">+114%</span></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                                        <td class="py-3 px-2">25</td>
                                        <td class="py-3 px-2 text-center">£20.10</td>
                                        <td class="py-3 px-2 text-center">£25.39</td>
                                        <td class="py-3 px-2 text-center">£29.47</td>
                                        <td class="py-3 px-2 text-center">£40.55 <span class="text-orange-600">+102%</span></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                                        <td class="py-3 px-2">50</td>
                                        <td class="py-3 px-2 text-center">£16.10</td>
                                        <td class="py-3 px-2 text-center">£20.34</td>
                                        <td class="py-3 px-2 text-center">£23.60</td>
                                        <td class="py-3 px-2 text-center">£32.48 <span class="text-orange-600">+102%</span></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                                        <td class="py-3 px-2">75</td>
                                        <td class="py-3 px-2 text-center">£14.99</td>
                                        <td class="py-3 px-2 text-center">£18.93</td>
                                        <td class="py-3 px-2 text-center">£21.97</td>
                                        <td class="py-3 px-2 text-center">£30.24 <span class="text-orange-600">+102%</span></td>
                                    </tr>
                                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                                        <td class="py-3 px-2">100</td>
                                        <td class="py-3 px-2 text-center">£14.42</td>
                                        <td class="py-3 px-2 text-center">£18.21</td>
                                        <td class="py-3 px-2 text-center">£21.14</td>
                                        <td class="py-3 px-2 text-center">£29.09 <span class="text-orange-600">+102%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Delivery Postcodes -->
                    <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="text-sm font-semibold text-gray-900 mb-3">Production postcode</h4>
                                <p class="text-xs text-gray-600 mb-2">We ship your products from</p>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-blue-700">UK</button>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-gray-900 mb-3">Delivery postcode</h4>
                                <p class="text-xs text-gray-600 mb-2">We ship your order to</p>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-blue-700">UK</button>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Info -->
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">How would you like to proceed with this print file?</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="border border-gray-200 rounded-lg p-6 text-center">
                                <svg class="w-16 h-16 mx-auto mb-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                <h4 class="font-semibold text-gray-900 mb-2">Request a quote</h4>
                                <p class="text-sm text-gray-600 mb-4">Get a detailed quote without purchasing. We'll send you a personalized offer.</p>
                                <button class="bg-blue-600 text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-blue-700">Request quote</button>
                            </div>
                            <div class="border border-gray-200 rounded-lg p-6 text-center bg-green-50">
                                <svg class="w-16 h-16 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <h4 class="font-semibold text-gray-900 mb-2">Ask a designer</h4>
                                <p class="text-sm text-gray-600 mb-4">Need help with your design? Our experts are here to help you create the perfect book.</p>
                                <button class="bg-green-600 text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-green-700">Contact designer</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Price Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-gray-800 text-white rounded-lg shadow-lg p-6 sticky top-4">
                        <h3 class="text-lg font-bold mb-4">YOUR QUOTE</h3>

                        <div class="space-y-3 mb-6 text-sm">
                            <div class="flex justify-between">
                                <span>Quantity</span>
                                <span id="summaryQuantity">5</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Base price</span>
                                <span id="basePrice">£25.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Options total</span>
                                <span id="optionsPrice">£12.54</span>
                            </div>
                            <div class="flex justify-between">
                                <span>VAT (20%)</span>
                                <span id="vatAmount">£7.51</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Shipping</span>
                                <span id="shippingCost">£0.00</span>
                            </div>
                            <div class="border-t border-gray-600 pt-3 flex justify-between text-lg font-bold">
                                <span>Total</span>
                                <span id="totalPrice">£44.16</span>
                            </div>
                        </div>

                        <button class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition flex items-center justify-center gap-2 mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            Add to basket
                        </button>

                        <div class="text-xs text-gray-300 space-y-2">
                            <p>• Free delivery on orders over £50</p>
                            <p>• Estimated delivery: 5-6 working days</p>
                            <p>• 100% satisfaction guaranteed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Price calculation system
        const pricing = {
            basePrice: 25.00,
            selectedOptions: {
                binding: { value: 'perfect', price: 0 },
                format: { value: 'a5', price: 0 },
                cover: { value: 'soft', price: 0 },
                paperInside: { value: 'satin', price: 0 },
                weight: { value: '115', price: 0 },
                lamination: { value: 'matt', price: 5 }
            },
            quantity: 5,
            vatRate: 0.20,
            freeShippingThreshold: 50
        };

        function calculatePrice() {
            // Get number of pages
            const numPages = parseInt(document.getElementById('numPages')?.value || 40);
            const pageMultiplier = numPages / 40; // Base is 40 pages
            
            // Calculate base with pages
            let base = pricing.basePrice * pageMultiplier;
            
            // Add options
            let optionsTotal = 0;
            for (let key in pricing.selectedOptions) {
                optionsTotal += pricing.selectedOptions[key].price;
            }
            
            // Calculate subtotal
            const subtotal = (base + optionsTotal) * pricing.quantity;
            
            // Calculate VAT
            const vat = subtotal * pricing.vatRate;
            
            // Calculate shipping
            const shipping = subtotal >= pricing.freeShippingThreshold ? 0 : 5.00;
            
            // Calculate total
            const total = subtotal + vat + shipping;
            
            // Update UI
            document.getElementById('basePrice').textContent = `£${base.toFixed(2)}`;
            document.getElementById('optionsPrice').textContent = `£${optionsTotal.toFixed(2)}`;
            document.getElementById('summaryQuantity').textContent = pricing.quantity;
            document.getElementById('vatAmount').textContent = `£${vat.toFixed(2)}`;
            document.getElementById('shippingCost').textContent = `£${shipping.toFixed(2)}`;
            document.getElementById('totalPrice').textContent = `£${total.toFixed(2)}`;
        }

        // Handle option button clicks
        document.addEventListener('DOMContentLoaded', function() {
            // Option buttons
            document.querySelectorAll('.option-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const option = this.dataset.option;
                    const value = this.dataset.value;
                    const price = parseFloat(this.dataset.price);
                    
                    // Update selected state
                    document.querySelectorAll(`[data-option="${option}"]`).forEach(b => {
                        b.classList.remove('border-blue-600', 'bg-blue-50');
                        b.classList.add('border-gray-200');
                    });
                    this.classList.remove('border-gray-200');
                    this.classList.add('border-blue-600', 'bg-blue-50');
                    
                    // Update pricing
                    pricing.selectedOptions[option] = { value, price };
                    calculatePrice();
                });
            });

            // Paper options (radio buttons)
            document.querySelectorAll('.paper-option').forEach(radio => {
                radio.addEventListener('change', function() {
                    const price = parseFloat(this.dataset.price);
                    pricing.selectedOptions.paperInside = { value: this.value, price };
                    calculatePrice();
                });
            });

            // Number of pages
            const numPagesInput = document.getElementById('numPages');
            if (numPagesInput) {
                numPagesInput.addEventListener('input', calculatePrice);
            }

            // Initial calculation
            calculatePrice();
        });
    </script>

    <!-- PRO File Check Section -->
    <section class="bg-blue-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">PRO File Check: 1 in 5 is €40.00</h2>
                <p class="text-gray-600">Upload your files and let our experts check them before printing</p>
            </div>
        </div>
    </section>

    <!-- Help Section -->
    <section class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <svg class="w-16 h-16 mx-auto mb-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Can't find what you're looking for?</h2>
                <p class="text-gray-600 mb-6">Our team of printing experts is ready to help you find the perfect solution for your project.</p>
                <button class="bg-blue-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-blue-700 transition">Contact us</button>
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
@endsection

@section('footer')
    @include('partials.footer')
@endsection
