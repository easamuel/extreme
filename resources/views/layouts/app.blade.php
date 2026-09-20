<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $seoTitle = trim($__env->yieldContent('title', 'ExtremeSolutions | Custom Software, Apps & Automation'));
        $seoDescription = trim($__env->yieldContent('description', 'ExtremeSolutions engineers dependable custom software, mobile apps, and cloud automation for modern organizations worldwide.'));
        $canonicalUrl = url()->current();
        
        // Ensure absolute HTTPS production URLs for social scrapers (never localhost)
        $ogImageUrl = 'https://extremesolutions.com.ng/images/og-image.png';
        $logoUrl = 'https://extremesolutions.com.ng/images/es-logo-full.png';

        $professionalServiceSchema = json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'ProfessionalService',
            '@id' => url('/') . '#organization',
            'name' => 'ExtremeSolutions',
            'legalName' => 'ExtremeSolutions',
            'url' => url('/'),
            'logo' => $logoUrl,
            'image' => $ogImageUrl,
            'description' => 'ExtremeSolutions engineers dependable custom software, mobile apps, and cloud automation for modern organizations worldwide.',
            'telephone' => '+2349052585622',
            'email' => 'info@extremesolutions.com.ng',
            'areaServed' => 'Worldwide',
            'priceRange' => '$$',
            'knowsAbout' => [
                'Custom Software Development',
                'Mobile App Development (iOS & Android)',
                'Enterprise Workflow Automation & APIs',
                'School Management Systems (SMS)',
                'ESPass Event Ticketing & Gate Access',
                'Cloud Architecture & Microservices',
                'Tech Mentorship & Training'
            ],
            'sameAs' => [
                'https://wa.me/2349052585622',
                'https://linkedin.com',
                'https://x.com'
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    @endphp

    <title>{!! $seoTitle !!}</title>
    <meta name="description" content="{!! $seoDescription !!}">
    @hasSection('meta_robots')
        @yield('meta_robots')
    @else
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    @endif
    <meta name="theme-color" content="#0a192f">

    <!-- Open Graph / Facebook / WhatsApp / LinkedIn -->
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
    <meta property="og:image:alt" content="ExtremeSolutions - Custom Software, Mobile Apps & Cloud Automation">
    <meta property="og:locale" content="en_US">

    <!-- Twitter / X -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ $canonicalUrl }}">
    <meta name="twitter:title" content="{!! $seoTitle !!}">
    <meta name="twitter:description" content="{!! $seoDescription !!}">
    <meta name="twitter:image" content="{{ $ogImageUrl }}">
    <meta name="twitter:image:alt" content="ExtremeSolutions - Custom Software, Mobile Apps & Cloud Automation">

    <!-- Favicon / Site Icons (Multi-Resolution & Google Search Standard) -->
    <link rel="icon" href="{{ asset('favicon.ico') }}?v=2" sizes="any">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}?v=2">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('favicon-48x48.png') }}?v=2">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}?v=2">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}?v=2">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}?v=2">

    <!-- Fonts: Preconnect Bunny CDN for fast typography load -->
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Core JSON-LD Structured Data -->
    <script type="application/ld+json">{!! $professionalServiceSchema !!}</script>
    @yield('structured-data')

    <!-- Vite Styles & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 font-sans antialiased overflow-x-hidden w-full max-w-full selection:bg-[#00ff88]/20 selection:text-[#1e3a5f]">
    <!-- Header Navigation -->
    @include('components.header')

    <!-- Main Content -->
    <main id="main-content" class="overflow-x-hidden w-full max-w-full">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Page Specific Scripts -->
    @stack('scripts')
</body>
</html>
