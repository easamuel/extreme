@extends('layouts.app')

@section('title', 'ExtremeSolutions - Custom Software, Systems & Automation')
@section('description', 'ExtremeSolutions designs and builds custom software, systems, and automation for businesses and institutions — plus a tech mentorship Academy. See our live School Management System and ESPass ticketing platform.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-[#f0f7ff] to-[#e0f2e8] py-20 lg:py-28 overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
                <!-- Copy -->
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                        Software Built to Fit
                        <span class="text-[#1e3a5f]">How You Work</span>
                    </h1>
                    <p class="text-xl text-gray-700 mb-8 leading-relaxed">
                        ExtremeSolutions designs and builds custom software, systems, and automation for businesses
                        and institutions who don't have an in-house team to build it. We don't just advise — we
                        build things we run ourselves.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#contact" class="bg-[#1e3a5f] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#152a47] transition-colors shadow-lg">
                            Book a Consultation
                        </a>
                        <a href="#products" class="bg-white text-[#1e3a5f] px-8 py-3 rounded-lg font-semibold hover:bg-gray-50 transition-colors border-2 border-[#1e3a5f]">
                            See Our Work
                        </a>
                    </div>
                </div>

                <!-- Visual: abstract dashboard mockup (illustrative, not a real screenshot) -->
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
                        <div class="bg-gray-50 border-b border-gray-100 px-4 py-3 flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-red-300"></span>
                            <span class="w-3 h-3 rounded-full bg-yellow-300"></span>
                            <span class="w-3 h-3 rounded-full bg-[#00ff88]"></span>
                        </div>
                        <div class="p-6 space-y-5">
                            <div class="flex items-center justify-between">
                                <div class="h-3 w-28 bg-[#1e3a5f]/20 rounded-full"></div>
                                <div class="h-9 w-9 rounded-full bg-[#e8f4f0] flex items-center justify-center">
                                    <span class="w-3 h-3 rounded-full bg-[#00ff88]"></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-3">
                                <div class="h-16 rounded-lg bg-[#e8f4f0]"></div>
                                <div class="h-16 rounded-lg bg-[#e8f4f0]"></div>
                                <div class="h-16 rounded-lg bg-[#1e3a5f]"></div>
                            </div>
                            <div class="h-28 rounded-lg bg-gray-50 border border-gray-100 flex items-end gap-2 p-3">
                                <div class="w-1/6 bg-[#1e3a5f] rounded-t" style="height:40%"></div>
                                <div class="w-1/6 bg-[#1e3a5f] rounded-t" style="height:70%"></div>
                                <div class="w-1/6 bg-[#00ff88] rounded-t" style="height:90%"></div>
                                <div class="w-1/6 bg-[#1e3a5f] rounded-t" style="height:55%"></div>
                                <div class="w-1/6 bg-[#1e3a5f] rounded-t" style="height:65%"></div>
                                <div class="w-1/6 bg-[#00ff88] rounded-t" style="height:100%"></div>
                            </div>
                            <div class="space-y-2">
                                <div class="h-3 w-full bg-gray-100 rounded-full"></div>
                                <div class="h-3 w-5/6 bg-gray-100 rounded-full"></div>
                                <div class="h-3 w-2/3 bg-gray-100 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Floating badge -->
                    <div class="hidden sm:flex absolute -bottom-6 -left-6 bg-white rounded-xl shadow-lg border border-gray-100 px-4 py-3 items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-[#e8f4f0] flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-[#00994d]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Live in Production</p>
                            <p class="text-xs text-gray-500">Not a mockup</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Teaser Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Who We Are</h2>
                <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                <p class="text-lg leading-relaxed text-gray-700 mb-6">
                    We're not consultants who hand over a document and disappear. We design and build custom
                    software, systems, and automation — and we run our own products in production every day. If
                    we're pitching you on building software, it's because we already know what it takes to build
                    and operate it ourselves.
                </p>
                <a href="{{ route('about') }}" class="inline-block text-[#1e3a5f] font-semibold hover:underline">
                    Learn more about us →
                </a>
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
                        We're not an HR company or an education company — those are just where our software happens
                        to live today. We build, train, and ship solutions across tech.
                    </p>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
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
                    <div class="bg-white rounded-lg shadow p-8 text-center border-2 border-[#00ff88]">
                        <div class="bg-[#e8f4f0] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-[#1e3a5f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.42A12.02 12.02 0 0122 8.944m-10 5.056l-6.16-3.42A12.02 12.02 0 002 8.944m10 5.056v6M6 12v5c3.33 3 8.67 3 12 0v-5" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 mb-2">Training &amp; Mentorship</h3>
                        <p class="text-gray-600 text-sm">A cohort-based Academy mentoring the next generation of Nigerian tech talent. <span class="text-[#00994d] font-semibold">Coming soon.</span></p>
                        <a href="{{ route('academy') }}" class="inline-block mt-3 text-sm font-semibold text-[#1e3a5f] hover:underline">Learn more →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Proof Strip -->
    <section id="products" class="py-16 bg-white border-y border-gray-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
                <p class="text-gray-700 text-lg text-center md:text-left">
                    <span class="font-semibold text-gray-900">Proof, not just a pitch</span> — we run our own
                    products in production.
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="{{ route('products.school') }}" class="inline-flex items-center gap-2 bg-gray-50 hover:bg-gray-100 border border-gray-200 px-5 py-2.5 rounded-lg font-medium text-gray-800 transition-colors">
                        School Management System
                        <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                    </a>
                    <a href="{{ route('products.espass') }}" class="inline-flex items-center gap-2 bg-gray-50 hover:bg-gray-100 border border-gray-200 px-5 py-2.5 rounded-lg font-medium text-gray-800 transition-colors">
                        ESPass Ticketing
                        <span class="w-2 h-2 rounded-full bg-[#00ff88]"></span>
                    </a>
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

    <!-- Why Trust Us Section -->
    <section id="why-trust-us" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Businesses Trust Us With Their Systems</h2>
                    <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Not adjectives — specific commitments about how we actually work.
                    </p>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#1e3a5f] text-white flex items-center justify-center font-bold">1</div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">You Deal Directly With the People Building It</h3>
                            <p class="text-gray-600">No account manager relaying messages to an engineering team you never meet. You talk to the people actually writing your software.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#1e3a5f] text-white flex items-center justify-center font-bold">2</div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">You See Working Software Early</h3>
                            <p class="text-gray-600">Not months of documents and wireframes before anything is real. We build in stages you can see and test as we go.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#1e3a5f] text-white flex items-center justify-center font-bold">3</div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">We Run What We Build</h3>
                            <p class="text-gray-600">Our own products are live and in production — not case studies from someone else's brief.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#1e3a5f] text-white flex items-center justify-center font-bold">4</div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Support Doesn't End at Launch</h3>
                            <p class="text-gray-600">Training for your team, then an actual person to call when something's unclear — not a support ticket into the void.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-50">
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

    <!-- Academy Teaser -->
    <section class="py-20 bg-[#1e3a5f]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center text-white">
                <span class="inline-block bg-[#00ff88] text-[#1e3a5f] text-xs font-bold uppercase tracking-wide px-3 py-1 rounded-full mb-4">Coming Soon</span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">ExtremeSolutions Academy</h2>
                <p class="text-lg text-white/90 mb-6">
                    We're building a cohort-based mentorship program to train the next generation of Nigerian tech
                    talent on real software, not just tutorials. Not open yet — subscribe below to hear when it is.
                </p>
                <a href="{{ route('academy') }}" class="inline-block text-white font-semibold hover:underline">
                    Learn more about the Academy →
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Stay Ahead of the Curve</h2>
                <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 mb-8">
                    Occasional emails on new things we're building, practical automation ideas, and updates from
                    the Academy. No spam.
                </p>
                @include('components.newsletter-form', ['theme' => 'light'])
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
                    <div class="flex items-center justify-center gap-2 text-gray-700 text-lg font-medium">
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
                                value="{{ $errors->any() ? old('email') : '' }}"
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

