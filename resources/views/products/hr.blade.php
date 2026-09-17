@extends('layouts.app')

@section('title', 'Custom HR & Workforce Systems | ExtremeSolutions')
@section('description', 'Bespoke workforce management, automated payroll collation, leave administration, and staff records engineered for Nigerian enterprises.')

@section('content')
    <!-- Hero Surface -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white pt-16 pb-20 md:pt-24 md:pb-28">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="brand-glow top-0 right-1/4 w-[500px] h-[300px] bg-[#00ff88]/10"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-xs text-white/90 backdrop-blur-md mb-6 reveal">
                <span class="text-[#00ff88] font-bold">Enterprise Bespoke Solutions</span>
            </span>

            <h1 class="mx-auto max-w-4xl text-3xl sm:text-5xl lg:text-[56px] tracking-tight leading-[1.15] reveal">
                <span class="font-light text-white/90">Custom Workforce Systems</span><br/>
                <span class="font-bold text-white">Engineered Around Your Team</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm sm:text-base leading-relaxed text-white/75 reveal">
                We design and build bespoke workforce management, automated staff records, and payroll calculation systems tailored to your specific organizational hierarchy.
            </p>
        </div>
    </section>

    <!-- Details -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">Workforce Operations</span>
                <h2 class="mt-2 text-2xl sm:text-3xl font-bold text-[#0c1f3a]">
                    Tailor-Built for Your Exact Corporate Processes
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mt-4 mb-8"></div>

                <div class="grid sm:grid-cols-2 gap-6 my-10">
                    <div class="p-6 rounded-2xl bg-[#f8fafc] border border-gray-200">
                        <h3 class="font-bold text-[#0c1f3a] text-lg mb-2">Employee Records &amp; Bio Data</h3>
                        <p class="text-xs sm:text-sm text-gray-600">Centralized staff profiles, digital contract archives, and automated anniversary alerts.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-[#f8fafc] border border-gray-200">
                        <h3 class="font-bold text-[#0c1f3a] text-lg mb-2">Automated Payroll Rules</h3>
                        <p class="text-xs sm:text-sm text-gray-600">Calculations tailored to your local tax brackets, pension deductions, and bonus formulas.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-[#f8fafc] border border-gray-200">
                        <h3 class="font-bold text-[#0c1f3a] text-lg mb-2">Multi-Tier Leave Approvals</h3>
                        <p class="text-xs sm:text-sm text-gray-600">Self-service staff requests with automatic routing to department heads and HR managers.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-[#f8fafc] border border-gray-200">
                        <h3 class="font-bold text-[#0c1f3a] text-lg mb-2">Secure Audit Trails</h3>
                        <p class="text-xs sm:text-sm text-gray-600">Enterprise data encryption, role-based viewing permissions, and immutable access logs.</p>
                    </div>
                </div>

                <div class="rounded-3xl bg-[#0c1f3a] text-white p-8 sm:p-10 text-center">
                    <h3 class="text-xl sm:text-2xl font-bold">Need a Custom Workforce Platform?</h3>
                    <p class="mt-3 text-sm text-white/75 max-w-xl mx-auto">
                        Tell us about your organization size, department structure, and operational requirements. We engineer the exact system you need.
                    </p>
                    <a href="{{ route('contact', ['subject' => 'Custom HR System Scope']) }}" class="mt-6 inline-block rounded-full bg-[#00ff88] px-8 py-3 text-xs uppercase font-bold text-[#0a192f] hover:bg-[#00e67a] transition-all">
                        Request System Architecture Call
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
