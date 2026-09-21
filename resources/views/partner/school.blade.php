@extends('layouts.letter')

@section('title', 'I have a message for you from ExtremeSolutions')
@section('description', 'Institutional Partnership for Broadsheet Automation and Student CBT Readiness by ExtremeSolutions.')

@section('content')
<div class="max-w-4xl mx-auto">

    <!-- Top Action Console (Clean Document Actions Only - No Forms) -->
    <div class="no-print mb-6">
        <div class="flex flex-wrap items-center justify-between gap-3 bg-[#0c1f3a] border border-white/15 p-3.5 sm:p-4 rounded-xl shadow-xl text-xs font-mono text-white">
            <div class="flex items-center space-x-2.5">
                <span class="inline-block w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                <span>PROPOSAL CODE: <strong class="text-white">{{ $refCode }}</strong></span>
                <span class="text-white/30 hidden sm:inline">|</span>
                <span class="text-white/70 hidden sm:inline">{{ $dateStr }}</span>
            </div>

            <div class="flex flex-wrap items-center gap-2">
                <!-- Save As Image Button -->
                <button type="button"
                        id="btn-save-image"
                        onclick="window.downloadProposalImage()"
                        class="inline-flex items-center px-3.5 py-2 bg-white/10 hover:bg-white/20 text-white font-medium rounded-lg text-xs transition border border-white/15 cursor-pointer"
                        title="Download this proposal as a high-resolution PNG image">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-[#00ff88]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span id="save-image-text">Save as Image</span>
                </button>

                <!-- Download PDF Button -->
                <a id="btn-download-pdf"
                   href="{{ $exportPdfUrl }}"
                   target="_blank"
                   class="inline-flex items-center px-3.5 py-2 bg-white/10 hover:bg-white/20 text-white font-medium rounded-lg text-xs transition border border-white/15"
                   title="Download formatted A4 PDF">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span>Download PDF</span>
                </a>

                <!-- WhatsApp Share Button -->
                <a id="btn-whatsapp-share"
                   href="https://api.whatsapp.com/send?text={{ urlencode('I have a message for you from ExtremeSolutions:\n\nRE: Institutional Partnership for Broadsheet Automation and Student CBT Readiness\n\n' . ($isPersonalized ? 'Prepared for ' . $proprietor . ' (' . $school . '):\n' : '') . url()->full()) }}"
                   target="_blank"
                   class="inline-flex items-center px-4 py-2 bg-[#25D366] hover:bg-[#20bd5a] text-slate-950 font-bold rounded-lg text-xs transition shadow-sm"
                   title="Share on WhatsApp">
                    <svg class="w-3.5 h-3.5 mr-1.5 fill-current" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.203c.043.071.043.419-.101.824z"/>
                    </svg>
                    <span>WhatsApp</span>
                </a>

                <!-- Copy Link Button -->
                <button type="button"
                        id="btn-copy-link"
                        onclick="window.copyProposalLink()"
                        class="inline-flex items-center px-3.5 py-2 bg-slate-800 hover:bg-slate-700 text-white font-medium rounded-lg text-xs transition border border-slate-700 cursor-pointer">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                    <span id="copy-link-text">Copy Link</span>
                </button>
            </div>
        </div>
    </div>

    <!-- The Authentic Proposal Letter Paper Surface (Rendered for Screen, Print & Canvas Export) -->
    <div class="flex justify-center">
        <article id="letter-paper"
                 class="print-paper w-full bg-white text-slate-900 border border-slate-200 shadow-2xl rounded-sm p-7 sm:p-14 lg:p-16 font-serif text-[15px] leading-relaxed relative">

            <!-- Official Institutional Letterhead -->
            <header class="border-b-2 border-slate-950 pb-5 mb-8 font-sans">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/es-mark.png') }}" alt="ExtremeSolutions" class="h-12 w-auto">
                    <div>
                        <div class="text-2xl font-black tracking-tight text-slate-950 font-mono">EXTREMESOLUTIONS</div>
                        <div class="text-xs uppercase tracking-widest text-slate-600 font-bold">Educational Infrastructure &amp; Deployment Taskforce</div>
                        <div class="text-[11px] text-slate-500">extremesolutions.com.ng &bull; <span class="font-mono text-emerald-700 font-semibold">sms.extremesolutions.com.ng</span></div>
                    </div>
                </div>
            </header>

            <!-- Recipient Block -->
            <div class="mb-6 font-sans text-sm">
                <div class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">
                    {{ $isPersonalized ? 'PREPARED EXCLUSIVELY FOR:' : 'PREPARED FOR:' }}
                </div>
                <div class="font-bold text-slate-950 text-base">
                    {{ $proprietor }}{{ $isPersonalized ? ', Proprietress / Principal' : '' }}
                </div>
                <div class="text-slate-700 font-medium text-sm">
                    {{ $school }}
                </div>
            </div>

            <!-- Subject Line -->
            <div class="mb-8 font-sans font-bold text-slate-950 text-sm sm:text-base border-l-4 border-slate-950 pl-4 py-1.5 bg-slate-50">
                RE: Institutional Partnership for Broadsheet Automation and Student CBT Readiness
            </div>

            <!-- Salutation -->
            <div class="mb-6">
                <p class="font-bold text-slate-950 text-base">
                    Dear {{ $isPersonalized ? $proprietor : 'School Proprietor / Principal' }},
                </p>
            </div>

            <!-- Letter Body Content -->
            <div class="space-y-5 text-justify">
                <p>
                    Every academic term, Nigerian private secondary schools lose dozens of administrative hours to manual calculation delays, broadsheet errors, and the friction of tracking outstanding tuition payments.
                </p>

                <p>
                    At the same time, parents increasingly expect secondary schools to prepare their children for a digital world&mdash;specifically ensuring they are fully confident in Computer-Based Testing (CBT) before sitting for national examinations.
                </p>

                <p>
                    ExtremeSolutions is extending an institutional partnership invitation to <strong class="text-slate-950">{{ $school }}</strong> to deploy our modern School Operating System (<a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-700 underline font-mono font-semibold">sms.extremesolutions.com.ng</a>) starting this term.
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
                        <strong>On-Site Staff Certification:</strong> We conduct a 1-hour hands-on training workshop at <span class="font-semibold text-slate-950">{{ $school }}</span> for your teachers and examination officers.
                    </li>
                    <li>
                        <strong>Dedicated Support:</strong> We remain on call throughout your examination and result-generation periods to guarantee zero system downtime.
                    </li>
                </ul>

                <p>
                    We propose a brief 15-minute technical briefing and live broadsheet walk-through at your administrative office next week, where we will generate a live sample broadsheet for your review.
                </p>
            </div>

            <!-- Authentic Handwritten Signoff Block (Upside-Down Rotated Orientation) -->
            <div class="mt-10 pt-6 border-t border-slate-200">
                <p class="mb-2">Respectfully yours,</p>

                <!-- Rotated Authentic Signature / Monogram -->
                <div class="my-2">
                    <img src="{{ asset('images/signature.png') }}"
                         alt="Signature"
                         class="h-16 w-auto opacity-95"
                         style="filter: contrast(1.15); max-width: 220px;">
                </div>

                <div class="font-sans text-sm">
                    <div class="font-bold text-slate-950 font-mono text-base">Samuel Ekunyan</div>
                    <div class="text-slate-700 font-medium">Lead Systems Architect, ExtremeSolutions</div>
                    <div class="text-slate-500 font-mono text-xs mt-1">
                        <a href="https://sms.extremesolutions.com.ng" class="text-emerald-700 underline font-semibold">sms.extremesolutions.com.ng</a>
                    </div>
                </div>
            </div>

        </article>
    </div>

</div>

<!-- Native JavaScript for Copy Link and Image Export -->
<script>
(function() {
    window.copyProposalLink = function() {
        const copyText = document.getElementById('copy-link-text');
        const url = window.location.href;
        navigator.clipboard.writeText(url).then(function() {
            if (copyText) {
                const orig = copyText.textContent;
                copyText.textContent = 'Copied!';
                setTimeout(function() { copyText.textContent = orig; }, 2500);
            }
        }).catch(function() {
            alert('Copied URL: ' + url);
        });
    };

    window.downloadProposalImage = function() {
        const btnText = document.getElementById('save-image-text');
        if (btnText) btnText.textContent = 'Generating...';

        const target = document.getElementById('letter-paper');
        if (!target) {
            if (btnText) btnText.textContent = 'Save as Image';
            return;
        }

        const runExport = function() {
            window.html2canvas(target, {
                scale: 2,
                useCORS: true,
                allowTaint: true,
                backgroundColor: '#ffffff',
                logging: false
            }).then(function(canvas) {
                const safeName = '{{ addslashes(Str::slug($school)) }}' || 'school-proposal';
                const link = document.createElement('a');
                link.download = 'ExtremeSolutions-School-Proposal-' + safeName + '.png';
                link.href = canvas.toDataURL('image/png');
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                if (btnText) btnText.textContent = 'Save as Image';
            }).catch(function(err) {
                console.error('html2canvas error:', err);
                if (btnText) btnText.textContent = 'Save as Image';
                alert('Could not generate image. Please use Download PDF.');
            });
        };

        if (typeof window.html2canvas === 'undefined') {
            const s = document.createElement('script');
            s.src = 'https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js';
            s.onload = runExport;
            s.onerror = function() {
                if (btnText) btnText.textContent = 'Save as Image';
                alert('Could not load image generation tool. Please use Download PDF.');
            };
            document.head.appendChild(s);
        } else {
            runExport();
        }
    };
})();
</script>
@endsection
