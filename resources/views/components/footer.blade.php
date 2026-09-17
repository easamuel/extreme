<footer class="bg-gray-900 text-gray-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="col-span-1 md:col-span-2">
                <div class="mb-4">
                    <div class="flex items-center space-x-3">
                        {{-- ES Monogram --}}
                        <div class="flex-shrink-0">
                            <svg class="w-10 h-10 md:w-12 md:h-12" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                {{-- E in Dark Blue --}}
                                <path d="M10 10 L10 90 M10 10 L70 10 M10 50 L60 50 M10 90 L70 90" 
                                      stroke="#1e3a5f" 
                                      stroke-width="6" 
                                      stroke-linecap="round" 
                                      stroke-linejoin="round"/>
                                {{-- S in Bright Green --}}
                                <path d="M30 15 Q50 10 65 20 Q75 25 75 35 Q75 40 70 45 Q65 50 55 50 Q45 50 40 55 Q35 60 35 65 Q35 75 50 80 Q65 85 85 80" 
                                      stroke="#00ff88" 
                                      stroke-width="6" 
                                      stroke-linecap="round" 
                                      fill="none"/>
                                <path d="M85 80 Q90 85 90 90" 
                                      stroke="#00ff88" 
                                      stroke-width="6" 
                                      stroke-linecap="round"/>
                            </svg>
                        </div>
                        {{-- Company Name --}}
                        <div class="flex flex-col">
                            <span class="text-base sm:text-lg md:text-xl font-bold text-white tracking-tight leading-tight">
                                EXTREME<br><span class="text-[#00ff88]">SOLUTIONS</span>
                            </span>
                        </div>
                    </div>
                </div>
                <p class="text-gray-400 mb-4 max-w-md">
                    We design and build custom software, systems, and automation for businesses and institutions —
                    and mentor the next generation of Nigerian tech talent through our Academy.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-[#00ff88] transition-colors" aria-label="Facebook">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#00ff88] transition-colors" aria-label="Twitter">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#00ff88] transition-colors" aria-label="LinkedIn">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-[#00ff88] transition-colors">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="hover:text-[#00ff88] transition-colors">About</a>
                    </li>
                    <li>
                        <a href="{{ route('academy') }}" class="hover:text-[#00ff88] transition-colors">Academy</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="hover:text-[#00ff88] transition-colors">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-white font-semibold mb-4">Contact Us</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="tel:09052585622" class="flex items-center gap-2 hover:text-[#00ff88] transition-colors">
                            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="text-sm">09052585622</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/2349052585622" target="_blank" rel="noopener" class="flex items-center gap-2 hover:text-[#00ff88] transition-colors">
                            <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                                <path d="M12.001 2C6.478 2 2 6.477 2 12c0 1.86.505 3.686 1.462 5.283L2 22l4.833-1.428A9.958 9.958 0 0012.001 22C17.523 22 22 17.523 22 12S17.523 2 12.001 2zm0 18.062c-1.68 0-3.325-.451-4.762-1.305l-.341-.202-3.297.974.988-3.212-.222-.352A8.049 8.049 0 013.938 12c0-4.451 3.612-8.062 8.063-8.062S20.062 7.549 20.062 12 16.451 20.062 12 20.062z"/>
                            </svg>
                            <span class="text-sm">WhatsApp Us</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-10 pt-10">
            <div class="max-w-xl mx-auto text-center">
                <h4 class="text-white font-semibold mb-2">Tech Insights, Occasionally</h4>
                <p class="text-gray-400 text-sm mb-5">
                    New builds, practical automation ideas, and updates from the Academy — no spam.
                </p>
                @include('components.newsletter-form', ['theme' => 'dark'])
            </div>
        </div>

        <div class="border-t border-gray-800 mt-10 pt-8 text-center text-sm text-gray-400">
            <p>&copy; {{ date('Y') }} ExtremeSolutions. All rights reserved.</p>
        </div>
    </div>
</footer>

