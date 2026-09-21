<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ExtremeSolutions Support &amp; Backer Brief</title>
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
            <div class="header-dept">Deployment &amp; Expansion Memorandum</div>
            <div style="font-size: 7pt; color: #64748b; margin-top: 1pt;">Lagos, Nigeria &bull; extremesolutions.com.ng &bull; sms.extremesolutions.com.ng</div>
        </td>
        <td style="width: 40%;" class="header-meta">
            <strong>Date:</strong> {{ $dateStr }}<br>
            <strong>Ref:</strong> {{ $refCode }}
        </td>
    </tr>
</table>

<!-- Recipient Salutation -->
<div class="salutation">
    Dear {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Valued Partner') }},
</div>

<!-- Subject Line -->
<div class="subject-box">
    RE: Fueling Our Commercial Rollout &mdash; Deploying ExtremeSolutions Across Nigerian Secondary Schools
</div>

<p>
    ExtremeSolutions is building a sustainable educational technology enterprise. We are not an NGO or a charity; we are a commercial systems venture deploying an all-in-one School Operating System (sms.extremesolutions.com.ng) to eliminate manual operational friction in Nigerian secondary institutions.
</p>

<div class="section-heading">The Operational Problem &amp; Commercial Opportunity</div>
<p>
    <strong>Underutilized Technology &amp; CBT Anxiety:</strong> Secondary schools have computer labs that sit idle, offering weekly theory notes instead of practical screen habits. Students falter during national exams (JAMB CBT) due to lack of timed navigation and software familiarity.
</p>
<p>
    <strong>End-of-Term Broadsheet Delays:</strong> Schools spend 2 to 3 weeks compiling Continuous Assessments (CA) with calculators, causing calculation errors, delayed vacations, and uncollected tuition balances.
</p>
<div style="background: #f0fdf4; border: 0.5pt solid #86efac; padding: 3pt 5pt; font-size: 7.5pt; margin-bottom: 4pt; color: #065f46;">
    <strong>The Solution:</strong> ExtremeSolutions automates CA scoring, generates 1-click terminal broadsheets, reconciles tuition balances, and embeds routine CBT testing directly into the school's termly calendar.
</div>

<div class="section-heading">Commercial Revenue Model: Built for Self-Sufficiency</div>
<p>
    We charge schools a recurring fee of <strong>₦500 to ₦1,000 per student/term</strong>, integrated into regular school fees (₦150,000 – ₦300,000 per term for an average 250-student school). <strong>Onboarding just 3 secondary schools makes our core infrastructure completely self-sustaining.</strong>
</p>

<div class="section-heading">Why We Are Raising an Upfront Deployment Fund</div>
<p>
    Schools pay after their first successful broadsheet run. Software alone cannot close contracts; physical execution does. Our team physically enters campuses, migrates physical registers, and trains staff on-site.
</p>
<p>
    We are raising a lean <strong>Rollout Deployment Pool of ₦150,000 to ₦300,000</strong> to fund this direct acquisition bridge:
</p>
<ul style="list-style-type: disc;">
    <li><strong>Field Transit &amp; Outreach:</strong> Transport for direct school demos with proprietors and principals.</li>
    <li><strong>48-Hour Assisted Onboarding:</strong> Digitizing student registers and grading schemes.</li>
    <li><strong>Staff Induction Materials:</strong> Printing teacher operation handbooks and student CBT orientation guides.</li>
</ul>

<div class="section-heading">Deployment Support Account (Direct Execution)</div>
<table style="width: 100%; border: 0.75pt solid #cbd5e1; background: #f8fafc; padding: 4pt 6pt; margin: 3pt 0; font-size: 7.5pt;">
    <tr>
        <td style="width: 50%;"><strong>Bank Name:</strong> Wema Bank Plc</td>
        <td style="width: 50%;"><strong>Account Name:</strong> Samuel Ekunyan</td>
    </tr>
    <tr>
        <td style="width: 50%;"><strong>Account Number:</strong> <span style="font-family: monospace; font-weight: bold; font-size: 8.5pt;">0236642821</span></td>
        <td style="width: 50%;"><strong>Narration:</strong> EXS Support / {{ !empty($name) && $name !== 'Sir/Madam' ? $name : request('name', 'Partner') }}</td>
    </tr>
</table>

<p style="font-size: 7pt; font-style: italic; color: #475569; margin-top: 3pt;">
    Backers receive direct monthly photo/audit reports, partner recognition on the school portal, and the assurance that their capital builds a self-funding enterprise.
</p>

<!-- Signature Block -->
<div class="signature-block">
    <table class="sig-table">
        <tr>
            <td style="width: 60%;">
                <p style="margin-bottom: 2pt; font-size: 7.5pt; color: #64748b;">Warm regards,</p>
                @if(!empty($sigBase64))
                    <img src="{{ $sigBase64 }}" class="sig-img" alt="Samuel Ekunyan">
                @endif
                <div style="font-weight: bold; font-size: 8.5pt; color: #0f172a;">Samuel Ekunyan</div>
                <div style="font-size: 7pt; color: #475569;">Founder &amp; Principal Systems Architect, ExtremeSolutions</div>
                <div style="font-size: 7pt; color: #64748b;">samuel@ekunyansamuel.dev &bull; sms.extremesolutions.com.ng</div>
                <div style="font-size: 7pt; color: #0f172a; font-weight: bold; margin-top: 1pt;">Direct Line / WhatsApp: +234 905 258 5622</div>
            </td>
            <td style="width: 40%; text-align: right; font-size: 6.5pt; color: #64748b; font-family: monospace;">
                <div>MEMORANDUM ID: {{ $refCode }}</div>
                <div>CLASSIFICATION: COMMERCIAL DEPLOYMENT</div>
            </td>
        </tr>
    </table>
</div>

<!-- Footer Note -->
<div class="footer-note">
    EXTREMESOLUTIONS &bull; BUILDING DIGITAL SYSTEMS THAT LAST
</div>

</body>
</html>
