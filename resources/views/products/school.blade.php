@extends('layouts.app')

@section('title', 'ExtremeSolutions SMS | School Management System for Forward-Thinking Schools')
@section('description', 'Run your entire school from one dashboard: automated term results, fee ledger reconciliation, student attendance, and instant parent portals. Live at sms.extremesolutions.com.ng.')

@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "ExtremeSolutions School Management System (SMS)",
  "operatingSystem": "All modern browsers (Cloud SaaS)",
  "applicationCategory": "EducationalApplication",
  "url": "https://sms.extremesolutions.com.ng",
  "description": "Unified school administration platform covering student fee tracking, automated term result collation, attendance monitoring, and parent communication.",
  "offers": {
    "@type": "Offer",
    "priceCurrency": "NGN",
    "price": "Contact for per-student term rate",
    "description": "Low-commitment per-student, per-term subscription that scales with school enrollment."
  },
  "publisher": {
    "@id": "{{ url('/') }}#organization"
  }
}
</script>
@endsection

@section('content')
    <!-- Hero Surface -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white pt-16 pb-20 md:pt-24 md:pb-32">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="brand-glow top-0 right-1/3 w-[600px] h-[350px] bg-gradient-to-br from-[#1e3a5f] via-[#00ff88]/10 to-transparent"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 rounded-full border border-[#00ff88]/30 bg-[#00ff88]/10 px-4 py-1.5 text-xs text-[#00ff88] backdrop-blur-md mb-8 reveal">
                <span class="w-2 h-2 rounded-full bg-[#00ff88] animate-pulse"></span>
                <span class="font-bold">LIVE PRODUCTION PLATFORM &middot; sms.extremesolutions.com.ng</span>
            </div>

            <h1 class="mx-auto max-w-4xl text-3xl sm:text-5xl lg:text-[58px] tracking-tight leading-[1.14] reveal">
                <span class="font-light text-white/90">Run Your Entire School</span><br/>
                <span class="font-bold text-white">From One Clean Dashboard<span class="text-[#d4a373]">.</span></span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm sm:text-base leading-relaxed text-white/75 reveal">
                Replace paper registers, chaotic spreadsheet result collations, and manual fee ledgers with a single, fast cloud platform your teachers and administrators will actually enjoy using.
            </p>

            <div class="mt-10 flex flex-wrap items-center justify-center gap-4 reveal">
                <a href="{{ route('contact', ['subject' => 'School Demo Request']) }}" class="inline-flex items-center rounded-full bg-[#d4a373] px-8 py-3.5 text-sm font-bold text-[#0c1f3a] hover:bg-[#c5935f] transition-all shadow-lg hover:-translate-y-0.5">
                    Book a Free School Demo
                </a>
                <a href="https://sms.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="group inline-flex items-center gap-2 rounded-full border border-white/25 bg-white/10 px-7 py-3.5 text-sm font-medium text-white hover:bg-white/20 transition-all">
                    <span>See the Live System</span>
                    <svg class="h-4 w-4 text-[#d4a373] transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l10-10M7 7h10v10" />
                    </svg>
                </a>
            </div>

            <p class="mt-6 text-xs text-white/50 reveal">
                * Zero hardware required. Runs seamlessly on any laptop, tablet, or phone.
            </p>
        </div>
    </section>

    <!-- The Problem / Stakes: What a Term Looks Like (StoryBrand Before vs After) -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16 reveal">
                <span class="text-xs font-bold uppercase tracking-wider text-[#d4a373]">Operational Contrast</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a]">
                    What Does Your Term Look Like Today?
                </h2>
                <div class="w-16 h-1 bg-[#d4a373] mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Without ExtremeSolutions -->
                <div class="rounded-3xl bg-[#f8fafc] border border-gray-200 p-8 sm:p-10 shadow-sm reveal">
                    <span class="text-xs font-bold uppercase tracking-wider text-red-500 bg-red-50 px-3 py-1 rounded-full">Without a System</span>
                    <h3 class="mt-4 text-xl font-bold text-gray-800">The Manual Spreadsheet Struggle</h3>
                    <ul class="mt-6 space-y-4 text-sm text-gray-600">
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold">&times;</span>
                            <span>Fees tracked across physical paper ledgers and disconnected Excel sheets, reconciled by hand.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold">&times;</span>
                            <span>Results computed manually, term after term, with frequent transcription and mathematical errors.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold">&times;</span>
                            <span>Parents constantly calling or visiting the school office for information the school already has.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-500 font-bold">&times;</span>
                            <span>Administrative staff and teachers completely overwhelmed with data entry at the start and end of every term.</span>
                        </li>
                    </ul>
                </div>

                <!-- With ExtremeSolutions -->
                <div class="rounded-3xl bg-[#0c1f3a] text-white p-8 sm:p-10 shadow-xl border border-white/10 relative overflow-hidden reveal">
                    <div class="brand-texture" aria-hidden="true"></div>
                    <div class="relative z-10">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#00ff88] bg-[#00ff88]/15 px-3 py-1 rounded-full">With ExtremeSolutions SMS</span>
                        <h3 class="mt-4 text-xl font-bold text-white">The Unified Digital School</h3>
                        <ul class="mt-6 space-y-4 text-sm text-white/80">
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-[#00ff88] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Fees tracked, invoiced, and reconciled automatically on a single real-time dashboard.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-[#00ff88] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Exam and continuous assessment marks computed instantly into approved term report sheets.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-[#00ff88] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Parents view grades, attendance, and fee receipts directly through their secure portal.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="w-5 h-5 text-[#00ff88] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Teacher hours liberated to focus on student teaching, not late-night data collation.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Features Grid -->
    <section class="bg-[#f8fafc] py-20 md:py-28 border-y border-gray-200/70">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-14 reveal">
                <span class="text-xs font-bold uppercase tracking-wider text-[#d4a373]">Platform Capabilities</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a]">
                    Engineered for Complete School Peace of Mind
                </h2>
                <p class="mt-4 text-sm sm:text-base text-gray-600">
                    Everything an administrator, principal, bursar, or teacher needs during the academic session.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="rounded-2xl bg-white p-6 border border-gray-200/80 shadow-sm reveal">
                    <div class="w-10 h-10 rounded-xl bg-[#0c1f3a] text-[#d4a373] flex items-center justify-center font-bold text-sm mb-4">
                        01
                    </div>
                    <h4 class="font-bold text-[#0c1f3a] mb-2">Automated Result Collation</h4>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Continuous assessment, exam scoring, class rankings, and automated comment generation without manual calculation.</p>
                </div>

                <div class="rounded-2xl bg-white p-6 border border-gray-200/80 shadow-sm reveal">
                    <div class="w-10 h-10 rounded-xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm mb-4">
                        02
                    </div>
                    <h4 class="font-bold text-[#0c1f3a] mb-2">Fee Ledger &amp; Invoicing</h4>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Track partial payments, generate digital receipts, and instantly see outstanding balances per student or classroom.</p>
                </div>

                <div class="rounded-2xl bg-white p-6 border border-gray-200/80 shadow-sm reveal">
                    <div class="w-10 h-10 rounded-xl bg-[#0c1f3a] text-[#d4a373] flex items-center justify-center font-bold text-sm mb-4">
                        03
                    </div>
                    <h4 class="font-bold text-[#0c1f3a] mb-2">Attendance &amp; Bio Records</h4>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Daily class attendance logs with absent alerts, medical notes, emergency contacts, and student histories.</p>
                </div>

                <div class="rounded-2xl bg-white p-6 border border-gray-200/80 shadow-sm reveal">
                    <div class="w-10 h-10 rounded-xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm mb-4">
                        04
                    </div>
                    <h4 class="font-bold text-[#0c1f3a] mb-2">Dedicated Parent Portal</h4>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Parents log in from their smartphone to inspect verified results, fee payment receipts, and school announcements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Framing & Risk Reversal (StoryBrand Principle) -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto rounded-3xl bg-[#0c1f3a] text-white p-8 sm:p-14 shadow-2xl relative overflow-hidden reveal">
                <div class="brand-texture" aria-hidden="true"></div>
                <div class="relative z-10 text-center">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#d4a373]">Risk-Reversal Pricing</span>
                    <h2 class="mt-4 text-2xl sm:text-4xl font-bold tracking-tight">
                        You Pay Per Student, Per Term.<br class="hidden sm:inline" />
                        It Grows With Your School &mdash; Never Traps You.
                    </h2>
                    <p class="mt-4 max-w-2xl mx-auto text-sm sm:text-base leading-relaxed text-white/75">
                        No massive multi-million Naira upfront software licenses. If your enrollment changes, your investment adjusts automatically. We onboard your staff and configure your school completely before term begins.
                    </p>

                    <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                        <a href="{{ route('contact', ['subject' => 'School Demo Request']) }}" class="rounded-full bg-[#d4a373] px-8 py-3.5 text-sm font-bold text-[#0c1f3a] hover:bg-[#c5935f] transition-all shadow-lg">
                            Schedule Your School Demo
                        </a>
                        <a href="https://wa.me/2349052585622?text=Hello%20ExtremeSolutions,%20I%20would%20like%20to%20request%20a%20demo%20of%20the%20School%20Management%20System" target="_blank" rel="noopener noreferrer" class="rounded-full border border-[#00ff88]/40 bg-[#00ff88]/10 px-7 py-3.5 text-sm font-medium text-[#00ff88] hover:bg-[#00ff88]/20 transition-all">
                            Chat with Lead Engineer on WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
