@extends('layouts.app')

@section('title', 'ExtremeSolutions - Custom Software, Systems & Automation')
@section('description', 'ExtremeSolutions designs and builds custom software, systems, and automation for businesses and institutions. See our live School Management System and HR platform.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-[#f0f7ff] to-[#e0f2e8] py-20 lg:py-32">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                    Software Built to Fit
                    <span class="text-[#1e3a5f]">How You Work</span>
                </h1>
                <p class="text-xl text-gray-700 mb-8 leading-relaxed">
                    ExtremeSolutions designs and builds custom software, systems, and automation for businesses and
                    institutions who don't have an in-house team to build it. We don't just advise — we build things
                    we run ourselves.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact" class="bg-[#1e3a5f] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#152a47] transition-colors shadow-lg">
                        Book a Consultation
                    </a>
                    <a href="#products" class="bg-white text-[#1e3a5f] px-8 py-3 rounded-lg font-semibold hover:bg-gray-50 transition-colors border-2 border-[#1e3a5f]">
                        See Our Work
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Who We Are</h2>
                    <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                </div>
                <div class="prose prose-lg max-w-none text-gray-700">
                    <p class="text-lg leading-relaxed mb-6">
                        We know what it's like to run a business on tools that fight you instead of helping you —
                        spreadsheets standing in for real systems, software that was never built for how you
                        actually work. That's the problem ExtremeSolutions exists to solve.
                    </p>
                    <p class="text-lg leading-relaxed mb-6">
                        We're not consultants who hand over a document and disappear. We design and build custom
                        software, systems, and automation — and we run our own products in production every day,
                        including our School Management System at
                        <a href="https://sms.extremesolutions.com.ng" target="_blank" rel="noopener" class="text-[#1e3a5f] font-semibold underline">sms.extremesolutions.com.ng</a>.
                        If we're pitching you on building software, it's because we already know what it takes to
                        build and operate it ourselves.
                    </p>
                    <div class="grid md:grid-cols-3 gap-8 mt-12">
                        <div class="text-center">
                            <div class="bg-[#e8f4f0] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-[#1e3a5f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-900 mb-2">We Build &amp; Run Software</h3>
                            <p class="text-gray-600">Not just advice — live products we operate ourselves</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-[#e8f4f0] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-[#00ff88]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-900 mb-2">Built to Fit You</h3>
                            <p class="text-gray-600">Scoped to what your business actually needs, not a bloated package</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-[#e8f4f0] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-[#1e3a5f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-gray-900 mb-2">Support After Launch</h3>
                            <p class="text-gray-600">Training and a real person to call — never a handoff into silence</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Build Section -->
    <section id="what-we-build" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What We Build</h2>
                    <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        HR and School Management are two things we've built. They're proof of how we work — not the
                        limit of what we do.
                    </p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow p-8 text-center">
                        <div class="bg-[#e8f4f0] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-[#1e3a5f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Custom Software</h3>
                        <p class="text-gray-600 text-sm">Purpose-built applications designed around how your business actually operates.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-8 text-center">
                        <div class="bg-[#e8f4f0] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-[#1e3a5f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Systems &amp; Automation</h3>
                        <p class="text-gray-600 text-sm">Connecting the tools you already use and automating the manual work in between.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow p-8 text-center">
                        <div class="bg-[#e8f4f0] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-[#1e3a5f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">AI &amp; Innovation</h3>
                        <p class="text-gray-600 text-sm">Practical AI features added where they genuinely save time — not for their own sake.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Software We've Built and Run</h2>
                    <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Proof, not just a pitch — these are live products, not mockups.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- School/Education -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow border-2 border-[#00ff88]">
                        <div class="bg-gradient-to-r from-[#00ff88] to-[#00cc6a] p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="bg-white w-16 h-16 rounded-lg flex items-center justify-center">
                                    <svg class="w-8 h-8 text-[#00ff88]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <span class="bg-white/90 text-[#1e3a5f] text-xs font-bold uppercase tracking-wide px-3 py-1 rounded-full">Live Now</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-2">School Management System</h3>
                            <p class="text-white/90">Run your whole school from one dashboard</p>
                        </div>
                        <div class="p-8">
                            <p class="text-gray-600 mb-6">
                                Fees, attendance, results, and parent communication in one platform — replacing
                                registers, spreadsheets, and disconnected tools with a single system your staff
                                actually use.
                            </p>
                            <ul class="space-y-3 mb-6 text-gray-700">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-[#00ff88] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Fees, Attendance &amp; Results in One Place</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-[#00ff88] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Parent Portal — No More Chasing the Office</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-[#00ff88] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Priced Per Student, Per Term</span>
                                </li>
                            </ul>
                            <a href="{{ route('products.school') }}" class="inline-block bg-[#00ff88] text-[#1e3a5f] px-6 py-2 rounded-lg hover:bg-[#00cc6a] transition-colors font-semibold">
                                Book a Free Demo →
                            </a>
                        </div>
                    </div>

                    <!-- HR Management -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <div class="bg-gradient-to-r from-[#1e3a5f] to-[#2a4d7a] p-8">
                            <div class="bg-white w-16 h-16 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-[#1e3a5f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-2">HR Management</h3>
                            <p class="text-white/90">Comprehensive HR platform</p>
                        </div>
                        <div class="p-8">
                            <p class="text-gray-600 mb-6">
                                Streamline your human resources operations with our comprehensive HR management solution.
                                Manage employees, payroll, attendance, and more from a single platform.
                            </p>
                            <ul class="space-y-3 mb-6 text-gray-700">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-[#00ff88] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Employee Management</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-[#00ff88] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Payroll Processing</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-[#00ff88] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Attendance Tracking</span>
                                </li>
                            </ul>
                            <a href="{{ route('products.hr') }}" class="inline-block bg-[#1e3a5f] text-white px-6 py-2 rounded-lg hover:bg-[#152a47] transition-colors">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How We Work Section -->
    <section id="how-we-work" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">How We Work</h2>
                    <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        A simple path from problem to working software.
                    </p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center relative">
                        <div class="bg-[#1e3a5f] text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">1</div>
                        <h3 class="font-semibold text-gray-900 mb-2">Talk to Us</h3>
                        <p class="text-gray-600">A free consultation to understand your problem — no obligation.</p>
                    </div>
                    <div class="text-center relative">
                        <div class="bg-[#1e3a5f] text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">2</div>
                        <h3 class="font-semibold text-gray-900 mb-2">We Design &amp; Build</h3>
                        <p class="text-gray-600">Scoped to what you actually need — not a bloated off-the-shelf package.</p>
                    </div>
                    <div class="text-center relative">
                        <div class="bg-[#1e3a5f] text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">3</div>
                        <h3 class="font-semibold text-gray-900 mb-2">You Launch, With Support</h3>
                        <p class="text-gray-600">Training and onboarding, then ongoing support — never a handoff into silence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Key Features</h2>
                    <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Everything you need to streamline operations and boost productivity
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-[#e8f4f0] w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-[#1e3a5f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Easy Onboarding</h3>
                        <p class="text-gray-600 text-sm">Get started quickly with intuitive setup and guided tutorials</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-[#e8f4f0] w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-[#1e3a5f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Secure Access</h3>
                        <p class="text-gray-600 text-sm">Enterprise-grade security with role-based access control</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-[#e8f4f0] w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-[#1e3a5f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Analytics Dashboard</h3>
                        <p class="text-gray-600 text-sm">Real-time insights and comprehensive reporting tools</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-[#e8f4f0] w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-10 h-10 text-[#1e3a5f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Automated Workflows</h3>
                        <p class="text-gray-600 text-sm">Reduce manual work with intelligent automation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Start Your Project</h2>
                    <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 mb-4">
                        Tell us about the problem you're trying to solve. We'll get back to you to set up a free
                        consultation — no obligation.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 text-gray-700">
                        <a href="mailto:contact@extremesolutions.com.ng" class="flex items-center gap-2 hover:text-[#1e3a5f] transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>contact@extremesolutions.com.ng</span>
                        </a>
                        <a href="tel:08036375292" class="flex items-center gap-2 hover:text-[#1e3a5f] transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>08036375292</span>
                        </a>
                    </div>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="bg-white rounded-lg shadow-lg p-8">
                    <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
                        @csrf

                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Name <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                value="{{ old('name') }}"
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1e3a5f] focus:border-[#1e3a5f] @error('name') border-red-500 @enderror"
                                placeholder="Your full name"
                            >
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                value="{{ old('email') }}"
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1e3a5f] focus:border-[#1e3a5f] @error('email') border-red-500 @enderror"
                                placeholder="your.email@example.com"
                            >
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Subject Field -->
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                                Subject <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="subject"
                                name="subject"
                                value="{{ old('subject', request('subject')) }}"
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1e3a5f] focus:border-[#1e3a5f] @error('subject') border-red-500 @enderror"
                                placeholder="What is this regarding?"
                            >
                            @error('subject')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                                Message <span class="text-red-500">*</span>
                            </label>
                            <textarea 
                                id="message" 
                                name="message" 
                                rows="6"
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1e3a5f] focus:border-[#1e3a5f] @error('message') border-red-500 @enderror"
                                placeholder="Tell us more about your inquiry..."
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button 
                                type="submit" 
                                class="w-full bg-[#1e3a5f] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#152a47] transition-colors focus:outline-none focus:ring-2 focus:ring-[#1e3a5f] focus:ring-offset-2"
                            >
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

