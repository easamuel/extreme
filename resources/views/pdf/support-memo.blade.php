<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ExtremeSolutions Institutional Engineering &amp; Support Memorandum</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 16mm 14mm 16mm 14mm;
        }

        * {
            box-sizing: border-box;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #18181b;
            font-size: 8.5pt;
            line-height: 1.45;
            margin: 0;
            padding: 0;
            background: #ffffff;
        }

        table.header-table {
            width: 100%;
            border-collapse: collapse;
            border-bottom: 2pt solid #0c1f3a;
            padding-bottom: 8pt;
            margin-bottom: 12pt;
        }

        table.header-table td {
            vertical-align: middle;
        }

        .logo-img {
            height: 34pt;
            width: auto;
        }

        .motto-verse {
            font-size: 7.5pt;
            font-weight: bold;
            color: #059669;
            text-transform: uppercase;
            letter-spacing: 0.5pt;
            margin-top: 3pt;
        }

        .header-meta {
            text-align: right;
            font-size: 7.5pt;
            color: #52525b;
            line-height: 1.35;
            font-family: monospace;
        }

        .badge {
            display: inline-block;
            background: #f4f4f5;
            color: #0c1f3a;
            border: 0.5pt solid #d4d4d8;
            font-weight: bold;
            padding: 2pt 5pt;
            font-size: 7pt;
            border-radius: 2pt;
            margin-bottom: 2pt;
        }

        .recipient-card {
            background: #fafafa;
            border: 0.75pt solid #e4e4e7;
            border-left: 2.5pt solid #0c1f3a;
            padding: 6pt 8pt;
            margin-bottom: 10pt;
            font-size: 8pt;
        }

        .memo-title {
            font-size: 11pt;
            font-weight: bold;
            color: #0c1f3a;
            text-transform: uppercase;
            letter-spacing: 0.5pt;
            margin: 0 0 8pt 0;
            border-bottom: 0.5pt solid #e4e4e7;
            padding-bottom: 3pt;
        }

        .salutation {
            font-size: 9pt;
            font-weight: bold;
            margin-bottom: 6pt;
            color: #0c1f3a;
        }

        p {
            margin: 0 0 6pt 0;
            text-align: justify;
        }

        .section-tag {
            font-size: 8pt;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.8pt;
            color: #0c1f3a;
            margin: 8pt 0 3pt 0;
            border-bottom: 0.5pt dotted #d4d4d8;
            padding-bottom: 1pt;
        }

        table.stats-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 4pt;
            margin: 6pt 0 8pt -4pt;
        }

        table.stats-table td {
            width: 33.33%;
            background: #fafafa;
            border: 0.5pt solid #e4e4e7;
            padding: 6pt;
            vertical-align: top;
        }

        .stat-num {
            font-size: 11pt;
            font-weight: bold;
            font-family: monospace;
            color: #0c1f3a;
        }

        .stat-label {
            font-size: 6.5pt;
            font-weight: bold;
            text-transform: uppercase;
            color: #52525b;
            margin-top: 1pt;
        }

        .stat-desc {
            font-size: 6.5pt;
            color: #71717a;
            line-height: 1.3;
            margin-top: 2pt;
        }

        .signature-block {
            margin-top: 12pt;
            page-break-inside: avoid;
        }

        table.sig-table {
            width: 100%;
            border-collapse: collapse;
        }

        table.sig-table td {
            vertical-align: bottom;
        }

        .sig-img {
            height: 30pt;
            width: auto;
            margin-bottom: 2pt;
        }

        .footer-note {
            margin-top: 12pt;
            padding-top: 4pt;
            border-top: 0.5pt solid #e4e4e7;
            font-size: 6.5pt;
            color: #71717a;
            text-align: center;
            font-family: monospace;
        }

        @media screen {
            .print-bar {
                background: #0c1f3a;
                color: #ffffff;
                padding: 10px 16px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-family: sans-serif;
                font-size: 13px;
                margin-bottom: 16px;
            }
            .print-btn {
                background: #00ff88;
                color: #0c1f3a;
                font-weight: bold;
                padding: 6px 14px;
                border-radius: 4px;
                border: none;
                cursor: pointer;
            }
        }
        @media print {
            .print-bar { display: none !important; }
        }
    </style>
</head>
<body>

@if(!empty($isPrintFallback))
<div class="print-bar">
    <div><strong>ExtremeSolutions Technical SLA &amp; Support Memo</strong></div>
    <button onclick="window.print()" class="print-btn">Print / Save as PDF</button>
</div>
<script>
    window.addEventListener('load', function() { setTimeout(function() { window.print(); }, 400); });
</script>
@endif

<!-- Corporate Header -->
<table class="header-table">
    <tr>
        <td style="width: 58%;">
            @if(!empty($logoBase64))
                <img src="{{ $logoBase64 }}" class="logo-img" alt="ExtremeSolutions">
            @else
                <div style="font-size: 14pt; font-weight: bold; color: #0c1f3a;">EXTREMESOLUTIONS</div>
            @endif
            <div class="motto-verse">Building Digital Systems that last.</div>
        </td>
        <td style="width: 42%;" class="header-meta">
            <span class="badge">TECHNICAL SLA &bull; DIRECT MEMORANDUM</span><br>
            <strong>Ref:</strong> {{ $refCode }}<br>
            <strong>Date:</strong> {{ $dateStr }}<br>
            <strong>Engineering Desk:</strong> Lagos, NG &bull; Global Remote
        </td>
    </tr>
</table>

<!-- Recipient Identification -->
<div class="recipient-card">
    <strong>ENTERPRISE CLIENT / PARTNER:</strong> {{ $name }} &nbsp;|&nbsp; 
    <strong>SUBJECT:</strong> Systems Support Standards, SLA &amp; Active Deployments
</div>

<!-- Title -->
<div class="memo-title">
    Software Engineering Architecture, Enterprise SLA &amp; Operational Standards
</div>

<!-- Salutation -->
<div class="salutation">
    Dear {{ $name }},
</div>

<p>
    ExtremeSolutions is a digital engineering and software building company dedicated to engineering dependable custom platforms, mobile applications, cloud automation workflows, and high-throughput transactional backends.
</p>

<div class="section-tag">01 // Engineering Philosophy: Systems That Last</div>
<p>
    Too much enterprise software is built for theoretical environments rather than how modern organizations actually operate. ExtremeSolutions rejects superficial web wrappers and unstable codebases. We build resilient, high-performance architectures capable of scaling smoothly across complex emerging market conditions, variable network latency, and intensive daily operations.
</p>

<div class="section-tag">02 // Enterprise Support SLA &amp; Infrastructure Governance</div>
<p>
    To ensure every platform we deliver remains dependable, ExtremeSolutions provides comprehensive technical stewardship:
</p>

<table class="stats-table">
    <tr>
        <td>
            <div class="stat-num">99.9%</div>
            <div class="stat-label">Uptime Target</div>
            <div class="stat-desc">Proactive automated server monitoring, daily database snapshots, and automated failover routing.</div>
        </td>
        <td>
            <div class="stat-num">&lt; 60 Min</div>
            <div class="stat-label">Critical Escalation</div>
            <div class="stat-desc">Direct hotline to senior engineering leads for rapid resolution of production bottlenecks.</div>
        </td>
        <td>
            <div class="stat-num">Regular</div>
            <div class="stat-label">Security Patches</div>
            <div class="stat-desc">Continuous dependency updates, SSL management, and database query optimization.</div>
        </td>
    </tr>
</table>

<div class="section-tag">03 // Active Field Deployments &amp; Flagship Products</div>
<p>
    To guarantee our software is battle-tested, we operate our own live platforms every day:
</p>
<ul style="margin: 4pt 0 8pt 16pt; padding: 0;">
    <li style="margin-bottom: 4pt;">
        <strong>ExtremeSMS (School Operating System &mdash; sms.extremesolutions.com.ng):</strong> Our active frontline deployment resolving core secondary education (JSS1&ndash;SS3) bottlenecks &mdash; automating continuous assessment broadsheets in 12 seconds, enforcing zero-leakage tuition gate passes, and conducting offline-resilient CBT exam drills with an on-ground 48-hour assisted taskforce.
    </li>
    <li style="margin-bottom: 4pt;">
        <strong>ESPass (Event Ticketing &amp; Access Control &mdash; espass.extremesolutions.com.ng):</strong> High-concurrency ticketing engine featuring sub-150ms cryptographic QR gate validation and offline scanner resilience.
    </li>
</ul>

<p>
    Whether you require mission-critical software engineering, custom mobile development, or long-term operational support, ExtremeSolutions delivers structural discipline and dependable code.
</p>

<!-- Signature Block -->
<div class="signature-block">
    <table class="sig-table">
        <tr>
            <td style="width: 60%;">
                @if(!empty($sigBase64))
                    <img src="{{ $sigBase64 }}" class="sig-img" alt="Samuel Ekunyan">
                @endif
                <div style="font-weight: bold; font-size: 9pt; color: #0c1f3a;">SAMUEL EKUNYAN</div>
                <div style="font-size: 7pt; color: #52525b;">Founder &amp; Principal Systems Architect</div>
                <div style="font-size: 7pt; color: #71717a;">ExtremeSolutions &bull; extremesolutions.com.ng</div>
            </td>
            <td style="width: 40%; text-align: right; font-size: 7pt; color: #52525b; font-family: monospace;">
                <div>SUPPORT SLA CODE: {{ $refCode }}</div>
                <div>STATUS: PRODUCTION ACTIVE</div>
            </td>
        </tr>
    </table>
</div>

<!-- Footer Note -->
<div class="footer-note">
    EXTREMESOLUTIONS &bull; "BUILDING DIGITAL SYSTEMS THAT LAST." &bull; INFO@EXTREMESOLUTIONS.COM.NG &bull; +234 905 258 5622
</div>

</body>
</html>
