@extends('layouts.app')

@section('title', 'Contact Us - ExtremeSolutions')
@section('description', 'Talk to ExtremeSolutions about your project. Book a free consultation — no obligation. Call or WhatsApp 09052585622, or send a message.')

@section('content')
    <!-- Hero -->
    <section class="bg-gradient-to-br from-[#f0f7ff] to-[#e0f2e8] py-20 lg:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center reveal">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Start Your Project</h1>
                <p class="text-xl text-gray-700 leading-relaxed">
                    Tell us about the problem you're trying to solve. We'll get back to you to set up a free
                    consultation — no obligation.
                </p>
            </div>
        </div>
    </section>

    <!-- Form -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 text-gray-700 text-lg font-medium mb-10 reveal">
                    <a href="tel:09052585622" class="flex items-center gap-2 hover:text-[#1e3a5f] transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>09052585622</span>
                    </a>
                    <a href="https://wa.me/2349052585622" target="_blank" rel="noopener" class="flex items-center gap-2 hover:text-[#00994d] transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                            <path d="M12.001 2C6.478 2 2 6.477 2 12c0 1.86.505 3.686 1.462 5.283L2 22l4.833-1.428A9.958 9.958 0 0012.001 22C17.523 22 22 17.523 22 12S17.523 2 12.001 2zm0 18.062c-1.68 0-3.325-.451-4.762-1.305l-.341-.202-3.297.974.988-3.212-.222-.352A8.049 8.049 0 013.938 12c0-4.451 3.612-8.062 8.063-8.062S20.062 7.549 20.062 12 16.451 20.062 12 20.062z"/>
                        </svg>
                        <span>WhatsApp Us</span>
                    </a>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 max-w-2xl mx-auto reveal">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="bg-white rounded-lg shadow-lg p-8 max-w-2xl mx-auto reveal">
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
