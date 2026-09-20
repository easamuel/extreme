@extends('layouts.app')

@section('title', 'Institutional Vision & Active Mission // ExtremeSolutions')
@section('description', 'Official institutional memorandum on the corporate charter (Habakkuk 2:2), the secondary education bottleneck, and our 48-hour assisted deployment taskforce.')

@section('meta_robots')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
<div class="bg-zinc-50 min-h-screen py-10 lg:py-16 text-zinc-900 selection:bg-zinc-900 selection:text-white"
     x-data="{
        recipientName: '{{ addslashes($name) }}',
        referrerName: '{{ addslashes($referrer) }}',
        copied: false,
        isExportingImg: false,
        baseUrl: '{{ route('support.index') }}',
        get generatedUrl() {
            let url = new URL(this.baseUrl);
            if (this.recipientName.trim()) url.searchParams.set('name', this.recipientName.trim());
            if (this.referrerName.trim()) url.searchParams.set('ref', this.referrerName.trim());
            return url.toString();
        },
        get whatsappUrl() {
            const text = 'Institutional Memorandum // ExtremeSolutions\n\n' +
                '\"Write the vision and make it plain on tablets, that he may run that readeth it.\" — Habakkuk 2:2\n\n' +
                'Review the active frontline mission on Secondary School Management & CBT Infrastructure:\n' +
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
            const target = document.getElementById('memo-document');
            if (!target) return;

            const runCanvas = () => {
                window.html2canvas(target, {
                    scale: 2,
                    useCORS: true,
                    backgroundColor: '#ffffff'
                }).then(canvas => {
                    const link = document.createElement('a');
                    link.download = 'ExtremeSolutions-Institutional-Memo-{{ $refCode }}.png';
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

        <!-- Institutional Action Top Bar -->
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3 bg-white border border-zinc-200 p-3.5 rounded-lg shadow-xs text-xs">
            <div class="flex items-center space-x-2 text-zinc-600 font-mono">
                <span class="inline-block w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span>SYSTEM DISPATCH: <strong class="text-zinc-900">{{ $refCode }}</strong></span>
                <span class="text-zinc-300">|</span>
                <span>{{ $dateStr }}</span>
            </div>
            <div class="flex items-center space-x-2">
                <a href="{{ $exportPdfUrl }}" target="_blank"
                   class="inline-flex items-center px-3 py-1.5 bg-zinc-900 hover:bg-zinc-800 text-white font-medium rounded text-xs transition">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download A4 PDF
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
                    Brief Founder
                </a>
            </div>
        </div>

        <!-- The Formal Document Container -->
        <article id="memo-document" class="bg-white border border-zinc-200 rounded-xl p-6 sm:p-10 lg:p-12 shadow-sm font-sans">

            <!-- Document Letterhead -->
            <header class="border-b border-zinc-900 pb-6 mb-8">
                <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-4">
                    <div>
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('images/es-mark.png') }}" alt="ExtremeSolutions" class="h-9 w-auto">
                            <div>
                                <h1 class="text-xl font-bold tracking-tight text-zinc-950 font-mono">EXTREMESOLUTIONS</h1>
                                <p class="text-[11px] uppercase tracking-widest text-zinc-500 font-semibold">Engineering Systems Laboratory</p>
                            </div>
                        </div>
                        <p class="mt-3 text-xs italic text-zinc-600 font-serif">
                            &ldquo;Write the vision and make it plain on tablets, that he may run that readeth it.&rdquo; &mdash; Habakkuk 2:2
                        </p>
                    </div>

                    <div class="text-left sm:text-right font-mono text-[11px] text-zinc-500 space-y-1">
                        <div><span class="inline-block px-2 py-0.5 bg-zinc-100 border border-zinc-300 text-zinc-900 font-bold rounded">UNLISTED BRIEFING</span></div>
                        <div>REF: <span class="text-zinc-900 font-bold">{{ $refCode }}</span></div>
                        <div>DATE: <span class="text-zinc-900">{{ $dateStr }}</span></div>
                        <div>SECURITY: <span class="text-zinc-900">CONFIDENTIAL / DIRECT</span></div>
                    </div>
                </div>
            </header>

            <!-- Recipient Metadata Box -->
            <section class="bg-zinc-50 border-l-4 border-zinc-900 p-4 mb-8 rounded-r-md">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs font-mono">
                    <div>
                        <span class="text-zinc-500">PREPARED FOR:</span>
                        <div class="text-sm font-bold text-zinc-950 mt-0.5">{{ $name }}</div>
                    </div>
                    @if(!empty($referrer))
                    <div>
                        <span class="text-zinc-500">REFERRED BY:</span>
                        <div class="text-sm font-bold text-zinc-800 mt-0.5">{{ $referrer }}</div>
                    </div>
                    @else
                    <div>
                        <span class="text-zinc-500">DISTRIBUTION CHANNEL:</span>
                        <div class="text-sm font-bold text-zinc-800 mt-0.5">Direct Institutional Syndicate</div>
                    </div>
                    @endif
                </div>
            </section>

            <!-- Memorandum Title -->
            <div class="mb-8">
                <span class="text-[11px] font-mono uppercase tracking-widest text-zinc-500 font-semibold">Institutional Memorandum</span>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-zinc-950 mt-1">
                    Systemic Talent Bottlenecks &amp; The Secondary Education Infrastructure Wedge
                </h2>
                <div class="h-0.5 w-16 bg-zinc-900 mt-3"></div>
            </div>

            <!-- Part 1: Corporate Charter -->
            <section class="space-y-4 text-sm leading-relaxed text-zinc-700 mb-10">
                <h3 class="text-xs font-mono font-bold uppercase tracking-widest text-zinc-900 border-b border-zinc-200 pb-1">
                    01 // The Corporate Charter &amp; Architectural Standard
                </h3>
                <p>
                    ExtremeSolutions does not engineer vanity websites, transient apps, or marketing wrappers. We operate as a high-discipline software engineering laboratory focused on building structural operating infrastructure for African enterprise, commerce, and human capital development.
                </p>
                <p>
                    Our core engineering philosophy is anchored upon <strong>Habakkuk 2:2</strong>: <em>&ldquo;Write the vision and make it plain on tablets, that he may run that readeth it.&rdquo;</em> When software is engineered with structural integrity, absolute clarity, and hardened resilience, operational friction disappears. Leaders execute with speed; institutions scale with predictability.
                </p>
            </section>

            <!-- Part 2: The Frontline Mission -->
            <section class="space-y-4 text-sm leading-relaxed text-zinc-700 mb-10">
                <h3 class="text-xs font-mono font-bold uppercase tracking-widest text-zinc-900 border-b border-zinc-200 pb-1">
                    02 // The Grassroots Wedge: Why Secondary Education (JSS1–SS3)
                </h3>
                <p>
                    We intentionally bypass the primary school tier. Primary schools teach foundational literacy, but <strong>secondary education is the single critical bottleneck in Africa's talent pipeline</strong>. It is the bridge between adolescent capability and tertiary economic viability.
                </p>

                <!-- Reality Metrics Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 my-6">
                    <div class="bg-zinc-50 border border-zinc-200 rounded-lg p-4">
                        <div class="text-2xl font-bold font-mono text-zinc-950">70%+</div>
                        <div class="text-xs font-bold uppercase tracking-wider text-zinc-600 mt-1">First-Time Keyboard Shock</div>
                        <p class="text-[11px] text-zinc-500 mt-2 leading-normal">
                            Students touch a computer keyboard for the first time during high-stakes national UTME (JAMB) exams, resulting in catastrophic failure due to interface terror rather than intellectual deficit.
                        </p>
                    </div>
                    <div class="bg-zinc-50 border border-zinc-200 rounded-lg p-4">
                        <div class="text-2xl font-bold font-mono text-zinc-950">14 Days</div>
                        <div class="text-xs font-bold uppercase tracking-wider text-zinc-600 mt-1">Manual Broadsheet Latency</div>
                        <p class="text-[11px] text-zinc-500 mt-2 leading-normal">
                            Teaching faculties forfeit 2 to 3 weeks each term to manual paper collation, erroneous continuous assessment calculations, and delayed report cards.
                        </p>
                    </div>
                    <div class="bg-zinc-50 border border-zinc-200 rounded-lg p-4">
                        <div class="text-2xl font-bold font-mono text-zinc-950">₦3.8M+</div>
                        <div class="text-xs font-bold uppercase tracking-wider text-zinc-600 mt-1">Annual Tuition Leakage</div>
                        <p class="text-[11px] text-zinc-500 mt-2 leading-normal">
                            Private and mission schools bleed revenue through unreconciled cash deposits, uncollected term balances, and manual gate access vulnerabilities.
                        </p>
                    </div>
                </div>

                <p>
                    To resolve this, we engineered <strong>ExtremeSolutions School Operating System (sms.extremesolutions.com.ng)</strong>. It is not an administrative burden; it is an active educational engine that:
                </p>
                <ul class="list-disc pl-5 space-y-2">
                    <li>
                        <strong>Democratizes Computer-Based Testing (CBT):</strong> Converts weekly assessments, mid-term tests, and terminal examinations into daily desktop CBT drills for JSS1 to SS3 candidates. Students graduate with natural keyboard muscle memory, eradicating JAMB interface panic.
                    </li>
                    <li>
                        <strong>Automates Broadsheets in 12 Seconds:</strong> Ingests continuous assessments, applies institutional grading curves, computes student ranks, and generates compliant Ministry of Education broadsheets instantly.
                    </li>
                    <li>
                        <strong>Enforces Direct Tuition Reconciliation:</strong> Issues digital exam clearance cards verified at the school gate, plugging fee leakage and giving proprietors real-time financial transparency.
                    </li>
                </ul>
            </section>

            <!-- Part 3: The 48-Hour On-Ground Deployment Taskforce -->
            <section class="space-y-4 text-sm leading-relaxed text-zinc-700 mb-10">
                <h3 class="text-xs font-mono font-bold uppercase tracking-widest text-zinc-900 border-b border-zinc-200 pb-1">
                    03 // The 48-Hour Assisted On-Ground Deployment Taskforce
                </h3>
                <p>
                    Most software fail in emerging markets because vendors leave non-technical school principals to figure out complex setups. ExtremeSolutions does not sell software over a download link; <strong>we deploy an engineering taskforce directly to the school compound</strong>.
                </p>

                <div class="border border-zinc-200 rounded-lg overflow-hidden my-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 divide-y md:divide-y-0 md:divide-x divide-zinc-200">
                        <div class="p-4 bg-zinc-50">
                            <span class="text-xs font-mono font-bold uppercase text-zinc-500">HOURS 00 &ndash; 24</span>
                            <h4 class="text-sm font-bold text-zinc-950 mt-1">Census Migration &amp; Infrastructure Hardening</h4>
                            <ul class="text-xs text-zinc-600 mt-2 space-y-1.5 list-disc pl-4">
                                <li>Physical audit of computer laboratory terminals and power backups.</li>
                                <li>Complete extraction and schema ingestion of historical student rosters.</li>
                                <li>Subject, class, and teacher continuous assessment ledger configuration.</li>
                                <li>Local offline server deployment for zero-latency LAN exam delivery.</li>
                            </ul>
                        </div>
                        <div class="p-4 bg-zinc-50">
                            <span class="text-xs font-mono font-bold uppercase text-zinc-500">HOURS 24 &ndash; 48</span>
                            <h4 class="text-sm font-bold text-zinc-950 mt-1">Live Simulation &amp; Operational Handover</h4>
                            <ul class="text-xs text-zinc-600 mt-2 space-y-1.5 list-disc pl-4">
                                <li>Live faculty training on grade entry, remark formatting, and audit trails.</li>
                                <li>Dry-run 50-student simultaneous CBT examination under simulated blackout conditions.</li>
                                <li>Proprietor executive financial dashboard pairing (tuition tracking &amp; gate pass).</li>
                                <li>Final institutional signoff and 24/7 dedicated engineering SLA activation.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Part 4: Interactive Peer-to-Peer Amplification Engine -->
            <section class="bg-zinc-900 text-white rounded-xl p-6 sm:p-8 mb-10">
                <div class="flex items-center space-x-2 text-emerald-400 font-mono text-xs mb-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                    </svg>
                    <span>PEER-TO-PEER INSTITUTIONAL DISPATCH</span>
                </div>
                <h3 class="text-lg font-bold text-white tracking-tight">
                    Deploy this Vision to Another School Proprietor or Institutional Partner
                </h3>
                <p class="text-xs text-zinc-300 mt-1 max-w-2xl leading-relaxed">
                    Personalize this institutional memorandum in real time. Generate a cryptographic direct dispatch URL or share directly to WhatsApp.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                    <div>
                        <label class="block text-xs font-mono uppercase text-zinc-400 mb-1">Recipient Name / Title</label>
                        <input type="text" x-model="recipientName" placeholder="e.g. Dr. Veronica Adeleke, Proprietress"
                               class="w-full bg-zinc-800 border border-zinc-700 text-white px-3 py-2 rounded text-xs focus:ring-1 focus:ring-emerald-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-mono uppercase text-zinc-400 mb-1">Your Name / Title (Referrer)</label>
                        <input type="text" x-model="referrerName" placeholder="e.g. Samuel Ekunyan"
                               class="w-full bg-zinc-800 border border-zinc-700 text-white px-3 py-2 rounded text-xs focus:ring-1 focus:ring-emerald-500 focus:outline-none">
                    </div>
                </div>

                <!-- Generated URL Preview & Actions -->
                <div class="mt-4 bg-zinc-950 border border-zinc-800 rounded p-3">
                    <div class="text-[11px] font-mono text-zinc-500 mb-1">GENERATED DIRECT URL:</div>
                    <div class="text-xs font-mono text-emerald-400 break-all select-all" x-text="generatedUrl"></div>
                </div>

                <div class="mt-4 flex flex-wrap gap-2">
                    <button @click="copyLink()"
                            class="inline-flex items-center px-4 py-2 bg-white hover:bg-zinc-100 text-zinc-950 font-bold rounded text-xs transition">
                        <svg class="w-3.5 h-3.5 mr-1.5 text-zinc-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                        <span x-text="copied ? 'Link Copied to Clipboard!' : 'Copy Direct Link'"></span>
                    </button>
                    <a :href="whatsappUrl" target="_blank"
                       class="inline-flex items-center px-4 py-2 bg-emerald-600 hover:bg-emerald-500 text-white font-bold rounded text-xs transition">
                        <svg class="w-3.5 h-3.5 mr-1.5 fill-current" viewBox="0 0 24 24">
                            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.203c.043.071.043.419-.101.824z"/>
                        </svg>
                        One-Tap WhatsApp Dispatch
                    </a>
                </div>
            </section>

            <!-- Signoff Block -->
            <footer class="pt-6 border-t border-zinc-200">
                <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between gap-6">
                    <div>
                        <img src="{{ asset('images/signature.png') }}" alt="Samuel Ekunyan Signature" class="h-10 w-auto mb-2 opacity-90">
                        <div class="text-sm font-bold text-zinc-950 font-mono">SAMUEL EKUNYAN</div>
                        <div class="text-xs text-zinc-500">Founder &amp; Principal Systems Architect</div>
                        <div class="text-xs text-zinc-400">ExtremeSolutions &bull; extremesolutions.com.ng</div>
                    </div>
                    <div class="text-left sm:text-right text-[11px] font-mono text-zinc-400">
                        <div>HABAKKUK 2:2 COVENANT STANDARD</div>
                        <div>REVISION 4.2 &bull; DEPLOYMENT READY</div>
                    </div>
                </div>
            </footer>

        </article>

    </div>
</div>
@endsection
