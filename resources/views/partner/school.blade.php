@extends('layouts.letter')

@section('title', 'I have a message for you from ExtremeSolutions')
@section('description', 'Institutional Partnership for Broadsheet Automation and Student CBT Readiness by ExtremeSolutions.')

@section('content')
<div class="max-w-4xl mx-auto"
     x-data="{
        currentProprietor: '{{ addslashes($proprietor) }}',
        inputProprietor: '{{ addslashes($proprietor) }}',
        currentSchool: '{{ addslashes($school) }}',
        inputSchool: '{{ addslashes($school) }}',
        copied: false,
        isExportingImg: false,
        get currentUrl() {
            let url = new URL(window.location.origin + '{{ route('partner.school') }}');
            if (this.currentProprietor && this.currentProprietor.trim()) {
                url.searchParams.set('proprietor', this.currentProprietor.trim());
            }
            if (this.currentSchool && this.currentSchool.trim()) {
                url.searchParams.set('school', this.currentSchool.trim());
            }
            return url.toString();
        },
        get dynamicPdfUrl() {
            let url = new URL(window.location.origin + '{{ route('partner.pdf') }}');
            if (this.currentProprietor && this.currentProprietor.trim()) {
                url.searchParams.set('proprietor', this.currentProprietor.trim());
            }
            if (this.currentSchool && this.currentSchool.trim()) {
                url.searchParams.set('school', this.currentSchool.trim());
            }
            return url.toString();
        },
        get whatsappUrl() {
            const text = 'I have a message for you from ExtremeSolutions:\n\n' +
                'RE: Institutional Partnership for Broadsheet Automation and Student CBT Readiness\n\n' +
                'Prepared for ' + (this.currentProprietor.trim() || '{{ addslashes($proprietor) }}') + ' (' + (this.currentSchool.trim() || '{{ addslashes($school) }}') + '):\n' +
                this.currentUrl;
            return 'https://api.whatsapp.com/send?text=' + encodeURIComponent(text);
        },
        updateProposal() {
            if (this.inputProprietor.trim()) this.currentProprietor = this.inputProprietor.trim();
            if (this.inputSchool.trim()) this.currentSchool = this.inputSchool.trim();
            if (window.history && window.history.replaceState) {
                window.history.replaceState({}, '', this.currentUrl);
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
                    const safe = (this.currentSchool || 'School').toLowerCase().replace(/[^a-z0-9]+/g, '-');
                    const link = document.createElement('a');
                    link.download = 'ExtremeSolutions-School-Proposal-' + safe + '.png';
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

    <!-- Top Action Console & Personalization (Zero Pop-ups) -->
    <div class="no-print mb-6 space-y-3">
        <!-- Action Row -->
        <div class="flex flex-wrap items-center justify-between gap-3 bg-[#0c1f3a] border border-white/15 p-3.5 sm:p-4 rounded-xl shadow-xl text-xs font-mono text-white">
            <div class="flex items-center space-x-2.5">
                <span class="inline-block w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                <span>PROPOSAL CODE: <strong class="text-white">{{ $refCode }}</strong></span>
                <span class="text-white/30 hidden sm:inline">|</span>
                <span class="text-white/70 hidden sm:inline">{{ $dateStr }}</span>
            </div>

            <div class="flex flex-wrap items-center gap-2">
                <!-- Save As Image Button -->
                <button @click="saveAsImage()"
                        :disabled="isExportingImg"
                        class="inline-flex items-center px-3 py-1.5 bg-white/10 hover:bg-white/20 text-white font-medium rounded-lg text-xs transition border border-white/15 disabled:opacity-50"
                        title="Download this proposal as high-resolution PNG image">
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

        <!-- Live Personalization Bar: Instant Real-Time Proposal Update -->
        <div class="bg-white/5 border border-white/10 rounded-xl p-3 sm:p-4 text-xs font-sans text-white flex flex-col lg:flex-row lg:items-center justify-between gap-3">
            <div class="flex items-center space-x-2">
                <span class="text-emerald-400 font-bold uppercase tracking-wider text-[11px]">Customize Proposal:</span>
                <span class="text-white/60 text-[11px]">(Live preview updates the letter instantly as you type)</span>
            </div>
            <form @submit.prevent="updateProposal()" class="flex flex-wrap items-center gap-2">
                <input type="text"
                       x-model="inputProprietor"
                       @input="currentProprietor = inputProprietor || '{{ addslashes($proprietor) }}'; if (window.history.replaceState) window.history.replaceState({}, '', currentUrl);"
                       placeholder="Proprietor Name (e.g. Mrs. Adeleke)"
                       class="px-3 py-1.5 bg-slate-800 border border-white/20 rounded-lg text-xs text-white placeholder-white/40 focus:outline-none focus:ring-1 focus:ring-emerald-400 w-44 sm:w-52">
                <input type="text"
                       x-model="inputSchool"
                       @input="currentSchool = inputSchool || '{{ addslashes($school) }}'; if (window.history.replaceState) window.history.replaceState({}, '', currentUrl);"
                       placeholder="School Name (e.g. Royal Crown College)"
                       class="px-3 py-1.5 bg-slate-800 border border-white/20 rounded-lg text-xs text-white placeholder-white/40 focus:outline-none focus:ring-1 focus:ring-emerald-400 w-48 sm:w-60">
                <button type="submit"
                        class="px-3.5 py-1.5 bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold rounded-lg text-xs transition">
                    Apply
                </button>
            </form>
        </div>
    </div>

    <!-- The Authentic Proposal Letter Paper Surface (Rendered for Screen, Print & Canvas Export) -->
    <div class="flex justify-center">
        <article id="letter-paper"
                 class="print-paper w-full bg-white text-slate-900 border border-slate-200 shadow-2xl rounded-sm p-7 sm:p-14 lg:p-16 font-serif text-[15px] leading-relaxed relative overflow-hidden">

            <!-- Security Watermark Pattern -->
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
                            <div class="text-xs uppercase tracking-widest text-slate-600 font-bold">Educational Infrastructure &amp; Deployment Taskforce</div>
                            <div class="text-[11px] text-slate-500">Lagos, Nigeria &bull; extremesolutions.com.ng &bull; <span class="font-mono text-emerald-700 font-semibold">sms.extremesolutions.com.ng</span></div>
                        </div>
                    </div>
                    <div class="text-left sm:text-right font-mono text-xs text-slate-600 space-y-1">
                        <div>PROPOSAL CODE: <strong class="text-slate-950">{{ $refCode }}</strong></div>
                        <div>DATE: <span class="text-slate-900">{{ $dateStr }}</span></div>
                        <div class="text-[10px] text-emerald-700 font-semibold uppercase tracking-wider">&bull; CLASSIFICATION: PARTNERSHIP BRIEF</div>
                    </div>
                </div>
            </header>

            <!-- Recipient Block (Dynamically Bound to Alpine) -->
            <div class="mb-6 font-sans text-sm relative z-10">
                <div class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">PREPARED EXCLUSIVELY FOR:</div>
                <div class="font-bold text-slate-950 text-base">
                    <span x-text="currentProprietor">{{ $proprietor }}</span>, Proprietress / Principal
                </div>
                <div class="text-slate-700 font-medium text-sm">
                    <span x-text="currentSchool">{{ $school }}</span>
                </div>
            </div>

            <!-- Subject Line -->
            <div class="mb-8 font-sans font-bold text-slate-950 text-sm sm:text-base border-l-4 border-slate-950 pl-4 py-1.5 bg-slate-50 relative z-10">
                RE: Institutional Partnership for Broadsheet Automation and Student CBT Readiness
            </div>

            <!-- Salutation -->
            <div class="mb-6 relative z-10">
                <p class="font-bold text-slate-950 text-base">
                    Dear <span x-text="currentProprietor">{{ $proprietor }}</span>,
                </p>
            </div>

            <!-- Letter Body Content -->
            <div class="space-y-5 text-justify relative z-10">
                <p>
                    Every academic term, Nigerian private secondary schools lose dozens of administrative hours to manual calculation delays, broadsheet errors, and the friction of tracking outstanding tuition payments.
                </p>

                <p>
                    At the same time, parents increasingly expect secondary schools to prepare their children for a digital world&mdash;specifically ensuring they are fully confident in Computer-Based Testing (CBT) before sitting for national examinations.
                </p>

                <p>
                    ExtremeSolutions is extending an institutional partnership invitation to <strong class="text-slate-950" x-text="currentSchool">{{ $school }}</strong> to deploy our modern School Operating System (<a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-700 underline font-mono font-semibold">sms.extremesolutions.com.ng</a>) starting this term.
                </p>

                <h2 class="font-sans font-bold text-slate-950 text-sm uppercase tracking-wider pt-3 border-b border-slate-200 pb-1">
                    The Three Operational Challenges We Solve for Your School
                </h2>

                <!-- Comparative Transformation Table -->
                <div class="my-6 overflow-x-auto border border-slate-200 rounded-sm font-sans text-xs">
                    <table class="min-w-full divide-y divide-slate-200">
                        <thead class="bg-slate-50">
                            <tr>
                                <th class="px-4 py-3 text-left font-bold text-slate-700 uppercase tracking-wider w-1/2">Operational Bottleneck</th>
                                <th class="px-4 py-3 text-left font-bold text-emerald-800 uppercase tracking-wider w-1/2 bg-emerald-50/50">The ExtremeSolutions Transformation</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 bg-white">
                            <tr>
                                <td class="px-4 py-3.5 align-top text-slate-700">
                                    <strong class="text-slate-900 block mb-1">Manual Broadsheet Delays:</strong>
                                    Teachers spend 2&ndash;3 weeks using calculators, leading to calculation discrepancies and delayed vacation releases.
                                </td>
                                <td class="px-4 py-3.5 align-top text-slate-700 bg-emerald-50/20">
                                    <strong class="text-emerald-900 block mb-1">1-Click Automated Report Dossiers:</strong>
                                    Teachers input raw scores. The system automatically computes continuous assessments (CA), percentages, positions, and prints branded PDF report cards instantly.
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3.5 align-top text-slate-700">
                                    <strong class="text-slate-900 block mb-1">Tuition Leakage &amp; Debtors:</strong>
                                    Unclear records on partial payments and parents defaulting on fees prior to termly examinations.
                                </td>
                                <td class="px-4 py-3.5 align-top text-slate-700 bg-emerald-50/20">
                                    <strong class="text-emerald-900 block mb-1">Real-Time Financial Ledger:</strong>
                                    A clean, single-screen dashboard showing exact fee balances, generating automatic receipts and payment tracking.
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3.5 align-top text-slate-700">
                                    <strong class="text-slate-900 block mb-1">JAMB CBT Shock:</strong>
                                    Students reaching SS3 with zero practical computer exposure, struggling with navigation and timing on test day.
                                </td>
                                <td class="px-4 py-3.5 align-top text-slate-700 bg-emerald-50/20">
                                    <strong class="text-emerald-900 block mb-1">In-House CBT Assessment Module:</strong>
                                    Students sit for routine class tests and terminal mock exams on a digital interface, making computer interaction second nature.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 class="font-sans font-bold text-slate-950 text-sm uppercase tracking-wider pt-3 border-b border-slate-200 pb-1">
                    Our 48-Hour Assisted Deployment Commitment
                </h2>

                <p>
                    We recognize that your staff is busy. You do not need to figure this software out on your own:
                </p>

                <ul class="list-disc pl-6 space-y-2">
                    <li>
                        <strong>Zero Data Burden:</strong> Provide us your student lists on paper or Excel&mdash;our technical team migrates the entire student body into your secure database within 48 hours.
                    </li>
                    <li>
                        <strong>On-Site Staff Certification:</strong> We conduct a 1-hour hands-on training workshop at <span class="font-semibold text-slate-950" x-text="currentSchool">{{ $school }}</span> for your teachers and examination officers.
                    </li>
                    <li>
                        <strong>Dedicated Support:</strong> We remain on call throughout your examination and result-generation periods to guarantee zero system downtime.
                    </li>
                </ul>

                <p>
                    We propose a brief 15-minute technical briefing and live broadsheet walk-through at your administrative office next week, where we will generate a live sample broadsheet for your review.
                </p>
            </div>

            <!-- Authentic Handwritten Signoff Block -->
            <div class="mt-10 pt-6 border-t border-slate-200 relative z-10">
                <p class="mb-2">Respectfully yours,</p>

                <!-- Authentic Samuel Ekunyan Pen Signature -->
                <div class="my-1">
                    <img src="{{ asset('images/signature.png') }}"
                         alt="Samuel Ekunyan Signature"
                         class="h-20 w-auto opacity-95"
                         style="filter: contrast(1.15);">
                </div>

                <div class="font-sans text-sm">
                    <div class="font-bold text-slate-950 font-mono text-base">Samuel Ekunyan</div>
                    <div class="text-slate-700 font-medium">Lead Systems Architect, ExtremeSolutions</div>
                    <div class="text-slate-500 font-mono text-xs mt-1">
                        <a href="https://sms.extremesolutions.com.ng" class="text-emerald-700 underline font-semibold">sms.extremesolutions.com.ng</a> &bull; Direct Line: <span class="text-slate-900 font-bold">+234 905 258 5622</span>
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

    <!-- Bottom Personalize Card (Zero Popups) -->
    <div class="no-print mt-8 bg-[#0c1f3a] border border-white/15 rounded-xl p-5 sm:p-6 shadow-xl font-sans text-white">
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
            <div>
                <h3 class="text-sm font-bold text-white">Customize this Proposal for Another School</h3>
                <p class="text-xs text-white/70 mt-0.5">Input the target proprietor and school name to generate a tailored direct link:</p>
            </div>
            <form @submit.prevent="updateProposal()" class="flex flex-wrap items-center gap-2">
                <input type="text"
                       x-model="inputProprietor"
                       @input="currentProprietor = inputProprietor || '{{ addslashes($proprietor) }}'; if (window.history.replaceState) window.history.replaceState({}, '', currentUrl);"
                       placeholder="Proprietor Name (e.g. Mrs. Adeleke)"
                       class="px-3 py-1.5 bg-slate-800 border border-white/20 rounded-lg text-xs text-white placeholder-white/40 focus:outline-none focus:ring-1 focus:ring-emerald-400 w-44 sm:w-52">
                <input type="text"
                       x-model="inputSchool"
                       @input="currentSchool = inputSchool || '{{ addslashes($school) }}'; if (window.history.replaceState) window.history.replaceState({}, '', currentUrl);"
                       placeholder="School Name (e.g. Royal Crown College)"
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
