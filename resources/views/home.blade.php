@extends('layouts.app')

@section('title', 'ExtremeSolutions | Custom Software, School Systems & Digital Automation')
@section('description', 'ExtremeSolutions designs and builds custom software, school management platforms, and digital workflow automation for institutions in Lagos, Abuja, and across Nigeria. Live at sms.extremesolutions.com.ng.')

@php
    $faqSchema = json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'How does ExtremeSolutions differ from other software vendors?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'We do not just advise or resell third-party tools. We engineer and operate our own live production platforms — such as the ExtremeSolutions School Management System (sms.extremesolutions.com.ng) and ESPass (espass.extremesolutions.com.ng). When we build your system, you deal directly with senior software engineers, see working software early, and receive dedicated post-launch support.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'How does the School Management System work for my school?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'ExtremeSolutions SMS unifies student fee tracking, automated term result collation, attendance monitoring, and parent communication into one secure cloud dashboard. We assist your school with data migration, onboarding, and comprehensive staff training so your team never struggles with paper registers or spreadsheet errors again.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'How is pricing structured?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'For our School Management System, we use a transparent, low-commitment per-student, per-term model that scales naturally with your school. For custom software and business systems, we agree on clear, milestone-based pricing upfront with zero hidden fees.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'Can we test the live platforms before making a commitment?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Yes. Both sms.extremesolutions.com.ng and espass.extremesolutions.com.ng are live in production. You can book a free, no-obligation walkthrough with our team where we demonstrate the system with your exact operational context in mind.',
                ],
            ],
            [
                '@type' => 'Question',
                'name' => 'What level of support do you provide after launch?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'We never hand over software into silence. We provide ongoing maintenance, automated cloud backups, 24/7 server monitoring, and direct phone and WhatsApp access to a real engineer whenever your staff needs assistance.',
                ],
            ],
        ],
    ]);
@endphp

@section('structured-data')
<script type="application/ld+json">{!! $faqSchema !!}</script>
@endsection

@section('content')
    <!-- 1. Hero Section (Brand Navy Surface with Crisp Emerald Accents) -->
    <section class="brand-surface relative overflow-hidden bg-[#1e3a5f] text-white pt-16 pb-20 md:pt-24 md:pb-32 w-full max-w-full">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="brand-glow top-0 left-1/2 -translate-x-1/2 w-[550px] h-[300px] bg-gradient-to-br from-[#0f2444] via-[#00ff88]/15 to-transparent"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center w-full">
            <!-- Top Operational Badge -->
            <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-xs text-white/90 backdrop-blur-md mb-8 reveal">
                <span class="w-2 h-2 rounded-full bg-[#00ff88] animate-pulse"></span>
                <span class="font-medium tracking-wide">Live in Production &middot; Lagos &amp; Abuja, Nigeria</span>
            </div>

            <!-- Two-Tone Headline with Emerald Period -->
            <h1 class="mx-auto max-w-4xl text-3xl sm:text-5xl lg:text-[60px] tracking-tight leading-[1.14] reveal">
                <span class="font-light text-white/90">Software Engineered to Fit</span><br/>
                <span class="font-bold text-white">How Your Institution Runs<span class="text-[#00ff88]">.</span></span>
            </h1>

            <!-- SB7 Problem & Empathy Subline -->
            <p class="mx-auto mt-6 max-w-2xl text-sm sm:text-base leading-relaxed text-white/80 reveal">
                Your organization shouldn't have to contort around generic software that fights you. 
                We engineer reliable school management systems, ticketing platforms, and custom software &mdash; replacing paper registers and error-prone spreadsheets with technology your team runs with ease.
            </p>

            <!-- Dual Direct & Transitional CTAs -->
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4 reveal">
                <a href="#request-quote" class="inline-flex items-center rounded-full bg-[#00ff88] px-8 py-3.5 text-sm font-bold text-[#1e3a5f] hover:bg-[#00cc6a] transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                    Book a Free School Demo
                </a>
                <a href="#featured-projects" class="group inline-flex items-center gap-2 rounded-full border border-white/30 px-7 py-3.5 text-sm font-medium text-white hover:bg-white/10 transition-colors">
                    <span>Inspect Live Platforms</span>
                    <svg class="h-4 w-4 text-[#00ff88] transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l10-10M7 7h10v10" />
                    </svg>
                </a>
            </div>

            <!-- Live Proof Strip -->
            <div class="mt-16 pt-8 border-t border-white/10 reveal">
                <p class="text-[11px] uppercase tracking-[0.25em] text-white/50 font-medium">
                    Verified Platforms Operated Live by ExtremeSolutions
                </p>
                <div class="mt-5 flex flex-wrap items-center justify-center gap-4 sm:gap-8 text-sm">
                    <a href="https://sms.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="group inline-flex items-center gap-2 rounded-xl bg-white/5 border border-white/15 px-4 py-2.5 text-white/80 hover:text-white hover:border-[#00ff88]/60 transition-all">
                        <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                        <span class="font-medium text-xs sm:text-sm">sms.extremesolutions.com.ng</span>
                        <span class="text-[10px] uppercase font-bold text-[#00ff88] bg-[#00ff88]/15 px-2 py-0.5 rounded">School Platform</span>
                    </a>
                    <a href="https://espass.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="group inline-flex items-center gap-2 rounded-xl bg-white/5 border border-white/15 px-4 py-2.5 text-white/80 hover:text-white hover:border-[#00ff88]/60 transition-all">
                        <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                        <span class="font-medium text-xs sm:text-sm">espass.extremesolutions.com.ng</span>
                        <span class="text-[10px] uppercase font-bold text-[#00ff88] bg-[#00ff88]/15 px-2 py-0.5 rounded">Event Ticketing</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Tech Stack Infinite Marquee (Strict Mobile Overflow-Safe) -->
    <section id="stack" class="overflow-hidden bg-white py-8 md:py-10 border-b border-gray-100 w-full max-w-full">
        <p class="mb-5 text-center text-xs uppercase tracking-[0.25em] text-gray-400 font-medium">
            Production Technologies Behind Our Architectures
        </p>
        <div class="marquee-container w-full max-w-full">
            <div class="marquee-track">
                <span class="font-semibold text-gray-800 text-sm">Laravel</span>
                <span class="font-semibold text-gray-800 text-sm">TypeScript</span>
                <span class="font-semibold text-gray-800 text-sm">React &amp; Next.js</span>
                <span class="font-semibold text-gray-800 text-sm">Python</span>
                <span class="font-semibold text-gray-800 text-sm">PostgreSQL</span>
                <span class="font-semibold text-gray-800 text-sm">Tailwind CSS</span>
                <span class="font-semibold text-gray-800 text-sm">Docker</span>
                <span class="font-semibold text-gray-800 text-sm">Cloudflare</span>
                <span class="font-semibold text-gray-800 text-sm">Redis</span>
                <span class="font-semibold text-gray-800 text-sm">Flutter Mobile</span>
                <!-- Loop -->
                <span class="font-semibold text-gray-800 text-sm">Laravel</span>
                <span class="font-semibold text-gray-800 text-sm">TypeScript</span>
                <span class="font-semibold text-gray-800 text-sm">React &amp; Next.js</span>
                <span class="font-semibold text-gray-800 text-sm">Python</span>
                <span class="font-semibold text-gray-800 text-sm">PostgreSQL</span>
                <span class="font-semibold text-gray-800 text-sm">Tailwind CSS</span>
            </div>
        </div>
    </section>

    <!-- 3. SB7 Guide Authority Card (ExtremeSolutions Credo) -->
    <section id="authority" class="bg-white py-12 md:py-16 w-full max-w-full overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl bg-[#1e3a5f] relative overflow-hidden p-8 md:p-12 shadow-xl reveal">
                <div class="brand-texture opacity-30" aria-hidden="true"></div>
                <div class="relative z-10 flex flex-col justify-between gap-8 lg:flex-row lg:items-center">
                    <div class="max-w-2xl text-white">
                        <div class="inline-flex items-center gap-2 text-[#00ff88] text-xs font-bold uppercase tracking-wider mb-4">
                            <span>Our Engineering Position</span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-bold tracking-tight">
                            We Don't Just Advise. We Build, Operate, and Maintain<span class="text-[#00ff88]">.</span>
                        </h2>
                        <p class="mt-4 text-sm sm:text-base leading-relaxed text-white/80">
                            Too many vendors deliver unfinished software and vanish into silence. 
                            At ExtremeSolutions, we build systems we operate ourselves. We work directly with your school leadership and admin staff in Lagos, Abuja, and across Nigeria to migrate records, train your operators, and keep your software humming 24/7.
                        </p>
                    </div>

                    <!-- Direct Credibility Badge -->
                    <div class="w-full lg:max-w-sm rounded-2xl bg-white/10 border border-white/15 p-6 backdrop-blur-md text-white">
                        <p class="text-xs sm:text-sm leading-relaxed text-white/90 italic">
                            "Every platform we deploy carries our reputation. We engineer software the way we run our own production systems — secure, fast, and fail-proof."
                        </p>
                        <div class="mt-4 pt-4 border-t border-white/10 flex items-center justify-between">
                            <div>
                                <p class="text-xs font-bold text-white">ExtremeSolutions Engineering</p>
                                <p class="text-[11px] text-white/60">Core Architecture Team</p>
                            </div>
                            <span class="inline-flex items-center gap-1 rounded-full bg-[#00ff88]/20 px-2.5 py-1 text-[10px] font-bold text-[#00ff88]">
                                Active Uptime 99.9%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Solutions ("What We Build" - SB7 Widened Capability) -->
    <section id="services" class="bg-[#f8fafc] py-20 md:py-28 border-y border-gray-200/70 w-full max-w-full overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <h2 class="text-3xl sm:text-5xl tracking-tight leading-[1.15] reveal">
                    <span class="font-light text-gray-500">Purpose-Built</span>
                    <span class="font-bold text-[#1e3a5f]">Platforms &amp; Systems</span><span class="text-[#00ff88]">.</span>
                </h2>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed reveal">
                    We architect solutions that directly remove manual overhead, eliminate human calculation errors, and give leaders total visibility.
                </p>
            </div>

            <div class="mt-14 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- 1: School Management System -->
                <div class="group flex flex-col rounded-2xl bg-white p-5 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg reveal">
                    <div class="h-44 overflow-hidden rounded-xl bg-[#e8f4f0] text-[#1e3a5f] p-5 flex items-center justify-center transition-colors group-hover:bg-[#d8ede5]">
                        <svg class="h-full w-full" viewBox="0 0 320 180" fill="none" stroke="currentColor">
                            <rect x="50" y="25" width="220" height="130" rx="8" stroke-width="2" fill="currentColor" fill-opacity="0.04" />
                            <path d="M50 55h220" stroke-width="2" />
                            <circle cx="70" cy="40" r="4" fill="currentColor" />
                            <circle cx="85" cy="40" r="4" fill="currentColor" />
                            <circle cx="100" cy="40" r="4" fill="currentColor" />
                            <rect x="70" y="70" width="85" height="30" rx="4" stroke-width="1.8" />
                            <rect x="165" y="70" width="85" height="30" rx="4" stroke-width="1.8" />
                            <path d="M70 120h180" stroke-width="2" stroke-dasharray="4 4" />
                            <path d="M70 135h120" stroke-width="2" />
                        </svg>
                    </div>
                    <div class="mt-6 px-2">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-bold text-[#1e3a5f]">School Management (SMS)</h3>
                            <span class="text-[10px] uppercase font-bold text-[#00994d] bg-[#00ff88]/20 px-2 py-0.5 rounded">Live Demo</span>
                        </div>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Complete cloud platform for forward-thinking schools: automated student term results, fee ledger reconciliation, attendance logs, and parent portals.
                        </p>
                        <a href="{{ route('products.school') }}" class="mt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#1e3a5f] hover:text-[#00994d] transition-colors">
                            <span>Explore School Platform</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- 2: ESPass Event Ticketing -->
                <div class="group flex flex-col rounded-2xl bg-white p-5 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg reveal">
                    <div class="h-44 overflow-hidden rounded-xl bg-[#e8f4f0] text-[#1e3a5f] p-5 flex items-center justify-center transition-colors group-hover:bg-[#d8ede5]">
                        <svg class="h-full w-full" viewBox="0 0 320 180" fill="none" stroke="currentColor">
                            <rect x="60" y="35" width="200" height="110" rx="12" stroke-width="2" fill="currentColor" fill-opacity="0.04" />
                            <path d="M130 35v110" stroke-width="2" stroke-dasharray="4 6" />
                            <rect x="80" y="60" width="35" height="35" rx="4" stroke-width="1.8" />
                            <path d="M87 77h21M97 67v21" stroke-width="1.5" />
                            <path d="M150 65h85M150 85h60M150 105h40" stroke-width="2" />
                        </svg>
                    </div>
                    <div class="mt-6 px-2">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-bold text-[#1e3a5f]">ESPass Event Ticketing</h3>
                            <span class="text-[10px] uppercase font-bold text-[#00994d] bg-[#00ff88]/20 px-2 py-0.5 rounded">Live Demo</span>
                        </div>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Sub-second QR gate validation, instant financial reconciliation, and fraud-proof digital passes for conferences, venues, and institutions.
                        </p>
                        <a href="{{ route('products.espass') }}" class="mt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#1e3a5f] hover:text-[#00994d] transition-colors">
                            <span>Explore ESPass Platform</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- 3: Custom Software Engineering -->
                <div class="group flex flex-col rounded-2xl bg-white p-5 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg reveal">
                    <div class="h-44 overflow-hidden rounded-xl bg-[#e8f4f0] text-[#1e3a5f] p-5 flex items-center justify-center transition-colors group-hover:bg-[#d8ede5]">
                        <svg class="h-full w-full" viewBox="0 0 320 180" fill="none" stroke="currentColor">
                            <rect x="65" y="30" width="190" height="120" rx="8" stroke-width="2" fill="currentColor" fill-opacity="0.04" />
                            <path d="M100 70l-20 20 20 20M220 70l20 20-20 20M170 65l-20 50" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="mt-6 px-2">
                        <h3 class="text-lg font-bold text-[#1e3a5f]">Custom Software Engineering</h3>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Purpose-built web applications and institutional software designed around your actual internal procedures &mdash; never forcing you into off-the-shelf limits.
                        </p>
                        <a href="#request-quote" class="mt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#1e3a5f] hover:text-[#00994d] transition-colors">
                            <span>Scope a Custom Build</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- 4: Enterprise Systems & Automation -->
                <div class="group flex flex-col rounded-2xl bg-white p-5 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg reveal">
                    <div class="h-44 overflow-hidden rounded-xl bg-[#e8f4f0] text-[#1e3a5f] p-5 flex items-center justify-center transition-colors group-hover:bg-[#d8ede5]">
                        <svg class="h-full w-full" viewBox="0 0 320 180" fill="none" stroke="currentColor">
                            <circle cx="90" cy="90" r="30" stroke-width="2" fill="currentColor" fill-opacity="0.04" />
                            <circle cx="230" cy="90" r="30" stroke-width="2" fill="currentColor" fill-opacity="0.04" />
                            <path d="M120 90h80" stroke-width="2" stroke-dasharray="3 4" />
                            <path d="M190 80l10 10-10 10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="mt-6 px-2">
                        <h3 class="text-lg font-bold text-[#1e3a5f]">Workflow Automation &amp; APIs</h3>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Connecting payment gateways (Paystack, Flutterwave), external databases, and internal ledgers into an automatic, error-free sync pipeline.
                        </p>
                        <a href="#request-quote" class="mt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#1e3a5f] hover:text-[#00994d] transition-colors">
                            <span>Automate Manual Steps</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- 5: Web & Mobile Portals -->
                <div class="group flex flex-col rounded-2xl bg-white p-5 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg reveal">
                    <div class="h-44 overflow-hidden rounded-xl bg-[#e8f4f0] text-[#1e3a5f] p-5 flex items-center justify-center transition-colors group-hover:bg-[#d8ede5]">
                        <svg class="h-full w-full" viewBox="0 0 320 180" fill="none" stroke="currentColor">
                            <rect x="70" y="30" width="120" height="120" rx="8" stroke-width="2" fill="currentColor" fill-opacity="0.04" />
                            <rect x="205" y="45" width="55" height="105" rx="8" stroke-width="2" />
                            <circle cx="232" cy="138" r="3" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="mt-6 px-2">
                        <h3 class="text-lg font-bold text-[#1e3a5f]">Web &amp; Mobile Applications</h3>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Ultra-fast responsive portals and mobile apps engineered for reliability on low-bandwidth networks across Nigerian devices.
                        </p>
                        <a href="#request-quote" class="mt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#1e3a5f] hover:text-[#00994d] transition-colors">
                            <span>Discuss Mobile/Web Build</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- 6: ExtremeSolutions Academy -->
                <div class="group flex flex-col rounded-2xl bg-white p-5 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg reveal">
                    <div class="h-44 overflow-hidden rounded-xl bg-[#e8f4f0] text-[#1e3a5f] p-5 flex items-center justify-center transition-colors group-hover:bg-[#d8ede5]">
                        <svg class="h-full w-full" viewBox="0 0 320 180" fill="none" stroke="currentColor">
                            <path d="M160 35l90 45-90 45-90-45 90-45z" stroke-width="2" fill="currentColor" fill-opacity="0.04" />
                            <path d="M100 95v35c0 15 27 27 60 27s60-12 60-27V95" stroke-width="2" />
                        </svg>
                    </div>
                    <div class="mt-6 px-2">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-bold text-[#1e3a5f]">Training &amp; Mentorship</h3>
                            <span class="text-[10px] uppercase font-bold text-[#00994d] bg-[#00ff88]/20 px-2 py-0.5 rounded">Coming Soon</span>
                        </div>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Cohort-based practical mentorship training young Nigerian software talent on real production architectures &mdash; not toy exercises.
                        </p>
                        <a href="{{ route('academy') }}" class="mt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#1e3a5f] hover:text-[#00994d] transition-colors">
                            <span>Join Academy Waitlist</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. The 3-Step Path (Donald Miller SB7 Plan) -->
    <section id="how-we-work" class="bg-[#1e3a5f] relative overflow-hidden py-20 md:py-28 text-white w-full max-w-full">
        <div class="brand-texture opacity-30" aria-hidden="true"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 w-full">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <span class="text-xs font-bold uppercase tracking-wider text-[#00ff88]">The Clear Plan</span>
                <h2 class="mt-2 text-3xl sm:text-5xl font-bold tracking-tight">
                    How We Get Your Organization Live<span class="text-[#00ff88]">.</span>
                </h2>
                <p class="mt-4 text-sm sm:text-base text-white/80 leading-relaxed">
                    Zero guesswork. A structured, transparent 3-step path from manual confusion to clean digital operations.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Step 1 -->
                <div class="rounded-3xl border border-white/15 bg-white/[0.07] p-8 backdrop-blur-sm reveal">
                    <div class="w-12 h-12 rounded-2xl bg-[#00ff88] text-[#1e3a5f] flex items-center justify-center font-extrabold text-lg mb-6">
                        01
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Talk to Us (Free Discovery)</h3>
                    <p class="text-sm leading-relaxed text-white/75">
                        A focused, zero-obligation call or in-person session in Lagos or Abuja. We audit your manual paperwork, fee tracking, and operational bottlenecks.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="rounded-3xl border border-white/15 bg-white/[0.07] p-8 backdrop-blur-sm reveal">
                    <div class="w-12 h-12 rounded-2xl bg-[#00ff88] text-[#1e3a5f] flex items-center justify-center font-extrabold text-lg mb-6">
                        02
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">We Configure, Migrate &amp; Train</h3>
                    <p class="text-sm leading-relaxed text-white/75">
                        We configure the platform to your exact classes or business departments, import your records safely, and train your staff until they are 100% confident.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="rounded-3xl border border-white/15 bg-white/[0.07] p-8 backdrop-blur-sm reveal">
                    <div class="w-12 h-12 rounded-2xl bg-[#00ff88] text-[#1e3a5f] flex items-center justify-center font-extrabold text-lg mb-6">
                        03
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">You Go Live with 24/7 Support</h3>
                    <p class="text-sm leading-relaxed text-white/75">
                        Launch smoothly with direct access to our technical team via phone and WhatsApp. We maintain your cloud backups and server uptime continuously.
                    </p>
                </div>
            </div>

            <div class="mt-12 text-center reveal">
                <a href="#request-quote" class="inline-flex items-center rounded-full bg-[#00ff88] px-8 py-3.5 text-sm font-bold text-[#1e3a5f] hover:bg-[#00cc6a] transition-all shadow-lg">
                    Begin Step 1: Book Free Consultation
                </a>
            </div>
        </div>
    </section>

    <!-- 6. Featured Live Systems (Interactive Proof Showcase) -->
    <section id="featured-projects" class="bg-white py-20 md:py-28 w-full max-w-full overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-[#00994d]">Operational Proof</span>
                <h2 class="mt-2 text-3xl sm:text-5xl tracking-tight leading-[1.15] reveal">
                    <span class="font-light text-gray-500">Live Systems</span>
                    <span class="font-bold text-[#1e3a5f]">In Production Today</span><span class="text-[#00ff88]">.</span>
                </h2>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed reveal">
                    We don't pitch mockups. These platforms are live, cloud-hosted, and actively operated by ExtremeSolutions.
                </p>
            </div>

            <!-- Tabbed Selector and Showcase -->
            <div class="grid gap-8 lg:grid-cols-12 lg:gap-12 items-start">
                <!-- Left: Tabs -->
                <div class="lg:col-span-5 order-2 lg:order-1 border-t border-gray-200">
                    <!-- Tab 1 -->
                    <div class="cursor-pointer border-b border-gray-200 py-6 transition-colors hover:bg-gray-50/70" data-project-tab="sms" role="tab" aria-selected="true">
                        <div class="flex items-baseline gap-4">
                            <span class="project-num text-base font-bold tabular-nums text-[#00ff88]">01</span>
                            <div class="min-w-0 flex-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="project-title text-xl font-bold text-[#1e3a5f]">School Management System</h3>
                                    <svg class="h-5 w-5 text-[#00994d]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l10-10M7 7h10v10" />
                                    </svg>
                                </div>
                                <p class="mt-1.5 text-xs font-medium text-gray-500">
                                    <span>Cloud Platform</span> &middot; <span class="text-[#1e3a5f] font-semibold">sms.extremesolutions.com.ng</span>
                                </p>
                                <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                                    Term fee tracking, automated exam grade computation, attendance registers, and parent portals.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 2 -->
                    <div class="cursor-pointer border-b border-gray-200 py-6 transition-colors hover:bg-gray-50/70" data-project-tab="espass" role="tab" aria-selected="false">
                        <div class="flex items-baseline gap-4">
                            <span class="project-num text-base font-bold tabular-nums text-gray-400">02</span>
                            <div class="min-w-0 flex-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="project-title text-xl font-medium text-gray-500">ESPass Digital Ticketing</h3>
                                    <svg class="h-5 w-5 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l10-10M7 7h10v10" />
                                    </svg>
                                </div>
                                <p class="mt-1.5 text-xs font-medium text-gray-400">
                                    <span>Event Access SaaS</span> &middot; <span>espass.extremesolutions.com.ng</span>
                                </p>
                                <p class="mt-2.5 text-xs sm:text-sm text-gray-500 leading-relaxed">
                                    Fraud-proof barcode passes, sub-second gate validation, and transparent revenue settlement.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 3 -->
                    <div class="cursor-pointer border-b border-gray-200 py-6 transition-colors hover:bg-gray-50/70" data-project-tab="automation" role="tab" aria-selected="false">
                        <div class="flex items-baseline gap-4">
                            <span class="project-num text-base font-bold tabular-nums text-gray-400">03</span>
                            <div class="min-w-0 flex-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="project-title text-xl font-medium text-gray-500">Bespoke Enterprise Systems</h3>
                                    <svg class="h-5 w-5 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l10-10M7 7h10v10" />
                                    </svg>
                                </div>
                                <p class="mt-1.5 text-xs font-medium text-gray-400">
                                    <span>Enterprise Build</span> &middot; <span>Custom Architecture</span>
                                </p>
                                <p class="mt-2.5 text-xs sm:text-sm text-gray-500 leading-relaxed">
                                    Database integrations, payment pipelines, and internal operator control panels.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Active Showcase Panel -->
                <div class="lg:col-span-7 order-1 lg:order-2">
                    <!-- Panel 1: School System -->
                    <div data-project-panel="sms" class="block tab-panel rounded-3xl bg-[#1e3a5f] text-white p-7 sm:p-10 shadow-xl border border-white/10 relative overflow-hidden">
                        <div class="brand-texture opacity-30" aria-hidden="true"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between gap-4">
                                <span class="inline-flex items-center gap-2 rounded-full bg-[#00ff88]/20 px-3 py-1 text-xs font-bold text-[#00ff88]">
                                    <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                                    Live in Production
                                </span>
                                <a href="https://sms.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="text-xs font-mono text-[#00ff88] hover:underline flex items-center gap-1">
                                    sms.extremesolutions.com.ng &rarr;
                                </a>
                            </div>

                            <h4 class="mt-5 text-2xl sm:text-3xl font-bold tracking-tight">ExtremeSolutions SMS Platform</h4>
                            <p class="mt-3 text-sm text-white/80 leading-relaxed">
                                Tested and operating live. Built specifically for Nigerian nursery, primary, and secondary schools. Eradicates term-end result collation headaches and manual fee ledger discrepancies completely.
                            </p>

                            <!-- Live Stats -->
                            <div class="mt-8 grid grid-cols-3 gap-4 pt-6 border-t border-white/10">
                                <div>
                                    <p class="text-2xl sm:text-3xl font-extrabold text-[#00ff88] tracking-tight">100%</p>
                                    <p class="mt-1 text-[11px] text-white/70">Automated Grade Computation</p>
                                </div>
                                <div>
                                    <p class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">0</p>
                                    <p class="mt-1 text-[11px] text-white/70">Paper Registers Required</p>
                                </div>
                                <div>
                                    <p class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Instant</p>
                                    <p class="mt-1 text-[11px] text-white/70">Parent Result Access</p>
                                </div>
                            </div>

                            <div class="mt-8 flex flex-wrap gap-3">
                                <a href="{{ route('products.school') }}" class="rounded-full bg-[#00ff88] px-6 py-2.5 text-xs font-bold text-[#1e3a5f] hover:bg-[#00cc6a] transition-colors">
                                    Read School Pitch Details
                                </a>
                                <a href="https://sms.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="rounded-full border border-white/20 bg-white/10 px-6 py-2.5 text-xs font-medium text-white hover:bg-white/20 transition-colors">
                                    Open Live Demo
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Panel 2: ESPass -->
                    <div data-project-panel="espass" class="hidden tab-panel rounded-3xl bg-[#1e3a5f] text-white p-7 sm:p-10 shadow-xl border border-white/10 relative overflow-hidden">
                        <div class="brand-texture opacity-30" aria-hidden="true"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between gap-4">
                                <span class="inline-flex items-center gap-2 rounded-full bg-[#00ff88]/20 px-3 py-1 text-xs font-bold text-[#00ff88]">
                                    <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                                    Live in Production
                                </span>
                                <a href="https://espass.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="text-xs font-mono text-[#00ff88] hover:underline flex items-center gap-1">
                                    espass.extremesolutions.com.ng &rarr;
                                </a>
                            </div>

                            <h4 class="mt-5 text-2xl sm:text-3xl font-bold tracking-tight">ESPass Event &amp; Ticketing Engine</h4>
                            <p class="mt-3 text-sm text-white/80 leading-relaxed">
                                Scalable event ticketing and access control infrastructure. Checks guests in via rapid barcode validation with real-time attendee reconciliation and settlement.
                            </p>

                            <div class="mt-8 grid grid-cols-3 gap-4 pt-6 border-t border-white/10">
                                <div>
                                    <p class="text-2xl sm:text-3xl font-extrabold text-[#00ff88] tracking-tight">&lt; 0.5s</p>
                                    <p class="mt-1 text-[11px] text-white/70">Gate Scan Verification</p>
                                </div>
                                <div>
                                    <p class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">100%</p>
                                    <p class="mt-1 text-[11px] text-white/70">Reconciliation Accuracy</p>
                                </div>
                                <div>
                                    <p class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">0</p>
                                    <p class="mt-1 text-[11px] text-white/70">Duplicate Ticket Fraud</p>
                                </div>
                            </div>

                            <div class="mt-8 flex flex-wrap gap-3">
                                <a href="{{ route('products.espass') }}" class="rounded-full bg-[#00ff88] px-6 py-2.5 text-xs font-bold text-[#1e3a5f] hover:bg-[#00cc6a] transition-colors">
                                    Explore ESPass System
                                </a>
                                <a href="https://espass.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="rounded-full border border-white/20 bg-white/10 px-6 py-2.5 text-xs font-medium text-white hover:bg-white/20 transition-colors">
                                    Open Live Platform
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Panel 3: Automation -->
                    <div data-project-panel="automation" class="hidden tab-panel rounded-3xl bg-[#1e3a5f] text-white p-7 sm:p-10 shadow-xl border border-white/10 relative overflow-hidden">
                        <div class="brand-texture opacity-30" aria-hidden="true"></div>
                        <div class="relative z-10">
                            <span class="inline-flex items-center gap-2 rounded-full bg-white/15 px-3 py-1 text-xs font-bold text-[#00ff88]">
                                Enterprise Custom
                            </span>

                            <h4 class="mt-5 text-2xl sm:text-3xl font-bold tracking-tight">Bespoke Operations &amp; Database Pipelines</h4>
                            <p class="mt-3 text-sm text-white/80 leading-relaxed">
                                Tailor-engineered internal applications connecting inventory, customer invoices, payment gateways, and staff permissions into an automated control panel.
                            </p>

                            <div class="mt-8 grid grid-cols-3 gap-4 pt-6 border-t border-white/10">
                                <div>
                                    <p class="text-2xl sm:text-3xl font-extrabold text-[#00ff88] tracking-tight">10x</p>
                                    <p class="mt-1 text-[11px] text-white/70">Faster Process Execution</p>
                                </div>
                                <div>
                                    <p class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Role</p>
                                    <p class="mt-1 text-[11px] text-white/70">Strict Granular Access</p>
                                </div>
                                <div>
                                    <p class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Audit</p>
                                    <p class="mt-1 text-[11px] text-white/70">Immutable Activity Logs</p>
                                </div>
                            </div>

                            <div class="mt-8">
                                <a href="#request-quote" class="rounded-full bg-[#00ff88] px-6 py-2.5 text-xs font-bold text-[#1e3a5f] hover:bg-[#00cc6a] transition-colors">
                                    Request Architecture Scope
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. The Stakes: What Happens If You Stay on Manual vs Partner With Us (SB7 Stakes) -->
    <section class="bg-[#f8fafc] py-20 border-y border-gray-200/70 w-full max-w-full overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-xs font-bold uppercase tracking-wider text-[#00994d]">The Stakes</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#1e3a5f] reveal">
                    Two Paths For Your Operations
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Path 1: Manual -->
                <div class="rounded-3xl bg-white border border-gray-200 p-8 sm:p-10 shadow-sm reveal">
                    <span class="text-xs font-bold uppercase tracking-wider text-red-600 bg-red-50 px-3 py-1 rounded-full">Stay On Manual Spreadsheets</span>
                    <h3 class="mt-4 text-xl font-bold text-gray-900">The Ongoing Drain</h3>
                    <ul class="mt-6 space-y-4 text-sm text-gray-700">
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold text-lg leading-none">&times;</span>
                            <span>Fee ledgers tracked by hand across multiple paper books with untracked cash leaks.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold text-lg leading-none">&times;</span>
                            <span>Calculation and transcription errors in student term results that cause parent disputes.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold text-lg leading-none">&times;</span>
                            <span>Admin staff overwhelmed at term start and term end, working late into the night.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold text-lg leading-none">&times;</span>
                            <span>Hiring outside freelance coders who build half a system and abandon it when problems arise.</span>
                        </li>
                    </ul>
                </div>

                <!-- Path 2: ExtremeSolutions -->
                <div class="rounded-3xl bg-[#1e3a5f] text-white p-8 sm:p-10 shadow-xl border border-white/10 relative overflow-hidden reveal">
                    <div class="brand-texture opacity-30" aria-hidden="true"></div>
                    <div class="relative z-10">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#00ff88] bg-[#00ff88]/15 px-3 py-1 rounded-full">Partner With ExtremeSolutions</span>
                        <h3 class="mt-4 text-xl font-bold text-white">The Position of Strength</h3>
                        <ul class="mt-6 space-y-4 text-sm text-white/90">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-[#00ff88] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>One clean cloud platform uniting student records, fees, grades, and parent updates.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-[#00ff88] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Automated result computation with zero transcription mistakes and professional report cards.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-[#00ff88] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Parents view verified grades and payment receipts instantly on their mobile phones.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-[#00ff88] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Direct line to dedicated engineers on standby whenever term-end deadlines approach.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. NEW CREATIVE MODEL: Operational Clarity & Decision Hub (Replaces standard FAQ copycat) -->
    <section id="operational-clarity" class="bg-white py-20 md:py-28 w-full max-w-full overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12 reveal">
                <span class="text-xs font-bold uppercase tracking-wider text-[#00994d]">Operational Clarity</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#1e3a5f]">
                    Key Decisions &amp; Direct Answers<span class="text-[#00ff88]">.</span>
                </h2>
                <p class="mt-4 text-sm sm:text-base text-gray-600">
                    Select your area of interest to see direct, transparent operational answers for your team.
                </p>

                <!-- Category Switcher Pill Tabs -->
                <div class="mt-8 inline-flex flex-wrap justify-center gap-2 p-1.5 rounded-full bg-gray-100 border border-gray-200">
                    <button type="button" class="px-5 py-2 rounded-full text-xs font-bold transition-all bg-[#1e3a5f] text-white shadow-md" data-clarity-category="schools">
                        School Platform (SMS)
                    </button>
                    <button type="button" class="px-5 py-2 rounded-full text-xs font-bold transition-all bg-white text-gray-700 hover:text-[#1e3a5f] border border-gray-200" data-clarity-category="custom">
                        Custom Software &amp; APIs
                    </button>
                    <button type="button" class="px-5 py-2 rounded-full text-xs font-bold transition-all bg-white text-gray-700 hover:text-[#1e3a5f] border border-gray-200" data-clarity-category="onboarding">
                        Onboarding &amp; Support SLA
                    </button>
                </div>
            </div>

            <!-- Category Panels -->
            <div class="max-w-4xl mx-auto">
                <!-- Panel 1: School Platform -->
                <div data-clarity-panel="schools" class="space-y-4">
                    <div class="rounded-2xl bg-[#f8fafc] border border-gray-200/80 p-6 sm:p-8 reveal">
                        <h3 class="text-base sm:text-lg font-bold text-[#1e3a5f] flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-[#00ff88]/20 text-[#00994d] flex items-center justify-center text-xs font-bold">1</span>
                            How does result collation work, and can non-technical teachers use it?
                        </h3>
                        <p class="mt-3 text-xs sm:text-sm text-gray-700 leading-relaxed pl-8">
                            Teachers simply enter raw continuous assessment and exam scores into their dedicated class portal. The system automatically computes totals, percentages, grade letters, class positions, and term remarks. It generates print-ready and digital report cards with zero manual math. We train your teachers in person or virtually until everyone is comfortable.
                        </p>
                    </div>

                    <div class="rounded-2xl bg-[#f8fafc] border border-gray-200/80 p-6 sm:p-8 reveal">
                        <h3 class="text-base sm:text-lg font-bold text-[#1e3a5f] flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-[#00ff88]/20 text-[#00994d] flex items-center justify-center text-xs font-bold">2</span>
                            What is the pricing model? Do we have to pay huge upfront fees?
                        </h3>
                        <p class="mt-3 text-xs sm:text-sm text-gray-700 leading-relaxed pl-8">
                            No. We operate a low-commitment, risk-reversing <strong>per-student, per-term</strong> subscription. This means if your student enrollment changes, your software costs automatically adjust. You are never trapped in a multi-million Naira upfront contract.
                        </p>
                    </div>

                    <div class="rounded-2xl bg-[#f8fafc] border border-gray-200/80 p-6 sm:p-8 reveal">
                        <h3 class="text-base sm:text-lg font-bold text-[#1e3a5f] flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-[#00ff88]/20 text-[#00994d] flex items-center justify-center text-xs font-bold">3</span>
                            How do we migrate our existing paper registers and Excel student lists?
                        </h3>
                        <p class="mt-3 text-xs sm:text-sm text-gray-700 leading-relaxed pl-8">
                            Our engineering team takes care of student data ingestion. You provide your existing class lists in Excel, CSV, or physical copies, and we configure your school classrooms, fee categories, and subjects ahead of term start.
                        </p>
                    </div>
                </div>

                <!-- Panel 2: Custom Software -->
                <div data-clarity-panel="custom" class="hidden space-y-4">
                    <div class="rounded-2xl bg-[#f8fafc] border border-gray-200/80 p-6 sm:p-8">
                        <h3 class="text-base sm:text-lg font-bold text-[#1e3a5f] flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-[#00ff88]/20 text-[#00994d] flex items-center justify-center text-xs font-bold">1</span>
                            Do we own our software and database once it is built?
                        </h3>
                        <p class="mt-3 text-xs sm:text-sm text-gray-700 leading-relaxed pl-8">
                            Yes. For custom builds, you own your application codebase, customer records, and database architecture. We provide comprehensive documentation and hand over full administrative control.
                        </p>
                    </div>

                    <div class="rounded-2xl bg-[#f8fafc] border border-gray-200/80 p-6 sm:p-8">
                        <h3 class="text-base sm:text-lg font-bold text-[#1e3a5f] flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-[#00ff88]/20 text-[#00994d] flex items-center justify-center text-xs font-bold">2</span>
                            How do payments and milestones work for custom software?
                        </h3>
                        <p class="mt-3 text-xs sm:text-sm text-gray-700 leading-relaxed pl-8">
                            Every custom project is structured into functional milestones (e.g. Prototype &rarr; Database &amp; Auth &rarr; Core Workflows &rarr; QA &amp; Deployment). You test working software at each sprint and approve it before moving forward.
                        </p>
                    </div>
                </div>

                <!-- Panel 3: Onboarding & Support -->
                <div data-clarity-panel="onboarding" class="hidden space-y-4">
                    <div class="rounded-2xl bg-[#f8fafc] border border-gray-200/80 p-6 sm:p-8">
                        <h3 class="text-base sm:text-lg font-bold text-[#1e3a5f] flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-[#00ff88]/20 text-[#00994d] flex items-center justify-center text-xs font-bold">1</span>
                            What happens if we encounter an issue during a critical deadline?
                        </h3>
                        <p class="mt-3 text-xs sm:text-sm text-gray-700 leading-relaxed pl-8">
                            You have direct telephone and WhatsApp access to our lead engineers (<a href="tel:09052585622" class="font-bold text-[#1e3a5f]">09052585622</a>). We do not send you through generic ticket queues. If term results or gate check-ins are underway, our team is on active standby.
                        </p>
                    </div>

                    <div class="rounded-2xl bg-[#f8fafc] border border-gray-200/80 p-6 sm:p-8">
                        <h3 class="text-base sm:text-lg font-bold text-[#1e3a5f] flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-[#00ff88]/20 text-[#00994d] flex items-center justify-center text-xs font-bold">2</span>
                            How are our institution's data and grades protected?
                        </h3>
                        <p class="mt-3 text-xs sm:text-sm text-gray-700 leading-relaxed pl-8">
                            Our platforms use enterprise-grade cloud hosting with encrypted connections (HTTPS/TLS), automated daily off-site backups, and role-based permissions so teachers, bursars, and principals only access what they are authorized to see.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Interactive Multi-Step Project Intake (Clean Brand Green & Navy) -->
    <section id="request-quote" class="bg-[#f8fafc] py-20 md:py-28 border-t border-gray-200/70 w-full max-w-full overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:gap-16 items-start">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-[#00994d]">Free &middot; Zero Obligation</span>
                    <h2 class="mt-2 text-3xl sm:text-5xl tracking-tight leading-[1.15] reveal">
                        <span class="font-light text-gray-500">Schedule Your</span>
                        <span class="font-bold text-[#1e3a5f]">Consultation<span class="text-[#00ff88]">.</span></span>
                    </h2>
                    <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed max-w-md reveal">
                        Tell us about your school or business operations. We review your requirements and respond promptly with practical options and transparent per-term or milestone costs.
                    </p>

                    <div class="mt-8 space-y-4 reveal">
                        <div class="flex items-center gap-3 text-sm text-gray-700">
                            <div class="w-7 h-7 rounded-full bg-[#1e3a5f] text-[#00ff88] flex items-center justify-center font-bold text-xs">✓</div>
                            <span>Free walkthrough with your operational context</span>
                        </div>
                        <div class="flex items-center gap-3 text-sm text-gray-700">
                            <div class="w-7 h-7 rounded-full bg-[#1e3a5f] text-[#00ff88] flex items-center justify-center font-bold text-xs">✓</div>
                            <span>Direct access to a senior software engineer</span>
                        </div>
                        <div class="flex items-center gap-3 text-sm text-gray-700">
                            <div class="w-7 h-7 rounded-full bg-[#1e3a5f] text-[#00ff88] flex items-center justify-center font-bold text-xs">✓</div>
                            <span>In-person in Lagos &amp; Abuja, or virtual screen-share</span>
                        </div>
                    </div>

                    <div class="mt-8 pt-8 border-t border-gray-200 flex items-center gap-4 text-sm font-medium text-gray-600">
                        <span>Prefer direct messaging?</span>
                        <a href="https://wa.me/2349052585622?text=Hello%20ExtremeSolutions,%20I%20would%20like%20to%20request%20a%20demo." target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-[#00994d] hover:underline font-bold">
                            WhatsApp Us (09052585622) &rarr;
                        </a>
                    </div>
                </div>

                <!-- Wizard Intake Container -->
                <div class="rounded-3xl bg-white border border-gray-200 p-6 sm:p-10 shadow-lg reveal" id="quote-wizard">
                    <!-- Wizard Progress Header -->
                    <div class="mb-8">
                        <div class="flex items-center justify-between text-xs font-bold text-gray-500 mb-2">
                            <span>Step <span class="wizard-step-counter">1 of 3 (33%)</span></span>
                            <span class="text-[#00994d]">Consultation Intake</span>
                        </div>
                        <div class="h-1.5 w-full bg-gray-200 rounded-full overflow-hidden">
                            <div class="wizard-progress-bar h-full bg-[#00ff88] rounded-full transition-all duration-300" style="width: 33%"></div>
                        </div>
                    </div>

                    @if(session('success'))
                        <div class="mb-6 rounded-xl bg-green-50 border border-green-200 p-4 text-sm font-medium text-green-800">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}" id="wizard-form" class="space-y-6">
                        @csrf

                        <!-- Step 1: Solution Category -->
                        <div class="wizard-step space-y-4">
                            <label class="block text-sm font-bold text-[#1e3a5f]">
                                1. What type of platform or system do you need?
                            </label>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-[#f8fafc] hover:border-[#1e3a5f] cursor-pointer transition-colors text-xs sm:text-sm font-medium text-gray-800">
                                    <input type="radio" name="subject" value="School Management Demo Request" class="text-[#1e3a5f] focus:ring-[#1e3a5f]" checked>
                                    <span>School Management (SMS)</span>
                                </label>
                                <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-[#f8fafc] hover:border-[#1e3a5f] cursor-pointer transition-colors text-xs sm:text-sm font-medium text-gray-800">
                                    <input type="radio" name="subject" value="ESPass Event Ticketing Inquiry" class="text-[#1e3a5f] focus:ring-[#1e3a5f]">
                                    <span>ESPass Event Ticketing</span>
                                </label>
                                <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-[#f8fafc] hover:border-[#1e3a5f] cursor-pointer transition-colors text-xs sm:text-sm font-medium text-gray-800">
                                    <input type="radio" name="subject" value="Custom Software Build" class="text-[#1e3a5f] focus:ring-[#1e3a5f]">
                                    <span>Custom Software Build</span>
                                </label>
                                <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-[#f8fafc] hover:border-[#1e3a5f] cursor-pointer transition-colors text-xs sm:text-sm font-medium text-gray-800">
                                    <input type="radio" name="subject" value="Automation & Integration" class="text-[#1e3a5f] focus:ring-[#1e3a5f]">
                                    <span>Workflow Automation</span>
                                </label>
                            </div>
                        </div>

                        <!-- Step 2: Operational Scale & Timeline -->
                        <div class="wizard-step hidden space-y-4">
                            <label class="block text-sm font-bold text-[#1e3a5f]">
                                2. Describe your current operations and target timeline
                            </label>
                            <textarea name="message" rows="4" required class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm text-gray-900 focus:border-[#1e3a5f] focus:ring-1 focus:ring-[#1e3a5f] bg-[#f8fafc] placeholder-gray-400" placeholder="Briefly describe your current process (e.g. 350 students currently tracked across paper registers ahead of next term, or an upcoming event for 1,500 attendees)..."></textarea>
                        </div>

                        <!-- Step 3: Contact Information -->
                        <div class="wizard-step hidden space-y-4">
                            <label class="block text-sm font-bold text-[#1e3a5f]">
                                3. Where should we send the walkthrough details?
                            </label>
                            <div class="space-y-3">
                                <div>
                                    <label for="input-name" class="block text-xs font-bold text-gray-700 mb-1">Your Full Name *</label>
                                    <input type="text" id="input-name" name="name" required class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm text-gray-900 focus:border-[#1e3a5f] focus:ring-1 focus:ring-[#1e3a5f] bg-[#f8fafc]" placeholder="e.g. Pastor / Dr. Adamu Johnson">
                                </div>
                                <div>
                                    <label for="input-email" class="block text-xs font-bold text-gray-700 mb-1">Email Address *</label>
                                    <input type="email" id="input-email" name="email" required class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm text-gray-900 focus:border-[#1e3a5f] focus:ring-1 focus:ring-[#1e3a5f] bg-[#f8fafc]" placeholder="you@@organization.com">
                                </div>
                                <div>
                                    <label for="input-phone" class="block text-xs font-bold text-gray-700 mb-1">Phone / WhatsApp (Optional)</label>
                                    <input type="tel" id="input-phone" name="phone" class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm text-gray-900 focus:border-[#1e3a5f] focus:ring-1 focus:ring-[#1e3a5f] bg-[#f8fafc]" placeholder="09052585622">
                                </div>
                            </div>
                        </div>

                        <!-- Wizard Controls -->
                        <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                            <button type="button" class="wizard-prev-btn text-xs font-bold text-gray-500 hover:text-[#1e3a5f] opacity-0 pointer-events-none transition-all flex items-center gap-1">
                                &larr; Back
                            </button>

                            <div>
                                <button type="button" class="wizard-next-btn rounded-full bg-[#1e3a5f] px-7 py-2.5 text-xs font-bold text-white hover:bg-[#0f2444] transition-all shadow">
                                    Continue &rarr;
                                </button>
                                <button type="submit" class="wizard-submit-btn hidden rounded-full bg-[#00ff88] px-8 py-2.5 text-xs font-extrabold text-[#1e3a5f] hover:bg-[#00cc6a] transition-all shadow-md">
                                    Send Consultation Request
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Final Callout -->
    <section class="bg-white pb-20 w-full max-w-full overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="brand-surface relative overflow-hidden rounded-3xl px-6 py-16 sm:py-20 text-center text-white shadow-xl reveal">
                <div class="brand-texture opacity-30" aria-hidden="true"></div>
                <div class="relative z-10 max-w-3xl mx-auto">
                    <h2 class="text-3xl sm:text-5xl font-bold tracking-tight leading-tight">
                        Modernize Your Operations <br class="hidden sm:inline" />
                        <span class="font-light text-white/90">Ahead of Next Term</span><span class="text-[#00ff88]">.</span>
                    </h2>
                    <p class="mt-4 text-sm sm:text-base leading-relaxed text-white/80">
                        Serving institutions across Lagos, Abuja, and Nigeria. In-person and virtual demos available.
                    </p>
                    <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                        <a href="{{ route('contact') }}" class="rounded-full bg-[#00ff88] px-8 py-3.5 text-sm font-bold text-[#1e3a5f] hover:bg-[#00cc6a] transition-colors shadow-lg">
                            Schedule Free Demo Call
                        </a>
                        <a href="tel:09052585622" class="rounded-full border border-white/30 bg-white/10 px-7 py-3.5 text-sm font-medium text-white hover:bg-white/20 transition-colors">
                            Call 09052585622
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
