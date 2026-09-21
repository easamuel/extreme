<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ExtremeSolutions Founding Partner Advance (Option B)</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 10mm 12mm 10mm 12mm;
        }

        * {
            box-sizing: border-box;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #0f172a;
            font-size: 8.5pt;
            line-height: 1.38;
            margin: 0;
            padding: 0;
            background: #ffffff;
        }

        table.header-table {
            width: 100%;
            border-collapse: collapse;
            border-bottom: 1.5pt solid #0f172a;
            padding-bottom: 6pt;
            margin-bottom: 8pt;
        }

        table.header-table td {
            vertical-align: middle;
        }

        .logo-img {
            height: 26pt;
            width: auto;
        }

        .header-title {
            font-size: 13pt;
            font-weight: bold;
            color: #0f172a;
            letter-spacing: 0.5pt;
        }

        .header-dept {
            font-size: 7.5pt;
            text-transform: uppercase;
            letter-spacing: 0.5pt;
            color: #047857;
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
            padding: 4pt 6pt;
            margin-bottom: 7pt;
            font-size: 8.5pt;
            font-weight: bold;
            color: #0f172a;
        }

        .salutation {
            font-size: 9pt;
            font-weight: bold;
            margin-bottom: 5pt;
            color: #0f172a;
        }

        p {
            margin: 0 0 5pt 0;
            text-align: justify;
        }

        .section-heading {
            font-size: 7.5pt;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.8pt;
            color: #0f172a;
            margin: 6pt 0 2pt 0;
            border-bottom: 0.5pt solid #e2e8f0;
            padding-bottom: 1pt;
        }

        ul {
            margin: 2pt 0 5pt 12pt;
            padding: 0;
        }

        li {
            margin-bottom: 2pt;
        }

        .signature-block {
            margin-top: 8pt;
            padding-top: 5pt;
            border-top: 0.5pt solid #e2e8f0;
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
            height: 22pt;
            width: auto;
            margin-bottom: 2pt;
        }

        .footer-note {
            margin-top: 6pt;
            padding-top: 3pt;
            border-top: 0.5pt solid #e2e8f0;
            font-size: 6pt;
            color: #64748b;
            text-align: center;
            font-family: monospace;
        }
    </style>
</head>
<body>

<!-- Letterhead -->
<table class="header-table">
    <tr>
        <td style="width: 60%;">
            @if(!empty($logoBase64))
                <img src="{{ $logoBase64 }}" class="logo-img" alt="ExtremeSolutions">
            @else
                <div class="header-title">EXTREMESOLUTIONS</div>
            @endif
            <div class="header-dept">Founding Partner Advance &bull; Option B</div>
            <div style="font-size: 7.5pt; color: #64748b; margin-top: 1pt;">Lagos, Nigeria &bull; extremesolutions.com.ng &bull; sms.extremesolutions.com.ng</div>
        </td>
        <td style="width: 40%;" class="header-meta">
            <strong>Document Ref:</strong> {{ $refCode }}<br>
            <strong>Date:</strong> {{ $dateStr }}<br>
            <strong>Classification:</strong> Commercial Advance Memo
        </td>
    </tr>
</table>

<!-- Recipient Salutation -->
<div class="salutation">
    Dear {{ $name }},
</div>

<!-- Subject Line -->
<div class="subject-box">
    RE: Structured Founding Partner Advance &mdash; Commercial Deployment of ExtremeSolutions School OS
</div>

<p>
    ExtremeSolutions is building a sustainable educational technology enterprise. We are not an NGO or a charity; we are a commercial systems venture deploying an all-in-one School Operating System (sms.extremesolutions.com.ng) to solve deep operational bottlenecks in Nigerian secondary schools.
</p>

<p>
    For commercial partners seeking a clearly defined financial return alongside institutional impact, we provide this structured <strong>Founding Partner Advance</strong>.
</p>

<div class="section-heading">The Commercial Mechanism: 1.3x Fixed Capped Repayment</div>
<ul style="list-style-type: disc;">
    <li><strong>Deployment Advance Principal:</strong> Backers participate with a lean deployment advance of <strong>₦50,000</strong> or <strong>₦100,000</strong> per unit.</li>
    <li><strong>1.3x Fixed Repayment Cap:</strong> Your advance is capped at a fixed <strong>1.3x return</strong> (₦50,000 advance returns <strong>₦65,000</strong>; ₦100,000 advance returns <strong>₦130,000</strong>).</li>
    <li><strong>Priority Revenue Recoupment:</strong> Repayments are funded and disbursed directly from the termly software fees (₦500 to ₦1,000 per student) collected across our first 3 to 5 onboarded secondary schools.</li>
    <li><strong>Self-Sustaining Milestone:</strong> Once fulfilled, your capital is fully returned with yield, while the onboarded institutions continue generating permanent, recurring software revenues that sustain our operations indefinitely without external capital.</li>
</ul>

<div class="section-heading">Unit Economics &amp; Breakeven Threshold</div>
<p>
    ExtremeSolutions charges schools a recurring, per-student software fee of <strong>₦500 to ₦1,000 per term</strong>.
</p>
<ul style="list-style-type: disc;">
    <li><strong>Average School Size:</strong> 200–350 students.</li>
    <li><strong>Termly School Revenue:</strong> ₦150,000 – ₦300,000 per institution.</li>
    <li><strong>The Breakeven Threshold:</strong> <strong>Onboarding just 3 secondary schools</strong> generates ₦450,000 – ₦900,000 per term in recurring revenue, ensuring seamless fulfillment of advance repayments and self-funded operations.</li>
</ul>

<div class="section-heading">Frontline Execution &amp; Customer Acquisition</div>
<p>
    In enterprise educational sales, schools only pay once their first terminal broadsheet is successfully delivered. Software alone cannot close contracts; physical execution closes contracts. Your deployment advance directly finances:
</p>
<ul style="list-style-type: disc;">
    <li><strong>Field Transit &amp; Direct Outreach:</strong> Transport for direct school pitch meetings and demonstrations to proprietors.</li>
    <li><strong>48-Hour Onboarding &amp; Data Entry:</strong> Digitizing physical student registers and configuring class databases.</li>
    <li><strong>Staff Induction Materials:</strong> Printing physical teacher handbooks and student CBT orientation guides.</li>
</ul>

<div class="section-heading">Audit &amp; Formal Terms</div>
<ul style="list-style-type: disc;">
    <li><strong>Written Advance Confirmation:</strong> Formal signed term sheet acknowledging the exact advance amount and fixed 1.3x repayment schedule.</li>
    <li><strong>Termly Progress Reports:</strong> Detailed visual updates confirming signed schools, student counts, and revenue distribution timelines.</li>
    <li><strong>Roll of Honor:</strong> Formal recognition as a Founding Commercial Technology Sponsor.</li>
</ul>

<div class="section-heading">Dedicated Commercial Advance Account</div>
<table style="width: 100%; border: 1pt solid #0f172a; background: #f8fafc; padding: 4pt 6pt; margin: 4pt 0; font-size: 8pt;">
    <tr>
        <td style="width: 50%;"><strong>Bank:</strong> Wema Bank Plc</td>
        <td style="width: 50%;"><strong>Account Name:</strong> Samuel Ekunyan</td>
    </tr>
    <tr>
        <td style="width: 50%;"><strong>Account Number:</strong> <span style="font-family: monospace; font-weight: bold; font-size: 9pt;">0236642821</span></td>
        <td style="width: 50%;"><strong>Narration:</strong> EXS Partner Advance / {{ $name != 'Sir/Madam' ? $name : '[Your Name]' }}</td>
    </tr>
</table>

<p style="margin-top: 6pt;">
    We are moving quickly, school by school, to establish an institutional standard across Nigeria. Thank you for your partnership, your belief, and your shared conviction.
</p>

<!-- Signature Block -->
<div class="signature-block">
    <table class="sig-table">
        <tr>
            <td style="width: 60%;">
                <p style="margin-bottom: 2pt;">Warm regards,</p>
                @if(!empty($sigBase64))
                    <img src="{{ $sigBase64 }}" class="sig-img" alt="Samuel Ekunyan">
                @endif
                <div style="font-weight: bold; font-size: 9pt; color: #0f172a;">Samuel Ekunyan</div>
                <div style="font-size: 7.5pt; color: #475569;">Founder &amp; Principal Systems Architect, ExtremeSolutions</div>
                <div style="font-size: 7.5pt; color: #64748b;">samuel@ekunyansamuel.dev &bull; sms.extremesolutions.com.ng</div>
                <div style="font-size: 7.5pt; color: #64748b;">Direct Line: +234 905 258 5622</div>
            </td>
            <td style="width: 40%; text-align: right; font-size: 7pt; color: #64748b; font-family: monospace;">
                <div>ADVANCE REF: {{ $refCode }}</div>
                <div>CLASSIFICATION: FOUNDING PARTNER ADVANCE</div>
            </td>
        </tr>
    </table>
</div>

<!-- Footer Note -->
<div class="footer-note">
    EXTREMESOLUTIONS &bull; FOUNDING PARTNER ADVANCE &bull; COMMERCIAL OPTION B
</div>

</body>
</html>

