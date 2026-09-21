@extends('layouts.app')

@section('title', 'Founder Memorandum // Classification: Stealth Eyes-Only')
@section('description', 'Unvarnished internal memorandum by Samuel Ekunyan on educational systems failure, the secondary education wedge, and our structural playbook.')

@section('meta_robots')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
<div class="bg-zinc-950 text-zinc-200 min-h-screen py-10 lg:py-16 selection:bg-zinc-800 selection:text-white font-sans">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Top Dispatch Bar -->
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3 bg-zinc-900 border border-zinc-800 p-3.5 rounded-lg text-xs font-mono">
            <div class="flex items-center space-x-2 text-zinc-400">
                <span class="inline-block w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span>
                <span>STEALTH AUTH: <strong class="text-zinc-200">{{ substr($token, 0, 10) }}...</strong></span>
                <span class="text-zinc-700">|</span>
                <span>{{ $dateStr }}</span>
            </div>
            <div>
                <a href="{{ $exportPdfUrl }}" target="_blank"
                   class="inline-flex items-center px-3 py-1.5 bg-zinc-100 hover:bg-white text-zinc-950 font-bold rounded text-xs transition">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-zinc-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download Stealth PDF
                </a>
            </div>
        </div>

        <!-- Document Container -->
        <article class="bg-zinc-900/80 border border-zinc-800 rounded-xl p-6 sm:p-10 lg:p-12 shadow-2xl">

            <!-- Document Header -->
            <header class="border-b border-zinc-800 pb-6 mb-8">
                <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-4">
                    <div>
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('images/es-mark.png') }}" alt="ExtremeSolutions" class="h-8 w-auto">
                            <div>
                                <h1 class="text-lg font-bold tracking-tight text-white font-mono">EXTREMESOLUTIONS</h1>
                                <p class="text-[10px] uppercase tracking-widest text-zinc-500 font-semibold">Executive Strategy Laboratory</p>
                            </div>
                        </div>
                        <p class="mt-2 text-xs uppercase tracking-widest text-emerald-400 font-mono font-bold">
                            Building Digital Systems that last.
                        </p>
                    </div>

                    <div class="text-left sm:text-right font-mono text-[11px] text-zinc-500 space-y-1">
                        <div><span class="inline-block px-2 py-0.5 bg-rose-950 border border-rose-800 text-rose-300 font-bold rounded">CLASSIFIED // EYES ONLY</span></div>
                        <div>AUTHOR: <span class="text-zinc-200">SAMUEL EKUNYAN</span></div>
                        <div>SUBJECT: <span class="text-zinc-200">STRUCTURAL OPERATING PLAYBOOK</span></div>
                    </div>
                </div>
            </header>

            <!-- Document Body -->
            <div class="space-y-6 text-sm leading-relaxed text-zinc-300">

                <div>
                    <span class="text-xs font-mono uppercase tracking-widest text-zinc-500">EXECUTIVE MEMORANDUM</span>
                    <h2 class="text-xl sm:text-2xl font-bold text-white mt-1">
                        The Educational Collapse, The Secondary Wedge, &amp; The Long-Term Infrastructure Play
                    </h2>
                    <div class="h-0.5 w-12 bg-rose-500 mt-2 mb-6"></div>
                </div>

                <h3 class="text-xs font-mono font-bold uppercase tracking-widest text-rose-400 border-b border-zinc-800 pb-1 pt-2">
                    01 // The Delusion of African EdTech
                </h3>
                <p>
                    Most technology companies attempting to solve education in emerging markets fail for a simple reason: they attempt to import Western Silicon Valley assumptions into an environment that lacks reliable 4G bandwidth, stable electrical power, and basic administrative digitisation.
                </p>
                <p>
                    They build mobile apps for affluent parents in Victoria Island or sell cloud SaaS subscriptions over email. The reality on the ground across 95% of Nigerian schools is brutal: teachers don't use personal data to update cloud portals, school desktop laboratories sit under dust sheets because of power surge anxiety, and school directors guard their cash revenue with aggressive suspicion.
                </p>

                <h3 class="text-xs font-mono font-bold uppercase tracking-widest text-rose-400 border-b border-zinc-800 pb-1 pt-4">
                    02 // Why Secondary Education is the Definitive Wedge
                </h3>
                <p>
                    We intentionally bypass primary schools. Primary education is about basic literacy, but <strong>secondary education (JSS1–SS3) is where the economic trajectory of an African family is decided</strong>.
                </p>
                <p>
                    Every parent in Nigeria will sacrifice comfort to pay secondary school fees if they believe their child will clear JAMB (UTME) and WAEC. Yet, the tragedy is systemic: <strong>over 70% of Nigerian secondary school candidates touch a computer keyboard for the first time in their life on the morning of their JAMB exam</strong>. They do not fail because they are unintelligent; they fail because of interface shock, keyboard freezing, and timer anxiety.
                </p>
                <p>
                    By introducing our daily offline-resilient CBT engine from JSS1 through SS3, secondary schools using ExtremeSolutions turn their students into fast, calm, keyboard-literate test takers. When exam results arrive, student scores jump dramatically. The school proprietor becomes renowned; student enrollment surges; and our software becomes the indispensable nervous system of the institution.
                </p>

                <h3 class="text-xs font-mono font-bold uppercase tracking-widest text-rose-400 border-b border-zinc-800 pb-1 pt-4">
                    03 // The Administrative Trojan Horse: 12-Second Broadsheets &amp; Zero Leakage
                </h3>
                <p>
                    While the students gain CBT muscle memory, we solve the two deepest pain points of school proprietors:
                </p>
                <ul class="list-disc pl-5 space-y-2 text-xs text-zinc-400">
                    <li>
                        <strong>Broadsheet Agony:</strong> At the end of every term, teachers spend two to three weeks hand-calculating grades on paper sheets, making errors, and delaying report cards. We compress this into a <strong>12-second automated compilation</strong> that produces perfect Ministry of Education-compliant ledgers.
                    </li>
                    <li>
                        <strong>Tuition Bleed:</strong> Schools lose between ₦3.5M and ₦8M annually to uncollected fees and manual receipt fraud. We bind student examination clearance cards directly to reconciled payment records. No payment, no exam hall entry card. Tuition recovery reaches 98%+ before week 8 exams.
                    </li>
                </ul>

                <h3 class="text-xs font-mono font-bold uppercase tracking-widest text-rose-400 border-b border-zinc-800 pb-1 pt-4">
                    04 // The 48-Hour On-Ground Taskforce Moat
                </h3>
                <p>
                    Software without boots-on-the-ground is worthless in emerging markets. When a secondary school partners with ExtremeSolutions, we do not send a download link. <strong>We dispatch our 48-Hour Assisted On-Ground Deployment Taskforce</strong>.
                </p>
                <p>
                    Our engineers spend 48 continuous hours on campus: configuring lab machines, importing student records, installing offline LAN servers, and running a live mock exam with the students. By the time our team departs, the school is running live. Competitors selling software downloads cannot touch this level of operational trust.
                </p>

                <h3 class="text-xs font-mono font-bold uppercase tracking-widest text-rose-400 border-b border-zinc-800 pb-1 pt-4">
                    05 // The Macro Vision: Beyond Education
                </h3>
                <p>
                    ExtremeSolutions is fundamentally a <strong>software building company</strong>. We build critical digital infrastructure. Secondary education is our grassroots distribution wedge &mdash; it provides deep institutional lock-in, cash-flow independence, and direct physical footholds in every community.
                </p>
                <p>
                    In parallel, our engineering laboratory develops high-throughput commerce systems like <strong>Espass</strong> (high-concurrency event ticketing and gate validation) and bespoke enterprise workflow automation engines for forward-thinking organizations. We build dependable software, partner with ambitious leaders, and execute with relentless structural discipline.
                </p>

            </div>

            <!-- Signoff & Direct Channel -->
            <footer class="mt-10 pt-6 border-t border-zinc-800 flex flex-col sm:flex-row items-start sm:items-end justify-between gap-6">
                <div>
                    <img src="{{ asset('images/signature.png') }}" alt="Samuel Ekunyan Signature" class="h-9 w-auto mb-2 opacity-80 invert">
                    <div class="text-sm font-bold text-white font-mono">SAMUEL EKUNYAN</div>
                    <div class="text-xs text-zinc-400">Founder &amp; Principal Systems Architect</div>
                    <div class="text-xs text-zinc-500 font-mono mt-0.5">DIRECT SECURE TELEMETRY</div>
                </div>
                <div class="text-left sm:text-right">
                    <a href="https://wa.me/2349052585622?text={{ urlencode('Confidential Founder Inquiry regarding Stealth Brief [' . substr($token, 0, 8) . ']') }}"
                       target="_blank"
                       class="inline-flex items-center px-4 py-2 bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs rounded transition">
                        Direct Secure Channel to Founder
                    </a>
                </div>
            </footer>

        </article>

    </div>
</div>
@endsection

