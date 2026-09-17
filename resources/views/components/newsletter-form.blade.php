@php($theme = $theme ?? 'light')

<form method="POST" action="{{ route('newsletter.subscribe') }}" class="w-full">
    @csrf

    @if(session('newsletter_success'))
        <p class="text-sm font-medium mb-3 {{ $theme === 'dark' ? 'text-[#00ff88]' : 'text-[#00994d]' }}">
            You're subscribed — thanks for joining.
        </p>
    @endif

    @error('email', 'newsletter')
        <p class="text-sm font-medium mb-3 text-red-400">{{ $message }}</p>
    @enderror

    <div class="flex flex-col sm:flex-row gap-3">
        <input
            type="email"
            name="email"
            required
            placeholder="you@company.com"
            value="{{ $errors->newsletter->any() ? old('email') : '' }}"
            class="flex-1 px-4 py-2.5 rounded-lg border focus:outline-none focus:ring-2 focus:ring-[#00ff88]
                {{ $theme === 'dark'
                    ? 'bg-white/10 border-white/20 text-white placeholder-white/50'
                    : 'bg-white border-gray-300 text-gray-900 placeholder-gray-400' }}"
        >
        <button
            type="submit"
            class="px-6 py-2.5 rounded-lg font-semibold whitespace-nowrap transition-colors
                {{ $theme === 'dark'
                    ? 'bg-[#00ff88] text-[#1e3a5f] hover:bg-[#00cc6a]'
                    : 'bg-[#1e3a5f] text-white hover:bg-[#152a47]' }}"
        >
            Subscribe
        </button>
    </div>
</form>
