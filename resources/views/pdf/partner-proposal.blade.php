<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ExtremeSolutions &mdash; Institutional Partnership Proposal</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 10mm 15mm 8mm 15mm;
        }

        * {
            box-sizing: border-box;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        html, body {
            margin: 0;
            padding: 0;
            background: #ffffff;
        }

        body {
            font-family: 'DejaVu Sans', sans-serif;
            color: #1e293b;
            font-size: 8.2pt;
            line-height: 1.35;
            page-break-inside: avoid;
        }

        .page-wrap {
            width: 100%;
            page-break-inside: avoid;
        }

        table.header-table {
            width: 100%;
            border-collapse: collapse;
            border-bottom: 1.2pt solid #0f172a;
            padding-bottom: 5pt;
            margin-bottom: 7pt;
        }

        table.header-table td {
            vertical-align: middle;
        }

        .logo-img {
            height: 22pt;
            width: auto;
        }

        .header-title {
            font-size: 12.5pt;
            font-weight: bold;
            color: #0f172a;
            letter-spacing: 0.4pt;
        }

        .header-sub {
            font-size: 7.2pt;
            color: #475569;
            margin-top: 1pt;
        }

        .header-date {
            text-align: right;
            font-size: 8pt;
            color: #0f172a;
            font-weight: bold;
        }

        .salutation {
            font-size: 9pt;
            font-weight: bold;
            margin-bottom: 2pt;
            color: #0f172a;
        }

        .subject-line {
            font-size: 8.6pt;
            font-weight: bold;
            color: #0f172a;
            border-bottom: 0.5pt solid #cbd5e1;
            padding-bottom: 2pt;
            margin-bottom: 6pt;
        }

        p {
            margin: 0 0 4.5pt 0;
            text-align: justify;
        }

        .section-heading {
            font-size: 8.2pt;
            font-weight: bold;
            color: #0f172a;
            margin: 5pt 0 3pt 0;
            border-bottom: 0.5pt solid #e2e8f0;
            padding-bottom: 1pt;
        }

        table.comparison-table {
            width: 100%;
            border-collapse: collapse;
            margin: 4pt 0 5pt 0;
            font-size: 7.6pt;
        }

        table.comparison-table th {
            background: #f1f5f9;
            color: #0f172a;
            font-weight: bold;
            text-align: left;
            padding: 3pt 5pt;
            border: 0.5pt solid #cbd5e1;
        }

        table.comparison-table td {
            padding: 3pt 5pt;
            border: 0.5pt solid #cbd5e1;
            vertical-align: top;
        }

        ul {
            margin: 1.5pt 0 4.5pt 12pt;
            padding: 0;
        }

        li {
            margin-bottom: 1.5pt;
            font-size: 8pt;
        }

        .signature-block {
            margin-top: 6pt;
            padding-top: 3pt;
            border-top: 0.5pt solid #e2e8f0;
            page-break-inside: avoid;
        }

        .sig-img {
            height: 22pt;
            width: auto;
            margin: 1.5pt 0 1pt 0;
        }

        @media screen {
            .print-bar {
                background: #0f172a;
                color: #ffffff;
                padding: 8px 14px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-family: sans-serif;
                font-size: 12px;
                margin-bottom: 12px;
            }
            .print-btn {
                background: #10b981;
                color: #ffffff;
                font-weight: bold;
                padding: 5px 12px;
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
<div class="page-wrap">

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
        <td style="width: 72%;">
            <table style="border-collapse: collapse;">
                <tr>
                    @if(!empty($logoBase64))
                        <td style="padding-right: 9pt; vertical-align: middle;">
                            <img src="{{ $logoBase64 }}" class="logo-img" alt="ExtremeSolutions">
                        </td>
                    @endif
                    <td style="vertical-align: middle;">
                        <div class="header-title">EXTREMESOLUTIONS</div>
                        <div class="header-sub">Lagos, Nigeria &bull; extremesolutions.com.ng &bull; sms.extremesolutions.com.ng</div>
                    </td>
                </tr>
            </table>
        </td>
        <td style="width: 28%;" class="header-date">
            {{ $dateStr }}
        </td>
    </tr>
</table>

<!-- Recipient Salutation -->
<div class="salutation">
    Dear {{ $proprietor }},
</div>

<!-- Subject Line -->
<div class="subject-line">
    Subject: Institutional Partnership for Broadsheet Automation and Student CBT Readiness &mdash; {{ $school }}
</div>

<p>
    Every academic term, Nigerian private secondary schools lose dozens of administrative hours to manual calculation delays, broadsheet errors, and the friction of tracking outstanding tuition payments. At the same time, parents increasingly expect secondary schools to prepare their children for a digital world&mdash;specifically ensuring they are fully confident in Computer-Based Testing (CBT) before sitting for national examinations.
</p>

<p>
    ExtremeSolutions is extending an institutional partnership invitation to <strong>{{ $school }}</strong> to deploy our modern School Operating System (sms.extremesolutions.com.ng) starting this academic term.
</p>

<div class="section-heading">The Three Operational Challenges We Solve for Your School</div>

<!-- Comparison Table -->
<table class="comparison-table">
    <thead>
        <tr>
            <th style="width: 48%;">Operational Bottleneck</th>
            <th style="width: 52%; background: #ecfdf5; color: #065f46;">The ExtremeSolutions Transformation</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <strong>Manual Broadsheet Delays:</strong> Teachers spend 2&ndash;3 weeks using calculators, leading to calculation discrepancies and delayed vacation releases.
            </td>
            <td style="background: #f0fdf4;">
                <strong>1-Click Automated Report Dossiers:</strong> Teachers input raw scores. The system automatically computes continuous assessments, percentages, positions, and prints branded report cards instantly.
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
    We propose a brief 15-minute technical briefing and live broadsheet walk-through at your administrative office next week, where we will generate a live sample broadsheet for your review.
</p>

<!-- Signature Block (Exact Format) -->
<div class="signature-block">
    <div style="font-size: 8pt; color: #334155; margin-bottom: 1pt;">Yours sincerely,</div>
    @if(!empty($sigBase64))
        <img src="{{ $sigBase64 }}" class="sig-img" alt="Samuel Ekunyan Signature">
    @endif
    <div style="font-weight: bold; font-size: 9pt; color: #0f172a;">Samuel Ekunyan</div>
    <div style="font-size: 8pt; color: #334155;">Lead Developer &amp; Founder, ExtremeSolutions</div>
    <div style="font-size: 7.5pt; color: #475569;">samuel@ekunyansamuel.dev &bull; sms.extremesolutions.com.ng</div>
    <div style="font-size: 8pt; color: #0f172a; font-weight: bold; margin-top: 1pt;">WhatsApp: +2348036375292</div>
</div>

</div>
</body>
</html>
