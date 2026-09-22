@extends('layouts.app')

@section('title', 'About ExtremeSolutions | Modern Digital Infrastructure, Enterprise Platforms & Applied AI')
@section('description', 'ExtremeSolutions is a software engineering company building modern digital infrastructure, custom enterprise platforms, and applied AI systems for African institutions and businesses. We engineer end-to-end software—spanning high-concurrency commercial platforms, operational systems, and intelligent digital workflows—designed to replace fragile manual processes with fast, resilient technology.')

@php
    $aboutSchema = json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'AboutPage',
        'name' => 'About ExtremeSolutions',
        'url' => route('about'),
        'description' => 'ExtremeSolutions is a software engineering company building modern digital infrastructure, custom enterprise platforms, and applied AI systems for African institutions and businesses. We engineer end-to-end software—spanning high-concurrency commercial platforms, operational systems, and intelligent digital workflows—designed to replace fragile manual processes with fast, resilient technology.',
        'publisher' => [
            '@id' => url('/') . '#organization',
        ],
    ]);
@endphp

@section('structured-data')
<script type="application/ld+json">{!! $aboutSchema !!}</script>
@endsection

@section('content')
    <!-- Hero Surface -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white pt-16 pb-20 md:pt-24 md:pb-28">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="brand-glow top-0 right-1/4 w-[500px] h-[300px] bg-[#00ff88]/10"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="mx-auto max-w-4xl text-3xl sm:text-5xl lg:text-[56px] tracking-tight leading-[1.15] reveal">
                <span class="font-light text-white/90">We Don't Just Advise</span><br/>
                <span class="font-bold text-white">We Build, Train &amp; Ship</span>
            </h1>

            <p class="mx-auto mt-6 max-w-3xl text-sm sm:text-base leading-relaxed text-white/80 reveal">
                ExtremeSolutions is a software engineering company building modern digital infrastructure, custom enterprise platforms, and applied AI systems for African institutions and businesses. We engineer end-to-end software—spanning high-concurrency commercial platforms, operational systems, and intelligent digital workflows—designed to replace fragile manual processes with fast, resilient technology.
            </p>
        </div>
    </section>

    <!-- Our Story & Philosophy (StoryBrand Guide Empathy) -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto reveal">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">The Origin</span>
                <h2 class="mt-2 text-2xl sm:text-4xl font-bold text-[#0c1f3a] tracking-tight">
                    Why We Started ExtremeSolutions
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mt-4 mb-8"></div>

                <div class="space-y-6 text-base sm:text-lg leading-relaxed text-gray-700">
                    <p>
                        ExtremeSolutions started with a pervasive frustration: too much enterprise software is built for a theoretical market instead of the real people operating it. Administrators and executive teams were stuck navigating fragmented spreadsheets, clunky generic tools, or paying vendors who produced half-finished software and vanished.
                    </p>
                    <p>
                        We set out to build the opposite. We believe that technology should bend to fit how your organization runs, not force your team into convoluted workarounds.
                    </p>
                    <p>
                        To guarantee our software is dependable, we run our own platforms in live production every day: our School Management System (<a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-600 font-semibold underline">sms.extremesolutions.com.ng</a>) and our ESPass ticketing engine (<a href="https://espass.extremesolutions.com.ng" target="_blank" class="text-emerald-600 font-semibold underline">espass.extremesolutions.com.ng</a>). When we build your platform, you are benefiting from battle-tested architectures.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Cards -->
    <section class="bg-[#f8fafc] py-20 border-y border-gray-200/70">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8">
                <!-- Mission -->
                <div class="rounded-3xl bg-white p-8 sm:p-10 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg reveal">
                    <div class="w-12 h-12 rounded-2xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-lg mb-6">
                        01
                    </div>
                    <h3 class="text-2xl font-bold text-[#0c1f3a]">Our Mission</h3>
                    <p class="mt-4 text-sm sm:text-base leading-relaxed text-gray-600">
                        To build modern digital infrastructure, custom enterprise platforms, and applied AI systems for African institutions and businesses—engineering end-to-end software designed to replace fragile manual processes with fast, resilient technology.
                    </p>
                </div>

                <!-- Vision -->
                <div class="rounded-3xl bg-white p-8 sm:p-10 border border-gray-200/80 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-lg reveal">
                    <div class="w-12 h-12 rounded-2xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-lg mb-6">
                        02
                    </div>
                    <h3 class="text-2xl font-bold text-[#0c1f3a]">Our Vision</h3>
                    <p class="mt-4 text-sm sm:text-base leading-relaxed text-gray-600">
                        To be the digital engineering partner organizations trust first when they need mission-critical technology that brings complete operational ease, works flawlessly on day one, and scales indefinitely.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Engineering Standards -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14 reveal">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">Our Principles</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a]">
                    What We Stand On
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="flex gap-5 p-6 rounded-2xl bg-[#f8fafc] border border-gray-200/80 reveal">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm">1</div>
                    <div>
                        <h4 class="font-bold text-lg text-[#0c1f3a]">Built to Fit, Not Force</h4>
                        <p class="mt-2 text-xs sm:text-sm leading-relaxed text-gray-600">We do not sell rigid templates. Every deployment begins with your actual operational workflows, forms, and approval hierarchies.</p>
                    </div>
                </div>

                <div class="flex gap-5 p-6 rounded-2xl bg-[#f8fafc] border border-gray-200/80 reveal">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm">2</div>
                    <div>
                        <h4 class="font-bold text-lg text-[#0c1f3a]">Production-Tested Authority</h4>
                        <p class="mt-2 text-xs sm:text-sm leading-relaxed text-gray-600">Our code isn't theoretical. We maintain live, high-uptime platforms in production right now. We build your systems with that same battle-tested rigor.</p>
                    </div>
                </div>

                <div class="flex gap-5 p-6 rounded-2xl bg-[#f8fafc] border border-gray-200/80 reveal">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm">3</div>
                    <div>
                        <h4 class="font-bold text-lg text-[#0c1f3a]">Direct Engineer Collaboration</h4>
                        <p class="mt-2 text-xs sm:text-sm leading-relaxed text-gray-600">No communication games through account managers. You speak directly with the engineers designing your database and interfaces.</p>
                    </div>
                </div>

                <div class="flex gap-5 p-6 rounded-2xl bg-[#f8fafc] border border-gray-200/80 reveal">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-sm">4</div>
                    <div>
                        <h4 class="font-bold text-lg text-[#0c1f3a]">Support That Never Drops</h4>
                        <p class="mt-2 text-xs sm:text-sm leading-relaxed text-gray-600">Hands-on administrator onboarding, comprehensive training, daily backups, and a real phone number to call whenever you need help.</p>
                    </div>
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
                    <h3 class="text-2xl sm:text-4xl font-bold tracking-tight">Ready to modernize your operations?</h3>
                    <p class="mt-4 text-sm text-white/75">Talk to our engineering team today for a free discovery session.</p>
                    <div class="mt-8 flex flex-wrap justify-center gap-4">
                        <a href="{{ route('contact') }}" class="rounded-full bg-[#00ff88] px-7 py-3 text-sm font-bold text-[#0a192f] hover:bg-[#00e67a] transition-colors">
                            Book a Free Consultation
                        </a>
                        <a href="{{ route('home') }}#services" class="rounded-full border border-white/20 px-6 py-3 text-sm font-medium text-white hover:bg-white/10 transition-colors">
                            View All Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
