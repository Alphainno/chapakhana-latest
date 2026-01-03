<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - chapakhana</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .sidebar-link {
            transition: all 0.2s;
        }
        .sidebar-link:hover {
            transform: translateX(4px);
        }
        .sidebar-link.active {
            background: linear-gradient(to right, #3B82F6, #2563EB);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="flex justify-between items-center h-16 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center">
                <a href="{{ route('admin.dashboard') }}" class="text-2xl font-bold text-red-600">
                    chapakhana
                </a>
                <span class="ml-3 px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded-full">ADMIN</span>
            </div>

            <div class="flex items-center gap-4">
                <a href="/" target="_blank" class="hidden md:flex items-center gap-2 text-gray-700 hover:text-gray-900 text-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                    <span>View Site</span>
                </a>
                
                <div class="flex items-center gap-2">
                    <span class="hidden sm:inline text-sm text-gray-700 font-medium">{{ Auth::user()->name }}</span>
                    <form action="{{ route('admin.logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="flex items-center gap-2 px-3 py-2 text-sm text-white bg-red-600 hover:bg-red-700 rounded-lg transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            <span class="hidden sm:inline">Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-gray-200 min-h-screen sticky top-16">
            <nav class="p-4 space-y-2">
                <a href="#home" class="sidebar-link active flex items-center gap-3 px-4 py-3 rounded-lg text-white" onclick="showSection('home')">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span class="font-medium">Home</span>
                </a>

                <a href="#shop" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100" onclick="showSection('shop')">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                    <span class="font-medium">Shop</span>
                </a>

                <div class="pt-2">
                    <p class="px-4 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider">Categories</p>
                </div>

                <a href="#books" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100" onclick="showSection('books')">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    <span class="font-medium">Books</span>
                </a>

                <a href="#booklets" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100" onclick="showSection('booklets')">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span class="font-medium">Booklets</span>
                </a>

                <a href="#business-cards" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100" onclick="showSection('business-cards')">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                    </svg>
                    <span class="font-medium">Business Cards</span>
                </a>

                <a href="#stickers" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100" onclick="showSection('stickers')">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                    </svg>
                    <span class="font-medium">Stickers</span>
                </a>

                <a href="#banners" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100" onclick="showSection('banners')">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span class="font-medium">Banners</span>
                </a>

                <a href="#catalogs" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100" onclick="showSection('catalogs')">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    <span class="font-medium">Catalogs</span>
                </a>

                <a href="#magazines" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100" onclick="showSection('magazines')">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                    <span class="font-medium">Magazines</span>
                </a>

                <a href="#stationery" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100" onclick="showSection('stationery')">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                    <span class="font-medium">Stationery</span>
                </a>

                <a href="#postcards" class="sidebar-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100" onclick="showSection('postcards')">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span class="font-medium">Postcards</span>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            @if (session('success'))
                <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Home Section -->
            <section id="home-section" class="content-section">
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">Dashboard Overview</h1>
                    <p class="mt-2 text-gray-600">Welcome back, {{ Auth::user()->name }}! Here's your business summary.</p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Total Orders</p>
                                <p class="text-2xl font-bold text-gray-900 mt-2">1,234</p>
                                <p class="text-sm text-green-600 mt-1">+12.5% from last month</p>
                            </div>
                            <div class="bg-blue-100 rounded-full p-3">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Revenue</p>
                                <p class="text-2xl font-bold text-gray-900 mt-2">$56,789</p>
                                <p class="text-sm text-green-600 mt-1">+8.3% from last month</p>
                            </div>
                            <div class="bg-green-100 rounded-full p-3">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Products</p>
                                <p class="text-2xl font-bold text-gray-900 mt-2">456</p>
                                <p class="text-sm text-blue-600 mt-1">Active listings</p>
                            </div>
                            <div class="bg-purple-100 rounded-full p-3">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Customers</p>
                                <p class="text-2xl font-bold text-gray-900 mt-2">8,945</p>
                                <p class="text-sm text-green-600 mt-1">+15.2% from last month</p>
                            </div>
                            <div class="bg-yellow-100 rounded-full p-3">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Recent Orders</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-gray-200">
                                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Order ID</th>
                                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Customer</th>
                                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Product</th>
                                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Amount</th>
                                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Status</th>
                                    <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-100 hover:bg-gray-50">
                                    <td class="py-3 px-4 text-sm">#10234</td>
                                    <td class="py-3 px-4 text-sm">John Doe</td>
                                    <td class="py-3 px-4 text-sm">Paperback Book</td>
                                    <td class="py-3 px-4 text-sm font-medium">$234.00</td>
                                    <td class="py-3 px-4"><span class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full">Completed</span></td>
                                    <td class="py-3 px-4"><button class="text-blue-600 hover:text-blue-700 text-sm">View</button></td>
                                </tr>
                                <tr class="border-b border-gray-100 hover:bg-gray-50">
                                    <td class="py-3 px-4 text-sm">#10233</td>
                                    <td class="py-3 px-4 text-sm">Jane Smith</td>
                                    <td class="py-3 px-4 text-sm">Business Cards</td>
                                    <td class="py-3 px-4 text-sm font-medium">$89.00</td>
                                    <td class="py-3 px-4"><span class="px-2 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full">Processing</span></td>
                                    <td class="py-3 px-4"><button class="text-blue-600 hover:text-blue-700 text-sm">View</button></td>
                                </tr>
                                <tr class="border-b border-gray-100 hover:bg-gray-50">
                                    <td class="py-3 px-4 text-sm">#10232</td>
                                    <td class="py-3 px-4 text-sm">Mike Johnson</td>
                                    <td class="py-3 px-4 text-sm">Vinyl Stickers</td>
                                    <td class="py-3 px-4 text-sm font-medium">$145.00</td>
                                    <td class="py-3 px-4"><span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full">Shipping</span></td>
                                    <td class="py-3 px-4"><button class="text-blue-600 hover:text-blue-700 text-sm">View</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Shop Section -->
            <section id="shop-section" class="content-section hidden">
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">Shop Management</h1>
                    <p class="mt-2 text-gray-600">Manage all products and categories in your shop.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 hover:shadow-md transition">
                        <div class="bg-blue-100 rounded-lg p-4 mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Add New Product</h3>
                        <p class="text-sm text-gray-600 mb-4">Create a new product listing for the shop</p>
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition">
                            Create Product
                        </button>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 hover:shadow-md transition">
                        <div class="bg-green-100 rounded-lg p-4 mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Manage Inventory</h3>
                        <p class="text-sm text-gray-600 mb-4">Track and update product inventory</p>
                        <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg transition">
                            View Inventory
                        </button>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200 hover:shadow-md transition">
                        <div class="bg-purple-100 rounded-lg p-4 mb-4">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Manage Pricing</h3>
                        <p class="text-sm text-gray-600 mb-4">Update product prices and discounts</p>
                        <button class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 px-4 rounded-lg transition">
                            Edit Pricing
                        </button>
                    </div>
                </div>
            </section>

            <!-- Books Section -->
            <section id="books-section" class="content-section hidden">
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">Books Management</h1>
                    <p class="mt-2 text-gray-600">Manage all book products and variants.</p>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold text-gray-900">Book Products</h2>
                        <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition">
                            + Add Book Type
                        </button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                            <h3 class="font-bold text-gray-900">Paperback Book</h3>
                            <p class="text-sm text-gray-600 mt-1">Standard paperback books</p>
                            <div class="mt-3 flex gap-2">
                                <button class="flex-1 bg-blue-100 text-blue-600 py-1 px-3 rounded text-sm hover:bg-blue-200">Edit</button>
                                <button class="flex-1 bg-red-100 text-red-600 py-1 px-3 rounded text-sm hover:bg-red-200">Delete</button>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                            <h3 class="font-bold text-gray-900">Hardback Book</h3>
                            <p class="text-sm text-gray-600 mt-1">Premium hardback books</p>
                            <div class="mt-3 flex gap-2">
                                <button class="flex-1 bg-blue-100 text-blue-600 py-1 px-3 rounded text-sm hover:bg-blue-200">Edit</button>
                                <button class="flex-1 bg-red-100 text-red-600 py-1 px-3 rounded text-sm hover:bg-red-200">Delete</button>
                            </div>
                        </div>

                        <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition">
                            <h3 class="font-bold text-gray-900">Special Finish Hardback</h3>
                            <p class="text-sm text-gray-600 mt-1">Luxury hardback with special finishes</p>
                            <div class="mt-3 flex gap-2">
                                <button class="flex-1 bg-blue-100 text-blue-600 py-1 px-3 rounded text-sm hover:bg-blue-200">Edit</button>
                                <button class="flex-1 bg-red-100 text-red-600 py-1 px-3 rounded text-sm hover:bg-red-200">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Booklets Section -->
            <section id="booklets-section" class="content-section hidden">
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">Booklets Management</h1>
                    <p class="mt-2 text-gray-600">Manage booklet products and configurations.</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                    <p class="text-gray-600">Booklet management interface coming soon...</p>
                </div>
            </section>

            <!-- Business Cards Section -->
            <section id="business-cards-section" class="content-section hidden">
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">Business Cards Management</h1>
                    <p class="mt-2 text-gray-600">Manage business card products and options.</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                    <p class="text-gray-600">Business card management interface...</p>
                </div>
            </section>

            <!-- Stickers Section -->
            <section id="stickers-section" class="content-section hidden">
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">Stickers Management</h1>
                    <p class="mt-2 text-gray-600">Manage sticker products and types.</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                    <p class="text-gray-600">Sticker management interface...</p>
                </div>
            </section>

            <!-- Banners Section -->
            <section id="banners-section" class="content-section hidden">
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">Banners Management</h1>
                    <p class="mt-2 text-gray-600">Manage banner products and sizes.</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                    <p class="text-gray-600">Banner management interface...</p>
                </div>
            </section>

            <!-- Catalogs Section -->
            <section id="catalogs-section" class="content-section hidden">
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">Catalogs Management</h1>
                    <p class="mt-2 text-gray-600">Manage catalog products and options.</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                    <p class="text-gray-600">Catalog management interface...</p>
                </div>
            </section>

            <!-- Magazines Section -->
            <section id="magazines-section" class="content-section hidden">
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">Magazines Management</h1>
                    <p class="mt-2 text-gray-600">Manage magazine products and formats.</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                    <p class="text-gray-600">Magazine management interface...</p>
                </div>
            </section>

            <!-- Stationery Section -->
            <section id="stationery-section" class="content-section hidden">
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">Stationery Management</h1>
                    <p class="mt-2 text-gray-600">Manage stationery products and items.</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                    <p class="text-gray-600">Stationery management interface...</p>
                </div>
            </section>

            <!-- Postcards Section -->
            <section id="postcards-section" class="content-section hidden">
                <div class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">Postcards & Invitations</h1>
                    <p class="mt-2 text-gray-600">Manage postcards and invitation products.</p>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-200">
                    <p class="text-gray-600">Postcards management interface...</p>
                </div>
            </section>
        </main>
    </div>

    <script>
        function showSection(sectionName) {
            // Hide all sections
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => section.classList.add('hidden'));

            // Show the selected section
            const targetSection = document.getElementById(sectionName + '-section');
            if (targetSection) {
                targetSection.classList.remove('hidden');
            }

            // Update sidebar links
            const links = document.querySelectorAll('.sidebar-link');
            links.forEach(link => {
                link.classList.remove('active', 'text-white', 'bg-gradient-to-r', 'from-blue-600', 'to-blue-700');
                link.classList.add('text-gray-700', 'hover:bg-gray-100');
            });

            // Highlight active link
            const activeLink = document.querySelector(`a[href="#${sectionName}"]`);
            if (activeLink) {
                activeLink.classList.add('active', 'text-white');
                activeLink.classList.remove('text-gray-700', 'hover:bg-gray-100');
            }
        }

        // Handle hash navigation
        if (window.location.hash) {
            const hash = window.location.hash.substring(1);
            showSection(hash);
        }

        // Update hash on link click
        document.querySelectorAll('.sidebar-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const href = link.getAttribute('href');
                if (href && href.startsWith('#')) {
                    window.location.hash = href;
                }
            });
        });
    </script>
</body>
</html>
