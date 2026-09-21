@extends('layouts.app')

@section('title', 'Partnership & Institutional Collaboration | ExtremeSolutions')
@section('description', 'Partner with ExtremeSolutions: Enterprise software co-creation, regional technology distribution, and our active secondary school infrastructure initiative.')

@section('meta_robots')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
<div class="bg-zinc-50 min-h-screen py-10 lg:py-16 text-zinc-900 selection:bg-[#00ff88]/20 selection:text-[#0c1f3a]">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Top Status & Action Bar -->
        <div class="mb-8 flex flex-wrap items-center justify-between gap-4 bg-white border border-zinc-200 p-4 rounded-xl shadow-xs">
            <div class="flex items-center space-x-3">
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-blue-100 text-blue-800">
                    <span class="w-1.5 h-1.5 mr-1.5 rounded-full bg-blue-600"></span>
                    Partnership Portal
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
                    Download Partner Prospectus (PDF)
                </a>
                <a href="https://cal.com/samuel-ekunyan" target="_blank"
                   class="inline-flex items-center px-3.5 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg text-xs transition shadow-xs">
                    Schedule Partner Call
                </a>
            </div>
        </div>

        <!-- Main Partner Document Card -->
        <div class="bg-white border border-zinc-200 rounded-2xl p-6 sm:p-10 lg:p-12 shadow-sm">

            <!-- Letterhead -->
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
                        <div>INSTITUTIONAL PARTNERSHIP FRAMEWORK</div>
                        <div>ISSUED: <span class="text-zinc-800 font-semibold">{{ $dateStr }}</span></div>
                        <div>REF: <span class="text-zinc-800 font-semibold">{{ $refCode }}</span></div>
                    </div>
                </div>
            </div>

            <!-- Introduction: Who We Are & The ExtremeSolutions Standard -->
            <div class="mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">Enterprise Technology Partner</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-[#0c1f3a] mt-1 tracking-tight">
                    Engineering Scalable Platforms &amp; Dependable Digital Infrastructure
                </h2>
                <p class="mt-4 text-sm sm:text-base leading-relaxed text-zinc-600 max-w-3xl">
                    ExtremeSolutions is a software engineering company. We design, engineer, and deploy high-performance software systems for growing businesses, institutions, and visionary founders. We solve complex operational and computational bottlenecks with clean code, resilient architectures, and long-term technical stewardship.
                </p>
                <p class="mt-3 text-sm sm:text-base leading-relaxed text-zinc-600 max-w-3xl">
                    From high-throughput event commerce engines and automated school operating systems to custom enterprise backends and workflow automation, our engineering handles millions of interactions reliably.
                </p>
            </div>

            <!-- Three Partnership Tracks -->
            <div class="mb-12">
                <h3 class="text-sm font-bold uppercase tracking-wider text-zinc-400 font-mono mb-4">
                    01 // How We Partner With Organizations
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div class="border border-zinc-200 rounded-xl p-5 bg-zinc-50 hover:border-zinc-300 transition">
                        <div class="w-8 h-8 rounded-lg bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-xs mb-3">
                            A
                        </div>
                        <h4 class="text-base font-bold text-[#0c1f3a]">Bespoke Software Co-Creation</h4>
                        <p class="text-xs text-zinc-600 mt-2 leading-relaxed">
                            For enterprises, fintechs, and institutions requiring custom mobile apps, API ecosystems, internal operational engines, or cloud modernization. We serve as your full-stack engineering team from design to launch.
                        </p>
                    </div>

                    <div class="border border-zinc-200 rounded-xl p-5 bg-zinc-50 hover:border-zinc-300 transition">
                        <div class="w-8 h-8 rounded-lg bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-xs mb-3">
                            B
                        </div>
                        <h4 class="text-base font-bold text-[#0c1f3a]">Regional Distribution &amp; Reselling</h4>
                        <p class="text-xs text-zinc-600 mt-2 leading-relaxed">
                            For consultants, education secretaries, and regional tech advisors who deploy ExtremeSolutions proprietary software (such as ExtremeSMS and ESPass) to their client networks with attractive recurring revenue models.
                        </p>
                    </div>

                    <div class="border border-zinc-200 rounded-xl p-5 bg-zinc-50 hover:border-zinc-300 transition">
                        <div class="w-8 h-8 rounded-lg bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-xs mb-3">
                            C
                        </div>
                        <h4 class="text-base font-bold text-[#0c1f3a]">Institutional &amp; Strategic Syndicates</h4>
                        <p class="text-xs text-zinc-600 mt-2 leading-relaxed">
                            For angel syndicates and institutional investors backing our foundational products across education and commerce. We build revenue-positive, defensible software moats in high-growth African markets.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Active Deployment Spotlight: School Management System -->
            <div class="mb-12 bg-zinc-900 text-white rounded-2xl p-6 sm:p-8 border border-zinc-800">
                <div class="flex items-center space-x-2 text-[#00ff88] text-xs font-mono mb-2">
                    <span class="inline-block w-2 h-2 rounded-full bg-[#00ff88] animate-pulse"></span>
                    <span>ACTIVE PRODUCT SCOPE &bull; SECONDARY EDUCATION</span>
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-white tracking-tight">
                    Active Deployment Focus: Secondary School Operating System (ExtremeSMS)
                </h3>
                <p class="text-xs sm:text-sm text-zinc-300 mt-2 leading-relaxed max-w-3xl">
                    While ExtremeSolutions engineers software across multiple industries, one of our most vital active scopes is <strong>ExtremeSMS (sms.extremesolutions.com.ng)</strong> &mdash; an operating system designed specifically to resolve systemic bottlenecks in secondary schools (JSS1&ndash;SS3):
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 my-6">
                    <div class="p-4 rounded-xl bg-zinc-800/80 border border-zinc-700">
                        <div class="text-xs font-mono text-[#00ff88] font-bold">PILLAR 01</div>
                        <h4 class="text-sm font-bold text-white mt-1">12-Second Broadsheets</h4>
                        <p class="text-xs text-zinc-400 mt-1 leading-normal">
                            Automated continuous assessment calculations, eliminating weeks of manual teacher paperwork and computation errors.
                        </p>
                    </div>
                    <div class="p-4 rounded-xl bg-zinc-800/80 border border-zinc-700">
                        <div class="text-xs font-mono text-[#00ff88] font-bold">PILLAR 02</div>
                        <h4 class="text-sm font-bold text-white mt-1">Zero-Leakage Tuition Audit</h4>
                        <p class="text-xs text-zinc-400 mt-1 leading-normal">
                            Digital examination clearance cards linked directly to reconciled bank payments, ensuring 100% fee recovery before exams.
                        </p>
                    </div>
                    <div class="p-4 rounded-xl bg-zinc-800/80 border border-zinc-700">
                        <div class="text-xs font-mono text-[#00ff88] font-bold">PILLAR 03</div>
                        <h4 class="text-sm font-bold text-white mt-1">Offline-Resilient CBT</h4>
                        <p class="text-xs text-zinc-400 mt-1 leading-normal">
                            Daily computerized testing across school LANs. Students build natural keyboard fluency to conquer high-stakes JAMB UTME exams.
                        </p>
                    </div>
                </div>

                <div class="bg-zinc-800/50 border border-zinc-700/80 rounded-xl p-4 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div>
                        <div class="text-xs font-mono uppercase text-[#00ff88] font-bold">The 48-Hour On-Ground Deployment Taskforce</div>
                        <p class="text-xs text-zinc-300 mt-0.5">
                            We don't just send software links. Our field engineering team spends 48 hours on-site at your school configuring the network, migrating data, and training your staff.
                        </p>
                    </div>
                    <div class="flex items-center space-x-2 shrink-0">
                        <a href="{{ $exportPdfUrl }}" target="_blank" class="px-3 py-1.5 bg-white hover:bg-zinc-100 text-zinc-950 font-bold rounded-lg text-xs transition">
                            Download Proposal PDF
                        </a>
                        <a href="https://sms.extremesolutions.com.ng" target="_blank" class="px-3 py-1.5 bg-zinc-700 hover:bg-zinc-600 text-white font-medium rounded-lg text-xs transition">
                            Visit SMS Portal &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- Start a Partnership Discussion -->
            <div class="border-t border-zinc-200 pt-8">
                <h3 class="text-sm font-bold uppercase tracking-wider text-zinc-400 font-mono mb-4">
                    02 // Connect with our Leadership
                </h3>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="p-4 rounded-xl border border-zinc-200 bg-zinc-50">
                        <div class="text-xs text-zinc-500 font-medium">Business Development</div>
                        <div class="text-sm font-bold text-zinc-900 mt-1">+234 905 258 5622</div>
                        <a href="https://wa.me/2349052585622?text={{ urlencode('Hello, I would like to discuss a strategic partnership with ExtremeSolutions.') }}"
                           target="_blank" class="text-xs font-semibold text-emerald-600 hover:underline mt-2 inline-block">
                            WhatsApp Executive Line &rarr;
                        </a>
                    </div>

                    <div class="p-4 rounded-xl border border-zinc-200 bg-zinc-50">
                        <div class="text-xs text-zinc-500 font-medium">Institutional Inquiries</div>
                        <div class="text-sm font-bold text-zinc-900 mt-1">info@extremesolutions.com.ng</div>
                        <a href="mailto:info@extremesolutions.com.ng" class="text-xs font-semibold text-emerald-600 hover:underline mt-2 inline-block">
                            Send Proposal Brief &rarr;
                        </a>
                    </div>

                    <div class="p-4 rounded-xl border border-zinc-200 bg-zinc-50">
                        <div class="text-xs text-zinc-500 font-medium">Strategic Briefing</div>
                        <div class="text-sm font-bold text-zinc-900 mt-1">Direct Founder Call</div>
                        <a href="https://cal.com/samuel-ekunyan" target="_blank" class="text-xs font-semibold text-emerald-600 hover:underline mt-2 inline-block">
                            Book with Samuel Ekunyan &rarr;
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sign-off -->
            <div class="mt-12 pt-6 border-t border-zinc-200 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                <div>
                    <div class="text-sm font-bold text-[#0c1f3a] font-mono">EXTREMESOLUTIONS</div>
                    <p class="text-xs text-zinc-500">Software Engineering &bull; Products &bull; Enterprise Solutions</p>
                    <p class="text-xs text-zinc-400">RC / Registered Operating Entity &bull; extremesolutions.com.ng</p>
                </div>
                <div class="text-left sm:text-right font-mono text-xs text-zinc-400">
                    <div>ENTERPRISE PARTNERSHIP STANDARD</div>
                    <div>BUILDING DIGITAL SYSTEMS THAT LAST</div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
