<aside class="w-64 bg-white border-r border-gray-200 min-h-screen sticky top-16">
    <nav class="p-4 space-y-2">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active text-white' : 'text-gray-700 hover:bg-gray-100' }} flex items-center gap-3 px-4 py-3 rounded-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            <span class="font-medium">Home</span>
        </a>



        <!-- Shop Dropdown -->
        <div class="space-y-1">
            <button type="button"
                onclick="toggleDropdown('shop-dropdown')"
                class="w-full flex items-center justify-between gap-3 px-4 py-3 rounded-lg transition group {{ request()->routeIs('admin.categories.*') || request()->routeIs('admin.products.*') ? 'bg-blue-50 text-blue-700' : 'text-gray-700 hover:bg-gray-100' }}">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                    <span class="font-medium">Shop</span>
                </div>
                <svg id="shop-dropdown-arrow" class="w-4 h-4 transition-transform duration-200 {{ request()->routeIs('admin.categories.*') || request()->routeIs('admin.products.*') ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>

            <div id="shop-dropdown" class="{{ request()->routeIs('admin.categories.*') || request()->routeIs('admin.products.*') ? '' : 'hidden' }} pl-12 space-y-1 mt-1">
                <a href="{{ route('admin.categories.index') }}" class="block py-2 text-sm transition-colors {{ request()->routeIs('admin.categories.*') ? 'text-blue-600 font-bold' : 'text-gray-600 hover:text-blue-600' }}">
                    Categories
                </a>
                <a href="{{ route('admin.products.index') }}" class="block py-2 text-sm transition-colors {{ request()->routeIs('admin.products.*') ? 'text-blue-600 font-bold' : 'text-gray-600 hover:text-blue-600' }}">
                    Products
                </a>
            </div>
        </div>

        <div class="pt-2">
            <p class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider">Website</p>
        </div>

        <a href="#" class="sidebar-link text-gray-700 hover:bg-gray-100 flex items-center gap-3 px-4 py-3 rounded-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
            <span class="font-medium">Books</span>
        </a>

        <a href="#" class="sidebar-link text-gray-700 hover:bg-gray-100 flex items-center gap-3 px-4 py-3 rounded-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            <span class="font-medium">Booklets</span>
        </a>

        <a href="#" class="sidebar-link text-gray-700 hover:bg-gray-100 flex items-center gap-3 px-4 py-3 rounded-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
            </svg>
            <span class="font-medium">Business Cards</span>
        </a>

        <a href="#" class="sidebar-link text-gray-700 hover:bg-gray-100 flex items-center gap-3 px-4 py-3 rounded-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
            </svg>
            <span class="font-medium">Stickers</span>
        </a>

        <a href="#" class="sidebar-link text-gray-700 hover:bg-gray-100 flex items-center gap-3 px-4 py-3 rounded-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <span class="font-medium">Banners</span>
        </a>

        <a href="#" class="sidebar-link text-gray-700 hover:bg-gray-100 flex items-center gap-3 px-4 py-3 rounded-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
            <span class="font-medium">Catalogs</span>
        </a>

        <a href="#" class="sidebar-link text-gray-700 hover:bg-gray-100 flex items-center gap-3 px-4 py-3 rounded-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
            </svg>
            <span class="font-medium">Magazines</span>
        </a>

        <a href="#" class="sidebar-link text-gray-700 hover:bg-gray-100 flex items-center gap-3 px-4 py-3 rounded-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
            </svg>
            <span class="font-medium">Stationery</span>
        </a>

        <a href="#" class="sidebar-link text-gray-700 hover:bg-gray-100 flex items-center gap-3 px-4 py-3 rounded-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <span class="font-medium">Postcards</span>
        </a>
    </nav>
</aside>

<script>
function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    const arrow = document.getElementById(id + '-arrow');

    if (dropdown.classList.contains('hidden')) {
        dropdown.classList.remove('hidden');
        arrow.classList.add('rotate-180');
    } else {
        dropdown.classList.add('hidden');
        arrow.classList.remove('rotate-180');
    }
}
</script>
