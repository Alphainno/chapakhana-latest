<header class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-red-600">
                    chapakhana
                </a>
            </div>

            <!-- Search Bar -->
            <div class="hidden md:flex flex-1 max-w-md mx-8">
                <div class="relative w-full">
                    <input
                        type="text"
                        placeholder="What are you looking for?"
                        class="w-full px-4 py-2 pr-12 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                    <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Right Side Menu -->
            <div class="flex items-center gap-6">
                <a href="tel:(844)938-6754" class="hidden lg:flex items-center gap-2 text-gray-700 hover:text-gray-900">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span>(844) 938-6754</span>
                </a>

                <button class="flex items-center gap-1 text-gray-700 hover:text-gray-900">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Need help?</span>
                </button>

                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="flex items-center gap-1 text-gray-700 hover:text-gray-900">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="flex items-center gap-1 text-gray-700 hover:text-gray-900">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span>Login</span>
                        </a>
                    @endauth
                @endif

                <button class="flex items-center gap-1 text-gray-700 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span class="font-semibold">Basket</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="bg-gray-50 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-nowrap items-center gap-3 sm:gap-4 md:gap-5 justify-start whitespace-nowrap overflow-x-auto py-2">
                <a href="/" class="text-blue-600 font-semibold text-xs sm:text-sm hover:text-blue-700">ALL PRODUCTS</a>
                <a href="/book-configure" class="text-gray-700 hover:text-gray-900 text-xs sm:text-sm">Magazines, Books & Catalogs</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 text-xs sm:text-sm">Marketing Materials</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 text-xs sm:text-sm">Business Cards</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 text-xs sm:text-sm">Invitations & Stationery</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 text-xs sm:text-sm">Stickers & Labels</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 text-xs sm:text-sm">Signs & Banners</a>
                <a href="#" class="text-gray-700 hover:text-gray-900 text-xs sm:text-sm">Promotional Items</a>
            </div>
        </div>
    </nav>
</header>
