@extends('layouts.app')

@section('title', 'Tech Mentorship Program - ExtremeSolutions Academy')
@section('description', 'A structured, cohort-based mentorship program from ExtremeSolutions — learn to build real software by working alongside the engineers who build our live products.')

@section('content')
    <!-- Hero -->
    <section class="bg-gradient-to-br from-[#1e3a5f] to-[#152a47] py-20 lg:py-28">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center text-white">
                <span class="inline-block bg-[#00ff88] text-[#1e3a5f] text-xs font-bold uppercase tracking-wide px-3 py-1 rounded-full mb-4">Coming Soon</span>
                <h1 class="text-4xl md:text-5xl font-bold mb-6">We Build Software. We Also Build Tech Careers.</h1>
                <p class="text-xl text-white/90 mb-8 leading-relaxed">
                    A structured, cohort-based mentorship program for young Nigerians learning to build real
                    software — guided by the same engineers who build and run our own products. Not open yet.
                </p>
                <a href="{{ route('home') }}#newsletter" class="inline-block bg-[#00ff88] text-[#1e3a5f] px-8 py-3 rounded-lg font-semibold hover:bg-[#00cc6a] transition-colors shadow-lg">
                    Get Notified When We Launch
                </a>
            </div>
        </div>
    </section>

    <!-- Why it's different -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Learn on Real Work, Not Just Exercises</h2>
                    <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                </div>
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    A lot of tech training stops at tutorials and sample projects. Ours doesn't have to — because
                    we're a company that builds and runs real software in production every day. Mentees will learn
                    from people actively doing the work, not just teaching it from a curriculum written once and
                    reused forever.
                </p>
                <div class="grid md:grid-cols-3 gap-8 mt-12">
                    <div class="text-center">
                        <div class="bg-[#e8f4f0] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-[#1e3a5f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Cohort-Based</h3>
                        <p class="text-gray-600 text-sm">You learn alongside a small group, not alone — structured, not self-paced guesswork.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-[#e8f4f0] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-[#1e3a5f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Mentored by Practitioners</h3>
                        <p class="text-gray-600 text-sm">Guided by engineers who build ExtremeSolutions' own live products, not career instructors.</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-[#e8f4f0] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-[#1e3a5f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Grounded in Real Software</h3>
                        <p class="text-gray-600 text-sm">Exercises and projects modeled on the actual systems we build for real clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Interested in Joining?</h2>
                <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                <p class="text-lg text-gray-700 mb-8">
                    The Academy isn't open yet. Subscribe to our newsletter and you'll be the first to know when
                    applications open.
                </p>
                <div class="max-w-md mx-auto">
                    @include('components.newsletter-form', ['theme' => 'light'])
                </div>
            </div>
        </div>
    </section>
@endsection
