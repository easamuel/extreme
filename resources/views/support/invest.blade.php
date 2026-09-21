@extends('layouts.letter')

@section('title', 'ExtremeSolutions Commercial Partner Advance • Option B')

@section('meta_tags')
<meta name="description" content="ExtremeSolutions Structured Founding Partner Advance — Capped 1.3x repayment from recurring termly secondary school software fees.">
<meta property="og:title" content="ExtremeSolutions Commercial Partner Advance">
<meta property="og:description" content="Structured 1.3x commercial advance returned directly from the termly software fees of our first 3 to 5 onboarded Nigerian secondary schools.">
<meta property="og:type" content="article">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset('images/es-mark.png') }}">
@endsection

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8 sm:py-12">

    <!-- Recipient Notice & Action Bar (Zero Forms for Public/Recipient) -->
    <div class="no-print mb-8 bg-slate-900 border border-slate-800 rounded-xl p-4 sm:p-5 text-white shadow-xl flex flex-col sm:flex-row items-center justify-between gap-4">
        <div>
            <div class="flex items-center space-x-2">
                <span class="inline-block w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                <span class="text-xs uppercase font-mono tracking-widest text-emerald-400 font-bold">COMMERCIAL PARTNER ADVANCE &bull; OPTION B</span>
            </div>
            <p class="text-xs sm:text-sm text-slate-300 mt-1">
                @if(!empty($isPersonalized))
                    Prepared exclusively for <strong class="text-white">{{ $name }}</strong>.
                @else
                    Structured commercial advance memo. Capped 1.3x repayment from termly school revenues.
                @endif
            </p>
        </div>

        <!-- Export & Share Buttons -->
        <div class="flex flex-wrap items-center gap-2">
            <!-- Save as Image (PNG) -->
            <button type="button"
                    id="btn-save-image"
                    onclick="window.downloadInvestImage()"
                    class="inline-flex items-center px-3.5 py-2 bg-slate-800 hover:bg-slate-700 text-white font-medium rounded-lg text-xs transition border border-slate-700 cursor-pointer shadow-sm">
                <svg class="w-3.5 h-3.5 mr-1.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <span id="save-image-text">Save as Image</span>
            </button>

            <!-- Download PDF -->
            <a href="{{ $exportPdfUrl }}"
               id="btn-download-pdf"
               class="inline-flex items-center px-3.5 py-2 bg-slate-800 hover:bg-slate-700 text-white font-medium rounded-lg text-xs transition border border-slate-700 shadow-sm">
                <svg class="w-3.5 h-3.5 mr-1.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span>Download PDF</span>
            </a>

            <!-- WhatsApp Share -->
            <a href="https://api.whatsapp.com/send?text={{ urlencode("I have a message for you from ExtremeSolutions:\n\nRE: Structured Founding Partner Advance — Commercial Deployment of ExtremeSolutions School OS\n\n" . (!empty($name) && $name !== 'Sir/Madam' ? "Prepared for {$name}:\n" : "") . url()->current()) }}"
               target="_blank"
               class="inline-flex items-center px-3.5 py-2 bg-[#25D366] hover:bg-[#20bd5a] text-slate-950 font-bold rounded-lg text-xs transition shadow-sm">
                <svg class="w-3.5 h-3.5 mr-1.5 fill-current" viewBox="0 0 24 24">
                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.203c.043.071.043.419-.101.824z"/>
                </svg>
                <span>WhatsApp</span>
            </a>

            <!-- Copy Link -->
            <button type="button"
                    onclick="window.copyInvestLink()"
                    class="inline-flex items-center px-3.5 py-2 bg-slate-800 hover:bg-slate-700 text-white font-medium rounded-lg text-xs transition border border-slate-700 cursor-pointer shadow-sm">
                <svg class="w-3.5 h-3.5 mr-1.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                </svg>
                <span id="copy-link-text">Copy Link</span>
            </button>
        </div>
    </div>

    <!-- The Authentic Executive Letter Paper Surface -->
    <div class="flex justify-center">
        <article id="letter-paper"
                 class="print-paper max-w-[794px] w-full mx-auto bg-white p-6 sm:p-10 md:p-12 text-slate-900 font-sans text-[13px] leading-relaxed shadow-2xl rounded-sm border border-slate-200 print:border-none print:shadow-none print:p-0 relative">

            <!-- Top Header -->
            <div class="flex justify-between items-start border-b border-slate-200 pb-3 mb-4">
                <div class="flex items-center space-x-3.5">
                    <img src="{{ !empty($logoBase64) ? $logoBase64 : asset('images/es-mark.png') }}" alt="ExtremeSolutions" class="h-10 w-auto">
                    <div>
                        <h1 class="text-lg font-bold tracking-tight text-slate-950 font-mono">EXTREMESOLUTIONS</h1>
                        <p class="text-xs font-semibold text-emerald-700 tracking-wide uppercase">Founding Partner Advance &bull; Commercial Option B</p>
                        <p class="text-[11px] text-slate-500 mt-0.5">Lagos, Nigeria &bull; extremesolutions.com.ng &bull; <span class="text-emerald-700 font-medium">sms.extremesolutions.com.ng</span></p>
                    </div>
                </div>
                <div class="text-right text-[11px] text-slate-800 font-medium font-mono">
                    <p>Date: {{ $dateStr }}</p>
                    <p class="text-slate-600">Ref: {{ $refCode }}</p>
                </div>
            </div>

            <!-- Recipient & Subject -->
            <div class="mb-4">
                <p class="font-semibold text-slate-900 text-sm">Dear {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Valued Partner') }},</p>
                <div class="border-l-2 border-slate-950 pl-3 py-1 mt-2 bg-slate-50">
                    <p class="font-bold text-slate-950 text-[13px]">RE: Structured Founding Partner Advance &mdash; Commercial Deployment of ExtremeSolutions School OS</p>
                </div>
            </div>

            <!-- Letter Body Content -->
            <div class="space-y-3.5 text-slate-700">
                <p>
                    ExtremeSolutions is building a sustainable, high-margin educational technology enterprise. We are not an NGO or a charity; we are a commercial systems venture deploying an all-in-one School Operating System (<a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-700 font-medium underline">sms.extremesolutions.com.ng</a>) to solve deep operational bottlenecks in Nigerian secondary schools.
                </p>

                <!-- Section 1 -->
                <div>
                    <h2 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-1">
                        The Commercial Mechanism: 1.3x Fixed Capped Repayment
                    </h2>
                    <p class="mb-1.5">
                        We have structured a clean, revenue-linked advance mechanism for private commercial backers:
                    </p>
                    <ul class="list-disc pl-4 space-y-0.5 text-xs">
                        <li><strong class="text-slate-900">Deployment Advance Principal:</strong> Backers participate with a lean advance of <strong>₦50,000</strong> or <strong>₦100,000</strong> per unit.</li>
                        <li><strong class="text-slate-900">1.3x Fixed Repayment Cap:</strong> Capped at a fixed <strong>1.3x return</strong> (₦50k advance returns <strong>₦65k</strong>; ₦100k returns <strong>₦130k</strong>).</li>
                        <li><strong class="text-slate-900">Priority Revenue Recoupment:</strong> Repayments are funded and disbursed directly from termly software fees (₦500 – ₦1,000/student) across our first 3 to 5 onboarded secondary schools.</li>
                        <li><strong class="text-slate-900">Self-Sustaining Milestone:</strong> Once fulfilled, capital is fully returned with yield, while the institutions generate permanent recurring software revenues that sustain our operations indefinitely.</li>
                    </ul>
                </div>

                <!-- Section 2 -->
                <div>
                    <h2 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-1">
                        Why the Unit Economics Support This Advance
                    </h2>
                    <p>
                        We charge schools an integrated termly fee of <strong>₦500 to ₦1,000 per student</strong> (generating ₦150,000 – ₦300,000 per term for an average 250-student school). 
                        <span class="bg-slate-100 px-1 py-0.5 font-semibold text-slate-950">Onboarding just 3 secondary schools makes our core infrastructure completely self-sustaining</span>, generating ₦450,000 to ₦900,000/term to comfortably service repayments.
                    </p>
                </div>

                <!-- Section 3 -->
                <div>
                    <h2 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-1">
                        Capital Allocation: Customer Acquisition &amp; On-Ground Deployment
                    </h2>
                    <p class="mb-1">
                        Schools pay after their first successful broadsheet run. Software alone cannot close contracts; physical execution does. Your advance directly funds:
                    </p>
                    <ul class="list-disc pl-4 space-y-0.5 text-xs">
                        <li><strong>Field Transit &amp; Direct Outreach:</strong> Transport for direct school demos with proprietors and principals.</li>
                        <li><strong>48-Hour Onboarding &amp; Data Entry:</strong> Digitizing physical student registers and class databases.</li>
                        <li><strong>Staff Induction Materials:</strong> Printing teacher operation handbooks and student CBT orientation guides.</li>
                    </ul>
                </div>

                <!-- Section 4: Bank Details -->
                <div class="mt-3.5 p-3.5 bg-slate-50 border border-slate-200 rounded-md">
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Dedicated Commercial Advance Account</p>
                        <button type="button" onclick="navigator.clipboard.writeText('0236642821'); this.innerText='Copied!'; setTimeout(() => this.innerText='Copy No', 2000);" class="text-[11px] bg-slate-200 hover:bg-slate-300 text-slate-800 font-mono px-2 py-0.5 rounded transition cursor-pointer">Copy No</button>
                    </div>
                    <div class="grid grid-cols-2 gap-3 text-xs">
                        <div>
                            <span class="text-slate-500 text-[11px] block">Bank Name</span>
                            <strong class="text-slate-950 font-semibold">Wema Bank Plc</strong>
                        </div>
                        <div>
                            <span class="text-slate-500 text-[11px] block">Account Name</span>
                            <strong class="text-slate-950 font-semibold">Samuel Ekunyan</strong>
                        </div>
                        <div>
                            <span class="text-slate-500 text-[11px] block">Account Number</span>
                            <span class="font-mono font-bold text-sm text-slate-950">0236642821</span>
                        </div>
                        <div>
                            <span class="text-slate-500 text-[11px] block">Transaction Narration</span>
                            <span class="font-mono text-slate-700">EXS Partner Advance / {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Partner') }}</span>
                        </div>
                    </div>
                </div>

                <p class="text-xs italic text-slate-600">
                    Backers receive a formal signed term sheet, direct monthly photo/audit reports, and priority disbursement from onboarded school revenues.
                </p>
            </div>

            <!-- Sign-off -->
            <div class="mt-4 pt-3 border-t border-slate-200 flex justify-between items-end">
                <div>
                    <p class="text-xs text-slate-500">Warm regards,</p>
                    <div class="my-1">
                        <img src="{{ !empty($sigBase64) ? $sigBase64 : asset('images/signature.png') }}"
                             alt="Signature"
                             class="h-10 w-auto opacity-95"
                             style="filter: contrast(1.15); max-width: 170px;">
                    </div>
                    <p class="font-bold text-slate-950 text-sm">Samuel Ekunyan</p>
                    <p class="text-[11px] text-slate-600">Founder &amp; Principal Systems Architect, ExtremeSolutions</p>
                    <p class="text-[11px] text-slate-600 font-mono"><a href="mailto:samuel@ekunyansamuel.dev" class="text-emerald-700 underline">samuel@ekunyansamuel.dev</a> &bull; <a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-700 underline">sms.extremesolutions.com.ng</a></p>
                    <p class="text-[11px] font-medium text-slate-800 mt-0.5">Direct Line / WhatsApp: <a href="tel:+2349052585622" class="hover:text-emerald-700 font-semibold">+234 905 258 5622</a></p>
                </div>
            </div>

        </article>
    </div>

</div>

<!-- Native JavaScript for Copy Link and Robust Image Export -->
<script>
(function() {
    window.copyInvestLink = function() {
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

    window.downloadInvestImage = function() {
        const btnText = document.getElementById('save-image-text');
        if (btnText) btnText.textContent = 'Generating...';

        const target = document.getElementById('letter-paper');
        if (!target) {
            if (btnText) btnText.textContent = 'Save as Image';
            return;
        }

        const name = '{{ addslashes($name) }}';
        const safeName = (name || 'partner-advance').toLowerCase().replace(/[^a-z0-9]+/g, '-');
        const filename = 'ExtremeSolutions-Partner-Advance-' + safeName + '.png';

        const triggerDownload = function(dataUrl) {
            const link = document.createElement('a');
            link.download = filename;
            link.href = dataUrl;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            if (btnText) btnText.textContent = 'Save as Image';
        };

        // 1. Primary Engine: htmlToImage (native browser rendering, no CSS parser crashes)
        if (window.htmlToImage && typeof window.htmlToImage.toPng === 'function') {
            window.htmlToImage.toPng(target, {
                quality: 0.98,
                backgroundColor: '#ffffff',
                pixelRatio: 2,
                cacheBust: false
            }).then(function(dataUrl) {
                triggerDownload(dataUrl);
            }).catch(function(err) {
                console.warn('htmlToImage engine had an issue, falling back to html2canvas:', err);
                fallbackHtml2Canvas();
            });
        } else {
            fallbackHtml2Canvas();
        }

        function fallbackHtml2Canvas() {
            if (typeof window.html2canvas !== 'undefined') {
                window.html2canvas(target, {
                    scale: 2,
                    useCORS: true,
                    allowTaint: true,
                    backgroundColor: '#ffffff',
                    logging: false
                }).then(function(canvas) {
                    triggerDownload(canvas.toDataURL('image/png'));
                }).catch(function(err2) {
                    console.error('Canvas export error:', err2);
                    if (btnText) btnText.textContent = 'Save as Image';
                    const pdfBtn = document.getElementById('btn-download-pdf');
                    if (pdfBtn && pdfBtn.href) {
                        window.open(pdfBtn.href, '_blank');
                    } else {
                        window.print();
                    }
                });
            } else {
                if (btnText) btnText.textContent = 'Save as Image';
                window.print();
            }
        }
    };
})();
</script>
@endsection

