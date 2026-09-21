<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ExtremeSolutions Institutional Partnership Proposal</title>
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
            border-left: 2.5pt solid #059669;
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
    <div><strong>ExtremeSolutions Institutional Proposal:</strong> {{ $school }}</div>
    <button onclick="window.print()" class="print-btn">Print / Save as PDF</button>
</div>
<script>
    window.addEventListener('load', function() { setTimeout(function() { window.print(); }, 400); });
</script>
@endif

<!-- Header -->
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
            <span class="badge">INSTITUTIONAL PROPOSAL</span><br>
            <strong>Ref:</strong> {{ $refCode }}<br>
            <strong>Date:</strong> {{ $dateStr }}<br>
            <strong>Headquarters:</strong> Lagos, NG &bull; Global Operations
        </td>
    </tr>
</table>

<!-- Recipient Card -->
<div class="recipient-card">
    <strong>PREPARED EXCLUSIVELY FOR:</strong> {{ $proprietor }} &nbsp;|&nbsp; 
    <strong>INSTITUTION:</strong> {{ $school }}
</div>

<!-- Title -->
<div class="memo-title">
    Software Engineering Partnership &amp; Active School Infrastructure Deployment
</div>

<!-- Salutation -->
<div class="salutation">
    Dear {{ $proprietor }},
</div>

<p>
    ExtremeSolutions is a software engineering company dedicated to designing, building, and operating dependable digital infrastructure. We partner with ambitious institutions, commercial enterprises, and visionary leadership to replace manual bottlenecks with resilient software systems.
</p>

<div class="section-tag">01 // Institutional Partnership Tracks</div>
<p>
    Our engineering organization collaborates across three key models:
</p>
<ul style="margin: 4pt 0 6pt 16pt; padding: 0;">
    <li style="margin-bottom: 3pt;"><strong>Enterprise Software Co-Creation:</strong> Custom mobile apps, APIs, cloud automation, and high-concurrency payment and ticketing infrastructure.</li>
    <li style="margin-bottom: 3pt;"><strong>Regional Distribution &amp; Reseller Alliances:</strong> Partnering with regional directors and advisors to deploy proven ExtremeSolutions platforms with recurring revenue shares.</li>
    <li style="margin-bottom: 3pt;"><strong>Active Sector Infrastructure Deployments:</strong> On-ground operational software transformations in high-impact domains such as education.</li>
</ul>

<div class="section-tag">02 // Active Scope: Secondary School Operating System (ExtremeSMS)</div>
<p>
    For {{ $school }}, we present our dedicated <strong>ExtremeSMS</strong> operating standard, engineered specifically to eliminate administrative quagmires and CBT exam failure in secondary schools (JSS1&ndash;SS3):
</p>

<table class="stats-table">
    <tr>
        <td>
            <div class="stat-num">12 Sec</div>
            <div class="stat-label">Automated Broadsheets</div>
            <div class="stat-desc">Compressing weeks of error-prone manual calculations into single-pass, mathematically verified ledgers.</div>
        </td>
        <td>
            <div class="stat-num">100%</div>
            <div class="stat-label">Tuition Audit Gate</div>
            <div class="stat-desc">Digital exam clearance cards issued only against reconciled payments, eliminating fee leakage before exams.</div>
        </td>
        <td>
            <div class="stat-num">Daily</div>
            <div class="stat-label">Offline CBT Terminals</div>
            <div class="stat-desc">LAN-based computerized exam practice from JSS1, eliminating keyboard interface shock during JAMB UTME.</div>
        </td>
    </tr>
</table>

<div class="section-tag">03 // The 48-Hour Assisted On-Ground Deployment Taskforce</div>
<p>
    We recognize that software fails when institutions are left without hands-on deployment support. ExtremeSolutions dispatches an on-ground engineering taskforce directly to {{ $school }}:
</p>
<ul style="margin: 4pt 0 8pt 16pt; padding: 0;">
    <li style="margin-bottom: 3pt;"><strong>Day 1 (Census Ingestion &amp; Hardware Hardening):</strong> Ingesting student records, configuring computer lab terminals, and setting up local offline servers.</li>
    <li style="margin-bottom: 3pt;"><strong>Day 2 (Faculty Enablement &amp; Live Simulation):</strong> Training teaching staff, conducting a live candidate mock CBT drill, and handing executive controls to leadership.</li>
</ul>

<p>
    We welcome the opportunity to deploy this operational standard at {{ $school }}.
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
                <div>PARTNERSHIP ID: {{ $refCode }}</div>
                <div>CLASSIFICATION: INSTITUTIONAL</div>
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
