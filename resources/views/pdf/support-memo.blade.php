<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ExtremeSolutions &mdash; Deployment Memorandum</title>
    <style>
        @page {
            margin: 0px;
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
            padding: 38pt 42pt 32pt 42pt;
            font-size: 9pt;
            line-height: 1.38;
            color: #1e293b;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .header-table td {
            vertical-align: top;
            padding-bottom: 6pt;
            border-bottom: 1.5pt solid #0f172a;
        }

        .meta-table td {
            padding-top: 6pt;
            padding-bottom: 5pt;
            border-bottom: 0.5pt solid #cbd5e1;
        }

        p {
            margin: 0 0 5.5pt 0;
            text-align: justify;
            text-justify: inter-word;
            word-wrap: break-word;
        }

        ul {
            margin: 2pt 0 5.5pt 14pt;
            padding: 0;
        }

        li {
            margin-bottom: 1.5pt;
            font-size: 8.5pt;
            line-height: 1.35;
        }

        .card-table {
            width: 100%;
            margin: 4pt 0 5pt 0;
            border: 0.75pt solid #cbd5e1;
            background-color: #f8fafc;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .card-header-cell {
            background-color: #f1f5f9;
            padding: 3pt 6pt;
            border-bottom: 0.75pt solid #cbd5e1;
            font-size: 7.5pt;
            font-weight: bold;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 0.5pt;
        }

        .card-cell {
            padding: 3.5pt 6pt;
            font-size: 8.2pt;
            color: #1e293b;
            vertical-align: top;
        }

        .card-cell-bordered {
            border-bottom: 0.5pt solid #e2e8f0;
        }

        .signature-table td {
            vertical-align: top;
            padding-top: 4pt;
            border-top: 0.5pt solid #cbd5e1;
        }
    </style>
</head>
<body>

    <!-- Letterhead Header Table -->
    <table class="header-table">
        <tr>
            <td style="width: 72%; text-align: left; vertical-align: top;">
                @if(!empty($logoBase64))
                    <img src="{{ $logoBase64 }}" style="height: 22pt; width: auto; vertical-align: middle; margin-right: 5pt;" alt="ExtremeSolutions">
                @endif
                <strong style="font-size: 13.5pt; color: #0f172a; letter-spacing: 0.5pt; vertical-align: middle;">EXTREMESOLUTIONS</strong><br>
                <span style="font-size: 7.8pt; color: #059669; text-transform: uppercase; font-weight: bold; letter-spacing: 0.5pt;">Educational Technology &amp; Systems Deployment</span><br>
                <span style="font-size: 7.2pt; color: #64748b;">Lagos, Nigeria &bull; extremesolutions.com.ng &bull; sms.extremesolutions.com.ng</span>
            </td>
            <td style="width: 28%; text-align: right; vertical-align: top;">
                <span style="font-size: 8.8pt; color: #0f172a; font-weight: bold;">{{ $dateStr }}</span><br>
                <span style="font-size: 7.5pt; color: #64748b;">Ref: {{ $refCode }}</span>
            </td>
        </tr>
    </table>

    <!-- Recipient & Subject Meta -->
    <table class="meta-table" style="margin-bottom: 6pt;">
        <tr>
            <td style="width: 100%; vertical-align: top;">
                <div style="font-size: 9.2pt; font-weight: bold; color: #0f172a; margin-bottom: 2pt;">
                    Dear {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Valued Partner') }},
                </div>
                <div style="font-size: 8.8pt; font-weight: bold; color: #0f172a;">
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

    <!-- Executive Settlement Card -->
    <table class="card-table">
        <tr>
            <td colspan="2" class="card-header-cell">
                Deployment Support Settlement Details
            </td>
        </tr>
        <tr>
            <td style="width: 50%;" class="card-cell card-cell-bordered">
                <span style="font-size: 7pt; color: #64748b; display: block;">Bank Name</span>
                <strong style="color: #0f172a; font-size: 8.5pt;">Wema Bank Plc</strong>
            </td>
            <td style="width: 50%;" class="card-cell card-cell-bordered">
                <span style="font-size: 7pt; color: #64748b; display: block;">Account Name</span>
                <strong style="color: #0f172a; font-size: 8.5pt;">Samuel Ekunyan</strong>
            </td>
        </tr>
        <tr>
            <td style="width: 50%;" class="card-cell">
                <span style="font-size: 7pt; color: #64748b; display: block;">Account Number</span>
                <strong style="font-size: 9.5pt; color: #0f172a; letter-spacing: 0.5pt;">0236642821</strong>
            </td>
            <td style="width: 50%;" class="card-cell">
                <span style="font-size: 7pt; color: #64748b; display: block;">Payment Narration</span>
                <span style="color: #334155; font-size: 8pt;">EXS Support / {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Valued Partner') }}</span>
            </td>
        </tr>
    </table>

    <p style="font-size: 7.5pt; font-style: italic; color: #475569; margin: 0 0 5pt 0; line-height: 1.30;">
        Backers receive direct monthly deployment and audit updates, partner recognition on the deployment portal, and the assurance that their support funds a permanent, self-funding commercial system.
    </p>

    <!-- Sign-off Block (Exact Format) -->
    <table class="signature-table" style="page-break-inside: avoid;">
        <tr>
            <td style="width: 100%;">
                <div style="font-size: 8.5pt; color: #334155; margin-bottom: 1pt;">Yours sincerely,</div>
                @if(!empty($sigBase64))
                    <img src="{{ $sigBase64 }}" style="height: 22pt; width: auto; margin: 2pt 0;" alt="Samuel Ekunyan Signature">
                @endif
                <div style="font-weight: bold; font-size: 9.2pt; color: #0f172a;">Samuel Ekunyan</div>
                <div style="font-size: 8.2pt; color: #334155;">Lead Developer &amp; Founder, ExtremeSolutions</div>
                <div style="font-size: 7.8pt; color: #64748b; margin-top: 1pt;">samuel@ekunyansamuel.dev &bull; sms.extremesolutions.com.ng</div>
                <div style="font-size: 8.5pt; color: #0f172a; font-weight: bold; margin-top: 1pt;">WhatsApp: +2348036375292</div>
            </td>
        </tr>
    </table>

</body>
</html>
