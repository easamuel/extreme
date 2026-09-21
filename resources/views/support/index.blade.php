@extends('layouts.app')

@section('title', 'Institutional Briefing Letter | ExtremeSolutions')
@section('description', 'An Urgent Operational Brief on the Grassroots Infrastructure of Nigerian Secondary Education by Samuel Ekunyan.')

@section('meta_robots')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
<div class="bg-slate-100 min-h-screen py-8 sm:py-14"
     x-data="{
        inputName: '{{ addslashes($name) }}',
        copied: false,
        get currentUrl() {
            let url = new URL(window.location.origin + '{{ route('support.index') }}');
            if (this.inputName.trim()) {
                url.searchParams.set('name', this.inputName.trim());
            }
            return url.toString();
        },
        get whatsappUrl() {
            const text = 'Operational Brief // ExtremeSolutions\n\n' +
                'RE: An Urgent Operational Brief on the Grassroots Infrastructure of Nigerian Secondary Education\n\n' +
                'Prepared for ' + (this.inputName.trim() || '{{ addslashes($name) }}') + ':\n' +
                this.currentUrl;
            return 'https://api.whatsapp.com/send?text=' + encodeURIComponent(text);
        },
        updateLetter() {
            if (this.inputName.trim()) {
                let url = new URL(window.location.href);
                url.searchParams.set('name', this.inputName.trim());
                window.location.href = url.toString();
            }
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
                <span>Document Ref: <strong class="text-slate-900 font-mono">{{ $refCode }}</strong></span>
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

        <!-- The Executive Letter Paper -->
        <article class="bg-white border border-slate-200/90 shadow-md rounded-xs p-8 sm:p-14 lg:p-16 text-slate-800 font-serif leading-relaxed text-[15px]">

            <!-- Letterhead -->
            <header class="border-b-2 border-slate-900 pb-5 mb-8 font-sans">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-center space-x-3.5">
                        <img src="{{ asset('images/es-mark.png') }}" alt="ExtremeSolutions" class="h-10 w-auto">
                        <div>
                            <div class="text-xl font-black tracking-tight text-slate-950 font-mono">EXTREMESOLUTIONS</div>
                            <div class="text-xs uppercase tracking-widest text-slate-600 font-semibold">Office of the Principal Systems Architect</div>
                            <div class="text-xs text-slate-500">Lagos, Nigeria &bull; extremesolutions.com.ng</div>
                        </div>
                    </div>
                    <div class="text-left sm:text-right font-mono text-xs text-slate-500 space-y-1">
                        <div>Document Ref: <span class="font-bold text-slate-900">{{ $refCode }}</span></div>
                        <div>Date: <span class="text-slate-900">{{ $dateStr }}</span></div>
                    </div>
                </div>
            </header>

            <!-- Recipient Salutation -->
            <div class="mb-6">
                <p class="font-bold text-slate-950 text-base">
                    Dear {{ $name }},
                </p>
            </div>

            <!-- Subject Line -->
            <div class="mb-8 font-sans font-bold text-slate-950 text-sm sm:text-base border-l-4 border-slate-900 pl-3.5 py-1 bg-slate-50">
                RE: An Urgent Operational Brief on the Grassroots Infrastructure of Nigerian Secondary Education
            </div>

            <!-- Habakkuk Charter Quote -->
            <blockquote class="my-6 pl-4 border-l-2 border-slate-300 italic text-slate-600 text-sm">
                &ldquo;Write the vision and make it plain on tablets, that he may run that readeth it.&rdquo; &mdash; Habakkuk 2:2
            </blockquote>

            <!-- Letter Body Content -->
            <div class="space-y-5 text-justify">
                <p>
                    ExtremeSolutions was established on a single principle: build resilient software and operational systems that permanently remove manual failure from African institutions.
                </p>

                <p>
                    I am writing directly to you because our active frontline initiative targets the most vulnerable bottleneck in our national development: <strong>the Nigerian secondary school system</strong>.
                </p>

                <h2 class="font-sans font-bold text-slate-950 text-base uppercase tracking-wider pt-3 border-b border-slate-200 pb-1">
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

                <h2 class="font-sans font-bold text-slate-950 text-base uppercase tracking-wider pt-3 border-b border-slate-200 pb-1">
                    The Intervention: ExtremeSolutions School OS (<a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-700 underline font-mono">sms.extremesolutions.com.ng</a>)
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

                <h2 class="font-sans font-bold text-slate-950 text-base uppercase tracking-wider pt-3 border-b border-slate-200 pb-1">
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

            <!-- Signoff Block -->
            <div class="mt-10 pt-6 border-t border-slate-200">
                <p class="mb-4">Yours in conviction and service,</p>

                <img src="{{ asset('images/signature.png') }}" alt="Samuel Ekunyan Signature" class="h-11 w-auto mb-2 opacity-90">

                <div class="font-sans text-sm">
                    <div class="font-bold text-slate-950 font-mono">Samuel Ekunyan</div>
                    <div class="text-slate-600">Founder &amp; Principal Systems Architect, ExtremeSolutions</div>
                    <div class="text-slate-500 font-mono text-xs mt-0.5">
                        <a href="mailto:samuel@ekunyansamuel.dev" class="text-emerald-700 underline">samuel@ekunyansamuel.dev</a> &bull; <a href="https://extremesolutions.com.ng" class="underline">extremesolutions.com.ng</a>
                    </div>
                </div>
            </div>

        </article>

        <!-- Clean Personalize Form at Bottom (No Pop-ups) -->
        <div class="mt-8 bg-white border border-slate-200 rounded-lg p-5 sm:p-6 shadow-xs font-sans">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h3 class="text-sm font-bold text-slate-900">Forward this Briefing to Another Leader</h3>
                    <p class="text-xs text-slate-500 mt-0.5">Enter their name to generate a personalized link with zero popups:</p>
                </div>
                <form @submit.prevent="updateLetter()" class="flex items-center gap-2">
                    <input type="text"
                           x-model="inputName"
                           placeholder="e.g. Engr. Tayo Balogun"
                           class="px-3 py-1.5 border border-slate-300 rounded text-xs text-slate-900 focus:outline-none focus:ring-1 focus:ring-emerald-500 w-48 sm:w-60">
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
