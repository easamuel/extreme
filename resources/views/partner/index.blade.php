@extends('layouts.app')

@section('title', 'Institutional Partnership & Deployment Proposal // ExtremeSolutions')
@section('description', 'Operational partnership proposal for private and mission secondary schools: 12-second broadsheets, zero-leakage tuition recovery, and offline CBT terminals.')

@section('meta_robots')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
<div class="bg-zinc-50 min-h-screen py-10 lg:py-16 text-zinc-900 selection:bg-zinc-900 selection:text-white"
     x-data="{
        proprietorInput: '{{ addslashes($proprietor) }}',
        schoolInput: '{{ addslashes($school) }}',
        copied: false,
        isExportingImg: false,
        baseUrl: '{{ route('partner.index') }}',
        get generatedUrl() {
            let url = new URL(this.baseUrl);
            if (this.proprietorInput.trim()) url.searchParams.set('proprietor', this.proprietorInput.trim());
            if (this.schoolInput.trim()) url.searchParams.set('school', this.schoolInput.trim());
            return url.toString();
        },
        get whatsappUrl() {
            const text = 'Operational Partnership Proposal // ExtremeSolutions\n\n' +
                '\"Write the vision and make it plain on tablets, that he may run that readeth it.\" — Habakkuk 2:2\n\n' +
                'Prepared exclusively for ' + (this.proprietorInput || 'Proprietor') + ' (' + (this.schoolInput || 'Secondary School') + '):\n' +
                'Review the 48-Hour Assisted Deployment Taskforce & CBT Infrastructure Model:\n' +
                this.generatedUrl;
            return 'https://api.whatsapp.com/send?text=' + encodeURIComponent(text);
        },
        copyLink() {
            navigator.clipboard.writeText(this.generatedUrl).then(() => {
                this.copied = true;
                setTimeout(() => { this.copied = false; }, 2500);
            });
        },
        exportImage() {
            this.isExportingImg = true;
            const target = document.getElementById('proposal-document');
            if (!target) return;

            const runCanvas = () => {
                window.html2canvas(target, {
                    scale: 2,
                    useCORS: true,
                    backgroundColor: '#ffffff'
                }).then(canvas => {
                    const link = document.createElement('a');
                    link.download = 'ExtremeSolutions-Proposal-{{ $refCode }}.png';
                    link.href = canvas.toDataURL('image/png');
                    link.click();
                    this.isExportingImg = false;
                }).catch(err => {
                    console.error('Canvas export error:', err);
                    this.isExportingImg = false;
                });
            };

            if (typeof window.html2canvas === 'undefined') {
                const script = document.createElement('script');
                script.src = 'https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js';
                script.onload = runCanvas;
                document.head.appendChild(script);
            } else {
                runCanvas();
            }
        }
     }">

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Action Bar -->
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3 bg-white border border-zinc-200 p-3.5 rounded-lg shadow-xs text-xs">
            <div class="flex items-center space-x-2 text-zinc-600 font-mono">
                <span class="inline-block w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span>PARTNER DISPATCH: <strong class="text-zinc-900">{{ $refCode }}</strong></span>
                <span class="text-zinc-300">|</span>
                <span>{{ $dateStr }}</span>
            </div>
            <div class="flex items-center space-x-2">
                <a href="{{ $exportPdfUrl }}" target="_blank"
                   class="inline-flex items-center px-3 py-1.5 bg-zinc-900 hover:bg-zinc-800 text-white font-medium rounded text-xs transition">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download Proposal PDF
                </a>
                <button @click="exportImage()" :disabled="isExportingImg"
                        class="inline-flex items-center px-3 py-1.5 bg-zinc-100 hover:bg-zinc-200 text-zinc-800 font-medium rounded text-xs transition">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-zinc-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span x-text="isExportingImg ? 'Rendering...' : 'Export PNG'"></span>
                </button>
                <a href="{{ $calBookingUrl }}" target="_blank"
                   class="inline-flex items-center px-3 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded text-xs transition">
                    Request On-Site Inspection
                </a>
            </div>
        </div>

        <!-- The Formal Proposal Document Container -->
        <article id="proposal-document" class="bg-white border border-zinc-200 rounded-xl p-6 sm:p-10 lg:p-12 shadow-sm font-sans">

            <!-- Document Letterhead -->
            <header class="border-b border-zinc-900 pb-6 mb-8">
                <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-4">
                    <div>
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('images/es-mark.png') }}" alt="ExtremeSolutions" class="h-9 w-auto">
                            <div>
                                <h1 class="text-xl font-bold tracking-tight text-zinc-950 font-mono">EXTREMESOLUTIONS</h1>
                                <p class="text-[11px] uppercase tracking-widest text-zinc-500 font-semibold">Institutional Systems Division</p>
                            </div>
                        </div>
                        <p class="mt-3 text-xs italic text-zinc-600 font-serif">
                            &ldquo;Write the vision and make it plain on tablets, that he may run that readeth it.&rdquo; &mdash; Habakkuk 2:2
                        </p>
                    </div>

                    <div class="text-left sm:text-right font-mono text-[11px] text-zinc-500 space-y-1">
                        <div><span class="inline-block px-2 py-0.5 bg-emerald-50 border border-emerald-300 text-emerald-950 font-bold rounded">OPERATIONAL PROPOSAL</span></div>
                        <div>REF: <span class="text-zinc-900 font-bold">{{ $refCode }}</span></div>
                        <div>DATE: <span class="text-zinc-900">{{ $dateStr }}</span></div>
                        <div>DISTRIBUTION: <span class="text-zinc-900">CONFIDENTIAL / INSTITUTIONAL</span></div>
                    </div>
                </div>
            </header>

            <!-- Proposal Metadata Box -->
            <section class="bg-zinc-50 border-l-4 border-emerald-600 p-4 mb-8 rounded-r-md">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs font-mono">
                    <div>
                        <span class="text-zinc-500">PREPARED EXCLUSIVELY FOR:</span>
                        <div class="text-sm font-bold text-zinc-950 mt-0.5" x-text="proprietorInput || '{{ addslashes($proprietor) }}'">{{ $proprietor }}</div>
                    </div>
                    <div>
                        <span class="text-zinc-500">TARGET INSTITUTION:</span>
                        <div class="text-sm font-bold text-zinc-950 mt-0.5" x-text="schoolInput || '{{ addslashes($school) }}'">{{ $school }}</div>
                    </div>
                    <div>
                        <span class="text-zinc-500">DEPLOYMENT TARGET:</span>
                        <div class="text-xs font-semibold text-zinc-800 mt-0.5">Secondary School Operating System (JSS1 &ndash; SS3)</div>
                    </div>
                    <div>
                        <span class="text-zinc-500">SERVICE LEVEL:</span>
                        <div class="text-xs font-semibold text-emerald-700 mt-0.5">48-Hour Assisted On-Ground Engineering SLA</div>
                    </div>
                </div>
            </section>

            <!-- Proposal Title -->
            <div class="mb-8">
                <span class="text-[11px] font-mono uppercase tracking-widest text-zinc-500 font-semibold">Institutional Deployment Plan</span>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-zinc-950 mt-1">
                    Eliminating Administrative Paralysis &amp; CBT Interface Shock in Secondary Schools
                </h2>
                <div class="h-0.5 w-16 bg-emerald-600 mt-3"></div>
            </div>

            <!-- Strategic Context -->
            <section class="space-y-4 text-sm leading-relaxed text-zinc-700 mb-10">
                <h3 class="text-xs font-mono font-bold uppercase tracking-widest text-zinc-900 border-b border-zinc-200 pb-1">
                    01 // The Strategic Focus: Secondary Education as the Talent Bridge
                </h3>
                <p>
                    ExtremeSolutions partners strictly with private, mission, and progressive secondary school networks. We recognize that <strong>secondary education (JSS1–SS3) is the critical bottleneck in Africa's human capital development</strong>.
                </p>
                <p>
                    While primary schools focus on basic reading and arithmetic, secondary schools prepare young minds for economic independence, university entrance examinations (JAMB UTME, WAEC, NECO), and modern technical literacy. However, most Nigerian secondary schools remain crippled by two systemic vulnerabilities:
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 my-4">
                    <div class="p-4 bg-zinc-50 border border-zinc-200 rounded-lg">
                        <span class="text-xs font-mono font-bold text-rose-600 uppercase">The Candidate Crisis</span>
                        <h4 class="text-sm font-bold text-zinc-950 mt-1">70%+ First-Time Keyboard Panic on Exam Day</h4>
                        <p class="text-xs text-zinc-600 mt-2">
                            Students study intensely for 6 years, only to experience interface shock on the day of their computerized JAMB examination. Unfamiliarity with keyboards and digital timers costs them crucial points.
                        </p>
                    </div>
                    <div class="p-4 bg-zinc-50 border border-zinc-200 rounded-lg">
                        <span class="text-xs font-mono font-bold text-rose-600 uppercase">The Administrative Drain</span>
                        <h4 class="text-sm font-bold text-zinc-950 mt-1">14-Day Terminal Collation &amp; Unreconciled Fees</h4>
                        <p class="text-xs text-zinc-600 mt-2">
                            Teachers spend entire weeks computing terminal broadsheets manually with calculators, resulting in inaccurate positions, frayed parent relations, and millions of Naira in uncollected tuition debts.
                        </p>
                    </div>
                </div>
            </section>

            <!-- The Three Pillars -->
            <section class="space-y-6 text-sm leading-relaxed text-zinc-700 mb-10">
                <h3 class="text-xs font-mono font-bold uppercase tracking-widest text-zinc-900 border-b border-zinc-200 pb-1">
                    02 // The Three Core Pillars of ExtremeSolutions School OS
                </h3>

                <div class="space-y-4">
                    <div class="border border-zinc-200 rounded-lg p-5 bg-zinc-50">
                        <div class="flex items-center space-x-3 mb-2">
                            <span class="w-6 h-6 rounded bg-zinc-900 text-white font-mono text-xs flex items-center justify-center font-bold">1</span>
                            <h4 class="text-base font-bold text-zinc-950">12-Second Continuous Assessment &amp; Broadsheet Engine</h4>
                        </div>
                        <p class="text-xs text-zinc-600 leading-relaxed">
                            Replace weeks of manual tabulation. Teachers input continuous assessments (CA1, CA2, Projects, Exam) into high-speed digital ledgers. The relational engine computes cumulative scores, class averages, grade distributions, and student ranks in 12 seconds with mathematical zero-defect accuracy.
                        </p>
                    </div>

                    <div class="border border-zinc-200 rounded-lg p-5 bg-zinc-50">
                        <div class="flex items-center space-x-3 mb-2">
                            <span class="w-6 h-6 rounded bg-emerald-600 text-white font-mono text-xs flex items-center justify-center font-bold">2</span>
                            <h4 class="text-base font-bold text-zinc-950">100% Zero-Leakage Tuition Audit &amp; Exam Clearance Gate</h4>
                        </div>
                        <p class="text-xs text-zinc-600 leading-relaxed">
                            Every school fee payment links directly to student admission IDs with real-time audit trails. Students receive digital examination clearance cards containing tamper-evident QR codes, eliminating revenue leakage and ensuring complete debt collection before examination week.
                        </p>
                    </div>

                    <div class="border border-zinc-200 rounded-lg p-5 bg-zinc-50">
                        <div class="flex items-center space-x-3 mb-2">
                            <span class="w-6 h-6 rounded bg-zinc-900 text-white font-mono text-xs flex items-center justify-center font-bold">3</span>
                            <h4 class="text-base font-bold text-zinc-950">Offline-Resilient Local CBT Examination Matrix</h4>
                        </div>
                        <p class="text-xs text-zinc-600 leading-relaxed">
                            We transform the secondary school computer lab into an enterprise CBT center. Exams run locally across the school local area network (LAN) without requiring active internet connectivity during testing. Once connectivity returns, marks synchronize instantly to the cloud. JSS1 to SS3 students practice weekly, entering national exams with supreme confidence.
                        </p>
                    </div>
                </div>
            </section>

            <!-- 48-Hour Assisted Deployment Model -->
            <section class="space-y-4 text-sm leading-relaxed text-zinc-700 mb-10">
                <h3 class="text-xs font-mono font-bold uppercase tracking-widest text-zinc-900 border-b border-zinc-200 pb-1">
                    03 // The 48-Hour Assisted On-Ground Deployment Taskforce
                </h3>
                <p>
                    You will not be handed a manual or an installer link. Our deployment engineers arrive on-site at your secondary school campus to execute the complete transformation:
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 my-4">
                    <div class="border border-zinc-200 rounded-lg p-4 bg-zinc-50">
                        <div class="text-xs font-mono font-bold text-zinc-500 uppercase">PHASE 1: DAY 1</div>
                        <div class="text-sm font-bold text-zinc-950 mt-1">Census Ingestion &amp; Lab Configuration</div>
                        <ul class="mt-2 text-xs text-zinc-600 space-y-1 list-disc pl-4">
                            <li>Migration of existing student records and parent contacts.</li>
                            <li>Hardening of laboratory PCs and local offline server installation.</li>
                            <li>Creation of teacher accounts and subject mapping.</li>
                        </ul>
                    </div>
                    <div class="border border-zinc-200 rounded-lg p-4 bg-zinc-50">
                        <div class="text-xs font-mono font-bold text-zinc-500 uppercase">PHASE 2: DAY 2</div>
                        <div class="text-sm font-bold text-zinc-950 mt-1">Live Faculty Training &amp; Mock Exam Run</div>
                        <ul class="mt-2 text-xs text-zinc-600 space-y-1 list-disc pl-4">
                            <li>Hands-on faculty workshop on grade entry and report card approval.</li>
                            <li>Live candidate mock CBT examination with JSS3 and SS3 students.</li>
                            <li>Proprietor executive financial dashboard signoff.</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Institutional Referral & Customizer -->
            <section class="bg-zinc-900 text-white rounded-xl p-6 sm:p-8 mb-10">
                <div class="flex items-center space-x-2 text-emerald-400 font-mono text-xs mb-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                    <span>FIELD REFERRAL &amp; CUSTOMIZATION ENGINE</span>
                </div>
                <h3 class="text-lg font-bold text-white tracking-tight">
                    Generate a Custom Proposal for Another School Proprietor
                </h3>
                <p class="text-xs text-zinc-300 mt-1 max-w-2xl leading-relaxed">
                    Alumni, educators, and education secretaries can adapt this proposal instantly. Input the target proprietor and school name below to generate a tailored institutional dispatch.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                    <div>
                        <label class="block text-xs font-mono uppercase text-zinc-400 mb-1">Target School Name</label>
                        <input type="text" x-model="schoolInput" placeholder="e.g. Gracefield Model College, Ikeja"
                               class="w-full bg-zinc-800 border border-zinc-700 text-white px-3 py-2 rounded text-xs focus:ring-1 focus:ring-emerald-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-mono uppercase text-zinc-400 mb-1">Proprietor / Principal Name</label>
                        <input type="text" x-model="proprietorInput" placeholder="e.g. Rev. Michael Oladipo"
                               class="w-full bg-zinc-800 border border-zinc-700 text-white px-3 py-2 rounded text-xs focus:ring-1 focus:ring-emerald-500 focus:outline-none">
                    </div>
                </div>

                <!-- Live Generated Link Box -->
                <div class="mt-4 bg-zinc-950 border border-zinc-800 rounded p-3">
                    <div class="text-[11px] font-mono text-zinc-500 mb-1">CUSTOMIZED PROPOSAL URL:</div>
                    <div class="text-xs font-mono text-emerald-400 break-all select-all" x-text="generatedUrl"></div>
                </div>

                <div class="mt-4 flex flex-wrap gap-2">
                    <button @click="copyLink()"
                            class="inline-flex items-center px-4 py-2 bg-white hover:bg-zinc-100 text-zinc-950 font-bold rounded text-xs transition">
                        <svg class="w-3.5 h-3.5 mr-1.5 text-zinc-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                        <span x-text="copied ? 'Link Copied!' : 'Copy Proposal Link'"></span>
                    </button>
                    <a :href="whatsappUrl" target="_blank"
                       class="inline-flex items-center px-4 py-2 bg-emerald-600 hover:bg-emerald-500 text-white font-bold rounded text-xs transition">
                        <svg class="w-3.5 h-3.5 mr-1.5 fill-current" viewBox="0 0 24 24">
                            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.203c.043.071.043.419-.101.824z"/>
                        </svg>
                        Share via WhatsApp
                    </a>
                </div>
            </section>

            <!-- Signature & Sign-off -->
            <footer class="pt-6 border-t border-zinc-200">
                <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between gap-6">
                    <div>
                        <img src="{{ asset('images/signature.png') }}" alt="Samuel Ekunyan Signature" class="h-10 w-auto mb-2 opacity-90">
                        <div class="text-sm font-bold text-zinc-950 font-mono">SAMUEL EKUNYAN</div>
                        <div class="text-xs text-zinc-500">Founder &amp; Principal Systems Architect</div>
                        <div class="text-xs text-zinc-400">ExtremeSolutions &bull; extremesolutions.com.ng</div>
                    </div>
                    <div class="text-left sm:text-right text-[11px] font-mono text-zinc-400">
                        <div>EXTREMESOLUTIONS SCHOOL OS // SMS</div>
                        <div>REF: {{ $refCode }} &bull; VERIFIED</div>
                    </div>
                </div>
            </footer>

        </article>

    </div>
</div>
@endsection

