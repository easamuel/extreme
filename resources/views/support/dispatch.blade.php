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

            <!-- Top Header -->
            <div class="flex justify-between items-start border-b border-slate-200 pb-3 mb-4">
                <div class="flex items-center space-x-3.5">
                    <img src="{{ !empty($logoBase64) ? $logoBase64 : asset('images/es-mark.png') }}" alt="ExtremeSolutions" class="h-10 w-auto">
                    <div>
                        <h1 class="text-lg font-bold tracking-tight text-slate-950 font-mono">EXTREMESOLUTIONS</h1>
                        <p id="preview-letterhead-title" class="text-xs font-semibold text-emerald-700 tracking-wide uppercase">Deployment &amp; Expansion Memorandum</p>
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
                <p class="font-semibold text-slate-900 text-sm">Dear <span class="js-recipient-target">{{ $initialName }}</span>,</p>
                <div id="preview-subject-line" class="border-l-2 border-slate-950 pl-3 py-1 mt-2 bg-slate-50">
                    <p class="font-bold text-slate-950 text-[13px]">RE: Fueling Our Commercial Rollout &mdash; Deploying ExtremeSolutions Across Nigerian Secondary Schools</p>
                </div>
            </div>

            <!-- Option A Content Container -->
            <div id="container-option-a" class="space-y-3.5 text-slate-700">
                <p>
                    ExtremeSolutions is building a sustainable educational technology enterprise. We are not an NGO or a charity; we are a commercial systems venture deploying an all-in-one School Operating System (<a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-700 font-medium underline">sms.extremesolutions.com.ng</a>) to eliminate manual operational friction in Nigerian secondary institutions.
                </p>

                <!-- Problem & Solution -->
                <div>
                    <h2 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-1">The Operational Problem &amp; Commercial Opportunity</h2>
                    <p class="mb-1.5"><strong class="text-slate-900">Underutilized Technology &amp; CBT Anxiety:</strong> Secondary schools have computer labs that sit idle, offering weekly theory notes instead of practical screen habits. Students falter during national exams (JAMB CBT) due to lack of timed navigation and software familiarity.</p>
                    <p class="mb-1.5"><strong class="text-slate-900">End-of-Term Broadsheet Delays:</strong> Schools spend 2 to 3 weeks compiling Continuous Assessments (CA) with calculators, causing calculation errors, delayed vacations, and uncollected tuition balances.</p>
                    <div class="p-2 bg-emerald-50/70 border border-emerald-200 rounded text-emerald-900 text-xs">
                        <strong>The Solution:</strong> ExtremeSolutions automates CA scoring, generates 1-click terminal broadsheets, reconciles tuition balances, and embeds routine CBT testing directly into the school's termly calendar.
                    </div>
                </div>

                <!-- Revenue Model -->
                <div>
                    <h2 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-1">Commercial Revenue Model: Built for Self-Sufficiency</h2>
                    <p>
                        We charge schools a recurring fee of <strong>₦500 to ₦1,000 per student/term</strong>, integrated into regular school fees (₦150,000 – ₦300,000 per term for an average 250-student school). 
                        <span class="bg-slate-100 px-1 py-0.5 font-semibold text-slate-950">Onboarding just 3 secondary schools makes our core infrastructure completely self-sustaining.</span>
                    </p>
                </div>

                <!-- The Need -->
                <div>
                    <h2 class="text-xs font-bold uppercase tracking-wider text-slate-900 mb-1">Why We Are Raising an Upfront Deployment Fund</h2>
                    <p class="mb-1.5">
                        Schools pay after their first successful broadsheet run. Software alone cannot close contracts; physical execution does. Our team physically enters campuses, migrates physical registers, and trains staff on-site.
                    </p>
                    <p class="mb-1">
                        We are raising a lean <strong>Rollout Deployment Pool of ₦150,000 to ₦300,000</strong> to fund this direct acquisition bridge:
                    </p>
                    <ul class="list-disc pl-4 space-y-0.5 text-xs">
                        <li><strong>Field Transit &amp; Outreach:</strong> Transport for direct school demos with proprietors and principals.</li>
                        <li><strong>48-Hour Assisted Onboarding:</strong> Digitizing student registers and grading schemes.</li>
                        <li><strong>Staff Induction Materials:</strong> Printing teacher operation handbooks and student CBT orientation guides.</li>
                    </ul>
                </div>

                <!-- Bank Box -->
                <div class="mt-3.5 p-3.5 bg-slate-50 border border-slate-200 rounded-md">
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-[11px] font-bold uppercase tracking-wider text-slate-500">Deployment Support Account (Direct Execution)</p>
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
                            <span class="font-mono text-slate-700">EXS Support / <span class="js-recipient-target">{{ $initialName }}</span></span>
                        </div>
                    </div>
                </div>

                <p class="text-xs italic text-slate-600">
                    Backers receive direct monthly photo/audit reports, partner recognition on the school portal, and the assurance that their capital builds a self-funding enterprise.
                </p>
            </div>

            <!-- Option B Content Container (Invest / Capped Return) -->
            <div id="container-option-b" class="space-y-6 text-slate-800 text-[15px] leading-relaxed hidden">
                <p>
                    ExtremeSolutions is building a sustainable, high-margin educational technology enterprise. We are not an NGO or a charity; we are a commercial systems venture deploying an all-in-one School Operating System (<a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-700 font-mono font-semibold underline">sms.extremesolutions.com.ng</a>) to solve deep operational bottlenecks in Nigerian secondary schools.
                </p>

                <p>
                    For commercial partners and backers seeking a clearly defined financial return alongside foundational institutional impact, we provide this structured <strong>Founding Partner Advance</strong>.
                </p>

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

                <div class="pt-2">
                    <h2 class="font-sans font-bold text-slate-950 text-sm uppercase tracking-wider border-b border-slate-200 pb-1 mb-3">
                        Capital Allocation: Customer Acquisition &amp; On-Ground Deployment
                    </h2>
                    <p>
                        In enterprise educational sales, schools only pay once their first terminal broadsheet is successfully delivered. Software alone cannot close contracts; physical execution closes contracts. Your deployment advance directly funds:
                    </p>
                    <ul class="list-disc pl-6 space-y-1.5 my-3">
                        <li><strong>Field Transit &amp; Direct Outreach:</strong> Covering physical transport for direct school pitch meetings and product demonstrations to proprietors.</li>
                        <li><strong>48-Hour Onboarding &amp; Data Entry:</strong> Digitizing physical student registers and configuring school grading databases.</li>
                        <li><strong>Staff Induction Materials:</strong> Printing physical teacher operation handbooks and student CBT orientation guides.</li>
                    </ul>
                </div>

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
                                    <span class="font-mono font-black text-slate-950 text-lg sm:text-xl tracking-wider select-all">0236642821</span>
                                    <button type="button" onclick="navigator.clipboard.writeText('0236642821'); this.innerText='Copied!'; setTimeout(() => this.innerText='Copy', 2000);" class="text-xs bg-slate-200 hover:bg-slate-300 text-slate-800 font-mono px-2 py-0.5 rounded transition">Copy</button>
                                </div>
                            </div>
                            <div>
                                <span class="text-xs uppercase text-slate-500 font-bold tracking-wider block">Transaction Narration</span>
                                <span class="font-mono text-slate-800 text-xs sm:text-sm font-semibold">EXS Partner Advance / <span class="js-recipient-target">{{ $initialName }}</span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="pt-2">
                    We are moving quickly, school by school, to establish an institutional standard across Nigeria. Thank you for your partnership, your belief, and your commercial conviction.
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
            if (hint) hint.textContent = 'Commercial Advance memo: Capped 1.3x repayment (₦50k/₦100k advance returning ₦65k/₦130k) from the first 3-5 schools.';
            if (contA) contA.classList.add('hidden');
            if (contB) contB.classList.remove('hidden');
            if (headTitle) headTitle.textContent = 'Founding Partner Advance • Commercial Option B';
            if (subjectLine) subjectLine.innerHTML = 'RE: Structured Founding Partner Advance &mdash; Commercial Deployment of ExtremeSolutions School OS';
        } else {
            tabA.className = 'px-4 py-2 rounded-lg text-xs font-bold transition cursor-pointer bg-emerald-500 text-slate-950 shadow';
            tabB.className = 'px-4 py-2 rounded-lg text-xs font-medium transition cursor-pointer text-slate-300 hover:text-white hover:bg-slate-800';
            if (hint) hint.textContent = 'Standard distribution memo: Highlights for-profit commercial venture, 3-school self-sustaining threshold, and lean ₦150k–₦300k deployment pool.';
            if (contB) contB.classList.add('hidden');
            if (contA) contA.classList.remove('hidden');
            if (headTitle) headTitle.textContent = 'Deployment & Expansion Memorandum';
            if (subjectLine) subjectLine.innerHTML = 'RE: Fueling Our Commercial Rollout &mdash; Deploying ExtremeSolutions Across Nigerian Secondary Schools';
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
                ? 'RE: Structured Founding Partner Advance — Commercial Deployment of ExtremeSolutions School OS'
                : 'RE: Fueling Our Commercial Rollout — Deploying ExtremeSolutions Across Nigerian Secondary Schools';

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
        if (btnText) btnText.textContent = 'Generating...';

        const target = document.getElementById('letter-paper');
        if (!target) {
            if (btnText) btnText.textContent = 'Save as Image';
            return;
        }

        const name = getName();
        const prefix = currentOption === 'b' ? 'ExtremeSolutions-Commercial-Advance-' : 'ExtremeSolutions-Deployment-Memo-';
        const safeName = (name || 'memo').toLowerCase().replace(/[^a-z0-9]+/g, '-');
        const filename = prefix + safeName + '.png';

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
                    console.error('html2canvas error:', err2);
                    if (btnText) btnText.textContent = 'Save as Image';
                    const pdfBtn = document.getElementById('btn-admin-pdf');
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

    // Initial run
    updateAdminDispatch();
})();
</script>
@endsection
