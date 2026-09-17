<header class="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 hover:opacity-80 transition-opacity">
                    @include('components.logo-full')
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-[#1e3a5f] transition-colors {{ request()->routeIs('home') ? 'text-[#1e3a5f] font-medium' : '' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-[#1e3a5f] transition-colors {{ request()->routeIs('about') ? 'text-[#1e3a5f] font-medium' : '' }}">
                    About
                </a>
                <a href="{{ route('academy') }}" class="text-gray-700 hover:text-[#1e3a5f] transition-colors {{ request()->routeIs('academy') ? 'text-[#1e3a5f] font-medium' : '' }}">
                    Academy
                </a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-[#1e3a5f] transition-colors {{ request()->routeIs('contact') ? 'text-[#1e3a5f] font-medium' : '' }}">
                    Contact
                </a>
            </div>

            <!-- CTA / Mobile Menu Toggle -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('contact') }}" class="bg-[#1e3a5f] text-white px-4 py-2 rounded-lg hover:bg-[#152a47] transition-colors hidden md:inline">
                    Book a Consultation
                </a>

                <!-- Mobile menu button -->
                <button type="button" class="md:hidden p-2 rounded-md text-gray-700 hover:text-[#1e3a5f] focus:outline-none focus:ring-2 focus:ring-[#1e3a5f]" id="mobile-menu-button">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="hidden md:hidden pb-4" id="mobile-menu">
            <div class="flex flex-col space-y-2">
                <a href="{{ route('home') }}" class="px-3 py-2 text-gray-700 hover:text-[#1e3a5f] hover:bg-gray-50 rounded-md transition-colors {{ request()->routeIs('home') ? 'text-[#1e3a5f] font-medium bg-gray-50' : '' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" class="px-3 py-2 text-gray-700 hover:text-[#1e3a5f] hover:bg-gray-50 rounded-md transition-colors {{ request()->routeIs('about') ? 'text-[#1e3a5f] font-medium bg-gray-50' : '' }}">
                    About
                </a>
                <a href="{{ route('academy') }}" class="px-3 py-2 text-gray-700 hover:text-[#1e3a5f] hover:bg-gray-50 rounded-md transition-colors {{ request()->routeIs('academy') ? 'text-[#1e3a5f] font-medium bg-gray-50' : '' }}">
                    Academy
                </a>
                <a href="{{ route('contact') }}" class="px-3 py-2 text-gray-700 hover:text-[#1e3a5f] hover:bg-gray-50 rounded-md transition-colors {{ request()->routeIs('contact') ? 'text-[#1e3a5f] font-medium bg-gray-50' : '' }}">
                    Contact
                </a>
                <a href="{{ route('contact') }}" class="px-3 py-2 bg-[#1e3a5f] text-white rounded-md hover:bg-[#152a47] transition-colors text-center">
                    Book a Consultation
                </a>
            </div>
        </div>
    </nav>
</header>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu?.classList.toggle('hidden');
    });
</script>

