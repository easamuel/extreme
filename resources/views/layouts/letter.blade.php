<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth bg-slate-900">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $seoTitle = trim($__env->yieldContent('title', 'I have a message for you from ExtremeSolutions'));
        $seoDescription = trim($__env->yieldContent('description', 'An urgent executive briefing from Samuel Ekunyan, Principal Systems Architect at ExtremeSolutions.'));
        $canonicalUrl = url()->current();
        $ogImageUrl = 'https://extremesolutions.com.ng/images/og-image.png';
    @endphp

    <title>{!! $seoTitle !!}</title>
    <meta name="description" content="{!! $seoDescription !!}">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#0a192f">

    <!-- Open Graph / WhatsApp / Facebook / LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="ExtremeSolutions">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:title" content="{!! $seoTitle !!}">
    <meta property="og:description" content="{!! $seoDescription !!}">
    <meta property="og:image" content="{{ $ogImageUrl }}">
    <meta property="og:image:secure_url" content="{{ $ogImageUrl }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_US">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ $canonicalUrl }}">
    <meta name="twitter:title" content="{!! $seoTitle !!}">
    <meta name="twitter:description" content="{!! $seoDescription !!}">
    <meta name="twitter:image" content="{{ $ogImageUrl }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}?v=2" sizes="any">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}?v=2">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}?v=2">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700&display=swap" rel="stylesheet" />

    <!-- html2canvas for High-Res Image Export -->
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>

    <!-- Vite Styles & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Printable Letter Styling */
        @media print {
            body {
                background: #ffffff !important;
                color: #000000 !important;
            }
            .no-print {
                display: none !important;
            }
            .print-paper {
                box-shadow: none !important;
                border: none !important;
                margin: 0 !important;
                padding: 0 !important;
                max-width: 100% !important;
            }
        }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased min-h-screen flex flex-col selection:bg-[#00ff88]/20 selection:text-[#00ff88]">

    <!-- Executive Document Top Masthead (Official, Clean, No Consumer Sales Menus) -->
    <header class="no-print border-b border-white/10 bg-[#071324] text-white sticky top-0 z-40 backdrop-blur-md bg-opacity-95">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-3 flex items-center justify-between gap-4">
            <div class="flex items-center space-x-3">
                <a href="{{ route('home') }}" class="flex items-center space-x-2.5 group" title="Return to ExtremeSolutions Portal">
                    <img src="{{ asset('images/es-mark.png') }}" alt="ExtremeSolutions Mark" class="h-7 w-auto transition-transform group-hover:scale-105">
                    <div class="leading-none">
                        <div class="text-xs font-black tracking-wider text-white font-mono uppercase">EXTREMESOLUTIONS</div>
                        <div class="text-[10px] text-emerald-400 font-mono tracking-wider">OFFICIAL EXECUTIVE DISPATCH</div>
                    </div>
                </a>
            </div>

            <div class="flex items-center space-x-4 text-xs font-mono">
                <div class="hidden md:flex items-center space-x-2 text-slate-400">
                    <span class="inline-block w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>AUTHENTICATED MEMO</span>
                </div>
                <div class="flex items-center space-x-3 text-slate-300">
                    <a href="https://extremesolutions.com.ng" target="_blank" class="hover:text-emerald-400 transition-colors hidden sm:inline">
                        extremesolutions.com.ng &nearr;
                    </a>
                    <a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-400 hover:text-emerald-300 transition-colors font-semibold">
                        sms.extremesolutions.com.ng &nearr;
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Letter Content Area -->
    <main class="flex-grow py-6 sm:py-12 px-3 sm:px-6">
        @yield('content')
    </main>

    <!-- Executive Document Minimal Footer (No sales menus, pure institutional authority) -->
    <footer class="no-print border-t border-white/10 bg-[#071324] text-slate-400 py-8 text-xs font-sans">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="text-center sm:text-left">
                <div class="font-mono text-slate-200 font-bold uppercase tracking-wider text-[11px]">ExtremeSolutions &bull; Office of the Principal Systems Architect</div>
                <div class="text-slate-400 mt-0.5 text-[11px]">Lagos, Nigeria &bull; Building Digital Systems that last.</div>
            </div>
            <div class="text-center sm:text-right font-mono text-[10px] text-slate-400">
                <span>Direct Contact: </span>
                <a href="mailto:samuel@ekunyansamuel.dev" class="text-emerald-400 hover:underline">samuel@ekunyansamuel.dev</a>
                <span class="mx-1">&bull;</span>
                <a href="https://wa.me/2349052585622" target="_blank" class="text-emerald-400 hover:underline">+234 905 258 5622</a>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
