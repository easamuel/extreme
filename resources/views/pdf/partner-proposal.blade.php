<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ExtremeSolutions Secondary School Operational Proposal - {{ $school }}</title>
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
            font-size: 9pt;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            background: #ffffff;
        }

        table.header-table {
            width: 100%;
            border-collapse: collapse;
            border-bottom: 2pt solid #18181b;
            padding-bottom: 8pt;
            margin-bottom: 12pt;
        }

        table.header-table td {
            vertical-align: middle;
        }

        .logo-img {
            height: 36pt;
            width: auto;
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
            color: #18181b;
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
            border-left: 2.5pt solid #18181b;
            padding: 6pt 8pt;
            margin-bottom: 10pt;
            font-size: 8pt;
        }

        .memo-title {
            font-size: 11pt;
            font-weight: bold;
            color: #18181b;
            text-transform: uppercase;
            letter-spacing: 0.5pt;
            margin: 0 0 8pt 0;
            border-bottom: 0.5pt solid #e4e4e7;
            padding-bottom: 3pt;
        }

        .salutation {
            font-size: 9.5pt;
            font-weight: bold;
            margin-bottom: 6pt;
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
            color: #18181b;
            margin: 8pt 0 3pt 0;
            border-bottom: 0.5pt dotted #d4d4d8;
            padding-bottom: 1pt;
        }

        table.pillars-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 4pt;
            margin: 6pt 0 8pt -4pt;
        }

        table.pillars-table td {
            width: 33.33%;
            background: #fafafa;
            border: 0.5pt solid #e4e4e7;
            padding: 6pt;
            vertical-align: top;
        }

        .pillar-head {
            font-size: 7.5pt;
            font-weight: bold;
            text-transform: uppercase;
            color: #18181b;
            margin-bottom: 2pt;
        }

        .pillar-metric {
            font-size: 11pt;
            font-weight: bold;
            font-family: monospace;
            color: #18181b;
            margin-bottom: 2pt;
        }

        .pillar-text {
            font-size: 7pt;
            color: #52525b;
            line-height: 1.3;
        }

        .taskforce-box {
            background: #f4f4f5;
            border: 0.5pt solid #d4d4d8;
            padding: 6pt 8pt;
            margin: 6pt 0 8pt 0;
            font-size: 8pt;
        }

        .signature-block {
            margin-top: 10pt;
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
            height: 32pt;
            width: auto;
            margin-bottom: 2pt;
        }

        .footer-note {
            margin-top: 10pt;
            padding-top: 4pt;
            border-top: 0.5pt solid #e4e4e7;
            font-size: 6.5pt;
            color: #71717a;
            text-align: center;
            font-family: monospace;
        }

        @media screen {
            .print-bar {
                background: #18181b;
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
                background: #22c55e;
                color: #000;
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
    <div><strong>School Partnership Proposal:</strong> {{ $school }}</div>
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
                <div style="font-size: 14pt; font-weight: bold; color: #18181b;">EXTREMESOLUTIONS</div>
            @endif
            <div style="font-size: 7.5pt; color: #52525b; margin-top: 2pt; font-weight: bold;">
                SECONDARY EDUCATION OPERATIONAL DEPLOYMENT ARCHITECTURE
            </div>
        </td>
        <td style="width: 42%;" class="header-meta">
            <span class="badge">COMMERCIAL PROPOSAL</span><br>
            <strong>Ref:</strong> {{ $refCode }}<br>
            <strong>Date:</strong> {{ $dateStr }}<br>
            <strong>Platform:</strong> sms.extremesolutions.com.ng
        </td>
    </tr>
</table>

<!-- Recipient Card -->
<div class="recipient-card">
    <strong>PREPARED EXCLUSIVELY FOR:</strong> {{ $proprietor }} &nbsp;|&nbsp; 
    <strong>INSTITUTION:</strong> {{ $school }}
</div>

<!-- Memo Title -->
<div class="memo-title">
    Proposal for Operational Modernization &amp; Continuous CBT Test Terminals
</div>

<!-- Salutation -->
<div class="salutation">
    Dear {{ $proprietor }},
</div>

<p>
    Leading a reputable secondary school in Nigeria demands constant balance between academic excellence and administrative survival. Today, secondary school leadership faces two unsustainable bottlenecks: faculty losing 2 to 3 weeks compiling continuous assessment broadsheets, and graduates facing national JAMB CBT examinations with zero prior computer-interface familiarity.
</p>

<!-- The 3 Pillars -->
<div class="section-tag">ExtremeSolutions OS: 3 Core Operational Pillars</div>
<table class="pillars-table">
    <tr>
        <td>
            <div class="pillar-head">1. Broadsheets</div>
            <div class="pillar-metric">12 Seconds</div>
            <div class="pillar-text">
                Teachers input raw CA scores. The system automates grade weighting, class ranking, and broadsheet compilation with zero calculation errors.
            </div>
        </td>
        <td>
            <div class="pillar-head">2. Debt Recovery</div>
            <div class="pillar-metric">Zero Leakage</div>
            <div class="pillar-text">
                Live bursary ledger that tracks partial payments, flags fee defaulters before examination cards are issued, and generates audit reports.
            </div>
        </td>
        <td>
            <div class="pillar-head">3. Classroom CBT</div>
            <div class="pillar-metric">JSS1 to SS3</div>
            <div class="pillar-text">
                Integrated test simulator built into the daily curriculum. Students practice timed CBT examinations on lab PCs or tablets long before JAMB.
            </div>
        </td>
    </tr>
</table>

<!-- 48-Hour Onboarding Model -->
<div class="section-tag">Our Guarantee: The 48-Hour On-Site Deployment Taskforce</div>
<div class="taskforce-box">
    <strong>Why we don't sell software over Zoom:</strong> We know school leadership is already busy. ExtremeSolutions deploys an on-ground engineering taskforce directly to {{ $school }}. We scan your current paper registers, digitize student records, and train your teaching faculty and bursar on-site—guaranteeing your school is fully operational within <strong>48 hours</strong>.
</div>

<p>
    We welcome the opportunity to conduct a live, hands-on demonstration with your administrative team and board this week.
</p>

<!-- Signature Block -->
<div class="signature-block">
    <table class="sig-table">
        <tr>
            <td style="width: 65%;">
                <div style="font-size: 7.5pt; color: #71717a; margin-bottom: 2pt;">Respectfully submitted,</div>
                @if(!empty($sigBase64))
                    <img src="{{ $sigBase64 }}" class="sig-img" alt="Samuel Ekunyan Signature">
                @endif
                <div style="font-size: 9.5pt; font-weight: bold; color: #18181b;">Samuel Ekunyan</div>
                <div style="font-size: 7.5pt; color: #52525b;">Founder &amp; Principal Systems Architect &bull; ExtremeSolutions</div>
            </td>
            <td style="width: 35%; text-align: right;">
                <div style="border: 1pt solid #18181b; padding: 4pt 6pt; display: inline-block; text-align: left;">
                    <div style="font-size: 6.5pt; font-family: monospace; font-weight: bold;">SECURITY AUTHENTICATION</div>
                    <div style="font-size: 7pt; font-family: monospace;">{{ $refCode }}</div>
                    <div style="font-size: 5.5pt; color: #71717a;">extremesolutions.com.ng/partner</div>
                </div>
            </td>
        </tr>
    </table>
</div>

<!-- Footer -->
<div class="footer-note">
    ExtremeSolutions &bull; Systems &amp; Software Infrastructure &bull; sms.extremesolutions.com.ng &bull; +234 905 258 5622 &bull; info@extremesolutions.com.ng
</div>

</body>
</html>
