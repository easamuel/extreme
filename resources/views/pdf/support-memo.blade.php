<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ExtremeSolutions Support &amp; Backer Brief</title>
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

        .subject-box {
            background: #f8fafc;
            border-left: 2.5pt solid #0f172a;
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

        .verse-quote {
            font-style: italic;
            color: #475569;
            border-left: 1.5pt solid #cbd5e1;
            padding-left: 6pt;
            margin: 6pt 0;
            font-size: 8pt;
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
            margin: 8pt 0 3pt 0;
            border-bottom: 0.5pt solid #e2e8f0;
            padding-bottom: 1pt;
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
    <div><strong>ExtremeSolutions Operational Brief:</strong> Grassroots Secondary Education</div>
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
            <div class="header-dept">Office of the Principal Systems Architect</div>
            <div style="font-size: 7.5pt; color: #64748b; margin-top: 1pt;">Lagos, Nigeria &bull; extremesolutions.com.ng</div>
        </td>
        <td style="width: 40%;" class="header-meta">
            <strong>Document Ref:</strong> {{ $refCode }}<br>
            <strong>Date:</strong> {{ $dateStr }}<br>
            <strong>Classification:</strong> Operational Brief
        </td>
    </tr>
</table>

<!-- Recipient Salutation -->
<div class="salutation">
    Dear {{ $name }},
</div>

<!-- Subject Line -->
<div class="subject-box">
    RE: An Urgent Operational Brief on the Grassroots Infrastructure of Nigerian Secondary Education
</div>

<!-- Habakkuk Charter Quote -->
<div class="verse-quote">
    &ldquo;Write the vision and make it plain on tablets, that he may run that readeth it.&rdquo; &mdash; Habakkuk 2:2
</div>

<p>
    ExtremeSolutions was established on a single principle: build resilient software and operational systems that permanently remove manual failure from African institutions.
</p>

<p>
    I am writing directly to you because our active frontline initiative targets the most vulnerable bottleneck in our national development: <strong>the Nigerian secondary school system</strong>.
</p>

<div class="section-heading">The Structural Breakdown at the Grassroots</div>
<p>
    Secondary education is the bridge between basic literacy and economic independence. Yet, our current reality is defined by two avoidable failures:
</p>

<ul style="list-style-type: disc;">
    <li>
        <strong>The Computerized Examination Crisis:</strong> Over 70% of Nigerian secondary school students touch a computer keyboard and mouse for the very first time on the morning of their national exit exam (JAMB CBT). The result is mass exam anxiety, interface shock, and artificially suppressed results that derail young lives&mdash;not because the students lack intelligence, but because they have never interacted with software.
    </li>
    <li>
        <strong>Administrative Paralysis:</strong> The schools themselves spend 2 to 3 weeks at the end of every term manually compiling continuous assessments and broadsheets with physical paper and handheld calculators. Grading errors are rampant, and untracked fee defaults quietly starve schools of operating cash.
    </li>
</ul>

<div class="section-heading">The Intervention: ExtremeSolutions School OS (sms.extremesolutions.com.ng)</div>
<p>
    We engineered a unified operating system specifically tailored for Nigerian secondary institutions:
</p>
<ul style="list-style-type: disc;">
    <li>
        <strong>Academic Broadsheet Engine:</strong> Raw scores are converted into weighted, ranked, error-free student terminal dossiers in seconds.
    </li>
    <li>
        <strong>Capital Protection Ledger:</strong> Instant visibility on tuition balances and payment reconciliations before examinations commence.
    </li>
    <li>
        <strong>Native Student CBT Terminals:</strong> We bring continuous digital testing directly into standard classrooms, ensuring Junior and Senior Secondary students use computers weekly as a natural tool, years before external examinations.
    </li>
</ul>

<div class="section-heading">The Deployment Model: Why We Need Your Backing</div>
<p>
    Software alone fails in emerging markets; software paired with ground-level human enablement dominates.
</p>

<p>
    We do not sell software remotely. ExtremeSolutions deploys an on-site taskforce that physically enters each secondary school, converts legacy paper broadsheets into digital records within 48 hours, and certifies every teacher on-site.
</p>

<p>
    We are actively funding the initial operational deployment for our first 10 secondary schools (encompassing ~3,000 students). Your financial backing and partnership directly underwrite the field logistics, hardware setup, and teacher training required to make these 10 schools digitally self-sustaining.
</p>

<p>
    I would welcome 10 minutes to discuss how you can stand with us in building this foundation.
</p>

<!-- Signature Block -->
<div class="signature-block">
    <table class="sig-table">
        <tr>
            <td style="width: 60%;">
                <p style="margin-bottom: 2pt;">Yours in conviction and service,</p>
                @if(!empty($sigBase64))
                    <img src="{{ $sigBase64 }}" class="sig-img" alt="Samuel Ekunyan">
                @endif
                <div style="font-weight: bold; font-size: 9pt; color: #0f172a;">Samuel Ekunyan</div>
                <div style="font-size: 7.5pt; color: #475569;">Founder &amp; Principal Systems Architect, ExtremeSolutions</div>
                <div style="font-size: 7.5pt; color: #64748b;">samuel@ekunyansamuel.dev &bull; extremesolutions.com.ng</div>
            </td>
            <td style="width: 40%; text-align: right; font-size: 7pt; color: #64748b; font-family: monospace;">
                <div>MEMORANDUM ID: {{ $refCode }}</div>
                <div>CLASSIFICATION: OFFICIAL BRIEF</div>
            </td>
        </tr>
    </table>
</div>

<!-- Footer Note -->
<div class="footer-note">
    EXTREMESOLUTIONS &bull; "WRITE THE VISION AND MAKE IT PLAIN ON TABLETS" &bull; LAGOS, NIGERIA
</div>

</body>
</html>
