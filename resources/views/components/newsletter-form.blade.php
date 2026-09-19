@php($theme = $theme ?? 'light')

@if(session('newsletter_success'))
    <div class="rounded-2xl {{ $theme === 'dark' ? 'bg-[#00ff88]/10 border-[#00ff88]/30 text-white' : 'bg-emerald-50/90 border border-emerald-200 text-gray-900' }} p-6 text-center shadow-md animate-in fade-in duration-300">
        <div class="w-12 h-12 {{ $theme === 'dark' ? 'bg-[#00ff88] text-[#0a192f]' : 'bg-[#1e3a5f] text-[#00ff88]' }} rounded-full flex items-center justify-center mx-auto mb-3 shadow">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
            </svg>
        </div>
        <h4 class="text-lg font-bold {{ $theme === 'dark' ? 'text-white' : 'text-[#1e3a5f]' }}">You're on the Priority Waitlist!</h4>
        <p class="text-xs sm:text-sm {{ $theme === 'dark' ? 'text-white/80' : 'text-gray-600' }} mt-1.5 leading-relaxed">
            Your spot has been reserved. You will receive an email confirmation shortly along with early access details before public enrollment.
        </p>
        @if(session('subscribed_email'))
            <div class="mt-3.5 inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold {{ $theme === 'dark' ? 'bg-white/10 text-[#00ff88]' : 'bg-emerald-100 text-emerald-900' }}">
                <span class="w-2 h-2 rounded-full bg-[#00ff88] animate-ping"></span>
                <span>Confirmed for: {{ session('subscribed_email') }}</span>
            </div>
        @endif
        <div class="mt-4 pt-3 border-t {{ $theme === 'dark' ? 'border-white/10' : 'border-emerald-200/60' }}">
            <a href="{{ url()->current() }}" class="text-xs font-semibold {{ $theme === 'dark' ? 'text-white/70 hover:text-white' : 'text-gray-500 hover:text-gray-800' }} transition-colors inline-flex items-center gap-1">
                <span>Join with another email</span> &rarr;
            </a>
        </div>
    </div>
@else
    <form method="POST" action="{{ route('newsletter.subscribe') }}" class="w-full">
        @csrf

        @error('email', 'newsletter')
            <p class="text-xs font-semibold mb-2 text-rose-500 text-left">{{ $message }}</p>
        @enderror

        <div class="flex flex-col sm:flex-row gap-3">
            <input
                type="email"
                name="email"
                required
                placeholder="Enter your email address"
                value="{{ $errors->newsletter->any() ? old('email') : '' }}"
                class="flex-1 px-5 py-3 rounded-full border text-sm focus:outline-none focus:ring-2 focus:ring-[#0c1f3a] transition-all
                    {{ $theme === 'dark'
                        ? 'bg-white/10 border-white/20 text-white placeholder-white/50'
                        : 'bg-white border-gray-300 text-gray-900 placeholder-gray-400 shadow-sm' }}"
            >
            <button
                type="submit"
                class="px-7 py-3 rounded-full text-xs uppercase font-bold tracking-wider whitespace-nowrap transition-all shadow-md hover:-translate-y-0.5
                    {{ $theme === 'dark'
                        ? 'bg-[#00ff88] text-[#0a192f] hover:bg-[#00e67a]'
                        : 'bg-[#1e3a5f] text-white hover:bg-[#2a4d7d]' }}"
            >
                Join Waitlist
            </button>
        </div>
    </form>
@endif
