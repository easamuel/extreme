<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-[#1e3a5f]/95 backdrop-blur-md border-b border-white/10 w-full max-w-full">
    <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 w-full" aria-label="Main Navigation">
        <div class="flex h-16 sm:h-20 items-center justify-between">
            <!-- Brand Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center transition-opacity hover:opacity-90" aria-label="ExtremeSolutions Home">
                    @include('components.logo-full', ['theme' => 'dark'])
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden lg:flex items-center gap-7">
                <a href="{{ route('home') }}#services" class="text-[13px] text-white/80 hover:text-white transition-colors">
                    Solutions
                </a>
                <a href="{{ route('home') }}#how-we-work" class="text-[13px] text-white/80 hover:text-white transition-colors">
                    The 3-Step Process
                </a>
                <a href="{{ route('home') }}#featured-projects" class="text-[13px] text-white/80 hover:text-white transition-colors flex items-center gap-1.5">
                    <span>Live Systems</span>
                    <span class="inline-block w-1.5 h-1.5 rounded-full bg-[#00ff88]" title="Live Platforms"></span>
                </a>
                <a href="{{ route('about') }}" class="text-[13px] text-white/80 hover:text-white transition-colors {{ request()->routeIs('about') ? 'text-[#00ff88] font-semibold' : '' }}">
                    About Us
                </a>
                <a href="{{ route('academy') }}" class="text-[13px] text-white/80 hover:text-white transition-colors {{ request()->routeIs('academy') ? 'text-[#00ff88] font-semibold' : '' }}">
                    Academy
                </a>
                <a href="{{ route('contact') }}" class="text-[13px] text-white/80 hover:text-white transition-colors {{ request()->routeIs('contact') ? 'text-[#00ff88] font-semibold' : '' }}">
                    Contact
                </a>
            </div>

            <!-- Header Action CTA & Mobile Trigger -->
            <div class="flex items-center gap-3">
                <a href="{{ route('contact') }}" class="hidden sm:inline-flex items-center rounded-full bg-[#00ff88] px-5 py-2.5 text-[13px] font-bold text-[#1e3a5f] hover:bg-[#00cc6a] transition-all shadow-sm">
                    Book a Consultation
                </a>

                <!-- Mobile menu toggle -->
                <button type="button" 
                        id="mobile-menu-button"
                        aria-label="Open main menu" 
                        aria-expanded="false" 
                        aria-controls="mobile-menu"
                        class="lg:hidden flex h-9 w-9 items-center justify-center rounded-lg text-white hover:bg-white/10 transition-colors focus:outline-none focus:ring-2 focus:ring-[#00ff88]/50">
                    <svg id="hamburger-icon" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="close-icon" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-white/10 py-4 space-y-1 w-full max-w-full overflow-hidden">
            <a href="{{ route('home') }}#services" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-medium text-white/85 hover:text-white hover:bg-white/5 transition-colors">
                Solutions
            </a>
            <a href="{{ route('home') }}#how-we-work" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-medium text-white/85 hover:text-white hover:bg-white/5 transition-colors">
                The 3-Step Process
            </a>
            <a href="{{ route('home') }}#featured-projects" class="mobile-nav-link flex items-center justify-between px-3 py-2.5 rounded-lg text-sm font-medium text-white/85 hover:text-white hover:bg-white/5 transition-colors">
                <span>Live Systems in Production</span>
                <span class="text-[10px] uppercase font-bold tracking-wider px-2 py-0.5 rounded bg-[#00ff88]/20 text-[#00ff88]">Live</span>
            </a>
            <a href="{{ route('about') }}" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-medium text-white/85 hover:text-white hover:bg-white/5 transition-colors {{ request()->routeIs('about') ? 'text-[#00ff88]' : '' }}">
                About Us
            </a>
            <a href="{{ route('academy') }}" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-medium text-white/85 hover:text-white hover:bg-white/5 transition-colors {{ request()->routeIs('academy') ? 'text-[#00ff88]' : '' }}">
                Academy (Mentorship)
            </a>
            <a href="{{ route('contact') }}" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-sm font-medium text-white/85 hover:text-white hover:bg-white/5 transition-colors {{ request()->routeIs('contact') ? 'text-[#00ff88]' : '' }}">
                Contact Us
            </a>
            <div class="pt-3 px-1">
                <a href="{{ route('contact') }}" class="flex items-center justify-center rounded-full bg-[#00ff88] text-[#1e3a5f] px-5 py-3 text-sm font-bold shadow-md hover:bg-[#00cc6a] transition-colors w-full">
                    Book a Consultation
                </a>
            </div>
        </div>
    </nav>
</header>
<!-- Header height offset spacer so page content isn't obscured -->
<div class="h-16 sm:h-20" aria-hidden="true"></div>
