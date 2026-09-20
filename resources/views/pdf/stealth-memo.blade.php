<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ExtremeSolutions Stealth Founder Memorandum</title>
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
            border-bottom: 2pt solid #18181b;
            padding-bottom: 8pt;
            margin-bottom: 10pt;
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
            font-style: italic;
            color: #52525b;
            margin-top: 3pt;
        }

        .header-meta {
            text-align: right;
            font-size: 7.5pt;
            color: #52525b;
            line-height: 1.35;
            font-family: monospace;
        }

        .badge-red {
            display: inline-block;
            background: #fff1f2;
            color: #9f1239;
            border: 0.5pt solid #fecdd3;
            font-weight: bold;
            padding: 2pt 5pt;
            font-size: 7pt;
            border-radius: 2pt;
            margin-bottom: 2pt;
        }

        .recipient-card {
            background: #fafafa;
            border: 0.75pt solid #e4e4e7;
            border-left: 2.5pt solid #9f1239;
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
            margin: 0 0 6pt 0;
            border-bottom: 0.5pt solid #e4e4e7;
            padding-bottom: 3pt;
        }

        p {
            margin: 0 0 5pt 0;
            text-align: justify;
        }

        .section-tag {
            font-size: 8pt;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.8pt;
            color: #9f1239;
            margin: 7pt 0 3pt 0;
            border-bottom: 0.5pt dotted #d4d4d8;
            padding-bottom: 1pt;
        }

        table.stats-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 4pt;
            margin: 5pt 0 7pt -4pt;
        }

        table.stats-table td {
            width: 33.33%;
            background: #fafafa;
            border: 0.5pt solid #e4e4e7;
            padding: 5pt;
            vertical-align: top;
        }

        .stat-num {
            font-size: 11pt;
            font-weight: bold;
            font-family: monospace;
            color: #18181b;
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
            line-height: 1.25;
            margin-top: 2pt;
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
            height: 30pt;
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
                background: #f43f5e;
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
    <div><strong>ExtremeSolutions Founder Memo:</strong> Classification Stealth (Eyes Only)</div>
    <button onclick="window.print()" class="print-btn">Print / Save as PDF</button>
</div>
<script>
    window.addEventListener('load', function() { setTimeout(function() { window.print(); }, 400); });
</script>
@endif

<!-- Letterhead -->
<table class="header-table">
    <tr>
        <td style="width: 58%;">
            @if(!empty($logoBase64))
                <img src="{{ $logoBase64 }}" class="logo-img" alt="ExtremeSolutions">
            @else
                <div style="font-size: 14pt; font-weight: bold; color: #18181b;">EXTREMESOLUTIONS</div>
            @endif
            <div class="motto-verse">"Write the vision and make it plain on tablets, that he may run that readeth it." &mdash; Habakkuk 2:2</div>
        </td>
        <td style="width: 42%;" class="header-meta">
            <span class="badge-red">CONFIDENTIAL &bull; STEALTH EYES-ONLY</span><br>
            <strong>AUTH TOKEN:</strong> {{ substr($token, 0, 12) }}...<br>
            <strong>DATE:</strong> {{ $dateStr }}<br>
            <strong>AUTHOR:</strong> Samuel Ekunyan, Principal Architect
        </td>
    </tr>
</table>

<!-- Recipient / Classification Card -->
<div class="recipient-card">
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="width: 60%; vertical-align: top;">
                <span style="font-size: 6.5pt; color: #71717a; text-transform: uppercase;">MEMORANDUM CLASSIFICATION:</span><br>
                <strong style="color: #9f1239; font-size: 8.5pt;">GATED STRATEGIC MEMORANDUM // EYES ONLY</strong>
            </td>
            <td style="width: 40%; vertical-align: top; text-align: right;">
                <span style="font-size: 6.5pt; color: #71717a; text-transform: uppercase;">DISTRIBUTION:</span><br>
                <strong style="color: #18181b;">Restricted Institutional Syndicate</strong>
            </td>
        </tr>
    </table>
</div>

<!-- Memo Title -->
<div class="memo-title">
    The African Educational Collapse, The Secondary Wedge, &amp; The Long-Term Infrastructure Play
</div>

<!-- Section 1 -->
<div class="section-tag">01 // The Delusion of African EdTech</div>
<p>
    Most technology ventures attempting to solve education across emerging African markets fail because they import Western Silicon Valley assumptions into environments that lack reliable 4G bandwidth, continuous electrical power, and basic administrative digitisation. They build mobile apps for affluent parents or attempt to sell cloud SaaS over cold email. The reality across 95% of schools is straightforward: teachers do not spend personal cellular data updating cloud portals, computer labs remain dormant under dust covers due to power surge fears, and proprietors guard cash revenue with acute suspicion.
</p>

<!-- Section 2 -->
<div class="section-tag">02 // The Tactical Wedge: Secondary Education (JSS1 &ndash; SS3)</div>
<p>
    We intentionally bypass the primary school tier. Primary schools teach basic literacy, but <strong>secondary education is where the economic trajectory of an African family is decided</strong>. Every Nigerian parent prioritizes WAEC and JAMB clearance above almost all discretionary spending.
</p>

<table class="stats-table">
    <tr>
        <td>
            <div class="stat-num">70%+</div>
            <div class="stat-label">First-Time CBT Shock</div>
            <div class="stat-desc">Students touch a keyboard for the first time on JAMB exam day, resulting in severe interface panic.</div>
        </td>
        <td>
            <div class="stat-num">12 Sec</div>
            <div class="stat-label">Automated Broadsheets</div>
            <div class="stat-desc">Compressing weeks of manual teacher calculation into mathematical zero-error compilations.</div>
        </td>
        <td>
            <div class="stat-num">98%+</div>
            <div class="stat-label">Tuition Recovery</div>
            <div class="stat-desc">Digital exam clearance passes issued only upon reconciled fee confirmation before exam halls open.</div>
        </td>
    </tr>
</table>

<p>
    By deploying an offline-resilient CBT engine for daily and weekly tests from JSS1 to SS3, students build deep keyboard muscle memory. When national examination results are released, candidate scores surge past 280+. The proprietor's school gains regional prominence; student enrollment expands; and ExtremeSolutions becomes the indispensable operating system of the school.
</p>

<!-- Section 3 -->
<div class="section-tag">03 // The 48-Hour On-Ground Assisted Taskforce Moat</div>
<p>
    Software without boots-on-the-ground execution is worthless in emerging markets. When a secondary school commits to ExtremeSolutions, we do not send a download link. <strong>We dispatch our 48-Hour Assisted On-Ground Deployment Taskforce</strong>. Our engineers physically configure laboratory computers, install local LAN servers for zero-latency testing, ingest historical records, and conduct live mock exams with the students. Competitors selling SaaS subscriptions over the web cannot pierce this level of operational trust.
</p>

<!-- Section 4 -->
<div class="section-tag">04 // The Master Plan: Beyond Education</div>
<p>
    ExtremeSolutions is fundamentally a <strong>software building company</strong>. Secondary education is our grassroots distribution wedge: it grants us unassailable institutional trust, deep daily usage, and direct local computing footholds. In parallel, our engineering laboratory scales high-concurrency commerce infrastructure such as <strong>Espass</strong> (event ticketing and cryptographic gate validation) and bespoke enterprise workflow automation engines.
</p>

<!-- Signature Block -->
<div class="signature-block">
    <table class="sig-table">
        <tr>
            <td style="width: 60%;">
                @if(!empty($sigBase64))
                    <img src="{{ $sigBase64 }}" class="sig-img" alt="Samuel Ekunyan">
                @endif
                <div style="font-weight: bold; font-size: 9pt; color: #18181b;">SAMUEL EKUNYAN</div>
                <div style="font-size: 7pt; color: #52525b;">Founder &amp; Principal Systems Architect</div>
                <div style="font-size: 7pt; color: #71717a;">ExtremeSolutions &bull; extremesolutions.com.ng</div>
            </td>
            <td style="width: 40%; text-align: right; font-size: 6.5pt; color: #71717a; font-family: monospace;">
                <div>AUTHENTICATED FOUNDER TELEMETRY</div>
                <div>HASH: {{ hash('sha256', $token) }}</div>
            </td>
        </tr>
    </table>
</div>

<!-- Footer Note -->
<div class="footer-note">
    HABAKKUK 2:2 &bull; "WRITE THE VISION AND MAKE IT PLAIN ON TABLETS" &bull; EXTREMESOLUTIONS STEALTH LAB
</div>

</body>
</html>
