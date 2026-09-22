<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ExtremeSolutions &mdash; Commercial Advance Memorandum</title>
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
            font-size: 9.5pt;
            line-height: 1.42;
            color: #1e293b;
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
            padding-bottom: 8pt;
            border-bottom: 1.5pt solid #0f172a;
        }

        .meta-table td {
            padding-top: 6pt;
            padding-bottom: 6pt;
        }

        p {
            margin: 0 0 6.5pt 0;
            text-align: justify;
            text-justify: inter-word;
            word-wrap: break-word;
        }

        .bank-card-cell {
            background-color: #f8fafc;
            border: 0.75pt solid #cbd5e1;
            padding: 6pt 8pt;
            border-radius: 3pt;
        }

        .bank-table td {
            font-size: 8.5pt;
            padding: 2.5pt 4pt;
            vertical-align: top;
        }

        .signature-table td {
            vertical-align: top;
            padding-top: 5pt;
            border-top: 0.5pt solid #e2e8f0;
        }
    </style>
</head>
<body>
<div class="page-container">

    <!-- Letterhead Header Table (Strict CSS 2.1 Table Layout) -->
    <table class="header-table">
        <tr>
            <td style="width: 72%; text-align: left; vertical-align: top;">
                @if(!empty($logoBase64))
                    <img src="{{ $logoBase64 }}" style="height: 24pt; width: auto; vertical-align: middle; margin-right: 6pt;" alt="ExtremeSolutions">
                @endif
                <strong style="font-size: 14pt; color: #0f172a; letter-spacing: 0.5pt; vertical-align: middle;">EXTREMESOLUTIONS</strong><br>
                <span style="font-size: 8.5pt; color: #047857; text-transform: uppercase; font-weight: bold;">Educational Technology &amp; Systems Deployment</span><br>
                <span style="font-size: 8pt; color: #64748b;">Lagos, Nigeria &bull; extremesolutions.com.ng &bull; sms.extremesolutions.com.ng</span>
            </td>
            <td style="width: 28%; text-align: right; vertical-align: top;">
                <span style="font-size: 9pt; color: #0f172a; font-weight: bold;">{{ $dateStr }}</span><br>
                <span style="font-size: 8pt; color: #64748b;">Ref: {{ $refCode }}</span>
            </td>
        </tr>
    </table>

    <!-- Recipient & Subject Meta -->
    <table class="meta-table">
        <tr>
            <td style="width: 100%; vertical-align: top;">
                <div style="font-size: 9.5pt; font-weight: bold; color: #0f172a;">
                    Dear {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Valued Partner') }},
                </div>
                <div style="font-size: 9.2pt; font-weight: bold; color: #0f172a; margin-top: 3pt; padding-bottom: 3pt; border-bottom: 0.5pt solid #cbd5e1;">
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

    <!-- Dedicated Account Box (Strict Table-Safe Container to Prevent Right-Margin Blowout) -->
    <table style="margin-top: 4pt; margin-bottom: 6pt;">
        <tr>
            <td class="bank-card-cell" style="width: 100%;">
                <table class="bank-table">
                    <tr>
                        <td style="width: 50%;"><strong>Bank Name:</strong> Wema Bank Plc</td>
                        <td style="width: 50%;"><strong>Account Name:</strong> Samuel Ekunyan</td>
                    </tr>
                    <tr>
                        <td style="width: 50%;"><strong>Account Number:</strong> 0236642821</td>
                        <td style="width: 50%;"><strong>Narration:</strong> EXS Partner Advance / {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Partner') }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <p style="font-size: 7.5pt; font-style: italic; color: #475569; margin: 1pt 0 5pt 0;">
        Backers receive a formal signed term sheet, direct monthly audit reports, and priority disbursement from onboarded school revenues.
    </p>

    <!-- Sign-off Block (Exact Requested Format, Strictly Contained) -->
    <table class="signature-table" style="margin-top: 4pt; page-break-inside: avoid;">
        <tr>
            <td style="width: 100%;">
                <div style="font-size: 8.5pt; color: #334155; margin-bottom: 1pt;">Yours sincerely,</div>
                @if(!empty($sigBase64))
                    <img src="{{ $sigBase64 }}" style="height: 24pt; width: auto; margin: 2pt 0 1pt 0;" alt="Samuel Ekunyan Signature">
                @endif
                <div style="font-weight: bold; font-size: 9.5pt; color: #0f172a;">Samuel Ekunyan</div>
                <div style="font-size: 8.5pt; color: #334155;">Lead Developer &amp; Founder, ExtremeSolutions</div>
                <div style="font-size: 7.8pt; color: #64748b;">samuel@ekunyansamuel.dev &bull; sms.extremesolutions.com.ng</div>
                <div style="font-size: 8.5pt; color: #0f172a; font-weight: bold; margin-top: 1pt;">WhatsApp: +2348036375292</div>
            </td>
        </tr>
    </table>

</div>
</body>
</html>
