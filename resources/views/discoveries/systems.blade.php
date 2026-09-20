@extends('layouts.app')

@section('title', 'Systems Architecture Teardown // ExtremeSolutions Engineering Lab')
@section('description', 'Technical deep dive into the resilient distributed architecture of Espass (event commerce & gate control) and ExtremeSMS (distributed offline-first CBT & broadsheets).')

@section('meta_robots')
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
<div class="bg-zinc-950 text-zinc-100 min-h-screen py-12 lg:py-20 selection:bg-emerald-500/30 selection:text-emerald-300 font-sans">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Engineering Laboratory Header -->
        <div class="border-b border-zinc-800 pb-8 mb-12">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <div class="inline-flex items-center space-x-2 text-xs font-mono text-emerald-400 mb-2">
                        <span class="inline-block w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span>SYSTEMS DISCOVERY &bull; OPEN ARCHITECTURAL TEARDOWN</span>
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-black tracking-tight text-white font-mono">
                        EXTREMESOLUTIONS / LABS
                    </h1>
                    <p class="mt-2 text-xs text-zinc-400 font-serif italic max-w-xl">
                        &ldquo;Write the vision and make it plain on tablets, that he may run that readeth it.&rdquo; &mdash; Habakkuk 2:2
                    </p>
                </div>
                <div class="text-left sm:text-right font-mono text-xs text-zinc-500 space-y-1">
                    <div>DOC REF: <span class="text-zinc-300">ES-ARCH-2026</span></div>
                    <div>STATUS: <span class="text-emerald-400">PRODUCTION DEPLOYED</span></div>
                    <div>CLASSIFICATION: <span class="text-zinc-300">PUBLIC UNLISTED TEARDOWN</span></div>
                </div>
            </div>
            <p class="mt-6 text-sm text-zinc-300 leading-relaxed max-w-3xl">
                We do not build vanity landing pages or superficial API wrappers. We engineer high-resilience systems capable of surviving edge network latency, intermittent electrical grids, and high-concurrency African commerce and educational environments. Below is the unvarnished architectural teardown of our primary operational engines.
            </p>
        </div>

        <!-- System 01: Espass -->
        <section class="mb-16 border border-zinc-800 bg-zinc-900/60 rounded-xl p-6 sm:p-10">
            <div class="flex items-center justify-between border-b border-zinc-800 pb-4 mb-6">
                <div>
                    <span class="text-xs font-mono font-bold uppercase tracking-wider text-emerald-400">01 // COMMERCE &amp; CONCURRENCY</span>
                    <h2 class="text-2xl font-bold text-white mt-1">Espass &mdash; High-Throughput Event Ticketing &amp; Gate Access</h2>
                </div>
                <div class="hidden sm:block text-right font-mono text-xs text-zinc-500">
                    <div>LATENCY TARGET: &lt;150ms</div>
                    <div>CONCURRENCY: 10,000+ REQ/MIN</div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <div>
                    <h3 class="text-sm font-mono font-bold uppercase tracking-wider text-zinc-300 mb-3">
                        The Real-World Failure Mode
                    </h3>
                    <p class="text-xs text-zinc-400 leading-relaxed mb-4">
                        Standard event software collapses at the physical venue gate. At 5,000+ attendee stadium concerts or campus conferences in Lagos and Abuja, cellular networks immediately saturate into 0 kbps packet loss. Gate operators experience freezing scanners, counterfeit screenshot tickets slip through, and crowd stampedes occur.
                    </p>
                    <h3 class="text-sm font-mono font-bold uppercase tracking-wider text-zinc-300 mb-3">
                        The Architectural Solution
                    </h3>
                    <ul class="text-xs text-zinc-300 space-y-2.5">
                        <li class="flex items-start">
                            <span class="text-emerald-400 font-mono font-bold mr-2">&bull;</span>
                            <span><strong>Idempotent Webhook Engine:</strong> Redis distributed locks with unique transaction hashing guarantee that high-speed parallel payments never double-issue or oversell inventory.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-400 font-mono font-bold mr-2">&bull;</span>
                            <span><strong>Cryptographic Time-Seeded QR Tokens:</strong> Dynamic HMAC-SHA256 payloads that defeat static screenshot sharing and replay attacks.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-400 font-mono font-bold mr-2">&bull;</span>
                            <span><strong>Zero-Internet Gate Synchronization:</strong> Handheld terminal scanners download encrypted ticket tables locally. Verification executes in &lt;60ms on-device, synchronizing counter deltas asynchronously whenever Wi-Fi bursts occur.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-400 font-mono font-bold mr-2">&bull;</span>
                            <span><strong>Multi-Tier Split Settlements:</strong> Automated wallet partitioning allowing instant escrow disbursement among event hosts, venue owners, and ticketing operators.</span>
                        </li>
                    </ul>
                </div>

                <!-- Code / Schema Teardown Block -->
                <div class="bg-zinc-950 border border-zinc-800 rounded-lg p-4 font-mono text-xs">
                    <div class="text-[11px] text-zinc-500 border-b border-zinc-800 pb-2 mb-3 flex items-center justify-between">
                        <span>GATE_VALIDATOR.PHP (CORE SPECIFICATION)</span>
                        <span class="text-emerald-400">EDGE RUNTIME</span>
                    </div>
                    <pre class="text-zinc-300 overflow-x-auto text-[11px] leading-relaxed"><code><span class="text-emerald-400">// Cryptographic Ticket Verification &amp; Edge Lock</span>
<span class="text-zinc-500">public function</span> <span class="text-amber-300">verifyTicketScan</span>(string $qrPayload): Result
{
    $token = <span class="text-sky-300">Crypt::decryptHMAC</span>($qrPayload, config('espass.secret'));
    
    <span class="text-emerald-400">// Atomic Edge Cache Check (Sub-10ms)</span>
    $scanKey = <span class="text-amber-200">"scan:{$token->ticket_id}"</span>;
    $acquired = <span class="text-sky-300">Cache::lock</span>($scanKey, 5)-><span class="text-sky-300">get</span>();

    <span class="text-zinc-500">if</span> (!$acquired || $token->is_used) {
        <span class="text-zinc-500">return</span> Result::<span class="text-rose-400">reject</span>(<span class="text-amber-200">'ALREADY_SCANNED_OR_LOCKED'</span>);
    }

    <span class="text-emerald-400">// Commit Local Ledger &amp; Queue Offline Sync</span>
    $this->recordAdmission($token->ticket_id, now());
    <span class="text-sky-300">BroadcastSyncDelta::dispatch</span>($token->ticket_id);

    <span class="text-zinc-500">return</span> Result::<span class="text-emerald-400">authorized</span>($token->attendee_meta);
}</code></pre>
                </div>
            </div>
        </section>

        <!-- System 02: ExtremeSMS -->
        <section class="mb-16 border border-zinc-800 bg-zinc-900/60 rounded-xl p-6 sm:p-10">
            <div class="flex items-center justify-between border-b border-zinc-800 pb-4 mb-6">
                <div>
                    <span class="text-xs font-mono font-bold uppercase tracking-wider text-emerald-400">02 // INSTITUTIONAL RESILIENCE</span>
                    <h2 class="text-2xl font-bold text-white mt-1">ExtremeSMS &mdash; Secondary School Operating System &amp; CBT Matrix</h2>
                </div>
                <div class="hidden sm:block text-right font-mono text-xs text-zinc-500">
                    <div>BROADSHEET COMPUTATION: 12 SECONDS</div>
                    <div>CBT OFFLINE RESILIENCE: 100%</div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <div>
                    <h3 class="text-sm font-mono font-bold uppercase tracking-wider text-zinc-300 mb-3">
                        The Educational Structural Crisis
                    </h3>
                    <p class="text-xs text-zinc-400 leading-relaxed mb-4">
                        In Nigerian secondary education, over 70% of graduates touch a computer keyboard for the very first time on the day of their computerized JAMB examination. Concurrently, school administrations waste 2 to 3 weeks each term calculating terminal continuous assessment scores manually, leading to human error, disputes, and massive uncollected tuition debt.
                    </p>
                    <h3 class="text-sm font-mono font-bold uppercase tracking-wider text-zinc-300 mb-3">
                        The Architectural Solution
                    </h3>
                    <ul class="text-xs text-zinc-300 space-y-2.5">
                        <li class="flex items-start">
                            <span class="text-emerald-400 font-mono font-bold mr-2">&bull;</span>
                            <span><strong>12-Second Relational Broadsheet Engine:</strong> Optimized single-pass recursive SQL aggregation computes student positions, subject averages, grade percentiles, and cumulative metrics across 1,000+ students instantly.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-400 font-mono font-bold mr-2">&bull;</span>
                            <span><strong>Local-First Offline CBT Engine:</strong> School computer laboratories run an on-premise local server. Exam terminals conduct high-stakes testing entirely across the local area network (LAN), completely insulated from national grid blackouts or ISP failure.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-400 font-mono font-bold mr-2">&bull;</span>
                            <span><strong>Anti-Tamper Examination Client:</strong> State machine tracking active candidate focus, preventing browser timer tampering, and queuing answer snapshots in local IndexedDB before atomic flush to the local server.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-400 font-mono font-bold mr-2">&bull;</span>
                            <span><strong>Tuition Audit &amp; Exam Clearance Gate:</strong> Real-time reconciliation matching payments to student admission IDs and generating verifiable exam cards before examination week.</span>
                        </li>
                    </ul>
                </div>

                <!-- Code / Schema Teardown Block -->
                <div class="bg-zinc-950 border border-zinc-800 rounded-lg p-4 font-mono text-xs">
                    <div class="text-[11px] text-zinc-500 border-b border-zinc-800 pb-2 mb-3 flex items-center justify-between">
                        <span>BROADSHEET_COMPILER.SQL (AGGREGATION)</span>
                        <span class="text-emerald-400">O(N) AGGREGATION</span>
                    </div>
                    <pre class="text-zinc-300 overflow-x-auto text-[11px] leading-relaxed"><code><span class="text-emerald-400">-- Single-Pass Broadsheet &amp; Rank Window Function</span>
<span class="text-zinc-500">WITH</span> TermScores <span class="text-zinc-500">AS</span> (
    <span class="text-zinc-500">SELECT</span> 
        student_id,
        subject_id,
        (ca_score + exam_score) <span class="text-zinc-500">AS</span> total_score,
        <span class="text-sky-300">RANK</span>() <span class="text-zinc-500">OVER</span> (
            <span class="text-zinc-500">PARTITION BY</span> class_id, subject_id 
            <span class="text-zinc-500">ORDER BY</span> (ca_score + exam_score) <span class="text-zinc-500">DESC</span>
        ) <span class="text-zinc-500">AS</span> subject_rank
    <span class="text-zinc-500">FROM</span> continuous_assessments
    <span class="text-zinc-500">WHERE</span> term_id = :current_term
)
<span class="text-zinc-500">SELECT</span> 
    s.admission_number,
    <span class="text-sky-300">AVG</span>(ts.total_score) <span class="text-zinc-500">AS</span> term_average,
    <span class="text-sky-300">DENSE_RANK</span>() <span class="text-zinc-500">OVER</span> (<span class="text-zinc-500">ORDER BY</span> <span class="text-sky-300">AVG</span>(ts.total_score) <span class="text-zinc-500">DESC</span>) <span class="text-zinc-500">AS</span> overall_position
<span class="text-zinc-500">FROM</span> TermScores ts
<span class="text-zinc-500">JOIN</span> students s <span class="text-zinc-500">ON</span> s.id = ts.student_id
<span class="text-zinc-500">GROUP BY</span> s.id, s.admission_number;</code></pre>
                </div>
            </div>
        </section>

        <!-- The Habakkuk 2:2 Architectural Tenets -->
        <section class="border-t border-zinc-800 pt-10">
            <h3 class="text-xs font-mono font-bold uppercase tracking-widest text-emerald-400 mb-2">
                03 // ENGINEERING TENETS
            </h3>
            <h2 class="text-2xl font-bold text-white mb-6">
                How ExtremeSolutions Builds Technology
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="border border-zinc-800 bg-zinc-900/40 p-5 rounded-lg">
                    <div class="font-mono text-xs font-bold text-zinc-400 mb-1">TENET 01</div>
                    <h4 class="text-base font-bold text-white mb-2">Zero Vanity Wrappers</h4>
                    <p class="text-xs text-zinc-400 leading-relaxed">
                        We reject superficial templates and marketing wrappers. If a problem requires database optimization, offline queuing, or cryptographic validation, we engineer it at the foundation.
                    </p>
                </div>

                <div class="border border-zinc-800 bg-zinc-900/40 p-5 rounded-lg">
                    <div class="font-mono text-xs font-bold text-zinc-400 mb-1">TENET 02</div>
                    <h4 class="text-base font-bold text-white mb-2">Offline-First Edge Resilience</h4>
                    <p class="text-xs text-zinc-400 leading-relaxed">
                        Software built for emerging markets must never assume 100% broadband uptime. If the grid or the internet cuts out, the gate must still open and the exam must proceed.
                    </p>
                </div>

                <div class="border border-zinc-800 bg-zinc-900/40 p-5 rounded-lg">
                    <div class="font-mono text-xs font-bold text-zinc-400 mb-1">TENET 03</div>
                    <h4 class="text-base font-bold text-white mb-2">Plain on Tablets (Habakkuk 2:2)</h4>
                    <p class="text-xs text-zinc-400 leading-relaxed">
                        &ldquo;Write the vision and make it plain on tablets, that he may run that readeth it.&rdquo; Software must provide unquestionable clarity so operators can execute without hesitation.
                    </p>
                </div>
            </div>

            <!-- Strategic Action Links -->
            <div class="mt-12 p-6 bg-zinc-900 border border-zinc-800 rounded-xl flex flex-col sm:flex-row items-center justify-between gap-4">
                <div>
                    <h4 class="text-sm font-bold text-white">Deploy ExtremeSolutions Operating Infrastructure</h4>
                    <p class="text-xs text-zinc-400 mt-1">Explore our unlisted institutional memorandums and partner deployment protocols.</p>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <a href="{{ route('partner.index') }}" class="px-4 py-2 bg-emerald-600 hover:bg-emerald-500 text-white font-bold text-xs rounded transition">
                        Partner Deployment
                    </a>
                    <a href="{{ route('support.index') }}" class="px-4 py-2 bg-zinc-800 hover:bg-zinc-700 text-zinc-200 font-bold text-xs rounded transition">
                        Institutional Vision
                    </a>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection

