@props(['theme' => 'dark'])

@php
    $isDark = $theme === 'dark';
    $markSrc = $isDark ? asset('images/es-mark-white.png') : asset('images/es-mark.png');
    $textPrimary = $isDark ? 'text-white' : 'text-[#1e3a5f]';
    $textAccent = 'text-[#00ff88]';
@endphp

<div class="flex items-center space-x-2.5 sm:space-x-3">
    {{-- ES Monogram from User Graphic --}}
    <div class="flex-shrink-0">
        <img src="{{ $markSrc }}" 
             alt="ExtremeSolutions ES Mark" 
             loading="eager"
             onerror="if(!this.dataset.tried){ this.dataset.tried=1; this.src='{{ $isDark ? asset('es-mark-white.png') : asset('es-mark.png') }}'; }"
             class="h-7 sm:h-8 w-auto object-contain transition-opacity hover:opacity-95" />
    </div>
    {{-- Brand Name --}}
    <div class="flex flex-col">
        <span class="text-sm sm:text-base font-bold tracking-tight leading-none {{ $textPrimary }}">
            EXTREME<span class="font-extrabold {{ $textAccent }} ml-1">SOLUTIONS</span>
        </span>
        <span class="text-[9px] uppercase tracking-[0.25em] {{ $isDark ? 'text-white/60' : 'text-[#1e3a5f]/60' }} mt-0.5">
            Systems &amp; Software
        </span>
    </div>
</div>
