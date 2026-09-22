<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ExtremeSolutions &mdash; Institutional Partnership Proposal</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 15mm 15mm 15mm 15mm; /* Strict print boundary: 210mm x 297mm */
        }

        * {
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
            font-family: 'DejaVu Sans', sans-serif;
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            padding: 0;
            background: #ffffff;
            font-family: 'DejaVu Sans', sans-serif;
        }

        body {
            color: #1e293b;
            font-size: 8.5pt;
            line-height: 1.36;
            page-break-inside: avoid;
        }

        .page-container {
            margin: 0;
            padding: 0;
            page-break-inside: avoid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .header-table td {
            vertical-align: top;
            padding-bottom: 7pt;
            border-bottom: 1.5pt solid #0f172a;
        }

        .meta-table td {
            padding-top: 5pt;
            padding-bottom: 5pt;
        }

        p {
            margin: 0 0 5pt 0;
            text-align: justify;
            text-justify: inter-word;
            word-wrap: break-word;
        }

        .section-heading {
            font-size: 8.5pt;
            font-weight: bold;
            color: #0f172a;
            margin: 4pt 0 2.5pt 0;
            border-bottom: 0.5pt solid #e2e8f0;
            padding-bottom: 1.5pt;
        }

        table.comparison-table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            margin: 3pt 0 5pt 0;
            font-size: 7.8pt;
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
            margin: 2pt 0 5pt 14pt;
            padding: 0;
        }

        li {
            margin-bottom: 1.5pt;
            font-size: 8.2pt;
        }

        .signature-table td {
            vertical-align: top;
            padding-top: 5pt;
            border-top: 0.5pt solid #e2e8f0;
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
<div class="page-container">

@if(!empty($isPrintFallback))
<div class="print-bar">
    <div><strong>ExtremeSolutions School Proposal:</strong> {{ $school }}</div>
    <button onclick="window.print()" class="print-btn">Print / Save as PDF</button>
</div>
<script>
    window.addEventListener('load', function() { setTimeout(function() { window.print(); }, 400); });
</script>
@endif

<!-- Letterhead Header Table (Strict CSS 2.1 Table Layout) -->
<table class="header-table">
    <tr>
        <td style="width: 72%; text-align: left; vertical-align: top;">
            @if(!empty($logoBase64))
                <img src="{{ $logoBase64 }}" style="height: 24pt; width: auto; vertical-align: middle; margin-right: 6pt;" alt="ExtremeSolutions">
            @endif
            <strong style="font-size: 13.5pt; color: #0f172a; letter-spacing: 0.5pt; vertical-align: middle;">EXTREMESOLUTIONS</strong><br>
            <span style="font-size: 8pt; color: #047857; text-transform: uppercase; font-weight: bold;">Educational Technology &amp; Systems Deployment</span><br>
            <span style="font-size: 7.5pt; color: #64748b;">Lagos, Nigeria &bull; extremesolutions.com.ng &bull; sms.extremesolutions.com.ng</span>
        </td>
        <td style="width: 28%; text-align: right; vertical-align: top;">
            <span style="font-size: 8.5pt; color: #0f172a; font-weight: bold;">{{ $dateStr }}</span><br>
            <span style="font-size: 7.5pt; color: #64748b;">Ref: {{ $refCode }}</span>
        </td>
    </tr>
</table>

<!-- Recipient & Subject Meta -->
<table class="meta-table">
    <tr>
        <td style="width: 100%; vertical-align: top;">
            <div style="font-size: 9.2pt; font-weight: bold; color: #0f172a;">
                Dear {{ $proprietor }},
            </div>
            <div style="font-size: 8.8pt; font-weight: bold; color: #0f172a; margin-top: 3pt; padding-bottom: 3pt; border-bottom: 0.5pt solid #cbd5e1;">
                Subject: Institutional Partnership for Broadsheet Automation and Student CBT Readiness &mdash; {{ $school }}
            </div>
        </td>
    </tr>
</table>

<p>
    Every academic term, Nigerian private secondary schools lose dozens of administrative hours to manual calculation delays, broadsheet errors, and the friction of tracking outstanding tuition payments. At the same time, parents increasingly expect secondary schools to prepare their children for a digital world&mdash;specifically ensuring they are fully confident in Computer-Based Testing (CBT) before sitting for national examinations.
</p>

<p>
    ExtremeSolutions is extending an institutional partnership invitation to <strong>{{ $school }}</strong> to deploy our modern School Operating System (sms.extremesolutions.com.ng) starting this academic term.
</p>

<div class="section-heading">The Three Operational Challenges We Solve for Your School</div>

<!-- Comparison Table (Strict Table Layout Fixed) -->
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

<!-- Sign-off Block (Exact Requested Format, Strictly Contained) -->
<table class="signature-table" style="margin-top: 4pt; page-break-inside: avoid;">
    <tr>
        <td style="width: 100%;">
            <div style="font-size: 8pt; color: #334155; margin-bottom: 1pt;">Yours sincerely,</div>
            @if(!empty($sigBase64))
                <img src="{{ $sigBase64 }}" style="height: 24pt; width: auto; margin: 2pt 0 1pt 0;" alt="Samuel Ekunyan Signature">
            @endif
            <div style="font-weight: bold; font-size: 9pt; color: #0f172a;">Samuel Ekunyan</div>
            <div style="font-size: 8pt; color: #334155;">Lead Developer &amp; Founder, ExtremeSolutions</div>
            <div style="font-size: 7.5pt; color: #64748b;">samuel@ekunyansamuel.dev &bull; sms.extremesolutions.com.ng</div>
            <div style="font-size: 8pt; color: #0f172a; font-weight: bold; margin-top: 1pt;">WhatsApp: +2348036375292</div>
        </td>
    </tr>
</table>

</div>
</body>
</html>
