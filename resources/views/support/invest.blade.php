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
                 class="print-paper w-full bg-white text-slate-900 border border-slate-200 shadow-2xl rounded-sm p-7 sm:p-14 lg:p-16 font-serif text-[15px] leading-relaxed relative">

            <!-- Official Institutional Letterhead -->
            <header class="border-b-2 border-slate-950 pb-5 mb-8 font-sans">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div class="flex items-center space-x-4">
                        <img src="{{ !empty($logoBase64) ? $logoBase64 : asset('images/es-mark.png') }}" alt="ExtremeSolutions" class="h-12 w-auto">
                        <div>
                            <div class="text-2xl font-black tracking-tight text-slate-950 font-mono">EXTREMESOLUTIONS</div>
                            <div class="text-xs uppercase tracking-widest text-slate-700 font-bold">Founding Partner Advance &bull; Commercial Option B</div>
                            <div class="text-[11px] text-slate-500 font-mono">Lagos, Nigeria &bull; extremesolutions.com.ng &bull; <span class="text-emerald-700 font-semibold">sms.extremesolutions.com.ng</span></div>
                        </div>
                    </div>
                    <div class="text-xs font-mono text-slate-600 sm:text-right">
                        <div><span class="font-bold text-slate-800">Date:</span> {{ $dateStr }}</div>
                        <div class="text-[11px] text-slate-400">Ref: {{ $refCode }}</div>
                    </div>
                </div>
            </header>

            <!-- Recipient Salutation -->
            <div class="mb-6 font-sans">
                <p class="font-bold text-slate-950 text-base">
                    Dear {{ $name }},
                </p>
            </div>

            <!-- Subject Line -->
            <div class="mb-8 font-sans font-bold text-slate-950 text-sm sm:text-base border-l-4 border-slate-950 pl-4 py-2 bg-slate-50">
                RE: Structured Founding Partner Advance &mdash; Commercial Deployment of ExtremeSolutions School OS
            </div>

            <!-- Letter Body Content -->
            <div class="space-y-6 text-slate-800 text-[15px] leading-relaxed">
                <p>
                    ExtremeSolutions is building a sustainable, high-margin educational technology enterprise. We are not an NGO or a charity; we are a commercial systems venture deploying an all-in-one School Operating System (<a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-700 font-mono font-semibold underline">sms.extremesolutions.com.ng</a>) to solve deep operational bottlenecks in Nigerian secondary schools.
                </p>

                <p>
                    For commercial partners and backers seeking a clearly defined financial return alongside foundational institutional impact, we provide this structured <strong>Founding Partner Advance</strong>.
                </p>

                <!-- Section 1 -->
                <div class="pt-2">
                    <h2 class="font-sans font-bold text-slate-950 text-sm uppercase tracking-wider border-b border-slate-200 pb-1 mb-3">
                        The Commercial Mechanism: 1.3x Fixed Capped Repayment
                    </h2>
                    <p class="mb-3">
                        We have structured a clean, revenue-linked advance mechanism for private commercial backers:
                    </p>
                    <div class="space-y-3 pl-3 sm:pl-4 border-l-2 border-slate-200">
                        <p>
                            <strong class="text-slate-950">Deployment Advance Principal:</strong> Backers participate with a lean deployment advance of <strong>₦50,000</strong> or <strong>₦100,000</strong> per unit.
                        </p>
                        <p>
                            <strong class="text-slate-950">1.3x Fixed Repayment Cap:</strong> Your advance is capped at a fixed <strong>1.3x return</strong> (₦50,000 advance returns <strong>₦65,000</strong>; ₦100,000 advance returns <strong>₦130,000</strong>).
                        </p>
                        <p>
                            <strong class="text-slate-950">Priority Revenue Recoupment:</strong> Repayments are funded and disbursed directly from the termly software fees (₦500 to ₦1,000 per student) collected across our first 3 to 5 onboarded secondary schools.
                        </p>
                        <p>
                            <strong class="text-slate-950">Self-Sustaining Milestone:</strong> Once fulfilled, your capital is fully returned with yield, while the onboarded institutions continue generating permanent, recurring software revenues that sustain our operations indefinitely without external capital.
                        </p>
                    </div>
                </div>

                <!-- Section 2 -->
                <div class="pt-2">
                    <h2 class="font-sans font-bold text-slate-950 text-sm uppercase tracking-wider border-b border-slate-200 pb-1 mb-3">
                        Why the Unit Economics Support This Advance
                    </h2>
                    <p>
                        ExtremeSolutions charges schools a recurring, per-student software fee of <strong>₦500 to ₦1,000 per term</strong>, seamlessly integrated into standard termly administrative dues.
                    </p>
                    <ul class="list-disc pl-6 space-y-1.5 my-3">
                        <li><strong>Average Secondary School Size:</strong> 200–350 students.</li>
                        <li><strong>Termly School Revenue:</strong> ₦150,000 – ₦300,000 per institution.</li>
                        <li><strong>The Breakeven Threshold:</strong> <strong>Onboarding just 3 secondary schools</strong> generates between ₦450,000 and ₦900,000 per term in recurring revenue. This cash flow comfortably services the 1.3x advance fulfillment while covering all ongoing operational expenses.</li>
                    </ul>
                </div>

                <!-- Section 3 -->
                <div class="pt-2">
                    <h2 class="font-sans font-bold text-slate-950 text-sm uppercase tracking-wider border-b border-slate-200 pb-1 mb-3">
                        Capital Allocation: Customer Acquisition &amp; On-Ground Deployment
                    </h2>
                    <p>
                        In enterprise educational sales, schools only pay once their first terminal broadsheet is successfully delivered. Software alone cannot close contracts; physical execution closes contracts.
                    </p>
                    <p>
                        Your deployment advance is deployed directly into frontline execution:
                    </p>
                    <ul class="list-disc pl-6 space-y-1.5 my-3">
                        <li><strong>Field Transit &amp; Direct Outreach:</strong> Covering physical transport for direct school pitch meetings and product demonstrations to proprietors.</li>
                        <li><strong>48-Hour Onboarding &amp; Data Entry:</strong> Digitizing physical student registers and configuring school grading databases.</li>
                        <li><strong>Staff Induction Materials:</strong> Printing physical teacher operation handbooks and student CBT orientation guides.</li>
                    </ul>
                </div>

                <!-- Section 4 -->
                <div class="pt-2">
                    <h2 class="font-sans font-bold text-slate-950 text-sm uppercase tracking-wider border-b border-slate-200 pb-1 mb-3">
                        Audit, Accountability &amp; Terms
                    </h2>
                    <p>
                        We operate with absolute transparency and institutional rigor:
                    </p>
                    <ul class="list-disc pl-6 space-y-1.5 my-3">
                        <li><strong>Written Advance Confirmation:</strong> Formal signed term sheet acknowledging the exact advance amount and fixed 1.3x repayment schedule.</li>
                        <li><strong>Termly Progress Reports:</strong> Detailed visual updates confirming signed schools, student enrollment numbers, and revenue distribution timelines.</li>
                        <li><strong>Roll of Honor:</strong> Recognition as a Founding Commercial Technology Sponsor.</li>
                    </ul>
                </div>

                <!-- Section 5: Dedicated Commercial Account -->
                <div class="pt-2">
                    <h2 class="font-sans font-bold text-slate-950 text-sm uppercase tracking-wider border-b border-slate-200 pb-1 mb-3">
                        Dedicated Commercial Advance Account
                    </h2>
                    <p class="mb-3">
                        Advances are deposited directly into our verified operational deployment account:
                    </p>
                    <div class="bg-slate-50 border-2 border-slate-900 rounded-sm p-5 font-sans my-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                            <div>
                                <span class="text-xs uppercase text-slate-500 font-bold tracking-wider block">Bank Name</span>
                                <span class="font-bold text-slate-950 text-base">Wema Bank Plc</span>
                            </div>
                            <div>
                                <span class="text-xs uppercase text-slate-500 font-bold tracking-wider block">Account Name</span>
                                <span class="font-bold text-slate-950 text-base">Samuel Ekunyan</span>
                            </div>
                            <div>
                                <span class="text-xs uppercase text-slate-500 font-bold tracking-wider block">Account Number</span>
                                <div class="flex items-center space-x-2 mt-0.5">
                                    <span class="font-mono font-black text-slate-950 text-lg sm:text-xl tracking-wider select-all" id="bank-acc-no">0236642821</span>
                                    <button type="button" onclick="navigator.clipboard.writeText('0236642821'); this.innerText='Copied!'; setTimeout(() => this.innerText='Copy', 2000);" class="text-xs bg-slate-200 hover:bg-slate-300 text-slate-800 font-mono px-2 py-0.5 rounded transition">Copy</button>
                                </div>
                            </div>
                            <div>
                                <span class="text-xs uppercase text-slate-500 font-bold tracking-wider block">Transaction Narration</span>
                                <span class="font-mono text-slate-800 text-xs sm:text-sm font-semibold">EXS Partner Advance / {{ $name != 'Sir/Madam' ? $name : '[Your Name]' }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="pt-2">
                    We are moving quickly, school by school, to establish an institutional standard across Nigeria. Thank you for your partnership, your belief, and your commercial conviction.
                </p>
            </div>

            <!-- Authentic Handwritten Signoff Block -->
            <div class="mt-10 pt-6 border-t border-slate-200">
                <p class="mb-2">Warm regards,</p>

                <!-- Rotated Authentic Signature / Monogram -->
                <div class="my-2">
                    <img src="{{ !empty($sigBase64) ? $sigBase64 : asset('images/signature.png') }}"
                         alt="Signature"
                         class="h-16 w-auto opacity-95"
                         style="filter: contrast(1.15); max-width: 220px;">
                </div>

                <div class="font-sans text-sm">
                    <div class="font-bold text-slate-950 font-mono text-base">Samuel Ekunyan</div>
                    <div class="text-slate-700 font-medium">Founder &amp; Principal Systems Architect, ExtremeSolutions</div>
                    <div class="text-slate-600 font-mono text-xs mt-1 space-y-0.5">
                        <div>
                            <a href="mailto:samuel@ekunyansamuel.dev" class="text-emerald-700 underline font-semibold">samuel@ekunyansamuel.dev</a> &bull;
                            <a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-700 underline font-semibold">sms.extremesolutions.com.ng</a>
                        </div>
                        <div class="text-slate-500">
                            Direct Line: <a href="tel:+2349052585622" class="text-slate-700 hover:text-emerald-700 font-semibold">+234 905 258 5622</a>
                        </div>
                    </div>
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
