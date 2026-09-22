@extends('layouts.app')

@section('title', 'ExtremeSolutions | Modern Digital Infrastructure, Enterprise Platforms & Applied AI')
@section('description', 'ExtremeSolutions is a software engineering company building modern digital infrastructure, custom enterprise platforms, and applied AI systems for African institutions and businesses. We engineer end-to-end software—spanning high-concurrency commercial platforms, operational systems, and intelligent digital workflows—designed to replace fragile manual processes with fast, resilient technology.')

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
                    'text' => 'We do not just advise or resell third-party tools. We engineer and operate our own live production platforms, including the ExtremeSolutions School Management System (sms.extremesolutions.com.ng) and ESPass (espass.extremesolutions.com.ng). When we build your system, you deal directly with senior software engineers, see working software early, and receive dedicated post-launch support.',
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
            <!-- Two-Tone Headline (Zero Trailing Dot) -->
            <h1 class="mx-auto max-w-4xl text-3xl sm:text-5xl lg:text-[60px] tracking-tight leading-[1.14] reveal">
                <span class="font-light text-white/90">Software Engineered to Fit</span><br/>
                <span class="font-bold text-white">How Modern Organizations Run</span>
            </h1>

            <!-- Problem & Mission Positioning Subline -->
            <p class="mx-auto mt-6 max-w-3xl text-sm sm:text-base leading-relaxed text-white/85 reveal">
                ExtremeSolutions is a software engineering company building modern digital infrastructure, custom enterprise platforms, and applied AI systems for African institutions and businesses. We engineer end-to-end software—spanning high-concurrency commercial platforms, operational systems, and intelligent digital workflows—designed to replace fragile manual processes with fast, resilient technology.
            </p>

            <!-- Dual Direct & Transitional CTAs -->
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4 reveal">
                <a href="#request-quote" class="inline-flex items-center rounded-full bg-[#00ff88] px-8 py-3.5 text-sm font-bold text-[#1e3a5f] hover:bg-[#00cc6a] transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                    Schedule Your Consultation
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
                            We Don't Just Advise. We Build, Operate, and Maintain
                        </h2>
                        <p class="mt-4 text-sm sm:text-base leading-relaxed text-white/80">
                            Too many vendors deliver unfinished software and vanish into silence. 
                            At ExtremeSolutions, we build systems we operate ourselves. Engineering dependable software for ambitious organizations worldwide, we work directly with your operational leaders to eliminate friction, automate workflows, and maintain your software with 24/7 reliability.
                        </p>
                    </div>

                    <!-- Direct Credibility Badge -->
                    <div class="w-full lg:max-w-sm rounded-2xl bg-white/10 border border-white/15 p-6 backdrop-blur-md text-white">
                        <p class="text-xs sm:text-sm leading-relaxed text-white/90 italic">
                            "Every platform we deploy carries our reputation. We engineer software the way we run our own production systems: secure, fast, and fail-proof."
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
                    <span class="font-bold text-[#1e3a5f]">Platforms &amp; Systems</span>
                </h2>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed reveal">
                    We architect solutions that directly remove manual overhead, eliminate human calculation errors, and give leaders total visibility.
                </p>
            </div>

            <div class="mt-14 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- 1: School Management System -->
                <div class="group flex flex-col rounded-2xl bg-white p-5 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg reveal">
                    <div class="h-44 overflow-hidden rounded-xl bg-slate-950 relative border border-gray-100 flex items-center justify-center">
                        <img src="{{ asset('images/sms-preview.jpg') }}" alt="School Management Platform Preview" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-[10px] font-mono text-[#00ff88] bg-slate-900/80 px-2 py-0.5 rounded border border-white/10 backdrop-blur-sm">sms.extremesolutions.com.ng</span>
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
                    <div class="h-44 overflow-hidden rounded-xl bg-slate-950 relative border border-gray-100 flex items-center justify-center">
                        <img src="{{ asset('images/espass-preview.jpg') }}" alt="ESPass Event Ticketing Platform Preview" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-[10px] font-mono text-[#00ff88] bg-slate-900/80 px-2 py-0.5 rounded border border-white/10 backdrop-blur-sm">espass.extremesolutions.com.ng</span>
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
                    <div class="h-44 overflow-hidden rounded-xl bg-slate-950 relative border border-gray-100 flex items-center justify-center">
                        <img src="{{ asset('images/custom-software-preview.jpg') }}" alt="Custom Enterprise Software Architecture Preview" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-[10px] font-mono text-[#00ff88] bg-slate-900/80 px-2 py-0.5 rounded border border-white/10 backdrop-blur-sm">cloud-architecture.prod</span>
                    </div>
                    <div class="mt-6 px-2">
                        <h3 class="text-lg font-bold text-[#1e3a5f]">Custom Software Engineering</h3>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Purpose-built web applications and institutional software designed around your actual internal procedures, never forcing you into off-the-shelf limits.
                        </p>
                        <a href="#request-quote" class="mt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#1e3a5f] hover:text-[#00994d] transition-colors">
                            <span>Scope a Custom Build</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- 4: Enterprise Systems & Applied AI -->
                <div class="group flex flex-col rounded-2xl bg-white p-5 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg reveal">
                    <div class="h-44 overflow-hidden rounded-xl bg-slate-950 relative border border-gray-100 flex items-center justify-center">
                        <img src="{{ asset('images/automation-preview.jpg') }}" alt="Applied AI & Intelligent Workflows Preview" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-[10px] font-mono text-[#00ff88] bg-slate-900/80 px-2 py-0.5 rounded border border-white/10 backdrop-blur-sm">applied-ai.workflows.sync</span>
                    </div>
                    <div class="mt-6 px-2">
                        <h3 class="text-lg font-bold text-[#1e3a5f]">Applied AI &amp; Intelligent Workflows</h3>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Applied AI systems, automated operational pipelines, payment reconciliation (Paystack, Flutterwave), and intelligent workflows designed to replace manual paperwork with fast, resilient technology.
                        </p>
                        <a href="#request-quote" class="mt-4 inline-flex items-center gap-1.5 text-xs font-bold text-[#1e3a5f] hover:text-[#00994d] transition-colors">
                            <span>Deploy Intelligent Systems</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- 5: Web & Mobile Portals -->
                <div class="group flex flex-col rounded-2xl bg-white p-5 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg reveal">
                    <div class="h-44 overflow-hidden rounded-xl bg-slate-950 relative border border-gray-100 flex items-center justify-center">
                        <img src="{{ asset('images/mobile-apps-preview.jpg') }}" alt="Web & Mobile Applications Preview" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-[10px] font-mono text-[#00ff88] bg-slate-900/80 px-2 py-0.5 rounded border border-white/10 backdrop-blur-sm">web-mobile.pwa</span>
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
                    <div class="h-44 overflow-hidden rounded-xl bg-slate-950 relative border border-gray-100 flex items-center justify-center">
                        <img src="{{ asset('images/academy-preview.jpg') }}" alt="ExtremeSolutions Academy Preview" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent"></div>
                        <span class="absolute bottom-3 left-3 text-[10px] font-mono text-[#00ff88] bg-slate-900/80 px-2 py-0.5 rounded border border-white/10 backdrop-blur-sm">academy.engineers.dev</span>
                    </div>
                    <div class="mt-6 px-2">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-bold text-[#1e3a5f]">Training &amp; Mentorship</h3>
                            <span class="text-[10px] uppercase font-bold text-[#00994d] bg-[#00ff88]/20 px-2 py-0.5 rounded">Coming Soon</span>
                        </div>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Cohort-based practical mentorship training young Nigerian software talent on real production architectures, not toy exercises.
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
                    How We Get Your Organization Live
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
                        A focused, zero-obligation technical discovery call or virtual audit. We review your workflows, fee tracking, and operational bottlenecks.
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

    <!-- 6. Featured Live Systems (Direct High-Contrast Product Cards) -->
    <section id="featured-projects" class="bg-white py-20 md:py-28 w-full max-w-full overflow-hidden">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-14 reveal">
                <span class="text-xs font-bold uppercase tracking-wider text-[#00994d]">Operational Proof</span>
                <h2 class="mt-2 text-3xl sm:text-5xl tracking-tight leading-[1.15]">
                    <span class="font-light text-gray-500">Live Systems</span>
                    <span class="font-bold text-[#1e3a5f]">In Production Today</span>
                </h2>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed">
                    We don't pitch mockups. These platforms are live, cloud-hosted, and actively operated by ExtremeSolutions.
                </p>
            </div>

            <!-- 3 High-Impact Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1: School Management System -->
                <div class="rounded-3xl bg-[#1e3a5f] border border-white/15 p-8 text-white shadow-xl flex flex-col justify-between relative overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:border-[#00ff88]/40 reveal">
                    <div class="brand-texture opacity-30" aria-hidden="true"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center gap-2 rounded-full bg-[#00ff88]/20 px-3 py-1 text-xs font-bold text-[#00ff88]">
                                <span class="w-2 h-2 rounded-full bg-[#00ff88] animate-pulse"></span>
                                Live Production
                            </span>
                            <span class="text-2xl font-black text-[#00ff88]/90 font-mono">01</span>
                        </div>

                        <h3 class="mt-5 text-2xl font-bold tracking-tight text-white">School Management System</h3>
                        <a href="https://sms.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="mt-1.5 inline-flex items-center gap-1 text-xs font-mono text-[#00ff88] hover:underline">
                            <span>sms.extremesolutions.com.ng</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>

                        <p class="mt-4 text-sm text-white/80 leading-relaxed">
                            Term fee tracking, automated exam grade computation, attendance registers, and parent portals. Built to run nursery, primary, and secondary schools with zero spreadsheet confusion.
                        </p>

                        <!-- Live Browser Mockup -->
                        <div class="mt-5 overflow-hidden rounded-xl border border-white/20 bg-slate-900/80 shadow-lg group">
                            <div class="flex items-center justify-between px-3 py-1.5 bg-slate-950/80 border-b border-white/10">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-red-400/80"></span>
                                    <span class="w-2 h-2 rounded-full bg-yellow-400/80"></span>
                                    <span class="w-2 h-2 rounded-full bg-emerald-400/80"></span>
                                </div>
                                <span class="text-[10px] font-mono text-white/50">sms.extremesolutions.com.ng</span>
                                <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                            </div>
                            <div class="aspect-[16/10] overflow-hidden bg-slate-950 relative">
                                <img src="{{ asset('images/sms-preview.jpg') }}" alt="School Management System Dashboard" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#1e3a5f]/50 via-transparent to-transparent pointer-events-none"></div>
                            </div>
                        </div>

                        <!-- Live Metrics -->
                        <div class="mt-6 pt-5 border-t border-white/10 grid grid-cols-3 gap-2 text-center">
                            <div class="bg-white/5 rounded-xl p-2.5">
                                <p class="text-lg font-extrabold text-[#00ff88]">100%</p>
                                <p class="text-[10px] text-white/70 leading-tight mt-0.5">Automated Grades</p>
                            </div>
                            <div class="bg-white/5 rounded-xl p-2.5">
                                <p class="text-lg font-extrabold text-white">0</p>
                                <p class="text-[10px] text-white/70 leading-tight mt-0.5">Paper Registers</p>
                            </div>
                            <div class="bg-white/5 rounded-xl p-2.5">
                                <p class="text-lg font-extrabold text-white">Instant</p>
                                <p class="text-[10px] text-white/70 leading-tight mt-0.5">Parent Access</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-white/10 relative z-10 flex flex-wrap items-center gap-3">
                        <a href="{{ route('products.school') }}" class="rounded-full bg-[#00ff88] px-5 py-2.5 text-xs font-bold text-[#1e3a5f] hover:bg-[#00cc6a] transition-colors shadow">
                            Read Details &rarr;
                        </a>
                        <a href="https://sms.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="rounded-full border border-white/25 bg-white/10 px-4 py-2.5 text-xs font-medium text-white hover:bg-white/20 transition-colors">
                            Open Live Demo
                        </a>
                    </div>
                </div>

                <!-- Card 2: ESPass Ticketing -->
                <div class="rounded-3xl bg-[#1e3a5f] border border-white/15 p-8 text-white shadow-xl flex flex-col justify-between relative overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:border-[#00ff88]/40 reveal">
                    <div class="brand-texture opacity-30" aria-hidden="true"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center gap-2 rounded-full bg-[#00ff88]/20 px-3 py-1 text-xs font-bold text-[#00ff88]">
                                <span class="w-2 h-2 rounded-full bg-[#00ff88] animate-pulse"></span>
                                Live Production
                            </span>
                            <span class="text-2xl font-black text-[#00ff88]/90 font-mono">02</span>
                        </div>

                        <h3 class="mt-5 text-2xl font-bold tracking-tight text-white">ESPass Event &amp; Gate Engine</h3>
                        <a href="https://espass.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="mt-1.5 inline-flex items-center gap-1 text-xs font-mono text-[#00ff88] hover:underline">
                            <span>espass.extremesolutions.com.ng</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>

                        <p class="mt-4 text-sm text-white/80 leading-relaxed">
                            Scalable event ticketing and access control infrastructure. Checks guests in via rapid barcode validation with real-time attendee reconciliation and settlement.
                        </p>

                        <!-- Live Scanner Console Mockup -->
                        <div class="mt-5 overflow-hidden rounded-xl border border-white/20 bg-slate-900/80 shadow-lg group">
                            <div class="flex items-center justify-between px-3 py-1.5 bg-slate-950/80 border-b border-white/10">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-red-400/80"></span>
                                    <span class="w-2 h-2 rounded-full bg-yellow-400/80"></span>
                                    <span class="w-2 h-2 rounded-full bg-emerald-400/80"></span>
                                </div>
                                <span class="text-[10px] font-mono text-[#00ff88]">espass.extremesolutions.com.ng</span>
                                <span class="text-[9px] uppercase font-bold text-[#00ff88] bg-[#00ff88]/15 px-1.5 py-0.5 rounded">Scan Active</span>
                            </div>
                            <div class="aspect-[16/10] overflow-hidden bg-slate-950 relative">
                                <img src="{{ asset('images/espass-preview.jpg') }}" alt="ESPass Gate Validation Console" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#1e3a5f]/50 via-transparent to-transparent pointer-events-none"></div>
                            </div>
                        </div>

                        <!-- Live Metrics -->
                        <div class="mt-6 pt-5 border-t border-white/10 grid grid-cols-3 gap-2 text-center">
                            <div class="bg-white/5 rounded-xl p-2.5">
                                <p class="text-lg font-extrabold text-[#00ff88]">&lt; 0.5s</p>
                                <p class="text-[10px] text-white/70 leading-tight mt-0.5">Gate Scan Speed</p>
                            </div>
                            <div class="bg-white/5 rounded-xl p-2.5">
                                <p class="text-lg font-extrabold text-white">100%</p>
                                <p class="text-[10px] text-white/70 leading-tight mt-0.5">Reconciliation</p>
                            </div>
                            <div class="bg-white/5 rounded-xl p-2.5">
                                <p class="text-lg font-extrabold text-white">0</p>
                                <p class="text-[10px] text-white/70 leading-tight mt-0.5">Duplicate Fraud</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-white/10 relative z-10 flex flex-wrap items-center gap-3">
                        <a href="{{ route('products.espass') }}" class="rounded-full bg-[#00ff88] px-5 py-2.5 text-xs font-bold text-[#1e3a5f] hover:bg-[#00cc6a] transition-colors shadow">
                            Read Details &rarr;
                        </a>
                        <a href="https://espass.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="rounded-full border border-white/25 bg-white/10 px-4 py-2.5 text-xs font-medium text-white hover:bg-white/20 transition-colors">
                            Open Live Demo
                        </a>
                    </div>
                </div>

                <!-- Card 3: Custom Software & Enterprise Architecture -->
                <div class="rounded-3xl bg-[#1e3a5f] border border-white/15 p-8 text-white shadow-xl flex flex-col justify-between relative overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:border-[#00ff88]/40 reveal">
                    <div class="brand-texture opacity-30" aria-hidden="true"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between">
                            <span class="inline-flex items-center gap-2 rounded-full bg-white/15 px-3 py-1 text-xs font-bold text-[#00ff88]">
                                Enterprise Bespoke
                            </span>
                            <span class="text-2xl font-black text-[#00ff88]/90 font-mono">03</span>
                        </div>

                        <h3 class="mt-5 text-2xl font-bold tracking-tight text-white">Custom Software &amp; Automation</h3>
                        <p class="mt-1.5 text-xs font-mono text-[#00ff88]">
                            Proprietary Cloud Architecture
                        </p>

                        <p class="mt-4 text-sm text-white/80 leading-relaxed">
                            Tailor-engineered internal applications connecting inventory, customer invoicing, payment gateways, and staff permissions into automated operator control panels.
                        </p>

                        <!-- Cloud Architecture Mockup -->
                        <div class="mt-5 overflow-hidden rounded-xl border border-white/20 bg-slate-900/80 shadow-lg group">
                            <div class="flex items-center justify-between px-3 py-1.5 bg-slate-950/80 border-b border-white/10">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-red-400/80"></span>
                                    <span class="w-2 h-2 rounded-full bg-yellow-400/80"></span>
                                    <span class="w-2 h-2 rounded-full bg-emerald-400/80"></span>
                                </div>
                                <span class="text-[10px] font-mono text-white/50">enterprise-orchestration.internal</span>
                                <span class="text-[9px] uppercase font-bold text-white/60 bg-white/10 px-1.5 py-0.5 rounded">Secure Node</span>
                            </div>
                            <div class="aspect-[16/10] overflow-hidden bg-slate-950 relative">
                                <img src="{{ asset('images/custom-software-preview.jpg') }}" alt="Enterprise Cloud Orchestration System" class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105" loading="lazy" />
                                <div class="absolute inset-0 bg-gradient-to-t from-[#1e3a5f]/50 via-transparent to-transparent pointer-events-none"></div>
                            </div>
                        </div>

                        <!-- Live Metrics -->
                        <div class="mt-6 pt-5 border-t border-white/10 grid grid-cols-3 gap-2 text-center">
                            <div class="bg-white/5 rounded-xl p-2.5">
                                <p class="text-lg font-extrabold text-[#00ff88]">10x</p>
                                <p class="text-[10px] text-white/70 leading-tight mt-0.5">Execution Speed</p>
                            </div>
                            <div class="bg-white/5 rounded-xl p-2.5">
                                <p class="text-lg font-extrabold text-white">Role</p>
                                <p class="text-[10px] text-white/70 leading-tight mt-0.5">Strict Hierarchy</p>
                            </div>
                            <div class="bg-white/5 rounded-xl p-2.5">
                                <p class="text-lg font-extrabold text-white">100%</p>
                                <p class="text-[10px] text-white/70 leading-tight mt-0.5">Code Ownership</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-white/10 relative z-10 flex flex-wrap items-center gap-3">
                        <a href="#request-quote" class="rounded-full bg-[#00ff88] px-5 py-2.5 text-xs font-bold text-[#1e3a5f] hover:bg-[#00cc6a] transition-colors shadow">
                            Scope Your Build &rarr;
                        </a>
                        <a href="https://wa.me/2349052585622?text=Hello%20ExtremeSolutions,%20I%20would%20like%20to%20discuss%20a%20custom%20software%20project." target="_blank" rel="noopener noreferrer" class="rounded-full border border-white/25 bg-white/10 px-4 py-2.5 text-xs font-medium text-white hover:bg-white/20 transition-colors">
                            Chat Lead Engineer
                        </a>
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
                    Key Decisions &amp; Direct Answers
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
                            You have direct WhatsApp access to our lead engineers (<a href="https://wa.me/2349052585622" target="_blank" rel="noopener noreferrer" class="font-bold text-[#1e3a5f]">09052585622</a>). We do not send you through generic ticket queues. If term results or gate check-ins are underway, our team is on active standby.
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
                        <span class="font-bold text-[#1e3a5f]">Consultation</span>
                    </h2>
                    <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed max-w-md reveal">
                        Tell us about your organization or business operations. We review your requirements and respond promptly with practical options and transparent per-term or milestone costs.
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
                            <span>One-on-one discovery consultation or virtual screen-share</span>
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
                    @if(session('success'))
                        <!-- Dedicated Confirmation Card -->
                        <div class="rounded-2xl bg-gradient-to-br from-emerald-50/90 via-white to-green-50/70 border-2 border-[#00ff88]/50 p-8 text-center shadow-lg animate-in fade-in duration-300">
                            <div class="w-16 h-16 bg-[#00ff88] text-[#1e3a5f] rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                                <svg class="w-8 h-8 text-[#1e3a5f]" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                                </svg>
                            </div>
                            <span class="inline-block px-3 py-1 bg-[#1e3a5f] text-[#00ff88] rounded-full text-xs font-bold uppercase tracking-wider mb-3">
                                Consultation Request Confirmed
                            </span>
                            <h3 class="text-2xl font-bold text-[#1e3a5f]">Thank You! We've Received Your Details.</h3>
                            <p class="text-sm text-gray-600 mt-2 max-w-md mx-auto leading-relaxed">
                                {{ session('success') }}
                            </p>
                            <div class="mt-6 p-4 rounded-xl bg-white border border-gray-200 text-xs text-gray-600 max-w-sm mx-auto space-y-2.5 shadow-sm">
                                <div class="flex items-center justify-between">
                                    <span class="font-medium text-gray-500">Typical response time:</span>
                                    <span class="font-bold text-[#1e3a5f]">Within 2 to 4 hours</span>
                                </div>
                                <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                    <span class="font-medium text-gray-500">Need immediate answers?</span>
                                    <a href="https://wa.me/2349052585622?text=Hello%20ExtremeSolutions,%20I%20just%20submitted%20a%20consultation%20request%20on%20the%20website." target="_blank" rel="noopener noreferrer" class="font-bold text-[#00994d] hover:underline flex items-center gap-1">
                                        WhatsApp 09052585622 &rarr;
                                    </a>
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="{{ route('home') }}#request-quote" class="inline-flex items-center text-xs font-bold text-gray-500 hover:text-[#1e3a5f] transition-colors">
                                    &larr; Submit another project request
                                </a>
                            </div>
                        </div>
                    @else
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

                        @if($errors->any())
                            <div class="mb-6 rounded-xl bg-rose-50 border border-rose-200 p-4 text-xs font-medium text-rose-800 space-y-1">
                                @foreach($errors->all() as $err)
                                    <p class="flex items-center gap-1.5">
                                        <span class="text-rose-500">&bull;</span> {{ $err }}
                                    </p>
                                @endforeach
                            </div>
                        @endif

                        <form method="POST" action="{{ route('contact.store') }}" id="wizard-form" class="space-y-6">
                            @csrf

                            <!-- Step 1: Solution Category (8 Options) -->
                            <div class="wizard-step space-y-4">
                                <label class="block text-sm font-bold text-[#1e3a5f]">
                                    1. What type of platform or system do you need?
                                </label>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-[#f8fafc] hover:border-[#1e3a5f] cursor-pointer transition-all text-xs sm:text-sm font-medium text-gray-800 hover:bg-white has-[:checked]:border-[#1e3a5f] has-[:checked]:bg-emerald-50/50 has-[:checked]:ring-1 has-[:checked]:ring-[#1e3a5f]">
                                        <input type="radio" name="subject" value="School Management (SMS)" class="text-[#1e3a5f] focus:ring-[#1e3a5f]" checked>
                                        <span>School Management (SMS)</span>
                                    </label>
                                    <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-[#f8fafc] hover:border-[#1e3a5f] cursor-pointer transition-all text-xs sm:text-sm font-medium text-gray-800 hover:bg-white has-[:checked]:border-[#1e3a5f] has-[:checked]:bg-emerald-50/50 has-[:checked]:ring-1 has-[:checked]:ring-[#1e3a5f]">
                                        <input type="radio" name="subject" value="ESPass Event Ticketing Inquiry" class="text-[#1e3a5f] focus:ring-[#1e3a5f]">
                                        <span>ESPass Event Ticketing & Gates</span>
                                    </label>
                                    <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-[#f8fafc] hover:border-[#1e3a5f] cursor-pointer transition-all text-xs sm:text-sm font-medium text-gray-800 hover:bg-white has-[:checked]:border-[#1e3a5f] has-[:checked]:bg-emerald-50/50 has-[:checked]:ring-1 has-[:checked]:ring-[#1e3a5f]">
                                        <input type="radio" name="subject" value="Custom Software & Database Engineering" class="text-[#1e3a5f] focus:ring-[#1e3a5f]">
                                        <span>Custom Software & Databases</span>
                                    </label>
                                    <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-[#f8fafc] hover:border-[#1e3a5f] cursor-pointer transition-all text-xs sm:text-sm font-medium text-gray-800 hover:bg-white has-[:checked]:border-[#1e3a5f] has-[:checked]:bg-emerald-50/50 has-[:checked]:ring-1 has-[:checked]:ring-[#1e3a5f]">
                                        <input type="radio" name="subject" value="Web & Mobile App Development" class="text-[#1e3a5f] focus:ring-[#1e3a5f]">
                                        <span>Web & Mobile App Development</span>
                                    </label>
                                    <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-[#f8fafc] hover:border-[#1e3a5f] cursor-pointer transition-all text-xs sm:text-sm font-medium text-gray-800 hover:bg-white has-[:checked]:border-[#1e3a5f] has-[:checked]:bg-emerald-50/50 has-[:checked]:ring-1 has-[:checked]:ring-[#1e3a5f]">
                                        <input type="radio" name="subject" value="Workflow Automation & API Integrations" class="text-[#1e3a5f] focus:ring-[#1e3a5f]">
                                        <span>Workflow Automation & APIs</span>
                                    </label>
                                    <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-[#f8fafc] hover:border-[#1e3a5f] cursor-pointer transition-all text-xs sm:text-sm font-medium text-gray-800 hover:bg-white has-[:checked]:border-[#1e3a5f] has-[:checked]:bg-emerald-50/50 has-[:checked]:ring-1 has-[:checked]:ring-[#1e3a5f]">
                                        <input type="radio" name="subject" value="Payment Gateway & Ledger Sync" class="text-[#1e3a5f] focus:ring-[#1e3a5f]">
                                        <span>Payment Gateway & Ledger Sync</span>
                                    </label>
                                    <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-[#f8fafc] hover:border-[#1e3a5f] cursor-pointer transition-all text-xs sm:text-sm font-medium text-gray-800 hover:bg-white has-[:checked]:border-[#1e3a5f] has-[:checked]:bg-emerald-50/50 has-[:checked]:ring-1 has-[:checked]:ring-[#1e3a5f]">
                                        <input type="radio" name="subject" value="Legacy System Modernization" class="text-[#1e3a5f] focus:ring-[#1e3a5f]">
                                        <span>Legacy Modernization & Cloud</span>
                                    </label>
                                    <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-[#f8fafc] hover:border-[#1e3a5f] cursor-pointer transition-all text-xs sm:text-sm font-medium text-gray-800 hover:bg-white has-[:checked]:border-[#1e3a5f] has-[:checked]:bg-emerald-50/50 has-[:checked]:ring-1 has-[:checked]:ring-[#1e3a5f]">
                                        <input type="radio" name="subject" value="Academy Mentorship & Corporate Training" class="text-[#1e3a5f] focus:ring-[#1e3a5f]">
                                        <span>Academy Training & Mentorship</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Step 2: Operational Scale & Requirements (Strictly Mandatory) -->
                            <div class="wizard-step hidden space-y-4">
                                <div>
                                    <label class="block text-sm font-bold text-[#1e3a5f]">
                                        2. Describe your operations and project requirements <span class="text-rose-500">*</span>
                                    </label>
                                    <p class="text-xs text-gray-500 leading-relaxed mt-1">
                                        Please provide details regarding your current workflow, user scale, or specific requirements so our engineering team can prepare tailored recommendations.
                                    </p>
                                </div>
                                <div class="relative">
                                    <textarea
                                        id="wizard-message"
                                        name="message"
                                        rows="4"
                                        required
                                        minlength="10"
                                        class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm text-gray-900 focus:border-[#1e3a5f] focus:ring-1 focus:ring-[#1e3a5f] bg-[#f8fafc] placeholder-gray-400 transition-colors"
                                        placeholder="e.g. We have 450 students and need automated fee reconciliations and report cards ahead of next term... or: We need an iOS and Android app with payment collection and live push alerts..."
                                    >{{ old('message') }}</textarea>
                                    <p id="wizard-message-error" class="hidden mt-1.5 text-xs font-semibold text-rose-600 flex items-center gap-1">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                        <span>Please describe your project requirements (at least 10 characters) before continuing.</span>
                                    </p>
                                </div>
                            </div>

                            <!-- Step 3: Contact Information -->
                            <div class="wizard-step hidden space-y-4">
                                <label class="block text-sm font-bold text-[#1e3a5f]">
                                    3. Where should we send the walkthrough details?
                                </label>
                                <div class="space-y-3">
                                    <div>
                                        <label for="input-name" class="block text-xs font-bold text-gray-700 mb-1">Your Full Name <span class="text-rose-500">*</span></label>
                                        <input type="text" id="input-name" name="name" value="{{ old('name') }}" required class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm text-gray-900 focus:border-[#1e3a5f] focus:ring-1 focus:ring-[#1e3a5f] bg-[#f8fafc]" placeholder="e.g. Dr. Adamu Johnson">
                                    </div>
                                    <div>
                                        <label for="input-email" class="block text-xs font-bold text-gray-700 mb-1">Email Address <span class="text-rose-500">*</span></label>
                                        <input type="email" id="input-email" name="email" value="{{ old('email') }}" required class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm text-gray-900 focus:border-[#1e3a5f] focus:ring-1 focus:ring-[#1e3a5f] bg-[#f8fafc]" placeholder="you@organization.com">
                                    </div>
                                    <div>
                                        <label for="input-phone" class="block text-xs font-bold text-gray-700 mb-1">Phone / WhatsApp (Optional)</label>
                                        <input type="tel" id="input-phone" name="phone" value="{{ old('phone') }}" class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm text-gray-900 focus:border-[#1e3a5f] focus:ring-1 focus:ring-[#1e3a5f] bg-[#f8fafc]" placeholder="09052585622">
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
                    @endif
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
                        <span class="font-light text-white/90">With High-Performance Software</span>
                    </h2>
                    <p class="mt-4 text-sm sm:text-base leading-relaxed text-white/80">
                        Engineering dependable, high-performance software systems for ambitious organizations worldwide.
                    </p>
                    <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                        <a href="{{ route('contact') }}" class="rounded-full bg-[#00ff88] px-8 py-3.5 text-sm font-bold text-[#1e3a5f] hover:bg-[#00cc6a] transition-colors shadow-lg">
                            Schedule Free Consultation
                        </a>
                        <a href="https://wa.me/2349052585622" target="_blank" rel="noopener noreferrer" class="rounded-full border border-white/30 bg-white/10 px-7 py-3.5 text-sm font-medium text-white hover:bg-white/20 transition-colors">
                            WhatsApp 09052585622
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
