<footer class="bg-gray-900 text-gray-200 mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 grid grid-cols-1 md:grid-cols-4 gap-10">
        <div>
            <h3 class="text-lg font-semibold text-white">chapakhana</h3>
            <p class="mt-3 text-sm text-gray-400">Quality print and marketing materials delivered with care.</p>
            <div class="mt-4 flex items-center gap-3 text-sm">
                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-800">
                    <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </span>
                <div class="flex flex-col">
                    <span class="text-gray-400">Call us</span>
                    <a href="tel:(844)938-6754" class="text-white font-semibold hover:text-blue-300">(844) 938-6754</a>
                </div>
            </div>
        </div>

        <div>
            <h4 class="text-sm font-semibold text-white uppercase tracking-wide">Shop</h4>
            <ul class="mt-4 space-y-2 text-sm">
                <li><a href="/books" class="hover:text-white">Magazines, Books & Catalogs</a></li>
                <li><a href="#" class="hover:text-white">Marketing Materials</a></li>
                <li><a href="#" class="hover:text-white">Business Cards</a></li>
                <li><a href="#" class="hover:text-white">Invitations & Stationery</a></li>
                <li><a href="#" class="hover:text-white">Stickers & Labels</a></li>
                <li><a href="#" class="hover:text-white">Signs & Banners</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-sm font-semibold text-white uppercase tracking-wide">Company</h4>
            <ul class="mt-4 space-y-2 text-sm">
                <li><a href="#" class="hover:text-white">About</a></li>
                <li><a href="#" class="hover:text-white">Services</a></li>
                <li><a href="#" class="hover:text-white">Blog</a></li>
                <li><a href="#" class="hover:text-white">Contact</a></li>
                <li><a href="#" class="hover:text-white">Support</a></li>
            </ul>
        </div>

        <div>
            <h4 class="text-sm font-semibold text-white uppercase tracking-wide">Stay Updated</h4>
            <p class="mt-4 text-sm text-gray-400">Get print tips, new product drops, and offers.</p>
            <form class="mt-4 flex flex-col sm:flex-row gap-3">
                <input
                    type="email"
                    name="newsletter"
                    placeholder="Email address"
                    class="w-full px-4 py-2 rounded-md bg-gray-800 border border-gray-700 text-gray-100 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                <button type="submit" class="px-4 py-2 rounded-md bg-blue-600 text-white font-semibold hover:bg-blue-500 transition">Subscribe</button>
            </form>
            <div class="mt-4 flex items-center gap-3 text-gray-400">
                <a href="#" class="hover:text-white">Twitter</a>
                <a href="#" class="hover:text-white">Facebook</a>
                <a href="#" class="hover:text-white">Instagram</a>
            </div>
        </div>
    </div>

    <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col md:flex-row items-center justify-between gap-3 text-sm text-gray-400">
            <span>© {{ date('Y') }} chapakhana. All rights reserved.</span>
            <div class="flex items-center gap-4">
                <a href="#" class="hover:text-white">Privacy</a>
                <a href="#" class="hover:text-white">Terms</a>
                <a href="#" class="hover:text-white">Accessibility</a>
            </div>
        </div>
    </div>
</footer>
