@extends('layouts.app')

@section('title', 'Institutional Partnership Proposal | ExtremeSolutions')
@section('description', 'Institutional Partnership for Broadsheet Automation and Student CBT Readiness by ExtremeSolutions.')

@section('meta_robots')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
<div class="bg-slate-100 min-h-screen py-8 sm:py-14"
     x-data="{
        inputProprietor: '{{ addslashes($proprietor) }}',
        inputSchool: '{{ addslashes($school) }}',
        copied: false,
        get currentUrl() {
            let url = new URL(window.location.origin + '{{ route('partner.index') }}');
            if (this.inputProprietor.trim()) url.searchParams.set('proprietor', this.inputProprietor.trim());
            if (this.inputSchool.trim()) url.searchParams.set('school', this.inputSchool.trim());
            return url.toString();
        },
        get whatsappUrl() {
            const text = 'Institutional Partnership Proposal // ExtremeSolutions\n\n' +
                'RE: Institutional Partnership for Broadsheet Automation and Student CBT Readiness\n\n' +
                'Prepared exclusively for ' + (this.inputProprietor.trim() || '{{ addslashes($proprietor) }}') + ' (' + (this.inputSchool.trim() || '{{ addslashes($school) }}') + '):\n' +
                this.currentUrl;
            return 'https://api.whatsapp.com/send?text=' + encodeURIComponent(text);
        },
        updateProposal() {
            let url = new URL(window.location.href);
            if (this.inputProprietor.trim()) url.searchParams.set('proprietor', this.inputProprietor.trim());
            if (this.inputSchool.trim()) url.searchParams.set('school', this.inputSchool.trim());
            window.location.href = url.toString();
        },
        copyLink() {
            navigator.clipboard.writeText(this.currentUrl).then(() => {
                this.copied = true;
                setTimeout(() => { this.copied = false; }, 2500);
            });
        }
     }">

    <div class="max-w-4xl mx-auto px-4 sm:px-6">

        <!-- Top Utility Bar (Clean, Zero Pop-ups) -->
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3 bg-white border border-slate-200 p-3.5 rounded-lg shadow-xs text-xs font-sans">
            <div class="flex items-center space-x-2 text-slate-600">
                <span class="inline-block w-2 h-2 rounded-full bg-emerald-500"></span>
                <span>Proposal Code: <strong class="text-slate-900 font-mono">{{ $refCode }}</strong></span>
                <span class="text-slate-300">|</span>
                <span>{{ $dateStr }}</span>
            </div>

            <div class="flex items-center space-x-2">
                <button @click="copyLink()"
                        class="inline-flex items-center px-3 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-800 font-medium rounded text-xs transition">
                    <svg class="w-3.5 h-3.5 mr-1 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                    <span x-text="copied ? 'Copied!' : 'Copy Link'"></span>
                </button>

                <a :href="whatsappUrl" target="_blank"
                   class="inline-flex items-center px-3 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded text-xs transition">
                    <svg class="w-3.5 h-3.5 mr-1 fill-current" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.203c.043.071.043.419-.101.824z"/>
                    </svg>
                    WhatsApp Share
                </a>

                <a href="{{ $exportPdfUrl }}" target="_blank"
                   class="inline-flex items-center px-3 py-1.5 bg-[#0c1f3a] hover:bg-[#1e3a5f] text-white font-medium rounded text-xs transition">
                    <svg class="w-3.5 h-3.5 mr-1 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download PDF
                </a>
            </div>
        </div>

        <!-- The Plain Letter Surface -->
        <article class="bg-white border border-slate-200/90 shadow-md rounded-xs p-8 sm:p-14 lg:p-16 text-slate-800 font-serif leading-relaxed text-[15px]">

            <!-- Letterhead -->
            <header class="border-b-2 border-slate-900 pb-5 mb-8 font-sans">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center space-x-3.5">
                        <img src="{{ asset('images/es-mark.png') }}" alt="ExtremeSolutions" class="h-10 w-auto">
                        <div>
                            <div class="text-xl font-black tracking-tight text-slate-950 font-mono">EXTREMESOLUTIONS</div>
                            <div class="text-xs uppercase tracking-widest text-slate-600 font-semibold">Educational Infrastructure &amp; Deployment Taskforce</div>
                            <div class="text-xs text-slate-500">Lagos, Nigeria &bull; extremesolutions.com.ng &bull; <span class="font-mono text-emerald-700">sms.extremesolutions.com.ng</span></div>
                        </div>
                    </div>
                    <div class="text-left sm:text-right font-mono text-xs text-slate-500 space-y-1">
                        <div>Proposal Code: <span class="font-bold text-slate-900">{{ $refCode }}</span></div>
                        <div>Date: <span class="text-slate-900">{{ $dateStr }}</span></div>
                    </div>
                </div>
            </header>

            <!-- Recipient Block -->
            <div class="mb-6 font-sans text-sm">
                <div class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">PREPARED EXCLUSIVELY FOR:</div>
                <div class="font-bold text-slate-950 text-base">{{ $proprietor }}, Proprietress / Principal</div>
                <div class="text-slate-700 font-medium">{{ $school }}</div>
            </div>

            <!-- Subject Line -->
            <div class="mb-8 font-sans font-bold text-slate-950 text-sm sm:text-base border-l-4 border-slate-900 pl-3.5 py-1 bg-slate-50">
                RE: Institutional Partnership for Broadsheet Automation and Student CBT Readiness
            </div>

            <!-- Salutation -->
            <div class="mb-6">
                <p class="font-bold text-slate-950 text-base">
                    Dear {{ $proprietor }},
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
                    ExtremeSolutions is extending an institutional partnership invitation to <strong class="text-slate-950">{{ $school }}</strong> to deploy our modern School Operating System (<a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-700 underline font-mono">sms.extremesolutions.com.ng</a>) starting this term.
                </p>

                <h2 class="font-sans font-bold text-slate-950 text-base uppercase tracking-wider pt-3 border-b border-slate-200 pb-1">
                    The Three Operational Challenges We Solve for Your School
                </h2>

                <!-- Comparative Table -->
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

                <h2 class="font-sans font-bold text-slate-950 text-base uppercase tracking-wider pt-3 border-b border-slate-200 pb-1">
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
                    We propose a brief 15-minute operational demonstration at your administrative office next week, where we will generate a live sample broadsheet for your review.
                </p>
            </div>

            <!-- Signoff Block -->
            <div class="mt-10 pt-6 border-t border-slate-200">
                <p class="mb-4">Respectfully yours,</p>

                <img src="{{ asset('images/signature.png') }}" alt="Samuel Ekunyan Signature" class="h-11 w-auto mb-2 opacity-90">

                <div class="font-sans text-sm">
                    <div class="font-bold text-slate-950 font-mono">Samuel Ekunyan</div>
                    <div class="text-slate-600">Lead Systems Architect, ExtremeSolutions</div>
                    <div class="text-slate-500 font-mono text-xs mt-0.5">
                        <a href="https://sms.extremesolutions.com.ng" class="text-emerald-700 underline font-semibold">sms.extremesolutions.com.ng</a> &bull; Direct Line: <span class="text-slate-800 font-bold">+234 905 258 5622</span>
                    </div>
                </div>
            </div>

        </article>

        <!-- Clean Personalize Form at Bottom (No Pop-ups) -->
        <div class="mt-8 bg-white border border-slate-200 rounded-lg p-5 sm:p-6 shadow-xs font-sans">
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                <div>
                    <h3 class="text-sm font-bold text-slate-900">Customize this Proposal for Another School</h3>
                    <p class="text-xs text-slate-500 mt-0.5">Input the target proprietor and school name to generate a tailored direct link:</p>
                </div>
                <form @submit.prevent="updateProposal()" class="flex flex-wrap items-center gap-2">
                    <input type="text"
                           x-model="inputProprietor"
                           placeholder="Proprietor Name (e.g. Mrs. Adeleke)"
                           class="px-3 py-1.5 border border-slate-300 rounded text-xs text-slate-900 focus:outline-none focus:ring-1 focus:ring-emerald-500 w-44 sm:w-48">
                    <input type="text"
                           x-model="inputSchool"
                           placeholder="School Name (e.g. Royal Crown College)"
                           class="px-3 py-1.5 border border-slate-300 rounded text-xs text-slate-900 focus:outline-none focus:ring-1 focus:ring-emerald-500 w-44 sm:w-56">
                    <button type="submit"
                            class="px-4 py-1.5 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded text-xs transition">
                        Update
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
