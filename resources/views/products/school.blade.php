@extends('layouts.app')

@section('title', $title ?? 'School Management System - ExtremeSolutions')
@section('description', $description ?? 'Run your whole school from one dashboard — fees, attendance, results, and parent communication, live at sms.extremesolutions.com.ng.')

@section('content')
    <!-- Hero -->
    <section class="bg-gradient-to-r from-[#00ff88] to-[#00cc6a] py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center text-white reveal">
                <span class="inline-block bg-white/90 text-[#1e3a5f] text-xs font-bold uppercase tracking-wide px-3 py-1 rounded-full mb-4">Live Now</span>
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Run Your Whole School From One Dashboard</h1>
                <p class="text-xl text-white/90 mb-8">
                    Fees, attendance, results, and parent communication — replacing registers, spreadsheets, and
                    disconnected tools with a single system your staff actually use.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact', ['subject' => 'School Demo Request']) }}" class="bg-white text-[#1e3a5f] px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors shadow-lg">
                        Book a Free Demo
                    </a>
                    <a href="https://sms.extremesolutions.com.ng" target="_blank" rel="noopener" class="bg-[#1e3a5f] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#152a47] transition-colors">
                        See the Live System →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Before / After -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto reveal">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What a Term Looks Like</h2>
                    <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                </div>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-8">
                        <h3 class="font-semibold text-gray-500 uppercase text-sm tracking-wide mb-4">Without a System</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-gray-400 mr-2">—</span>
                                <span>Fees tracked across registers and spreadsheets, reconciled by hand</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-gray-400 mr-2">—</span>
                                <span>Results computed manually, term after term, with room for error</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-gray-400 mr-2">—</span>
                                <span>Parents calling the office for information the school already has</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-gray-400 mr-2">—</span>
                                <span>Admin staff overwhelmed at the start and end of every term</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-[#e8f4f0] border-2 border-[#00ff88] rounded-lg p-8">
                        <h3 class="font-semibold text-[#1e3a5f] uppercase text-sm tracking-wide mb-4">With ExtremeSolutions SMS</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#00ff88] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Fees tracked and reconciled automatically, one dashboard</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#00ff88] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Results computed and published without manual collation</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#00ff88] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Parents informed automatically through their own portal</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#00ff88] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Staff time freed up for teaching, not data entry</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto reveal">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Everything in One Platform</h2>
                    <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                        <h3 class="font-semibold text-gray-900 mb-2">Student Management</h3>
                        <p class="text-gray-600 text-sm">Complete student profiles, enrollment, and academic records.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                        <h3 class="font-semibold text-gray-900 mb-2">Fees &amp; Payments</h3>
                        <p class="text-gray-600 text-sm">Track and reconcile fee payments per student, per term.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                        <h3 class="font-semibold text-gray-900 mb-2">Results &amp; Grades</h3>
                        <p class="text-gray-600 text-sm">Record, compute, and publish results without manual collation.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                        <h3 class="font-semibold text-gray-900 mb-2">Attendance Tracking</h3>
                        <p class="text-gray-600 text-sm">Monitor student attendance and generate reports automatically.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                        <h3 class="font-semibold text-gray-900 mb-2">Parent Portal</h3>
                        <p class="text-gray-600 text-sm">Real-time updates for parents — no more calling the office.</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                        <h3 class="font-semibold text-gray-900 mb-2">Teacher Dashboard</h3>
                        <p class="text-gray-600 text-sm">Tools for teachers to manage classes and assignments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing & Trust -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center reveal">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Simple, Fair Pricing</h2>
                <div class="w-24 h-1 bg-[#1e3a5f] mx-auto mb-6"></div>
                <p class="text-lg text-gray-700 mb-4">
                    You pay <strong>per student, per term</strong> — it grows with your school and never
                    overcommits you to a large upfront cost. No hidden fees, no long-term contract to get started.
                </p>
                <div class="bg-[#e8f4f0] border-l-4 border-[#00ff88] p-6 my-8 text-left">
                    <p class="text-gray-700">
                        <strong>Built and run by our own team.</strong> ExtremeSolutions built the School Management
                        System and uses it to run its own operations before ever offering it to a school. See it
                        live, no sales pitch required — <a href="https://sms.extremesolutions.com.ng" target="_blank" rel="noopener" class="text-[#1e3a5f] font-semibold underline">sms.extremesolutions.com.ng</a>.
                    </p>
                </div>
                <a href="{{ route('contact', ['subject' => 'School Demo Request']) }}" class="inline-block bg-[#00ff88] text-[#1e3a5f] px-8 py-3 rounded-lg font-semibold hover:bg-[#00cc6a] transition-colors">
                    Book a Free Demo for Your School
                </a>
            </div>
        </div>
    </section>
@endsection
