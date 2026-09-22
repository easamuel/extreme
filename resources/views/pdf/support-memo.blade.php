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
        ExtremeSolutions is a software engineering company building modern digital infrastructure, custom enterprise platforms, and applied AI systems for institutions and businesses. We engineer end-to-end software, spanning high-concurrency commercial platforms, operational systems, and intelligent digital workflows designed to replace fragile manual processes with fast, resilient technology.
    </p>

    <p>
        Our primary commercial rollout targets secondary institutions&mdash;a market with immediate operational need and strong recurring demand. Most secondary schools lose up to three weeks at the end of every term compiling continuous assessments and report sheets by hand. To solve this, we launched <strong>ExtremeSolutions School OS</strong> (sms.extremesolutions.com.ng). The platform automates continuous assessment scoring, generates terminal broadsheets in one click, tracks tuition payments, and integrates routine computer-based testing directly into the school calendar.
    </p>

    <p>
        Our commercial revenue architecture is built for rapid, aggressive self-sufficiency. We charge schools an integrated termly subscription of <strong>&#8358;500 to &#8358;1,000 per student</strong>, collected seamlessly through standard institutional billings (generating &#8358;150,000 to &#8358;300,000 every single term from an average 250-student campus). Because proprietary software operates with near-zero marginal replication cost, <strong>onboarding just 3 secondary schools makes our core cloud infrastructure, server capacity, and frontline field operations permanently self-funding</strong> without requiring subsequent outside capital.
    </p>

    <p>
        For schools, seeing is believing: institutions subscribe the moment their first terminal broadsheet is produced without errors. Our deployment team handles the entire transition by digitizing paper registers in 48 hours and training teachers on campus. Once onboarded, schools never return to manual paperwork. We are raising a <strong>&#8358;150,000 to &#8358;300,000</strong> rollout fund to power this direct on-site setup:
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

    <!-- Supporter Partnership Terms -->
    <div style="margin: 3pt 0 4pt 0; padding-top: 3pt; border-top: 0.5pt solid #cbd5e1;">
        <div style="font-size: 7.5pt; font-weight: bold; color: #0f172a; text-transform: uppercase; letter-spacing: 0.3pt; margin-bottom: 1.5pt;">
            How We Partner With Our Supporters:
        </div>
        <p style="font-size: 7.3pt; color: #334155; margin: 0 0 2pt 0; line-height: 1.25;">
            Your contribution directly deploys our on-ground technical team to digitize classrooms and establish recurring commercial revenue. In recognition of your backing, we offer:
        </p>
        <ul style="margin: 1pt 0 2pt 10pt; padding: 0;">
            <li style="font-size: 7.1pt; line-height: 1.25; margin-bottom: 1pt;"><strong>Institutional Brand Placement:</strong> Your name or company brand featured prominently as a Founding Sponsor across our school portal, report cards, and digital platforms.</li>
            <li style="font-size: 7.1pt; line-height: 1.25; margin-bottom: 1pt;"><strong>Preferred Technical Services:</strong> Direct engineering support and a 25% lifetime discount on any custom software, web platform, or AI development for your personal business or organization.</li>
            <li style="font-size: 7.1pt; line-height: 1.25; margin-bottom: 1pt;"><strong>Network Amplification:</strong> Periodic brand spotlights and mentions across ExtremeSolutions media channels and technical publications as our footprint grows.</li>
        </ul>
    </div>

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
