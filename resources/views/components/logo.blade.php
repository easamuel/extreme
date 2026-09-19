@props(['theme' => 'dark', 'class' => 'h-10 w-auto'])

@php
    $isDark = $theme === 'dark';
    $markSrc = $isDark ? asset('images/es-mark-white.png') : asset('images/es-mark.png');
@endphp

<img src="{{ $markSrc }}" 
     alt="ExtremeSolutions ES Mark" 
     loading="eager"
     onerror="if(!this.dataset.tried){ this.dataset.tried=1; this.src='{{ $isDark ? asset('es-mark-white.png') : asset('es-mark.png') }}'; }"
     class="{{ $class }} object-contain" />

