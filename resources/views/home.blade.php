@extends('layouts.app')

@section('title', 'ExtremeSolutions | Building Modern Software & Digital Systems for Institutions')
@section('description', 'ExtremeSolutions engineers custom software, school management systems, and automated digital platforms for institutions and businesses across Nigeria. See our live School System & ESPass platforms.')

@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How does ExtremeSolutions differ from generic software vendors?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We do not just consult or resell third-party tools. We engineer and operate our own live production platforms — such as the ExtremeSolutions School Management System (sms.extremesolutions.com.ng) and ESPass (espass.extremesolutions.com.ng). When we build your system, you deal directly with senior software engineers, see working software early, and receive dedicated post-launch support."
      }
    },
    {
      "@type": "Question",
      "name": "How does the School Management System work for my school?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "ExtremeSolutions SMS unifies student fee tracking, automated term result collation, attendance monitoring, and parent communication into one secure cloud dashboard. We assist your school with data migration, onboarding, and comprehensive staff training so your team never struggles with paper registers or spreadsheet errors again."
      }
    },
    {
      "@type": "Question",
      "name": "How is pricing structured?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For our School Management System, we use a transparent, low-commitment per-student, per-term model that scales naturally with your school. For custom software and business systems, we agree on clear, milestone-based pricing upfront with zero hidden fees."
      }
    },
    {
      "@type": "Question",
      "name": "Can we test the live platforms before making a commitment?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Both sms.extremesolutions.com.ng and espass.extremesolutions.com.ng are live in production. You can book a free, no-obligation walkthrough with our team where we demonstrate the system with your exact operational context in mind."
      }
    },
    {
      "@type": "Question",
      "name": "What level of support do you provide after launch?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We never hand over software into silence. We provide ongoing maintenance, automated cloud backups, 24/7 server monitoring, and direct phone and WhatsApp access to a real engineer whenever your staff needs assistance."
      }
    }
  ]
}
</script>
@endsection

@section('content')
    <!-- 1. Hero Section (Sericode-Inspired Brand Surface) -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white pt-16 pb-20 md:pt-24 md:pb-32">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="brand-glow top-0 left-1/2 -translate-x-1/2 w-[600px] h-[350px] bg-gradient-to-br from-[#1e3a5f] via-[#d4a373]/15 to-transparent"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <!-- StoryBrand Top Badge -->
            <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-xs text-white/90 backdrop-blur-md mb-8 reveal">
                <span class="w-2 h-2 rounded-full bg-[#00ff88] animate-pulse"></span>
                <span class="font-medium">Live Systems in Production &middot; Proven Authority</span>
            </div>

            <!-- Editorial Headline with Sericode Style Font-weight contrast & Gold Period -->
            <h1 class="mx-auto max-w-4xl text-3xl sm:text-5xl lg:text-[62px] tracking-tight leading-[1.14] reveal">
                <span class="font-light text-white/90">Engineering the Software</span><br/>
                <span class="font-bold text-white">Behind Modern Institutions<span class="text-[#d4a373]">.</span></span>
            </h1>

            <!-- StoryBrand Problem & Guide Value Proposition -->
            <p class="mx-auto mt-6 max-w-2xl text-sm sm:text-base leading-relaxed text-white/75 reveal">
                Your organization deserves technology built around how you work — not generic packages that fight you. 
                We engineer reliable custom software, school management systems, and digital automation so you stop losing hours to manual spreadsheets and disconnected tools.
            </p>

            <!-- Sericode-Style Dual Call To Action -->
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4 reveal">
                <a href="#request-quote" class="inline-flex items-center rounded-full bg-[#d4a373] px-7 py-3.5 text-sm font-semibold text-[#0c1f3a] hover:bg-[#c5935f] transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                    Request a Consultation
                </a>
                <a href="#featured-projects" class="group inline-flex items-center gap-2 rounded-full border border-white/30 px-6 py-3.5 text-sm font-medium text-white hover:bg-white/10 transition-colors">
                    <span>See Live Systems</span>
                    <svg class="h-4 w-4 text-[#d4a373] transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l10-10M7 7h10v10" />
                    </svg>
                </a>
            </div>

            <!-- Live Proof Ribbon -->
            <div class="mt-16 pt-8 border-t border-white/10 reveal">
                <p class="text-[11px] uppercase tracking-[0.25em] text-white/45">
                    Live Platforms Operated by ExtremeSolutions
                </p>
                <div class="mt-5 flex flex-wrap items-center justify-center gap-4 sm:gap-8 text-sm">
                    <a href="https://sms.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="group inline-flex items-center gap-2 rounded-xl bg-white/5 border border-white/15 px-4 py-2.5 text-white/80 hover:text-white hover:border-[#00ff88]/50 transition-all">
                        <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                        <span class="font-medium text-xs sm:text-sm">sms.extremesolutions.com.ng</span>
                        <span class="text-[10px] uppercase font-bold text-[#00ff88] bg-[#00ff88]/15 px-2 py-0.5 rounded">School Platform</span>
                    </a>
                    <a href="https://espass.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="group inline-flex items-center gap-2 rounded-xl bg-white/5 border border-white/15 px-4 py-2.5 text-white/80 hover:text-white hover:border-[#00ff88]/50 transition-all">
                        <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                        <span class="font-medium text-xs sm:text-sm">espass.extremesolutions.com.ng</span>
                        <span class="text-[10px] uppercase font-bold text-[#00ff88] bg-[#00ff88]/15 px-2 py-0.5 rounded">Event Ticketing</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Tech Stack Infinite Marquee (Sericode Parity) -->
    <section id="stack" class="overflow-hidden bg-white py-10 md:py-12 border-b border-gray-100">
        <p class="mb-6 text-center text-xs uppercase tracking-[0.25em] text-gray-400 font-medium">
            Production Technologies Behind Our Systems
        </p>
        <div class="marquee-container">
            <div class="marquee-track">
                <!-- Stack Items -->
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">Laravel</span>
                </div>
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">TypeScript</span>
                </div>
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">React &amp; Next.js</span>
                </div>
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">Python</span>
                </div>
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">PostgreSQL</span>
                </div>
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">Tailwind CSS</span>
                </div>
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">Docker</span>
                </div>
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">Cloudflare</span>
                </div>
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">Redis</span>
                </div>
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">Flutter Mobile</span>
                </div>
                <!-- Duplicate for Seamless Infinite Loop -->
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">Laravel</span>
                </div>
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">TypeScript</span>
                </div>
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">React &amp; Next.js</span>
                </div>
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">Python</span>
                </div>
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">PostgreSQL</span>
                </div>
                <div class="flex shrink-0 items-center gap-2 text-gray-500 font-medium text-sm">
                    <span class="font-semibold text-gray-800">Tailwind CSS</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Authority & Founder Callout Card (Sericode Parity) -->
    <section id="authority" class="bg-white py-12 md:py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="brand-surface relative overflow-hidden rounded-3xl p-8 md:p-12 shadow-2xl reveal">
                <div class="brand-texture" aria-hidden="true"></div>
                <div class="relative z-10 flex flex-col justify-between gap-10 lg:flex-row lg:items-center">
                    <div class="max-w-2xl">
                        <div class="inline-flex items-center gap-2 text-[#d4a373] text-xs font-semibold uppercase tracking-wider mb-4">
                            <span>Our Engineering Credo</span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-white">
                            Powering Institutions with Dependable, Tailored Software<span class="text-[#d4a373]">.</span>
                        </h2>
                        <p class="mt-4 text-sm sm:text-base leading-relaxed text-white/75">
                            We founded ExtremeSolutions on a simple observation: too much enterprise software is bloated, disconnected, and difficult for non-technical staff to operate. 
                            We design software that fits your exact processes, train your staff until they are fully confident, and stay on standby long after launch.
                        </p>
                    </div>

                    <!-- Credibility Quote Box -->
                    <div class="w-full lg:max-w-sm rounded-2xl bg-white/10 border border-white/15 p-6 backdrop-blur-md">
                        <div class="text-[#d4a373] mb-3">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                        <p class="text-xs sm:text-sm leading-relaxed text-white/90 italic">
                            "Every system we ship carries our name on it. We build it with the exact rigor, security, and care that we use for our own production platforms."
                        </p>
                        <div class="mt-4 pt-4 border-t border-white/10 flex items-center justify-between">
                            <div>
                                <p class="text-xs font-semibold text-white">ExtremeSolutions Engineering</p>
                                <p class="text-[11px] text-white/50">Core Architecture Team</p>
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

    <!-- 4. Services Grid ("What We Build" - Sericode Architectural SVG Aesthetic) -->
    <section id="services" class="bg-[#f8fafc] py-20 md:py-28 border-y border-gray-200/70">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <h2 class="text-3xl sm:text-5xl tracking-tight leading-[1.15] reveal">
                    <span class="font-light text-gray-500">Our Tailored</span>
                    <span class="font-bold text-[#0c1f3a]">Solutions</span><span class="text-[#d4a373]">.</span>
                </h2>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed reveal">
                    We do not offer one-size-fits-all software. Every solution is custom-architected to eliminate manual overhead, eradicate data errors, and empower your organization.
                </p>
            </div>

            <div class="mt-14 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Service 1: School Management Systems -->
                <div class="group flex flex-col rounded-2xl bg-white p-4 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl reveal">
                    <div class="h-48 overflow-hidden rounded-xl bg-[#ebf1f8] text-[#0c1f3a] p-6 flex items-center justify-center transition-colors group-hover:bg-[#e2edf8]">
                        <!-- Architectural Diagram SVG -->
                        <svg class="h-full w-full transition-transform duration-500 group-hover:scale-105" viewBox="0 0 320 180" fill="none" stroke="currentColor">
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
                    <div class="mt-6 px-3">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-[#0c1f3a]">School Management Systems</h3>
                            <span class="text-[10px] uppercase font-bold text-[#00cc6a] bg-[#00ff88]/15 px-2 py-0.5 rounded">Live Demo</span>
                        </div>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            End-to-end cloud platform for forward-thinking schools: automated student term results, fee ledger tracking, digital attendance, and parent communication.
                        </p>
                        <a href="{{ route('products.school') }}" class="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-[#0c1f3a] hover:text-[#d4a373] transition-colors">
                            <span>Explore School Platform</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 2: ESPass Event Ticketing -->
                <div class="group flex flex-col rounded-2xl bg-white p-4 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl reveal">
                    <div class="h-48 overflow-hidden rounded-xl bg-[#ebf1f8] text-[#0c1f3a] p-6 flex items-center justify-center transition-colors group-hover:bg-[#e2edf8]">
                        <svg class="h-full w-full transition-transform duration-500 group-hover:scale-105" viewBox="0 0 320 180" fill="none" stroke="currentColor">
                            <rect x="60" y="35" width="200" height="110" rx="12" stroke-width="2" fill="currentColor" fill-opacity="0.04" />
                            <path d="M130 35v110" stroke-width="2" stroke-dasharray="4 6" />
                            <rect x="80" y="60" width="35" height="35" rx="4" stroke-width="1.8" />
                            <path d="M87 77h21M97 67v21" stroke-width="1.5" />
                            <path d="M150 65h85M150 85h60M150 105h40" stroke-width="2" />
                        </svg>
                    </div>
                    <div class="mt-6 px-3">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-[#0c1f3a]">ESPass Event &amp; Ticketing</h3>
                            <span class="text-[10px] uppercase font-bold text-[#00cc6a] bg-[#00ff88]/15 px-2 py-0.5 rounded">Live Demo</span>
                        </div>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Ultra-fast QR access validation, instant financial reconciliation, and fraud-proof event ticketing for conferences, venues, and institutions.
                        </p>
                        <a href="{{ route('products.espass') }}" class="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-[#0c1f3a] hover:text-[#d4a373] transition-colors">
                            <span>Explore ESPass Platform</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 3: Custom Software Engineering -->
                <div class="group flex flex-col rounded-2xl bg-white p-4 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl reveal">
                    <div class="h-48 overflow-hidden rounded-xl bg-[#ebf1f8] text-[#0c1f3a] p-6 flex items-center justify-center transition-colors group-hover:bg-[#e2edf8]">
                        <svg class="h-full w-full transition-transform duration-500 group-hover:scale-105" viewBox="0 0 320 180" fill="none" stroke="currentColor">
                            <rect x="65" y="30" width="190" height="120" rx="8" stroke-width="2" fill="currentColor" fill-opacity="0.04" />
                            <path d="M100 70l-20 20 20 20M220 70l20 20-20 20M170 65l-20 50" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="mt-6 px-3">
                        <h3 class="text-lg font-semibold text-[#0c1f3a]">Custom Software Engineering</h3>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Bespoke web applications built from the ground up to fit your organization's unique operational procedures, compliance standards, and growth goals.
                        </p>
                        <a href="#request-quote" class="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-[#0c1f3a] hover:text-[#d4a373] transition-colors">
                            <span>Scope Your Custom Build</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 4: Enterprise Systems & Automation -->
                <div class="group flex flex-col rounded-2xl bg-white p-4 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl reveal">
                    <div class="h-48 overflow-hidden rounded-xl bg-[#ebf1f8] text-[#0c1f3a] p-6 flex items-center justify-center transition-colors group-hover:bg-[#e2edf8]">
                        <svg class="h-full w-full transition-transform duration-500 group-hover:scale-105" viewBox="0 0 320 180" fill="none" stroke="currentColor">
                            <circle cx="90" cy="90" r="30" stroke-width="2" fill="currentColor" fill-opacity="0.04" />
                            <circle cx="230" cy="90" r="30" stroke-width="2" fill="currentColor" fill-opacity="0.04" />
                            <path d="M120 90h80" stroke-width="2" stroke-dasharray="3 4" />
                            <path d="M190 80l10 10-10 10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <rect x="145" y="40" width="30" height="30" rx="6" stroke-width="1.8" />
                            <rect x="145" y="110" width="30" height="30" rx="6" stroke-width="1.8" />
                        </svg>
                    </div>
                    <div class="mt-6 px-3">
                        <h3 class="text-lg font-semibold text-[#0c1f3a]">Systems &amp; Automation</h3>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Connect disconnected spreadsheets, databases, and third-party payment gateways into a synchronized, automated data pipeline.
                        </p>
                        <a href="#request-quote" class="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-[#0c1f3a] hover:text-[#d4a373] transition-colors">
                            <span>Automate Your Workflows</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 5: Web & Mobile Applications -->
                <div class="group flex flex-col rounded-2xl bg-white p-4 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl reveal">
                    <div class="h-48 overflow-hidden rounded-xl bg-[#ebf1f8] text-[#0c1f3a] p-6 flex items-center justify-center transition-colors group-hover:bg-[#e2edf8]">
                        <svg class="h-full w-full transition-transform duration-500 group-hover:scale-105" viewBox="0 0 320 180" fill="none" stroke="currentColor">
                            <rect x="70" y="30" width="120" height="120" rx="8" stroke-width="2" fill="currentColor" fill-opacity="0.04" />
                            <rect x="205" y="45" width="55" height="105" rx="8" stroke-width="2" />
                            <circle cx="232" cy="138" r="3" fill="currentColor" />
                            <path d="M85 60h90M85 85h60" stroke-width="1.8" />
                        </svg>
                    </div>
                    <div class="mt-6 px-3">
                        <h3 class="text-lg font-semibold text-[#0c1f3a]">Web &amp; Mobile Applications</h3>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Responsive customer-facing websites, mobile apps (iOS &amp; Android), and member portals engineered for high speed, stability, and great UX.
                        </p>
                        <a href="#request-quote" class="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-[#0c1f3a] hover:text-[#d4a373] transition-colors">
                            <span>Discuss Mobile / Web</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service 6: ExtremeSolutions Academy -->
                <div class="group flex flex-col rounded-2xl bg-white p-4 pb-8 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl reveal">
                    <div class="h-48 overflow-hidden rounded-xl bg-[#ebf1f8] text-[#0c1f3a] p-6 flex items-center justify-center transition-colors group-hover:bg-[#e2edf8]">
                        <svg class="h-full w-full transition-transform duration-500 group-hover:scale-105" viewBox="0 0 320 180" fill="none" stroke="currentColor">
                            <path d="M160 35l90 45-90 45-90-45 90-45z" stroke-width="2" fill="currentColor" fill-opacity="0.04" />
                            <path d="M100 95v35c0 15 27 27 60 27s60-12 60-27V95" stroke-width="2" />
                            <path d="M250 80v50" stroke-width="2" />
                        </svg>
                    </div>
                    <div class="mt-6 px-3">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-[#0c1f3a]">Training &amp; Mentorship</h3>
                            <span class="text-[10px] uppercase font-bold text-[#d4a373] bg-[#d4a373]/15 px-2 py-0.5 rounded">Coming Soon</span>
                        </div>
                        <p class="mt-2.5 text-xs sm:text-sm text-gray-600 leading-relaxed">
                            Cohort-based engineering mentorship training Nigerian talent on real production systems — not canned textbook exercises.
                        </p>
                        <a href="{{ route('academy') }}" class="mt-4 inline-flex items-center gap-1.5 text-xs font-semibold text-[#0c1f3a] hover:text-[#d4a373] transition-colors">
                            <span>Explore Academy Waitlist</span>
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. How We Work / The 3-Step Plan (Donald Miller SB7 Plan on Sericode Frosted Surface) -->
    <section id="how-we-work" class="brand-surface relative overflow-hidden bg-[#0c1f3a] py-20 md:py-28 text-white">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="brand-glow bottom-0 right-0 w-[500px] h-[350px] bg-[#d4a373]/10"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                <div>
                    <h2 class="text-3xl sm:text-5xl tracking-tight leading-[1.15] reveal">
                        <span class="font-light text-white/80">How We</span>
                        <span class="font-bold text-white">Work<span class="text-[#d4a373]">?</span></span>
                    </h2>
                    <p class="mt-4 max-w-xl text-sm sm:text-base leading-relaxed text-white/70 reveal">
                        No black-box handoffs or disappearing developers. We guide you through a clear, risk-reversing 3-phase journey.
                    </p>
                </div>
                <a href="#request-quote" class="hidden md:inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/5 px-6 py-2.5 text-xs font-semibold text-white hover:bg-white/10 transition-colors">
                    Start Step 1: Free Consultation
                </a>
            </div>

            <!-- 6-Card Frosted Grid (Sericode Parity) -->
            <div class="mt-14 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <!-- 01 -->
                <div class="rounded-2xl border border-white/15 bg-white/[0.06] p-6 backdrop-blur-sm transition-all duration-300 hover:bg-white/[0.1] reveal">
                    <span class="text-xs font-mono text-[#d4a373] font-bold tracking-wider">STAGE 01</span>
                    <h3 class="mt-4 text-lg font-semibold text-white">Discovery &amp; Problem Audit</h3>
                    <p class="mt-2.5 text-xs sm:text-sm leading-relaxed text-white/65">
                        We map your exact manual pain points, data flow, and bottlenecks before any code is planned. No obligation.
                    </p>
                </div>

                <!-- 02 -->
                <div class="rounded-2xl border border-white/15 bg-white/[0.06] p-6 backdrop-blur-sm transition-all duration-300 hover:bg-white/[0.1] reveal">
                    <span class="text-xs font-mono text-[#d4a373] font-bold tracking-wider">STAGE 02</span>
                    <h3 class="mt-4 text-lg font-semibold text-white">Architecture &amp; UX Design</h3>
                    <p class="mt-2.5 text-xs sm:text-sm leading-relaxed text-white/65">
                        Clean interfaces crafted for your actual operators — teachers, administrative staff, or customers — ensuring immediate adoption.
                    </p>
                </div>

                <!-- 03 -->
                <div class="rounded-2xl border border-white/15 bg-white/[0.06] p-6 backdrop-blur-sm transition-all duration-300 hover:bg-white/[0.1] reveal">
                    <span class="text-xs font-mono text-[#d4a373] font-bold tracking-wider">STAGE 03</span>
                    <h3 class="mt-4 text-lg font-semibold text-white">Milestone-Based Build</h3>
                    <p class="mt-2.5 text-xs sm:text-sm leading-relaxed text-white/65">
                        You test working software in clear sprints. You approve each milestone before moving forward — no surprise costs.
                    </p>
                </div>

                <!-- 04 -->
                <div class="rounded-2xl border border-white/15 bg-white/[0.06] p-6 backdrop-blur-sm transition-all duration-300 hover:bg-white/[0.1] reveal">
                    <span class="text-xs font-mono text-[#d4a373] font-bold tracking-wider">STAGE 04</span>
                    <h3 class="mt-4 text-lg font-semibold text-white">Rigorous Data Migration</h3>
                    <p class="mt-2.5 text-xs sm:text-sm leading-relaxed text-white/65">
                        We migrate existing student ledgers, records, or customer databases smoothly into the new system with zero data loss.
                    </p>
                </div>

                <!-- 05 -->
                <div class="rounded-2xl border border-white/15 bg-white/[0.06] p-6 backdrop-blur-sm transition-all duration-300 hover:bg-white/[0.1] reveal">
                    <span class="text-xs font-mono text-[#d4a373] font-bold tracking-wider">STAGE 05</span>
                    <h3 class="mt-4 text-lg font-semibold text-white">Comprehensive Staff Training</h3>
                    <p class="mt-2.5 text-xs sm:text-sm leading-relaxed text-white/65">
                        We don't just email a link. We train your staff hands-on so everyone feels empowered on day one.
                    </p>
                </div>

                <!-- 06 -->
                <div class="rounded-2xl border border-white/15 bg-white/[0.06] p-6 backdrop-blur-sm transition-all duration-300 hover:bg-white/[0.1] reveal">
                    <span class="text-xs font-mono text-[#d4a373] font-bold tracking-wider">STAGE 06</span>
                    <h3 class="mt-4 text-lg font-semibold text-white">Dedicated Support &amp; SLA</h3>
                    <p class="mt-2.5 text-xs sm:text-sm leading-relaxed text-white/65">
                        Ongoing maintenance, uptime monitoring, and direct access to an engineer when you need updates or help.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Featured Projects Interactive Showcase (Sericode Parity) -->
    <section id="featured-projects" class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <h2 class="text-3xl sm:text-5xl tracking-tight leading-[1.15] reveal">
                    <span class="font-light text-gray-500">Production</span>
                    <span class="font-bold text-[#0c1f3a]">Proof</span><span class="text-[#d4a373]">.</span>
                </h2>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed reveal">
                    We don't present mockups as finished work. These are live, production platforms built, hosted, and operated by ExtremeSolutions today.
                </p>
            </div>

            <!-- Tabbed Project Selector & Interactive Display -->
            <div class="mt-12 grid gap-10 lg:grid-cols-12 lg:gap-14 items-start">
                <!-- Left: Interactive List / Tabs -->
                <div class="lg:col-span-5 order-2 lg:order-1 border-t border-gray-200">
                    <!-- Tab 1: School System -->
                    <div class="cursor-pointer border-b border-gray-200 py-6 transition-colors hover:bg-gray-50/70" data-project-tab="sms" role="tab" aria-selected="true">
                        <div class="flex items-baseline gap-4">
                            <span class="project-num text-base font-bold tabular-nums text-[#d4a373]">01</span>
                            <div class="min-w-0 flex-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="project-title text-xl font-bold text-[#0c1f3a]">School Management System</h3>
                                    <svg class="h-5 w-5 text-[#d4a373]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l10-10M7 7h10v10" />
                                    </svg>
                                </div>
                                <p class="mt-2 text-xs font-medium text-gray-500">
                                    <span>Cloud Platform</span> &middot; <span class="text-[#0c1f3a]">sms.extremesolutions.com.ng</span>
                                </p>
                                <p class="mt-3 text-xs sm:text-sm text-gray-600 leading-relaxed">
                                    Replaces paper registers and spreadsheet result compilation with one real-time cloud portal for proprietors, teachers, and parents.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 2: ESPass Ticketing -->
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
                                <p class="mt-2 text-xs font-medium text-gray-400">
                                    <span>Event Access SaaS</span> &middot; <span>espass.extremesolutions.com.ng</span>
                                </p>
                                <p class="mt-3 text-xs sm:text-sm text-gray-500 leading-relaxed">
                                    Fraud-proof barcode ticketing, real-time gate validation, and revenue settlement built for seamless crowd entry.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 3: Bespoke Institutional Automation -->
                    <div class="cursor-pointer border-b border-gray-200 py-6 transition-colors hover:bg-gray-50/70" data-project-tab="automation" role="tab" aria-selected="false">
                        <div class="flex items-baseline gap-4">
                            <span class="project-num text-base font-bold tabular-nums text-gray-400">03</span>
                            <div class="min-w-0 flex-1">
                                <div class="flex items-center justify-between">
                                    <h3 class="project-title text-xl font-medium text-gray-500">Custom Institutional Portals</h3>
                                    <svg class="h-5 w-5 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l10-10M7 7h10v10" />
                                    </svg>
                                </div>
                                <p class="mt-2 text-xs font-medium text-gray-400">
                                    <span>Enterprise Automation</span> &middot; <span>Bespoke Engineering</span>
                                </p>
                                <p class="mt-3 text-xs sm:text-sm text-gray-500 leading-relaxed">
                                    Tailored database integration, automated notification engines, and role-based staff portals built to order.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: High-Aesthetic Showcase Cards & Live Metrics -->
                <div class="lg:col-span-7 order-1 lg:order-2">
                    <!-- Panel 1: School System -->
                    <div data-project-panel="sms" class="block tab-panel rounded-3xl bg-[#0c1f3a] text-white overflow-hidden p-7 sm:p-10 shadow-2xl border border-white/10 relative">
                        <div class="brand-texture" aria-hidden="true"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between gap-4">
                                <span class="inline-flex items-center gap-2 rounded-full bg-[#00ff88]/20 px-3 py-1 text-xs font-semibold text-[#00ff88]">
                                    <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                                    Live in Production
                                </span>
                                <a href="https://sms.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="text-xs font-mono text-[#d4a373] hover:underline flex items-center gap-1">
                                    sms.extremesolutions.com.ng &rarr;
                                </a>
                            </div>

                            <h4 class="mt-6 text-2xl sm:text-3xl font-bold tracking-tight">ExtremeSolutions SMS Platform</h4>
                            <p class="mt-3 text-sm text-white/75 leading-relaxed">
                                A comprehensive multi-role system designed for Nigerian schools. Eliminates manual fee reconciliations and error-prone result calculations with a modern, high-speed interface.
                            </p>

                            <!-- Metric Callouts (Sericode Style) -->
                            <div class="mt-8 grid grid-cols-3 gap-4 pt-6 border-t border-white/10">
                                <div>
                                    <p class="text-2xl sm:text-3xl font-bold text-white tracking-tight">100<span class="text-[#d4a373]">%</span></p>
                                    <p class="mt-1 text-[11px] text-white/60">Automated Grade Computation</p>
                                </div>
                                <div>
                                    <p class="text-2xl sm:text-3xl font-bold text-white tracking-tight">0</p>
                                    <p class="mt-1 text-[11px] text-white/60">Manual Paper Registers</p>
                                </div>
                                <div>
                                    <p class="text-2xl sm:text-3xl font-bold text-white tracking-tight">Instant</p>
                                    <p class="mt-1 text-[11px] text-white/60">Parent Result Access</p>
                                </div>
                            </div>

                            <div class="mt-8 flex flex-wrap gap-3">
                                <a href="{{ route('products.school') }}" class="rounded-full bg-[#d4a373] px-6 py-2.5 text-xs font-semibold text-[#0c1f3a] hover:bg-[#c5935f] transition-colors">
                                    View School Pitch Details
                                </a>
                                <a href="https://sms.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="rounded-full border border-white/20 bg-white/10 px-6 py-2.5 text-xs font-medium text-white hover:bg-white/20 transition-colors">
                                    Open Live Demo
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Panel 2: ESPass Ticketing (Hidden by default, activated via tab) -->
                    <div data-project-panel="espass" class="hidden tab-panel rounded-3xl bg-[#0c1f3a] text-white overflow-hidden p-7 sm:p-10 shadow-2xl border border-white/10 relative">
                        <div class="brand-texture" aria-hidden="true"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between gap-4">
                                <span class="inline-flex items-center gap-2 rounded-full bg-[#00ff88]/20 px-3 py-1 text-xs font-semibold text-[#00ff88]">
                                    <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                                    Live in Production
                                </span>
                                <a href="https://espass.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="text-xs font-mono text-[#d4a373] hover:underline flex items-center gap-1">
                                    espass.extremesolutions.com.ng &rarr;
                                </a>
                            </div>

                            <h4 class="mt-6 text-2xl sm:text-3xl font-bold tracking-tight">ESPass Ticketing &amp; Access Engine</h4>
                            <p class="mt-3 text-sm text-white/75 leading-relaxed">
                                High-throughput access pass and ticketing infrastructure. Validates thousands of attendees with low-latency QR verification and real-time revenue collection.
                            </p>

                            <!-- Metric Callouts -->
                            <div class="mt-8 grid grid-cols-3 gap-4 pt-6 border-t border-white/10">
                                <div>
                                    <p class="text-2xl sm:text-3xl font-bold text-white tracking-tight">&lt; 0.5<span class="text-[#d4a373]">s</span></p>
                                    <p class="mt-1 text-[11px] text-white/60">Gate QR Scan Validation</p>
                                </div>
                                <div>
                                    <p class="text-2xl sm:text-3xl font-bold text-white tracking-tight">100<span class="text-[#d4a373]">%</span></p>
                                    <p class="mt-1 text-[11px] text-white/60">Reconciliation Accuracy</p>
                                </div>
                                <div>
                                    <p class="text-2xl sm:text-3xl font-bold text-white tracking-tight">0</p>
                                    <p class="mt-1 text-[11px] text-white/60">Duplicate Ticket Fraud</p>
                                </div>
                            </div>

                            <div class="mt-8 flex flex-wrap gap-3">
                                <a href="{{ route('products.espass') }}" class="rounded-full bg-[#d4a373] px-6 py-2.5 text-xs font-semibold text-[#0c1f3a] hover:bg-[#c5935f] transition-colors">
                                    Explore ESPass Architecture
                                </a>
                                <a href="https://espass.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="rounded-full border border-white/20 bg-white/10 px-6 py-2.5 text-xs font-medium text-white hover:bg-white/20 transition-colors">
                                    Open Live Platform
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Panel 3: Automation -->
                    <div data-project-panel="automation" class="hidden tab-panel rounded-3xl bg-[#0c1f3a] text-white overflow-hidden p-7 sm:p-10 shadow-2xl border border-white/10 relative">
                        <div class="brand-texture" aria-hidden="true"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between gap-4">
                                <span class="inline-flex items-center gap-2 rounded-full bg-[#d4a373]/20 px-3 py-1 text-xs font-semibold text-[#d4a373]">
                                    Enterprise Custom
                                </span>
                                <span class="text-xs font-mono text-white/50">Engineered to Spec</span>
                            </div>

                            <h4 class="mt-6 text-2xl sm:text-3xl font-bold tracking-tight">Custom Enterprise Portals &amp; APIs</h4>
                            <p class="mt-3 text-sm text-white/75 leading-relaxed">
                                Tailor-engineered internal applications connecting inventory, customer invoices, payment gateways, and staff permissions into an automated control panel.
                            </p>

                            <div class="mt-8 grid grid-cols-3 gap-4 pt-6 border-t border-white/10">
                                <div>
                                    <p class="text-2xl sm:text-3xl font-bold text-white tracking-tight">10<span class="text-[#d4a373]">x</span></p>
                                    <p class="mt-1 text-[11px] text-white/60">Faster Operation Execution</p>
                                </div>
                                <div>
                                    <p class="text-2xl sm:text-3xl font-bold text-white tracking-tight">Role</p>
                                    <p class="mt-1 text-[11px] text-white/60">Strict Granular Access</p>
                                </div>
                                <div>
                                    <p class="text-2xl sm:text-3xl font-bold text-white tracking-tight">Secure</p>
                                    <p class="mt-1 text-[11px] text-white/60">Cloud Backups &amp; Audit Logs</p>
                                </div>
                            </div>

                            <div class="mt-8">
                                <a href="#request-quote" class="rounded-full bg-[#d4a373] px-6 py-2.5 text-xs font-semibold text-[#0c1f3a] hover:bg-[#c5935f] transition-colors">
                                    Request a Solution Architecture Call
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Our Numbers Stat Banner (Sericode Parity) -->
    <section id="numbers" class="brand-surface relative overflow-hidden bg-[#0c1f3a] py-16 md:py-20 text-white border-y border-white/10">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-5xl divide-y divide-white/15 lg:grid lg:grid-cols-3 lg:divide-x lg:divide-y-0 text-center">
                <div class="py-6 lg:py-2 px-6">
                    <span class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight">100<span class="text-[#d4a373]">%</span></span>
                    <p class="mt-2 text-xs sm:text-sm text-white/70">Engineered to Your Operations</p>
                </div>
                <div class="py-6 lg:py-2 px-6">
                    <span class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight">99.9<span class="text-[#d4a373]">%</span></span>
                    <p class="mt-2 text-xs sm:text-sm text-white/70">Verified Cloud Uptime</p>
                </div>
                <div class="py-6 lg:py-2 px-6">
                    <span class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight">24<span class="text-[#d4a373]">/7</span></span>
                    <p class="mt-2 text-xs sm:text-sm text-white/70">Monitoring &amp; Ongoing Care</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. StoryBrand Trust & Social Proof ("Why Trust Us" with 01, 02, 03 Tabs) -->
    <section id="why-trust-us" class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <h2 class="text-3xl sm:text-5xl tracking-tight leading-[1.15] reveal">
                    <span class="font-light text-gray-500">Why Leaders</span>
                    <span class="font-bold text-[#0c1f3a]">Trust Us</span><span class="text-[#d4a373]">.</span>
                </h2>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed reveal">
                    Not generic marketing slogans — concrete engineering commitments that protect your investment.
                </p>
            </div>

            <div class="mt-14 grid gap-10 lg:grid-cols-[60px_1fr] lg:gap-14 items-start">
                <!-- Numbers Tab Buttons -->
                <div class="flex flex-row lg:flex-col gap-2">
                    <button type="button" class="border-l-2 border-[#d4a373] px-4 py-3 text-sm font-bold text-[#d4a373] transition-colors" data-testimonial-tab="01" aria-label="Commitment 1">01</button>
                    <button type="button" class="border-l-2 border-gray-200 px-4 py-3 text-sm font-medium text-gray-400 hover:text-gray-600 transition-colors" data-testimonial-tab="02" aria-label="Commitment 2">02</button>
                    <button type="button" class="border-l-2 border-gray-200 px-4 py-3 text-sm font-medium text-gray-400 hover:text-gray-600 transition-colors" data-testimonial-tab="03" aria-label="Commitment 3">03</button>
                </div>

                <!-- Content Panels -->
                <div>
                    <!-- Panel 01 -->
                    <div data-testimonial-panel="01" class="rounded-3xl bg-[#f8fafc] border border-gray-200 p-8 sm:p-12">
                        <span class="text-xs font-semibold uppercase tracking-wider text-[#d4a373]">Commitment 01</span>
                        <h3 class="mt-2 text-2xl font-bold text-[#0c1f3a]">You Work Directly With the Engineers Building Your System</h3>
                        <blockquote class="mt-4 text-base sm:text-lg leading-relaxed text-gray-700">
                            "Most agencies route your requests through non-technical sales managers who miss critical details. At ExtremeSolutions, you communicate directly with senior software engineers who write the architecture and understand your operational logic inside out."
                        </blockquote>
                        <div class="mt-6 flex items-center gap-3">
                            <span class="w-10 h-10 rounded-full bg-[#0c1f3a] text-white flex items-center justify-center font-bold text-xs">ES</span>
                            <div>
                                <p class="text-sm font-semibold text-[#0c1f3a]">Direct Engineer Access</p>
                                <p class="text-xs text-gray-500">Zero middleman friction &middot; Rapid iterations</p>
                            </div>
                        </div>
                    </div>

                    <!-- Panel 02 -->
                    <div data-testimonial-panel="02" class="hidden rounded-3xl bg-[#f8fafc] border border-gray-200 p-8 sm:p-12">
                        <span class="text-xs font-semibold uppercase tracking-wider text-[#d4a373]">Commitment 02</span>
                        <h3 class="mt-2 text-2xl font-bold text-[#0c1f3a]">You See Working Software Early — In Tangible Sprints</h3>
                        <blockquote class="mt-4 text-base sm:text-lg leading-relaxed text-gray-700">
                            "We do not spend three months drafting theoretical documents before showing you anything real. We build in functional milestone releases that you can log into, test, and approve as the project evolves."
                        </blockquote>
                        <div class="mt-6 flex items-center gap-3">
                            <span class="w-10 h-10 rounded-full bg-[#0c1f3a] text-white flex items-center justify-center font-bold text-xs">ES</span>
                            <div>
                                <p class="text-sm font-semibold text-[#0c1f3a]">Milestone Verification</p>
                                <p class="text-xs text-gray-500">Transparent progress &middot; No surprises</p>
                            </div>
                        </div>
                    </div>

                    <!-- Panel 03 -->
                    <div data-testimonial-panel="03" class="hidden rounded-3xl bg-[#f8fafc] border border-gray-200 p-8 sm:p-12">
                        <span class="text-xs font-semibold uppercase tracking-wider text-[#d4a373]">Commitment 03</span>
                        <h3 class="mt-2 text-2xl font-bold text-[#0c1f3a]">Support Doesn't End at Launch — We Stand Behind Our Code</h3>
                        <blockquote class="mt-4 text-base sm:text-lg leading-relaxed text-gray-700">
                            "Too many institutions get stranded when contract developers vanish after receiving the final invoice. We stay with you: full administrator training, server monitoring, daily backups, and a dedicated direct phone line whenever you have a question."
                        </blockquote>
                        <div class="mt-6 flex items-center gap-3">
                            <span class="w-10 h-10 rounded-full bg-[#0c1f3a] text-white flex items-center justify-center font-bold text-xs">ES</span>
                            <div>
                                <p class="text-sm font-semibold text-[#0c1f3a]">Long-Term Partnership</p>
                                <p class="text-xs text-gray-500">24/7 Monitoring &middot; Ongoing Updates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Failure vs Success (Donald Miller SB7 Stakes) -->
    <section class="bg-[#f8fafc] py-20 border-y border-gray-200/70">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <h2 class="text-3xl sm:text-4xl font-bold text-[#0c1f3a] reveal">
                    Two Paths for Your Organization
                </h2>
                <div class="w-16 h-1 bg-[#d4a373] mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Failure Path -->
                <div class="rounded-3xl bg-white border border-gray-200 p-8 sm:p-10 shadow-sm reveal">
                    <span class="text-xs font-bold uppercase tracking-wider text-red-500 bg-red-50 px-3 py-1 rounded-full">Stay On Manual Systems</span>
                    <h3 class="mt-4 text-xl font-bold text-gray-800">The Cost of Doing Nothing</h3>
                    <ul class="mt-6 space-y-4 text-sm text-gray-600">
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold">&times;</span>
                            <span>Continue losing hours every week reconciling fee ledgers and paper receipts manually.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold">&times;</span>
                            <span>Risk human error in result computations that embarrass your institution and frustrate parents.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold">&times;</span>
                            <span>Fall behind competing schools and modern businesses that project professional digital excellence.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold">&times;</span>
                            <span>Face the risk of hiring unreliable freelance developers who leave you with broken, unmaintained code.</span>
                        </li>
                    </ul>
                </div>

                <!-- Success Path -->
                <div class="rounded-3xl bg-[#0c1f3a] text-white p-8 sm:p-10 shadow-xl border border-white/10 relative overflow-hidden reveal">
                    <div class="brand-texture" aria-hidden="true"></div>
                    <div class="relative z-10">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#00ff88] bg-[#00ff88]/15 px-3 py-1 rounded-full">Partner with ExtremeSolutions</span>
                        <h3 class="mt-4 text-xl font-bold text-white">The Position of Strength</h3>
                        <ul class="mt-6 space-y-4 text-sm text-white/80">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-[#00ff88] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>One clean cloud platform uniting your whole organization with zero paper clutter.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-[#00ff88] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Automated result collation and instant parent transparency via their own portal.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-[#00ff88] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Hours back for your administrative staff to focus on quality leadership, not data entry.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-[#00ff88] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Direct peace of mind knowing real engineers are maintaining, backing up, and protecting your data.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Interactive FAQ Accordion (Sericode Parity) -->
    <section id="faq" class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:gap-16 items-start">
                <div>
                    <h2 class="text-3xl sm:text-5xl tracking-tight leading-[1.15] lg:sticky lg:top-28 reveal">
                        <span class="font-light text-gray-500">Everything</span><br/>
                        <span class="font-bold text-[#0c1f3a]">You Need to Know<span class="text-[#d4a373]">.</span></span>
                    </h2>
                    <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed max-w-md reveal">
                        Have questions about implementation, pricing, or how we operate? Here are direct answers.
                    </p>
                </div>

                <div class="space-y-4">
                    <!-- Q1 -->
                    <div class="rounded-2xl bg-[#f8fafc] border border-gray-200/80 overflow-hidden reveal">
                        <button type="button" class="faq-trigger flex w-full items-center justify-between gap-6 px-6 py-5 text-left transition-colors" aria-expanded="true">
                            <span class="text-sm sm:text-base font-semibold text-[#0c1f3a]">How does ExtremeSolutions differ from generic software vendors?</span>
                            <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-white text-gray-600 shadow-sm">
                                <span class="icon-minus font-bold text-sm">&minus;</span>
                                <span class="icon-plus font-bold text-sm hidden">&#43;</span>
                            </span>
                        </button>
                        <div class="accordion-content is-open px-6 pb-6 text-xs sm:text-sm leading-relaxed text-gray-600">
                            <p>We do not just consult or resell third-party tools. We engineer and operate our own live production platforms — such as the School Management System (<a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-[#d4a373] underline">sms.extremesolutions.com.ng</a>) and ESPass (<a href="https://espass.extremesolutions.com.ng" target="_blank" class="text-[#d4a373] underline">espass.extremesolutions.com.ng</a>). You deal directly with the engineers building your code, see working prototypes early, and receive dedicated ongoing support.</p>
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="rounded-2xl bg-[#f8fafc] border border-gray-200/80 overflow-hidden reveal">
                        <button type="button" class="faq-trigger flex w-full items-center justify-between gap-6 px-6 py-5 text-left transition-colors" aria-expanded="false">
                            <span class="text-sm sm:text-base font-semibold text-[#0c1f3a]">How do we migrate our existing school data into the School System?</span>
                            <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-white text-gray-600 shadow-sm">
                                <span class="icon-minus font-bold text-sm hidden">&minus;</span>
                                <span class="icon-plus font-bold text-sm">&#43;</span>
                            </span>
                        </button>
                        <div class="accordion-content hidden px-6 pb-6 text-xs sm:text-sm leading-relaxed text-gray-600">
                            <p>You do not have to retype years of records manually. Our engineering team handles data ingestion from your spreadsheets or previous systems. We set up classrooms, subjects, fee schedules, and student profiles alongside your administrative staff so your school is 100% pitch-ready without stress.</p>
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="rounded-2xl bg-[#f8fafc] border border-gray-200/80 overflow-hidden reveal">
                        <button type="button" class="faq-trigger flex w-full items-center justify-between gap-6 px-6 py-5 text-left transition-colors" aria-expanded="false">
                            <span class="text-sm sm:text-base font-semibold text-[#0c1f3a]">How is pricing structured? Is there a large upfront trap?</span>
                            <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-white text-gray-600 shadow-sm">
                                <span class="icon-minus font-bold text-sm hidden">&minus;</span>
                                <span class="icon-plus font-bold text-sm">&#43;</span>
                            </span>
                        </button>
                        <div class="accordion-content hidden px-6 pb-6 text-xs sm:text-sm leading-relaxed text-gray-600">
                            <p>No. For schools, we operate a transparent, risk-reversing <strong>per-student, per-term</strong> model. It grows naturally with your enrollment and never locks you into prohibitive annual lump sums. For custom builds, we agree on fixed milestone pricing upfront before a single line of code is committed.</p>
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="rounded-2xl bg-[#f8fafc] border border-gray-200/80 overflow-hidden reveal">
                        <button type="button" class="faq-trigger flex w-full items-center justify-between gap-6 px-6 py-5 text-left transition-colors" aria-expanded="false">
                            <span class="text-sm sm:text-base font-semibold text-[#0c1f3a]">How long does it take to deploy our platform?</span>
                            <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-white text-gray-600 shadow-sm">
                                <span class="icon-minus font-bold text-sm hidden">&minus;</span>
                                <span class="icon-plus font-bold text-sm">&#43;</span>
                            </span>
                        </button>
                        <div class="accordion-content hidden px-6 pb-6 text-xs sm:text-sm leading-relaxed text-gray-600">
                            <p>For the School Management System and ESPass, a school or organizer can go live within days once student or event lists are uploaded. For bespoke enterprise builds, initial operational MVPs are delivered within 3 to 6 weeks, structured across clear approval sprints.</p>
                        </div>
                    </div>

                    <!-- Q5 -->
                    <div class="rounded-2xl bg-[#f8fafc] border border-gray-200/80 overflow-hidden reveal">
                        <button type="button" class="faq-trigger flex w-full items-center justify-between gap-6 px-6 py-5 text-left transition-colors" aria-expanded="false">
                            <span class="text-sm sm:text-base font-semibold text-[#0c1f3a]">What happens if a teacher or administrator gets stuck?</span>
                            <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-white text-gray-600 shadow-sm">
                                <span class="icon-minus font-bold text-sm hidden">&minus;</span>
                                <span class="icon-plus font-bold text-sm">&#43;</span>
                            </span>
                        </button>
                        <div class="accordion-content hidden px-6 pb-6 text-xs sm:text-sm leading-relaxed text-gray-600">
                            <p>You have direct access to our technical team via dedicated WhatsApp and telephone (<a href="tel:09052585622" class="text-[#0c1f3a] font-semibold">09052585622</a>). We also provide video tutorials, printed operator cheat sheets, and on-call troubleshooting whenever term-end results or registrations are in progress.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. Engagement Models (Sericode Parity: Fixed Scope vs Retainer) -->
    <section id="engagement" class="bg-[#f8fafc] py-20 md:py-28 border-t border-gray-200/70">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                <div>
                    <h2 class="text-3xl sm:text-5xl tracking-tight leading-[1.15] reveal">
                        <span class="font-light text-gray-500">Working</span>
                        <span class="font-bold text-[#0c1f3a]">With Us</span><span class="text-[#d4a373]">.</span>
                    </h2>
                    <p class="mt-4 max-w-md text-sm sm:text-base text-gray-600 leading-relaxed reveal">
                        Two simple engagement structures — pick the model that aligns with your timeline and scope.
                    </p>
                </div>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-2">
                <!-- Fixed-Scope Project -->
                <div class="rounded-3xl bg-white p-8 border border-gray-200/80 shadow-sm reveal">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-bold text-[#0c1f3a]">Fixed-Scope System</h3>
                        <span class="text-xs font-semibold text-[#d4a373] bg-[#d4a373]/10 px-3 py-1 rounded-full">Best for Defined Needs</span>
                    </div>
                    <p class="mt-3 text-xs sm:text-sm text-gray-600">Ideal for school management onboarding, ticketed event setup, or specific business applications with a known feature scope.</p>

                    <ul class="mt-6 space-y-3.5 text-xs sm:text-sm text-gray-700">
                        <li class="flex items-center gap-3">
                            <span class="w-5 h-5 rounded-full bg-[#0c1f3a] text-white flex items-center justify-center text-[10px]">&check;</span>
                            <span>Transparent milestone budget agreed upfront</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-5 h-5 rounded-full bg-[#0c1f3a] text-white flex items-center justify-center text-[10px]">&check;</span>
                            <span>Scheduled delivery timeline with bi-weekly demo check-ins</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-5 h-5 rounded-full bg-[#0c1f3a] text-white flex items-center justify-center text-[10px]">&check;</span>
                            <span>Data migration, operator training, and handover documentation</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-5 h-5 rounded-full bg-[#0c1f3a] text-white flex items-center justify-center text-[10px]">&check;</span>
                            <span>Comprehensive post-launch warranty and support window</span>
                        </li>
                    </ul>
                </div>

                <!-- Monthly Partnership Retainer -->
                <div class="rounded-3xl bg-white p-8 border border-gray-200/80 shadow-sm reveal">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-bold text-[#0c1f3a]">Engineering Retainer</h3>
                        <span class="text-xs font-semibold text-[#00cc6a] bg-[#00ff88]/15 px-3 py-1 rounded-full">Continuous Growth</span>
                    </div>
                    <p class="mt-3 text-xs sm:text-sm text-gray-600">For fast-growing organizations requiring ongoing feature upgrades, database scaling, API integrations, and dedicated SLA support.</p>

                    <ul class="mt-6 space-y-3.5 text-xs sm:text-sm text-gray-700">
                        <li class="flex items-center gap-3">
                            <span class="w-5 h-5 rounded-full bg-[#00cc6a] text-white flex items-center justify-center text-[10px]">&check;</span>
                            <span>Dedicated engineering capacity allocated to your priorities each month</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-5 h-5 rounded-full bg-[#00cc6a] text-white flex items-center justify-center text-[10px]">&check;</span>
                            <span>24/7 cloud monitoring, uptime defense, and proactive vulnerability patches</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-5 h-5 rounded-full bg-[#00cc6a] text-white flex items-center justify-center text-[10px]">&check;</span>
                            <span>Flexible scope adjustments as operational priorities evolve</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-5 h-5 rounded-full bg-[#00cc6a] text-white flex items-center justify-center text-[10px]">&check;</span>
                            <span>Predictable, transparent monthly investment &middot; Cancel with 30-day notice</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. Interactive Multi-Step Consultation & Quote Intake (Sericode Parity) -->
    <section id="request-quote" class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-2 lg:gap-16 items-start">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-[#d4a373]">Fast &middot; Direct &middot; Tailored</span>
                    <h2 class="mt-2 text-3xl sm:text-5xl tracking-tight leading-[1.15] reveal">
                        <span class="font-light text-gray-500">Request a</span>
                        <span class="font-bold text-[#0c1f3a]">Consultation<span class="text-[#d4a373]">.</span></span>
                    </h2>
                    <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed max-w-md reveal">
                        Tell us about the challenge you are solving. We review your requirements and respond promptly with practical recommendations and transparent estimates.
                    </p>

                    <div class="mt-8 space-y-4 reveal">
                        <div class="flex items-center gap-3 text-sm text-gray-700">
                            <div class="w-8 h-8 rounded-full bg-[#0c1f3a] text-[#d4a373] flex items-center justify-center font-bold text-xs">✓</div>
                            <span>Zero obligation discovery consultation</span>
                        </div>
                        <div class="flex items-center gap-3 text-sm text-gray-700">
                            <div class="w-8 h-8 rounded-full bg-[#0c1f3a] text-[#d4a373] flex items-center justify-center font-bold text-xs">✓</div>
                            <span>Direct access to a senior software engineer</span>
                        </div>
                        <div class="flex items-center gap-3 text-sm text-gray-700">
                            <div class="w-8 h-8 rounded-full bg-[#0c1f3a] text-[#d4a373] flex items-center justify-center font-bold text-xs">✓</div>
                            <span>Response within 1 business hour</span>
                        </div>
                    </div>

                    <div class="mt-8 pt-8 border-t border-gray-100 flex items-center gap-4 text-sm font-medium text-gray-600">
                        <span>Prefer direct messaging?</span>
                        <a href="https://wa.me/2349052585622" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-[#00cc6a] hover:underline font-bold">
                            WhatsApp Us &rarr;
                        </a>
                    </div>
                </div>

                <!-- Wizard Intake Container -->
                <div class="rounded-3xl bg-[#f8fafc] border border-gray-200/90 p-6 sm:p-10 shadow-lg reveal" id="quote-wizard">
                    <!-- Wizard Progress Header -->
                    <div class="mb-8">
                        <div class="flex items-center justify-between text-xs font-semibold text-gray-500 mb-2">
                            <span>Step <span class="wizard-step-counter">1 of 3 (33%)</span></span>
                            <span class="text-[#d4a373] font-bold">Consultation Intake</span>
                        </div>
                        <div class="h-1.5 w-full bg-gray-200 rounded-full overflow-hidden">
                            <div class="wizard-progress-bar h-full bg-[#0c1f3a] rounded-full transition-all duration-300" style="width: 33%"></div>
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
                            <label class="block text-sm font-bold text-[#0c1f3a]">
                                1. What type of solution does your organization need?
                            </label>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-white hover:border-[#0c1f3a] cursor-pointer transition-colors text-xs sm:text-sm font-medium text-gray-800">
                                    <input type="radio" name="subject" value="School Management Demo Request" class="text-[#0c1f3a] focus:ring-[#0c1f3a]" checked>
                                    <span>School Management (SMS)</span>
                                </label>
                                <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-white hover:border-[#0c1f3a] cursor-pointer transition-colors text-xs sm:text-sm font-medium text-gray-800">
                                    <input type="radio" name="subject" value="ESPass Event Ticketing Inquiry" class="text-[#0c1f3a] focus:ring-[#0c1f3a]">
                                    <span>ESPass Ticketing System</span>
                                </label>
                                <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-white hover:border-[#0c1f3a] cursor-pointer transition-colors text-xs sm:text-sm font-medium text-gray-800">
                                    <input type="radio" name="subject" value="Custom Software Build" class="text-[#0c1f3a] focus:ring-[#0c1f3a]">
                                    <span>Custom Software Build</span>
                                </label>
                                <label class="flex items-center gap-3 p-3.5 rounded-xl border border-gray-200 bg-white hover:border-[#0c1f3a] cursor-pointer transition-colors text-xs sm:text-sm font-medium text-gray-800">
                                    <input type="radio" name="subject" value="Automation & Integration" class="text-[#0c1f3a] focus:ring-[#0c1f3a]">
                                    <span>Automation &amp; Integrations</span>
                                </label>
                            </div>
                        </div>

                        <!-- Step 2: Operational Scale & Target Timeline -->
                        <div class="wizard-step hidden space-y-4">
                            <label class="block text-sm font-bold text-[#0c1f3a]">
                                2. Describe your current setup and target timeline
                            </label>
                            <textarea name="message" rows="4" required class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm text-gray-900 focus:border-[#0c1f3a] focus:ring-1 focus:ring-[#0c1f3a] bg-white placeholder-gray-400" placeholder="Briefly describe your current process (e.g., currently tracking student fees across registers, running an event for 2,000 attendees, or needing an internal inventory app)..."></textarea>
                        </div>

                        <!-- Step 3: Contact Information -->
                        <div class="wizard-step hidden space-y-4">
                            <label class="block text-sm font-bold text-[#0c1f3a]">
                                3. Where should we send the proposal / demo access?
                            </label>
                            <div class="space-y-3">
                                <div>
                                    <label for="input-name" class="block text-xs font-semibold text-gray-600 mb-1">Your Full Name *</label>
                                    <input type="text" id="input-name" name="name" required class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm text-gray-900 focus:border-[#0c1f3a] focus:ring-1 focus:ring-[#0c1f3a] bg-white" placeholder="e.g. Dr. Adamu Johnson">
                                </div>
                                <div>
                                    <label for="input-email" class="block text-xs font-semibold text-gray-600 mb-1">Your Email Address *</label>
                                    <input type="email" id="input-email" name="email" required class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm text-gray-900 focus:border-[#0c1f3a] focus:ring-1 focus:ring-[#0c1f3a] bg-white" placeholder="you@organization.com">
                                </div>
                                <div>
                                    <label for="input-phone" class="block text-xs font-semibold text-gray-600 mb-1">Phone / WhatsApp Number (Optional)</label>
                                    <input type="tel" id="input-phone" name="phone" class="w-full rounded-xl border border-gray-300 px-4 py-2.5 text-sm text-gray-900 focus:border-[#0c1f3a] focus:ring-1 focus:ring-[#0c1f3a] bg-white" placeholder="09052585622">
                                </div>
                            </div>
                        </div>

                        <!-- Wizard Controls -->
                        <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                            <button type="button" class="wizard-prev-btn text-xs font-semibold text-gray-500 hover:text-[#0c1f3a] opacity-0 pointer-events-none transition-all flex items-center gap-1">
                                &larr; Back
                            </button>

                            <div>
                                <button type="button" class="wizard-next-btn rounded-full bg-[#0c1f3a] px-6 py-2.5 text-xs font-semibold text-white hover:bg-[#162f55] transition-all">
                                    Continue &rarr;
                                </button>
                                <button type="submit" class="wizard-submit-btn hidden rounded-full bg-[#d4a373] px-7 py-2.5 text-xs font-bold text-[#0c1f3a] hover:bg-[#c5935f] transition-all shadow-md">
                                    Send Consultation Request
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- 13. Final Collaboration Banner (Sericode Parity) -->
    <section class="bg-white pb-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="brand-surface relative overflow-hidden rounded-3xl px-6 py-16 sm:py-24 text-center text-white shadow-2xl reveal">
                <div class="brand-texture" aria-hidden="true"></div>
                <div class="relative z-10 max-w-3xl mx-auto">
                    <h2 class="text-3xl sm:text-5xl font-bold tracking-tight leading-tight">
                        Let's Engineer Something <br class="hidden sm:inline" />
                        <span class="font-light text-white/90">Dependable Together</span><span class="text-[#d4a373]">.</span>
                    </h2>
                    <p class="mt-5 text-sm sm:text-base leading-relaxed text-white/75">
                        Whether you need to modernize your school for the coming term, launch an event pass system, or build custom software that gives your organization a permanent edge.
                    </p>
                    <div class="mt-9 flex flex-wrap items-center justify-center gap-4">
                        <a href="{{ route('contact') }}" class="rounded-full bg-[#d4a373] px-8 py-3.5 text-sm font-bold text-[#0c1f3a] hover:bg-[#c5935f] transition-colors shadow-lg">
                            Schedule Free Discovery Call
                        </a>
                        <a href="tel:09052585622" class="rounded-full border border-white/20 bg-white/10 px-6 py-3.5 text-sm font-medium text-white hover:bg-white/20 transition-colors">
                            Call 09052585622
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
