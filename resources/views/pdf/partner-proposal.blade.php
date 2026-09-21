<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ExtremeSolutions Commercial Partnership Proposal</title>
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
            color: #1e293b;
            font-size: 8.5pt;
            line-height: 1.45;
            margin: 0;
            padding: 0;
            background: #ffffff;
        }

        table.header-table {
            width: 100%;
            border-collapse: collapse;
            border-bottom: 2pt solid #0f172a;
            padding-bottom: 8pt;
            margin-bottom: 12pt;
        }

        table.header-table td {
            vertical-align: middle;
        }

        .logo-img {
            height: 32pt;
            width: auto;
        }

        .header-title {
            font-size: 14pt;
            font-weight: bold;
            color: #0f172a;
            letter-spacing: 0.5pt;
        }

        .header-dept {
            font-size: 7.5pt;
            text-transform: uppercase;
            letter-spacing: 0.5pt;
            color: #475569;
            font-weight: bold;
            margin-top: 1pt;
        }

        .header-meta {
            text-align: right;
            font-size: 7.5pt;
            color: #475569;
            line-height: 1.35;
            font-family: monospace;
        }

        .recipient-card {
            background: #f8fafc;
            border-left: 2.5pt solid #0f172a;
            padding: 6pt 8pt;
            margin-bottom: 10pt;
            font-size: 8pt;
        }

        .subject-box {
            background: #f8fafc;
            border-left: 2.5pt solid #059669;
            padding: 6pt 8pt;
            margin-bottom: 10pt;
            font-size: 8.5pt;
            font-weight: bold;
            color: #0f172a;
        }

        .salutation {
            font-size: 9pt;
            font-weight: bold;
            margin-bottom: 6pt;
            color: #0f172a;
        }

        p {
            margin: 0 0 6pt 0;
            text-align: justify;
        }

        .section-heading {
            font-size: 8pt;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.8pt;
            color: #0f172a;
            margin: 8pt 0 4pt 0;
            border-bottom: 0.5pt solid #e2e8f0;
            padding-bottom: 1pt;
        }

        table.comparison-table {
            width: 100%;
            border-collapse: collapse;
            margin: 6pt 0 8pt 0;
            font-size: 7.5pt;
        }

        table.comparison-table th {
            background: #f1f5f9;
            color: #0f172a;
            font-weight: bold;
            text-align: left;
            padding: 4pt 6pt;
            border: 0.5pt solid #cbd5e1;
        }

        table.comparison-table td {
            padding: 4pt 6pt;
            border: 0.5pt solid #cbd5e1;
            vertical-align: top;
        }

        ul {
            margin: 3pt 0 6pt 14pt;
            padding: 0;
        }

        li {
            margin-bottom: 3pt;
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
            height: 28pt;
            width: auto;
            margin-bottom: 2pt;
        }

        .footer-note {
            margin-top: 12pt;
            padding-top: 4pt;
            border-top: 0.5pt solid #e2e8f0;
            font-size: 6.5pt;
            color: #64748b;
            text-align: center;
            font-family: monospace;
        }

        @media screen {
            .print-bar {
                background: #0f172a;
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
                background: #10b981;
                color: #ffffff;
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
    <div><strong>ExtremeSolutions School Proposal:</strong> {{ $school }}</div>
    <button onclick="window.print()" class="print-btn">Print / Save as PDF</button>
</div>
<script>
    window.addEventListener('load', function() { setTimeout(function() { window.print(); }, 400); });
</script>
@endif

<!-- Letterhead -->
<table class="header-table">
    <tr>
        <td style="width: 60%;">
            @if(!empty($logoBase64))
                <img src="{{ $logoBase64 }}" class="logo-img" alt="ExtremeSolutions">
            @else
                <div class="header-title">EXTREMESOLUTIONS</div>
            @endif
            <div class="header-dept">Educational Infrastructure &amp; Deployment Taskforce</div>
            <div style="font-size: 7.5pt; color: #64748b; margin-top: 1pt;">Lagos, Nigeria &bull; extremesolutions.com.ng &bull; sms.extremesolutions.com.ng</div>
        </td>
        <td style="width: 40%;" class="header-meta">
            <strong>Proposal Code:</strong> {{ $refCode }}<br>
            <strong>Date:</strong> {{ $dateStr }}<br>
            <strong>Sector:</strong> Secondary Education Infrastructure
        </td>
    </tr>
</table>

<!-- Recipient Identification -->
<div class="recipient-card">
    <strong style="text-transform: uppercase; font-size: 7pt; color: #64748b;">PREPARED EXCLUSIVELY FOR:</strong><br>
    <strong style="color: #0f172a; font-size: 9pt;">{{ $proprietor }}, Proprietress / Principal</strong><br>
    <span style="color: #334155;">{{ $school }}</span>
</div>

<!-- Subject Line -->
<div class="subject-box">
    RE: Institutional Partnership for Broadsheet Automation and Student CBT Readiness
</div>

<!-- Salutation -->
<div class="salutation">
    Dear {{ $proprietor }},
</div>

<p>
    Every academic term, Nigerian private secondary schools lose dozens of administrative hours to manual calculation delays, broadsheet errors, and the friction of tracking outstanding tuition payments.
</p>

<p>
    At the same time, parents increasingly expect secondary schools to prepare their children for a digital world&mdash;specifically ensuring they are fully confident in Computer-Based Testing (CBT) before sitting for national examinations.
</p>

<p>
    ExtremeSolutions is extending an institutional partnership invitation to <strong>{{ $school }}</strong> to deploy our modern School Operating System (sms.extremesolutions.com.ng) starting this term.
</p>

<div class="section-heading">The Three Operational Challenges We Solve for Your School</div>

<!-- Comparison Table -->
<table class="comparison-table">
    <thead>
        <tr>
            <th style="width: 50%;">Operational Bottleneck</th>
            <th style="width: 50%; background: #ecfdf5; color: #065f46;">The ExtremeSolutions Transformation</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <strong>Manual Broadsheet Delays:</strong> Teachers spend 2&ndash;3 weeks using calculators, leading to calculation discrepancies and delayed vacation releases.
            </td>
            <td style="background: #f0fdf4;">
                <strong>1-Click Automated Report Dossiers:</strong> Teachers input raw scores. The system automatically computes continuous assessments (CA), percentages, positions, and prints branded PDF report cards instantly.
            </td>
        </tr>
        <tr>
            <td>
                <strong>Tuition Leakage &amp; Debtors:</strong> Unclear records on partial payments and parents defaulting on fees prior to termly examinations.
            </td>
            <td style="background: #f0fdf4;">
                <strong>Real-Time Financial Ledger:</strong> A clean, single-screen dashboard showing exact fee balances, generating automatic receipts and payment tracking.
            </td>
        </tr>
        <tr>
            <td>
                <strong>JAMB CBT Shock:</strong> Students reaching SS3 with zero practical computer exposure, struggling with navigation and timing on test day.
            </td>
            <td style="background: #f0fdf4;">
                <strong>In-House CBT Assessment Module:</strong> Students sit for routine class tests and terminal mock exams on a digital interface, making computer interaction second nature.
            </td>
        </tr>
    </tbody>
</table>

<div class="section-heading">Our 48-Hour Assisted Deployment Commitment</div>
<p>
    We recognize that your staff is busy. You do not need to figure this software out on your own:
</p>
<ul style="list-style-type: disc;">
    <li>
        <strong>Zero Data Burden:</strong> Provide us your student lists on paper or Excel&mdash;our technical team migrates the entire student body into your secure database within 48 hours.
    </li>
    <li>
        <strong>On-Site Staff Certification:</strong> We conduct a 1-hour hands-on training workshop at {{ $school }} for your teachers and examination officers.
    </li>
    <li>
        <strong>Dedicated Support:</strong> We remain on call throughout your examination and result-generation periods to guarantee zero system downtime.
    </li>
</ul>

<p>
    We propose a brief 15-minute operational demonstration at your administrative office next week, where we will generate a live sample broadsheet for your review.
</p>

<!-- Signature Block -->
<div class="signature-block">
    <table class="sig-table">
        <tr>
            <td style="width: 60%;">
                <p style="margin-bottom: 2pt;">Respectfully yours,</p>
                @if(!empty($sigBase64))
                    <img src="{{ $sigBase64 }}" class="sig-img" alt="Samuel Ekunyan">
                @endif
                <div style="font-weight: bold; font-size: 9pt; color: #0f172a;">Samuel Ekunyan</div>
                <div style="font-size: 7.5pt; color: #475569;">Lead Systems Architect, ExtremeSolutions</div>
                <div style="font-size: 7.5pt; color: #64748b;">sms.extremesolutions.com.ng &bull; Direct Line: +234 905 258 5622</div>
            </td>
            <td style="width: 40%; text-align: right; font-size: 7pt; color: #64748b; font-family: monospace;">
                <div>PROPOSAL REF: {{ $refCode }}</div>
                <div>STATUS: OFFICIAL PROPOSAL</div>
            </td>
        </tr>
    </table>
</div>

<!-- Footer Note -->
<div class="footer-note">
    EXTREMESOLUTIONS &bull; EDUCATIONAL INFRASTRUCTURE &bull; LAGOS, NIGERIA &bull; +234 905 258 5622
</div>

</body>
</html>
