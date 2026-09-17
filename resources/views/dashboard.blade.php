@extends('layouts.app')

@section('title', 'Dashboard - ExtremeSolutions')

@section('content')
    <section class="py-8 bg-gray-50 min-h-screen">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Welcome Header -->
            <div class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">
                    Welcome back, {{ Auth::user()->name }}!
                </h1>
                <p class="text-gray-600">Manage your account, view your works, and explore opportunities</p>
            </div>

            <!-- Current Subscription -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-bold text-gray-900">Current Subscription</h2>
                    @php
                        // Check if user has an active subscription
                        // For now, we'll check if there's a subscription field or relationship
                        // This can be expanded later with a proper subscription system
                        $hasSubscription = false; // Default to no subscription
                        // TODO: Implement subscription check logic here
                        // Example: $hasSubscription = Auth::user()->subscription && Auth::user()->subscription->isActive();
                    @endphp
                    @if($hasSubscription)
                        <span class="px-3 py-1 bg-[#00ff88] text-[#1e3a5f] rounded-full text-sm font-semibold">Active</span>
                    @else
                        <span class="px-3 py-1 bg-gray-300 text-gray-700 rounded-full text-sm font-semibold">Inactive</span>
                    @endif
                </div>
                
                @if($hasSubscription)
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="border-l-4 border-[#1e3a5f] pl-4">
                            <p class="text-sm text-gray-600 mb-1">Plan</p>
                            <p class="text-xl font-semibold text-gray-900">Professional</p>
                        </div>
                        <div class="border-l-4 border-[#00ff88] pl-4">
                            <p class="text-sm text-gray-600 mb-1">Renewal Date</p>
                            <p class="text-xl font-semibold text-gray-900">{{ now()->addMonth()->format('M d, Y') }}</p>
                        </div>
                        <div class="border-l-4 border-[#1e3a5f] pl-4">
                            <p class="text-sm text-gray-600 mb-1">Status</p>
                            <p class="text-xl font-semibold text-gray-900">Auto-Renew</p>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <a href="#" class="inline-block bg-[#1e3a5f] text-white px-6 py-2 rounded-lg hover:bg-[#152a47] transition-colors">
                            Manage Subscription
                        </a>
                    </div>
                @else
                    <div class="text-center py-8">
                        <div class="mb-4">
                            <svg class="w-16 h-16 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">No Active Subscription Yet</h3>
                        <p class="text-gray-600 mb-6">Subscribe to one of our plans to unlock all features and access our premium solutions.</p>
                        <a href="#" class="inline-block bg-[#1e3a5f] text-white px-6 py-2 rounded-lg hover:bg-[#152a47] transition-colors">
                            View Subscription Plans
                        </a>
                    </div>
                @endif
            </div>

            <!-- Our Works / Solutions -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Our Solutions</h2>
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- HR Management -->
                    <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                        <div class="flex items-start justify-between mb-4">
                            <div class="bg-gradient-to-r from-[#1e3a5f] to-[#2a4d7a] w-12 h-12 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <span class="px-3 py-1 bg-[#e8f4f0] text-[#1e3a5f] rounded-full text-xs font-semibold">Available</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">HR Management</h3>
                        <p class="text-gray-600 mb-4 text-sm">
                            Comprehensive HR platform for employee management, payroll, and attendance tracking.
                        </p>
                        <a href="{{ route('products.hr') }}" class="text-[#1e3a5f] hover:text-[#152a47] font-medium text-sm">
                            Learn More →
                        </a>
                    </div>

                    <!-- School/Education -->
                    <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                        <div class="flex items-start justify-between mb-4">
                            <div class="bg-gradient-to-r from-[#00ff88] to-[#00cc6a] w-12 h-12 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <span class="px-3 py-1 bg-[#e8f4f0] text-[#00ff88] rounded-full text-xs font-semibold">Available</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">School/Education</h3>
                        <p class="text-gray-600 mb-4 text-sm">
                            Complete education management system for schools and institutions.
                        </p>
                        <a href="{{ route('products.school') }}" class="text-[#1e3a5f] hover:text-[#152a47] font-medium text-sm">
                            Learn More →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Offers -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Special Offers</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Offer 1 -->
                    <div class="bg-gradient-to-br from-[#1e3a5f] to-[#2a4d7a] rounded-lg p-6 text-white">
                        <div class="mb-4">
                            <span class="px-3 py-1 bg-white/20 rounded-full text-xs font-semibold">Limited Time</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Early Adopter Discount</h3>
                        <p class="text-white/90 text-sm mb-4">
                            Get 30% off on your first year subscription. Valid until {{ now()->addDays(30)->format('M d, Y') }}.
                        </p>
                        <a href="#" class="inline-block bg-white text-[#1e3a5f] px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors text-sm">
                            Claim Offer
                        </a>
                    </div>

                    <!-- Offer 2 -->
                    <div class="bg-gradient-to-br from-[#00ff88] to-[#00cc6a] rounded-lg p-6 text-white">
                        <div class="mb-4">
                            <span class="px-3 py-1 bg-white/20 rounded-full text-xs font-semibold">New Feature</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Free Trial Extension</h3>
                        <p class="text-white/90 text-sm mb-4">
                            Extend your trial period by 14 days. No credit card required.
                        </p>
                        <a href="#" class="inline-block bg-white text-[#00ff88] px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors text-sm">
                            Extend Trial
                        </a>
                    </div>

                    <!-- Offer 3 -->
                    <div class="bg-gradient-to-br from-[#1e3a5f] to-[#00ff88] rounded-lg p-6 text-white">
                        <div class="mb-4">
                            <span class="px-3 py-1 bg-white/20 rounded-full text-xs font-semibold">Referral</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Refer & Earn</h3>
                        <p class="text-white/90 text-sm mb-4">
                            Refer a friend and both get 1 month free. Share your referral code.
                        </p>
                        <a href="#" class="inline-block bg-white text-[#1e3a5f] px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors text-sm">
                            Get Code
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sponsors -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Our Sponsors & Partners</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <!-- Sponsor 1 -->
                    <div class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:border-[#1e3a5f] transition-colors">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-2">
                                <span class="text-2xl font-bold text-gray-400">A</span>
                            </div>
                            <p class="text-sm font-semibold text-gray-700">Acme Corp</p>
                        </div>
                    </div>

                    <!-- Sponsor 2 -->
                    <div class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:border-[#1e3a5f] transition-colors">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-2">
                                <span class="text-2xl font-bold text-gray-400">B</span>
                            </div>
                            <p class="text-sm font-semibold text-gray-700">Beta Inc</p>
                        </div>
                    </div>

                    <!-- Sponsor 3 -->
                    <div class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:border-[#1e3a5f] transition-colors">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-2">
                                <span class="text-2xl font-bold text-gray-400">C</span>
                            </div>
                            <p class="text-sm font-semibold text-gray-700">Gamma Ltd</p>
                        </div>
                    </div>

                    <!-- Sponsor 4 -->
                    <div class="flex items-center justify-center p-4 border border-gray-200 rounded-lg hover:border-[#1e3a5f] transition-colors">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-2">
                                <span class="text-2xl font-bold text-gray-400">D</span>
                            </div>
                            <p class="text-sm font-semibold text-gray-700">Delta Co</p>
                        </div>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <a href="#" class="text-[#1e3a5f] hover:text-[#152a47] font-medium">
                        Become a Sponsor →
                    </a>
                </div>
            </div>

            <!-- Account Info & Quick Actions -->
            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Account Information</h3>
                    <div class="space-y-3">
                        <div>
                            <p class="text-sm text-gray-600">Email Address</p>
                            <p class="text-gray-900 font-medium">{{ Auth::user()->email }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Member Since</p>
                            <p class="text-gray-900 font-medium">{{ Auth::user()->created_at->format('F d, Y') }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Account Status</p>
                            <p class="text-[#00ff88] font-medium">✓ Active</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Quick Actions</h3>
                    <div class="space-y-3">
                        <a href="{{ route('home') }}" class="block p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <span class="text-[#1e3a5f] font-medium">← Back to Home</span>
                        </a>
                        <a href="{{ route('home') }}#products" class="block p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <span class="text-[#1e3a5f] font-medium">View All Products</span>
                        </a>
                        <a href="{{ route('home') }}#contact" class="block p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                            <span class="text-[#1e3a5f] font-medium">Contact Support</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Logout -->
            <div class="text-center">
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button 
                        type="submit" 
                        class="bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700 transition-colors font-semibold"
                    >
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
