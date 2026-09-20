<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExtremeSolutions Executive Memorandum - {{ $org ?? $name }}</title>
    <style>
        /* ==========================================================================
           DOMPDF-SAFE STRICT CSS2.1 PRINT STYLESHEET
           Engineered specifically for A4 Portrait (210mm x 297mm)
           ========================================================================== */
        @page {
            size: A4 portrait;
            margin: 18mm 16mm 18mm 16mm;
        }

        * {
            box-sizing: border-box;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #1a202c;
            font-size: 9.5pt;
            line-height: 1.55;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }

        /* Institutional Header Grid (Simulated via Table for 100% Dompdf Fidelity) */
        table.header-table {
            width: 100%;
            border-collapse: collapse;
            border-bottom: 2pt solid #1e3a5f;
            padding-bottom: 12pt;
            margin-bottom: 14pt;
        }

        table.header-table td {
            vertical-align: middle;
        }

        .logo-img {
            height: 42pt;
            width: auto;
        }

        .brand-sub {
            font-size: 7pt;
            color: #4a5568;
            letter-spacing: 1.5pt;
            text-transform: uppercase;
            font-weight: bold;
            margin-top: 2pt;
        }

        .header-meta {
            text-align: right;
            font-size: 8pt;
            color: #4a5568;
            line-height: 1.35;
        }

        .ref-badge {
            display: inline-block;
            background-color: #f0fdf4;
            color: #166534;
            border: 0.5pt solid #bbf7d0;
            font-weight: bold;
            padding: 2pt 6pt;
            font-size: 7.5pt;
            border-radius: 3pt;
            margin-bottom: 3pt;
        }

        /* Recipient & Executive Metadata Card */
        table.meta-box {
            width: 100%;
            background-color: #f8fafc;
            border: 0.75pt solid #e2e8f0;
            border-left: 3pt solid #00c853;
            border-radius: 3pt;
            margin-bottom: 14pt;
            padding: 8pt 10pt;
        }

        table.meta-box td {
            vertical-align: top;
            font-size: 8.5pt;
        }

        .meta-label {
            color: #64748b;
            font-size: 7pt;
            text-transform: uppercase;
            letter-spacing: 0.8pt;
            font-weight: bold;
            display: block;
            margin-bottom: 1pt;
        }

        .meta-val {
            color: #0f172a;
            font-weight: bold;
        }

        /* Document Title */
        .memo-title {
            font-size: 13pt;
            font-weight: bold;
            color: #1e3a5f;
            text-transform: uppercase;
            letter-spacing: 0.5pt;
            margin: 0 0 10pt 0;
            padding-bottom: 4pt;
            border-bottom: 0.5pt solid #e2e8f0;
        }

        /* Salutation & Paragraphs */
        .salutation {
            font-size: 10.5pt;
            font-weight: bold;
            color: #0f172a;
            margin-bottom: 8pt;
        }

        p {
            margin: 0 0 8pt 0;
            text-align: justify;
        }

        .section-headline {
            font-size: 9.5pt;
            font-weight: bold;
            color: #1e3a5f;
            margin: 10pt 0 4pt 0;
            text-transform: uppercase;
            letter-spacing: 0.3pt;
        }

        /* Problem / Solution Grid */
        table.pillars-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 6pt;
            margin: 8pt 0 12pt -6pt;
        }

        table.pillars-table td {
            width: 33.33%;
            background-color: #ffffff;
            border: 0.75pt solid #e2e8f0;
            border-radius: 4pt;
            padding: 8pt;
            vertical-align: top;
        }

        .pillar-title {
            font-size: 8pt;
            font-weight: bold;
            color: #1e3a5f;
            text-transform: uppercase;
            margin-bottom: 3pt;
        }

        .pillar-metric {
            font-size: 13pt;
            font-weight: bold;
            color: #00c853;
            margin-bottom: 2pt;
        }

        .pillar-desc {
            font-size: 7.5pt;
            color: #475569;
            line-height: 1.35;
        }

        /* Field Taskforce Callout */
        .taskforce-box {
            background-color: #f0fdf4;
            border: 0.75pt solid #bbf7d0;
            border-radius: 4pt;
            padding: 8pt 10pt;
            margin: 8pt 0 12pt 0;
        }

        .taskforce-title {
            color: #166534;
            font-weight: bold;
            font-size: 8.5pt;
            text-transform: uppercase;
            margin-bottom: 3pt;
        }

        .taskforce-body {
            color: #1e3a5f;
            font-size: 8.5pt;
            line-height: 1.45;
        }

        /* Signature & Official Seal Block */
        .signature-block {
            margin-top: 14pt;
            page-break-inside: avoid;
        }

        table.sig-table {
            width: 100%;
            border-collapse: collapse;
        }

        table.sig-table td {
            vertical-align: bottom;
        }

        .sig-image {
            height: 38pt;
            width: auto;
            margin-bottom: 2pt;
        }

        .signee-name {
            font-size: 10pt;
            font-weight: bold;
            color: #1e3a5f;
            line-height: 1.2;
        }

        .signee-title {
            font-size: 8pt;
            color: #475569;
            line-height: 1.3;
        }

        .verification-seal {
            text-align: right;
        }

        .seal-badge {
            display: inline-block;
            border: 1.5pt solid #00c853;
            border-radius: 4pt;
            padding: 4pt 8pt;
            text-align: center;
            background-color: #f8fafc;
        }

        .seal-title {
            font-size: 7pt;
            font-weight: bold;
            color: #166534;
            letter-spacing: 1pt;
            text-transform: uppercase;
        }

        .seal-code {
            font-size: 6.5pt;
            color: #64748b;
            font-family: monospace;
        }

        /* Footer */
        .footer-note {
            margin-top: 14pt;
            padding-top: 6pt;
            border-top: 0.5pt solid #cbd5e1;
            font-size: 6.5pt;
            color: #94a3b8;
            text-align: center;
            line-height: 1.4;
        }

        /* Print Fallback Interactive Toolbar */
        @media screen {
            .no-print-bar {
                background: #1e3a5f;
                color: #ffffff;
                padding: 10px 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-family: system-ui, sans-serif;
                margin-bottom: 20px;
                border-radius: 6px;
            }
            .print-btn {
                background: #00ff88;
                color: #0a192f;
                font-weight: bold;
                padding: 8px 16px;
                border-radius: 4px;
                border: none;
                cursor: pointer;
                text-decoration: none;
            }
        }
        @media print {
            .no-print-bar {
                display: none !important;
            }
        }
    </style>
</head>
<body>

@if(!empty($isPrintFallback))
<div class="no-print-bar">
    <div>
        <strong>Official Institutional Letterhead:</strong> ExtremeSolutions OS Proposal for {{ $org ?? $name }}
    </div>
    <div>
        <button onclick="window.print()" class="print-btn">Print or Save as PDF</button>
    </div>
</div>
<script>
    // Auto-prompt browser print dialog for instant PDF saving
    window.addEventListener('load', function() {
        setTimeout(function() {
            window.print();
        }, 500);
    });
</script>
@endif

<!-- Institutional Header -->
<table class="header-table">
    <tr>
        <td style="width: 55%;">
            @if(!empty($logoBase64))
                <img src="{{ $logoBase64 }}" class="logo-img" alt="ExtremeSolutions">
            @else
                <div style="font-size: 16pt; font-weight: bold; color: #1e3a5f;">EXTREME<span style="color: #00c853;">SOLUTIONS</span></div>
            @endif
            <div class="brand-sub">Enterprise Systems &bull; Education Operating Infrastructure</div>
            <div style="font-size: 7.5pt; color: #64748b; margin-top: 1pt;">Authorized Domain: <strong>sms.extremesolutions.com.ng</strong></div>
        </td>
        <td style="width: 45%;" class="header-meta">
            <span class="ref-badge">VERIFIED INSTITUTIONAL MEMO</span><br>
            <strong>Reference:</strong> {{ $refCode }}<br>
            <strong>Issued Date:</strong> {{ $dateStr }}<br>
            <strong>Channel:</strong> Institutional Angel &amp; Executive Direct
        </td>
    </tr>
</table>

<!-- Recipient Metadata Box -->
<table class="meta-box">
    <tr>
        <td style="width: 50%;">
            <span class="meta-label">Designated Recipient</span>
            <span class="meta-val">{{ $title }} {{ $name }}</span>
        </td>
        <td style="width: 50%;">
            <span class="meta-label">Target Academic Institution</span>
            <span class="meta-val">{{ $org ?? 'Private Basic & Secondary Education Enterprise' }}</span>
        </td>
    </tr>
</table>

<!-- Document Heading -->
<div class="memo-title">
    Subject: Modernizing Academic Operations &amp; Eliminating Administrative Deficits via ExtremeSolutions OS
</div>

<!-- Salutation -->
<div class="salutation">
    Dear {{ $title }} {{ $name }},
</div>

<!-- Letter Body: StoryBrand Narrative -->
<p>
    Across Nigeria and West Africa, private basic and secondary schools represent the frontline of human capital development. Yet, our field research across hundreds of school administrations reveals that proprietors and headteachers face an unsustainable operational drain: <strong>basic school faculties lose between two to three weeks every term</strong> manually tabulating continuous assessments, compiling broadsheets, and calculating student position rankings.
</p>

<p>
    This administrative bottleneck introduces high error rates in report cards, causes severe teacher fatigue during examination cycles, and obscures financial visibility. Concurrently, students reach secondary school exit examinations—such as JAMB CBT and WAEC—experiencing severe <strong>computer-interface shock</strong> because their foundational schooling lacked continuous digital examination familiarization.
</p>

<!-- The Solution & Core Pillars -->
<div class="section-headline">The Architectural Solution: ExtremeSolutions School OS</div>
<p>
    ExtremeSolutions has engineered a sovereign, cloud-native School Operating System (<strong>sms.extremesolutions.com.ng</strong>) purposely designed for African educational infrastructure. It replaces fragmented paper files, desktop spreadsheets, and prone-to-fraud manual fee records with a secure, unified operational engine:
</p>

<table class="pillars-table">
    <tr>
        <td>
            <div class="pillar-title">Academic &amp; Broadsheets</div>
            <div class="pillar-metric">1-Click</div>
            <div class="pillar-desc">
                Instant continuous assessment consolidation, automated grading algorithms, and instantaneous terminal broadsheets with zero computational errors.
            </div>
        </td>
        <td>
            <div class="pillar-title">Financial Ledger &amp; Fees</div>
            <div class="pillar-metric">Zero Leakage</div>
            <div class="pillar-desc">
                Instant bank payment reconciliation, tamper-proof digital receipts, and real-time parent billing eliminating unrecovered tuition revenue.
            </div>
        </td>
        <td>
            <div class="pillar-title">Foundational CBT Terminal</div>
            <div class="pillar-metric">Primary 1–SS3</div>
            <div class="pillar-desc">
                Classroom computer-based test simulator designed to build early mouse/keyboard fluency years before WAEC &amp; JAMB CBT exit exams.
            </div>
        </td>
    </tr>
</table>

<!-- The Field Enablement Model (Why Software Fails in Africa) -->
<div class="taskforce-box">
    <div class="taskforce-title">Our Distinct Advantage: The 48-Hour On-Ground Deployment Taskforce</div>
    <div class="taskforce-body">
        Most educational software fails in Africa not because of poor code, but because of digital abandonment. ExtremeSolutions pairs software with on-site human enablement. Our deployment taskforce audits your existing paper registers, executes complete pupil/staff migration, and conducts intensive on-site teacher certification—delivering a fully operational, independent school system within <strong>48 hours</strong> of deployment.
    </div>
</div>

<p>
    {{ !empty($org) ? $org : 'Your institution' }} possesses the academic legacy to lead your region's educational landscape. We invite you to review our institutional operational model and reserve a personalized architectural demonstration with our engineering leadership.
</p>

<!-- Sign-off and Verification Seal -->
<div class="signature-block">
    <table class="sig-table">
        <tr>
            <td style="width: 60%;">
                <div style="font-size: 8.5pt; color: #475569; margin-bottom: 2pt;">Respectfully submitted,</div>
                @if(!empty($sigBase64))
                    <img src="{{ $sigBase64 }}" class="sig-image" alt="Samuel Ekunyan Signature">
                @endif
                <div class="signee-name">Samuel Ekunyan</div>
                <div class="signee-title">Founder &amp; Principal Systems Architect<br>ExtremeSolutions Systems &amp; Software</div>
            </td>
            <td style="width: 40%;" class="verification-seal">
                <div class="seal-badge">
                    <div class="seal-title">&check; VERIFIED DIGITAL MEMO</div>
                    <div class="seal-code">{{ $refCode }}</div>
                    <div style="font-size: 6pt; color: #64748b; margin-top: 1pt;">extreme.systems/verify</div>
                </div>
            </td>
        </tr>
    </table>
</div>

<!-- Official Footer -->
<div class="footer-note">
    ExtremeSolutions &bull; Enterprise Software, Mobile Systems &amp; Cloud Automation &bull; Lagos, Nigeria &bull; +234 905 258 5622<br>
    Official School Operating System: <strong>https://sms.extremesolutions.com.ng</strong> &bull; Institutional Desk: <strong>info@extremesolutions.com.ng</strong>
</div>

</body>
</html>

