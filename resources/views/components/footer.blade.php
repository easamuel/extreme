<footer class="brand-surface-dark relative overflow-hidden bg-[#071324] text-gray-300 pt-16 md:pt-20 pb-12 border-t border-white/10">
    <div class="brand-texture opacity-40" aria-hidden="true"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-12 pb-14 lg:grid-cols-[1.3fr_2fr] lg:gap-20">
            <!-- Brand & Contact Summary -->
            <div>
                <a href="{{ route('home') }}" class="inline-block transition-opacity hover:opacity-90" aria-label="ExtremeSolutions Home">
                    @include('components.logo-full', ['theme' => 'dark'])
                </a>
                <p class="mt-5 max-w-sm text-sm leading-relaxed text-white/60">
                    Building the software and digital systems behind modern institutions and businesses — tailored, dependable, and production-tested.
                </p>

                <div class="mt-6 flex flex-col sm:flex-row sm:items-center gap-3">
                    <a href="mailto:info@extremesolutions.com.ng" class="group inline-flex items-center gap-2 text-base font-medium text-white hover:text-[#d4a373] transition-colors">
                        <svg class="h-4 w-4 text-[#d4a373] transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l10-10M7 7h10v10" />
                        </svg>
                        <span>info@extremesolutions.com.ng</span>
                    </a>
                </div>

                <div class="mt-5 flex flex-wrap items-center gap-2.5">
                    <span class="inline-flex items-center gap-1.5 rounded-full border border-white/15 bg-white/5 px-3 py-1 text-xs text-white/75">
                        <svg class="h-3.5 w-3.5 text-[#d4a373]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Abuja, Nigeria
                    </span>

                    <a href="https://wa.me/2349052585622" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 rounded-full border border-[#00ff88]/30 bg-[#00ff88]/10 px-3 py-1 text-xs text-[#00ff88] hover:bg-[#00ff88]/20 transition-colors">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#00ff88] animate-pulse"></span>
                        WhatsApp: 09052585622
                    </a>
                </div>
            </div>

            <!-- Links Grid -->
            <div class="grid grid-cols-2 gap-8 sm:grid-cols-3">
                <!-- Services -->
                <div>
                    <h4 class="text-sm font-semibold text-white tracking-wider uppercase text-[11px]">Solutions</h4>
                    <ul class="mt-4 space-y-2.5">
                        <li>
                            <a href="{{ route('products.school') }}" class="text-xs text-white/65 hover:text-white transition-colors flex items-center gap-1">
                                <span>School Management</span>
                                <span class="text-[9px] text-[#00ff88] font-bold">●</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.espass') }}" class="text-xs text-white/65 hover:text-white transition-colors flex items-center gap-1">
                                <span>ESPass Ticketing</span>
                                <span class="text-[9px] text-[#00ff88] font-bold">●</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#services" class="text-xs text-white/65 hover:text-white transition-colors">Custom Software</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#services" class="text-xs text-white/65 hover:text-white transition-colors">Systems &amp; Automation</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#services" class="text-xs text-white/65 hover:text-white transition-colors">Web &amp; Mobile Apps</a>
                        </li>
                        <li>
                            <a href="{{ route('academy') }}" class="text-xs text-white/65 hover:text-white transition-colors">Academy Mentorship</a>
                        </li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h4 class="text-sm font-semibold text-white tracking-wider uppercase text-[11px]">Company</h4>
                    <ul class="mt-4 space-y-2.5">
                        <li>
                            <a href="{{ route('about') }}" class="text-xs text-white/65 hover:text-white transition-colors">About ExtremeSolutions</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#how-we-work" class="text-xs text-white/65 hover:text-white transition-colors">How We Work</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#featured-projects" class="text-xs text-white/65 hover:text-white transition-colors">Live Production Proof</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#faq" class="text-xs text-white/65 hover:text-white transition-colors">Frequently Asked Questions</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="text-xs text-white/65 hover:text-white transition-colors">Book a Consultation</a>
                        </li>
                    </ul>
                </div>

                <!-- Live Platforms & Direct Contact -->
                <div class="col-span-2 sm:col-span-1">
                    <h4 class="text-sm font-semibold text-white tracking-wider uppercase text-[11px]">Live Portals</h4>
                    <ul class="mt-4 space-y-2.5">
                        <li>
                            <a href="https://sms.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="group text-xs text-white/65 hover:text-white transition-colors flex items-center gap-1.5">
                                <span>sms.extremesolutions.com.ng</span>
                                <svg class="h-3 w-3 text-[#d4a373] transition-transform group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://espass.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="group text-xs text-white/65 hover:text-white transition-colors flex items-center gap-1.5">
                                <span>espass.extremesolutions.com.ng</span>
                                <svg class="h-3 w-3 text-[#d4a373] transition-transform group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </a>
                        </li>
                        <li class="pt-2">
                            <a href="tel:09052585622" class="text-xs text-white/75 hover:text-[#d4a373] transition-colors flex items-center gap-1.5">
                                <svg class="h-3.5 w-3.5 text-[#d4a373]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                09052585622
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- StoryBrand Philosophical Statement & Copyright Bar -->
        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-white/50">
            <p class="text-center md:text-left">
                &copy; {{ date('Y') }} ExtremeSolutions. All rights reserved. Technology engineered to fit your operations.
            </p>
            <p class="text-center md:text-right text-white/40">
                Built with precision &middot; Donald Miller SB7 Guided &middot; Production Verified
            </p>
        </div>
    </div>
</footer>
