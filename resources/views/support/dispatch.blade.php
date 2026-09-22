@extends('layouts.letter')

@section('title', 'Admin Dispatch Console • Support & Commercial Memos')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-6 sm:py-10">

    <!-- Secret Admin Control Bar -->
    <div class="no-print mb-8 bg-slate-900 border-2 border-emerald-500/80 rounded-2xl p-5 text-white shadow-2xl">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-4 mb-4 border-b border-white/10">
            <div>
                <div class="flex items-center space-x-2">
                    <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-mono font-bold bg-amber-500/20 text-amber-300 border border-amber-500/30">
                        ADMIN ONLY &bull; UNLISTED
                    </span>
                    <h1 class="text-base font-bold text-white">Memo Dispatch Generator</h1>
                </div>
                <p class="text-xs text-slate-300 mt-1">
                    Personalize recipient letters, generate clean tracking links, and share via WhatsApp.
                </p>
            </div>
            <div class="text-xs font-mono">
                <a href="{{ route('partner.dispatch') }}" class="text-emerald-400 hover:underline">
                    Switch to School Proposal Dispatch &rarr;
                </a>
            </div>
        </div>

        <!-- Strategy Option Selector: Option A vs Option B -->
        <div class="mb-4">
            <label class="block text-[11px] font-mono font-bold text-slate-400 uppercase tracking-wider mb-2">
                Select Strategy Mode
            </label>
            <div class="flex flex-wrap items-center gap-2 p-1.5 bg-slate-950 rounded-xl border border-white/15 w-fit">
                <button type="button"
                        id="tab-option-a"
                        onclick="window.switchOption('a')"
                        class="px-4 py-2 rounded-lg text-xs font-bold transition cursor-pointer bg-emerald-500 text-slate-950 shadow">
                    Option A: Deployment Support (Standard Mission)
                </button>
                <button type="button"
                        id="tab-option-b"
                        onclick="window.switchOption('b')"
                        class="px-4 py-2 rounded-lg text-xs font-medium transition cursor-pointer text-slate-300 hover:text-white hover:bg-slate-800">
                    Option B: Commercial Advance (1.3x Capped Return)
                </button>
            </div>
            <p id="option-strategy-hint" class="text-xs text-slate-400 mt-2 italic">
                Standard distribution memo: Highlights for-profit commercial venture, 3-school self-sustaining threshold, and lean ₦150k–₦300k deployment pool.
            </p>
        </div>

        <!-- Inputs Grid -->
        <div class="grid sm:grid-cols-3 gap-4 mb-4">
            <div class="sm:col-span-1">
                <label for="admin-input-name" class="block text-xs font-mono font-bold text-white/90 mb-1.5 uppercase tracking-wider">
                    Recipient Full Name
                </label>
                <input type="text"
                       id="admin-input-name"
                       value="{{ $initialName }}"
                       placeholder="e.g. Engr. Tayo Balogun"
                       class="w-full px-3.5 py-2.5 bg-slate-800 border border-white/20 rounded-lg text-sm text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-emerald-400">
            </div>

            <div class="sm:col-span-2">
                <label class="block text-xs font-mono font-bold text-white/90 mb-1.5 uppercase tracking-wider">
                    Generated Recipient Link (Share this with recipient)
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
                    onclick="window.downloadMemoImage()"
                    class="inline-flex items-center px-4 py-2 bg-white/10 hover:bg-white/20 text-white font-medium rounded-lg text-xs transition border border-white/15 cursor-pointer">
                <svg class="w-3.5 h-3.5 mr-1.5 text-[#00ff88]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <span id="save-image-text">Save as Image</span>
            </button>
        </div>
    </div>

    <!-- Live Document Preview Section -->
    <!-- Live Document Preview Section -->
    <div class="flex justify-center">
        <article id="letter-paper"
                 class="print-paper max-w-[794px] w-full mx-auto bg-white p-6 sm:p-10 md:p-12 text-slate-900 font-sans text-[13px] leading-relaxed shadow-2xl rounded-sm border border-slate-200 print:border-none print:shadow-none print:p-0 relative">

            <!-- Elegant Letterhead -->
            <div class="flex justify-between items-start border-b border-slate-300 pb-4 mb-5">
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

            <!-- Recipient & Subject -->
            <div class="mb-4">
                <p class="font-semibold text-slate-900 text-sm">Dear <span class="js-recipient-target">{{ $initialName }}</span>,</p>
                <p id="preview-subject-line" class="font-bold text-slate-950 text-[13px] mt-2 pb-1 border-b border-slate-200">
                    Subject: Strategic Software Deployment &mdash; Commercial Infrastructure Rollout
                </p>
            </div>

            <!-- Option A Content Container -->
            <div id="container-option-a" class="space-y-3.5 text-slate-800 text-[13px]">
                <p>
                    ExtremeSolutions was founded on an unapologetic premise: the institutions powering our society should not be run on manual paperwork, fragile spreadsheets, and administrative guesswork. We are not an NGO, a charity, or a consultancy selling billable hours. We are a proprietary software engineering company that builds, deploys, and operates end-to-end organizational operating systems designed to systematically displace legacy manual processes with unbreakable digital machinery.
                </p>

                <p>
                    Our immediate commercial focus is secondary institutions&mdash;not because we are an education company, but because it is an enterprise market burdened by severe operational friction and immediate paying demand. Across the country, schools operate under three weeks of administrative paralysis at the end of every term compiling continuous assessments and broadsheets by hand. We built and shipped the antidote: <strong>ExtremeSolutions School OS</strong> (<a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-slate-950 font-semibold underline">sms.extremesolutions.com.ng</a>) is live in production today, completely automating Continuous Assessment scoring, delivering 1-click terminal broadsheets, reconciling tuition fee ledgers, and embedding routine Computer-Based Testing directly into weekly schedules.
                </p>

                <p>
                    Our commercial revenue architecture is built for rapid, aggressive self-sufficiency. We charge schools an integrated termly subscription of <strong>&#8358;500 to &#8358;1,000 per student</strong>, collected seamlessly through standard institutional billings (generating &#8358;150,000 to &#8358;300,000 every single term from an average 250-student campus). Because proprietary software operates with near-zero marginal replication cost, <strong>onboarding just 3 secondary schools makes our core cloud infrastructure, server capacity, and frontline field operations permanently self-funding</strong> without requiring subsequent outside capital.
                </p>

                <p>
                    In basic institutions, software alone cannot close contracts; physical execution does. Institutions pay immediately upon experiencing their first automated terminal broadsheet run. To scale this transition, our technical deployment team physically enters campus clusters, migrates physical paper registers into our secure database within 48 hours, and certifies faculty on-site. Once an institution completes its first broadsheet cycle on our platform, operational switching costs make retention near 100%. We are opening a focused Upfront Deployment Pool of <strong>&#8358;150,000 to &#8358;300,000</strong> to execute this direct cluster rollout:
                </p>

                <ul class="list-disc pl-5 space-y-1 text-slate-800 text-[12.5px]">
                    <li><strong>On-Site Campus Penetration:</strong> Direct technical presentations with school proprietors and governing boards.</li>
                    <li><strong>48-Hour Rapid Data Migration:</strong> Complete digitization and verification of paper class records.</li>
                    <li><strong>Faculty Certification &amp; CBT Induction:</strong> Hands-on staff training and student digital testing activation.</li>
                </ul>

                <!-- Dignified Settlement / Wire Details -->
                <div class="mt-4 p-3.5 bg-slate-50 border border-slate-300 rounded">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-700">Deployment Capital Settlement Details</span>
                        <button type="button" onclick="navigator.clipboard.writeText('0236642821'); this.innerText='Copied!'; setTimeout(() => this.innerText='Copy No', 2000);" class="text-[11px] bg-slate-200 hover:bg-slate-300 text-slate-800 font-mono px-2 py-0.5 rounded transition cursor-pointer no-print" data-export-ignore="true">Copy No</button>
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
                            <span class="text-slate-500 text-[11px] block">Payment Purpose</span>
                            <span class="font-mono text-slate-700">EXS Deployment / <span class="js-recipient-target">{{ $initialName }}</span></span>
                        </div>
                    </div>
                </div>

                <p class="text-xs text-slate-700 italic">
                    Your capital directly mobilizes a frontline technical deployment force that transforms broken institutional workflows into automated, recurring-revenue digital infrastructure. We are building the operational backbone of modern African institutions&mdash;starting on the ground, school by school.
                </p>
            </div>

            <!-- Option B Content Container (Invest / Capped Return) -->
            <div id="container-option-b" class="space-y-3.5 text-slate-800 text-[13px] hidden">
                <p>
                    ExtremeSolutions was founded on an unapologetic premise: the institutions powering our society should not be run on manual paperwork, fragile spreadsheets, and administrative guesswork. We are not an NGO, a charity, or a consultancy selling billable hours. We are a proprietary software engineering company that builds, deploys, and operates end-to-end organizational operating systems designed to systematically displace legacy manual processes with unbreakable digital machinery.
                </p>

                <p>
                    To accelerate our commercial deployment velocity, we have structured a disciplined, revenue-linked partner advance for private commercial backers. Backers participate with an upfront advance of <strong>&#8358;50,000</strong> or <strong>&#8358;100,000</strong> per unit, capped at a fixed <strong>1.3x return</strong> (&#8358;50,000 returns &#8358;65,000; &#8358;100,000 returns &#8358;130,000). Repayments are prioritized and funded directly from recurring termly software fees (&#8358;500 to &#8358;1,000 per student) across our expanding institutional clusters. Once repaid with yield, your capital is fully retired, while the institutions remain permanently on our high-margin subscription.
                </p>

                <p>
                    The unit economics directly guarantee this advance. We charge schools an integrated termly subscription of <strong>&#8358;500 to &#8358;1,000 per student</strong>, generating &#8358;150,000 to &#8358;300,000 per term for an average 250-student campus. <strong>Onboarding just 3 secondary schools makes our core infrastructure completely self-sustaining</strong>, yielding &#8358;450,000 to &#8358;900,000 every single term to service and extinguish partner advances safely.
                </p>

                <p>
                    In basic institutions, software alone cannot close contracts; physical execution does. Institutions pay immediately upon experiencing their first automated terminal broadsheet run, requiring our team to physically enter campuses, digitize class records within 48 hours, and train staff on-site. Your advance directly finances field transit for direct proprietor demos, assisted class register onboarding, and teacher handbook induction materials.
                </p>

                <!-- Dedicated Commercial Advance Account Details -->
                <div class="mt-4 p-3.5 bg-slate-50 border border-slate-300 rounded">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-700">Commercial Advance Settlement Details</span>
                        <button type="button" onclick="navigator.clipboard.writeText('0236642821'); this.innerText='Copied!'; setTimeout(() => this.innerText='Copy No', 2000);" class="text-[11px] bg-slate-200 hover:bg-slate-300 text-slate-800 font-mono px-2 py-0.5 rounded transition cursor-pointer no-print" data-export-ignore="true">Copy No</button>
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
                            <span class="text-slate-500 text-[11px] block">Payment Purpose</span>
                            <span class="font-mono text-slate-700">EXS Partner Advance / <span class="js-recipient-target">{{ $initialName }}</span></span>
                        </div>
                    </div>
                </div>

                <p class="text-xs text-slate-700 italic">
                    Your advance directly mobilizes a frontline technical deployment force that transforms broken institutional workflows into automated, recurring-revenue digital infrastructure. Backers receive a formal signed term sheet and priority disbursement from onboarded school revenues.
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

<!-- Admin Dispatch Live Reactivity Script -->
<script>
(function() {
    let currentOption = 'a';

    function getName() {
        const el = document.getElementById('admin-input-name');
        return (el && el.value ? el.value : '{{ addslashes($initialName) }}').trim();
    }

    window.switchOption = function(opt) {
        currentOption = opt;

        const tabA = document.getElementById('tab-option-a');
        const tabB = document.getElementById('tab-option-b');
        const hint = document.getElementById('option-strategy-hint');
        const contA = document.getElementById('container-option-a');
        const contB = document.getElementById('container-option-b');
        const headTitle = document.getElementById('preview-letterhead-title');
        const subjectLine = document.getElementById('preview-subject-line');

        if (opt === 'b') {
            tabB.className = 'px-4 py-2 rounded-lg text-xs font-bold transition cursor-pointer bg-emerald-500 text-slate-950 shadow';
            tabA.className = 'px-4 py-2 rounded-lg text-xs font-medium transition cursor-pointer text-slate-300 hover:text-white hover:bg-slate-800';
            if (hint) hint.textContent = 'Commercial Advance: Capped 1.3x repayment (₦50k/₦100k advance returning ₦65k/₦130k) funded from the first 3-5 schools.';
            if (contA) contA.classList.add('hidden');
            if (contB) contB.classList.remove('hidden');
            if (subjectLine) subjectLine.innerHTML = 'Subject: Structured Commercial Partner Advance &mdash; ExtremeSolutions School OS';
        } else {
            tabA.className = 'px-4 py-2 rounded-lg text-xs font-bold transition cursor-pointer bg-emerald-500 text-slate-950 shadow';
            tabB.className = 'px-4 py-2 rounded-lg text-xs font-medium transition cursor-pointer text-slate-300 hover:text-white hover:bg-slate-800';
            if (hint) hint.textContent = 'Commercial deployment letter: Highlights 3-school self-sustaining threshold and lean ₦150k–₦300k deployment pool.';
            if (contB) contB.classList.add('hidden');
            if (contA) contA.classList.remove('hidden');
            if (subjectLine) subjectLine.innerHTML = 'Subject: Strategic Software Deployment &mdash; Commercial Infrastructure Rollout';
        }

        updateAdminDispatch();
    };

    function updateAdminDispatch() {
        const name = getName();

        // 1. Update letter targets
        document.querySelectorAll('.js-recipient-target').forEach(function(el) {
            el.textContent = name || 'Sir/Madam';
        });

        // 2. Generate clean recipient link based on chosen strategy (Option A vs Option B)
        const baseUrl = currentOption === 'b' ? '{{ $investBaseUrl }}' : '{{ $campaignBaseUrl }}';
        const url = new URL(baseUrl);
        if (name) {
            url.searchParams.set('name', name);
        }
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
            const subject = currentOption === 'b'
                ? 'Subject: Structured Commercial Partner Advance — Enterprise Software Rollout'
                : 'Subject: Strategic Software Deployment — Commercial Infrastructure Rollout';

            const text = 'I have a message for you from ExtremeSolutions:\n\n' +
                subject + '\n\n' +
                (name ? 'Prepared for ' + name + ':\n' : '') +
                fullRecipientUrl;
            waBtn.href = 'https://api.whatsapp.com/send?text=' + encodeURIComponent(text);
        }

        // 6. Update PDF link
        const pdfBtn = document.getElementById('btn-admin-pdf');
        if (pdfBtn) {
            const pdfUrl = new URL('{{ $pdfBaseUrl }}');
            if (name) pdfUrl.searchParams.set('name', name);
            if (currentOption === 'b') pdfUrl.searchParams.set('type', 'invest');
            pdfBtn.href = pdfUrl.toString();
        }
    }

    const inputName = document.getElementById('admin-input-name');
    if (inputName) {
        inputName.addEventListener('input', updateAdminDispatch);
        inputName.addEventListener('keyup', updateAdminDispatch);
        inputName.addEventListener('change', updateAdminDispatch);
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

    window.downloadMemoImage = function() {
        const btnText = document.getElementById('save-image-text');
        const target = document.getElementById('letter-paper');
        if (!target) return;

        const name = getName();
        const prefix = currentOption === 'b' ? 'ExtremeSolutions-Commercial-Advance-' : 'ExtremeSolutions-Deployment-Memo-';
        const safeName = (name || 'memo').toLowerCase().replace(/[^a-z0-9]+/g, '-');
        const filename = prefix + safeName + '.png';

        if (window.exportLetterAsImage) {
            window.exportLetterAsImage(target, filename, btnText, 'Save as Image');
        }
    };

    // Initial run
    updateAdminDispatch();
})();
</script>
@endsection
