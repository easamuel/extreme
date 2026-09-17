@php($theme = $theme ?? 'light')

<form method="POST" action="{{ route('newsletter.subscribe') }}" class="w-full">
    @csrf

    @if(session('newsletter_success'))
        <p class="text-sm font-medium mb-3 {{ $theme === 'dark' ? 'text-[#00ff88]' : 'text-green-600' }}">
            You're subscribed — we will notify you when applications open.
        </p>
    @endif

    @error('email', 'newsletter')
        <p class="text-sm font-medium mb-3 text-red-500">{{ $message }}</p>
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
                    ? 'bg-[#d4a373] text-[#0c1f3a] hover:bg-[#c5935f]'
                    : 'bg-[#0c1f3a] text-white hover:bg-[#162f55]' }}"
        >
            Join Waitlist
        </button>
    </div>
</form>
