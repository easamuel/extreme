@extends('layouts.app')

@section('title', 'Institutional Executive Proposal & Memorandum | ExtremeSolutions School OS')
@section('description', 'Executive memorandum and operational proposal for private school proprietors, educational directors, and institutional partners regarding ExtremeSolutions School Operating System.')

@section('content')
<div class="bg-slate-900 text-slate-100 min-h-screen pt-20 pb-24 selection:bg-[#00ff88]/30 selection:text-white">

    {{-- 1. STICKY UTILITY ACTION BAR (Apple / Linear Standard) --}}
    <div class="sticky top-16 sm:top-20 z-40 bg-slate-900/95 backdrop-blur-xl border-b border-slate-800 shadow-2xl py-3 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-3">
            <!-- Left: Document Context & Status -->
            <div class="flex items-center gap-3 w-full md:w-auto justify-between md:justify-start">
                <div class="flex items-center gap-2">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#00ff88] opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#00ff88]"></span>
                    </span>
                    <span class="text-xs font-mono font-bold tracking-wider text-slate-300 uppercase">
                        {{ $refCode }}
                    </span>
                </div>
                <div class="hidden sm:block h-3.5 w-px bg-slate-700"></div>
                <span class="text-xs text-slate-400 truncate max-w-[200px] sm:max-w-xs">
                    {{ $org ? 'For ' . $org : 'Institutional Executive Memo' }}
                </span>
            </div>

            <!-- Right: Action CTA Buttons -->
            <div class="flex items-center gap-2.5 w-full md:w-auto justify-end flex-wrap">
                <!-- PDF Export -->
                <a href="{{ $exportPdfUrl }}" 
                   class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-800 hover:bg-slate-700 text-white border border-slate-700 hover:border-slate-600 transition-all shadow-sm group">
                    <svg class="w-4 h-4 text-rose-400 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span>Download PDF</span>
                </a>

                <!-- PNG Image Export (html2canvas) -->
                <button type="button" 
                        id="export-png-btn"
                        class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl text-xs font-bold bg-slate-800 hover:bg-slate-700 text-white border border-slate-700 hover:border-slate-600 transition-all shadow-sm group">
                    <svg class="w-4 h-4 text-emerald-400 group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span id="png-btn-text">Save as PNG</span>
                </button>

                <!-- Cal.com Direct Booking -->
                <a href="{{ $calBookingUrl }}" 
                   target="_blank" 
                   rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-xs font-bold bg-[#00ff88] hover:bg-[#00dd77] text-[#0a192f] transition-all shadow-lg shadow-[#00ff88]/20 hover:shadow-[#00ff88]/30">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>Schedule Briefing</span>
                </a>
            </div>
        </div>
    </div>

    {{-- 2. HERO INTRO & INTERACTIVE PERSONALIZER --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 pt-10 pb-6 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-800/80 border border-slate-700/80 text-xs font-semibold text-emerald-400 mb-4">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            Institutional Systems Memorandum &bull; Education Operating Infrastructure
        </div>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white mb-4">
            A Sovereign Operating System for <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-[#00ff88]">African Basic Education</span>
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">
            Eliminate terminal examination tabulation deficits, recover 100% of uncollected tuition, and equip your pupils with foundational computer literacy years before secondary exit exams.
        </p>

        <!-- Live Customizer Bar (Expandable) -->
        <div class="mt-6 inline-block w-full max-w-2xl bg-slate-800/60 border border-slate-700/60 rounded-2xl p-4 text-left">
            <div class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-2 flex items-center justify-between">
                <span>Personalize Memorandum Details</span>
                <span class="text-[10px] text-emerald-400 font-normal">Real-Time Parameter Generation</span>
            </div>
            <form action="{{ route('partner') }}" method="GET" class="grid grid-cols-1 sm:grid-cols-3 gap-2.5">
                <div>
                    <label class="block text-[11px] text-slate-400 mb-1">Title</label>
                    <input type="text" name="title" value="{{ request('title', $title) }}" placeholder="e.g. Dr. / Proprietor" 
                           class="w-full bg-slate-900 border border-slate-700 rounded-lg px-2.5 py-1.5 text-xs text-white focus:outline-none focus:border-[#00ff88]">
                </div>
                <div>
                    <label class="block text-[11px] text-slate-400 mb-1">Recipient Name</label>
                    <input type="text" name="name" value="{{ request('name', $name) }}" placeholder="e.g. Adebayo Ogunlesi" 
                           class="w-full bg-slate-900 border border-slate-700 rounded-lg px-2.5 py-1.5 text-xs text-white focus:outline-none focus:border-[#00ff88]">
                </div>
                <div>
                    <label class="block text-[11px] text-slate-400 mb-1">School / Academy</label>
                    <input type="text" name="org" value="{{ request('org', $org) }}" placeholder="e.g. Corona Academy" 
                           class="w-full bg-slate-900 border border-slate-700 rounded-lg px-2.5 py-1.5 text-xs text-white focus:outline-none focus:border-[#00ff88]">
                </div>
                <div class="sm:col-span-3 flex justify-end gap-2 mt-1">
                    <button type="submit" class="px-4 py-1.5 rounded-lg bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold text-xs transition-colors">
                        Update Letterhead
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- 3. THE OFFICIAL LETTERHEAD CONTAINER (#official-letterhead) --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 my-8">
        <div id="official-letterhead" class="bg-white text-slate-900 rounded-2xl shadow-2xl p-6 sm:p-12 lg:p-16 border border-slate-200 relative overflow-hidden transition-all">
            
            <!-- Watermark Background Emblem (Subtle Institutional Security Grid) -->
            <div class="absolute inset-0 pointer-events-none opacity-[0.025] flex items-center justify-center">
                <img src="{{ asset('images/es-mark.png') }}" class="w-[600px] h-auto object-contain" alt="">
            </div>

            <!-- Top Header Grid -->
            <div class="relative z-10 flex flex-col sm:flex-row items-start sm:items-center justify-between pb-8 border-b-2 border-[#1e3a5f] gap-4">
                <div>
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/es-mark.png') }}" alt="ExtremeSolutions" class="h-10 sm:h-12 w-auto object-contain">
                        <div class="flex flex-col">
                            <span class="text-lg sm:text-xl font-extrabold tracking-tight text-[#1e3a5f] leading-none">
                                EXTREME<span class="text-[#00c853]">SOLUTIONS</span>
                            </span>
                            <span class="text-[9px] uppercase tracking-[0.25em] text-slate-500 font-bold mt-0.5">
                                Systems &amp; Software Architecture
                            </span>
                        </div>
                    </div>
                    <div class="mt-2 text-xs font-semibold text-slate-500">
                        School Operating Platform: <a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-700 hover:underline">sms.extremesolutions.com.ng</a>
                    </div>
                </div>

                <div class="text-left sm:text-right text-xs text-slate-600 leading-relaxed">
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-emerald-50 text-emerald-800 border border-emerald-200 font-bold text-[10px] tracking-wider mb-1.5">
                        <svg class="w-3 h-3 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        VERIFIED INSTITUTIONAL MEMORANDUM
                    </span>
                    <div class="font-mono text-slate-700"><strong>Ref:</strong> {{ $refCode }}</div>
                    <div class="text-slate-500"><strong>Date:</strong> {{ $dateStr }}</div>
                    <div class="text-slate-500"><strong>Classification:</strong> Executive Partner Briefing</div>
                </div>
            </div>

            <!-- Recipient & Context Metadata Box -->
            <div class="relative z-10 mt-6 bg-slate-50 border-l-4 border-emerald-500 rounded-r-xl p-4 sm:p-5 text-sm grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <span class="block text-[10px] uppercase font-extrabold tracking-wider text-slate-400">Designated Recipient</span>
                    <span class="font-bold text-slate-900 text-base">{{ $title }} {{ $name }}</span>
                </div>
                <div>
                    <span class="block text-[10px] uppercase font-extrabold tracking-wider text-slate-400">Educational Institution</span>
                    <span class="font-bold text-slate-900 text-base">
                        @if($org)
                            <span class="text-emerald-700">{{ $org }}</span>
                        @else
                            Private Basic &amp; Secondary Education Enterprise
                        @endif
                    </span>
                </div>
            </div>

            <!-- Subject Banner -->
            <div class="relative z-10 mt-8 mb-6 pb-2 border-b border-slate-200">
                <span class="text-xs font-bold uppercase tracking-widest text-emerald-600 block mb-1">Executive Summary &bull; Systems Modernization</span>
                <h2 class="text-xl sm:text-2xl font-extrabold text-[#1e3a5f] leading-snug">
                    Eliminating Operational Fatigue, Terminal Broadsheet Errors, and Revenue Leakage via ExtremeSolutions OS
                </h2>
            </div>

            <!-- Narrative Body (StoryBrand Framework) -->
            <div class="relative z-10 space-y-5 text-slate-700 text-sm sm:text-base leading-relaxed text-justify">
                <p class="font-semibold text-slate-900 text-base">
                    Dear {{ $title }} {{ $name }},
                </p>

                <p>
                    Across Nigeria and West Africa, private basic and secondary schools represent the engine of human capital development. Yet, our field studies across hundreds of private academy administrations reveal an unsustainable operational drain: <strong>basic school faculties lose between two to three weeks every term</strong> manually compiling test scores, transcribing continuous assessments, and computing terminal broadsheets.
                </p>

                <p>
                    This manual reliance triggers severe computational errors in student report cards, generates acute teacher burnout during exam cycles, and leaves school proprietors blind to fee recovery leakages. Simultaneously, pupils transition to external computer-based examinations—including JAMB CBT and WAEC—facing severe <strong>computer-interface anxiety</strong> because their primary and junior secondary institutions lacked integrated, everyday digital test terminals.
                </p>

                <!-- Core Pillars Grid -->
                <div class="my-8 pt-4">
                    <h3 class="text-xs uppercase font-extrabold tracking-widest text-[#1e3a5f] mb-4">
                        The ExtremeSolutions School OS Architecture: 3 Sovereign Engines
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 not-prose">
                        <!-- Pillar 1 -->
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                            <div class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-1">Academic Engine</div>
                            <div class="text-2xl font-extrabold text-[#1e3a5f] mb-1">1-Click</div>
                            <p class="text-xs text-slate-600 leading-normal">
                                Automated continuous assessments, instant broadsheet compilation, and error-free student terminal report generation.
                            </p>
                        </div>
                        <!-- Pillar 2 -->
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                            <div class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-1">Financial Ledger</div>
                            <div class="text-2xl font-extrabold text-[#1e3a5f] mb-1">Zero Leakage</div>
                            <p class="text-xs text-slate-600 leading-normal">
                                Automated fee reconciliation, tamper-proof student invoicing, and direct payment visibility for school boards.
                            </p>
                        </div>
                        <!-- Pillar 3 -->
                        <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                            <div class="text-xs font-bold uppercase tracking-wider text-emerald-700 mb-1">Early CBT Simulator</div>
                            <div class="text-2xl font-extrabold text-[#1e3a5f] mb-1">Primary 1–SS3</div>
                            <p class="text-xs text-slate-600 leading-normal">
                                Integrated continuous CBT exam simulator building mouse, typing, and digital exam fluency long before exit examinations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Field Enablement Model -->
                <div class="p-5 rounded-xl bg-emerald-50/70 border border-emerald-200 text-slate-900">
                    <h4 class="text-sm font-bold uppercase tracking-wider text-emerald-800 mb-2 flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Why Software Alone Fails in Africa: The 48-Hour On-Ground Taskforce
                    </h4>
                    <p class="text-xs sm:text-sm text-slate-700 leading-relaxed">
                        Most school portals in Africa are abandoned within 90 days not due to software bugs, but because teachers receive zero hands-on enablement. ExtremeSolutions delivers a dedicated <strong>On-Ground Deployment Taskforce</strong>. Our engineers digitize existing paper registers, onboard student bio-data, and run intensive on-site teacher certification workshops—delivering an autonomous, operational digital academy within <strong>48 hours</strong> of engagement.
                    </p>
                </div>

                <p>
                    {{ $org ? $org : 'Your institution' }} has earned the prestige to set the operational benchmark in your region. We welcome the opportunity to present an executive walkthrough and configure an isolated proof-of-concept environment for your administrative team.
                </p>
            </div>

            <!-- Signature & Verification Seal Block -->
            <div class="relative z-10 mt-10 pt-8 border-t border-slate-200 flex flex-col sm:flex-row items-start sm:items-end justify-between gap-6">
                <div>
                    <div class="text-xs text-slate-500 mb-2">Respectfully submitted,</div>
                    <img src="{{ asset('images/signature.png') }}" alt="Samuel Ekunyan Signature" class="h-12 w-auto object-contain mb-2">
                    <div class="text-base font-extrabold text-[#1e3a5f] leading-tight">Samuel Ekunyan</div>
                    <div class="text-xs text-slate-600">Founder &amp; Principal Systems Architect</div>
                    <div class="text-[11px] text-slate-500">ExtremeSolutions Enterprise Systems</div>
                </div>

                <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 text-center sm:text-right">
                    <div class="inline-flex items-center gap-1.5 text-xs font-bold text-emerald-700">
                        <svg class="w-3.5 h-3.5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        OFFICIAL VERIFICATION CODE
                    </div>
                    <div class="font-mono text-xs font-bold text-slate-800 mt-0.5">{{ $refCode }}</div>
                    <div class="text-[10px] text-slate-400 mt-0.5">Direct Verification: extremesolutions.com.ng/partner</div>
                </div>
            </div>

            <!-- Document Footer Note -->
            <div class="relative z-10 mt-8 pt-4 border-t border-slate-100 text-[10px] text-slate-400 text-center">
                ExtremeSolutions &bull; Enterprise Cloud Software, Mobile Engineering &amp; Educational Operating Systems &bull; Lagos, Nigeria<br>
                Direct Operational Desk: +234 905 258 5622 &bull; <a href="mailto:info@extremesolutions.com.ng" class="hover:underline">info@extremesolutions.com.ng</a>
            </div>
        </div>
    </div>

    {{-- 4. DATA-DRIVEN DISCOVERIES PREVIEW CARDS --}}
    <div class="max-w-5xl mx-auto px-4 sm:px-6 my-16">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="text-xs font-bold uppercase tracking-widest text-[#00ff88] block mb-2">Empirical Field Research</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white">
                Proven Operational Impact Across Basic Schools
            </h2>
            <p class="text-sm text-slate-400 mt-2">
                Derived from longitudinal operational audits of private academies across South-West and North-Central Nigeria.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Metric Card 1 -->
            <div class="bg-slate-800/80 border border-slate-700/80 rounded-2xl p-6 relative overflow-hidden group hover:border-[#00ff88]/50 transition-all">
                <div class="text-3xl sm:text-4xl font-black text-[#00ff88] mb-2 font-mono">12 sec</div>
                <div class="text-base font-bold text-white mb-2">Terminal Broadsheet Latency</div>
                <p class="text-xs text-slate-300 leading-relaxed">
                    Reduced from 14 days of manual arithmetic to a 12-second automated aggregation run with complete position rankings and master sheets.
                </p>
                <div class="mt-4 pt-3 border-t border-slate-700/60 flex items-center justify-between text-[11px] text-slate-400">
                    <span>Baseline: 14–21 days</span>
                    <span class="text-emerald-400 font-bold">&darr; 99.8% Time Saved</span>
                </div>
            </div>

            <!-- Metric Card 2 -->
            <div class="bg-slate-800/80 border border-slate-700/80 rounded-2xl p-6 relative overflow-hidden group hover:border-[#00ff88]/50 transition-all">
                <div class="text-3xl sm:text-4xl font-black text-[#00ff88] mb-2 font-mono">100%</div>
                <div class="text-base font-bold text-white mb-2">Fee Recovery &amp; Audit Trail</div>
                <p class="text-xs text-slate-300 leading-relaxed">
                    Automated ledger reconciliation closes teller slip falsification, records partial balances, and generates real-time tuition cashflow reports.
                </p>
                <div class="mt-4 pt-3 border-t border-slate-700/60 flex items-center justify-between text-[11px] text-slate-400">
                    <span>Baseline: 15–28% Leakage</span>
                    <span class="text-emerald-400 font-bold">&check; 100% Reconciliation</span>
                </div>
            </div>

            <!-- Metric Card 3 -->
            <div class="bg-slate-800/80 border border-slate-700/80 rounded-2xl p-6 relative overflow-hidden group hover:border-[#00ff88]/50 transition-all">
                <div class="text-3xl sm:text-4xl font-black text-[#00ff88] mb-2 font-mono">Primary 1</div>
                <div class="text-base font-bold text-white mb-2">Early CBT Familiarization</div>
                <p class="text-xs text-slate-300 leading-relaxed">
                    Pupils interact with digital quizzes from lower basic school, eliminating the keyboard and mouse freeze commonly seen during JAMB/WAEC.
                </p>
                <div class="mt-4 pt-3 border-t border-slate-700/60 flex items-center justify-between text-[11px] text-slate-400">
                    <span>Baseline: SS3 First Contact</span>
                    <span class="text-emerald-400 font-bold">+8 Years Fluency</span>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('discoveries') }}" class="inline-flex items-center gap-2 text-xs font-bold text-[#00ff88] hover:text-white transition-colors">
                <span>Read Full Operational Field Research Whitepaper</span>
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </div>

    {{-- 5. EXECUTIVE ACTION CTA & ONBOARDING BRIDGE --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 mt-16">
        <div class="bg-gradient-to-br from-[#1e3a5f] to-slate-900 border border-white/10 rounded-3xl p-8 sm:p-12 text-center relative overflow-hidden shadow-2xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#00ff88]/20 border border-[#00ff88]/30 text-[#00ff88] text-xs font-bold uppercase tracking-wider mb-4">
                48-Hour Rapid Deployment
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">
                Ready to Upgrade Your School Operations This Term?
            </h2>
            <p class="text-slate-300 text-sm sm:text-base max-w-xl mx-auto mb-8 leading-relaxed">
                Connect directly with our engineering architects to schedule a live system demonstration, review pilot school case studies, or dispatch our deployment taskforce.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ $calBookingUrl }}" 
                   target="_blank" 
                   rel="noopener noreferrer"
                   class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-[#00ff88] hover:bg-[#00dd77] text-[#0a192f] font-bold text-sm transition-all shadow-xl shadow-[#00ff88]/20">
                    Schedule 20-Min Architecture Briefing
                </a>
                <a href="https://wa.me/2349052585622?text={{ urlencode('Hello ExtremeSolutions, I reviewed the Institutional Partnership Memo for ' . ($org ?? $name) . ' (Ref: ' . $refCode . ') and would like to request an operational demonstration.') }}" 
                   target="_blank" 
                   rel="noopener noreferrer"
                   class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-white font-bold text-sm border border-slate-700 transition-all flex items-center justify-center gap-2">
                    <span>Direct WhatsApp Desk</span>
                </a>
                <a href="{{ route('support') }}" 
                   class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-transparent hover:bg-white/5 text-slate-300 hover:text-white font-bold text-sm transition-all">
                    View Support Hub &rarr;
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
{{-- html2canvas client-side high-DPI image exporter --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb5hBydBmNjEPuoU6h8ZHBM3965_g87we8Zzyio9vGWxb2R4ovwCAaw4CGOEcg7Y08C8Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const pngBtn = document.getElementById('export-png-btn');
    const pngBtnText = document.getElementById('png-btn-text');
    const letterheadNode = document.getElementById('official-letterhead');

    if (pngBtn && letterheadNode) {
        pngBtn.addEventListener('click', async () => {
            if (typeof html2canvas === 'undefined') {
                alert('Image export library is currently loading. Please retry in a moment.');
                return;
            }

            const originalText = pngBtnText.textContent;
            pngBtnText.textContent = 'Rendering Image...';
            pngBtn.disabled = true;

            try {
                // High-resolution retina capture (scale: 2)
                const canvas = await html2canvas(letterheadNode, {
                    scale: 2,
                    useCORS: true,
                    logging: false,
                    backgroundColor: '#ffffff',
                    windowWidth: 1200
                });

                // Trigger seamless download
                const link = document.createElement('a');
                const targetName = "{{ Str::slug($org ?: $name) }}";
                link.download = `ExtremeSolutions-Executive-Memo-${targetName || 'Partner'}.png`;
                link.href = canvas.toDataURL('image/png');
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);

                pngBtnText.textContent = 'Downloaded!';
                setTimeout(() => {
                    pngBtnText.textContent = originalText;
                    pngBtn.disabled = false;
                }, 2000);
            } catch (err) {
                console.error('PNG generation error:', err);
                alert('Could not render image. You may use the "Download PDF" option.');
                pngBtnText.textContent = originalText;
                pngBtn.disabled = false;
            }
        });
    }
});
</script>
@endpush
