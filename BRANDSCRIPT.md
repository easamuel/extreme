# Brand & Website Strategy

## The ExtremeSolutions BrandScript

A StoryBrand (Donald Miller) messaging framework for ExtremeSolutions, mapped to concrete changes for extremesolutions.com.ng — built ahead of the upcoming school pitch.

- **Prepared:** Sep 17, 2026
- **Flagship proof:** sms.extremesolutions.com.ng, espass.extremesolutions.com.ng
- **Trigger:** Upcoming school demo pitch

### On this page

1. Positioning summary
2. StoryBrand, in brief
3. BrandScript — the company
4. BrandScript — the school pitch
5. Website: remove / add / sitemap
6. Homepage rewrite
7. School page rewrite
8. Beyond the site: pitching schools
9. Implementation checklist
10. BrandScript addendum — the Academy

---

## 01 · Positioning summary

ExtremeSolutions is not an HR company or an education company, and it is not a two-product company either. School Management (sms.extremesolutions.com.ng) and ESPass (espass.extremesolutions.com.ng) are **proof of what you build** — not the boundary of what you do. The real position: **a digital solutions company that builds, trains, and ships** — custom software, systems, AI and automation for any business or institution, plus a cohort-based Academy mentoring the next generation of Nigerian tech talent.

> **Round 2 update:** HR has been deliberately de-emphasized (route kept, but removed from nav/homepage/footer) so the site stops reading as "HR + education." ESPass (a ticketing platform) replaces it as the second flagship proof point alongside the School System, and a Training & Mentorship pillar (the Academy) has been added as a third thing ExtremeSolutions visibly does, not just builds software for others.

**The fix, in three moves now:**

- **Strip the SaaS-vendor artifacts.** Remove Login / Register / Dashboard from the public site — that scaffolding is unused: `$hasSubscription` is hardcoded `false` in the dashboard view, it was never finished. Real product logins belong on the product's own domain, not the company site. *(Done.)*
- **Reframe around capability, not products.** The homepage sells "we build, train, and ship solutions across tech." School System and ESPass become flagship proof — *"we don't just consult, we run these ourselves"* — not the only two things you sell. *(Done.)*
- **Make the site heavier and more trustworthy.** More substance per page (a concrete "Why Trust Us" section, not adjectives), a real Academy page, and a newsletter so the relationship doesn't end at a single visit. *(Done — see §10.)*

Everything below applies that reframe with StoryBrand, then maps it to the specific pages and code that need to change.

---

## 02 · StoryBrand, in brief

Donald Miller's framework treats every sale like a story. The customer is the **hero** — never the brand. The brand is the **guide** (think Yoda, not Luke). A website that talks about how great the company is loses the reader; a website that names the reader's problem and hands them a plan keeps them.

1. **Character** — wants something
2. **Problem** — stands in the way
3. **Guide** — shows up with empathy + authority
4. **Plan** — a clear, simple path
5. **Call to action** — direct + transitional
6. **Failure** — what's at stake if they don't act
7. **Success** — what life looks like after

Two BrandScripts follow: one for ExtremeSolutions as a whole, one narrowed to the school audience for the upcoming pitch. Same guide, same voice — different hero, different stakes.

---

## 03 · BrandScript — the company

**1 · Character**
A business or institution leader who knows they need to modernize — replace spreadsheets, manual registers, disconnected tools, or software that was never built for how they actually work — but has no in-house team to build it, and no confidence in who to trust with the job.

**2 · Problem**

| | |
|---|---|
| External | Operations run on manual processes, spreadsheets, or generic software that doesn't fit the business. It costs time, causes errors, and looks unprofessional next to competitors who've moved on. |
| Internal | They feel behind, and unsure who to trust — afraid of paying a vendor who disappears, half-builds something, or hands over a system nobody can use. |
| Philosophical | Every business deserves technology built to fit them — not the other way around. |

**3 · Guide**
Empathy: "We know what it's like to run a business on tools that fight you instead of helping you." Authority: we don't just talk about software — we build and run one ourselves, live, in production, today (sms.extremesolutions.com.ng). That's the single strongest credibility asset the company has right now, and it should be used everywhere: *"We're not consultants. We're a company that builds and operates its own software — then builds yours."*

**4 · Plan**

1. **Talk to us.** A short call or free consultation to understand the problem — no obligation.
2. **We design and build.** Custom software, systems, AI, or automation — scoped to what you actually need, not a bloated off-the-shelf package.
3. **You launch, with support.** Training, onboarding, and ongoing support after go-live — not a handoff into silence.

**5 · Call to action**

- **Direct:** "Start Your Project" / "Book a Free Consultation"
- **Transitional:** "See Our Work" (School System live demo)

**6 · Failure (the stakes)**
Stay on manual processes and mismatched tools while competitors modernize. Keep absorbing the cost of errors, wasted hours, and a dated image. Or worse — spend money on the wrong developer and end up with an abandoned half-system, more distrustful of technology than before.

**7 · Success**
One system that actually fits how the business runs. Hours back every week. A professional, modern face to staff, customers, and partners. Room to grow without technology being the thing holding them back.

**One-liner (for the hero section)**

> "Your business needs software that fits how you work — not the other way around."
> Sub-line: ExtremeSolutions designs and builds custom software, systems, AI and automation for businesses and institutions who don't have an in-house team to build it. We don't just advise — we build things we run ourselves.

---

## 04 · BrandScript — the school pitch

Same guide, narrowed hero, for the room you're walking into: school proprietors and administrators.

**1 · Character**
A school proprietor or administrator running day-to-day operations — fees, attendance, results, parent communication — largely by hand or across tools that don't talk to each other.

**2 · Problem**

| | |
|---|---|
| External | Registers, fee ledgers, and result computation done manually or in scattered spreadsheets. Parents chase the school for information instead of getting it automatically. |
| Internal | Admin staff feel overwhelmed at the start of every term. The proprietor worries about errors in fees or results — and about looking less credible than schools that have "gone digital." |
| Philosophical | Every parent and student deserves a school that runs on modern, transparent, well-organized systems. |

**3 · Guide**
ExtremeSolutions built and runs sms.extremesolutions.com.ng — one platform covering fees, results, attendance, and a parent portal, instead of five disconnected tools. **Note honestly:** there's no roster of client schools yet — this is the first real pitch. That's fine; StoryBrand doesn't require testimonials, it requires *risk reversal* (section 8 covers exactly how to handle this live in the room).

**4 · Plan**

1. **Book a free demo** — see the actual system with your school's context in mind, not a generic pitch deck.
2. **We set it up with you** — data migration and onboarding done alongside your admin staff, not dropped on them.
3. **Go live with support** — training for staff, and a real person to call when something's unclear.

**5 · Call to action**
**Direct:** "Book a Free Demo for Your School" — this should be the single most prominent button on the School page.

**6 · Failure**
Another term of manual fee reconciliation and result collation errors. Parents still calling the office for information they should already have. Staff burning hours on work a system should absorb. Meanwhile, schools that switched are already ahead.

**7 · Success**
One dashboard for the whole school. Parents informed automatically. Admin time freed up for actual teaching and administration, not data entry. A school that looks and runs like it's ahead of its peers — because it is.

**Pricing framing**
Per-student, per-term subscription — this is inherently low-commitment (it scales down if enrollment is smaller, and never traps the school in a large upfront cost). Say that plainly on the page and in the room: **"You pay per student, per term — it grows with your school, it never overcommits you."** That line does real risk-reversal work on its own.

---

## 05 · Website: remove, add, restructure

**Remove**

- **Now** — Login / Register nav links (header, mobile menu) — unused, and signals "SaaS account site" instead of "company site."
- **Now** — /dashboard route, controller, view — unfinished scaffolding (`$hasSubscription = false` hardcoded, a TODO in the code). Nothing currently depends on it.
- **Now** — Auth routes/controllers (Login/Register/Logout) — no real account system belongs on the marketing site; product accounts live on the product's own domain.

**Add**

- **Next** — "What We Build" section on the homepage — Custom Software, Systems & Integrations, AI & Automation — positioned above the product cards, so the site reads "capability first, products as proof."
- **Next** — A real "How We Work" / process section — the 3-step plan from the BrandScript above.
- **Next** — A direct CTA in the header — replace Login/Register with a single button: "Book a Consultation."
- **Later** — Case studies / "Our Work" page — once the school pitch produces even one live school, that becomes your first real case study.
- **Later** — Team / About page — a short, specific founder/team credibility page.

**Sitemap after changes (round 2)**

```
Home → What We Build (4 pillars incl. Training & Mentorship) → Our Work (School System + ESPass)
     → Why Trust Us → How We Work → Newsletter → Contact

/academy (Academy / mentorship page)
/products/school
/products/espass
/products/hr (kept, unlinked from nav)
Contact (existing form, now actually emails via Resend)
```

---

## 06 · Homepage rewrite, section by section

| Section | StoryBrand role | Change |
|---|---|---|
| Header | Direct CTA | Replace Login/Register with one button: "Book a Consultation." |
| Hero | One-liner + plan preview | New headline + two CTAs (direct + transitional). |
| "Who We Are" | Guide: empathy + authority | Lead with "we build and run our own software," not generic adjectives. |
| "What We Build" | Character + problem, widened | Custom Software · Systems & Automation · AI · Training & Mentorship. |
| "Our Solutions" | Proof | "Software we've built and run" — School System and ESPass, both live, both tagged "Live Now." HR removed from this section. |
| "Why Trust Us" | Guide credibility, concretely | Four specific commitments instead of adjectives like "secure/scalable." |
| Newsletter | Keep the relationship open | Email capture (Resend-powered) for visitors not ready to buy yet. |
| "How We Work" | Plan | 3 steps: Talk to us → We design & build → You launch, with support. |
| Features | Value stack | Tie each feature back to a business outcome. |
| Contact | Direct CTA repeated | Keep the form; repeat the direct CTA above it. |

---

## 07 · School product page: from placeholder to pitch-ready

> **This was the most urgent fix.** The page used to tell visitors: *"This is a placeholder page. The full solution will be available at school.extremesolutions.com in the future."* That sentence, live on the page sent to schools, said the product doesn't exist yet. It does — at sms.extremesolutions.com.ng.

- Remove the placeholder notice entirely.
- Hero: "Run your whole school from one dashboard" + a single CTA: **Book a Free Demo**, pre-filling the contact form subject to "School Demo Request."
- Direct link to the live product: sms.extremesolutions.com.ng.
- State pricing plainly: per-student, per-term — the risk-reversal line from section 4.
- Replace generic feature bullets with a failure/success contrast (manual, scattered → one dashboard, parents informed, staff freed up).
- No client roster yet — don't fake one. Honest authority line instead: *"Built and run by the same team that built it for our own operations — see it live, no sales pitch required."*

---

## 08 · Beyond the site: pitching schools with no case studies yet

- **Lead with the live demo, not a deck.** A working product with real (even sample) data beats every slide.
- **Name the "first pitch" honestly if asked.** "You'd be one of our first partner schools — direct access to us, fast changes, pricing that reflects that."
- **Reduce the risk of saying yes.** Per-term pricing already helps — reinforce with a first-term discount or no-questions cancellation before renewal.
- **Leave behind one page, not a folder.** Problem, plan, price, one CTA — travels further than a full deck.
- **Bring the guide's authority into the room.** Say plainly: "We use this system to run our own operations before we ever sold it."

---

## 09 · Implementation checklist

| Item | Status |
|---|---|
| Remove Login/Register from header + mobile menu | ✅ Done |
| Remove /dashboard + auth routes/controllers/views | ✅ Done |
| Header CTA: "Book a Consultation" | ✅ Done |
| Homepage hero + "Who We Are" rewrite | ✅ Done |
| New "What We Build" + "How We Work" sections | ✅ Done |
| School page: remove placeholder, rebuild as pitch page | ✅ Done |
| De-emphasize HR (unlink from nav/home/footer, keep route) | ✅ Done |
| Add ESPass as second flagship product | ✅ Done |
| Add Academy (mentorship) page + nav link | ✅ Done |
| Add "Why Trust Us" concrete-commitments section | ✅ Done |
| Newsletter signup (Resend) on homepage + footer | ✅ Done |
| Contact form actually sends email (was log-only) | ✅ Done |
| Case studies / About / Team pages | ⏳ After first school signs |
| Real screenshots/demo GIF of SMS + ESPass on their pages | ⏳ Still needed — no screenshot tool available this session |
| Academy: real cohort dates, cost (free/paid), application steps | ⏳ Copy is deliberately generic until these are confirmed |

---

## 10 · BrandScript addendum — the Academy

A third audience now exists alongside businesses and schools: young Nigerians trying to break into tech. Same guide, third hero.

| | |
|---|---|
| Character | A young Nigerian motivated to learn software but unsure how to get real (not just tutorial) experience. |
| Problem | **External:** most training stops at exercises and sample projects, not real production code. **Internal:** they doubt they'll ever be "ready." **Philosophical:** talent shouldn't be wasted for lack of access to real mentorship. |
| Guide | ExtremeSolutions mentors from inside a company that runs live products — mentees learn from people building real software, not full-time instructors. |
| Plan | Apply → join a cohort → learn hands-on, grounded in real systems. |
| CTA | "Apply for the Next Cohort" — routes to the contact form, subject pre-filled. |
| Failure / Success | Another year of tutorials with nothing real to show, vs. real, mentor-guided experience that actually leads somewhere. |

> The copy on `/academy` is deliberately generic about cohort length, cost, and curriculum specifics — none of that was confirmed. Fill those in as soon as they're locked; vague claims about a real program read worse than no claim at all.
>
> **Round 3 update:** the Academy isn't active yet. "Apply for the Next Cohort" was removed everywhere — it implied an open program that doesn't exist. CTAs now point to the newsletter ("Get Notified When We Launch" / subscribe) instead.

---

## 11 · Round 3 — simplify, add About, fix the CTA lie

Feedback after seeing the live site: the homepage mentioned SMS and ESPass too often, the two-product-card section made the company look narrow ("just two solutions"), there was no About page or Mission/Vision, and the Academy CTA ("Apply for the Next Cohort") was actively false since the program isn't open yet.

**Changes made:**

- **New `/about` page** — Our Story, Mission, Vision, and Values (4 concrete commitments, distinct wording from the homepage's "Why Trust Us" to avoid duplication). Nav updated: Home · About · Academy · Contact.
- **Homepage "Who We Are" cut down** to a short teaser + "Learn more about us →" link to `/about`, instead of a full section repeating the mission paragraph and naming both products.
- **The two-product-card "Our Solutions" section replaced with a slim "Proof Strip"** — one line ("Proof, not just a pitch — we run our own products in production") plus two small pill links to the School System and ESPass pages. Same authority claim, without making the homepage look like a 2-item menu. The full-detail product pages (`/products/school`, `/products/espass`) are unchanged — schools being pitched still get the deep page.
- **SMS/ESPass mentions trimmed** everywhere they were named twice in the same section (About teaser, Why Trust Us item 3, Academy page's "why it's different" section) — said once, plainly, instead of repeated by name.
- **Academy CTA fixed**: "Apply for the Next Cohort" is gone from the hero, the "What We Build" card, and the bottom CTA. Replaced with "Coming Soon" badges and a newsletter signup ("Get Notified When We Launch") — honest about where the program actually is.
- **Added a full-bleed dark "Academy Teaser" section** on the homepage (navy background) — doubles as a visual break in the page rhythm and a soft, honest plug for the Academy without overselling it.
- **Removed `contact@extremesolutions.com.ng` everywhere** (contact section, footer) — phone number (08036375292) is now the only direct contact method shown outside the form itself.

**Explicitly not copied from the reference site (gratech.coevs.com):** its fake testimonials, fake "6,561+ satisfied clients" style stats, a hosting-style pricing table, and a lorem-ipsum blog section. Those would violate the honesty standard this whole rework has been built on — inventing social proof or stats we don't have would hurt trust more than the sparse-feeling homepage it's replacing. What was carried over is the *structural instinct*: a cleaner, more spaced-out, less cluttered section rhythm, and a proper About page with Mission/Vision — not the fabricated content.

---

*Prepared for ExtremeSolutions · StoryBrand framework by Donald Miller, applied here for internal strategy use.*
