@extends('layouts.app')

@section('title', $title ?? 'HR Management Solution - ExtremeSolutions')
@section('description', $description ?? 'Comprehensive HR management platform for businesses.')

@section('content')
    <section class="bg-gradient-to-r from-[#1e3a5f] to-[#2a4d7a] py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">HR Management Solution</h1>
                <p class="text-xl text-white/90">
                    Streamline your human resources operations with our comprehensive platform
                </p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="prose prose-lg max-w-none">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Overview</h2>
                    <p class="text-lg text-gray-700 mb-6">
                        Our HR Management solution is designed to help businesses of all sizes manage their workforce 
                        efficiently. From employee onboarding to payroll processing, our platform provides all the tools 
                        you need to streamline HR operations.
                    </p>

                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Key Features</h3>
                    <ul class="space-y-3 text-gray-700 mb-8">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-[#00ff88] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span><strong>Employee Management:</strong> Complete employee database with profiles, documents, and history</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-[#00ff88] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span><strong>Payroll Processing:</strong> Automated payroll calculations and processing</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-[#00ff88] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span><strong>Attendance Tracking:</strong> Real-time attendance monitoring and reporting</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-[#00ff88] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span><strong>Leave Management:</strong> Request and approve leave requests seamlessly</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-[#00ff88] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span><strong>Performance Reviews:</strong> Track and manage employee performance evaluations</span>
                        </li>
                    </ul>

                    <div class="bg-[#e8f4f0] border-l-4 border-[#1e3a5f] p-6 my-8">
                        <p class="text-gray-700">
                            <strong>Note:</strong> This is a placeholder page. The full HR Management solution will be available 
                            at <code class="bg-white px-2 py-1 rounded">hr.extremesolutions.com</code> in the future.
                        </p>
                    </div>

                    <div class="mt-8">
                        <a href="{{ route('contact') }}" class="inline-block bg-[#1e3a5f] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#152a47] transition-colors">
                            Contact Us for More Information
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

