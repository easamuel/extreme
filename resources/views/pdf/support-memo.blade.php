<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ExtremeSolutions Institutional Vision &amp; Mission Memorandum</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 16mm 14mm 16mm 14mm;
        }

        * {
            box-sizing: border-box;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #18181b;
            font-size: 9pt;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            background: #ffffff;
        }

        table.header-table {
            width: 100%;
            border-collapse: collapse;
            border-bottom: 2pt solid #18181b;
            padding-bottom: 8pt;
            margin-bottom: 12pt;
        }

        table.header-table td {
            vertical-align: middle;
        }

        .logo-img {
            height: 36pt;
            width: auto;
        }

        .motto-verse {
            font-size: 7.5pt;
            font-style: italic;
            color: #52525b;
            margin-top: 3pt;
        }

        .header-meta {
            text-align: right;
            font-size: 7.5pt;
            color: #52525b;
            line-height: 1.35;
            font-family: monospace;
        }

        .badge {
            display: inline-block;
            background: #f4f4f5;
            color: #18181b;
            border: 0.5pt solid #d4d4d8;
            font-weight: bold;
            padding: 2pt 5pt;
            font-size: 7pt;
            border-radius: 2pt;
            margin-bottom: 2pt;
        }

        .recipient-card {
            background: #fafafa;
            border: 0.75pt solid #e4e4e7;
            border-left: 2.5pt solid #18181b;
            padding: 6pt 8pt;
            margin-bottom: 10pt;
            font-size: 8pt;
        }

        .memo-title {
            font-size: 11pt;
            font-weight: bold;
            color: #18181b;
            text-transform: uppercase;
            letter-spacing: 0.5pt;
            margin: 0 0 8pt 0;
            border-bottom: 0.5pt solid #e4e4e7;
            padding-bottom: 3pt;
        }

        .salutation {
            font-size: 9.5pt;
            font-weight: bold;
            margin-bottom: 6pt;
        }

        p {
            margin: 0 0 6pt 0;
            text-align: justify;
        }

        .section-tag {
            font-size: 8pt;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.8pt;
            color: #18181b;
            margin: 8pt 0 3pt 0;
            border-bottom: 0.5pt dotted #d4d4d8;
            padding-bottom: 1pt;
        }

        table.stats-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 4pt;
            margin: 6pt 0 8pt -4pt;
        }

        table.stats-table td {
            width: 33.33%;
            background: #fafafa;
            border: 0.5pt solid #e4e4e7;
            padding: 6pt;
            vertical-align: top;
        }

        .stat-num {
            font-size: 12pt;
            font-weight: bold;
            font-family: monospace;
            color: #18181b;
        }

        .stat-label {
            font-size: 7pt;
            font-weight: bold;
            text-transform: uppercase;
            color: #52525b;
            margin-top: 1pt;
        }

        .stat-desc {
            font-size: 7pt;
            color: #71717a;
            line-height: 1.3;
            margin-top: 2pt;
        }

        .callout-box {
            background: #f4f4f5;
            border: 0.5pt solid #d4d4d8;
            padding: 6pt 8pt;
            margin: 6pt 0 8pt 0;
            font-size: 8pt;
        }

        .signature-block {
            margin-top: 10pt;
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
            height: 32pt;
            width: auto;
            margin-bottom: 2pt;
        }

        .footer-note {
            margin-top: 10pt;
            padding-top: 4pt;
            border-top: 0.5pt solid #e4e4e7;
            font-size: 6.5pt;
            color: #71717a;
            text-align: center;
            font-family: monospace;
        }

        @media screen {
            .print-bar {
                background: #18181b;
                color: #ffffff;
                padding: 10px 16px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-family: sans-serif;
                font-size: 13px;
                margin-bottom: 16px;
            }
            .print-btn {
                background: #22c55e;
                color: #000;
                font-weight: bold;
                padding: 6px 14px;
                border-radius: 4px;
                border: none;
                cursor: pointer;
            }
        }
        @media print {
            .print-bar { display: none !important; }
        }
    </style>
</head>
<body>

@if(!empty($isPrintFallback))
<div class="print-bar">
    <div><strong>ExtremeSolutions Institutional Memo:</strong> Secondary Education Infrastructure</div>
    <button onclick="window.print()" class="print-btn">Print / Save as PDF</button>
</div>
<script>
    window.addEventListener('load', function() { setTimeout(function() { window.print(); }, 400); });
</script>
@endif

<!-- Corporate Header -->
<table class="header-table">
    <tr>
        <td style="width: 58%;">
            @if(!empty($logoBase64))
                <img src="{{ $logoBase64 }}" class="logo-img" alt="ExtremeSolutions">
            @else
                <div style="font-size: 14pt; font-weight: bold; color: #18181b;">EXTREMESOLUTIONS</div>
            @endif
            <div class="motto-verse">"Write the vision and make it plain on tablets, that he may run that readeth it." &mdash; Habakkuk 2:2</div>
        </td>
        <td style="width: 42%;" class="header-meta">
            <span class="badge">INSTITUTIONAL MEMO &bull; UNLISTED</span><br>
            <strong>Ref:</strong> {{ $refCode }}<br>
            <strong>Date:</strong> {{ $dateStr }}<br>
            <strong>Source:</strong> Office of the Founder &bull; Lagos, NG
        </td>
    </tr>
</table>

<!-- Recipient Identification -->
<div class="recipient-card">
    <strong>DESIGNATED PARTNER / ALLY:</strong> {{ $name }} &nbsp;|&nbsp; 
    <strong>ORIGINATING INITIATIVE:</strong> Secondary School Management &amp; CBT Infrastructure Initiative
</div>

<!-- Title -->
<div class="memo-title">
    The Grassroots Wedge: Why Secondary Education is Africa's Critical Talent Bottleneck
</div>

<!-- Salutation -->
<div class="salutation">
    Dear {{ $name }},
</div>

<!-- Part 1: Charter -->
<p>
    ExtremeSolutions does not build software to sell subscriptions; we engineer sovereign operational infrastructure for institutions that cannot afford to fail. When you inspect Africa's human capital pipeline, the greatest point of structural leakage is not higher education or primary school literacy—it is the <strong>secondary school system</strong> (JSS1 through SS3).
</p>

<!-- Part 2: The Structural Crisis -->
<div class="section-tag">1. The Structural Failure in Secondary Education</div>
<p>
    Over <strong>70% of secondary school graduates in Nigeria touch an active computer keyboard for the very first time on the morning of their JAMB CBT national entrance examinations</strong>. Despite months of textbook preparation, bright students suffer acute computer-interface anxiety, double-clicking radio buttons, losing cursor control, and watching exam timers expire without answering questions. This single technical barrier suppresses tertiary admission rates and stunts lifelong earning trajectories.
</p>
<p>
    Concurrently, secondary school administrators and teachers bleed time and revenue: <strong>faculties waste 2 to 3 weeks every term</strong> manually computing continuous assessments and transcribing handwritten broadsheets, while bursaries lose up to 22% of tuition capital to untracked fee defaulters and unverified paper bank tellers.
</p>

<!-- Metrics -->
<table class="stats-table">
    <tr>
        <td>
            <div class="stat-num">70%+</div>
            <div class="stat-label">CBT Interface Shock</div>
            <div class="stat-desc">Candidates encountering timed computer examination interfaces for the first time during JAMB.</div>
        </td>
        <td>
            <div class="stat-num">14–21 Days</div>
            <div class="stat-label">Broadsheet Latency</div>
            <div class="stat-desc">Teaching hours lost every term to manual arithmetic, remark copying, and error recalculation.</div>
        </td>
        <td>
            <div class="stat-num">12 Seconds</div>
            <div class="stat-label">ExtremeSolutions OS</div>
            <div class="stat-desc">Full grade aggregation, ranking, and broadsheet compilation speed across an entire secondary school.</div>
        </td>
    </tr>
</table>

<!-- Part 3: The Active Solution & 48-Hour Model -->
<div class="section-tag">2. The Solution: ExtremeSolutions Secondary OS &amp; 48-Hour Taskforce</div>
<p>
    We have engineered <strong>sms.extremesolutions.com.ng</strong> to solve this crisis from the root. It automates report broadsheets and fee recovery today, while embedding <strong>daily, continuous computer-based testing (CBT)</strong> into secondary classrooms so students develop natural digital fluency years before external exit examinations.
</p>
<div class="callout-box">
    <strong>The On-Ground Deployment Taskforce:</strong> Educational software fails in Africa when it is sold over Zoom without local enablement. ExtremeSolutions deploys an on-site engineering crew that scans physical registers, digitizes student broadsheets within <strong>48 hours</strong>, and trains teachers directly on campus.
</div>

<p>
    We invite you to stand with us as an institutional partner, back this secondary school rollout in your home district, or connect our taskforce with secondary school proprietors in your network.
</p>

<!-- Signature & Authentication -->
<div class="signature-block">
    <table class="sig-table">
        <tr>
            <td style="width: 65%;">
                <div style="font-size: 7.5pt; color: #71717a; margin-bottom: 2pt;">Signed with structural conviction,</div>
                @if(!empty($sigBase64))
                    <img src="{{ $sigBase64 }}" class="sig-img" alt="Samuel Ekunyan Signature">
                @endif
                <div style="font-size: 9.5pt; font-weight: bold; color: #18181b;">Samuel Ekunyan</div>
                <div style="font-size: 7.5pt; color: #52525b;">Founder &amp; Principal Systems Architect &bull; ExtremeSolutions</div>
            </td>
            <td style="width: 35%; text-align: right;">
                <div style="border: 1pt solid #18181b; padding: 4pt 6pt; display: inline-block; text-align: left;">
                    <div style="font-size: 6.5pt; font-family: monospace; font-weight: bold;">SECURITY AUTHENTICATION</div>
                    <div style="font-size: 7pt; font-family: monospace;">{{ $refCode }}</div>
                    <div style="font-size: 5.5pt; color: #71717a;">extremesolutions.com.ng/support</div>
                </div>
            </td>
        </tr>
    </table>
</div>

<!-- Footer -->
<div class="footer-note">
    ExtremeSolutions &bull; Systems &amp; Software Infrastructure &bull; sms.extremesolutions.com.ng &bull; +234 905 258 5622 &bull; info@extremesolutions.com.ng
</div>

</body>
</html>

