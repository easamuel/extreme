<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ExtremeSolutions &mdash; Deployment Memorandum</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 15mm 15mm 15mm 15mm; /* Explicit print boundary */
        }

        * {
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        html, body {
            margin: 0;
            padding: 0;
            background: #ffffff;
            width: 100%;
        }

        body {
            font-family: 'DejaVu Sans', Helvetica, Arial, sans-serif;
            font-size: 9.5pt;
            line-height: 1.42;
            color: #1e293b;
            page-break-inside: avoid;
        }

        .page-container {
            width: 100%;
            page-break-inside: avoid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .header-table td {
            vertical-align: top;
            padding-bottom: 10px;
            border-bottom: 1.5pt solid #0f172a;
        }

        .meta-table td {
            padding-top: 6px;
            padding-bottom: 6px;
        }

        p {
            margin: 0 0 7px 0;
            text-align: justify;
            text-justify: inter-word;
            word-wrap: break-word;
        }

        ul {
            margin: 3px 0 7px 16px;
            padding: 0;
        }

        li {
            margin-bottom: 2.5px;
            font-size: 9pt;
        }

        .bank-card-cell {
            background-color: #f8fafc;
            border: 1px solid #cbd5e1;
            padding: 7px 10px;
            border-radius: 4px;
        }

        .bank-table td {
            font-size: 8.5pt;
            padding: 3px 5px;
            vertical-align: top;
        }

        .signature-table td {
            vertical-align: top;
            padding-top: 6px;
            border-top: 0.5pt solid #e2e8f0;
        }
    </style>
</head>
<body>
<div class="page-container">

    <!-- Letterhead Header Table (Strict CSS 2.1, No Nested Tables) -->
    <table class="header-table">
        <tr>
            <td style="text-align: left; vertical-align: top;">
                @if(!empty($logoBase64))
                    <img src="{{ $logoBase64 }}" style="height: 24pt; width: auto; vertical-align: middle; margin-right: 6px;" alt="ExtremeSolutions">
                @endif
                <strong style="font-size: 14pt; color: #0f172a; letter-spacing: 0.5px; vertical-align: middle;">EXTREMESOLUTIONS</strong><br>
                <span style="font-size: 8.5pt; color: #047857; text-transform: uppercase; font-weight: bold;">Educational Technology &amp; Systems Deployment</span><br>
                <span style="font-size: 8pt; color: #64748b;">Lagos, Nigeria &bull; extremesolutions.com.ng &bull; sms.extremesolutions.com.ng</span>
            </td>
            <td style="text-align: right; width: 140px; vertical-align: top;">
                <span style="font-size: 9pt; color: #0f172a; font-weight: bold;">{{ $dateStr }}</span><br>
                <span style="font-size: 8pt; color: #64748b;">Ref: {{ $refCode }}</span>
            </td>
        </tr>
    </table>

    <!-- Recipient & Subject Meta -->
    <table class="meta-table">
        <tr>
            <td style="vertical-align: top;">
                <div style="font-size: 9.5pt; font-weight: bold; color: #0f172a;">
                    Dear {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Valued Partner') }},
                </div>
                <div style="font-size: 9.2pt; font-weight: bold; color: #0f172a; margin-top: 3px; padding-bottom: 3px; border-bottom: 0.5pt solid #cbd5e1;">
                    Subject: Commercial Software Deployment Across Nigerian Secondary Schools
                </div>
            </td>
        </tr>
    </table>

    <!-- Letter Body Prose -->
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

    <!-- Dedicated Account Box (Strict Table-Safe Container to Prevent Right-Margin Blowout) -->
    <table style="margin-top: 4px; margin-bottom: 6px;">
        <tr>
            <td class="bank-card-cell">
                <table class="bank-table">
                    <tr>
                        <td style="width: 50%;"><strong>Bank Name:</strong> Wema Bank Plc</td>
                        <td style="width: 50%;"><strong>Account Name:</strong> Samuel Ekunyan</td>
                    </tr>
                    <tr>
                        <td style="width: 50%;"><strong>Account Number:</strong> 0236642821</td>
                        <td style="width: 50%;"><strong>Narration:</strong> EXS Support / {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Valued Partner') }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <p style="font-size: 7.5pt; font-style: italic; color: #475569; margin: 1px 0 5px 0;">
        Backers receive direct monthly deployment and audit updates, partner recognition on the deployment portal, and the assurance that their support funds a permanent, self-funding commercial system.
    </p>

    <!-- Sign-off Block (Exact Requested Format, Strictly Contained) -->
    <table class="signature-table" style="margin-top: 4px; page-break-inside: avoid;">
        <tr>
            <td>
                <div style="font-size: 8.5pt; color: #334155; margin-bottom: 1px;">Yours sincerely,</div>
                @if(!empty($sigBase64))
                    <img src="{{ $sigBase64 }}" style="height: 24pt; width: auto; margin: 2px 0 1px 0;" alt="Samuel Ekunyan Signature">
                @endif
                <div style="font-weight: bold; font-size: 9.5pt; color: #0f172a;">Samuel Ekunyan</div>
                <div style="font-size: 8.5pt; color: #334155;">Lead Developer &amp; Founder, ExtremeSolutions</div>
                <div style="font-size: 7.8pt; color: #64748b;">samuel@ekunyansamuel.dev &bull; sms.extremesolutions.com.ng</div>
                <div style="font-size: 8.5pt; color: #0f172a; font-weight: bold; margin-top: 1px;">WhatsApp: +2348036375292</div>
            </td>
        </tr>
    </table>

</div>
</body>
</html>
