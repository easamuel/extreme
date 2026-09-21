@extends('layouts.app')

@section('title', 'Institutional Support & Engineering Infrastructure | ExtremeSolutions')
@section('description', 'ExtremeSolutions enterprise support standards, software engineering capabilities, service level agreements, and active deployment initiatives.')

@section('meta_robots')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
<div class="bg-zinc-50 min-h-screen py-10 lg:py-16 text-zinc-900 selection:bg-[#00ff88]/20 selection:text-[#0c1f3a]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Top Status & Action Bar -->
        <div class="mb-8 flex flex-wrap items-center justify-between gap-4 bg-white border border-zinc-200 p-4 rounded-xl shadow-xs">
            <div class="flex items-center space-x-3">
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">
                    <span class="w-1.5 h-1.5 mr-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    Systems Active
                </span>
                <span class="text-xs text-zinc-500 font-mono hidden sm:inline">REF: {{ $refCode }}</span>
                <span class="text-zinc-300 hidden sm:inline">|</span>
                <span class="text-xs text-zinc-500">{{ $dateStr }}</span>
            </div>

            <div class="flex items-center space-x-3">
                <a href="{{ $exportPdfUrl }}" target="_blank"
                   class="inline-flex items-center px-3.5 py-1.5 bg-[#0c1f3a] hover:bg-[#15325b] text-white font-medium rounded-lg text-xs transition shadow-xs">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-[#00ff88]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download SLA Memo (PDF)
                </a>
                <a href="https://wa.me/2349052585622?text={{ urlencode('Hello ExtremeSolutions Support Desk, I am reaching out regarding enterprise systems support.') }}"
                   target="_blank"
                   class="inline-flex items-center px-3.5 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg text-xs transition shadow-xs">
                    <svg class="w-3.5 h-3.5 mr-1.5 fill-current" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.203c.043.071.043.419-.101.824z"/>
                    </svg>
                    Contact Support Desk
                </a>
            </div>
        </div>

        <!-- Main Support Document Card -->
        <div id="support-document" class="bg-white border border-zinc-200 rounded-2xl p-6 sm:p-10 lg:p-12 shadow-sm">

            <!-- Letterhead & Corporate Standard -->
            <div class="border-b border-zinc-200 pb-8 mb-8">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center space-x-3.5">
                        <img src="{{ asset('images/es-mark.png') }}" alt="ExtremeSolutions" class="h-10 w-auto">
                        <div>
                            <h1 class="text-2xl font-black tracking-tight text-[#0c1f3a] font-sans">EXTREMESOLUTIONS</h1>
                            <p class="text-xs uppercase tracking-widest text-emerald-600 font-bold">Building Digital Systems that last.</p>
                        </div>
                    </div>
                    <div class="text-left sm:text-right font-mono text-xs text-zinc-500 space-y-0.5">
                        <div>SERVICE LEVEL AGREEMENT &bull; SLA-2026</div>
                        <div>ISSUED: <span class="text-zinc-800 font-semibold">{{ $dateStr }}</span></div>
                        <div>ID: <span class="text-zinc-800 font-semibold">{{ $refCode }}</span></div>
                    </div>
                </div>
            </div>

            <!-- Intro: Who We Are & What We Do -->
            <div class="mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">Enterprise Engineering Standard</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-[#0c1f3a] mt-1 tracking-tight">
                    Reliable Technical Support &amp; Systems Operation for Modern Organizations
                </h2>
                <p class="mt-4 text-sm sm:text-base leading-relaxed text-zinc-600 max-w-3xl">
                    ExtremeSolutions is a digital engineering and software building company. We engineer custom enterprise platforms, mobile applications, cloud automation workflows, and high-throughput transactional backends.
                </p>
                <p class="mt-3 text-sm sm:text-base leading-relaxed text-zinc-600 max-w-3xl">
                    We do not build fragile, one-off templates and disappear. Every system we design is built for continuous resilience, supported by dedicated service level agreements (SLAs), proactive server maintenance, and responsive engineering teams.
                </p>
            </div>

            <!-- Core Support Pillars -->
            <div class="mb-12">
                <h3 class="text-sm font-bold uppercase tracking-wider text-zinc-400 font-mono mb-4">
                    01 // Support Capabilities &amp; SLA Architecture
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div class="border border-zinc-200 rounded-xl p-5 bg-zinc-50 hover:border-zinc-300 transition">
                        <div class="w-9 h-9 rounded-lg bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm mb-3">
                            24/7
                        </div>
                        <h4 class="text-base font-bold text-[#0c1f3a]">Continuous Monitoring &amp; Uptime</h4>
                        <p class="text-xs text-zinc-600 mt-2 leading-relaxed">
                            Real-time database performance telemetry, automated server health alerts, SSL renewals, and automated off-site database backups to prevent data loss.
                        </p>
                    </div>

                    <div class="border border-zinc-200 rounded-xl p-5 bg-zinc-50 hover:border-zinc-300 transition">
                        <div class="w-9 h-9 rounded-lg bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <h4 class="text-base font-bold text-[#0c1f3a]">Security &amp; Dependency Patches</h4>
                        <p class="text-xs text-zinc-600 mt-2 leading-relaxed">
                            Proactive vulnerability patching, dependency upgrades, firewall hardening, and regular penetration checks to safeguard institutional databases.
                        </p>
                    </div>

                    <div class="border border-zinc-200 rounded-xl p-5 bg-zinc-50 hover:border-zinc-300 transition">
                        <div class="w-9 h-9 rounded-lg bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h4 class="text-base font-bold text-[#0c1f3a]">Engineering Incident Escalation</h4>
                        <p class="text-xs text-zinc-600 mt-2 leading-relaxed">
                            Direct escalation access to the principal engineering team. Critical production bottlenecks resolved with guaranteed response times under 60 minutes.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Active Sector Deployments & Products Spotlight -->
            <div class="mb-12 bg-[#0c1f3a] text-white rounded-2xl p-6 sm:p-8">
                <div class="flex items-center space-x-2 text-[#00ff88] text-xs font-mono mb-2">
                    <span class="inline-block w-2 h-2 rounded-full bg-[#00ff88] animate-pulse"></span>
                    <span>ACTIVE PRODUCT &amp; DEPLOYMENT FOCUS</span>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-white tracking-tight">
                    Explore Our Active Systems &amp; Field Deployments
                </h3>
                <p class="text-xs sm:text-sm text-white/70 mt-1 max-w-2xl leading-relaxed">
                    To guarantee our software is dependable, we build and operate our own specialized platforms in live production every day:
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-6">
                    <!-- SMS Product Box -->
                    <div class="bg-white/5 border border-white/10 rounded-xl p-5 hover:border-[#00ff88]/40 transition">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-mono font-bold text-[#00ff88]">EDUCATION OPERATING SYSTEM</span>
                            <span class="text-[11px] text-white/60">sms.extremesolutions.com.ng</span>
                        </div>
                        <h4 class="text-lg font-bold text-white">ExtremeSMS (School Operating System)</h4>
                        <p class="text-xs text-white/75 mt-2 leading-relaxed">
                            Continuous assessment broadsheets computed in 12 seconds, zero-leakage tuition gate passes, and daily desktop CBT practice for secondary school candidates with a 48-Hour Assisted Deployment Taskforce.
                        </p>
                        <div class="mt-4 flex items-center space-x-3">
                            <a href="{{ route('partner.index') }}" class="text-xs font-bold text-[#00ff88] hover:underline inline-flex items-center">
                                View School Proposal
                                <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <span class="text-white/30">&bull;</span>
                            <a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-xs text-white/60 hover:text-white underline">
                                Live SMS Portal
                            </a>
                        </div>
                    </div>

                    <!-- ESPass Product Box -->
                    <div class="bg-white/5 border border-white/10 rounded-xl p-5 hover:border-[#00ff88]/40 transition">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-mono font-bold text-[#00ff88]">COMMERCE &amp; ACCESS CONTROL</span>
                            <span class="text-[11px] text-white/60">espass.extremesolutions.com.ng</span>
                        </div>
                        <h4 class="text-lg font-bold text-white">ESPass (Ticketing &amp; Access Engine)</h4>
                        <p class="text-xs text-white/75 mt-2 leading-relaxed">
                            High-concurrency ticket issuing, sub-150ms cryptographic QR gate validation, offline scanner resilience during cellular blackouts, and automated split payments.
                        </p>
                        <div class="mt-4 flex items-center space-x-3">
                            <a href="{{ route('discoveries.systems') }}" class="text-xs font-bold text-[#00ff88] hover:underline inline-flex items-center">
                                View Architecture Teardown
                                <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <span class="text-white/30">&bull;</span>
                            <a href="https://espass.extremesolutions.com.ng" target="_blank" class="text-xs text-white/60 hover:text-white underline">
                                Live ESPass Portal
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Direct Support Contact Channels -->
            <div class="border-t border-zinc-200 pt-8">
                <h3 class="text-sm font-bold uppercase tracking-wider text-zinc-400 font-mono mb-4">
                    02 // Direct Support &amp; Technical Inquiries
                </h3>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="p-4 rounded-xl border border-zinc-200 bg-zinc-50">
                        <div class="text-xs text-zinc-500 font-medium">WhatsApp Support</div>
                        <div class="text-sm font-bold text-zinc-900 mt-1">+234 905 258 5622</div>
                        <a href="https://wa.me/2349052585622" target="_blank" class="text-xs font-semibold text-emerald-600 hover:underline mt-2 inline-block">
                            Open WhatsApp Desk &rarr;
                        </a>
                    </div>

                    <div class="p-4 rounded-xl border border-zinc-200 bg-zinc-50">
                        <div class="text-xs text-zinc-500 font-medium">Email Engineering</div>
                        <div class="text-sm font-bold text-zinc-900 mt-1">info@extremesolutions.com.ng</div>
                        <a href="mailto:info@extremesolutions.com.ng" class="text-xs font-semibold text-emerald-600 hover:underline mt-2 inline-block">
                            Send Email &rarr;
                        </a>
                    </div>

                    <div class="p-4 rounded-xl border border-zinc-200 bg-zinc-50">
                        <div class="text-xs text-zinc-500 font-medium">Enterprise Consultation</div>
                        <div class="text-sm font-bold text-zinc-900 mt-1">Book System Architecture Call</div>
                        <a href="https://cal.com/samuel-ekunyan" target="_blank" class="text-xs font-semibold text-emerald-600 hover:underline mt-2 inline-block">
                            Schedule Session &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sign-off & Corporate Information -->
            <div class="mt-12 pt-6 border-t border-zinc-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div>
                    <div class="text-sm font-bold text-[#0c1f3a] font-mono">EXTREMESOLUTIONS</div>
                    <p class="text-xs text-zinc-500">Custom Software, Mobile Apps &amp; Enterprise Cloud Automation</p>
                    <p class="text-xs text-zinc-400">RC / Registered Operating Entity &bull; extremesolutions.com.ng</p>
                </div>
                <div class="text-left sm:text-right font-mono text-xs text-zinc-400">
                    <div>SLO: 99.9% UPTIME ARCHITECTURE</div>
                    <div>BUILDING DIGITAL SYSTEMS THAT LAST</div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
