@extends('layouts.app')

@section('title', 'ExtremeSolutions Academy | Practical Tech Mentorship on Real Software')
@section('description', 'Learn to build real software by working alongside the engineers who build and operate our live production platforms. Join the priority waitlist.')

@section('content')
    <!-- Hero Surface -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white pt-16 pb-20 md:pt-24 md:pb-32">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="brand-glow top-0 left-1/3 w-[600px] h-[350px] bg-gradient-to-br from-[#1e3a5f] via-[#00ff88]/10 to-transparent"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 rounded-full border border-[#00ff88]/30 bg-[#00ff88]/10 px-4 py-1.5 text-xs text-[#00ff88] backdrop-blur-md mb-8 reveal">
                <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                <span class="font-bold uppercase tracking-wider">COHORT MENTORSHIP &middot; APPLICATIONS OPENING SOON</span>
            </div>

            <h1 class="mx-auto max-w-4xl text-3xl sm:text-5xl lg:text-[58px] tracking-tight leading-[1.14] reveal">
                <span class="font-light text-white/90">We Build Great Software.</span><br/>
                <span class="font-bold text-white">We Also Build Nigerian Tech Careers<span class="text-[#d4a373]">.</span></span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm sm:text-base leading-relaxed text-white/75 reveal">
                A structured, cohort-based mentorship program for ambitious young Nigerians. Learn to build resilient software guided by engineers who build and run live production platforms every single day.
            </p>

            <div class="mt-10 flex flex-wrap items-center justify-center gap-4 reveal">
                <a href="#waitlist" class="inline-flex items-center rounded-full bg-[#d4a373] px-8 py-3.5 text-sm font-bold text-[#0c1f3a] hover:bg-[#c5935f] transition-all shadow-lg hover:-translate-y-0.5">
                    Join the Priority Waitlist
                </a>
                <a href="{{ route('about') }}" class="rounded-full border border-white/20 bg-white/10 px-7 py-3.5 text-sm font-medium text-white hover:bg-white/20 transition-all">
                    About ExtremeSolutions
                </a>
            </div>
        </div>
    </section>

    <!-- Why It's Different (Donald Miller SB7 Guide & Problem) -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16 reveal">
                <span class="text-xs font-bold uppercase tracking-wider text-[#d4a373]">Beyond Basic Tutorials</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a]">
                    Learn on Real Production Code, Not Academic Toy Projects
                </h2>
                <div class="w-16 h-1 bg-[#d4a373] mx-auto mt-4"></div>
                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed">
                    Most tech bootcamps stop at synthetic exercises and todo-list apps. Our mentees learn inside a company that deploys and maintains live production software serving actual organizations.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="rounded-2xl bg-[#f8fafc] p-8 border border-gray-200/80 shadow-sm reveal">
                    <div class="w-12 h-12 rounded-xl bg-[#0c1f3a] text-[#d4a373] flex items-center justify-center font-bold text-base mb-6">
                        01
                    </div>
                    <h3 class="text-xl font-bold text-[#0c1f3a] mb-2">Cohort-Based Learning</h3>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                        You learn alongside a focused peer group. Structured sprint reviews, collaborative code reviews, and pair programming keep you moving forward.
                    </p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-8 border border-gray-200/80 shadow-sm reveal">
                    <div class="w-12 h-12 rounded-xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center font-bold text-base mb-6">
                        02
                    </div>
                    <h3 class="text-xl font-bold text-[#0c1f3a] mb-2">Mentored by Practitioners</h3>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                        Guided directly by senior engineers who build and maintain ExtremeSolutions' live School Management System and ESPass ticketing engines.
                    </p>
                </div>

                <div class="rounded-2xl bg-[#f8fafc] p-8 border border-gray-200/80 shadow-sm reveal">
                    <div class="w-12 h-12 rounded-xl bg-[#0c1f3a] text-[#d4a373] flex items-center justify-center font-bold text-base mb-6">
                        03
                    </div>
                    <h3 class="text-xl font-bold text-[#0c1f3a] mb-2">Job-Ready Portfolio</h3>
                    <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                        Graduate with verifiable, production-grade applications that prove to global hiring managers that you understand architectural scalability and data integrity.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Priority Waitlist Signup Section -->
    <section id="waitlist" class="bg-[#f8fafc] py-20 md:py-28 border-t border-gray-200/70">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8 text-center reveal">
            <span class="text-xs font-bold uppercase tracking-wider text-[#d4a373]">Limited Cohort Size</span>
            <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a]">
                Be the First to Know When Applications Open
            </h2>
            <div class="w-16 h-1 bg-[#d4a373] mx-auto mt-4 mb-6"></div>
            <p class="text-sm sm:text-base text-gray-600 leading-relaxed mb-8">
                To guarantee deep 1-on-1 mentorship, every cohort is capped at a small group of dedicated students. Subscribe to receive curriculum outlines, dates, and early application access.
            </p>

            <div class="max-w-md mx-auto bg-white p-6 sm:p-8 rounded-3xl border border-gray-200 shadow-md">
                @include('components.newsletter-form', ['theme' => 'light'])
            </div>
        </div>
    </section>
@endsection
