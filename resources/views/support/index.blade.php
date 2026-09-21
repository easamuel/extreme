@extends('layouts.app')

@section('title', 'Enterprise Support & SLA Standards | ExtremeSolutions')
@section('description', 'ExtremeSolutions enterprise support standards, software engineering capabilities, service level agreements, and active deployment initiatives.')

@section('meta_robots')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
    <!-- 1. Hero Surface (Brand Navy with Emerald Glow) -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white pt-16 pb-20 md:pt-24 md:pb-28">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="brand-glow top-0 left-1/2 -translate-x-1/2 w-[600px] h-[350px] bg-gradient-to-br from-[#1e3a5f] via-[#00ff88]/15 to-transparent"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 rounded-full border border-[#00ff88]/30 bg-[#00ff88]/10 px-4 py-1.5 text-xs font-semibold text-[#00ff88] mb-6">
                <span class="w-2 h-2 rounded-full bg-[#00ff88] animate-pulse"></span>
                <span>ENTERPRISE SYSTEMS SUPPORT &bull; SLA STANDARD</span>
            </div>

            <!-- Headline -->
            <h1 class="mx-auto max-w-4xl text-3xl sm:text-5xl lg:text-[58px] tracking-tight leading-[1.14]">
                <span class="font-light text-white/90">Software Support That Never Leaves</span><br/>
                <span class="font-bold text-white">Your Operations in the Dark</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm sm:text-base leading-relaxed text-white/75">
                We build digital systems that last. When you run on ExtremeSolutions software, you receive proactive infrastructure stewardship, continuous database telemetry, and direct access to senior engineers &mdash; not robotic automated ticket queues.
            </p>

            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="https://wa.me/2349052585622?text={{ urlencode('Hello ExtremeSolutions Support Desk, I am reaching out regarding technical systems support.') }}"
                   target="_blank"
                   class="inline-flex items-center rounded-full bg-[#00ff88] px-8 py-3.5 text-sm font-bold text-[#0a192f] hover:bg-[#00e67a] transition-all shadow-lg hover:-translate-y-0.5">
                    <svg class="w-4 h-4 mr-2 fill-current" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.203c.043.071.043.419-.101.824z"/>
                    </svg>
                    Contact Support Desk
                </a>
                <a href="{{ $exportPdfUrl }}" target="_blank"
                   class="rounded-full border border-white/20 bg-white/10 px-7 py-3.5 text-sm font-medium text-white hover:bg-white/20 transition-all inline-flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[#00ff88]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download SLA Memo (PDF)
                </a>
                <a href="https://cal.com/samuel-ekunyan" target="_blank"
                   class="rounded-full border border-white/10 bg-white/5 px-6 py-3.5 text-sm font-medium text-white/80 hover:text-white hover:bg-white/10 transition-all">
                    Book Architecture Call &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- 2. The ExtremeSolutions Support Standard -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">The SLA Standard</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a] tracking-tight">
                    Engineered for Uptime, Built for Reliability
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed">
                    Software fails when agencies treat handoff as the finish line. ExtremeSolutions provides structured operational stewardship across your application lifecycle.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="rounded-2xl bg-[#f8fafc] p-8 border border-gray-200/80 shadow-xs hover:border-[#00ff88]/50 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-lg mb-6">
                        01
                    </div>
                    <h3 class="text-xl font-bold text-[#0c1f3a] mb-3">99.9% Uptime &amp; Active Monitoring</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Continuous telemetry, database query profiling, automated off-site backups, and automated health checks to catch issues before your users ever notice.
                    </p>
                    <ul class="mt-4 space-y-2 text-xs text-gray-500 font-medium">
                        <li class="flex items-center"><span class="text-emerald-500 mr-2">&check;</span> Real-time server resource tracking</li>
                        <li class="flex items-center"><span class="text-emerald-500 mr-2">&check;</span> Automated encrypted database backups</li>
                        <li class="flex items-center"><span class="text-emerald-500 mr-2">&check;</span> SSL certificate management &amp; renewals</li>
                    </ul>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-8 border border-gray-200/80 shadow-xs hover:border-[#00ff88]/50 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-lg mb-6">
                        02
                    </div>
                    <h3 class="text-xl font-bold text-[#0c1f3a] mb-3">Security &amp; Dependency Updates</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        We actively patch runtime vulnerabilities, update framework dependencies, and harden API endpoints against modern attack vectors.
                    </p>
                    <ul class="mt-4 space-y-2 text-xs text-gray-500 font-medium">
                        <li class="flex items-center"><span class="text-emerald-500 mr-2">&check;</span> Proactive framework &amp; package patches</li>
                        <li class="flex items-center"><span class="text-emerald-500 mr-2">&check;</span> Webhook idempotency &amp; fraud verification</li>
                        <li class="flex items-center"><span class="text-emerald-500 mr-2">&check;</span> Database index optimization &amp; cleanup</li>
                    </ul>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-8 border border-gray-200/80 shadow-xs hover:border-[#00ff88]/50 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-lg mb-6">
                        03
                    </div>
                    <h3 class="text-xl font-bold text-[#0c1f3a] mb-3">Direct Lead Engineer Escalation</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        No junior call centers or unhelpful support bots. Critical production bottlenecks are escalated directly to lead software engineers with &lt;60 min SLA.
                    </p>
                    <ul class="mt-4 space-y-2 text-xs text-gray-500 font-medium">
                        <li class="flex items-center"><span class="text-emerald-500 mr-2">&check;</span> Dedicated WhatsApp engineering desk</li>
                        <li class="flex items-center"><span class="text-emerald-500 mr-2">&check;</span> Rapid root-cause analysis &amp; hotfixing</li>
                        <li class="flex items-center"><span class="text-emerald-500 mr-2">&check;</span> Post-incident review &amp; preventive roadmaps</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Active Sector Deployments (ExtremeSMS & ESPass) -->
    <section class="bg-[#f8fafc] py-20 md:py-28 border-y border-gray-200/80">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">Active Production Platforms</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a] tracking-tight">
                    Explore Our Live Product Ecosystem
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed">
                    To guarantee our architectures are dependable, we engineer, deploy, and maintain specialized platforms in live production every day:
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <!-- ExtremeSMS Spotlight Card -->
                <div class="rounded-2xl bg-white p-8 sm:p-10 border border-gray-200 shadow-sm hover:border-[#00ff88] transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between gap-2 mb-4">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800">
                                EDUCATION OPERATING SYSTEM
                            </span>
                            <span class="text-xs text-gray-400 font-mono">sms.extremesolutions.com.ng</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#0c1f3a] tracking-tight">
                            ExtremeSMS &mdash; Secondary School Operating System
                        </h3>
                        <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                            Engineered for secondary schools (JSS1–SS3) across Nigeria. Automates continuous assessment broadsheets in 12 seconds, recovers 100% of tuition debts before exam week with digital clearance passes, and conducts daily offline CBT drills so candidates master keyboards for JAMB UTME.
                        </p>

                        <div class="mt-6 p-4 rounded-xl bg-gray-50 border border-gray-200">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#0c1f3a]">On-Ground Deployment Taskforce:</span>
                            <p class="text-xs text-gray-600 mt-1">
                                Our engineers spend 48 hours physically on your school campus configuring lab PCs, migrating student records, and training your faculty.
                            </p>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-100 flex flex-wrap items-center justify-between gap-4">
                        <a href="{{ route('partner.index') }}" class="inline-flex items-center text-sm font-bold text-emerald-600 hover:text-emerald-700">
                            View School Partnership Proposal
                            <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                        <a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-xs font-medium text-gray-500 hover:text-gray-900 underline">
                            Live Portal &rarr;
                        </a>
                    </div>
                </div>

                <!-- ESPass Spotlight Card -->
                <div class="rounded-2xl bg-white p-8 sm:p-10 border border-gray-200 shadow-sm hover:border-[#00ff88] transition flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between gap-2 mb-4">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-800">
                                EVENT COMMERCE &amp; ACCESS CONTROL
                            </span>
                            <span class="text-xs text-gray-400 font-mono">espass.extremesolutions.com.ng</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#0c1f3a] tracking-tight">
                            ESPass &mdash; Event Ticketing &amp; Gate Verification
                        </h3>
                        <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                            Built for high-concurrency event entry at auditoriums and stadiums. Features sub-150ms cryptographic QR scanning, zero-internet offline terminal validation during cellular outages, idempotent webhook settlement, and automated split payouts.
                        </p>

                        <div class="mt-6 p-4 rounded-xl bg-gray-50 border border-gray-200">
                            <span class="text-xs font-bold uppercase tracking-wider text-[#0c1f3a]">Zero-Downtime Gate Performance:</span>
                            <p class="text-xs text-gray-600 mt-1">
                                Handheld scanners validate tickets locally with dynamic HMAC-SHA256 tokens, ensuring crowd flow never stops even when local internet dies.
                            </p>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-100 flex flex-wrap items-center justify-between gap-4">
                        <a href="{{ route('discoveries.systems') }}" class="inline-flex items-center text-sm font-bold text-emerald-600 hover:text-emerald-700">
                            View Systems Architecture Teardown
                            <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                        <a href="https://espass.extremesolutions.com.ng" target="_blank" class="text-xs font-medium text-gray-500 hover:text-gray-900 underline">
                            Live Portal &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Direct Engineering Support Channels -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">Immediate Assistance</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a]">
                    Connect With Our Technical Desk
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="rounded-2xl border border-gray-200 p-8 text-center hover:border-emerald-500 transition">
                    <div class="w-12 h-12 mx-auto rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.203c.043.071.043.419-.101.824z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a]">WhatsApp Incident Desk</h3>
                    <p class="text-xs text-gray-500 mt-1">Instant response for active production platforms</p>
                    <div class="mt-4 text-sm font-bold text-gray-900">+234 905 258 5622</div>
                    <a href="https://wa.me/2349052585622" target="_blank" class="mt-4 inline-block text-xs font-bold text-emerald-600 hover:underline">
                        Open Chat &rarr;
                    </a>
                </div>

                <div class="rounded-2xl border border-gray-200 p-8 text-center hover:border-emerald-500 transition">
                    <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a]">Email Technical Desk</h3>
                    <p class="text-xs text-gray-500 mt-1">For architecture requests and audits</p>
                    <div class="mt-4 text-sm font-bold text-gray-900">info@extremesolutions.com.ng</div>
                    <a href="mailto:info@extremesolutions.com.ng" class="mt-4 inline-block text-xs font-bold text-emerald-600 hover:underline">
                        Send Message &rarr;
                    </a>
                </div>

                <div class="rounded-2xl border border-gray-200 p-8 text-center hover:border-emerald-500 transition">
                    <div class="w-12 h-12 mx-auto rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a]">Schedule Strategy Call</h3>
                    <p class="text-xs text-gray-500 mt-1">30-minute system architecture review</p>
                    <div class="mt-4 text-sm font-bold text-gray-900">With Samuel Ekunyan</div>
                    <a href="https://cal.com/samuel-ekunyan" target="_blank" class="mt-4 inline-block text-xs font-bold text-emerald-600 hover:underline">
                        Book Session &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Bottom Brand Callout Surface -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white py-16 md:py-20 text-center">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="relative z-10 mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-4xl font-bold tracking-tight text-white">
                Building Digital Systems That Last
            </h2>
            <p class="mt-4 text-sm sm:text-base text-white/70 max-w-xl mx-auto leading-relaxed">
                Whether you need dependable custom software engineering, cloud automation, or reliable ongoing support for your organization, we are ready to build.
            </p>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="rounded-full bg-[#00ff88] px-8 py-3.5 text-sm font-bold text-[#0a192f] hover:bg-[#00e67a] transition-all shadow-md">
                    Start a Conversation
                </a>
                <a href="{{ route('about') }}" class="rounded-full border border-white/20 bg-white/10 px-7 py-3.5 text-sm font-medium text-white hover:bg-white/20 transition-all">
                    About ExtremeSolutions
                </a>
            </div>
        </div>
    </section>
@endsection
