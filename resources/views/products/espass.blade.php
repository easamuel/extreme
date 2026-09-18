@extends('layouts.app')

@section('title', 'ESPass Event Ticketing & Access Engine | ExtremeSolutions')
@section('description', 'High-throughput event ticketing, instant fraud-proof QR validation, and real-time attendee revenue reconciliation. Live in production at espass.extremesolutions.com.ng.')

@php
    $espassSchema = json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'SoftwareApplication',
        'name' => 'ESPass Event Ticketing & Access Engine',
        'operatingSystem' => 'All modern browsers (Web / Mobile)',
        'applicationCategory' => 'BusinessApplication',
        'url' => 'https://espass.extremesolutions.com.ng',
        'description' => 'Cloud ticketing and gate verification system for modern events, conferences, and venue operations across Nigeria.',
        'offers' => [
            '@type' => 'Offer',
            'priceCurrency' => 'NGN',
            'price' => 'Contact for event tier pricing',
        ],
        'publisher' => [
            '@id' => url('/') . '#organization',
        ],
    ]);
@endphp

@section('structured-data')
<script type="application/ld+json">{!! $espassSchema !!}</script>
@endsection

@section('content')
    <!-- Hero Surface -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white pt-16 pb-20 md:pt-24 md:pb-32">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="brand-glow top-0 right-1/4 w-[600px] h-[350px] bg-gradient-to-br from-[#1e3a5f] via-[#00ff88]/10 to-transparent"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="mx-auto max-w-4xl text-3xl sm:text-5xl lg:text-[58px] tracking-tight leading-[1.14] reveal">
                <span class="font-light text-white/90">Sell Out Your Events</span><br/>
                <span class="font-bold text-white">Check Guests In In Under a Second</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm sm:text-base leading-relaxed text-white/75 reveal">
                ESPass is our event ticketing and access control infrastructure. Eliminate counterfeit paper passes, chaotic door bottlenecks, and fragmented payment spreadsheets with an automated cloud platform.
            </p>

            <div class="mt-10 flex flex-wrap items-center justify-center gap-4 reveal">
                <a href="{{ route('contact', ['subject' => 'ESPass Demo Request']) }}" class="inline-flex items-center rounded-full bg-[#00ff88] px-8 py-3.5 text-sm font-bold text-[#0a192f] hover:bg-[#00e67a] transition-all shadow-lg hover:-translate-y-0.5">
                    Schedule an Event Walkthrough
                </a>
                <a href="https://espass.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="group inline-flex items-center gap-2 rounded-full border border-white/25 bg-white/10 px-7 py-3.5 text-sm font-medium text-white hover:bg-white/20 transition-all">
                    <span>Explore Live Platform</span>
                    <svg class="h-4 w-4 text-[#00ff88] transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l10-10M7 7h10v10" />
                    </svg>
                </a>
            </div>

            <!-- Sleek Gate Scanner Console Window -->
            <div class="mt-12 max-w-5xl mx-auto reveal">
                <div class="rounded-2xl border border-white/20 bg-slate-900/80 p-2 sm:p-3 shadow-2xl backdrop-blur-md">
                    <!-- Console Header & Status -->
                    <div class="flex items-center justify-between px-3 py-2 border-b border-white/10 mb-2">
                        <div class="flex items-center gap-1.5">
                            <span class="w-3 h-3 rounded-full bg-red-500/80 inline-block"></span>
                            <span class="w-3 h-3 rounded-full bg-yellow-500/80 inline-block"></span>
                            <span class="w-3 h-3 rounded-full bg-green-500/80 inline-block"></span>
                        </div>
                        <div class="flex items-center gap-2 rounded-lg bg-black/40 px-4 py-1 text-xs font-mono text-white/70 border border-white/10">
                            <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                            <span>https://espass.extremesolutions.com.ng/gate-console</span>
                        </div>
                        <div class="flex items-center gap-1.5 text-xs font-mono font-bold text-[#00ff88]">
                            <span class="w-2 h-2 rounded-full bg-[#00ff88] animate-ping"></span>
                            <span>GATE SCANNER READY</span>
                        </div>
                    </div>
                    <!-- Mockup image -->
                    <div class="overflow-hidden rounded-xl bg-slate-950">
                        <img src="{{ asset('images/espass-preview.jpg') }}" alt="ExtremeSolutions ESPass Gate Scanner Console & Attendee Metrics" class="w-full h-auto object-cover rounded-xl shadow-2xl" loading="lazy" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Operational Advantages Grid -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-14 reveal">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">Engineered for Organizers</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a]">
                    Zero Guesswork, 100% Gate Control
                </h2>
                <p class="mt-4 text-sm sm:text-base text-gray-600">
                    Designed for corporate conferences, campus celebrations, private summits, and commercial ticketed venues.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="rounded-2xl bg-[#f8fafc] p-6 border border-gray-200/80 shadow-sm reveal">
                    <div class="w-10 h-10 rounded-xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm mb-4">
                        01
                    </div>
                    <h4 class="font-bold text-[#0c1f3a] mb-2">Instant QR Pass Generation</h4>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Unique encrypted QR tokens delivered directly to the attendee's email and smartphone immediately upon ticket purchase.</p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-6 border border-gray-200/80 shadow-sm reveal">
                    <div class="w-10 h-10 rounded-xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm mb-4">
                        02
                    </div>
                    <h4 class="font-bold text-[#0c1f3a] mb-2">Sub-Second Gate Scan</h4>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Turn any mobile phone camera or handheld scanner into an ultra-fast gate scanner with zero lag or duplicate entry.</p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-6 border border-gray-200/80 shadow-sm reveal">
                    <div class="w-10 h-10 rounded-xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm mb-4">
                        03
                    </div>
                    <h4 class="font-bold text-[#0c1f3a] mb-2">Live Attendance Metrics</h4>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Watch real-time headcounts, entry rates, VIP check-ins, and ticket revenue live from the central organizer console.</p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-6 border border-gray-200/80 shadow-sm reveal">
                    <div class="w-10 h-10 rounded-xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm mb-4">
                        04
                    </div>
                    <h4 class="font-bold text-[#0c1f3a] mb-2">Direct Bank Settlement</h4>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Seamless integration with Nigerian payment channels with transparent auditing and instant settlement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Banner -->
    <section class="bg-white pb-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="brand-surface relative overflow-hidden rounded-3xl p-10 sm:p-14 text-center text-white reveal">
                <div class="brand-texture" aria-hidden="true"></div>
                <div class="relative z-10 max-w-2xl mx-auto">
                    <h3 class="text-2xl sm:text-4xl font-bold tracking-tight">Planning an Upcoming Event?</h3>
                    <p class="mt-4 text-sm text-white/75">Talk to our team about deploying ESPass for your next conference or venue.</p>
                    <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <a href="{{ route('contact', ['subject' => 'ESPass Demo Request']) }}" class="rounded-full bg-[#00ff88] px-7 py-3 text-sm font-bold text-[#0a192f] hover:bg-[#00e67a] transition-colors">
                            Request Event Deployment
                        </a>
                        <a href="https://espass.extremesolutions.com.ng" target="_blank" rel="noopener noreferrer" class="rounded-full border border-white/20 px-6 py-3 text-sm font-medium text-white hover:bg-white/10 transition-colors">
                            Open Live Platform
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
