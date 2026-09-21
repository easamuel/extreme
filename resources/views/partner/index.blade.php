@extends('layouts.app')

@section('title', 'Strategic Partnerships & Distribution | ExtremeSolutions')
@section('description', 'Partner with ExtremeSolutions: Enterprise software co-creation, regional technology distribution, and our active secondary school infrastructure initiative.')

@section('meta_robots')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
    <!-- 1. Hero Surface (Brand Navy Surface with Emerald Accents) -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white pt-16 pb-20 md:pt-24 md:pb-28">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="brand-glow top-0 left-1/2 -translate-x-1/2 w-[600px] h-[350px] bg-gradient-to-br from-[#1e3a5f] via-[#00ff88]/15 to-transparent"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 rounded-full border border-[#00ff88]/30 bg-[#00ff88]/10 px-4 py-1.5 text-xs font-semibold text-[#00ff88] mb-6">
                <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                <span>ENTERPRISE &bull; STRATEGIC PARTNERSHIP FRAMEWORK</span>
            </div>

            <!-- Headline -->
            <h1 class="mx-auto max-w-4xl text-3xl sm:text-5xl lg:text-[58px] tracking-tight leading-[1.14]">
                <span class="font-light text-white/90">Partner With ExtremeSolutions</span><br/>
                <span class="font-bold text-white">To Build &amp; Scale Systems That Last</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm sm:text-base leading-relaxed text-white/75">
                ExtremeSolutions is a software engineering company that builds dependable platforms for ambitious institutions and modern organizations. We collaborate through bespoke co-creation, regional platform distribution, and high-impact sector deployments.
            </p>

            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="https://cal.com/samuel-ekunyan" target="_blank"
                   class="inline-flex items-center rounded-full bg-[#00ff88] px-8 py-3.5 text-sm font-bold text-[#0a192f] hover:bg-[#00e67a] transition-all shadow-lg hover:-translate-y-0.5">
                    Discuss a Partnership &rarr;
                </a>
                <a href="#school-scope"
                   class="rounded-full border border-white/20 bg-white/10 px-7 py-3.5 text-sm font-medium text-white hover:bg-white/20 transition-all">
                    Explore Secondary School Scope
                </a>
                <a href="{{ $exportPdfUrl }}" target="_blank"
                   class="rounded-full border border-white/10 bg-white/5 px-6 py-3.5 text-sm font-medium text-white/80 hover:text-white hover:bg-white/10 transition-all inline-flex items-center">
                    <svg class="w-4 h-4 mr-2 text-[#00ff88]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download Prospectus (PDF)
                </a>
            </div>
        </div>
    </section>

    <!-- 2. Who We Are & What We Build (Full Software Company Positioning) -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">The Software Engineering Company</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a] tracking-tight">
                    Beyond Generic Resellers &mdash; We Build Core Infrastructure
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed">
                    ExtremeSolutions is not a marketing agency or a template wrapper shop. We engineer custom enterprise systems, high-concurrency transactional backends, and battle-tested sector platforms:
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
                <div class="rounded-2xl bg-[#f8fafc] p-6 border border-gray-200/80 shadow-xs hover:border-[#00ff88]/50 transition">
                    <div class="w-10 h-10 rounded-lg bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm mb-4">
                        01
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a] mb-2">Custom Software &amp; APIs</h3>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                        Bespoke internal systems, complex relational databases, automated cloud workflows, and high-performance microservices.
                    </p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-6 border border-gray-200/80 shadow-xs hover:border-[#00ff88]/50 transition">
                    <div class="w-10 h-10 rounded-lg bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm mb-4">
                        02
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a] mb-2">Mobile Applications</h3>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                        Native iOS and Android engineering designed for field operations, offline data synchronization, and enterprise security.
                    </p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-6 border border-gray-200/80 shadow-xs hover:border-[#00ff88]/50 transition">
                    <div class="w-10 h-10 rounded-lg bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm mb-4">
                        03
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a] mb-2">ESPass Event Engine</h3>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                        High-throughput ticketing engine with sub-150ms cryptographic QR gate validation and offline scanner resilience during network blackouts.
                    </p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-6 border border-gray-200/80 shadow-xs hover:border-[#00ff88]/50 transition">
                    <div class="w-10 h-10 rounded-lg bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm mb-4">
                        04
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a] mb-2">ExtremeSMS School OS</h3>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                        Automated continuous assessment broadsheets, zero-leakage tuition gate passes, and daily offline CBT testing terminals.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Three Strategic Partnership Tracks -->
    <section class="bg-[#f8fafc] py-20 md:py-28 border-y border-gray-200/80">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">Collaboration Models</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a] tracking-tight">
                    Three Ways We Partner With Organizations
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="rounded-2xl bg-white p-8 border border-gray-200 shadow-sm hover:border-[#00ff88] transition flex flex-col justify-between">
                    <div>
                        <div class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800 mb-4">
                            TRACK 01
                        </div>
                        <h3 class="text-xl font-bold text-[#0c1f3a] mb-3">Bespoke Software Co-Creation</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            For forward-looking institutions, corporate enterprises, and startups requiring a dependable software engineering team. We architect, build, and deploy your custom system with long-term SLA maintenance.
                        </p>
                    </div>
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <span class="text-xs text-gray-500 font-medium">&check; Full-stack architecture &amp; code ownership</span><br>
                        <span class="text-xs text-gray-500 font-medium">&check; Transparent, milestone-based delivery</span>
                    </div>
                </div>

                <div class="rounded-2xl bg-white p-8 border border-gray-200 shadow-sm hover:border-[#00ff88] transition flex flex-col justify-between">
                    <div>
                        <div class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-800 mb-4">
                            TRACK 02
                        </div>
                        <h3 class="text-xl font-bold text-[#0c1f3a] mb-3">Regional Distribution &amp; Resellers</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            For IT consultants, educational secretaries, and regional tech advisors. Deploy ExtremeSolutions proprietary software (ExtremeSMS, ESPass) to your existing institutional networks with recurring revenue shares.
                        </p>
                    </div>
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <span class="text-xs text-gray-500 font-medium">&check; Attractive recurring commission structure</span><br>
                        <span class="text-xs text-gray-500 font-medium">&check; Dedicated technical onboarding support</span>
                    </div>
                </div>

                <div class="rounded-2xl bg-white p-8 border border-gray-200 shadow-sm hover:border-[#00ff88] transition flex flex-col justify-between">
                    <div>
                        <div class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-purple-100 text-purple-800 mb-4">
                            TRACK 03
                        </div>
                        <h3 class="text-xl font-bold text-[#0c1f3a] mb-3">Institutional &amp; Growth Syndicates</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            For angel syndicates and strategic institutional partners co-investing in foundational software infrastructure in high-growth emerging markets.
                        </p>
                    </div>
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <span class="text-xs text-gray-500 font-medium">&check; High-barrier defensible operational moats</span><br>
                        <span class="text-xs text-gray-500 font-medium">&check; Revenue-positive unit economics</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Active Sector Deployment Spotlight: ExtremeSMS (Secondary Education) -->
    <section id="school-scope" class="bg-[#0c1f3a] text-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-[#00ff88]/10 text-[#00ff88] border border-[#00ff88]/30">
                    ACTIVE SECTOR DEPLOYMENT &bull; SECONDARY EDUCATION (JSS1 &ndash; SS3)
                </span>
                <h2 class="mt-4 text-3xl sm:text-4xl font-bold text-white tracking-tight">
                    ExtremeSMS &mdash; Secondary School Operating System
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
                <p class="mt-4 text-sm sm:text-base text-white/75 leading-relaxed">
                    School management systems are one scope out of what ExtremeSolutions builds &mdash; but it is one of our most vital, active frontline deployments across Nigeria.
                </p>
            </div>

            <!-- The Three Pillars of SMS -->
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto mb-12">
                <div class="rounded-2xl bg-white/5 border border-white/10 p-8 hover:border-[#00ff88]/40 transition">
                    <div class="w-10 h-10 rounded-lg bg-[#00ff88] text-[#0a192f] font-bold text-sm flex items-center justify-center mb-4">
                        01
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">12-Second Broadsheets</h3>
                    <p class="text-xs sm:text-sm text-white/70 leading-relaxed">
                        Teachers input continuous assessments into streamlined ledgers. The relational engine calculates term broadsheets, averages, and ranks in 12 seconds with zero mathematical error.
                    </p>
                </div>

                <div class="rounded-2xl bg-white/5 border border-white/10 p-8 hover:border-[#00ff88]/40 transition">
                    <div class="w-10 h-10 rounded-lg bg-[#00ff88] text-[#0a192f] font-bold text-sm flex items-center justify-center mb-4">
                        02
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Zero-Leakage Tuition Audit</h3>
                    <p class="text-xs sm:text-sm text-white/70 leading-relaxed">
                        Reconciles bank deposits directly to student admission IDs. Digital exam clearance cards eliminate revenue leakage and recover 100% of outstanding school fees before exam hall entry.
                    </p>
                </div>

                <div class="rounded-2xl bg-white/5 border border-white/10 p-8 hover:border-[#00ff88]/40 transition">
                    <div class="w-10 h-10 rounded-lg bg-[#00ff88] text-[#0a192f] font-bold text-sm flex items-center justify-center mb-4">
                        03
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Offline CBT Examination Matrix</h3>
                    <p class="text-xs sm:text-sm text-white/70 leading-relaxed">
                        Runs locally over the school computer lab LAN without requiring internet connectivity during exams. Daily practice eliminates candidate keyboard anxiety before national JAMB UTME tests.
                    </p>
                </div>
            </div>

            <!-- The 48-Hour On-Ground Assisted Deployment Taskforce -->
            <div class="max-w-4xl mx-auto bg-white/10 border border-white/15 rounded-2xl p-6 sm:p-8">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
                    <div>
                        <div class="text-xs font-mono font-bold text-[#00ff88] uppercase">The On-Ground Guarantee</div>
                        <h4 class="text-lg font-bold text-white mt-1">48-Hour Assisted Deployment Taskforce</h4>
                        <p class="text-xs sm:text-sm text-white/75 mt-1 leading-relaxed max-w-xl">
                            We don't abandon schools to figure out software alone. Our field engineers physically deploy to the secondary school compound for 48 hours to audit hardware, migrate student records, and train teachers on site.
                        </p>
                    </div>
                    <div class="flex flex-wrap items-center gap-3 shrink-0">
                        <a href="{{ $exportPdfUrl }}" target="_blank"
                           class="inline-flex items-center rounded-full bg-[#00ff88] px-5 py-2.5 text-xs font-bold text-[#0a192f] hover:bg-[#00e67a] transition-all">
                            Download Proposal PDF
                        </a>
                        <a href="https://sms.extremesolutions.com.ng" target="_blank"
                           class="rounded-full border border-white/20 bg-white/5 px-5 py-2.5 text-xs font-medium text-white hover:bg-white/15 transition-all">
                            Live SMS Portal &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Direct Leadership Channels -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">Connect Directly</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a]">
                    Start a Partnership Discussion
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="rounded-2xl border border-gray-200 p-8 text-center hover:border-emerald-500 transition">
                    <div class="w-12 h-12 mx-auto rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.203c.043.071.043.419-.101.824z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a]">WhatsApp Executive Line</h3>
                    <p class="text-xs text-gray-500 mt-1">Direct communication with leadership</p>
                    <div class="mt-4 text-sm font-bold text-gray-900">+234 905 258 5622</div>
                    <a href="https://wa.me/2349052585622?text={{ urlencode('Hello ExtremeSolutions Leadership, I am reaching out to discuss a strategic partnership.') }}"
                       target="_blank" class="mt-4 inline-block text-xs font-bold text-emerald-600 hover:underline">
                        Open Chat &rarr;
                    </a>
                </div>

                <div class="rounded-2xl border border-gray-200 p-8 text-center hover:border-emerald-500 transition">
                    <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a]">Institutional Proposals</h3>
                    <p class="text-xs text-gray-500 mt-1">Submit formal partner documentation</p>
                    <div class="mt-4 text-sm font-bold text-gray-900">info@extremesolutions.com.ng</div>
                    <a href="mailto:info@extremesolutions.com.ng" class="mt-4 inline-block text-xs font-bold text-emerald-600 hover:underline">
                        Email Desk &rarr;
                    </a>
                </div>

                <div class="rounded-2xl border border-gray-200 p-8 text-center hover:border-emerald-500 transition">
                    <div class="w-12 h-12 mx-auto rounded-full bg-purple-50 text-purple-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a]">Direct Founder Call</h3>
                    <p class="text-xs text-gray-500 mt-1">With Samuel Ekunyan, Principal Architect</p>
                    <div class="mt-4 text-sm font-bold text-gray-900">30-Min Strategy Session</div>
                    <a href="https://cal.com/samuel-ekunyan" target="_blank" class="mt-4 inline-block text-xs font-bold text-emerald-600 hover:underline">
                        Schedule Call &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Bottom Brand Callout Surface -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white py-16 md:py-20 text-center">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="relative z-10 mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-4xl font-bold tracking-tight text-white">
                Building Digital Systems That Last
            </h2>
            <p class="mt-4 text-sm sm:text-base text-white/70 max-w-xl mx-auto leading-relaxed">
                Join forward-thinking institutions and visionary leaders leveraging ExtremeSolutions software architectures.
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
