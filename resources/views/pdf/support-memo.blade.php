<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ExtremeSolutions &mdash; Strategic Deployment Memorandum</title>
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
                <span style="font-size: 7.8pt; color: #059669; text-transform: uppercase; font-weight: bold; letter-spacing: 0.5pt;">Enterprise Systems Architecture &amp; Software Engineering</span><br>
                <span style="font-size: 7.5pt; color: #64748b;">extremesolutions.com.ng &bull; sms.extremesolutions.com.ng</span>
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
                    Subject: Strategic Software Deployment &mdash; Commercial Infrastructure Rollout
                </div>
            </td>
        </tr>
    </table>

    <!-- Letter Body Prose -->
    <p>
        ExtremeSolutions is a software engineering company building modern digital infrastructure, custom enterprise platforms, and applied AI systems for African institutions and businesses. We engineer end-to-end software&mdash;spanning high-concurrency commercial platforms, operational systems, and intelligent digital workflows&mdash;designed to replace fragile manual processes with fast, resilient technology. We are not an NGO, a charity, or a consultancy selling billable hours; we build, deploy, and operate proprietary digital machinery that systematically eliminates administrative guesswork and manual friction.
    </p>

    <p>
        Our immediate commercial focus is secondary institutions&mdash;not because we are an education company, but because it is an enterprise market burdened by severe operational friction and immediate paying demand. Across the country, schools operate under three weeks of administrative paralysis at the end of every term compiling continuous assessments and broadsheets by hand. We built and shipped the antidote: <strong>ExtremeSolutions School OS</strong> (sms.extremesolutions.com.ng) is live in production today, completely automating Continuous Assessment scoring, delivering 1-click terminal broadsheets, reconciling tuition fee ledgers, and embedding routine Computer-Based Testing directly into weekly schedules.
    </p>

    <p>
        Our commercial revenue architecture is built for rapid, aggressive self-sufficiency. We charge schools an integrated termly subscription of <strong>&#8358;500 to &#8358;1,000 per student</strong>, collected seamlessly through standard institutional billings (generating &#8358;150,000 to &#8358;300,000 every single term from an average 250-student campus). Because proprietary software operates with near-zero marginal replication cost, <strong>onboarding just 3 secondary schools makes our core cloud infrastructure, server capacity, and frontline field operations permanently self-funding</strong> without requiring subsequent outside capital.
    </p>

    <p>
        In basic institutions, software alone cannot close contracts; physical execution does. Institutions pay immediately upon experiencing their first automated terminal broadsheet run. To scale this transition, our technical deployment team physically enters campus clusters, migrates physical paper registers into our secure database within 48 hours, and certifies faculty on-site. Once an institution completes its first broadsheet cycle on our platform, operational switching costs make retention near 100%. We are opening a focused Upfront Deployment Pool of <strong>&#8358;150,000 to &#8358;300,000</strong> to execute this direct cluster rollout:
    </p>

    <ul style="list-style-type: disc;">
        <li><strong>On-Site Campus Penetration:</strong> Direct technical presentations with school proprietors and governing boards.</li>
        <li><strong>48-Hour Rapid Data Migration:</strong> Complete digitization and verification of paper class records.</li>
        <li><strong>Faculty Certification &amp; CBT Induction:</strong> Hands-on staff training and student digital testing activation.</li>
    </ul>

    <!-- Executive Settlement Card -->
    <table class="card-table">
        <tr>
            <td colspan="2" class="card-header-cell">
                Deployment Capital Settlement Details
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
                <span style="font-size: 7pt; color: #64748b; display: block;">Payment Purpose</span>
                <span style="color: #334155; font-size: 8pt;">EXS Deployment / {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Valued Partner') }}</span>
            </td>
        </tr>
    </table>

    <p style="font-size: 7.5pt; font-style: italic; color: #334155; margin: 0 0 5pt 0; line-height: 1.30;">
        Your capital directly mobilizes a frontline technical deployment force that transforms broken institutional workflows into automated, recurring-revenue digital infrastructure. We are building the operational backbone of modern African institutions&mdash;starting on the ground, school by school.
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
