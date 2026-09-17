@extends('layouts.app')

@section('title', 'Register - ExtremeSolutions')

@section('content')
    <section class="py-20 bg-gray-50 min-h-screen flex items-center">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-md mx-auto">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Create Account</h2>

                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}" class="space-y-6">
                        @csrf

                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Full Name
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                value="{{ old('name') }}"
                                required
                                autofocus
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1e3a5f] focus:border-[#1e3a5f] @error('name') border-red-500 @enderror"
                                placeholder="John Doe"
                            >
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email Address
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

                        <!-- Password Field -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                                Password
                            </label>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1e3a5f] focus:border-[#1e3a5f] @error('password') border-red-500 @enderror"
                                placeholder="Enter a secure password"
                            >
                            @error('password')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password Confirmation Field -->
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                                Confirm Password
                            </label>
                            <input 
                                type="password" 
                                id="password_confirmation" 
                                name="password_confirmation" 
                                required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1e3a5f] focus:border-[#1e3a5f]"
                                placeholder="Confirm your password"
                            >
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button 
                                type="submit" 
                                class="w-full bg-[#1e3a5f] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#152a47] transition-colors focus:outline-none focus:ring-2 focus:ring-[#1e3a5f] focus:ring-offset-2"
                            >
                                Register
                            </button>
                        </div>
                    </form>

                    <div class="mt-6 text-center">
                        <p class="text-sm text-gray-600">
                            Already have an account? 
                            <a href="{{ route('login') }}" class="text-[#1e3a5f] hover:text-[#152a47] font-medium">
                                Login here
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

