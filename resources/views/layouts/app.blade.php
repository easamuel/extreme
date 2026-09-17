<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $seoTitle = trim($__env->yieldContent('title', 'ExtremeSolutions | Custom Software, School Systems & Digital Automation'));
        $seoDescription = trim($__env->yieldContent('description', 'ExtremeSolutions designs and builds high-performance custom software, school management systems, event ticketing platforms, and digital automation for institutions and businesses across Nigeria and Africa.'));
        $canonicalUrl = url()->current();
        $ogImage = asset('favicon.svg');

        $professionalServiceSchema = json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'ProfessionalService',
            '@id' => url('/') . '#organization',
            'name' => 'ExtremeSolutions',
            'legalName' => 'ExtremeSolutions Nigeria',
            'url' => url('/'),
            'logo' => asset('favicon.svg'),
            'image' => asset('favicon.svg'),
            'description' => 'ExtremeSolutions designs and builds custom software, school management systems, ticketing solutions, and digital automation for businesses and institutions.',
            'telephone' => '+2349052585622',
            'email' => 'info@extremesolutions.com.ng',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Abuja',
                'addressCountry' => 'NG',
            ],
            'areaServed' => ['Nigeria', 'Africa', 'Worldwide'],
            'priceRange' => '$$',
            'knowsAbout' => [
                'Custom Software Development',
                'School Management Systems (SMS)',
                'ESPass Event Ticketing & Access Control',
                'Enterprise Workflow Automation',
                'Web & Mobile App Development',
                'AI & Cloud Systems',
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
    <link rel="canonical" href="{{ $canonicalUrl }}">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="theme-color" content="#0c1f3a">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="ExtremeSolutions">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:title" content="{!! $seoTitle !!}">
    <meta property="og:description" content="{!! $seoDescription !!}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:locale" content="en_NG">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ $canonicalUrl }}">
    <meta name="twitter:title" content="{!! $seoTitle !!}">
    <meta name="twitter:description" content="{!! $seoDescription !!}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    <!-- Favicon / Site Icons -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <!-- Fonts: Preconnect Bunny CDN for fast typography load -->
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Core JSON-LD Structured Data -->
    <script type="application/ld+json">{!! $professionalServiceSchema !!}</script>
    @yield('structured-data')

    <!-- Vite Styles & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 font-sans antialiased selection:bg-[#d4a373]/20 selection:text-[#0c1f3a]">
    <!-- Header Navigation -->
    @include('components.header')

    <!-- Main Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Page Specific Scripts -->
    @stack('scripts')
</body>
</html>
