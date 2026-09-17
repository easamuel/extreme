@extends('layouts.app')

@section('title', 'About Us - ExtremeSolutions')
@section('description', 'ExtremeSolutions designs and builds custom software, systems, and automation for businesses and institutions. Our mission, vision, and how we work.')

@section('content')
    <!-- Hero -->
    <section class="bg-gradient-to-br from-[#f0f7ff] to-[#e0f2e8] py-20 lg:py-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">About ExtremeSolutions</h1>
                <p class="text-xl text-gray-700 leading-relaxed">
                    A digital solutions company that builds, trains, and ships — not a vendor with two products.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Our Story</h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-4">
                    ExtremeSolutions started with a simple frustration: too much software gets built for the market
                    instead of for the business actually using it. So we set out to build the opposite — software
                    shaped around how a business actually works, not the other way around.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    We prove that by running our own products in production, not just pitching them. Alongside
                    client work, we're also building a mentorship program to train the next generation of Nigerian
                    developers on real problems — not just tutorials.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg shadow p-8 border-t-4 border-[#1e3a5f]">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h2>
                    <p class="text-gray-700 leading-relaxed">
                        To design and build software, systems, and automation that help businesses and institutions
                        run better than they did yesterday — and to train the next generation of Nigerian tech
                        talent to build the solutions of tomorrow.
                    </p>
                </div>
                <div class="bg-white rounded-lg shadow p-8 border-t-4 border-[#00ff88]">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h2>
                    <p class="text-gray-700 leading-relaxed">
                        To be the digital partner businesses and institutions turn to first when they need
                        technology that actually fits them — and a name synonymous with homegrown tech talent.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What We Stand On</h2>
                    <div class="w-24 h-1 bg-[#1e3a5f] mx-auto"></div>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#1e3a5f] text-white flex items-center justify-center font-bold">1</div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Built to Fit</h3>
                            <p class="text-gray-600">We don't sell one-size-fits-all software. Every solution starts with your actual problem.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#1e3a5f] text-white flex items-center justify-center font-bold">2</div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">We Run What We Build</h3>
                            <p class="text-gray-600">Our own products are live and in production — proof, not promises.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#1e3a5f] text-white flex items-center justify-center font-bold">3</div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Direct Access</h3>
                            <p class="text-gray-600">You work with the people building your software, not a relay of account managers.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#1e3a5f] text-white flex items-center justify-center font-bold">4</div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Support That Doesn't End at Launch</h3>
                            <p class="text-gray-600">Training and real support after go-live — not a handoff into silence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Want to Work With Us?</h2>
                <a href="{{ route('home') }}#contact" class="inline-block bg-[#1e3a5f] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#152a47] transition-colors">
                    Start Your Project
                </a>
            </div>
        </div>
    </section>
@endsection
