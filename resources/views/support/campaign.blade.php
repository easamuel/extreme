@extends('layouts.letter')

@section('title', 'I have a message for you from ExtremeSolutions')
@section('description', 'An urgent executive briefing on the grassroots infrastructure of Nigerian secondary education by Samuel Ekunyan, Principal Systems Architect.')

@section('content')
<div class="max-w-4xl mx-auto"
     x-data="{
        currentName: '{{ addslashes($name) }}',
        inputName: '{{ addslashes($name) }}',
        copied: false,
        isExportingImg: false,
        get currentUrl() {
            let url = new URL(window.location.origin + '{{ route('support.campaign') }}');
            if (this.currentName && this.currentName.trim()) {
                url.searchParams.set('name', this.currentName.trim());
            }
            return url.toString();
        },
        get dynamicPdfUrl() {
            let url = new URL(window.location.origin + '{{ route('support.pdf') }}');
            if (this.currentName && this.currentName.trim()) {
                url.searchParams.set('name', this.currentName.trim());
            }
            return url.toString();
        },
        get whatsappUrl() {
            const text = 'I have a message for you from ExtremeSolutions:\n\n' +
                'RE: An Urgent Operational Brief on the Grassroots Infrastructure of Nigerian Secondary Education\n\n' +
                (this.currentName && this.currentName.trim() ? 'Prepared for ' + this.currentName.trim() + ':\n' : '') +
                this.currentUrl;
            return 'https://api.whatsapp.com/send?text=' + encodeURIComponent(text);
        },
        updateName() {
            if (this.inputName && this.inputName.trim()) {
                this.currentName = this.inputName.trim();
                if (window.history && window.history.replaceState) {
                    window.history.replaceState({}, '', this.currentUrl);
                }
            }
        },
        copyLink() {
            navigator.clipboard.writeText(this.currentUrl).then(() => {
                this.copied = true;
                setTimeout(() => { this.copied = false; }, 2500);
            });
        },
        saveAsImage() {
            this.isExportingImg = true;
            const target = document.getElementById('letter-paper');
            if (!target) {
                this.isExportingImg = false;
                return;
            }

            const runCanvas = () => {
                window.html2canvas(target, {
                    scale: 2,
                    useCORS: true,
                    allowTaint: true,
                    backgroundColor: '#ffffff',
                    logging: false
                }).then(canvas => {
                    const safe = (this.currentName || 'Leader').toLowerCase().replace(/[^a-z0-9]+/g, '-');
                    const link = document.createElement('a');
                    link.download = 'ExtremeSolutions-Executive-Memo-' + safe + '.png';
                    link.href = canvas.toDataURL('image/png');
                    link.click();
                    this.isExportingImg = false;
                }).catch(err => {
                    console.error('Image export failed:', err);
                    this.isExportingImg = false;
                    alert('Image export failed in this browser session. You may use Download PDF.');
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

    <!-- Top Action Console & Personalization (Zero Pop-ups, 100% Functional) -->
    <div class="no-print mb-6 space-y-3">
        <!-- Action Row -->
        <div class="flex flex-wrap items-center justify-between gap-3 bg-[#0c1f3a] border border-white/15 p-3.5 sm:p-4 rounded-xl shadow-xl text-xs font-mono text-white">
            <div class="flex items-center space-x-2.5">
                <span class="inline-block w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                <span>DOC REF: <strong class="text-white">{{ $refCode }}</strong></span>
                <span class="text-white/30 hidden sm:inline">|</span>
                <span class="text-white/70 hidden sm:inline">{{ $dateStr }}</span>
            </div>

            <div class="flex flex-wrap items-center gap-2">
                <!-- Save As Image Button -->
                <button @click="saveAsImage()"
                        :disabled="isExportingImg"
                        class="inline-flex items-center px-3 py-1.5 bg-white/10 hover:bg-white/20 text-white font-medium rounded-lg text-xs transition border border-white/15 disabled:opacity-50"
                        title="Download this letter as high-resolution PNG image">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-[#00ff88]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span x-text="isExportingImg ? 'Generating...' : 'Save as Image'"></span>
                </button>

                <!-- Download PDF Button -->
                <a :href="dynamicPdfUrl" target="_blank"
                   class="inline-flex items-center px-3 py-1.5 bg-white/10 hover:bg-white/20 text-white font-medium rounded-lg text-xs transition border border-white/15"
                   title="Download formatted A4 PDF">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span>Download PDF</span>
                </a>

                <!-- WhatsApp Share Button -->
                <a :href="whatsappUrl" target="_blank"
                   class="inline-flex items-center px-3.5 py-1.5 bg-[#25D366] hover:bg-[#20bd5a] text-slate-950 font-bold rounded-lg text-xs transition shadow-sm"
                   title="Share on WhatsApp with recipient custom message">
                    <svg class="w-3.5 h-3.5 mr-1.5 fill-current" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.203c.043.071.043.419-.101.824z"/>
                    </svg>
                    <span>WhatsApp</span>
                </a>

                <!-- Copy Link Button -->
                <button @click="copyLink()"
                        class="inline-flex items-center px-3 py-1.5 bg-slate-800 hover:bg-slate-700 text-white font-medium rounded-lg text-xs transition border border-slate-700">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                    <span x-text="copied ? 'Copied Link!' : 'Copy Link'"></span>
                </button>
            </div>
        </div>

        <!-- Live Personalization Bar: Instant Real-Time Letter Update -->
        <div class="bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4 text-xs font-sans text-white flex flex-col sm:flex-row sm:items-center justify-between gap-3">
            <div class="flex items-center space-x-2">
                <span class="text-emerald-400 font-bold uppercase tracking-wider text-[11px]">Personalize Recipient:</span>
                <span class="text-white/60 text-[11px]">(Live preview updates instantly on the letter)</span>
            </div>
            <form @submit.prevent="updateName()" class="flex items-center gap-2">
                <input type="text"
                       x-model="inputName"
                       @input="currentName = inputName || '{{ addslashes($name) }}'; if (window.history.replaceState) window.history.replaceState({}, '', currentUrl);"
                       placeholder="e.g. Engr. Tayo Balogun"
                       class="px-3 py-1.5 bg-slate-800 border border-white/20 rounded-lg text-xs text-white placeholder-white/40 focus:outline-none focus:ring-1 focus:ring-emerald-400 w-52 sm:w-64">
                <button type="submit"
                        class="px-3.5 py-1.5 bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold rounded-lg text-xs transition">
                    Apply
                </button>
            </form>
        </div>
    </div>

    <!-- The Authentic Executive Letter Paper Surface (Rendered for Screen, Print & Canvas Export) -->
    <div class="flex justify-center">
        <article id="letter-paper"
                 class="print-paper w-full bg-white text-slate-900 border border-slate-200 shadow-2xl rounded-sm p-7 sm:p-14 lg:p-16 font-serif text-[15px] leading-relaxed relative overflow-hidden">

            <!-- Security Watermark Pattern (Discrete, High-Trust) -->
            <div class="absolute inset-0 pointer-events-none opacity-[0.018] flex items-center justify-center select-none" aria-hidden="true">
                <img src="{{ asset('images/es-mark.png') }}" alt="" class="w-[500px] h-[500px]">
            </div>

            <!-- Official Institutional Letterhead -->
            <header class="border-b-2 border-slate-950 pb-5 mb-8 font-sans relative z-10">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('images/es-mark.png') }}" alt="ExtremeSolutions" class="h-12 w-auto">
                        <div>
                            <div class="text-2xl font-black tracking-tight text-slate-950 font-mono">EXTREMESOLUTIONS</div>
                            <div class="text-xs uppercase tracking-widest text-slate-600 font-bold">Office of the Principal Systems Architect</div>
                            <div class="text-[11px] text-slate-500">Lagos, Nigeria &bull; extremesolutions.com.ng</div>
                        </div>
                    </div>
                    <div class="text-left sm:text-right font-mono text-xs text-slate-600 space-y-1">
                        <div>DOCUMENT REF: <strong class="text-slate-950">{{ $refCode }}</strong></div>
                        <div>DATE: <span class="text-slate-900">{{ $dateStr }}</span></div>
                        <div class="text-[10px] text-emerald-700 font-semibold uppercase tracking-wider">&bull; CLASSIFICATION: STRATEGIC MEMO</div>
                    </div>
                </div>
            </header>

            <!-- Recipient Salutation (Dynamically Bound to Alpine) -->
            <div class="mb-6 relative z-10">
                <p class="font-bold text-slate-950 text-base">
                    Dear <span x-text="currentName">{{ $name }}</span>,
                </p>
            </div>

            <!-- Subject Line -->
            <div class="mb-8 font-sans font-bold text-slate-950 text-sm sm:text-base border-l-4 border-slate-950 pl-4 py-1.5 bg-slate-50 relative z-10">
                RE: An Urgent Operational Brief on the Grassroots Infrastructure of Nigerian Secondary Education
            </div>

            <!-- Habakkuk Charter Quote -->
            <blockquote class="my-6 pl-4 border-l-2 border-slate-300 italic text-slate-600 text-sm relative z-10">
                &ldquo;Write the vision and make it plain on tablets, that he may run that readeth it.&rdquo; &mdash; Habakkuk 2:2
            </blockquote>

            <!-- Letter Body Content -->
            <div class="space-y-5 text-justify relative z-10">
                <p>
                    ExtremeSolutions was established on a single principle: build resilient software and operational systems that permanently remove manual failure from African institutions.
                </p>

                <p>
                    I am writing directly to you because our active frontline initiative targets the most vulnerable bottleneck in our national development: <strong>the Nigerian secondary school system</strong>.
                </p>

                <h2 class="font-sans font-bold text-slate-950 text-sm uppercase tracking-wider pt-3 border-b border-slate-200 pb-1">
                    The Structural Breakdown at the Grassroots
                </h2>

                <p>
                    Secondary education is the bridge between basic literacy and economic independence. Yet, our current reality is defined by two avoidable failures:
                </p>

                <div class="space-y-3 pl-2 sm:pl-4">
                    <p>
                        <strong>The Computerized Examination Crisis:</strong> Over 70% of Nigerian secondary school students touch a computer keyboard and mouse for the very first time on the morning of their national exit exam (JAMB CBT). The result is mass exam anxiety, interface shock, and artificially suppressed results that derail young lives&mdash;not because the students lack intelligence, but because they have never interacted with software.
                    </p>

                    <p>
                        <strong>Administrative Paralysis:</strong> The schools themselves spend 2 to 3 weeks at the end of every term manually compiling continuous assessments and broadsheets with physical paper and handheld calculators. Grading errors are rampant, and untracked fee defaults quietly starve schools of operating cash.
                    </p>
                </div>

                <h2 class="font-sans font-bold text-slate-950 text-sm uppercase tracking-wider pt-3 border-b border-slate-200 pb-1">
                    The Intervention: ExtremeSolutions School OS (<a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-700 underline font-mono font-semibold">sms.extremesolutions.com.ng</a>)
                </h2>

                <p>
                    We engineered a unified operating system specifically tailored for Nigerian secondary institutions:
                </p>

                <ul class="list-disc pl-6 space-y-2">
                    <li>
                        <strong>Academic Broadsheet Engine:</strong> Raw scores are converted into weighted, ranked, error-free student terminal dossiers in seconds.
                    </li>
                    <li>
                        <strong>Capital Protection Ledger:</strong> Instant visibility on tuition balances and payment reconciliations before examinations commence.
                    </li>
                    <li>
                        <strong>Native Student CBT Terminals:</strong> We bring continuous digital testing directly into standard classrooms, ensuring Junior and Senior Secondary students use computers weekly as a natural tool, years before external examinations.
                    </li>
                </ul>

                <h2 class="font-sans font-bold text-slate-950 text-sm uppercase tracking-wider pt-3 border-b border-slate-200 pb-1">
                    The Deployment Model: Why We Need Your Backing
                </h2>

                <p>
                    Software alone fails in emerging markets; software paired with ground-level human enablement dominates.
                </p>

                <p>
                    We do not sell software remotely. ExtremeSolutions deploys an on-site taskforce that physically enters each secondary school, converts legacy paper broadsheets into digital records within 48 hours, and certifies every teacher on-site.
                </p>

                <p>
                    We are actively funding the initial operational deployment for our first 10 secondary schools (encompassing ~3,000 students). Your financial backing and partnership directly underwrite the field logistics, hardware setup, and teacher training required to make these 10 schools digitally self-sustaining.
                </p>

                <p>
                    I would welcome 10 minutes to discuss how you can stand with us in building this foundation.
                </p>
            </div>

            <!-- Authentic Handwritten Signoff Block -->
            <div class="mt-10 pt-6 border-t border-slate-200 relative z-10">
                <p class="mb-2">Yours in conviction and service,</p>

                <!-- Authentic Samuel Ekunyan Pen Signature -->
                <div class="my-1">
                    <img src="{{ asset('images/signature.png') }}"
                         alt="Samuel Ekunyan Signature"
                         class="h-20 w-auto opacity-95"
                         style="filter: contrast(1.15);">
                </div>

                <div class="font-sans text-sm">
                    <div class="font-bold text-slate-950 font-mono text-base">Samuel Ekunyan</div>
                    <div class="text-slate-700 font-medium">Founder &amp; Principal Systems Architect, ExtremeSolutions</div>
                    <div class="text-slate-500 font-mono text-xs mt-1">
                        <a href="mailto:samuel@ekunyansamuel.dev" class="text-emerald-700 underline font-semibold">samuel@ekunyansamuel.dev</a> &bull;
                        <a href="https://extremesolutions.com.ng" target="_blank" class="underline">extremesolutions.com.ng</a>
                    </div>
                </div>

                <!-- Verification Stamp -->
                <div class="mt-6 inline-flex items-center gap-2 px-3 py-1.5 rounded bg-slate-50 border border-slate-200 font-mono text-[11px] text-slate-600">
                    <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                    <span>AUTHENTICATED BY EXTREMESOLUTIONS ARCHITECTURAL OFFICE &bull; LAGOS, NG</span>
                </div>
            </div>

        </article>
    </div>

    <!-- Bottom Forward Card (Zero Popups) -->
    <div class="no-print mt-8 bg-[#0c1f3a] border border-white/15 rounded-xl p-5 sm:p-6 shadow-xl font-sans text-white">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <h3 class="text-sm font-bold text-white">Forward this Briefing to Another Leader</h3>
                <p class="text-xs text-white/70 mt-0.5">Enter their name to generate a personalized link instantly:</p>
            </div>
            <form @submit.prevent="updateName()" class="flex items-center gap-2">
                <input type="text"
                       x-model="inputName"
                       @input="currentName = inputName || '{{ addslashes($name) }}'; if (window.history.replaceState) window.history.replaceState({}, '', currentUrl);"
                       placeholder="e.g. Engr. Tayo Balogun"
                       class="px-3 py-1.5 bg-slate-800 border border-white/20 rounded-lg text-xs text-white placeholder-white/40 focus:outline-none focus:ring-1 focus:ring-emerald-400 w-48 sm:w-60">
                <button type="submit"
                        class="px-4 py-1.5 bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold rounded-lg text-xs transition">
                    Update Link
                </button>
            </form>
        </div>
    </div>

</div>
@endsection
