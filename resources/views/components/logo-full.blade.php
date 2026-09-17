@props(['theme' => 'dark'])

@php
    $isDark = $theme === 'dark';
    $strokeE = $isDark ? '#ffffff' : '#1e3a5f';
    $strokeS = '#00ff88';
    $textPrimary = $isDark ? 'text-white' : 'text-[#1e3a5f]';
    $textAccent = 'text-[#00ff88]';
@endphp

<div class="flex items-center space-x-2.5 sm:space-x-3">
    {{-- ES Monogram --}}
    <div class="flex-shrink-0">
        <svg class="w-8 h-8 sm:w-9 sm:h-9" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            {{-- E --}}
            <path d="M10 10 L10 90 M10 10 L70 10 M10 50 L60 50 M10 90 L70 90" 
                  stroke="{{ $strokeE }}" 
                  stroke-width="7" 
                  stroke-linecap="round" 
                  stroke-linejoin="round"/>
            {{-- S in Bright Green --}}
            <path d="M30 15 Q50 10 65 20 Q75 25 75 35 Q75 40 70 45 Q65 50 55 50 Q45 50 40 55 Q35 60 35 65 Q35 75 50 80 Q65 85 85 80" 
                  stroke="{{ $strokeS }}" 
                  stroke-width="7" 
                  stroke-linecap="round" 
                  fill="none"/>
            <path d="M85 80 Q90 85 90 90" 
                  stroke="{{ $strokeS }}" 
                  stroke-width="7" 
                  stroke-linecap="round"/>
        </svg>
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
