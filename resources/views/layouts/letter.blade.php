<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth bg-slate-900">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $seoTitle = trim($__env->yieldContent('title', 'ExtremeSolutions | Executive Strategic Memorandum'));
        $seoDescription = trim($__env->yieldContent('description', 'ExtremeSolutions is a software engineering company building modern digital infrastructure, custom enterprise platforms, and applied AI systems for institutions and businesses. We engineer end-to-end software, spanning high-concurrency commercial platforms, operational systems, and intelligent digital workflows designed to replace fragile manual processes with fast, resilient technology.'));
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

    <!-- High-Res Image Export Engines (html-to-image + html2canvas fallback) -->
    <script src="https://cdn.jsdelivr.net/npm/html-to-image@1.11.11/dist/html-to-image.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>

    <!-- Vite Styles & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Printable Letter Styling */
        @media print {
            @page {
                size: A4 portrait;
                margin: 15mm 15mm 15mm 15mm;
            }
            html, body {
                background: #ffffff !important;
                color: #000000 !important;
                width: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
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
                width: 100% !important;
            }
        }
    </style>
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased min-h-screen flex flex-col selection:bg-[#00ff88]/20 selection:text-[#00ff88]">

    <!-- Executive Document Top Masthead (Official, Clean, No Consumer Sales Menus) -->
    <header class="no-print border-b border-white/10 bg-[#071324] text-white sticky top-0 z-40 backdrop-blur-md bg-opacity-95">
        <div class="max-w-5xl mx-auto px-3 sm:px-6 py-2.5 sm:py-3 flex items-center justify-between gap-2.5 sm:gap-4">
            <div class="flex items-center space-x-2 sm:space-x-2.5 min-w-0">
                <a href="{{ route('home') }}" class="flex items-center space-x-2 sm:space-x-2.5 group shrink-0" title="Return to ExtremeSolutions Portal">
                    <img src="{{ asset('images/es-mark.png') }}" alt="ExtremeSolutions Mark" class="h-6 sm:h-7 w-auto transition-transform group-hover:scale-105">
                    <div class="leading-none">
                        <div class="text-[11px] sm:text-xs font-bold tracking-wider text-white font-mono uppercase">EXTREMESOLUTIONS</div>
                        <div class="text-[9px] sm:text-[10px] text-slate-400 font-mono tracking-wider truncate hidden md:block">ENTERPRISE SYSTEMS ARCHITECTURE</div>
                    </div>
                </a>
            </div>

            <div class="flex items-center gap-2 sm:gap-3 text-[10.5px] sm:text-xs font-mono shrink-0">
                <a href="https://extremesolutions.com.ng" target="_blank" class="hover:text-emerald-400 text-slate-300 transition-colors inline-flex items-center gap-0.5">
                    <span class="hidden sm:inline">extremesolutions.com.ng</span>
                    <span class="sm:hidden">extremesolutions</span>
                    <span class="text-slate-500">&nearr;</span>
                </a>
                <span class="text-slate-600">&bull;</span>
                <a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-emerald-400 hover:text-emerald-300 transition-colors font-semibold inline-flex items-center gap-0.5">
                    <span class="hidden sm:inline">sms.extremesolutions.com.ng</span>
                    <span class="sm:hidden">sms.extremesolutions</span>
                    <span>&nearr;</span>
                </a>
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
                <div class="font-mono text-slate-200 font-bold uppercase tracking-wider text-[11px]">ExtremeSolutions &bull; Executive Office</div>
                <div class="text-slate-400 mt-0.5 text-[11px]">Samuel Ekunyan, Lead Developer &amp; Founder</div>
            </div>
            <div class="text-center sm:text-right font-mono text-[10px] text-slate-400">
                <span>Direct / WhatsApp: </span>
                <a href="https://wa.me/2348036375292" target="_blank" class="text-emerald-400 hover:underline font-semibold">+234 803 637 5292</a>
                <span class="mx-1.5 text-slate-600">|</span>
                <a href="mailto:samuel@ekunyansamuel.dev" class="text-slate-300 hover:underline">samuel@ekunyansamuel.dev</a>
            </div>
        </div>
    </footer>

    <!-- Universal High-Fidelity A4 Image Export Utility -->
    <script>
    (function() {
        window.exportLetterAsImage = function(targetElement, filename, buttonTextElement, defaultButtonText) {
            if (!targetElement) {
                if (buttonTextElement) buttonTextElement.textContent = defaultButtonText || 'Save as Image';
                return;
            }
            if (buttonTextElement) buttonTextElement.textContent = 'Generating...';

            const A4_WIDTH_PX = 794; // Strict standard A4 width at 96 DPI

            // 1. Create an off-screen sandbox clone to decouple completely from live viewport dimensions
            const clone = targetElement.cloneNode(true);

            // 2. Strip interactive action controls (like 'Copy No' button, forms, no-print elements)
            clone.querySelectorAll('button, input, select, textarea, .no-print, [data-export-ignore]').forEach(function(el) {
                el.remove();
            });

            // 3. Strip element IDs to avoid duplicate DOM collision
            clone.removeAttribute('id');
            clone.querySelectorAll('[id]').forEach(function(el) {
                el.removeAttribute('id');
            });

            // 4. Enforce strict, pixel-perfect A4 geometry with balanced symmetrical 44px margins
            clone.style.width = A4_WIDTH_PX + 'px';
            clone.style.minWidth = A4_WIDTH_PX + 'px';
            clone.style.maxWidth = A4_WIDTH_PX + 'px';
            clone.style.boxSizing = 'border-box';
            clone.style.margin = '0px';
            clone.style.marginLeft = '0px';
            clone.style.marginRight = '0px';
            clone.style.marginTop = '0px';
            clone.style.marginBottom = '0px';
            clone.style.padding = '44px 44px';
            clone.style.backgroundColor = '#ffffff';
            clone.style.color = '#0f172a';
            clone.style.position = 'relative';
            clone.style.left = '0px';
            clone.style.top = '0px';
            clone.style.boxShadow = 'none';
            clone.style.border = 'none';
            clone.style.borderRadius = '0px';
            clone.style.transform = 'none';
            clone.style.display = 'block';

            // 5. Ensure header flex row retains full width and does not wrap or squeeze
            const headerRow = clone.querySelector('.flex.justify-between') || clone.querySelector('header');
            if (headerRow) {
                headerRow.style.display = 'flex';
                headerRow.style.flexDirection = 'row';
                headerRow.style.justifyContent = 'space-between';
                headerRow.style.alignItems = 'flex-start';
                headerRow.style.width = '100%';
                headerRow.style.boxSizing = 'border-box';
            }

            // 6. Append to isolated staging wrapper positioned at (0, 0) behind viewport
            const staging = document.createElement('div');
            staging.style.cssText = 'position: fixed; left: 0px; top: 0px; width: 794px; z-index: -99999; overflow: hidden; pointer-events: none; background: #ffffff;';
            staging.appendChild(clone);
            document.body.appendChild(staging);

            // 7. Measure exact natural height of the formatted document
            const exportHeight = Math.ceil(clone.scrollHeight || clone.offsetHeight || 1123);

            let isDone = false;
            const cleanup = function() {
                if (isDone) return;
                isDone = true;
                if (staging && staging.parentNode) {
                    staging.parentNode.removeChild(staging);
                }
                if (buttonTextElement) buttonTextElement.textContent = defaultButtonText || 'Save as Image';
            };

            const triggerDownload = function(dataUrl) {
                const link = document.createElement('a');
                link.download = filename;
                link.href = dataUrl;
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                cleanup();
            };

            // 8. Primary Engine: htmlToImage (native SVG foreignObject)
            if (window.htmlToImage && typeof window.htmlToImage.toPng === 'function') {
                window.htmlToImage.toPng(clone, {
                    width: A4_WIDTH_PX,
                    height: exportHeight,
                    pixelRatio: 2,
                    backgroundColor: '#ffffff',
                    cacheBust: false,
                    style: {
                        margin: '0px',
                        padding: '44px 44px',
                        transform: 'none',
                        left: '0px',
                        top: '0px'
                    }
                }).then(function(dataUrl) {
                    triggerDownload(dataUrl);
                }).catch(function(err) {
                    console.warn('htmlToImage notice, attempting html2canvas fallback:', err);
                    fallbackHtml2Canvas();
                });
            } else {
                fallbackHtml2Canvas();
            }

            function fallbackHtml2Canvas() {
                if (typeof window.html2canvas !== 'undefined') {
                    window.html2canvas(clone, {
                        width: A4_WIDTH_PX,
                        height: exportHeight,
                        scale: 2,
                        useCORS: true,
                        allowTaint: true,
                        backgroundColor: '#ffffff',
                        x: 0,
                        y: 0,
                        scrollX: 0,
                        scrollY: 0,
                        logging: false
                    }).then(function(canvas) {
                        triggerDownload(canvas.toDataURL('image/png'));
                    }).catch(function(err2) {
                        console.error('html2canvas error:', err2);
                        cleanup();
                        const pdfBtn = document.getElementById('btn-download-pdf') || document.getElementById('btn-admin-pdf');
                        if (pdfBtn && pdfBtn.href) {
                            window.open(pdfBtn.href, '_blank');
                        } else {
                            window.print();
                        }
                    });
                } else {
                    cleanup();
                    window.print();
                }
            }
        };
    })();
    </script>

    @stack('scripts')
</body>
</html>

