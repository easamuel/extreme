@extends('layouts.app')

@section('title', $title ?? 'School/Education Management System - ExtremeSolutions')
@section('description', $description ?? 'Complete education management system for schools and institutions.')

@section('content')
    <section class="bg-gradient-to-r from-[#00ff88] to-[#00cc6a] py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">School/Education Management System</h1>
                <p class="text-xl text-white/90">
                    Complete education management solution for schools and institutions
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
                        Our School/Education Management System provides a comprehensive platform for managing all aspects 
                        of educational institutions. From student enrollment to grade management, our solution helps schools 
                        operate more efficiently.
                    </p>

                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Key Features</h3>
                    <ul class="space-y-3 text-gray-700 mb-8">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-[#00ff88] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span><strong>Student Management:</strong> Complete student profiles, enrollment, and academic records</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-[#00ff88] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span><strong>Course Management:</strong> Create and manage courses, subjects, and curriculum</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-[#00ff88] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span><strong>Grade Management:</strong> Record and track student grades and assessments</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-[#00ff88] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span><strong>Parent Portal:</strong> Keep parents informed with real-time updates and communication</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-[#00ff88] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span><strong>Teacher Dashboard:</strong> Tools for teachers to manage classes and assignments</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-[#00ff88] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span><strong>Attendance Tracking:</strong> Monitor student attendance and generate reports</span>
                        </li>
                    </ul>

                    <div class="bg-[#e8f4f0] border-l-4 border-[#00ff88] p-6 my-8">
                        <p class="text-gray-700">
                            <strong>Note:</strong> This is a placeholder page. The full School/Education Management solution will be available 
                            at <code class="bg-white px-2 py-1 rounded">school.extremesolutions.com</code> in the future.
                        </p>
                    </div>

                    <div class="mt-8">
                        <a href="{{ route('home') }}#contact" class="inline-block bg-[#00ff88] text-[#1e3a5f] px-8 py-3 rounded-lg font-semibold hover:bg-[#00cc6a] transition-colors">
                            Contact Us for More Information
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

