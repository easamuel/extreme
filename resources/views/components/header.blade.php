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
                <!-- Dropdown: Platforms & Systems (Andela Style) -->
                <div class="nav-dropdown relative py-6 group">
                    <button type="button" class="text-[13px] text-white/85 hover:text-white transition-colors flex items-center gap-1.5 focus:outline-none cursor-pointer">
                        <span class="font-medium">Platforms &amp; Systems</span>
                        <span class="inline-block w-1.5 h-1.5 rounded-full bg-[#00ff88]" title="Live Systems Active"></span>
                        <svg class="w-3.5 h-3.5 text-white/60 transition-transform duration-200 group-hover:rotate-180 group-hover:text-[#00ff88]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Mega Dropdown Panel -->
                    <div class="nav-dropdown-menu absolute top-full left-1/2 -translate-x-1/2 w-[780px] rounded-3xl bg-[#0a192f]/98 backdrop-blur-2xl border border-white/15 p-6 shadow-2xl z-50">
                        <div class="grid grid-cols-[1.3fr_1fr] gap-6">
                            <!-- Left: Platforms List with SVG icons and live badges -->
                            <div class="space-y-1.5" id="nav-preview-items">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-[#00ff88] block px-3 mb-1">Live Platforms &amp; Software</span>

                                <!-- SMS -->
                                <a href="{{ route('products.school') }}" data-nav-preview="sms" class="nav-preview-trigger group/item flex items-start gap-3.5 p-2.5 rounded-2xl hover:bg-white/5 border border-transparent hover:border-white/10 transition-all cursor-pointer">
                                    <div class="w-9 h-9 rounded-xl bg-[#1e3a5f] text-[#00ff88] flex items-center justify-center flex-shrink-0 border border-white/10 group-hover/item:border-[#00ff88]/40 group-hover/item:bg-[#00ff88]/10 transition-colors">
                                        <svg class="w-4.5 h-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2">
                                            <span class="text-xs sm:text-sm font-bold text-white group-hover/item:text-[#00ff88] transition-colors">School Platform (SMS)</span>
                                            <span class="text-[9px] uppercase font-bold px-1.5 py-0.5 rounded bg-[#00ff88]/20 text-[#00ff88] border border-[#00ff88]/30">Live Cloud</span>
                                        </div>
                                        <p class="text-[11px] text-white/60 leading-relaxed mt-0.5">Automated grades, fee ledgers, parent portals &amp; attendance.</p>
                                    </div>
                                </a>

                                <!-- ESPass -->
                                <a href="{{ route('products.espass') }}" data-nav-preview="espass" class="nav-preview-trigger group/item flex items-start gap-3.5 p-2.5 rounded-2xl hover:bg-white/5 border border-transparent hover:border-white/10 transition-all cursor-pointer">
                                    <div class="w-9 h-9 rounded-xl bg-[#1e3a5f] text-[#00ff88] flex items-center justify-center flex-shrink-0 border border-white/10 group-hover/item:border-[#00ff88]/40 group-hover/item:bg-[#00ff88]/10 transition-colors">
                                        <svg class="w-4.5 h-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2">
                                            <span class="text-xs sm:text-sm font-bold text-white group-hover/item:text-[#00ff88] transition-colors">ESPass Event Ticketing</span>
                                            <span class="text-[9px] uppercase font-bold px-1.5 py-0.5 rounded bg-[#00ff88]/20 text-[#00ff88] border border-[#00ff88]/30">Live Engine</span>
                                        </div>
                                        <p class="text-[11px] text-white/60 leading-relaxed mt-0.5">Sub-second QR gate access control &amp; bank settlement.</p>
                                    </div>
                                </a>

                                <!-- Custom Software -->
                                <a href="{{ route('home') }}#services" data-nav-preview="custom" class="nav-preview-trigger group/item flex items-start gap-3.5 p-2.5 rounded-2xl hover:bg-white/5 border border-transparent hover:border-white/10 transition-all cursor-pointer">
                                    <div class="w-9 h-9 rounded-xl bg-[#1e3a5f] text-[#00ff88] flex items-center justify-center flex-shrink-0 border border-white/10 group-hover/item:border-[#00ff88]/40 group-hover/item:bg-[#00ff88]/10 transition-colors">
                                        <svg class="w-4.5 h-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2">
                                            <span class="text-xs sm:text-sm font-bold text-white group-hover/item:text-[#00ff88] transition-colors">Custom Software &amp; Cloud</span>
                                        </div>
                                        <p class="text-[11px] text-white/60 leading-relaxed mt-0.5">Tailor-engineered internal applications &amp; data flows.</p>
                                    </div>
                                </a>

                                <!-- Automation & APIs -->
                                <a href="{{ route('home') }}#services" data-nav-preview="automation" class="nav-preview-trigger group/item flex items-start gap-3.5 p-2.5 rounded-2xl hover:bg-white/5 border border-transparent hover:border-white/10 transition-all cursor-pointer">
                                    <div class="w-9 h-9 rounded-xl bg-[#1e3a5f] text-[#00ff88] flex items-center justify-center flex-shrink-0 border border-white/10 group-hover/item:border-[#00ff88]/40 group-hover/item:bg-[#00ff88]/10 transition-colors">
                                        <svg class="w-4.5 h-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2">
                                            <span class="text-xs sm:text-sm font-bold text-white group-hover/item:text-[#00ff88] transition-colors">Workflow Automation &amp; APIs</span>
                                        </div>
                                        <p class="text-[11px] text-white/60 leading-relaxed mt-0.5">Paystack, Flutterwave &amp; ledger sync pipelines.</p>
                                    </div>
                                </a>

                                <!-- Academy -->
                                <a href="{{ route('academy') }}" data-nav-preview="academy" class="nav-preview-trigger group/item flex items-start gap-3.5 p-2.5 rounded-2xl hover:bg-white/5 border border-transparent hover:border-white/10 transition-all cursor-pointer">
                                    <div class="w-9 h-9 rounded-xl bg-[#1e3a5f] text-[#00ff88] flex items-center justify-center flex-shrink-0 border border-white/10 group-hover/item:border-[#00ff88]/40 group-hover/item:bg-[#00ff88]/10 transition-colors">
                                        <svg class="w-4.5 h-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2">
                                            <span class="text-xs sm:text-sm font-bold text-white group-hover/item:text-[#00ff88] transition-colors">Academy Mentorship</span>
                                            <span class="text-[9px] uppercase font-bold px-1.5 py-0.5 rounded bg-white/10 text-white/70">Waitlist</span>
                                        </div>
                                        <p class="text-[11px] text-white/60 leading-relaxed mt-0.5">Cohort learning guided by senior engineers on live code.</p>
                                    </div>
                                </a>
                            </div>

                            <!-- Right: Visual Preview Card (Dynamic Hover Switcher) -->
                            <div id="nav-preview-card" class="rounded-2xl bg-[#0c1f3a] border border-white/15 p-4 flex flex-col justify-between overflow-hidden relative group/card hover:border-[#00ff88]/40 transition-all duration-300">
                                <div class="brand-texture opacity-25"></div>
                                <div class="relative z-10">
                                    <div class="flex items-center justify-between mb-2.5">
                                        <span id="nav-preview-badge" class="text-[10px] font-bold uppercase tracking-wider text-[#00ff88] flex items-center gap-1.5">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#00ff88] animate-pulse"></span>
                                            <span id="nav-preview-badge-text">Live Cloud System</span>
                                        </span>
                                        <span id="nav-preview-domain" class="text-[10px] text-white/60 font-mono">sms.extremesolutions.com.ng</span>
                                    </div>
                                    <!-- Thumbnail Screenshot with smooth transition -->
                                    <div class="relative rounded-xl overflow-hidden border border-white/10 shadow-md aspect-video bg-black/40">
                                        <img id="nav-preview-img" src="{{ asset('images/sms-preview.jpg') }}" alt="School Management System Dashboard Preview" class="w-full h-full object-cover transition-opacity duration-200" />
                                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a192f] via-transparent to-transparent opacity-60"></div>
                                        <div class="absolute bottom-2 left-2 right-2">
                                            <p id="nav-preview-title" class="text-xs font-bold text-white leading-tight">SMS Operations Console</p>
                                            <p id="nav-preview-sub" class="text-[10px] text-[#00ff88]">Active in production today</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative z-10 mt-3.5 pt-3 border-t border-white/10 flex items-center justify-between">
                                    <a id="nav-preview-link" href="https://sms.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 text-xs font-bold text-[#00ff88] hover:text-[#00cc6a] transition-colors">
                                        <span id="nav-preview-cta">Open Live Demo</span>
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('home') }}#featured-projects" class="text-[11px] text-white/60 hover:text-white transition-colors">
                                        All Live Systems &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('home') }}#how-we-work" class="text-[13px] text-white/80 hover:text-white transition-colors">
                    The 3-Step Process
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
        <div id="mobile-menu" class="hidden lg:hidden border-t border-white/10 py-4 space-y-1.5 w-full max-w-full overflow-hidden">
            <div class="px-3 py-1">
                <span class="text-[10px] font-bold uppercase tracking-wider text-[#00ff88]">Live Systems &amp; Platforms</span>
            </div>
            <a href="{{ route('products.school') }}" class="mobile-nav-link flex items-center justify-between px-3 py-2 rounded-lg text-sm font-medium text-white hover:bg-white/5 transition-colors">
                <span>School Management System</span>
                <span class="text-[9px] uppercase font-bold px-1.5 py-0.5 rounded bg-[#00ff88]/20 text-[#00ff88]">Live Cloud</span>
            </a>
            <a href="{{ route('products.espass') }}" class="mobile-nav-link flex items-center justify-between px-3 py-2 rounded-lg text-sm font-medium text-white hover:bg-white/5 transition-colors">
                <span>ESPass Event Ticketing</span>
                <span class="text-[9px] uppercase font-bold px-1.5 py-0.5 rounded bg-[#00ff88]/20 text-[#00ff88]">Live Engine</span>
            </a>
            <a href="{{ route('home') }}#services" class="mobile-nav-link block px-3 py-2 rounded-lg text-sm font-medium text-white/85 hover:text-white hover:bg-white/5 transition-colors">
                Custom Enterprise Software
            </a>
            
            <div class="border-t border-white/10 my-2 pt-2"></div>
            
            <a href="{{ route('home') }}#how-we-work" class="mobile-nav-link block px-3 py-2 rounded-lg text-sm font-medium text-white/85 hover:text-white hover:bg-white/5 transition-colors">
                The 3-Step Process
            </a>
            <a href="{{ route('about') }}" class="mobile-nav-link block px-3 py-2 rounded-lg text-sm font-medium text-white/85 hover:text-white hover:bg-white/5 transition-colors {{ request()->routeIs('about') ? 'text-[#00ff88]' : '' }}">
                About Us
            </a>
            <a href="{{ route('academy') }}" class="mobile-nav-link flex items-center justify-between px-3 py-2 rounded-lg text-sm font-medium text-white/85 hover:text-white hover:bg-white/5 transition-colors {{ request()->routeIs('academy') ? 'text-[#00ff88]' : '' }}">
                <span>Academy (Mentorship)</span>
                <span class="text-[9px] uppercase font-bold px-1.5 py-0.5 rounded bg-white/10 text-white/70">Waitlist</span>
            </a>
            <a href="{{ route('contact') }}" class="mobile-nav-link block px-3 py-2 rounded-lg text-sm font-medium text-white/85 hover:text-white hover:bg-white/5 transition-colors {{ request()->routeIs('contact') ? 'text-[#00ff88]' : '' }}">
                Contact Us
            </a>
            <div class="pt-3 px-1">
                <a href="{{ route('contact') }}" class="flex items-center justify-center rounded-full bg-[#00ff88] text-[#1e3a5f] px-5 py-3 text-sm font-bold shadow-md hover:bg-[#00cc6a] transition-colors w-full">
                    Book a Consultation
                </a>
            </div>
        </div>
    </nav>
    <script>
    (function() {
        const previewData = {
            sms: {
                badge: 'Live Cloud System',
                domain: 'sms.extremesolutions.com.ng',
                img: '{{ asset('images/sms-preview.jpg') }}',
                alt: 'School Management System Dashboard Preview',
                title: 'SMS Operations Console',
                sub: 'Term grades, fee tracking & registers',
                link: 'https://sms.extremesolutions.com.ng',
                cta: 'Open SMS Demo',
                target: '_blank'
            },
            espass: {
                badge: 'Live Ticketing Engine',
                domain: 'espass.extremesolutions.com.ng',
                img: '{{ asset('images/espass-preview.jpg') }}',
                alt: 'ESPass Event Ticketing & Gate Scanner Preview',
                title: 'ESPass Gate Scanner Console',
                sub: 'Sub-second QR gate check-in & settlement',
                link: 'https://espass.extremesolutions.com.ng',
                cta: 'Open ESPass Live',
                target: '_blank'
            },
            custom: {
                badge: 'Proprietary Architecture',
                domain: 'cloud-architecture.prod',
                img: '{{ asset('images/custom-software-preview.jpg') }}',
                alt: 'Custom Software & Enterprise Cloud Architecture',
                title: 'Custom Enterprise Cloud Systems',
                sub: 'Purpose-built software & internal pipelines',
                link: '{{ route('home') }}#services',
                cta: 'Scope Your Build',
                target: '_self'
            },
            automation: {
                badge: 'Automation Pipeline',
                domain: 'api.extremesolutions.com.ng',
                img: '{{ asset('images/automation-preview.jpg') }}',
                alt: 'Workflow Automation & Payment APIs Preview',
                title: 'Workflow Automation & APIs',
                sub: 'Paystack, Flutterwave & database sync',
                link: '{{ route('home') }}#services',
                cta: 'View Automation',
                target: '_self'
            },
            academy: {
                badge: 'Mentorship Program',
                domain: 'academy.extremesolutions.com.ng',
                img: '{{ asset('images/academy-preview.jpg') }}',
                alt: 'ExtremeSolutions Engineering Academy Preview',
                title: 'Engineering Academy Portal',
                sub: 'Practical mentorship on live code',
                link: '{{ route('academy') }}',
                cta: 'Join Academy Waitlist',
                target: '_self'
            }
        };

        function initNavPreviewSwitcher() {
            const triggers = document.querySelectorAll('.nav-preview-trigger');
            const badgeText = document.getElementById('nav-preview-badge-text');
            const domainText = document.getElementById('nav-preview-domain');
            const imgElem = document.getElementById('nav-preview-img');
            const titleText = document.getElementById('nav-preview-title');
            const subText = document.getElementById('nav-preview-sub');
            const linkElem = document.getElementById('nav-preview-link');
            const ctaText = document.getElementById('nav-preview-cta');

            if (!triggers.length || !imgElem) return;

            triggers.forEach(function(trigger) {
                trigger.addEventListener('mouseenter', function() {
                    const key = this.getAttribute('data-nav-preview');
                    const data = previewData[key];
                    if (!data) return;

                    // Highlight active item
                    triggers.forEach(function(t) {
                        t.classList.remove('bg-white/10', 'border-[#00ff88]/40');
                    });
                    this.classList.add('bg-white/10', 'border-[#00ff88]/40');

                    // Smooth cross-fade image
                    imgElem.style.opacity = '0.35';
                    setTimeout(function() {
                        imgElem.src = data.img;
                        imgElem.alt = data.alt;
                        imgElem.style.opacity = '1';
                    }, 80);

                    if (badgeText) badgeText.textContent = data.badge;
                    if (domainText) domainText.textContent = data.domain;
                    if (titleText) titleText.textContent = data.title;
                    if (subText) subText.textContent = data.sub;
                    if (linkElem) {
                        linkElem.href = data.link;
                        linkElem.target = data.target || '_blank';
                    }
                    if (ctaText) ctaText.textContent = data.cta;
                });
            });
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initNavPreviewSwitcher);
        } else {
            initNavPreviewSwitcher();
        }
    })();
    </script>
</header>
<!-- Header height offset spacer so page content isn't obscured -->
<div class="h-16 sm:h-20" aria-hidden="true"></div>
