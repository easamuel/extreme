<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $seoTitle = trim($__env->yieldContent('title', 'ExtremeSolutions - Custom Software, Systems & Automation'));
        $seoDescription = trim($__env->yieldContent('description', 'ExtremeSolutions designs and builds custom software, systems, and automation for businesses and institutions, and mentors the next generation of Nigerian tech talent through our Academy.'));

        // Built as a PHP array and JSON-encoded (rather than written as literal JSON in the
        // template) so the "@context"/"@type" keys are plain PHP string values, never scanned
        // by Blade's directive compiler.
        $organizationSchema = json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'ExtremeSolutions',
            'url' => url('/'),
            'description' => 'Digital solutions company building custom software, systems, and automation for businesses and institutions.',
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+234-905-258-5622',
                'contactType' => 'customer service',
                'areaServed' => 'NG',
            ],
        ]);
    @endphp

    {{-- $seoTitle/$seoDescription are already HTML-escaped by @section()'s inline form — {!! !!} avoids double-escaping "&" into "&amp;amp;" --}}
    <title>{!! $seoTitle !!}</title>
    <meta name="description" content="{!! $seoDescription !!}">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Twitter -->
    <meta property="og:site_name" content="ExtremeSolutions">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{!! $seoTitle !!}">
    <meta property="og:description" content="{!! $seoDescription !!}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{!! $seoTitle !!}">
    <meta name="twitter:description" content="{!! $seoDescription !!}">

    <!-- Favicon / Site Icons -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />

    <!-- Structured Data -->
    <script type="application/ld+json">{!! $organizationSchema !!}</script>

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 antialiased">
    <!-- Header Navigation -->
    @include('components.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Scripts -->
    @stack('scripts')
</body>
</html>

