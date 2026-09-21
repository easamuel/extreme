@extends('layouts.app')

@section('title', 'Global Partner Network & Alliances | ExtremeSolutions')
@section('description', 'Join the ExtremeSolutions Partner Network: Systems integrator alliances, enterprise software co-creation, and technology distribution frameworks.')

@section('meta_robots')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
    <!-- 1. World-Class Hero Surface (Deep Obsidian & Navy with Radial Glow & Subtle Grid) -->
    <section class="relative overflow-hidden bg-[#071326] text-white pt-20 pb-24 md:pt-28 md:pb-32 border-b border-white/10">
        <!-- Ambient Grid Background & Glow -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b12_1px,transparent_1px),linear-gradient(to_bottom,#1e293b12_1px,transparent_1px)] bg-[size:32px_32px] opacity-40" aria-hidden="true"></div>
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[400px] bg-gradient-to-b from-[#00ff88]/15 via-[#1e3a5f]/30 to-transparent blur-3xl pointer-events-none" aria-hidden="true"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <!-- Institutional Partner Badge -->
            <div class="inline-flex items-center gap-2 rounded-full border border-emerald-400/30 bg-emerald-500/10 px-4 py-1.5 text-xs font-semibold text-emerald-400 mb-8 tracking-wide">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span>EXTREMESOLUTIONS &bull; GLOBAL PARTNER ALLIANCES</span>
            </div>

            <!-- Two-Tone Headline -->
            <h1 class="mx-auto max-w-5xl text-3xl sm:text-5xl lg:text-[62px] tracking-tight leading-[1.12]">
                <span class="font-light text-white/90">Co-Engineer, Distribute &amp; Scale</span><br/>
                <span class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-white via-slate-100 to-emerald-400">
                    Mission-Critical Digital Systems
                </span>
            </h1>

            <!-- Subtitle -->
            <p class="mx-auto mt-6 max-w-2xl text-base sm:text-lg leading-relaxed text-slate-300">
                Partner with ExtremeSolutions. We collaborate with systems integrators, management consultants, regional advisors, and technology innovators to deploy dependable custom software, automated cloud workflows, and high-performance transactional engines.
            </p>

            <!-- Action CTAs -->
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="#apply"
                   class="inline-flex items-center rounded-full bg-[#00ff88] px-8 py-4 text-sm font-bold text-[#071326] hover:bg-[#00e67a] transition-all shadow-xl hover:-translate-y-0.5">
                    Become a Partner &rarr;
                </a>
                <a href="{{ $exportPdfUrl }}" target="_blank"
                   class="rounded-full border border-white/20 bg-white/5 backdrop-blur-sm px-7 py-4 text-sm font-medium text-white hover:bg-white/10 transition-all inline-flex items-center">
                    <svg class="w-4 h-4 mr-2 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download Partner Prospectus (PDF)
                </a>
                <a href="https://cal.com/samuel-ekunyan" target="_blank"
                   class="rounded-full border border-white/10 bg-transparent px-6 py-4 text-sm font-medium text-slate-300 hover:text-white hover:bg-white/5 transition-all">
                    Schedule Executive Briefing
                </a>
            </div>

            <!-- Key Metrics Bar -->
            <div class="mt-16 pt-10 border-t border-white/10 grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto text-left">
                <div class="p-4 rounded-xl bg-white/[0.03] border border-white/5">
                    <div class="text-2xl sm:text-3xl font-extrabold text-white font-mono">99.9%</div>
                    <div class="text-xs text-slate-400 mt-1 uppercase font-semibold tracking-wider">Uptime Reliability SLA</div>
                </div>
                <div class="p-4 rounded-xl bg-white/[0.03] border border-white/5">
                    <div class="text-2xl sm:text-3xl font-extrabold text-emerald-400 font-mono">Up to 25%</div>
                    <div class="text-xs text-slate-400 mt-1 uppercase font-semibold tracking-wider">Recurring Partner Margins</div>
                </div>
                <div class="p-4 rounded-xl bg-white/[0.03] border border-white/5">
                    <div class="text-2xl sm:text-3xl font-extrabold text-white font-mono">&lt; 60 Min</div>
                    <div class="text-xs text-slate-400 mt-1 uppercase font-semibold tracking-wider">Critical Incident SLA</div>
                </div>
                <div class="p-4 rounded-xl bg-white/[0.03] border border-white/5">
                    <div class="text-2xl sm:text-3xl font-extrabold text-white font-mono">Direct</div>
                    <div class="text-xs text-slate-400 mt-1 uppercase font-semibold tracking-wider">Lead Architect Alignment</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Three World-Class Partnership Tracks -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 font-mono">Ecosystem Tracks</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a] tracking-tight">
                    How We Collaborate With Modern Leaders
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed">
                    Whether you are an enterprise consultancy, technology advisor, or co-innovation partner, we structure partnerships that drive long-term commercial value and operational dependability.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Track 01 -->
                <div class="rounded-2xl bg-[#f8fafc] p-8 sm:p-10 border border-slate-200 hover:border-emerald-500 hover:shadow-xl transition-all flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-[#0c1f3a] text-emerald-400 flex items-center justify-center font-bold text-base mb-6 group-hover:scale-110 transition-transform">
                            01
                        </div>
                        <span class="text-xs font-bold uppercase tracking-widest text-emerald-600 font-mono">Advisory &amp; Implementation</span>
                        <h3 class="text-2xl font-bold text-[#0c1f3a] mt-1 mb-3">Systems Integrators &amp; Consultants</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Bring enterprise-grade software to your client base without the massive cost of building and maintaining an internal engineering team. You manage client strategy; we engineer the platforms, manage cloud infrastructure, and guarantee uptime.
                        </p>
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-200/80 space-y-2 text-xs text-slate-500">
                        <div class="flex items-center"><span class="text-emerald-500 font-bold mr-2">&check;</span> Attractive recurring software licensing commissions</div>
                        <div class="flex items-center"><span class="text-emerald-500 font-bold mr-2">&check;</span> Joint RFP pitch support &amp; architecture review</div>
                        <div class="flex items-center"><span class="text-emerald-500 font-bold mr-2">&check;</span> Co-branded client documentation &amp; SLAs</div>
                    </div>
                </div>

                <!-- Track 02 -->
                <div class="rounded-2xl bg-[#f8fafc] p-8 sm:p-10 border border-slate-200 hover:border-emerald-500 hover:shadow-xl transition-all flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-[#0c1f3a] text-emerald-400 flex items-center justify-center font-bold text-base mb-6 group-hover:scale-110 transition-transform">
                            02
                        </div>
                        <span class="text-xs font-bold uppercase tracking-widest text-emerald-600 font-mono">Co-Engineering &amp; Ventures</span>
                        <h3 class="text-2xl font-bold text-[#0c1f3a] mt-1 mb-3">Enterprise Co-Innovation</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            For corporations, high-growth scale-ups, and innovators seeking to launch proprietary platforms or modernize legacy bottlenecks. Our senior engineering laboratory acts as your full-stack technical partner from architecture to deployment.
                        </p>
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-200/80 space-y-2 text-xs text-slate-500">
                        <div class="flex items-center"><span class="text-emerald-500 font-bold mr-2">&check;</span> Bespoke high-throughput backend architecture</div>
                        <div class="flex items-center"><span class="text-emerald-500 font-bold mr-2">&check;</span> Shared intellectual property &amp; code ownership</div>
                        <div class="flex items-center"><span class="text-emerald-500 font-bold mr-2">&check;</span> Dedicated ongoing DevOps &amp; scaling roadmap</div>
                    </div>
                </div>

                <!-- Track 03 -->
                <div class="rounded-2xl bg-[#f8fafc] p-8 sm:p-10 border border-slate-200 hover:border-emerald-500 hover:shadow-xl transition-all flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-[#0c1f3a] text-emerald-400 flex items-center justify-center font-bold text-base mb-6 group-hover:scale-110 transition-transform">
                            03
                        </div>
                        <span class="text-xs font-bold uppercase tracking-widest text-emerald-600 font-mono">API &amp; Cloud Ecosystem</span>
                        <h3 class="text-2xl font-bold text-[#0c1f3a] mt-1 mb-3">Technology &amp; API Alliances</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Integrate your payment gateways, identity verification systems, telecommunication APIs, or cloud infrastructure into ExtremeSolutions platforms to reach institutional and enterprise end-users with native, friction-free protocols.
                        </p>
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-200/80 space-y-2 text-xs text-slate-500">
                        <div class="flex items-center"><span class="text-emerald-500 font-bold mr-2">&check;</span> Bi-directional API integration support</div>
                        <div class="flex items-center"><span class="text-emerald-500 font-bold mr-2">&check;</span> Dedicated developer sandboxes &amp; webhooks</div>
                        <div class="flex items-center"><span class="text-emerald-500 font-bold mr-2">&check;</span> Joint go-to-market case studies &amp; promotion</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. What We Bring to the Table (Enterprise Value Proposition) -->
    <section class="bg-[#f8fafc] py-20 md:py-28 border-y border-slate-200/80">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 font-mono">The ExtremeSolutions Advantage</span>
                    <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a] tracking-tight">
                        Engineered for High Stakes. Designed to Last.
                    </h2>
                    <div class="w-16 h-1 bg-[#00ff88] mt-4 mb-6"></div>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed mb-6">
                        Too much enterprise technology falls apart under network congestion, electrical blackouts, or scaling bottlenecks. We engineer our systems from the ground up for resilience.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm shrink-0 mr-3 mt-0.5">
                                &check;
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-[#0c1f3a]">Battle-Tested in Live Production</h4>
                                <p class="text-xs text-gray-600 mt-0.5">We operate our own commercial platforms handling thousands of transactions daily. We never use clients as experimental guinea pigs.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm shrink-0 mr-3 mt-0.5">
                                &check;
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-[#0c1f3a]">Offline-First Edge Resilience</h4>
                                <p class="text-xs text-gray-600 mt-0.5">Our software architecture ensures critical operations (gate verification, examinations, data entry) function smoothly even during total ISP or cellular blackouts.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center font-bold text-sm shrink-0 mr-3 mt-0.5">
                                &check;
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-[#0c1f3a]">Commercial Integrity &amp; SLA Discipline</h4>
                                <p class="text-xs text-gray-600 mt-0.5">Clean contracts, transparent margin payouts, non-circumvention agreements, and guaranteed response SLAs for partner-referred accounts.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visual Metrics & Architecture Card -->
                <div class="rounded-2xl bg-[#0c1f3a] p-8 text-white border border-slate-800 shadow-2xl relative overflow-hidden">
                    <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-[#00ff88]/10 rounded-full blur-2xl"></div>
                    <div class="text-xs font-mono text-emerald-400 mb-2 uppercase tracking-widest font-bold">PRODUCTION TELEMETRY</div>
                    <h3 class="text-2xl font-bold text-white mb-4">Enterprise Engineering Benchmark</h3>
                    <p class="text-xs text-slate-300 leading-relaxed mb-6">
                        Real-world software built by ExtremeSolutions handles heavy concurrency, financial reconciliation, and cryptographic validation without fail:
                    </p>

                    <div class="grid grid-cols-2 gap-4 text-left">
                        <div class="p-4 rounded-xl bg-white/5 border border-white/10">
                            <div class="text-xl font-bold text-white font-mono">&lt; 150ms</div>
                            <div class="text-[11px] text-slate-400 mt-1">NFC / QR Gate Verification Latency</div>
                        </div>
                        <div class="p-4 rounded-xl bg-white/5 border border-white/10">
                            <div class="text-xl font-bold text-emerald-400 font-mono">12 Seconds</div>
                            <div class="text-[11px] text-slate-400 mt-1">1,000+ Student Broadsheet Compilation</div>
                        </div>
                        <div class="p-4 rounded-xl bg-white/5 border border-white/10">
                            <div class="text-xl font-bold text-white font-mono">10,000+</div>
                            <div class="text-[11px] text-slate-400 mt-1">Concurrent Ticket Reqs / Minute</div>
                        </div>
                        <div class="p-4 rounded-xl bg-white/5 border border-white/10">
                            <div class="text-xl font-bold text-white font-mono">100%</div>
                            <div class="text-[11px] text-slate-400 mt-1">Offline LAN Exam Operation</div>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-white/10 text-center">
                        <a href="{{ route('discoveries.systems') }}" class="text-xs font-bold text-emerald-400 hover:text-emerald-300 inline-flex items-center">
                            Explore Systems Architecture Teardown &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. DEDICATED SPOTLIGHT BOX FOR SCHOOL MANAGEMENT SYSTEM (As Requested) -->
    <section class="bg-white py-16 md:py-24">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl bg-gradient-to-br from-[#0c1f3a] via-[#11284d] to-[#0c1f3a] border border-emerald-500/30 p-8 sm:p-12 text-white shadow-2xl relative overflow-hidden">
                <!-- Decorative Glow -->
                <div class="absolute -top-24 -right-24 w-64 h-64 bg-[#00ff88]/15 rounded-full blur-3xl pointer-events-none"></div>

                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
                    <div class="max-w-2xl">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-emerald-400/10 text-emerald-400 border border-emerald-400/20 mb-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <span>ACTIVE PRODUCT SCOPE &bull; SECONDARY EDUCATION</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-white tracking-tight">
                            ExtremeSMS: Secondary School Operating System
                        </h3>
                        <p class="mt-3 text-sm sm:text-base text-slate-300 leading-relaxed">
                            Looking specifically to partner on or deploy our education infrastructure? ExtremeSMS automates 12-second continuous assessment broadsheets, recovers 100% of school fees with digital exam clearance passes, and conducts daily offline CBT drills for secondary students (JSS1&ndash;SS3) &mdash; backed by our dedicated 48-Hour Assisted On-Ground Deployment Taskforce.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row lg:flex-col gap-3 shrink-0 w-full lg:w-auto">
                        <a href="https://sms.extremesolutions.com.ng" target="_blank"
                           class="inline-flex items-center justify-center rounded-xl bg-[#00ff88] px-6 py-3 text-sm font-bold text-[#0c1f3a] hover:bg-[#00e67a] transition-all shadow-md">
                            Visit Live School Platform &rarr;
                        </a>
                        <a href="{{ $exportPdfUrl }}" target="_blank"
                           class="inline-flex items-center justify-center rounded-xl border border-white/20 bg-white/10 px-6 py-3 text-sm font-medium text-white hover:bg-white/20 transition-all">
                            <svg class="w-4 h-4 mr-2 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                            </svg>
                            Download School Proposal (PDF)
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Partner Application & Leadership Contact Desk -->
    <section id="apply" class="bg-[#f8fafc] py-20 md:py-28 border-t border-slate-200/80">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 font-mono">Join the Ecosystem</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a] tracking-tight">
                    Start a Partnership Dialogue
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed">
                    Connect directly with our leadership. We respond swiftly to qualified systems integrators, technology advisors, and enterprise partners.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="rounded-2xl bg-white border border-slate-200 p-8 text-center hover:border-emerald-500 hover:shadow-lg transition">
                    <div class="w-12 h-12 mx-auto rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.203c.043.071.043.419-.101.824z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a]">WhatsApp Partner Desk</h3>
                    <p class="text-xs text-gray-500 mt-1">Instant communication with leadership</p>
                    <div class="mt-4 text-sm font-bold text-gray-900">+234 905 258 5622</div>
                    <a href="https://wa.me/2349052585622?text={{ urlencode('Hello ExtremeSolutions Leadership, I am reaching out regarding a strategic partnership.') }}"
                       target="_blank" class="mt-4 inline-block text-xs font-bold text-emerald-600 hover:underline">
                        Open Executive Chat &rarr;
                    </a>
                </div>

                <div class="rounded-2xl bg-white border border-slate-200 p-8 text-center hover:border-emerald-500 hover:shadow-lg transition">
                    <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a]">Institutional Proposals</h3>
                    <p class="text-xs text-gray-500 mt-1">Submit formal partner documentation</p>
                    <div class="mt-4 text-sm font-bold text-gray-900">info@extremesolutions.com.ng</div>
                    <a href="mailto:info@extremesolutions.com.ng" class="mt-4 inline-block text-xs font-bold text-emerald-600 hover:underline">
                        Send Brief &rarr;
                    </a>
                </div>

                <div class="rounded-2xl bg-white border border-slate-200 p-8 text-center hover:border-emerald-500 hover:shadow-lg transition">
                    <div class="w-12 h-12 mx-auto rounded-full bg-purple-50 text-purple-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a]">Strategy Session</h3>
                    <p class="text-xs text-gray-500 mt-1">With Samuel Ekunyan, Principal Architect</p>
                    <div class="mt-4 text-sm font-bold text-gray-900">30-Min Executive Call</div>
                    <a href="https://cal.com/samuel-ekunyan" target="_blank" class="mt-4 inline-block text-xs font-bold text-emerald-600 hover:underline">
                        Schedule Call &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Bottom Brand Callout Surface -->
    <section class="brand-surface relative overflow-hidden bg-[#071326] text-white py-16 md:py-20 text-center border-t border-white/10">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="relative z-10 mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-4xl font-bold tracking-tight text-white">
                Building Digital Systems That Last
            </h2>
            <p class="mt-4 text-sm sm:text-base text-slate-400 max-w-xl mx-auto leading-relaxed">
                Join forward-thinking enterprise advisors, systems integrators, and software pioneers partnering with ExtremeSolutions.
            </p>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="rounded-full bg-[#00ff88] px-8 py-3.5 text-sm font-bold text-[#071326] hover:bg-[#00e67a] transition-all shadow-lg">
                    Contact Partnerships Desk
                </a>
                <a href="{{ route('about') }}" class="rounded-full border border-white/20 bg-white/5 px-7 py-3.5 text-sm font-medium text-white hover:bg-white/10 transition-all">
                    About ExtremeSolutions
                </a>
            </div>
        </div>
    </section>
@endsection
