<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ExtremeSolutions &mdash; Commercial Deployment Memorandum</title>
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
            font-size: 8.8pt;
            line-height: 1.38;
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
            font-size: 9.2pt;
            font-weight: bold;
            color: #0f172a;
            margin-bottom: 2pt;
        }

        .subject-line {
            font-size: 8.8pt;
            font-weight: bold;
            color: #0f172a;
            border-bottom: 0.5pt solid #cbd5e1;
            padding-bottom: 2pt;
            margin-bottom: 6pt;
        }

        p {
            margin: 0 0 5pt 0;
            text-align: justify;
        }

        ul {
            margin: 2pt 0 5pt 13pt;
            padding: 0;
        }

        li {
            margin-bottom: 2pt;
            font-size: 8.4pt;
        }

        .table-bank {
            width: 100%;
            border-collapse: collapse;
            border: 0.75pt solid #cbd5e1;
            background: #f8fafc;
            margin: 4pt 0;
            font-size: 8pt;
        }

        .table-bank td {
            padding: 3.5pt 7pt;
            vertical-align: top;
        }

        .signature-block {
            margin-top: 6pt;
            padding-top: 4pt;
            border-top: 0.5pt solid #e2e8f0;
            page-break-inside: avoid;
        }

        .sig-img {
            height: 22pt;
            width: auto;
            margin: 2pt 0 1pt 0;
        }
    </style>
</head>
<body>
<div class="page-wrap">

<!-- Letterhead -->
<table class="header-table">
    <tr>
        <td style="width: 72%;">
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
        <td style="width: 28%;" class="header-date">
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
    Subject: Commercial Software Deployment Across Nigerian Secondary Schools
</div>

<p>
    ExtremeSolutions was founded on a singular conviction: the most critical institutions in Africa should not be held back by manual paperwork. We are not an NGO or a charity; we are a disciplined commercial software venture deploying an all-in-one School Operating System (sms.extremesolutions.com.ng) specifically engineered to solve operational bottlenecks in Nigerian secondary education.
</p>

<p>
    Across the country, hundreds of secondary schools have computer laboratories that sit idle while administrations spend three exhausting weeks compiling Continuous Assessments and terminal broadsheets manually with calculators. We built and shipped the operational engine: ExtremeSolutions School OS is live today, completely automating Continuous Assessment scoring, generating 1-click broadsheets, reconciling tuition payments, and embedding routine computer-based testing directly into the school's weekly schedule.
</p>

<p>
    Our commercial model is built for immediate self-sufficiency. We charge schools an integrated termly subscription of <strong>&#8358;500 to &#8358;1,000 per student</strong>, built directly into standard school fees (generating &#8358;150,000 to &#8358;300,000 per term for an average 250-student school). Because software scales with near-zero marginal cost, <strong>onboarding just 3 secondary schools makes our core infrastructure, cloud servers, and field operations completely self-sustaining</strong> without requiring subsequent outside capital.
</p>

<p>
    In basic education, software alone cannot close contracts; physical execution does. Schools pay after their first successful broadsheet run, requiring our team to physically enter campuses, digitize student registers within 48 hours, and train staff on-site. Once an institution completes its first broadsheet run on our platform, retention is near 100%. We are raising a focused upfront Rollout Deployment Pool of <strong>&#8358;150,000 to &#8358;300,000</strong> to execute this direct cluster rollout:
</p>

<ul style="list-style-type: disc;">
    <li><strong>Field Transit &amp; Campus Demos:</strong> Direct in-person presentations with school proprietors and principals.</li>
    <li><strong>48-Hour Assisted Onboarding:</strong> Rapid digitizing and verification of physical class registers.</li>
    <li><strong>Teacher &amp; Student Induction:</strong> Hands-on staff training and student CBT orientation sessions.</li>
</ul>

<!-- Settlement Account Details -->
<table class="table-bank">
    <tr>
        <td style="width: 50%;"><strong>Bank Name:</strong> Wema Bank Plc</td>
        <td style="width: 50%;"><strong>Account Name:</strong> Samuel Ekunyan</td>
    </tr>
    <tr>
        <td style="width: 50%;"><strong>Account Number:</strong> 0236642821</td>
        <td style="width: 50%;"><strong>Narration:</strong> EXS Support / {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Valued Partner') }}</td>
    </tr>
</table>

<p style="font-size: 7.2pt; font-style: italic; color: #475569; margin: 2pt 0 4pt 0;">
    Backers receive direct monthly deployment and audit updates, partner recognition on the deployment portal, and the assurance that their support funds a permanent, self-funding commercial system.
</p>

<!-- Sign-off Block (Exact Format) -->
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
