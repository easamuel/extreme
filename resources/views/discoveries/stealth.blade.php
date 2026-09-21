@extends('layouts.app')

@section('title', 'Founder Memorandum // Classification: Stealth Eyes-Only')
@section('description', 'Unvarnished internal memorandum by Samuel Ekunyan on educational systems failure, the secondary education wedge, and our structural playbook.')

@section('meta_robots')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
    <!-- Hero Surface -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white pt-16 pb-16 md:pt-20 md:pb-24">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="brand-glow top-0 left-1/2 -translate-x-1/2 w-[550px] h-[300px] bg-gradient-to-br from-rose-950/40 via-[#00ff88]/10 to-transparent"></div>

        <div class="relative z-10 mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 rounded-full border border-rose-500/30 bg-rose-500/10 px-4 py-1.5 text-xs font-semibold text-rose-300 mb-6 font-mono">
                <span class="w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span>
                <span>AUTHENTICATED STEALTH BRIEF &bull; TOKEN: {{ substr($token, 0, 8) }}...</span>
            </div>

            <h1 class="text-3xl sm:text-5xl font-bold tracking-tight text-white leading-tight">
                The Secondary Wedge, Educational Systems Collapse, &amp; The Long-Term Play
            </h1>

            <p class="mt-4 text-xs sm:text-sm font-mono text-gray-400">
                BY SAMUEL EKUNYAN &bull; PRINCIPAL SYSTEMS ARCHITECT &bull; {{ $dateStr }}
            </p>

            <div class="mt-8 flex justify-center">
                <a href="{{ $exportPdfUrl }}" target="_blank"
                   class="inline-flex items-center rounded-full bg-white px-6 py-2.5 text-xs font-bold text-[#0c1f3a] hover:bg-gray-100 transition shadow">
                    <svg class="w-4 h-4 mr-1.5 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download Confidential PDF
                </a>
            </div>
        </div>
    </section>

    <!-- Reading Content Surface -->
    <section class="bg-white py-16 md:py-24 text-gray-800">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed space-y-8">

                <div class="border-l-4 border-[#0c1f3a] pl-4 py-1 bg-gray-50 rounded-r-lg">
                    <p class="text-xs uppercase tracking-widest text-gray-500 font-mono font-bold">EXECUTIVE STRATEGY BRIEF</p>
                    <p class="text-sm font-semibold text-[#0c1f3a] mt-0.5">Classification: Stealth Eyes-Only Syndicate</p>
                </div>

                <div>
                    <h2 class="text-xl sm:text-2xl font-bold text-[#0c1f3a] tracking-tight">
                        01 // The Delusion of African EdTech
                    </h2>
                    <p class="text-sm sm:text-base text-gray-600 mt-2">
                        Most technology companies attempting to solve education across emerging African markets fail because they import Western Silicon Valley assumptions into environments that lack reliable 4G bandwidth, continuous electrical power, and basic administrative digitisation.
                    </p>
                    <p class="text-sm sm:text-base text-gray-600 mt-3">
                        They build mobile apps for affluent parents in Victoria Island or attempt to sell cloud SaaS subscriptions over email. The reality across 95% of Nigerian secondary schools is straightforward: teachers do not spend personal cellular data updating cloud portals, desktop laboratories sit dormant under dust sheets due to power surge anxieties, and proprietors guard their cash revenues with acute suspicion.
                    </p>
                </div>

                <div>
                    <h2 class="text-xl sm:text-2xl font-bold text-[#0c1f3a] tracking-tight">
                        02 // Why Secondary Education is the Definitive Wedge
                    </h2>
                    <p class="text-sm sm:text-base text-gray-600 mt-2">
                        We intentionally bypass primary schools. Primary education teaches basic literacy, but <strong>secondary education (JSS1–SS3) is where the economic trajectory of an African family is decided</strong>.
                    </p>
                    <p class="text-sm sm:text-base text-gray-600 mt-3">
                        Every parent in Nigeria will sacrifice comfort to pay secondary school fees if they believe their child will clear JAMB (UTME) and WAEC. Yet, the tragedy is systemic: <strong>over 70% of Nigerian secondary school candidates touch a computer keyboard for the first time in their life on the morning of their JAMB exam</strong>. They fail not from lack of study, but from interface terror, keyboard freezing, and timer shock.
                    </p>
                    <p class="text-sm sm:text-base text-gray-600 mt-3">
                        By introducing our daily offline-resilient CBT engine from JSS1 through SS3, secondary schools using ExtremeSolutions turn students into fast, calm, keyboard-literate test takers. Scores jump past 280+; student enrollment surges; and our software becomes the indispensable operating system of the school.
                    </p>
                </div>

                <div>
                    <h2 class="text-xl sm:text-2xl font-bold text-[#0c1f3a] tracking-tight">
                        03 // The Administrative Trojan Horse: 12-Second Broadsheets &amp; Zero Leakage
                    </h2>
                    <p class="text-sm sm:text-base text-gray-600 mt-2">
                        While students build CBT muscle memory, we solve the two deepest operational pain points of school proprietors:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-sm text-gray-600 mt-3">
                        <li>
                            <strong>Broadsheet Agony:</strong> Compressing 2 to 3 weeks of manual teacher calculations into a <strong>12-second automated compilation</strong> that produces perfect Ministry of Education-compliant broadsheets.
                        </li>
                        <li>
                            <strong>Tuition Debt Bleed:</strong> Eliminating the ₦3.5M–₦8M lost annually to uncollected fees by issuing digital exam clearance cards linked directly to reconciled bank payments.
                        </li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-xl sm:text-2xl font-bold text-[#0c1f3a] tracking-tight">
                        04 // The 48-Hour On-Ground Taskforce Moat
                    </h2>
                    <p class="text-sm sm:text-base text-gray-600 mt-2">
                        Software without physical execution fails in emerging markets. When a secondary school commits to ExtremeSolutions, we do not send a download link. <strong>We dispatch our 48-Hour Assisted On-Ground Deployment Taskforce</strong>. Our field engineers spend 48 continuous hours on campus: configuring lab machines, installing local offline LAN servers, ingesting student rosters, and running live mock CBT drills with candidate classes.
                    </p>
                </div>

                <div>
                    <h2 class="text-xl sm:text-2xl font-bold text-[#0c1f3a] tracking-tight">
                        05 // The Macro Vision: Beyond Education
                    </h2>
                    <p class="text-sm sm:text-base text-gray-600 mt-2">
                        ExtremeSolutions is fundamentally a <strong>software building company</strong>. We build critical digital infrastructure. Secondary education is our grassroots distribution wedge &mdash; granting us unassailable institutional trust, deep daily usage, and direct local computing footholds.
                    </p>
                    <p class="text-sm sm:text-base text-gray-600 mt-3">
                        In parallel, our engineering laboratory scales high-throughput commerce systems like <strong>ESPass</strong> (event ticketing and cryptographic gate validation) and bespoke enterprise workflow automation engines for forward-thinking organizations. We build dependable software, partner with ambitious leaders, and execute with relentless structural discipline.
                    </p>
                </div>

                <!-- Signoff Card -->
                <div class="mt-12 pt-8 border-t border-gray-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
                    <div>
                        <div class="text-base font-bold text-[#0c1f3a] font-mono">SAMUEL EKUNYAN</div>
                        <div class="text-xs text-gray-500">Founder &amp; Principal Systems Architect</div>
                        <div class="text-xs text-emerald-600 font-semibold mt-0.5">ExtremeSolutions &bull; Building Digital Systems that last.</div>
                    </div>
                    <div>
                        <a href="https://wa.me/2349052585622?text={{ urlencode('Confidential Founder Inquiry regarding Stealth Brief [' . substr($token, 0, 8) . ']') }}"
                           target="_blank"
                           class="inline-flex items-center rounded-full bg-[#0c1f3a] hover:bg-[#15325b] text-white px-5 py-2.5 text-xs font-bold transition">
                            Direct Channel to Founder &rarr;
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
