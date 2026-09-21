@extends('layouts.app')

@section('title', 'Systems Architecture Teardown | ExtremeSolutions Engineering Lab')
@section('description', 'Technical deep dive into the resilient distributed architecture of Espass (event commerce & gate control) and ExtremeSMS (distributed offline-first CBT & broadsheets).')

@section('meta_robots')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
    <!-- 1. Hero Surface -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white pt-16 pb-20 md:pt-24 md:pb-28">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="brand-glow top-0 left-1/2 -translate-x-1/2 w-[600px] h-[350px] bg-gradient-to-br from-[#1e3a5f] via-[#00ff88]/15 to-transparent"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 rounded-full border border-[#00ff88]/30 bg-[#00ff88]/10 px-4 py-1.5 text-xs font-semibold text-[#00ff88] mb-6">
                <span class="w-2 h-2 rounded-full bg-[#00ff88] animate-pulse"></span>
                <span>SYSTEMS DISCOVERY &bull; ARCHITECTURAL TEARDOWN</span>
            </div>

            <h1 class="mx-auto max-w-4xl text-3xl sm:text-5xl lg:text-[58px] tracking-tight leading-[1.14]">
                <span class="font-light text-white/90">How We Architect Software</span><br/>
                <span class="font-bold text-white">To Survive Real-World Conditions</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm sm:text-base leading-relaxed text-white/75">
                We do not build fragile prototypes or marketing wrappers. ExtremeSolutions engineers dependable software systems capable of handling edge network latency, intermittent power grids, and high-concurrency African commerce and educational environments.
            </p>

            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a href="#espass-teardown"
                   class="inline-flex items-center rounded-full bg-[#00ff88] px-8 py-3.5 text-sm font-bold text-[#0a192f] hover:bg-[#00e67a] transition-all shadow-lg hover:-translate-y-0.5">
                    Explore Systems Teardown &darr;
                </a>
                <a href="{{ route('partner.index') }}"
                   class="rounded-full border border-white/20 bg-white/10 px-7 py-3.5 text-sm font-medium text-white hover:bg-white/20 transition-all">
                    Partner With ExtremeSolutions
                </a>
            </div>
        </div>
    </section>

    <!-- 2. System 01: Espass Architecture -->
    <section id="espass-teardown" class="bg-white py-20 md:py-28 border-b border-gray-200">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 font-mono">01 // EVENT COMMERCE &amp; CONCURRENCY</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a] tracking-tight">
                    ESPass: High-Throughput Ticketing &amp; Offline Gate Validation
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mt-4"></div>
            </div>

            <div class="grid lg:grid-cols-2 gap-10 items-start">
                <div>
                    <h3 class="text-base font-bold text-[#0c1f3a] mb-2 uppercase tracking-wide">
                        The Real-World Failure Mode
                    </h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-6">
                        Standard event software collapses at physical venue gates. At 5,000+ attendee stadium concerts or campus conferences in Lagos and Abuja, cellular networks immediately saturate into severe packet loss. Scanners freeze, fraudulent screenshot tickets bypass manual staff, and dangerous bottlenecks occur at the turnstiles.
                    </p>

                    <h3 class="text-base font-bold text-[#0c1f3a] mb-2 uppercase tracking-wide">
                        The Architectural Solution
                    </h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-emerald-500 font-bold mr-2.5">&check;</span>
                            <span><strong>Idempotent Webhook Processing:</strong> Redis distributed locks with unique transaction hashing guarantee that rapid parallel payments never double-issue or oversell inventory.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-500 font-bold mr-2.5">&check;</span>
                            <span><strong>Cryptographic Time-Seeded QR Tokens:</strong> Dynamic HMAC-SHA256 payloads that defeat static screenshot sharing and replay attacks.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-500 font-bold mr-2.5">&check;</span>
                            <span><strong>Zero-Internet Gate Synchronization:</strong> Handheld terminal scanners download encrypted ticket tables locally. Verification executes in &lt;60ms on-device, synchronizing counter deltas asynchronously when connectivity pulses occur.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-500 font-bold mr-2.5">&check;</span>
                            <span><strong>Multi-Tier Split Settlements:</strong> Automated wallet partitioning allowing instant escrow disbursement among event hosts, venue owners, and ticketing operators.</span>
                        </li>
                    </ul>

                    <div class="mt-8">
                        <a href="https://espass.extremesolutions.com.ng" target="_blank"
                           class="inline-flex items-center text-sm font-bold text-emerald-600 hover:text-emerald-700">
                            Visit Live ESPass Platform &rarr;
                        </a>
                    </div>
                </div>

                <!-- Code Teardown -->
                <div class="rounded-2xl bg-[#0c1f3a] p-6 text-white border border-gray-800 shadow-xl font-mono text-xs overflow-hidden">
                    <div class="flex items-center justify-between border-b border-white/10 pb-3 mb-4 text-gray-400 text-[11px]">
                        <span>GATE_VALIDATOR.PHP (EDGE LOGIC)</span>
                        <span class="text-[#00ff88]">SUB-60MS LATENCY</span>
                    </div>
                    <pre class="overflow-x-auto text-gray-300 leading-relaxed text-[11px]"><code><span class="text-[#00ff88]">// Cryptographic Ticket Verification &amp; Edge Lock</span>
<span class="text-gray-400">public function</span> <span class="text-amber-300">verifyTicketScan</span>(string $qrPayload): Result
{
    $token = <span class="text-sky-300">Crypt::decryptHMAC</span>($qrPayload, config('espass.secret'));
    
    <span class="text-[#00ff88]">// Atomic Edge Cache Check (Sub-10ms)</span>
    $scanKey = <span class="text-amber-200">"scan:{$token->ticket_id}"</span>;
    $acquired = <span class="text-sky-300">Cache::lock</span>($scanKey, 5)-><span class="text-sky-300">get</span>();

    <span class="text-gray-400">if</span> (!$acquired || $token->is_used) {
        <span class="text-gray-400">return</span> Result::<span class="text-rose-400">reject</span>(<span class="text-amber-200">'ALREADY_SCANNED_OR_LOCKED'</span>);
    }

    <span class="text-[#00ff88]">// Commit Local Ledger &amp; Queue Offline Sync</span>
    $this->recordAdmission($token->ticket_id, now());
    <span class="text-sky-300">BroadcastSyncDelta::dispatch</span>($token->ticket_id);

    <span class="text-gray-400">return</span> Result::<span class="text-[#00ff88]">authorized</span>($token->attendee_meta);
}</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. System 02: ExtremeSMS Architecture -->
    <section class="bg-[#f8fafc] py-20 md:py-28 border-b border-gray-200">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-600 font-mono">02 // INSTITUTIONAL OPERATING SYSTEMS</span>
                <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-[#0c1f3a] tracking-tight">
                    ExtremeSMS: Relational Broadsheet Engine &amp; Offline CBT
                </h2>
                <div class="w-16 h-1 bg-[#00ff88] mt-4"></div>
            </div>

            <div class="grid lg:grid-cols-2 gap-10 items-start">
                <div>
                    <h3 class="text-base font-bold text-[#0c1f3a] mb-2 uppercase tracking-wide">
                        The Educational Structural Crisis
                    </h3>
                    <p class="text-sm text-gray-600 leading-relaxed mb-6">
                        Over 70% of Nigerian secondary school candidates touch a computer keyboard for the very first time on the day of their computerized JAMB examination. Concurrently, administrations lose weeks calculating continuous assessment grades manually, causing human error, parent disputes, and uncollected tuition debts.
                    </p>

                    <h3 class="text-base font-bold text-[#0c1f3a] mb-2 uppercase tracking-wide">
                        The Architectural Solution
                    </h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-emerald-500 font-bold mr-2.5">&check;</span>
                            <span><strong>12-Second Relational Broadsheet Engine:</strong> Optimized single-pass recursive SQL aggregation computes student positions, subject averages, grade percentiles, and cumulative metrics across 1,000+ students instantly.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-500 font-bold mr-2.5">&check;</span>
                            <span><strong>Local-First Offline CBT Engine:</strong> School computer laboratories run an on-premise local server. Exam terminals conduct high-stakes testing entirely across the local area network (LAN), completely insulated from national grid blackouts or ISP failure.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-500 font-bold mr-2.5">&check;</span>
                            <span><strong>Anti-Tamper Examination Client:</strong> State machine tracking active candidate focus, preventing browser timer tampering, and queuing answer snapshots in local IndexedDB before atomic flush to the local server.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-500 font-bold mr-2.5">&check;</span>
                            <span><strong>Tuition Audit &amp; Exam Clearance Gate:</strong> Real-time reconciliation matching payments to student admission IDs and generating verifiable exam cards before examination week.</span>
                        </li>
                    </ul>

                    <div class="mt-8 flex items-center space-x-4">
                        <a href="{{ route('partner.index') }}" class="inline-flex items-center text-sm font-bold text-emerald-600 hover:text-emerald-700">
                            View School Partnership Proposal &rarr;
                        </a>
                        <a href="https://sms.extremesolutions.com.ng" target="_blank" class="text-xs font-medium text-gray-500 hover:text-gray-900 underline">
                            Live SMS Portal &rarr;
                        </a>
                    </div>
                </div>

                <!-- SQL Broadsheet Teardown -->
                <div class="rounded-2xl bg-[#0c1f3a] p-6 text-white border border-gray-800 shadow-xl font-mono text-xs overflow-hidden">
                    <div class="flex items-center justify-between border-b border-white/10 pb-3 mb-4 text-gray-400 text-[11px]">
                        <span>BROADSHEET_COMPILER.SQL (O(N) WINDOW ENGINE)</span>
                        <span class="text-[#00ff88]">12 SECONDS</span>
                    </div>
                    <pre class="overflow-x-auto text-gray-300 leading-relaxed text-[11px]"><code><span class="text-[#00ff88]">-- Single-Pass Broadsheet &amp; Rank Window Function</span>
<span class="text-gray-400">WITH</span> TermScores <span class="text-gray-400">AS</span> (
    <span class="text-gray-400">SELECT</span> 
        student_id,
        subject_id,
        (ca_score + exam_score) <span class="text-gray-400">AS</span> total_score,
        <span class="text-sky-300">RANK</span>() <span class="text-gray-400">OVER</span> (
            <span class="text-gray-400">PARTITION BY</span> class_id, subject_id 
            <span class="text-gray-400">ORDER BY</span> (ca_score + exam_score) <span class="text-gray-400">DESC</span>
        ) <span class="text-gray-400">AS</span> subject_rank
    <span class="text-gray-400">FROM</span> continuous_assessments
    <span class="text-gray-400">WHERE</span> term_id = :current_term
)
<span class="text-gray-400">SELECT</span> 
    s.admission_number,
    <span class="text-sky-300">AVG</span>(ts.total_score) <span class="text-gray-400">AS</span> term_average,
    <span class="text-sky-300">DENSE_RANK</span>() <span class="text-gray-400">OVER</span> (<span class="text-gray-400">ORDER BY</span> <span class="text-sky-300">AVG</span>(ts.total_score) <span class="text-gray-400">DESC</span>) <span class="text-gray-400">AS</span> overall_position
<span class="text-gray-400">FROM</span> TermScores ts
<span class="text-gray-400">JOIN</span> students s <span class="text-gray-400">ON</span> s.id = ts.student_id
<span class="text-gray-400">GROUP BY</span> s.id, s.admission_number;</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Bottom Callout -->
    <section class="brand-surface relative overflow-hidden bg-[#0c1f3a] text-white py-16 md:py-20 text-center">
        <div class="brand-texture" aria-hidden="true"></div>
        <div class="relative z-10 mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-4xl font-bold tracking-tight text-white">
                Building Digital Systems That Last
            </h2>
            <p class="mt-4 text-sm sm:text-base text-white/70 max-w-xl mx-auto leading-relaxed">
                Need high-concurrency transactional software, custom mobile apps, or enterprise platform engineering? Talk to our architecture team.
            </p>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="rounded-full bg-[#00ff88] px-8 py-3.5 text-sm font-bold text-[#0a192f] hover:bg-[#00e67a] transition-all shadow-md">
                    Start a Project
                </a>
                <a href="{{ route('partner.index') }}" class="rounded-full border border-white/20 bg-white/10 px-7 py-3.5 text-sm font-medium text-white hover:bg-white/20 transition-all">
                    Partner With Us
                </a>
            </div>
        </div>
    </section>
@endsection
