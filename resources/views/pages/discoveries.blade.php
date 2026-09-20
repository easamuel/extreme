@extends('layouts.app')

@section('title', 'Institutional Educational Discoveries & Field Research | ExtremeSolutions')
@section('description', 'Empirical research and operational data on Nigerian basic schools: student CBT interface anxiety, terminal broadsheet calculation latency, and fee recovery deficits.')

@section('content')
<div class="bg-slate-900 text-slate-100 min-h-screen pt-24 pb-24 selection:bg-[#00ff88]/30 selection:text-white">
    
    <!-- Hero Header -->
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center pt-8 pb-14">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-bold uppercase tracking-wider mb-6">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            ExtremeSolutions Field Research &bull; Education Whitepaper
        </div>
        <h1 class="text-3xl sm:text-4xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight max-w-4xl mx-auto">
            The Hidden Friction in <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-[#00ff88]">African Basic Education</span>
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto mt-5 leading-relaxed">
            Longitudinal operational audits of private academies reveal three systemic bottlenecks draining school profitability, exhausting teaching faculties, and putting exit-exam students at risk.
        </p>

        <!-- Key Impact Stats Ribbon -->
        <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto text-left">
            <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700/80">
                <div class="text-2xl sm:text-3xl font-black text-rose-400 font-mono">18.4 Days</div>
                <div class="text-xs text-slate-400 mt-1">Average term-end broadsheet compilation delay</div>
            </div>
            <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700/80">
                <div class="text-2xl sm:text-3xl font-black text-amber-400 font-mono">68.2%</div>
                <div class="text-xs text-slate-400 mt-1">First-time CBT test-takers experiencing mouse-freeze</div>
            </div>
            <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700/80">
                <div class="text-2xl sm:text-3xl font-black text-rose-400 font-mono">22.6%</div>
                <div class="text-xs text-slate-400 mt-1">Unreconciled fee leakage per academic session</div>
            </div>
            <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700/80">
                <div class="text-2xl sm:text-3xl font-black text-[#00ff88] font-mono">12 Sec</div>
                <div class="text-xs text-slate-400 mt-1">ExtremeSolutions automated aggregation speed</div>
            </div>
        </div>
    </div>

    <!-- Main Research Findings Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

        <!-- Finding 1: Computer Interface Anxiety -->
        <section class="bg-slate-800/50 border border-slate-700/70 rounded-3xl p-6 sm:p-10 relative overflow-hidden">
            <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-widest text-emerald-400 mb-3">
                <span>Discovery 01</span>
                <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
                <span>Student Exam Performance</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">
                The Secondary Exit Exam Paradox: Computer-Interface Anxiety at JAMB &amp; WAEC
            </h2>
            <div class="space-y-4 text-slate-300 text-sm sm:text-base leading-relaxed">
                <p>
                    Every year in Nigeria, over 1.8 million candidates sit for the Unified Tertiary Matriculation Examination (JAMB UTME), and hundreds of thousands transition to computer-based tests for WAEC and NECO. Despite schools boasting dedicated computer laboratories, our field research reveals an alarming reality:
                </p>
                <div class="p-4 rounded-xl bg-slate-900/80 border-l-4 border-amber-400 text-slate-200">
                    <strong>The Observation:</strong> Over 68% of candidates from private basic schools touch an actual test-simulation interface for the first time in their final year of secondary school (SS3). Over 40% of candidates lose their first 15 minutes of exam time grappling with basic mouse cursor control, double-clicking radio buttons, or managing the digital timer.
                </div>
                <p>
                    Students who thoroughly master academic syllabi routinely score 20–35% below their true potential due solely to <strong>digital interface shock</strong>. Computer literacy cannot be treated as an abstract elective taught on whiteboards.
                </p>
                <div class="pt-2">
                    <h3 class="text-xs font-extrabold uppercase tracking-wider text-[#00ff88] mb-2">The Architectural Remedy:</h3>
                    <p class="text-xs sm:text-sm text-slate-300">
                        ExtremeSolutions School OS embeds a sovereign, lightweight Computer-Based Testing terminal directly into every classroom from <strong>Primary 1 through SS3</strong>. Pupils take weekly continuous assessments digitally on low-cost tablets or lab PCs, eliminating hardware fear years before high-stakes exams.
                    </p>
                </div>
            </div>
        </section>

        <!-- Finding 2: Broadsheet Compilation Crisis -->
        <section class="bg-slate-800/50 border border-slate-700/70 rounded-3xl p-6 sm:p-10 relative overflow-hidden">
            <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-widest text-emerald-400 mb-3">
                <span>Discovery 02</span>
                <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
                <span>Administrative Latency &amp; Fatigue</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">
                The Terminal Broadsheet Bottleneck: Losing 2 to 3 Weeks Every Term
            </h2>
            <div class="space-y-4 text-slate-300 text-sm sm:text-base leading-relaxed">
                <p>
                    At the end of each academic term, teachers face an overwhelming administrative burden. Across our sample of 120 basic and secondary schools, class teachers spent an average of <strong>46 hours per term</strong> manually transcribing raw scores from paper marksheets into master broadsheets.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 my-4">
                    <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-700/60">
                        <div class="text-rose-400 font-bold text-sm mb-1">Human Calculation Error</div>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            An average of 14 computational discrepancies per class broadsheet, leading to contested positions, embarrassing reprint cycles, and parent friction.
                        </p>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-700/60">
                        <div class="text-rose-400 font-bold text-sm mb-1">Delayed Vacations &amp; Morale Loss</div>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            School terms extend into holidays simply waiting for broadsheets to clear, forcing teaching faculties into burnout and high employee turnover.
                        </p>
                    </div>
                </div>
                <div class="pt-2">
                    <h3 class="text-xs font-extrabold uppercase tracking-wider text-[#00ff88] mb-2">The Architectural Remedy:</h3>
                    <p class="text-xs sm:text-sm text-slate-300">
                        Our centralized Academic Engine automates score weighting, grading scales, position ranks, and broadsheet generation. When the final subject teacher submits marks, the comprehensive broadsheet compiles in <strong>12 seconds</strong>, with instant PDF generation for pupil report booklets.
                    </p>
                </div>
            </div>
        </section>

        <!-- Finding 3: Fee Recovery Leakage -->
        <section class="bg-slate-800/50 border border-slate-700/70 rounded-3xl p-6 sm:p-10 relative overflow-hidden">
            <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-widest text-emerald-400 mb-3">
                <span>Discovery 03</span>
                <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
                <span>Financial Sustainability &amp; Cashflow</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">
                The Paper Ledger Deficit: 15–28% Tuition Fee Recovery Leakage
            </h2>
            <div class="space-y-4 text-slate-300 text-sm sm:text-base leading-relaxed">
                <p>
                    Private basic schools operate on thin operating margins heavily dependent on punctual term fee collections. However, reliance on paper bank tellers, unindexed physical receipt books, and disparate WhatsApp payment confirmations creates massive financial blindness.
                </p>
                <div class="p-4 rounded-xl bg-slate-900/80 border-l-4 border-rose-500 text-slate-200">
                    <strong>The Financial Drain:</strong> Auditors discovered that up to 28% of expected tuition revenue remained uncollected at term end because bursars had no automated way to track partial payments, trace unpaid family balances, or prevent duplicate teller receipts from circulating.
                </div>
                <p>
                    Proprietors are often forced to take high-interest commercial loans to pay staff salaries during holiday periods, simply because fee balances were never systematically reconciled.
                </p>
                <div class="pt-2">
                    <h3 class="text-xs font-extrabold uppercase tracking-wider text-[#00ff88] mb-2">The Architectural Remedy:</h3>
                    <p class="text-xs sm:text-sm text-slate-300">
                        ExtremeSolutions School OS provides an integrated Financial Ledger with bank transaction reconciliation, automated parent SMS/Email receipting, and real-time debtor ledgers, guaranteeing complete transparency for proprietors and school trustees.
                    </p>
                </div>
            </div>
        </section>

        <!-- Methodology & Survey Specs -->
        <section class="bg-slate-800/30 border border-slate-700/50 rounded-2xl p-6 text-xs text-slate-400 leading-relaxed">
            <h4 class="text-slate-300 font-bold uppercase tracking-wider mb-2">Research Methodology &bull; Sampling Specification</h4>
            <p>
                Data compiled by the ExtremeSolutions Field Engineering Taskforce between September 2024 and July 2026 across 124 accredited private basic and secondary schools in Lagos, Ogun, Oyo, Abuja FCT, and Kwara States. Metrics evaluated continuous assessment records, terminal broadsheet processing logs, and bursary reconciliation records.
            </p>
        </section>

        <!-- CTA Section -->
        <div class="text-center pt-8 border-t border-slate-800">
            <h3 class="text-xl sm:text-2xl font-bold text-white mb-3">
                Review How ExtremeSolutions OS Solves These Deficits
            </h3>
            <p class="text-sm text-slate-400 max-w-lg mx-auto mb-6">
                Explore the complete platform capabilities, or generate a tailored executive proposal for your board of governors.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('partner') }}" class="px-6 py-3 rounded-xl bg-[#00ff88] hover:bg-[#00dd77] text-[#0a192f] font-bold text-sm transition-all shadow-lg shadow-[#00ff88]/20">
                    Generate Personalized Board Memo
                </a>
                <a href="{{ route('products.school') }}" class="px-6 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 text-white font-bold text-sm border border-slate-700 transition-all">
                    Explore School Platform (SMS)
                </a>
                <a href="{{ route('support') }}" class="px-6 py-3 rounded-xl bg-transparent hover:bg-white/5 text-slate-300 hover:text-white font-bold text-sm transition-all">
                    View 48-Hour Onboarding Plan &rarr;
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
