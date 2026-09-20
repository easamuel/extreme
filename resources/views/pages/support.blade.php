@extends('layouts.app')

@section('title', 'Institutional Support, Deployment & Teacher Certification | ExtremeSolutions')
@section('description', 'The 48-hour on-ground deployment protocol, teacher digital certification, knowledge base, and 24/7 technical desk for ExtremeSolutions School OS.')

@section('content')
<div class="bg-slate-900 text-slate-100 min-h-screen pt-24 pb-24 selection:bg-[#00ff88]/30 selection:text-white">

    <!-- Header Section -->
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center pt-8 pb-12">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-bold uppercase tracking-wider mb-6">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            ExtremeSolutions Enablement &bull; Institutional Hub
        </div>
        <h1 class="text-3xl sm:text-4xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight max-w-3xl mx-auto">
            Operational Enablement &amp; <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-[#00ff88]">Teacher Certification</span>
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto mt-4 leading-relaxed">
            Software alone fails without human support. Explore our 48-hour on-ground deployment taskforce protocol, faculty training curriculum, and round-the-clock administrative technical desk.
        </p>

        <!-- Quick Contacts Bar -->
        <div class="mt-8 inline-flex items-center gap-4 bg-slate-800/80 border border-slate-700/80 rounded-2xl p-2.5 px-4 text-xs">
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                <span class="text-slate-300 font-semibold">Priority Engineering Desk:</span>
                <a href="https://wa.me/2349052585622" target="_blank" class="text-[#00ff88] hover:underline font-mono font-bold">+234 905 258 5622</a>
            </div>
            <div class="h-3.5 w-px bg-slate-700 hidden sm:block"></div>
            <div class="text-slate-400 hidden sm:block">
                Sub-domain: <strong class="text-slate-200">sms.extremesolutions.com.ng</strong>
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

        <!-- 1. The 48-Hour On-Ground Deployment Taskforce Protocol -->
        <section class="bg-slate-800/50 border border-slate-700/70 rounded-3xl p-6 sm:p-10 relative overflow-hidden">
            <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-[#00ff88] mb-3">
                <span>Deployment Blueprint</span>
                <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
                <span>Zero Downtime Transition</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">
                The 48-Hour Rapid Onboarding Taskforce
            </h2>
            <p class="text-sm sm:text-base text-slate-300 leading-relaxed max-w-3xl mb-8">
                We eliminate the risk of software abandonment by sending our field engineering crew directly to your school campus. We do the heavy lifting of digitizing your paper archives so your staff doesn't get overwhelmed.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 not-prose">
                <!-- Day 1 -->
                <div class="p-6 rounded-2xl bg-slate-900/80 border border-slate-700/80 relative">
                    <div class="inline-block px-3 py-1 rounded-md bg-emerald-500/20 text-[#00ff88] text-xs font-mono font-bold mb-3">
                        STAGE 01 &bull; DAY 1
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Paper Audit &amp; Pupil Bio-Data Ingestion</h3>
                    <ul class="space-y-2.5 text-xs text-slate-300 leading-relaxed">
                        <li class="flex items-start gap-2">
                            <span class="text-[#00ff88] font-bold">&check;</span>
                            <span>Physical paper register scanning and digital roster normalization.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-[#00ff88] font-bold">&check;</span>
                            <span>Student unique ID generation, class arm assignments, and parent contact links.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-[#00ff88] font-bold">&check;</span>
                            <span>Bursary fee schedules and term tuition balance configurations.</span>
                        </li>
                    </ul>
                </div>

                <!-- Day 2 -->
                <div class="p-6 rounded-2xl bg-slate-900/80 border border-slate-700/80 relative">
                    <div class="inline-block px-3 py-1 rounded-md bg-emerald-500/20 text-[#00ff88] text-xs font-mono font-bold mb-3">
                        STAGE 02 &bull; DAY 2
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">On-Site Faculty Certification &amp; Go-Live</h3>
                    <ul class="space-y-2.5 text-xs text-slate-300 leading-relaxed">
                        <li class="flex items-start gap-2">
                            <span class="text-[#00ff88] font-bold">&check;</span>
                            <span>Hands-on teacher workshop: score input, attendance, and remark authoring.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-[#00ff88] font-bold">&check;</span>
                            <span>Bursary cashier training: automated receipting and payment validation.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-[#00ff88] font-bold">&check;</span>
                            <span>Executive dashboard handoff to the Proprietor &amp; Head of School.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 2. Teacher Digital Literacy & Certification Curriculum -->
        <section class="bg-slate-800/50 border border-slate-700/70 rounded-3xl p-6 sm:p-10 relative overflow-hidden">
            <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-emerald-400 mb-3">
                <span>Faculty Empowerment</span>
                <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
                <span>Professional Development</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">
                ExtremeSolutions Certified School Educator (CSE)
            </h2>
            <p class="text-sm sm:text-base text-slate-300 leading-relaxed max-w-3xl mb-8">
                Our curriculum transforms non-technical teachers into proficient digital educators. Teachers earn a verifiable digital badge upon completing the practical modules:
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="p-5 rounded-2xl bg-slate-900/60 border border-slate-700/60">
                    <div class="w-8 h-8 rounded-lg bg-[#1e3a5f] text-[#00ff88] flex items-center justify-center font-bold text-xs mb-3">
                        01
                    </div>
                    <h3 class="text-sm font-bold text-white mb-1.5">Scorebook &amp; CA Engine</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Entering test marks from mobile devices, real-time validation to prevent score entry exceeding 100%, and custom grade scales.
                    </p>
                </div>

                <div class="p-5 rounded-2xl bg-slate-900/60 border border-slate-700/60">
                    <div class="w-8 h-8 rounded-lg bg-[#1e3a5f] text-[#00ff88] flex items-center justify-center font-bold text-xs mb-3">
                        02
                    </div>
                    <h3 class="text-sm font-bold text-white mb-1.5">Broadsheet Validation</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Instant class average analysis, automated student position sorting, and one-click term report booklet generation.
                    </p>
                </div>

                <div class="p-5 rounded-2xl bg-slate-900/60 border border-slate-700/60">
                    <div class="w-8 h-8 rounded-lg bg-[#1e3a5f] text-[#00ff88] flex items-center justify-center font-bold text-xs mb-3">
                        03
                    </div>
                    <h3 class="text-sm font-bold text-white mb-1.5">CBT Question Authoring</h3>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        Creating multiple-choice question banks with mathematical equations, diagrams, and automated computerized grading.
                    </p>
                </div>
            </div>
        </section>

        <!-- 3. Knowledge Base & Resource Categories -->
        <section class="bg-slate-800/50 border border-slate-700/70 rounded-3xl p-6 sm:p-10 relative overflow-hidden">
            <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-[#00ff88] mb-3">
                <span>Self-Serve Documentation</span>
                <span class="w-1.5 h-1.5 rounded-full bg-slate-600"></span>
                <span>Guides &amp; Video Walkthroughs</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-6">
                Administrative Knowledge Base
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-700/60 flex items-start gap-3.5">
                    <div class="p-2 rounded-lg bg-[#1e3a5f] text-[#00ff88]">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white">Term Setup &amp; Session Rollover Guide</h4>
                        <p class="text-xs text-slate-400 mt-0.5">How to promote students to new classes and configure tuition fee schedules.</p>
                    </div>
                </div>

                <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-700/60 flex items-start gap-3.5">
                    <div class="p-2 rounded-lg bg-[#1e3a5f] text-[#00ff88]">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white">Bursar Ledger &amp; Cash Reconciliation</h4>
                        <p class="text-xs text-slate-400 mt-0.5">Recording partial school fees, issuing digital receipts, and exporting bank audit logs.</p>
                    </div>
                </div>

                <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-700/60 flex items-start gap-3.5">
                    <div class="p-2 rounded-lg bg-[#1e3a5f] text-[#00ff88]">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white">CBT Terminal Exam Scheduling</h4>
                        <p class="text-xs text-slate-400 mt-0.5">Setting timed countdowns, shuffling questions, and enabling offline lab mode.</p>
                    </div>
                </div>

                <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-700/60 flex items-start gap-3.5">
                    <div class="p-2 rounded-lg bg-[#1e3a5f] text-[#00ff88]">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white">Parent Portal &amp; SMS Dispatch</h4>
                        <p class="text-xs text-slate-400 mt-0.5">Broadcasting term results to parents and sending automated fee reminders.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Direct Technical Escalation Channels -->
        <section class="bg-gradient-to-br from-[#1e3a5f] to-slate-900 border border-white/10 rounded-3xl p-8 sm:p-12 text-center relative overflow-hidden shadow-2xl">
            <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-3">
                Need Immediate Administrative Support?
            </h2>
            <p class="text-sm sm:text-base text-slate-300 max-w-xl mx-auto mb-8 leading-relaxed">
                Our support team operates 7 days a week during school terms, with priority WhatsApp desks for school proprietors and examination officers.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="https://wa.me/2349052585622?text={{ urlencode('Hello ExtremeSolutions Support, I need assistance with our School Operating System (sms.extremesolutions.com.ng).') }}" 
                   target="_blank" 
                   rel="noopener noreferrer"
                   class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-[#00ff88] hover:bg-[#00dd77] text-[#0a192f] font-bold text-sm transition-all shadow-xl shadow-[#00ff88]/20 flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.275.072.376-.044c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824z"/>
                    </svg>
                    <span>Connect via WhatsApp Desk</span>
                </a>
                <a href="{{ route('partner') }}" class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-white font-bold text-sm border border-slate-700 transition-all">
                    Generate Executive Proposal
                </a>
                <a href="{{ route('contact') }}" class="w-full sm:w-auto px-6 py-3.5 rounded-xl bg-transparent hover:bg-white/5 text-slate-300 hover:text-white font-bold text-sm transition-all">
                    Submit Support Ticket &rarr;
                </a>
            </div>
        </section>

    </div>
</div>
@endsection
