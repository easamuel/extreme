@extends('layouts.letter')

@section('title', 'Admin Dispatch Console | School Proposal | ExtremeSolutions')
@section('description', 'Internal ExtremeSolutions Dispatch Console for generating personalized School Proposals.')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <!-- Admin Master Dispatch Console (Visible Only on /partner/dispatch) -->
    <div class="no-print bg-[#071324] border-2 border-emerald-500/40 rounded-2xl p-5 sm:p-7 shadow-2xl text-white">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 border-b border-white/10 pb-4 mb-5">
            <div class="flex items-center space-x-3">
                <span class="inline-block w-3 h-3 rounded-full bg-emerald-400 animate-pulse"></span>
                <div>
                    <h1 class="text-sm font-black font-mono tracking-wider uppercase text-emerald-400">ADMIN DISPATCH CONSOLE // SCHOOL PROPOSAL</h1>
                    <p class="text-xs text-white/60">Generate personalized proposal links for school proprietors. The public page shows generic terms without forms.</p>
                </div>
            </div>
            <div class="flex items-center space-x-3 text-xs font-mono">
                <a href="{{ route('support.dispatch') }}" class="text-emerald-400 hover:underline">
                    Switch to Support Memo Dispatch &rarr;
                </a>
            </div>
        </div>

        <!-- Inputs Grid -->
        <div class="grid sm:grid-cols-2 gap-4 mb-4">
            <div>
                <label for="admin-input-proprietor" class="block text-xs font-mono font-bold text-white/90 mb-1.5 uppercase tracking-wider">
                    Proprietor Name &amp; Title
                </label>
                <input type="text"
                       id="admin-input-proprietor"
                       value="{{ $initialProprietor }}"
                       placeholder="e.g. Mrs. Adeleke"
                       class="w-full px-3.5 py-2.5 bg-slate-800 border border-white/20 rounded-lg text-sm text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-emerald-400">
            </div>

            <div>
                <label for="admin-input-school" class="block text-xs font-mono font-bold text-white/90 mb-1.5 uppercase tracking-wider">
                    Secondary School Name
                </label>
                <input type="text"
                       id="admin-input-school"
                       value="{{ $initialSchool }}"
                       placeholder="e.g. Royal Crown College"
                       class="w-full px-3.5 py-2.5 bg-slate-800 border border-white/20 rounded-lg text-sm text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-emerald-400">
            </div>
        </div>

        <!-- Generated Link Bar -->
        <div class="mb-4">
            <label class="block text-xs font-mono font-bold text-white/90 mb-1.5 uppercase tracking-wider">
                Generated Recipient Link (Share this with proprietor)
            </label>
            <div class="flex items-center gap-2">
                <input type="text"
                       id="generated-link-display"
                       readonly
                       class="w-full px-3.5 py-2.5 bg-slate-900 border border-emerald-500/40 rounded-lg text-xs font-mono text-emerald-300 select-all focus:outline-none">
                <button type="button"
                        id="btn-admin-copy"
                        onclick="window.copyAdminLink()"
                        class="shrink-0 px-4 py-2.5 bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold rounded-lg text-xs transition cursor-pointer">
                    <span id="admin-copy-text">Copy Link</span>
                </button>
            </div>
        </div>

        <!-- Action Buttons for Admin -->
        <div class="flex flex-wrap items-center gap-3 pt-3 border-t border-white/10">
            <!-- Share on WhatsApp -->
            <a id="btn-admin-whatsapp"
               href="#"
               target="_blank"
               class="inline-flex items-center px-4 py-2 bg-[#25D366] hover:bg-[#20bd5a] text-slate-950 font-bold rounded-lg text-xs transition shadow-sm">
                <svg class="w-4 h-4 mr-1.5 fill-current" viewBox="0 0 24 24">
                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.203c.043.071.043.419-.101.824z"/>
                </svg>
                <span>Send via WhatsApp</span>
            </a>

            <!-- Open Recipient View in New Tab -->
            <a id="btn-admin-preview"
               href="#"
               target="_blank"
               class="inline-flex items-center px-4 py-2 bg-slate-800 hover:bg-slate-700 text-white font-medium rounded-lg text-xs transition border border-white/15">
                <span>Open Recipient Page &nearr;</span>
            </a>

            <!-- Download PDF -->
            <a id="btn-admin-pdf"
               href="#"
               target="_blank"
               class="inline-flex items-center px-4 py-2 bg-white/10 hover:bg-white/20 text-white font-medium rounded-lg text-xs transition border border-white/15">
                <svg class="w-3.5 h-3.5 mr-1.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span>Download PDF</span>
            </a>

            <!-- Save Image -->
            <button type="button"
                    onclick="window.downloadProposalImage()"
                    class="inline-flex items-center px-4 py-2 bg-white/10 hover:bg-white/20 text-white font-medium rounded-lg text-xs transition border border-white/15 cursor-pointer">
                <svg class="w-3.5 h-3.5 mr-1.5 text-[#00ff88]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <span id="save-image-text">Save as Image</span>
            </button>
        </div>
    </div>

    <!-- Live Proposal Preview Section -->
    <div class="flex justify-center">
        <article id="letter-paper"
                 class="print-paper max-w-[794px] w-full mx-auto bg-white text-slate-900 border border-slate-200 shadow-xl rounded-sm p-7 sm:p-12 md:p-14 font-sans text-[13.5px] leading-relaxed relative">

            <!-- Official Institutional Letterhead -->
            <div class="flex justify-between items-start border-b border-slate-300 pb-4 mb-5 font-sans">
                <div class="flex items-center space-x-3.5">
                    <img src="{{ !empty($logoBase64) ? $logoBase64 : asset('images/es-mark.png') }}" alt="ExtremeSolutions" class="h-10 w-auto">
                    <div>
                        <h1 class="text-lg font-bold tracking-tight text-slate-950 font-sans">EXTREMESOLUTIONS</h1>
                        <p class="text-[11px] font-semibold text-emerald-700 tracking-wider uppercase">Enterprise Systems Architecture &bull; Software Engineering</p>
                        <p class="text-xs text-slate-600"><a href="https://extremesolutions.com.ng" target="_blank" class="hover:underline">extremesolutions.com.ng</a> &bull; <a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-slate-800 hover:underline font-medium">sms.extremesolutions.com.ng</a></p>
                    </div>
                </div>
                <div class="text-right text-xs text-slate-700 font-sans whitespace-nowrap pl-4">
                    <p class="font-medium text-slate-950">{{ $dateStr }}</p>
                </div>
            </div>

            <!-- Recipient Block -->
            <div class="mb-6 font-sans text-sm">
                <div class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">PREPARED EXCLUSIVELY FOR:</div>
                <div class="font-bold text-slate-950 text-base">
                    <span class="js-proprietor-target">{{ $initialProprietor }}</span>, Proprietress / Principal
                </div>
                <div class="text-slate-700 font-medium text-sm">
                    <span class="js-school-target">{{ $initialSchool }}</span>
                </div>
            </div>

            <!-- Subject Line -->
            <div class="mb-8 font-sans font-bold text-slate-950 text-sm sm:text-base border-l-4 border-slate-950 pl-4 py-1.5 bg-slate-50">
                RE: Institutional Partnership for Broadsheet Automation and Student CBT Readiness
            </div>

            <!-- Salutation -->
            <div class="mb-6">
                <p class="font-bold text-slate-950 text-base">
                    Dear <span class="js-proprietor-target">{{ $initialProprietor }}</span>,
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
                    ExtremeSolutions is extending an institutional partnership invitation to <strong class="js-school-target text-slate-950">{{ $initialSchool }}</strong> to deploy our modern School Operating System (<a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-700 underline font-mono font-semibold">sms.extremesolutions.com.ng</a>) starting this term.
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
                        <strong>On-Site Staff Certification:</strong> We conduct a 1-hour hands-on training workshop at <span class="js-school-target font-semibold text-slate-950">{{ $initialSchool }}</span> for your teachers and examination officers.
                    </li>
                    <li>
                        <strong>Dedicated Support:</strong> We remain on call throughout your examination and result-generation periods to guarantee zero system downtime.
                    </li>
                </ul>

                <p>
                    We propose a brief 15-minute technical briefing and live broadsheet walk-through at your administrative office next week, where we will generate a live sample broadsheet for your review.
                </p>
            </div>

            <!-- Sign-off Block (Exact Format) -->
            <div class="mt-8 pt-4 border-t border-slate-200 font-sans">
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

<!-- Admin Dispatch Live Reactivity Script -->
<script>
(function() {
    function getProprietor() {
        const el = document.getElementById('admin-input-proprietor');
        return (el && el.value ? el.value : '{{ addslashes($initialProprietor) }}').trim();
    }

    function getSchool() {
        const el = document.getElementById('admin-input-school');
        return (el && el.value ? el.value : '{{ addslashes($initialSchool) }}').trim();
    }

    function updateAdminDispatch() {
        const prop = getProprietor();
        const sch = getSchool();

        // 1. Update letter targets
        document.querySelectorAll('.js-proprietor-target').forEach(function(el) {
            el.textContent = prop || 'School Proprietor / Principal';
        });
        document.querySelectorAll('.js-school-target').forEach(function(el) {
            el.textContent = sch || 'Your Secondary Institution';
        });

        // 2. Generate clean recipient link
        const baseUrl = '{{ $schoolBaseUrl }}';
        const url = new URL(baseUrl);
        if (prop) url.searchParams.set('proprietor', prop);
        if (sch) url.searchParams.set('school', sch);
        const fullRecipientUrl = url.toString();

        // 3. Update link display
        const display = document.getElementById('generated-link-display');
        if (display) display.value = fullRecipientUrl;

        // 4. Update preview link
        const previewBtn = document.getElementById('btn-admin-preview');
        if (previewBtn) previewBtn.href = fullRecipientUrl;

        // 5. Update WhatsApp link
        const waBtn = document.getElementById('btn-admin-whatsapp');
        if (waBtn) {
            const text = 'I have a message for you from ExtremeSolutions:\n\n' +
                'RE: Institutional Partnership for Broadsheet Automation and Student CBT Readiness\n\n' +
                'Prepared for ' + (prop || 'Proprietor') + ' (' + (sch || 'School') + '):\n' +
                fullRecipientUrl;
            waBtn.href = 'https://api.whatsapp.com/send?text=' + encodeURIComponent(text);
        }

        // 6. Update PDF link
        const pdfBtn = document.getElementById('btn-admin-pdf');
        if (pdfBtn) {
            const pdfUrl = new URL('{{ $pdfBaseUrl }}');
            if (prop) pdfUrl.searchParams.set('proprietor', prop);
            if (sch) pdfUrl.searchParams.set('school', sch);
            pdfBtn.href = pdfUrl.toString();
        }
    }

    const inputProp = document.getElementById('admin-input-proprietor');
    const inputSch = document.getElementById('admin-input-school');

    if (inputProp) {
        inputProp.addEventListener('input', updateAdminDispatch);
        inputProp.addEventListener('keyup', updateAdminDispatch);
        inputProp.addEventListener('change', updateAdminDispatch);
    }
    if (inputSch) {
        inputSch.addEventListener('input', updateAdminDispatch);
        inputSch.addEventListener('keyup', updateAdminDispatch);
        inputSch.addEventListener('change', updateAdminDispatch);
    }

    window.copyAdminLink = function() {
        const display = document.getElementById('generated-link-display');
        const copyBtnText = document.getElementById('admin-copy-text');
        if (display) {
            navigator.clipboard.writeText(display.value).then(function() {
                if (copyBtnText) {
                    copyBtnText.textContent = 'Copied!';
                    setTimeout(function() { copyBtnText.textContent = 'Copy Link'; }, 2500);
                }
            });
        }
    };

    window.downloadProposalImage = function() {
        const btnText = document.getElementById('save-image-text');
        const target = document.getElementById('letter-paper');
        if (!target) return;

        const sch = getSchool();
        const safeName = (sch || 'school-proposal').toLowerCase().replace(/[^a-z0-9]+/g, '-');
        const filename = 'ExtremeSolutions-School-Proposal-' + safeName + '.png';

        if (window.exportLetterAsImage) {
            window.exportLetterAsImage(target, filename, btnText, 'Save as Image');
        }
    };

    // Initial run
    updateAdminDispatch();
})();
</script>
@endsection

