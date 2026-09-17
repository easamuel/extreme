@extends('layouts.app')

@section('title', 'Contact ExtremeSolutions | Book a Discovery Consultation')
@section('description', 'Talk directly with senior software engineers about your school, ticketing, or custom software requirements. Free consultation &middot; zero obligation.')

@php
    $contactSchema = json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'ContactPage',
        'name' => 'Contact ExtremeSolutions',
        'url' => route('contact'),
        'description' => 'Book a free discovery consultation or request a live school system demo from ExtremeSolutions.',
        'mainEntity' => [
            '@type' => 'ProfessionalService',
            '@id' => url('/') . '#organization',
        ],
    ]);
@endphp

@section('structured-data')
<script type="application/ld+json">{!! $contactSchema !!}</script>
@endsection

@section('content')
    <!-- Hero Surface -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white pt-16 pb-20 md:pt-24 md:pb-28">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="brand-glow top-0 right-1/4 w-[500px] h-[300px] bg-[#00ff88]/10"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="mx-auto max-w-4xl text-3xl sm:text-5xl lg:text-[56px] tracking-tight leading-[1.15] reveal">
                <span class="font-light text-white/90">Talk to the Engineers</span><br/>
                <span class="font-bold text-white">Who Will Build Your System</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm sm:text-base leading-relaxed text-white/75 reveal">
                Tell us about your organization and what you are looking to solve. We schedule a free discovery session, zero sales pressure, practical technical solutions.
            </p>
        </div>
    </section>

    <!-- Contact Options & Form -->
    <section class="bg-white py-20 md:py-28">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <!-- Direct Quick-Contact Pill Card -->
            <div class="max-w-md mx-auto mb-12 reveal">
                <a href="https://wa.me/2349052585622?text=Hello%20ExtremeSolutions,%20I%20would%20like%20to%20discuss%20a%20project." target="_blank" rel="noopener noreferrer" class="flex items-center gap-4 p-5 rounded-2xl bg-[#f8fafc] border border-gray-200/80 hover:border-[#00cc6a] transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-[#0c1f3a] text-[#00ff88] flex items-center justify-center flex-shrink-0 group-hover:bg-[#162f55] transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M12.001 2C6.478 2 2 6.477 2 12c0 1.86.505 3.686 1.462 5.283L2 22l4.833-1.428A9.958 9.958 0 0012.001 22C17.523 22 22 17.523 22 12S17.523 2 12.001 2zm0 18.062c-1.68 0-3.325-.451-4.762-1.305l-.341-.202-3.297.974.988-3.212-.222-.352A8.049 8.049 0 013.938 12c0-4.451 3.612-8.062 8.063-8.062S20.062 7.549 20.062 12 16.451 20.062 12 20.062z"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xs uppercase tracking-wider text-gray-500 font-semibold">Direct WhatsApp Chat</span>
                        <p class="text-base font-bold text-[#0c1f3a]">Chat With Our Lead Engineer</p>
                    </div>
                </a>
            </div>

            <!-- Main Form Card -->
            <div class="rounded-3xl bg-[#f8fafc] border border-gray-200/90 p-8 sm:p-12 shadow-sm reveal">
                @if(session('success'))
                    <div class="mb-8 rounded-2xl bg-green-50 border border-green-200 p-5 text-sm font-medium text-green-800">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
                    @csrf

                    <div class="grid sm:grid-cols-2 gap-6">
                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-xs font-bold uppercase tracking-wider text-[#0c1f3a] mb-2">
                                Your Full Name <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm text-gray-900 focus:border-[#0c1f3a] focus:ring-1 focus:ring-[#0c1f3a] bg-white @error('name') border-red-500 @enderror"
                                placeholder="e.g. Dr. Adamu Johnson"
                            >
                            @error('name')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-[#0c1f3a] mb-2">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm text-gray-900 focus:border-[#0c1f3a] focus:ring-1 focus:ring-[#0c1f3a] bg-white @error('email') border-red-500 @enderror"
                                placeholder="you@@organization.com"
                            >
                            @error('email')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6">
                        <!-- Subject Field -->
                        <div>
                            <label for="subject" class="block text-xs font-bold uppercase tracking-wider text-[#0c1f3a] mb-2">
                                Project Type / Subject <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                value="{{ old('subject', request('subject', 'Consultation Request')) }}"
                                required
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm text-gray-900 focus:border-[#0c1f3a] focus:ring-1 focus:ring-[#0c1f3a] bg-white @error('subject') border-red-500 @enderror"
                                placeholder="e.g. School Demo Request, Custom Software Scope"
                            >
                            @error('subject')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Phone Field -->
                        <div>
                            <label for="phone" class="block text-xs font-bold uppercase tracking-wider text-[#0c1f3a] mb-2">
                                Phone Number (Optional)
                            </label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm text-gray-900 focus:border-[#0c1f3a] focus:ring-1 focus:ring-[#0c1f3a] bg-white"
                                placeholder="e.g. 09052585622"
                            >
                        </div>
                    </div>

                    <!-- Message Field -->
                    <div>
                        <label for="message" class="block text-xs font-bold uppercase tracking-wider text-[#0c1f3a] mb-2">
                            Project Details / Operational Challenge <span class="text-red-500">*</span>
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            required
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm text-gray-900 focus:border-[#0c1f3a] focus:ring-1 focus:ring-[#0c1f3a] bg-white @error('message') border-red-500 @enderror"
                            placeholder="Tell us what you are trying to build or improve, your current pain points, and any target deadlines..."
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pt-4 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <button
                            type="submit"
                            class="w-full sm:w-auto rounded-full bg-[#0c1f3a] px-9 py-3.5 text-sm font-bold text-white hover:bg-[#162f55] transition-all shadow-md hover:shadow-lg"
                        >
                            Send Consultation Request
                        </button>
                        <span class="text-xs text-gray-500">We usually respond within 1 business hour.</span>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
