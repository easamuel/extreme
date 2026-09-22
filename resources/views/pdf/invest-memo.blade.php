<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ExtremeSolutions &mdash; Commercial Advance Memorandum</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 12mm 15mm 12mm 15mm;
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
            color: #0f172a;
            font-size: 9pt;
            line-height: 1.42;
        }

        table.header-table {
            width: 100%;
            border-collapse: collapse;
            border-bottom: 1.2pt solid #0f172a;
            padding-bottom: 6pt;
            margin-bottom: 8pt;
        }

        table.header-table td {
            vertical-align: middle;
        }

        .logo-img {
            height: 24pt;
            width: auto;
        }

        .header-title {
            font-size: 13pt;
            font-weight: bold;
            color: #0f172a;
            letter-spacing: 0.3pt;
        }

        .header-sub {
            font-size: 7.5pt;
            color: #475569;
            margin-top: 1pt;
        }

        .header-date {
            text-align: right;
            font-size: 8pt;
            color: #0f172a;
            font-weight: 500;
        }

        .salutation {
            font-size: 9.5pt;
            font-weight: bold;
            color: #0f172a;
            margin-bottom: 3pt;
        }

        .subject-line {
            font-size: 9pt;
            font-weight: bold;
            color: #0f172a;
            border-bottom: 0.5pt solid #cbd5e1;
            padding-bottom: 3pt;
            margin-bottom: 7pt;
        }

        p {
            margin: 0 0 6pt 0;
            text-align: justify;
        }

        ul {
            margin: 2pt 0 6pt 12pt;
            padding: 0;
        }

        li {
            margin-bottom: 2pt;
            font-size: 8.5pt;
        }

        .table-bank {
            width: 100%;
            border-collapse: collapse;
            border: 0.75pt solid #cbd5e1;
            background: #f8fafc;
            margin: 5pt 0;
            font-size: 8pt;
        }

        .table-bank td {
            padding: 4pt 7pt;
            vertical-align: top;
        }

        .signature-block {
            margin-top: 7pt;
            padding-top: 5pt;
            border-top: 0.5pt solid #e2e8f0;
            page-break-inside: avoid;
        }

        .sig-img {
            height: 24pt;
            width: auto;
            margin: 2pt 0;
        }
    </style>
</head>
<body>

<!-- Letterhead -->
<table class="header-table">
    <tr>
        <td style="width: 70%;">
            <table style="border-collapse: collapse;">
                <tr>
                    @if(!empty($logoBase64))
                        <td style="padding-right: 8pt; vertical-align: middle;">
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
        <td style="width: 30%;" class="header-date">
            {{ $dateStr }}
        </td>
    </tr>
</table>

<!-- Recipient Salutation -->
<div class="salutation">
    Dear {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Valued Partner') }},
</div>

<!-- Subject Line -->
<div class="subject-line">
    Subject: Structured Commercial Partner Advance &mdash; ExtremeSolutions School OS
</div>

<p>
    ExtremeSolutions is building a sustainable, high-margin educational technology enterprise. We are not an NGO or a charity; we are a commercial systems venture deploying an all-in-one School Operating System (sms.extremesolutions.com.ng) to solve deep operational bottlenecks in Nigerian secondary schools.
</p>

<p>
    <strong>The Commercial Mechanism: 1.3x Fixed Capped Repayment:</strong> We have structured a clean, revenue-linked advance mechanism for private commercial backers. Backers participate with a lean advance of <strong>&#8358;50,000</strong> or <strong>&#8358;100,000</strong> per unit, capped at a fixed <strong>1.3x return</strong> (&#8358;50,000 returns &#8358;65,000; &#8358;100,000 returns &#8358;130,000). Repayments are funded and disbursed directly from termly software fees (&#8358;500 – &#8358;1,000/student) across our first 3 to 5 onboarded secondary schools. Once fulfilled, capital is fully returned with yield, while the institutions generate permanent recurring software revenues that sustain our operations indefinitely.
</p>

<p>
    <strong>Why the Unit Economics Support This Advance:</strong> We charge schools an integrated termly fee of <strong>&#8358;500 to &#8358;1,000 per student</strong> (generating &#8358;150,000 to &#8358;300,000 per term for an average 250-student school). <strong>Onboarding just 3 secondary schools makes our core infrastructure completely self-sustaining</strong>, generating &#8358;450,000 to &#8358;900,000 per term to comfortably service and prioritize repayments.
</p>

<p>
    <strong>Capital Allocation: Customer Acquisition &amp; On-Ground Deployment:</strong> Schools pay after their first successful broadsheet run. Software alone cannot close contracts; physical execution does. Your advance directly funds field transit for direct proprietor demos, 48-hour assisted student register onboarding, and teacher handbook induction materials.
</p>

<!-- Dedicated Commercial Advance Account Details -->
<table class="table-bank">
    <tr>
        <td style="width: 50%;"><strong>Bank Name:</strong> Wema Bank Plc</td>
        <td style="width: 50%;"><strong>Account Name:</strong> Samuel Ekunyan</td>
    </tr>
    <tr>
        <td style="width: 50%;"><strong>Account Number:</strong> 0236642821</td>
        <td style="width: 50%;"><strong>Narration:</strong> EXS Partner Advance / {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Partner') }}</td>
    </tr>
</table>

<p style="font-size: 7.5pt; font-style: italic; color: #475569; margin: 3pt 0 5pt 0;">
    Backers receive a formal signed term sheet, direct monthly audit reports, and priority disbursement from onboarded school revenues.
</p>

<!-- Sign-off Block (Exact Format) -->
<div class="signature-block">
    <div style="font-size: 8pt; color: #475569; margin-bottom: 2pt;">Yours sincerely,</div>
    @if(!empty($sigBase64))
        <img src="{{ $sigBase64 }}" class="sig-img" alt="Samuel Ekunyan Signature">
    @endif
    <div style="font-weight: bold; font-size: 9pt; color: #0f172a;">Samuel Ekunyan</div>
    <div style="font-size: 8pt; color: #334155;">Lead Developer &amp; Founder, ExtremeSolutions</div>
    <div style="font-size: 7.5pt; color: #475569;">samuel@ekunyansamuel.dev &bull; sms.extremesolutions.com.ng</div>
    <div style="font-size: 8pt; color: #0f172a; font-weight: bold; margin-top: 1pt;">WhatsApp: +2348036375292</div>
</div>

</body>
</html>

