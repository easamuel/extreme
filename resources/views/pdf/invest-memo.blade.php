<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ExtremeSolutions &mdash; Commercial Advance Memorandum</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 18mm 18mm 18mm 18mm; /* Symmetric, luxurious executive margins */
        }

        * {
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
            font-family: 'DejaVu Sans', sans-serif;
        }

        html, body {
            margin: 0;
            padding: 0;
            background: #ffffff;
            font-family: 'DejaVu Sans', sans-serif;
        }

        body {
            font-size: 9.8pt;
            line-height: 1.48;
            color: #1e293b;
        }

        .page-container {
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .header-table td {
            vertical-align: top;
            padding-bottom: 8pt;
            border-bottom: 1.5pt solid #0f172a;
        }

        .meta-table td {
            padding-top: 8pt;
            padding-bottom: 8pt;
            border-bottom: 0.75pt solid #cbd5e1;
        }

        p {
            margin: 0 0 9pt 0;
            text-align: justify;
            text-justify: inter-word;
            word-wrap: break-word;
        }

        .card-table {
            width: 100%;
            margin: 6pt 0 8pt 0;
            border: 1pt solid #cbd5e1;
            background-color: #f8fafc;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .card-header-cell {
            background-color: #f1f5f9;
            padding: 4pt 8pt;
            border-bottom: 1pt solid #cbd5e1;
            font-size: 7.5pt;
            font-weight: bold;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 0.5pt;
        }

        .card-cell {
            padding: 5pt 8pt;
            font-size: 8.8pt;
            color: #1e293b;
            vertical-align: top;
        }

        .card-cell-bordered {
            border-bottom: 0.5pt solid #e2e8f0;
        }

        .signature-table td {
            vertical-align: top;
            padding-top: 6pt;
            border-top: 0.75pt solid #cbd5e1;
        }
    </style>
</head>
<body>
<div class="page-container">

    <!-- Letterhead Header Table -->
    <table class="header-table">
        <tr>
            <td style="width: 72%; text-align: left; vertical-align: top;">
                @if(!empty($logoBase64))
                    <img src="{{ $logoBase64 }}" style="height: 26pt; width: auto; vertical-align: middle; margin-right: 6pt;" alt="ExtremeSolutions">
                @endif
                <strong style="font-size: 14.5pt; color: #0f172a; letter-spacing: 0.5pt; vertical-align: middle;">EXTREMESOLUTIONS</strong><br>
                <span style="font-size: 8pt; color: #059669; text-transform: uppercase; font-weight: bold; letter-spacing: 0.5pt;">Educational Technology &amp; Systems Deployment</span><br>
                <span style="font-size: 7.8pt; color: #64748b;">Lagos, Nigeria &bull; extremesolutions.com.ng &bull; sms.extremesolutions.com.ng</span>
            </td>
            <td style="width: 28%; text-align: right; vertical-align: top;">
                <span style="font-size: 9.5pt; color: #0f172a; font-weight: bold;">{{ $dateStr }}</span><br>
                <span style="font-size: 8pt; color: #64748b;">Ref: {{ $refCode }}</span>
            </td>
        </tr>
    </table>

    <!-- Recipient & Subject Meta -->
    <table class="meta-table" style="margin-bottom: 9pt;">
        <tr>
            <td style="width: 100%; vertical-align: top;">
                <div style="font-size: 10pt; font-weight: bold; color: #0f172a; margin-bottom: 3pt;">
                    Dear {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Valued Partner') }},
                </div>
                <div style="font-size: 9.5pt; font-weight: bold; color: #0f172a;">
                    Subject: Structured Commercial Partner Advance &mdash; ExtremeSolutions School OS
                </div>
            </td>
        </tr>
    </table>

    <!-- Letter Body Prose -->
    <p>
        ExtremeSolutions was founded on a singular conviction: the most critical institutions in Africa should not be held back by manual, error-prone paperwork. We are not an NGO or a charity; we are a disciplined commercial systems venture deploying an all-in-one School Operating System (sms.extremesolutions.com.ng) specifically engineered to solve operational bottlenecks in Nigerian secondary education.
    </p>

    <p>
        To accelerate our commercial school expansion, we have structured a clean, revenue-linked partner advance for private commercial backers. Backers participate with an upfront advance of <strong>&#8358;50,000</strong> or <strong>&#8358;100,000</strong> per unit, capped at a fixed <strong>1.3x return</strong> (&#8358;50,000 returns &#8358;65,000; &#8358;100,000 returns &#8358;130,000). Repayments are funded directly and prioritized from termly software fees (&#8358;500 to &#8358;1,000 per student) across our initial cluster of onboarded secondary schools. Once fulfilled, your capital is fully retired with yield, while the institutions remain permanently on our recurring subscription.
    </p>

    <p>
        The unit economics directly support this advance. We charge schools an integrated termly fee of <strong>&#8358;500 to &#8358;1,000 per student</strong>, generating &#8358;150,000 to &#8358;300,000 per term for an average 250-student school. <strong>Onboarding just 3 secondary schools makes our core infrastructure completely self-sustaining</strong>, yielding &#8358;450,000 to &#8358;900,000 every single term to service and extinguish partner advances safely.
    </p>

    <p>
        In basic education, software alone cannot close contracts; physical execution does. Schools pay after their first successful broadsheet run, requiring our team to physically enter campuses, digitize student registers within 48 hours, and train staff on-site. Your advance directly finances field transit for direct proprietor demos, assisted class register onboarding, and teacher handbook induction materials.
    </p>

    <!-- Executive Settlement Card -->
    <table class="card-table">
        <tr>
            <td colspan="2" class="card-header-cell">
                Commercial Advance Settlement Details
            </td>
        </tr>
        <tr>
            <td style="width: 50%;" class="card-cell card-cell-bordered">
                <span style="font-size: 7.5pt; color: #64748b; display: block;">Bank Name</span>
                <strong style="color: #0f172a; font-size: 9pt;">Wema Bank Plc</strong>
            </td>
            <td style="width: 50%;" class="card-cell card-cell-bordered">
                <span style="font-size: 7.5pt; color: #64748b; display: block;">Account Name</span>
                <strong style="color: #0f172a; font-size: 9pt;">Samuel Ekunyan</strong>
            </td>
        </tr>
        <tr>
            <td style="width: 50%;" class="card-cell">
                <span style="font-size: 7.5pt; color: #64748b; display: block;">Account Number</span>
                <strong style="font-size: 10pt; color: #0f172a; letter-spacing: 0.5pt;">0236642821</strong>
            </td>
            <td style="width: 50%;" class="card-cell">
                <span style="font-size: 7.5pt; color: #64748b; display: block;">Payment Narration</span>
                <span style="color: #334155; font-size: 8.5pt;">EXS Partner Advance / {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Partner') }}</span>
            </td>
        </tr>
    </table>

    <p style="font-size: 8pt; font-style: italic; color: #475569; margin: 0 0 8pt 0; line-height: 1.35;">
        Backers receive a formal signed term sheet, direct monthly audit reports, and priority disbursement from onboarded school revenues.
    </p>

    <!-- Sign-off Block (Exact Format) -->
    <table class="signature-table" style="page-break-inside: avoid;">
        <tr>
            <td style="width: 100%;">
                <div style="font-size: 9pt; color: #334155; margin-bottom: 2pt;">Yours sincerely,</div>
                @if(!empty($sigBase64))
                    <img src="{{ $sigBase64 }}" style="height: 28pt; width: auto; margin: 3pt 0;" alt="Samuel Ekunyan Signature">
                @endif
                <div style="font-weight: bold; font-size: 10pt; color: #0f172a;">Samuel Ekunyan</div>
                <div style="font-size: 9pt; color: #334155;">Lead Developer &amp; Founder, ExtremeSolutions</div>
                <div style="font-size: 8.5pt; color: #64748b; margin-top: 1pt;">samuel@ekunyansamuel.dev &bull; sms.extremesolutions.com.ng</div>
                <div style="font-size: 9pt; color: #0f172a; font-weight: bold; margin-top: 2pt;">WhatsApp: +2348036375292</div>
            </td>
        </tr>
    </table>

</div>
</body>
</html>
