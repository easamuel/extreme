@extends('layouts.app')

@section('title', 'Support & Mission | ExtremeSolutions')
@section('description', 'ExtremeSolutions is a software engineering company building modern digital infrastructure, custom enterprise platforms, and applied AI systems for institutions and businesses. We engineer end-to-end software, spanning high-concurrency commercial platforms, operational systems, and intelligent digital workflows designed to replace fragile manual processes with fast, resilient technology.')

@section('content')
    <!-- 1. Hero Surface -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white pt-16 pb-20 md:pt-24 md:pb-28">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="brand-glow top-0 left-1/2 -translate-x-1/2 w-[600px] h-[350px] bg-gradient-to-br from-[#1e3a5f] via-[#00ff88]/15 to-transparent"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 rounded-full border border-[#00ff88]/30 bg-[#00ff88]/10 px-4 py-1.5 text-xs font-semibold text-[#00ff88] mb-6">
                <span class="w-2 h-2 rounded-full bg-[#00ff88] animate-pulse"></span>
                <span>ENGINEERING STEWARDSHIP &bull; SLA STANDARD</span>
            </div>

            <h1 class="mx-auto max-w-4xl text-3xl sm:text-5xl lg:text-[58px] tracking-tight leading-[1.14]">
                <span class="font-light text-white/90">Changing Digital Software in Africa</span><br/>
                <span class="font-bold text-white">By Building Systems That Last</span>
            </h1>

            <p class="mx-auto mt-6 max-w-3xl text-sm sm:text-base leading-relaxed text-white/80">
                ExtremeSolutions is a software engineering company building modern digital infrastructure, custom enterprise platforms, and applied AI systems for institutions and businesses. We engineer end-to-end software, spanning high-concurrency commercial platforms, operational systems, and intelligent digital workflows designed to replace fragile manual processes with fast, resilient technology.
            </p>

            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="#support-project"
                   class="inline-flex items-center rounded-full bg-[#00ff88] px-8 py-3.5 text-sm font-bold text-[#0a192f] hover:bg-[#00e67a] transition-all shadow-lg hover:-translate-y-0.5">
                    Check Our Support Needed Project &darr;
                </a>
                <a href="https://wa.me/2349052585622" target="_blank"
                   class="rounded-full border border-white/20 bg-white/10 px-7 py-3.5 text-sm font-medium text-white hover:bg-white/20 transition-all">
                    Contact Support Desk
                </a>
            </div>
        </div>
    </section>

    <!-- 2. PROMINENT SPOTLIGHT: Check Our Support Needed Project -->
    <section id="support-project" class="bg-white py-16 md:py-24 border-b border-gray-200">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl bg-gradient-to-br from-[#0c1f3a] via-[#132c52] to-[#0c1f3a] p-8 sm:p-12 text-white shadow-2xl border border-emerald-500/30 relative overflow-hidden">
                <div class="absolute -right-16 -top-16 w-56 h-56 bg-[#00ff88]/15 rounded-full blur-3xl pointer-events-none"></div>

                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                    <div class="max-w-2xl">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-[#00ff88]/10 text-[#00ff88] border border-[#00ff88]/20 mb-4">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#00ff88] animate-pulse"></span>
                            <span>ACTIVE SUPPORT NEEDED PROJECT &bull; SECONDARY EDUCATION</span>
                        </div>

                        <h2 class="text-2xl sm:text-3xl font-bold text-white tracking-tight">
                            Urgent Operational Brief: Equipping 10 Nigerian Secondary Schools
                        </h2>

                        <p class="mt-3 text-sm sm:text-base text-white/80 leading-relaxed">
                            Over 70% of Nigerian secondary students touch a computer keyboard for the first time during their JAMB exam, leading to panic and suppressed results. Concurrently, schools lose weeks to manual broadsheet calculations. We are deploying our School OS and an on-ground taskforce across our first 10 schools (~3,000 students) and invite institutional backers to stand with us.
                        </p>
                    </div>

                    <div class="shrink-0 flex flex-col sm:flex-row lg:flex-col gap-3">
                        <a href="{{ $campaignUrl }}"
                           class="inline-flex items-center justify-center rounded-xl bg-[#00ff88] px-7 py-3.5 text-sm font-bold text-[#0c1f3a] hover:bg-[#00e67a] transition-all shadow-lg">
                            Read The Support &amp; Backer Letter &rarr;
                        </a>
                        <span class="text-xs text-white/60 text-center">Unlisted Executive Briefing</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. How We Are Changing Digital Software in Africa -->
    <section class="bg-[#f8fafc] py-20 md:py-28 border-b border-gray-200">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">Our Engineering Philosophy</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a] tracking-tight">
                    How ExtremeSolutions Changes the Paradigm
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed">
                    We reject theoretical software that collapses under real-world African operational constraints. Here is how we build differently:
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="rounded-2xl bg-white p-8 border border-gray-200 shadow-sm hover:border-[#00ff88] transition">
                    <div class="w-12 h-12 rounded-xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-lg mb-6">
                        01
                    </div>
                    <h3 class="text-xl font-bold text-[#0c1f3a] mb-3">Offline-First Edge Resilience</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Internet drops and grid blackouts are facts of life. We design our platforms with local-first edge caching so ticket gates keep scanning, examinations continue uninterrupted, and data syncs when connectivity resumes.
                    </p>
                </div>

                <div class="rounded-2xl bg-white p-8 border border-gray-200 shadow-sm hover:border-[#00ff88] transition">
                    <div class="w-12 h-12 rounded-xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-lg mb-6">
                        02
                    </div>
                    <h3 class="text-xl font-bold text-[#0c1f3a] mb-3">On-Ground Enablement</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Software alone fails in emerging markets. When we deploy our systems, we dispatch physical on-ground engineering taskforces to audit hardware, migrate legacy records, and certify local staff in person.
                    </p>
                </div>

                <div class="rounded-2xl bg-white p-8 border border-gray-200 shadow-sm hover:border-[#00ff88] transition">
                    <div class="w-12 h-12 rounded-xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-lg mb-6">
                        03
                    </div>
                    <h3 class="text-xl font-bold text-[#0c1f3a] mb-3">Enterprise SLA Stewardship</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        We never hand over software into silence. Every system is covered by automated daily backups, continuous database query optimization, security vulnerability patching, and direct senior engineer hotlines.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Direct Support Channels -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600">Always On Call</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a]">
                    Connect With Our Technical Desk
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="rounded-2xl border border-gray-200 p-8 text-center hover:border-emerald-500 transition">
                    <div class="w-12 h-12 mx-auto rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.144.39-.086s1.011.477 1.184.564.289.13.332.203c.043.071.043.419-.101.824z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a]">WhatsApp Incident Desk</h3>
                    <p class="text-xs text-gray-500 mt-1">Direct channel for active production systems</p>
                    <div class="mt-4 text-sm font-bold text-gray-900">+234 803 637 5292</div>
                    <a href="https://wa.me/2348036375292" target="_blank" class="mt-4 inline-block text-xs font-bold text-emerald-600 hover:underline">
                        Open WhatsApp Desk &rarr;
                    </a>
                </div>

                <div class="rounded-2xl border border-gray-200 p-8 text-center hover:border-emerald-500 transition">
                    <div class="w-12 h-12 mx-auto rounded-full bg-blue-50 text-blue-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a]">Email Engineering Desk</h3>
                    <p class="text-xs text-gray-500 mt-1">Technical inquiries and architecture reviews</p>
                    <div class="mt-4 text-sm font-bold text-gray-900">info@extremesolutions.com.ng</div>
                    <a href="mailto:info@extremesolutions.com.ng" class="mt-4 inline-block text-xs font-bold text-emerald-600 hover:underline">
                        Send Message &rarr;
                    </a>
                </div>

                <div class="rounded-2xl border border-gray-200 p-8 text-center hover:border-emerald-500 transition">
                    <div class="w-12 h-12 mx-auto rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-[#0c1f3a]">Schedule Strategy Call</h3>
                    <p class="text-xs text-gray-500 mt-1">30-minute system architecture review</p>
                    <div class="mt-4 text-sm font-bold text-gray-900">With Samuel Ekunyan</div>
                    <a href="{{ $calBookingUrl }}" target="_blank" class="mt-4 inline-block text-xs font-bold text-emerald-600 hover:underline">
                        Book Session &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
