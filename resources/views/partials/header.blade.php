<header class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 md:h-20">
            <!-- Logo -->
            <div class="flex items-center flex-shrink-0">
                <a href="/" class="text-xl md:text-2xl font-bold text-red-600">
                    chapakhana
                </a>
            </div>

            <!-- Search Bar - Hidden on mobile -->
            <div class="hidden md:flex flex-1 max-w-2xl lg:max-w-3xl mx-4 lg:mx-6">
                <div class="relative w-full">
                    <input
                        type="text"
                        placeholder="What are you looking for?"
                        class="w-full px-4 py-2 pr-12 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm"
                    >
                    <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Right Side Menu -->
            <div class="flex items-center gap-2 sm:gap-4">
                <a href="tel:(844)938-6754" class="hidden lg:flex items-center gap-2 text-gray-700 hover:text-gray-900 text-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>(844) 938-6754</span>
                </a>

                <button class="hidden md:flex items-center gap-1 text-gray-700 hover:text-gray-900 text-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Help</span>
                </button>

                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hidden sm:flex items-center gap-1 text-gray-700 hover:text-gray-900 text-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="hidden sm:flex items-center gap-1 text-gray-700 hover:text-gray-900 text-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span>Login</span>
                        </a>
                    @endauth
                @endif

                <button class="flex items-center gap-1 text-gray-700 hover:text-gray-900 text-sm md:text-base relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span class="hidden sm:inline font-semibold">Basket</span>
                    <span class="absolute -top-1 -right-2 bg-red-600 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                </button>

                <!-- Mobile Menu Toggle -->
                <button id="mobile-menu-btn" class="md:hidden flex items-center text-gray-700 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Search Bar for Mobile -->
    <div class="md:hidden border-t border-gray-200 px-4 py-3 bg-gray-50">
        <div class="relative">
            <input
                type="text"
                placeholder="Search..."
                class="w-full px-4 py-2 pr-10 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm"
            >
            <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="bg-gray-50 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="overflow-x-auto scrollbar-hide -mx-4 sm:-mx-6 lg:-mx-8">
                <div class="flex items-center gap-4 sm:gap-6 md:gap-8 h-12 md:h-14 pl-4 sm:pl-6 lg:pl-8 pr-4 sm:pr-6 lg:pr-8">
                    <a href="/" class="{{ request()->is('/') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-gray-900' }} text-xs sm:text-sm md:text-base whitespace-nowrap">Home</a>
                    <a href="/shop" class="{{ request()->is('shop') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-gray-900' }} text-xs sm:text-sm md:text-base whitespace-nowrap">Shop</a>
                    <a href="/books" class="{{ request()->is('books*') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-gray-900' }} text-xs sm:text-sm md:text-base whitespace-nowrap">Books</a>
                    <a href="/business-cards" class="{{ request()->is('business-cards*') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-gray-900' }} text-xs sm:text-sm md:text-base whitespace-nowrap">Business Cards</a>
                    <a href="/stickers" class="{{ request()->is('stickers*') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-gray-900' }} text-xs sm:text-sm md:text-base whitespace-nowrap">Stickers & Labels</a>
                    <a href="/booklets" class="{{ request()->is('booklets*') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-gray-900' }} text-xs sm:text-sm md:text-base whitespace-nowrap">Brochures & Flyers</a>
                    <a href="/banners" class="{{ request()->is('banners*') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-gray-900' }} text-xs sm:text-sm md:text-base whitespace-nowrap">Banners & Signs</a>
                    <a href="/catalogs" class="{{ request()->is('catalogs*') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-gray-900' }} text-xs sm:text-sm md:text-base whitespace-nowrap">Catalogs</a>
                    <a href="/magazines" class="{{ request()->is('magazines*') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-gray-900' }} text-xs sm:text-sm md:text-base whitespace-nowrap">Magazines</a>
                    <a href="/stationery" class="{{ request()->is('stationery*') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-gray-900' }} text-xs sm:text-sm md:text-base whitespace-nowrap">Stationery</a>
                    <a href="/books" class="{{ request()->is('zines*') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-gray-900' }} text-xs sm:text-sm md:text-base whitespace-nowrap">Zines</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', function() {
                alert('Mobile menu feature coming soon!');
            });
        }
    });
</script>
