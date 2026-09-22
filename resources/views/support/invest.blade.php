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

    <!-- Recipient Notice & Action Bar -->
    <div class="no-print mb-6">
        <div class="flex flex-wrap items-center justify-between gap-3 bg-slate-900/90 border border-slate-800 p-3.5 sm:p-4 rounded-xl shadow-lg text-xs font-sans text-white">
            <div class="flex items-center space-x-2 text-slate-300">
                <span class="font-medium text-white">ExtremeSolutions Commercial Advance Memorandum</span>
                <span class="text-slate-500 hidden sm:inline">&bull;</span>
                <span class="text-slate-400 hidden sm:inline">{{ $dateStr }}</span>
            </div>

            <!-- Export & Share Buttons -->
            <div class="flex flex-wrap items-center gap-2">
                <!-- Save as Image (PNG) -->
                <button type="button"
                        id="btn-save-image"
                        onclick="window.downloadInvestImage()"
                        class="inline-flex items-center px-3.5 py-2 bg-white/10 hover:bg-white/20 text-white font-medium rounded-lg text-xs transition border border-white/15 cursor-pointer shadow-sm">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span id="save-image-text">Save as Image</span>
                </button>

                <!-- Download PDF -->
                <a href="{{ $exportPdfUrl }}"
                   id="btn-download-pdf"
                   class="inline-flex items-center px-3.5 py-2 bg-white/10 hover:bg-white/20 text-white font-medium rounded-lg text-xs transition border border-white/15 shadow-sm">
                    <svg class="w-3.5 h-3.5 mr-1.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <span>Download PDF</span>
                </a>

                <!-- WhatsApp Share -->
                <a href="https://api.whatsapp.com/send?text={{ urlencode("I have a message for you from ExtremeSolutions:\n\nSubject: Structured Commercial Partner Advance — Deployment of ExtremeSolutions School OS\n\n" . (!empty($name) && $name !== 'Sir/Madam' ? "Prepared for {$name}:\n" : "") . url()->current()) }}"
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
    </div>

    <!-- The Authentic Executive Letter Paper Surface -->
    <div class="flex justify-center">
        <article id="letter-paper"
                 class="print-paper max-w-[794px] w-full mx-auto bg-white p-7 sm:p-11 md:p-12 text-slate-900 font-sans text-[13px] leading-relaxed shadow-xl rounded-sm border border-slate-200 print:border-none print:shadow-none print:p-0 relative">

            <!-- Elegant Letterhead -->
            <div class="flex justify-between items-start border-b border-slate-300 pb-4 mb-5">
                <div class="flex items-center space-x-3.5">
                    <img src="{{ !empty($logoBase64) ? $logoBase64 : asset('images/es-mark.png') }}" alt="ExtremeSolutions" class="h-10 w-auto">
                    <div>
                        <h1 class="text-lg font-bold tracking-tight text-slate-950 font-sans">EXTREMESOLUTIONS</h1>
                        <p class="text-xs text-slate-600">Lagos, Nigeria &bull; extremesolutions.com.ng &bull; <a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-slate-800 hover:underline font-medium">sms.extremesolutions.com.ng</a></p>
                    </div>
                </div>
                <div class="text-right text-xs text-slate-700 font-sans">
                    <p class="font-medium text-slate-950">{{ $dateStr }}</p>
                </div>
            </div>

            <!-- Recipient & Subject -->
            <div class="mb-4">
                <p class="font-semibold text-slate-900 text-sm">Dear {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Valued Partner') }},</p>
                <p class="font-bold text-slate-950 text-[13px] mt-2 pb-1 border-b border-slate-200">
                    Subject: Structured Commercial Partner Advance &mdash; ExtremeSolutions School OS
                </p>
            </div>

            <!-- Letter Body Content -->
            <div class="space-y-3.5 text-slate-800 text-[13px]">
                <p>
                    ExtremeSolutions was founded on a singular conviction: the most critical institutions in Africa should not be held back by manual, error-prone paperwork. We are not an NGO or a charity; we are a disciplined commercial systems venture deploying an all-in-one School Operating System (<a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-slate-950 font-semibold underline">sms.extremesolutions.com.ng</a>) specifically engineered to solve operational bottlenecks in Nigerian secondary education.
                </p>

                <p>
                    To accelerate our commercial school expansion, we have structured a clean, revenue-linked partner advance for private commercial backers. Backers participate with an upfront advance of <strong>&#8358;50,000</strong> or <strong>&#8358;100,000</strong> per unit, capped at a fixed <strong>1.3x return</strong> (&#8358;50,000 returns &#8358;65,000; &#8358;100,000 returns &#8358;130,000). Repayments are funded directly and prioritized from termly software fees (&#8358;500 to &#8358;1,000 per student) across our initial cluster of onboarded secondary schools. Once fulfilled, your capital is fully retired with yield, while the institutions remain permanently on our recurring subscription.
                </p>

                <p>
                    The unit economics directly support this advance. We charge schools an integrated termly fee of <strong>&#8358;500 to &#8358;1,000 per student</strong>, generating &#8358;150,000 to &#8358;300,000 per term for an average 250-student school. <strong>Onboarding just 3 secondary schools makes our core infrastructure completely self-sustaining</strong>, yielding &#8358;450,000 to &#8358;900,000 every single term to service and extinguish partner advances safely.
                </p>

                <p>
                    In basic education, software alone cannot close contracts; physical execution does. Schools pay after their first successful broadsheet run, requiring our team to physically enter campuses, digitize student registers within 48 hours, and train staff on-site. Your advance directly finances field transit for direct proprietor demos, assisted class register onboarding, and teacher handbook induction materials.
                </p>

                <!-- Dedicated Commercial Advance Account Details -->
                <div class="mt-4 p-3.5 bg-slate-50 border border-slate-300 rounded">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-700">Dedicated Commercial Advance Account</span>
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

                <p class="text-xs text-slate-600 italic">
                    Backers receive a formal signed term sheet, direct monthly audit reports, and priority disbursement from onboarded school revenues.
                </p>
            </div>

            <!-- Sign-off Block (Exact Format) -->
            <div class="mt-5 pt-3 border-t border-slate-200">
                <p class="text-xs text-slate-600 mb-1">Yours sincerely,</p>
                <div class="my-1.5">
                    <img src="{{ !empty($sigBase64) ? $sigBase64 : asset('images/signature.png') }}"
                         alt="Signature"
                         class="h-10 w-auto opacity-95"
                         style="filter: contrast(1.15); max-width: 170px;">
                </div>
                <p class="font-bold text-slate-950 text-sm">Samuel Ekunyan</p>
                <p class="text-xs text-slate-700 font-medium">Lead Developer &amp; Founder, ExtremeSolutions</p>
                <p class="text-xs text-slate-600 mt-0.5">
                    <a href="mailto:samuel@ekunyansamuel.dev" class="text-slate-900 underline font-medium">samuel@ekunyansamuel.dev</a> &bull; 
                    <a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-slate-900 underline font-medium">sms.extremesolutions.com.ng</a>
                </p>
                <p class="text-xs text-slate-800 font-medium mt-1">
                    WhatsApp: <a href="https://wa.me/2348036375292" target="_blank" class="text-slate-950 font-bold hover:underline">+2348036375292</a>
                </p>
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

