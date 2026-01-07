@extends('layouts.app')

@section('title', ($productTitle ?? 'Invitation & Stationery') . ' | Chapakhana')

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
                <a href="/postcards-invitations" class="hover:text-blue-600 hover:underline">নিমন্ত্রণপত্র</a>
                <span>/</span>
                <span class="text-gray-800">{{ $productTitle ?? 'Invitations' }}</span>
            </nav>
        </div>
    </div>

    <!-- Hero Banner -->
    <section class="bg-purple-50 py-16 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left Content -->
                <div class="space-y-8">
                    <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        {{ $productTitle ?? 'Invitation & Stationery' }}
                    </h1>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Create beautiful invitations and stationery that make a lasting impression. Choose from various sizes, papers, and printing options.
                    </p>
                    <div class="flex flex-wrap gap-6">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 rounded-full bg-green-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="text-base text-gray-800 font-medium">Premium Quality</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 rounded-full bg-green-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="text-base text-gray-800 font-medium">Fast Delivery</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 rounded-full bg-green-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="text-base text-gray-800 font-medium">Custom Design Support</span>
                        </div>
                    </div>
                </div>
                <!-- Right Image -->
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?w=800&h=600&fit=crop" 
                             alt="{{ $productTitle ?? 'Invitations' }}" 
                             class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Configure Your Product Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Configure your product and get a quote</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column - Configuration Options -->
                <div class="lg:col-span-2 space-y-8">
                    
                    <!-- Size Section -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Size</h3>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                            <div class="border-2 border-gray-200 rounded-lg p-4 cursor-pointer hover:border-blue-500 transition-colors flex flex-col items-center justify-center aspect-square">
                                <div class="w-12 h-16 border-2 border-gray-400 rounded mb-2"></div>
                                <span class="text-sm font-medium text-gray-700">3.8" x 7.8"</span>
                            </div>
                            <div class="border-2 border-blue-600 bg-blue-50 rounded-lg p-4 cursor-pointer hover:border-blue-500 transition-colors flex flex-col items-center justify-center aspect-square">
                                <div class="w-12 h-16 border-2 border-blue-600 rounded mb-2"></div>
                                <span class="text-sm font-medium text-blue-600">4" x 5.5"</span>
                            </div>
                            <div class="border-2 border-gray-200 rounded-lg p-4 cursor-pointer hover:border-blue-500 transition-colors flex flex-col items-center justify-center aspect-square">
                                <div class="w-14 h-16 border-2 border-gray-400 rounded mb-2"></div>
                                <span class="text-sm font-medium text-gray-700">5.5" x 8.5"</span>
                            </div>
                            <div class="border-2 border-gray-200 rounded-lg p-4 cursor-pointer hover:border-blue-500 transition-colors flex flex-col items-center justify-center aspect-square">
                                <div class="w-16 h-20 border-2 border-gray-400 rounded mb-2"></div>
                                <span class="text-sm font-medium text-gray-700">8.5" x 11"</span>
                            </div>
                        </div>
                    </div>

                    <!-- Orientation Section -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Orientation</h3>
                        <div class="border-2 border-blue-600 bg-blue-50 rounded-lg p-6 inline-flex flex-col items-center justify-center cursor-pointer">
                            <svg class="w-16 h-20 text-blue-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <rect x="7" y="3" width="10" height="18" rx="1" stroke-width="2"/>
                                <line x1="9" y1="6" x2="15" y2="6" stroke-width="1.5"/>
                                <line x1="9" y1="8.5" x2="15" y2="8.5" stroke-width="1.5"/>
                                <line x1="9" y1="11" x2="15" y2="11" stroke-width="1.5"/>
                                <circle cx="12" cy="15" r="2" stroke-width="1.5"/>
                                <path d="M10 17 L12 18.5 L14 17" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                            <span class="text-sm font-medium text-blue-600">Vertical</span>
                        </div>
                    </div>

                    <!-- Backside Section -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Backside</h3>
                        <div class="flex items-center gap-3">
                            <select class="flex-1 px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-700">
                                <option value="cardboard" selected>Cardboard</option>
                                <option value="standard">Standard</option>
                                <option value="premium">Premium</option>
                                <option value="glossy">Glossy</option>
                            </select>
                            <button class="p-3 border-2 border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Item Name Section -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Item name</h3>
                        <input 
                            type="text" 
                            placeholder="Name this print job" 
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-full focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        />
                    </div>

                    <!-- Select Price and Delivery Date Section -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Select price and delivery date</h3>
                    </div>

                    <!-- Custom Quantity Section -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Custom quantity</h3>
                        <input 
                            type="number" 
                            id="quantity" 
                            value="1" 
                            min="1" 
                            step="1" 
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-full focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        />
                        <div class="mt-4 text-center">
                            <button class="text-blue-600 hover:text-blue-700 font-medium text-sm">Other dates</button>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Job Recap -->
                <div class="lg:col-span-1">
                    <div class="bg-white border-2 border-gray-200 rounded-lg p-6 sticky top-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Job recap and quotation</h3>
                        
                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between items-center pb-3 border-b border-gray-200">
                                <span class="text-sm text-gray-600">Quantity</span>
                                <span class="text-sm font-semibold text-gray-900" id="recap-quantity">1</span>
                            </div>
                            
                            <div class="flex justify-between items-center pb-3 border-b border-gray-200">
                                <span class="text-sm text-gray-600">Size</span>
                                <span class="text-sm font-semibold text-gray-900">4" x 5.5"</span>
                            </div>
                            
                            <div class="flex justify-between items-center pb-3 border-b border-gray-200">
                                <span class="text-sm text-gray-600">Orientation</span>
                                <span class="text-sm font-semibold text-gray-900">Vertical</span>
                            </div>
                            
                            <div class="flex justify-between items-center pb-3 border-b border-gray-200">
                                <span class="text-sm text-gray-600">Backside</span>
                                <span class="text-sm font-semibold text-gray-900" id="recap-backside">Cardboard</span>
                            </div>
                            
                            <div class="flex justify-between items-center pb-3 border-b border-gray-200">
                                <span class="text-sm text-gray-600">Expected Delivery</span>
                                <span class="text-sm font-semibold text-gray-900">{{ date('M d, Y', strtotime('+7 days')) }}</span>
                            </div>
                        </div>
                        
                        <div class="bg-blue-50 rounded-lg p-4 mb-6">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-medium">Subtotal</span>
                                <span class="text-gray-900 font-semibold" id="subtotal">$15.00</span>
                            </div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-medium">Tax (15%)</span>
                                <span class="text-gray-900 font-semibold" id="tax">$2.25</span>
                            </div>
                            <div class="flex justify-between items-center pt-3 border-t-2 border-blue-200">
                                <span class="text-lg font-bold text-gray-900">Total</span>
                                <span class="text-lg font-bold text-blue-600" id="total">$17.25</span>
                            </div>
                        </div>
                        
                        <button class="w-full bg-blue-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-blue-700 transition-colors shadow-md hover:shadow-lg">
                            Add to Cart
                        </button>
                        
                        <div class="mt-4 text-center">
                            <a href="#" class="text-sm text-blue-600 hover:text-blue-700 font-medium">Need help? Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const priceState = {
                basePrice: 15.00,
                backsidePrice: 0,
                quantity: 1,
                taxRate: 0.15
            };

            function updateDisplay() {
                const subtotal = (priceState.basePrice + priceState.backsidePrice) * priceState.quantity;
                const tax = subtotal * priceState.taxRate;
                const total = subtotal + tax;

                document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
                document.getElementById('tax').textContent = `$${tax.toFixed(2)}`;
                document.getElementById('total').textContent = `$${total.toFixed(2)}`;
                document.getElementById('recap-quantity').textContent = priceState.quantity;
            }

            // Backside select
            const backsideSelect = document.querySelector('select');
            if (backsideSelect) {
                backsideSelect.addEventListener('change', function(e) {
                    const backsidePrices = {
                        'cardboard': 0,
                        'standard': 2.00,
                        'premium': 4.00,
                        'glossy': 5.00
                    };
                    priceState.backsidePrice = backsidePrices[e.target.value] || 0;
                    document.getElementById('recap-backside').textContent = e.target.options[e.target.selectedIndex].text;
                    updateDisplay();
                });
            }

            // Quantity input
            const quantityInput = document.getElementById('quantity');
            if (quantityInput) {
                quantityInput.addEventListener('input', function(e) {
                    priceState.quantity = parseInt(e.target.value) || 1;
                    updateDisplay();
                });
            }

            updateDisplay();
        });
    </script>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
