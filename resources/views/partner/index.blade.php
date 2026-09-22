@extends('layouts.app')

@section('title', 'Partner With ExtremeSolutions | Enterprise Alliances')
@section('description', 'Partner with ExtremeSolutions: Building modern digital infrastructure, custom enterprise platforms, and applied AI systems for African institutions and businesses.')

@section('content')
    <!-- 1. Hero Surface (Deep Obsidian with Ambient Grid & Accents) -->
    <section class="relative overflow-hidden bg-[#071326] text-white pt-20 pb-24 md:pt-28 md:pb-32 border-b border-white/10">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b12_1px,transparent_1px),linear-gradient(to_bottom,#1e293b12_1px,transparent_1px)] bg-[size:32px_32px] opacity-40" aria-hidden="true"></div>
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[400px] bg-gradient-to-b from-[#00ff88]/15 via-[#1e3a5f]/30 to-transparent blur-3xl pointer-events-none" aria-hidden="true"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 rounded-full border border-emerald-400/30 bg-emerald-500/10 px-4 py-1.5 text-xs font-semibold text-emerald-400 mb-8 tracking-wide">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span>EXTREMESOLUTIONS &bull; PARTNER ECOSYSTEM</span>
            </div>

            <h1 class="mx-auto max-w-5xl text-3xl sm:text-5xl lg:text-[62px] tracking-tight leading-[1.12]">
                <span class="font-light text-white/90">Co-Engineer, Distribute &amp; Scale</span><br/>
                <span class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-white via-slate-100 to-emerald-400">
                    Mission-Critical Digital Systems
                </span>
            </h1>

            <p class="mx-auto mt-6 max-w-3xl text-base sm:text-lg leading-relaxed text-slate-300">
                ExtremeSolutions is a software engineering company building modern digital infrastructure, custom enterprise platforms, and applied AI systems for African institutions and businesses. We partner with forward-thinking leaders, systems integrators, and enterprises to engineer and deploy resilient technology that replaces fragile manual processes.
            </p>

            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="#school-scope"
                   class="inline-flex items-center rounded-full bg-[#00ff88] px-8 py-4 text-sm font-bold text-[#071326] hover:bg-[#00e67a] transition-all shadow-xl hover:-translate-y-0.5">
                    Check School Partnership Scope &darr;
                </a>
                <a href="https://wa.me/2349052585622?text={{ urlencode('Hello ExtremeSolutions Leadership, I would like to discuss an institutional partnership.') }}"
                   target="_blank"
                   class="rounded-full border border-white/20 bg-white/5 backdrop-blur-sm px-7 py-4 text-sm font-medium text-white hover:bg-white/10 transition-all">
                    Contact Partnerships Desk
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
                    <div class="text-xs text-slate-400 mt-1 uppercase font-semibold tracking-wider">Critical Escalation SLA</div>
                </div>
                <div class="p-4 rounded-xl bg-white/[0.03] border border-white/5">
                    <div class="text-2xl sm:text-3xl font-extrabold text-white font-mono">Direct</div>
                    <div class="text-xs text-slate-400 mt-1 uppercase font-semibold tracking-wider">Lead Architect Alignment</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. PROMINENT SPOTLIGHT: Check Our School Partnership Scope -->
    <section id="school-scope" class="bg-white py-16 md:py-24 border-b border-gray-200">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl bg-gradient-to-br from-[#0c1f3a] via-[#11284d] to-[#0c1f3a] border border-emerald-500/30 p-8 sm:p-12 text-white shadow-2xl relative overflow-hidden">
                <div class="absolute -top-24 -right-24 w-64 h-64 bg-[#00ff88]/15 rounded-full blur-3xl pointer-events-none"></div>

                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
                    <div class="max-w-2xl">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-emerald-400/10 text-emerald-400 border border-emerald-400/20 mb-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <span>ACTIVE SCHOOL PARTNERSHIP SCOPE &bull; SECONDARY EDUCATION</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-bold text-white tracking-tight">
                            ExtremeSMS: Secondary School Operating System
                        </h3>
                        <p class="mt-3 text-sm sm:text-base text-slate-300 leading-relaxed">
                            Looking specifically to partner on or deploy our education infrastructure for secondary schools? ExtremeSMS unifies 12-second automated continuous assessment broadsheets, 100% tuition fee recovery with digital exam gate passes, and daily offline CBT examination terminals for secondary students (JSS1&ndash;SS3) &mdash; backed by our dedicated 48-Hour Assisted On-Ground Deployment Taskforce.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row lg:flex-col gap-3 shrink-0 w-full lg:w-auto">
                        <a href="{{ $schoolProposalUrl }}"
                           class="inline-flex items-center justify-center rounded-xl bg-[#00ff88] px-7 py-3.5 text-sm font-bold text-[#0c1f3a] hover:bg-[#00e67a] transition-all shadow-md">
                            View School Partnership Proposal &rarr;
                        </a>
                        <a href="https://sms.extremesolutions.com.ng" target="_blank"
                           class="inline-flex items-center justify-center rounded-xl border border-white/20 bg-white/10 px-6 py-3 text-sm font-medium text-white hover:bg-white/20 transition-all">
                            Visit Live SMS Portal &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Three World-Class Ecosystem Tracks -->
    <section class="bg-[#f8fafc] py-20 md:py-28 border-b border-gray-200">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 font-mono">Ecosystem Tracks</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a] tracking-tight">
                    How We Collaborate With Modern Leaders
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed">
                    Whether you are an enterprise consultancy, regional technology advisor, or co-innovation partner, we structure relationships that drive long-term commercial value and technical dependability.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Track 01 -->
                <div class="rounded-2xl bg-white p-8 sm:p-10 border border-slate-200 hover:border-emerald-500 hover:shadow-xl transition-all flex flex-col justify-between group">
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
                <div class="rounded-2xl bg-white p-8 sm:p-10 border border-slate-200 hover:border-emerald-500 hover:shadow-xl transition-all flex flex-col justify-between group">
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
                <div class="rounded-2xl bg-white p-8 sm:p-10 border border-slate-200 hover:border-emerald-500 hover:shadow-xl transition-all flex flex-col justify-between group">
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

    <!-- 4. Direct Leadership Channels -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 font-mono">Connect Directly</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a] tracking-tight">
                    Start a Partnership Dialogue
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="rounded-2xl border border-slate-200 p-8 text-center hover:border-emerald-500 hover:shadow-lg transition">
                    <div class="w-12 h-12 mx-auto rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.203c.043.071.043.419-.101.824z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a]">WhatsApp Partner Desk</h3>
                    <p class="text-xs text-gray-500 mt-1">Instant communication with leadership</p>
                    <div class="mt-4 text-sm font-bold text-gray-900">+234 803 637 5292</div>
                    <a href="https://wa.me/2348036375292?text={{ urlencode('Hello ExtremeSolutions Leadership, I am reaching out regarding a strategic partnership.') }}"
                       target="_blank" class="mt-4 inline-block text-xs font-bold text-emerald-600 hover:underline">
                        Open Executive Chat &rarr;
                    </a>
                </div>

                <div class="rounded-2xl border border-slate-200 p-8 text-center hover:border-emerald-500 hover:shadow-lg transition">
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

                <div class="rounded-2xl border border-slate-200 p-8 text-center hover:border-emerald-500 hover:shadow-lg transition">
                    <div class="w-12 h-12 mx-auto rounded-full bg-purple-50 text-purple-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a]">Strategy Session</h3>
                    <p class="text-xs text-gray-500 mt-1">With Samuel Ekunyan, Principal Architect</p>
                    <div class="mt-4 text-sm font-bold text-gray-900">30-Min Executive Call</div>
                    <a href="{{ $calBookingUrl }}" target="_blank" class="mt-4 inline-block text-xs font-bold text-emerald-600 hover:underline">
                        Schedule Call &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
