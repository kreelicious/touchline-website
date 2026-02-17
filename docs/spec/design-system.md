# Touchline Design System Specification

> Converted from Touchline Marketing Website Plan — Working Draft.docx

# Touchline Marketing Website Plan (Working Draft)

Purpose: define and agree the architecture, technical specs, design, development approach, and sprint plan for the Touchline marketing website.

## 0) Decisions to Agree Up Front

### 0.1 Primary Website Goal (MVP)

Primary conversion: - Join the waiting list - Become a trial club (apply to be an early trialist)

Success definition: - Qualified sports clubs submitting application or waiting list form - Focus on capturing club size, facilities, and sponsorship maturity level

### 0.2 Primary Audience Priority

Primary audience: - Sports clubs that manage sports grounds / stadiums and operate an identifiable club brand

Characteristics: - Responsible for sponsorship delivery - Manage physical inventory (pitch-side boards, digital screens, club media) - Likely underserved commercially

Secondary audiences (later optimisation): - Agencies - Brands

### 0.3 MVP vs v1 Scope

MVP must include: - Clear positioning for clubs - Strong explanation of value (commercial infrastructure + proof of delivery) - Waiting list / trialist application form - Basic product explanation pages - Blog / resources capability via CMS

v1 (post-launch iteration): - Case studies - Agency/brand-specific landing pages - Marketplace narrative expansion - Advanced content assets (guides, gated downloads)

### 0.4 CMS & Content Approach

CMS: WordPress - Hosted on existing Cloudways infrastructure - Used for blog and marketing resources - Marketing team can independently publish and edit content

Content use cases: - Blog posts - Guides/resources - Announcements - Potential landing pages

### 0.5 Launch Timeline + Metrics

Launch target: Mid 26/27 season
Purpose: generate and qualify clubs to onboard for the 27/28 season.

Initial success metrics (first 90 days): - Waiting list signups - Pilot applications for 27/28 season - Conversion rate from homepage → form submission - Organic traffic growth via blog

## 1) Goals, Users, Messaging

### 1.1 Business goals

Year 1 targets: - 19 qualified clubs joining the waiting list per month (average) - 5–10 clubs onboarded into the 27/28 pilot scheme

Supporting marketing targets: - Consistent month-on-month growth in qualified club leads - Clear funnel visibility from visit → application → qualified → pilot acceptance

Website responsibility: - Generate and qualify club interest - Clearly differentiate between general waiting list and pilot scheme application

### 1.2 Primary user segments

Primary segment: Semi-professional and fully professional football (and comparable sport) clubs

Profile characteristics: - Run semi-professional or fully professional first teams - Operate their own ground or stadium - Average 1,000–5,000 attendees per match - Rely heavily on sponsorship, matchday revenue, and community support - Limited commercial staff and operational resources - Under pressure to appear professional to sponsors while managing lean budgets

Core struggles: - Keeping the club financially sustainable - Managing sponsor fulfilment manually (boards, media, announcements, etc.) - Proving value and reporting back to sponsors - Lack of structured commercial processes

Qualification signal for website forms: - League level - Average attendance band (e.g. <1k / 1–3k / 3–5k / 5k+) - Existing sponsorship structure - Ground ownership/management status

Secondary segments (later optimisation): - Agency partner(s) - Brands

### 1.3 Core messaging pillars

We will combine emotional survival-driven messaging with clear commercial outcomes.

Pillar 1 — Stop firefighting sponsorship admin
Semi-pro clubs are stretched. Sponsorship is often managed on spreadsheets, WhatsApp, and memory. Touchline removes manual tracking and replaces it with structured commercial workflows.

Pillar 2 — Make your club look and operate professionally
Even with limited resources, clubs can deliver sponsor assets in a consistent, trackable way that builds credibility and long-term relationships.

Pillar 3 — Prove value to sponsors (retain & grow revenue)
Provide structured proof of delivery, reporting, and visibility — increasing sponsor confidence, renewal likelihood, and revenue predictability.

Pillar 4 — Turn your ground into structured commercial inventory
Pitch-side boards, digital screens, matchday announcements, and media are treated as managed assets — not ad-hoc promises.

Pillar 5 — Build toward a connected commercial ecosystem
Long-term vision: a network where clubs become commercially standardised and more accessible to agencies and brands.

Tone direction: - Empathetic to club pressures - Practical, not corporate SaaS jargon - Commercially confident but grounded

### 1.4 Offer + CTA strategy

We will use two clearly separated CTAs to create urgency and qualification clarity.

Primary CTA — Apply for 27/28 Pilot (Limited Clubs) - Positioned as exclusive and capacity-limited (5–10 clubs) - Framed as: “Become a Founding Pilot Club” - Links to external Typeform application - Opens in a new tab - Clear qualification messaging (semi-pro or fully professional, 1k–5k attendance, ground operators) - Emphasised as preparation for the 27/28 season - Used prominently in hero, navigation button, and mid-page sections

Secondary CTA — Join the Waiting List - Lower commitment option - Links to simplified external Typeform - Opens in a new tab - Positioned as early access to platform rollout - Used in footer, exit-intent, blog pages, and supporting sections

Conversion architecture principle: - Pilot CTA drives urgency and seriousness - Waiting list CTA captures broader qualified interest - Both feed into CRM with tagging for qualification and season intent

Tertiary CTA (contextual): - “Learn how it works” (educational, non-conversion CTA for colder traffic)

## 2) Information Architecture

### 2.1 Sitemap (MVP — Conversion Focused)

Primary Pages: - Home - Platform (How Touchline Works) - For Clubs (Dedicated semi-pro page) - Apply for 27/28 Pilot (External Typeform) - Join Waiting List (External Typeform) - Resources - Blog - About - Legal - Privacy - Terms

Removed for MVP: - Agencies page - Brands page - Pricing page - Marketplace deep-dive pages - Separate “Contact / Book demo” page (handled through CTAs instead)

Architecture principle: - Fewer top-level pages - Strong vertical flow toward Pilot application - Clear club-first positioning - Resources exist to support SEO and credibility, not distract from conversion

### 2.2 Navigation model

Header + footer structure

Persistent primary CTA button in header (Apply for 27/28 Pilot)

Secondary CTA available in footer and key sections

All external Typeform links open in new tab to preserve site session and enable better analytics tracking

### 2.3 Content model

#### 2.3.1 Page types (MVP)

Home (conversion-led overview)

Platform / How it works (explain workflow + credibility)

For Clubs (ICP-specific pains, outcomes, proof)

Resources hub (index page)

Blog post (WP post template)

About (mission, story, trust)

Legal (WP pages)

External (Typeform) conversion endpoints: - Apply for 27/28 Pilot (new tab) - Join Waiting List (new tab)

#### 2.3.2 Reusable sections (building blocks)

These are modular sections we can reuse across pages and assemble quickly.

Conversion + value - Hero (headline, subhead, primary+secondary CTAs) - Problem → outcome band (pain points → benefits) - Feature/value grid (3–6 items) - “How it works” steps (3–5 steps) - Proof / credibility strip (logos, metrics, quotes) - Testimonial card row (if available) - CTA band (pilot emphasis, waiting list support)

Product clarity - Use-case highlights (e.g., sponsor tracking, inventory, proof of delivery) - Before/after comparison (manual vs Touchline) - Reporting / proof-of-delivery teaser - Inventory types showcase (boards, screens, media, matchday)

Trust + reassurance - FAQ accordion - Security / data handling note (lightweight) - “Who it’s for / who it’s not for” panel - Founder note / story section (optional)

Content + SEO - Latest resources/blog feed - Category/tag filter (phase-in) - Newsletter/updates block (optional)

#### 2.3.3 Component library (design system inventory)

Atomic UI elements (WordPress theme/block styles): - Buttons (primary/secondary/tertiary + icon) - Links (standard / CTA link) - Form prompts (used for email capture if ever added) - Badges/pills (e.g., “Limited pilot”, “27/28”) - Cards (feature card, resource card, testimonial card) - Icons (slightly rounded filled style) - Rounded corners and softened geometry - Filled base shape with subtle internal contrast (not harsh flat fills) - Consistent corner radius aligned with component radius tokens - Avoid ultra-thin line icons to maintain warmth and visual weight - Stats (number + label) - Accordions (FAQ) - Tabs (optional) - Tables (legal/simple comparison) - Announcement banner (optional)

Layout components: - Header (nav + sticky CTA) - Footer (secondary CTA + links) - Section wrappers (standard padding, background variants) - Grid systems (2-col, 3-col, 4-col) - Content blocks (long-form typography for blog)

Content-specific components: - Blog index grid/list - Blog post header (title, date, reading time optional) - Author block (optional) - Related posts - Social share links (optional)

#### 2.3.4 WordPress implementation approach (recommended)

Use block-based editing for marketing pages where possible

Create a set of reusable blocks/patterns for the sections above

Keep page assembly simple: marketers choose from approved patterns

## 3) Technical Specifications

### 3.1 Platform & hosting

Platform: WordPress on existing Cloudways infrastructure.

Environment strategy: - Production: existing Cloudways app - Staging: Cloudways staging app (or cloned app) with password protection - Local dev: LocalWP or Docker-based WP for theme/block development

CDN + caching (recommended on Cloudways): - CloudwaysCDN (or Cloudflare) for global asset delivery - Server-level caching enabled - Page caching tuned to exclude /wp-admin and preview states

### 3.2 WordPress build approach (recommended)

Approach: Custom block theme (Gutenberg / Site Editor compatible) with reusable block patterns.

Why this approach fits Touchline: - Fast, consistent page assembly using approved patterns - Performance-friendly vs heavy page builders - Long-term maintainability and design consistency

Theme architecture: - Block theme with theme.json controlling typography, spacing, colours, and component styles - Pattern library mapped to our reusable sections (Hero, Problem/Outcome, Steps, FAQ, CTA bands, etc.) - Minimal plugin reliance (avoid builder lock-in)

Custom blocks (only where needed): - Complex sections (e.g., workflow diagram, before/after comparison, stat strip) implemented as custom blocks if patterns aren’t enough - Prefer native blocks + patterns first; custom blocks second

### 3.2.1 UI/UX framework options (for the WordPress build)

We need to decide how we implement the design system in code: spacing, typography scale, buttons, cards, grids, and interaction patterns.

#### Option A — WordPress-native design system (recommended)

What it is: - Use WordPress block theme primitives: theme.json, block styles, style variations, and block patterns. - Add a small set of utility classes only where needed.

Pros: - Best editor experience (marketing can assemble pages safely) - Great performance (minimal CSS/JS) - No external framework lock-in - Consistent and enforceable system (global styles)

Cons: - Requires a bit more upfront theme craftsmanship - Complex UI pieces may need custom blocks

Best fit for Touchline because: clean/structured design + small page count + need for maintainability.

#### Option B — Lightweight utility CSS framework (Tailwind) inside a custom theme

What it is: - Use Tailwind in the theme build pipeline, compile only used classes. - Still deliver Gutenberg patterns; patterns rely on Tailwind utility classes.

Pros: - Very fast to build consistent layouts - Easy to implement grids, spacing, and responsive behavior

Cons: - Gutenberg editing can get messy (lots of classes) - Requires build tooling and discipline - Harder for non-devs to maintain without breaking consistency

Fit: good if we have a dev-led editing model and want speed, but less ideal if marketing will actively assemble pages.

#### Option C — Page builder framework (Elementor / Bricks / etc.)

What it is: - Use a visual builder and its component library.

Pros: - Fast iteration for non-devs - Lots of premade widgets

Cons: - Performance risk (CSS/JS bloat) - Builder lock-in - Design consistency drift over time

Fit: not recommended for Touchline given the need for a clean, high-performance, system-led experience.

#### Option D — Front-end component framework (Bootstrap, etc.)

What it is: - Use Bootstrap grid + components inside the theme.

Pros: - Familiar, quick scaffolding

Cons: - Visual style can feel generic - Extra CSS weight - Less aligned to custom brand system

Fit: generally not recommended for Touchline.

#### Recommendation

Use Option A: WordPress-native block theme system via theme.json + block styles + patterns.

### 3.2.2 Editor Experience Model — Highly Constrained (Approved)

We will implement a highly constrained editing system to protect design integrity and performance.

Core principles: - Pages are assembled from pre-approved block patterns only. - Editors cannot freely construct complex layouts from raw blocks. - Spacing, typography, colour, and layout rules are centrally controlled via theme.json.

Implementation approach: - Disable unnecessary core blocks. - Register a curated set of custom patterns matching: - Hero - Problem/Outcome band - 4-step workflow - Feature grid - FAQ section - CTA bands - Blog index layout - Lock structural layout blocks where possible. - Provide style variations (e.g., light/dark section) instead of free colour control.

What editors can change: - Text content - Approved images - Button links (e.g., Typeform URLs) - Minor field-level content within structured patterns

What editors cannot change: - Grid structure - Section spacing scale - Typography scale - Component styling - Arbitrary colour changes

Why this is important for Touchline: - Maintains a clean, structured brand presence - Prevents design drift over time - Protects performance - Ensures consistency as marketing iterates

### 3.3 Content workflow (CMS)

Content types: - Pages: Home, Platform, For Clubs, About, Resources, Legal - Posts: Blog

Editing model: - Marketing pages assembled using block patterns - Blog authored using editorial blocks with constrained typography styles

Roles & publishing: - Admin: technical owner - Editor: marketing/content lead - Author: contributors

Draft/preview process: - Draft in staging → internal review → publish to production - Use staging for major layout changes and new patterns

### 3.4 Integrations

Forms: - Typeform for: - Apply for 27/28 Pilot - Join Waiting List - Both open in a new tab from site CTAs

CRM: - Connect Typeform → CRM via: - Native integration (if available), or - Zapier/Make, or - Webhooks to a lightweight endpoint - Tagging requirements: - source_page (home/platform/for-clubs/blog/etc.) - cta_type (pilot/waitlist) - attendance_band - club_type (semi-pro/pro) - ground_control (yes/no) - season_intent (27/28)

Analytics: - GA4 (or Plausible if preferred) + Google Tag Manager - Track events: - pilot_cta_click - waitlist_cta_click - Typeform completion (where possible via Typeform integration) - UTM preservation and attribution (ensure UTMs pass into Typeform hidden fields)

Email marketing (optional MVP): - Sync waitlist signups to email platform list

### 3.5 Performance, accessibility, security

Performance targets (MVP): - Lighthouse (mobile) targets: Performance 85+, Accessibility 90+, Best Practices 90+, SEO 90+ - Core Web Vitals: aim for “Good” thresholds site-wide

Performance practices: - Lightweight theme, minimal plugin set - Image optimization (WebP/AVIF where possible) + responsive images - Font loading optimized (system font or self-hosted with preload) - Defer non-critical scripts (GTM, analytics)

Accessibility (baseline): - WCAG 2.1 AA intent - Keyboard navigation, focus states, semantic headings, colour contrast

Security baseline: - Enforce HTTPS - Security headers (HSTS, X-Frame-Options, X-Content-Type-Options, Referrer-Policy) - WAF / bot protection via Cloudflare (recommended) - Limit login attempts + 2FA for admins - Regular updates + minimal plugins

### 3.6 SEO foundations

Technical SEO: - Clean URL structure - XML sitemap + robots.txt - Canonicals + meta templates - Open Graph/Twitter cards

Structured data (schema): - Organization schema - Article schema for blog posts

On-page SEO: - Consistent heading hierarchy per page - Internal linking from blog → Platform/For Clubs - Performance and accessibility as ranking support

## 4) Design Plan

### 4.1 Brand direction

Visual Direction: Clean, Structured, System-Led

We will avoid gritty grassroots visuals and instead position Touchline as structured commercial infrastructure.

Design principles: - Clean layouts with strong grid systems - Generous white space - Clear information hierarchy - Structured UI patterns (cards, panels, workflow diagrams) - Minimal visual noise

Visual tone: - Modern and credible - Operational and system-focused - Confident but not corporate-heavy - Slightly soft and approachable rather than sharp or severe - Designed to feel supportive and enabling, not rigid or institutional

Imagery approach: - Product UI mockups (dashboard-style visuals) - Simplified workflow diagrams - Structured data visualisations (inventory blocks, reporting cards) - Subtly-dimensional illustration style for system visuals - Limited but intentional club imagery (secondary, not dominant)

Illustration style (Subtly-Dimensional System Visuals): - Layered cards and panels with soft shadows - Gentle gradients within brand blue range (no harsh neon tones) - Slight perspective depth for dashboards (not heavy 3D) - Overlapping UI elements to suggest system cohesion - Soft ambient highlights rather than sharp lighting effects

Guidelines: - Avoid flat, overly minimal monochrome diagrams - Avoid heavy skeuomorphic or realistic 3D rendering - Maintain clarity and readability above visual flourish - Visuals should reinforce structure, visibility, and control

Typography direction: - Modern sans-serif for clarity and professionalism - Strong hierarchy between headline, subhead, and body

Colour direction (Trust-Based Brand System): - Neutral base (white / very light grey backgrounds) - Deep trust-based blue as primary brand colour - Subtle background variations to separate sections

Primary brand direction (Modern & Optimistic Execution): - Use the deep trust-blue as the anchor, but apply it with restraint. - Lean toward lighter layouts with generous white space. - Emphasise clarity and forward momentum rather than institutional heaviness.

Execution guidance: - Prefer white or very light backgrounds for most sections. - Use primary-700 for CTAs (clear, confident blue — slightly brighter than navy). - Reserve primary-900 for selective contrast sections (e.g., occasional CTA bands or footer), not dominant page backgrounds. - Introduce subtle primary-100 background tints to create visual rhythm without heaviness.

Supporting neutrals: - Warm off-white for main background (avoid stark blue-grey corporate tones) - Very light blue-tinted grey for occasional section backgrounds (subtle warmth) - Light grey surface for cards to create layering without darkness - Mid-grey for borders - Dark charcoal for primary text (avoid pure black)

Surface layering guidance: - Prefer soft surface contrast rather than strong colour blocking - Use gentle background shifts to create section rhythm instead of heavy dividers

Accent usage: - Accent colour used sparingly for badges or highlights - Accent should feel energetic but secondary to trust-blue - Avoid aggressive high-contrast combinations that undermine the optimistic tone

### 4.2 Page-level design requirements

Below is the agreed module stack for each core MVP page. These are built using reusable sections defined in 2.3.

#### Home (Conversion-led overview)

##### Visual Wireframe & Layout Hierarchy (Execution Blueprint)

This describes spatial layout, visual weight, and interaction priority — not just content order.

Overall layout principles: - Mobile-first, stacked vertical rhythm - Generous white space between major sections - Clear alternating background surfaces (white → subtle tint → white) - Maximum 1200px content width (except hero wide visual)

### Section 1 — Hero (High Impact, Split Layout on Desktop)

Desktop layout: - 2-column grid (6/6 split) - Left: Headline, subhead, CTAs - Right: Subtly-dimensional dashboard mockup - Wide container (1320px max) - Vertical padding: 96px top / 96px bottom

Visual hierarchy: 1. H1 headline (largest visual weight) 2. Subheadline (muted tone, max 640px width) 3. Primary CTA (large button) 4. Secondary CTA (outlined or subtle style) 5. Microcopy (small muted text)

Visual treatment: - Soft gradient background wash behind dashboard visual (very subtle primary-100 tone) - Dashboard slightly elevated with lg shadow - Very light background grid or abstract stadium schematic at low opacity (optional)

Mobile behavior: - Stacked layout (text → CTAs → visual) - Reduced vertical padding (64px)

### Section 2 — Problem (3–4 Card Layout)

Desktop layout: - Section background: white - Centered section header - 2x2 grid of soft cards (rounded lg, subtle shadow)

Visual cues: - Slightly rounded filled icons above each pain point - Muted card backgrounds (surface token) - Even spacing between cards (32px gap)

Purpose visually: - Calmly structured diagnosis - Not alarmist — orderly presentation of issues

### Section 3 — Outcome (Before / After Contrast Block)

Background: subtle primary-100 tint for contrast.

Desktop layout: - Horizontal split comparison - Left panel: “Before” (light grey surface) - Right panel: “After” (white surface, slightly elevated) - Clear divider or arrow motif between panels

Visual emphasis: - “After” side slightly elevated (shadow md) - Small stat or highlight badge possible in “After” panel

### Section 4 — 4-Step Workflow (Structured Horizontal Flow)

Desktop layout: - Horizontal 4-step grid - Each step in a soft card with icon + heading + short description - Thin connecting line or directional cue between steps

Below steps: - Subtle dashboard preview image (centered, max 900px width)

Visual feel: - Clean, systematic, predictable - Strong alignment and equal spacing

### Section 5 — Feature / Capability Grid

Layout: - 2-column grid (desktop) - Slightly larger cards than problem section - Optional subtle gradient highlight on hover (desktop only)

Hierarchy: - Icon - Feature title - 2–3 line explanation

### Section 6 — Credibility / Vision Strip

Background: white

Layout options: - Horizontal logo strip (if available), or - Founder quote panel (slightly tinted background)

Purpose: - Add human credibility without heavy storytelling

### Section 7 — Primary CTA Band (High Contrast)

Background: primary-900 (deep trust blue)

Layout: - Centered content - Max width 720px - White text (primary-contrast) - Large primary CTA button (white or lighter primary tone)

Vertical padding: 96px desktop / 72px mobile

Purpose visually: - Strong but optimistic push - First major contrast section on page

### Section 8 — FAQ (Accordion Grid)

Background: white

Layout: - Centered heading - Accordion max width 800px - Subtle border separators - Smooth open/close animation (height + opacity)

### Section 9 — Secondary CTA Band (Light Variant)

Background: subtle primary-100 tint

Layout: - Centered content - Slightly smaller visual weight than primary CTA band - Outlined or secondary button style

### Footer

Background: primary-900

Layout: - Multi-column (desktop) - Minimal links - Secondary CTA small presence - Legal links at bottom

##### Scroll Rhythm & Emotional Arc

Control (Hero)

Governance risk (Problem)

Stability (Outcome)

System clarity (Workflow)

Capability breadth (Feature grid)

Credibility (Strip)

Urgency (Primary CTA)

Objection handling (FAQ)

Safety net (Waiting list)

This structure ensures: - No visual clutter - Clear hierarchy - Progressive persuasion - Strong contrast only where conversion intent peaks

#### Platform (How It Works — Deep Product Clarity)

This page supports the homepage by providing structured, rational product explanation for board members who want detail before applying.

Hero (Clarity-Focused)

Headline example: “Commercial Infrastructure, Built for Semi-Professional Clubs.”

Subhead: A structured system for managing sponsor inventory, fulfilment, and reporting across your ground and media.

Primary CTA: Apply for 27/28 Pilot

System Overview Section (Big Picture Framing)

Visual: Clean system diagram (Inventory → Commitments → Fulfilment → Reporting → Renewal)

Copy focus: Touchline acts as a single commercial control layer across all sponsorship activity.

Deep-Dive Section 1 — Commercial Inventory Structure Headline: “See Every Commercial Asset in One Place.”

Structured categorisation of pitch-side boards, digital screens, website placements, matchday announcements

Clear visibility of sold vs available assets

Designed for board-level clarity, not just admin tracking

Visual: Dashboard mockup (inventory grid or asset map)

Deep-Dive Section 2 — Sponsor Agreements & Fulfilment Tracking Headline: “Ensure Every Commitment Is Delivered.”

Link sponsor agreements to specific assets

Track fulfilment status and timelines

Reduce reliance on memory or spreadsheets

Visual: Sponsor record card + status indicators

Deep-Dive Section 3 — Proof of Delivery & Reporting Headline: “Move from Assumptions to Structured Proof.”

Capture evidence of sponsor exposure

Generate structured reporting views

Support renewal discussions with confidence

Visual: Reporting summary panel or export-style layout

Use-Case Examples (Practical Application Layer) Short scenarios demonstrating real-world application:

Matchday board rotation tracking

Digital screen sponsor scheduling

Website partner placement oversight

Seasonal renewal preparation workflow

Governance & Continuity Section Headline: “Protect Commercial Knowledge at Board Level.”

Reduce dependency on one volunteer or staff member

Maintain institutional memory year over year

Provide structured oversight for trustees/board members

Product FAQ (Operational Detail)

How is data stored?

Who in the club should use it?

Can multiple users access the system?

How is onboarding handled?

Pilot CTA Band (Conversion Reinforcement)

Reiterate limited intake for 27/28

Apply for 27/28 Pilot CTA

#### For Clubs (ICP-specific page — Ambitious Growth Positioning)

This page should speak to clubs that are not just surviving — but actively trying to grow, professionalise, and increase commercial standards.

Hero (“Built for Ambitious Clubs with 1,000–5,000 Fans Per Match”)

Subhead example: “If your club is pushing for higher standards on and off the pitch, your commercial operation should match your ambition.”

Primary CTA: Apply for 27/28 Pilot

Ambition Framing Section — “You’re Building More Than a Team.”

Competing for promotion

Investing in facilities

Growing matchday attendance

Strengthening community presence

But commercial systems often lag behind sporting ambition

Growth Bottlenecks Section

Revenue plateaus because sponsor value isn’t clearly demonstrated

Board lacks real-time commercial oversight

Scaling sponsorship becomes harder without structured inventory

Manual processes limit professionalism

Professionalisation Angle — “Operate Like the Club You’re Becoming.”

Structured inventory visibility

Clear sponsor commitments

Reporting you can present confidently at board level

Infrastructure that supports league progression and growth

Future Case Scenario (Aspirational Mini-Story)

“Imagine entering pre-season with every sponsor asset mapped, renewal conversations prepared, and clear commercial targets for the year ahead.”

Position Touchline as enabling forward planning, not firefighting.

Who It’s For (Clear Qualification Filter)

Clubs with 1,000–5,000 average attendance

Managing their own ground or commercial inventory

Board-level commitment to raising commercial standards

Preparing for growth, promotion, or facility development

Who It’s Not For (Soft Filter)

Very early-stage clubs with minimal sponsorship

Clubs without control of their commercial assets

Organisations not yet prioritising structured sponsor management

Strong Pilot CTA Section (Ambition Reinforcement)

Headline example: “Match Your Commercial Structure to Your Sporting Ambition.”

Apply for 27/28 Pilot CTA

Limited intake reminder

#### Resources Hub

Intro header

Blog grid (latest first)

Category filter (phase-in)

#### About

Mission statement

Why Touchline exists (grassroots commercial gap)

Founder note (optional)

Vision for connected ecosystem

CTA band

### 4.3 Design system

#### 4.3.1 Design tokens (system of record)

These tokens will be implemented in WordPress via theme.json and used consistently across patterns and components.

Breakpoints (responsive): - sm: 640px - md: 768px - lg: 1024px - xl: 1280px - 2xl: 1440px (max content container target)

Container widths: - container: 1200px max (default) - container-wide: 1320px max (hero / key diagrams) - reading: 720px max (blog + long-form)

Spacing scale (8pt base): - 0: 0 - 1: 4px - 2: 8px - 3: 12px - 4: 16px - 5: 24px - 6: 32px - 7: 48px - 8: 64px - 9: 96px - 10: 128px

Section padding (default): - section-y: 64px (desktop) / 48px (tablet) / 32px (mobile) - section-x: 24px (desktop) / 20px (tablet) / 16px (mobile)

Grid system: - 12-column grid for layout - Default gutters: 24px (desktop) / 16px (mobile) - Component grids: - 2-col: lg+ - 3-col: lg+ - 4-col: xl+

Typography (sizing + rhythm): - Primary font: Google Font (self-hosted for performance after selection) - Selected primary font: Plus Jakarta Sans (distinctive, structured but approachable) - Secondary fallback option (if refinement needed): Manrope - Removed: Inter (too neutral / SaaS-generic for desired brand tone) - Fallback stack: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif - Base size: 16px - Line heights: - Headings: 1.1–1.2 - Body: 1.5–1.7 - Small: 1.4–1.6

Font loading strategy: - Use Google Fonts for initial testing - Self-host selected font files in production - Load only required weights (400, 500, 600, 700) - Use font-display: swap - Preload primary font files - Avoid loading unused italics unless required

Type scale (fluid optional, fixed values below): - h1: 44px (desktop) / 36px (mobile) - h2: 34px / 28px - h3: 26px / 22px - h4: 20px / 18px - body: 16px - small: 14px - micro: 12px

Font weights: - regular: 400 - medium: 500 - semibold: 600 - bold: 700

Radius (soft & approachable): - sm: 10px - md: 14px - lg: 18px - xl: 24px

Guideline: avoid sharp 0px corners except for full-width layout edges. Cards, panels, buttons, and inputs should feel slightly softened.

Shadows (soft elevation, not harsh): - sm: very subtle ambient shadow for cards (low blur, low opacity) - md: soft elevation for primary cards and panels - lg: slightly stronger but diffused shadow for hero visuals or featured panels

Guideline: avoid hard, dark drop-shadows. Shadows should feel atmospheric and layered rather than dramatic.

Borders: - Default border: 1px - Border colour: subtle neutral (tokenised)

Color tokens (names only — values set in design sprint): - Neutrals: - bg: background - surface: cards/sections - text: primary text - muted: secondary text - border: separators - Brand: - primary: CTA/button - primary-hover - primary-contrast: text on primary - accent: highlights/badges - Status (minimal use): - success, warning, error

Interactive tokens: - Focus ring: 2px visible outline (accessibility) - Button heights: - md: 44px (default) - lg: 52px (hero) - Button padding: - md: 16px x 12px - lg: 20px x 14px

Motion (minimal): - Duration: - fast: 120ms - base: 180ms - slow: 240ms - Easing: standard ease-out - Usage: hover/focus, accordion open/close, subtle section reveals (optional)

#### 4.3.2 Component inventory

Buttons (primary/secondary/tertiary + icon)

Links (standard / CTA link)

Badges/pills (e.g., “Limited pilot”, “27/28”)

Cards (feature card, resource card, testimonial card)

Icons (consistent style)

Stats (number + label)

Accordions (FAQ)

Tables (legal/simple comparison)

Announcement banner (optional)

#### 4.3.3 Responsive behavior

Mobile-first patterns

Type scale steps down on mobile

Multi-column grids collapse to single-column

Sticky header CTA remains visible (with reduced height on scroll)

#### 4.3.4 Motion/interaction guidelines

Minimal motion, maximum clarity

Clear hover/focus states

Accordions animate height/opacity subtly

Avoid distracting scroll animations

### 4.4 Content + copy deliverables

Final copy ownership

Illustration/photography style

Case studies (when available)

## 5) Development Strategy & Methodology (Codex-driven)

### 5.1 Delivery methodology

We will run a design-led, implementation-focused sprint cycle using: - Small, reviewable increments - Strict definition of done per ticket - High-quality PR hygiene - Codex assistance for scaffolding, repetitive implementation, and test/support scripts

Key principles: - Keep WordPress highly constrained (patterns + theme.json as source of truth) - Prefer patterns over custom blocks; custom blocks only where necessary - Performance and accessibility are non-negotiable acceptance criteria - Every sprint ends with a usable, deployable increment on staging

### 5.2 Repo structure

Recommended mono-repo layout (Git): - /theme/touchline/ — custom block theme source - /theme/touchline/assets/ — images, icons, compiled CSS/JS - /theme/touchline/patterns/ — registered patterns - /theme/touchline/parts/ — header/footer/template parts - /theme/touchline/templates/ — page templates - /theme/touchline/functions.php — theme bootstrap + block restrictions - /docs/ — implementation notes, decisions, runbooks - /scripts/ — build/deploy helpers (optional)

### 5.3 Theme setup & development workflow

Local setup: - LocalWP (or Docker) with: - WP core - theme mounted from repo - sample content seed

Theme development flow: 1. Implement tokens in theme.json (colors, type scale, spacing, radii) 2. Create template parts (header/footer) 3. Build and register patterns (homepage-first) 4. Restrict editor blocks + lock patterns 5. Assemble pages in WP using patterns 6. Verify performance + accessibility continuously

Block editor constraints (implementation): - Disable non-approved blocks - Restrict allowed blocks per post type (pages vs posts) - Provide only approved patterns for marketing pages - Enforce consistent typography and spacing via theme.json

### 5.4 PR phases & branching model

Branching model (simple & effective): - main = production-ready - staging = integrated QA branch - feat/<ticket-slug> = feature branches - hotfix/<slug> = urgent fixes

PR phases: 1. Draft PR (early visibility) - Codex-generated scaffolding is acceptable here - Include screenshots/video of staging output - Add checklist items and link ticket 2. Review PR - Requires at least 1 human reviewer - Must pass lint/build checks - Must include accessibility notes where relevant 3. QA PR (merge → staging) - Integrated testing on Cloudways staging - Lighthouse baseline check (mobile) - Cross-browser sanity check 4. Release PR (staging → main) - Small, predictable, tagged release - Release notes + rollback notes

PR size guidance: - Prefer < 400 lines changed per PR when possible - Patterns/components split across PRs if needed

### 5.5 Codex usage strategy (how we develop with AI)

Codex will be used as a pair programmer with guardrails.

Codex is good for: - Theme scaffolding - theme.json token implementation - Pattern JSON/HTML scaffolding - Repetitive component/pattern creation - Simple scripts (image optimisation, build steps) - Refactoring for consistency

Codex must NOT be used blindly for: - Security-related code (auth, endpoints) without review - Plugin selection decisions - Performance-sensitive output (must be audited)

Workflow: - Human defines ticket scope + acceptance criteria - Codex generates implementation + notes - Human reviews and edits - PR created with checklist and evidence

### 5.6 Agent.md (project instructions for Codex)

Create an AGENT.md at repo root to ensure consistent generation.

AGENT.md template: - Project summary and goals - Tech stack and constraints (WP block theme, constrained editor, patterns-first) - Design token source (theme.json) - Coding standards (PHP, HTML, CSS) - PR checklist requirements - Performance/accessibility requirements - How to run locally + how to validate changes

### 5.7 Quality gates (Definition of Done)

A ticket is “done” only when: - Pattern/component matches Figma spec - Responsive behavior verified - Keyboard navigation and focus states verified - No console errors - Lighthouse mobile baseline checked (no major regression) - CTA links correct and open in new tab - Tracking attributes present where required - Content editable within approved constraints

### 5.8 CI/CD and environments

CI (GitHub Actions or similar): - Lint PHP (PHPCS) - Lint CSS/JS (stylelint/eslint if used) - Basic build check (if assets are compiled)

Deploy: - Staging deploy on merge to staging - Production deploy on merge to main - Manual approval step for production (recommended)

Rollback: - Deploy previous release tag - Keep zipped theme artifacts per release

### 5.9 Key additional steps to include

Content seeding: sample posts/pages for real-world editing tests

Asset pipeline: image optimisation + SVG/icon pipeline

Plugin shortlist & governance: minimal set, version controlled list, update cadence

Tracking governance: event names locked and documented

Accessibility audit checkpoints: end of Sprint 2, Sprint 4, Sprint 5

## 6) Sprint Plan (MVP → Launch) (MVP → Launch)

### Sprint 0 — Discovery & alignment

Finalize goals, audience priority, offer/CTA

Confirm sitemap + content list

Select stack + hosting + CMS

Define analytics events

### Sprint 1 — Design Foundation (UI/UX Execution Sprint)

Objective: Translate agreed strategy, tokens, and wireframe blueprint into production-ready design assets for development.

#### 1. Design System Finalisation

Finalise colour values for trust-based blue scale (primary-900 → primary-100)

Finalise neutral palette

Confirm Plus Jakarta Sans weight usage in headings/body

Define button variants (primary, secondary, outline)

Finalise card styles (radius, shadow, border treatment)

Finalise icon style (rounded filled set)

Define light vs tinted section variants

Document spacing rules visually

Deliverable: - Figma design system file (tokens + components + variants)

#### 2. Homepage Design (Full Hi-Fi)

Final hero design (layout, dashboard mockup, gradient treatment)

Problem section card design

Outcome before/after comparison visual

4-step workflow layout + icon system

Feature grid design

Primary CTA band (dark contrast section)

FAQ accordion styling

Secondary CTA band

Footer layout

Deliverable: - Complete high-fidelity Home page (desktop + mobile) - Tablet adaptation rules defined

#### 3. Platform Page (Wireframe → Partial Hi-Fi)

Finalise layout structure

Design 1 deep-dive section fully in hi-fi (as reusable pattern)

Design system diagram style

Define use-case card pattern

Deliverable: - Wireframe (full page) - Hi-fi key sections for pattern reuse

#### 4. For Clubs Page (Wireframe → Partial Hi-Fi)

Hero variation design

Ambition framing section style

Growth bottleneck section layout

“Who it’s for / not for” pattern design

Deliverable: - Wireframe (full page) - Hi-fi for hero + 2 key sections

#### 5. Blog Template Design

Blog index layout

Blog post template (reading width, typography styling)

Author block (optional)

Related posts layout

Deliverable: - Hi-fi blog index + blog post template

#### 6. Component State Definitions

For development handoff: - Hover states - Focus states (accessibility ring) - Active button states - Accordion open/close state - Sticky header scroll behavior

Deliverable: - Annotated design specs for dev handoff

Out of Scope for Sprint 1: - Case study templates - Advanced animations - Agency/brand landing variants - Gated resource flows

Brand direction + design system v0

### Sprint 2 — Build Foundation (Theme & System Implementation)

Objective: Convert approved design system and homepage into a production-ready WordPress block theme with constrained editor experience.

#### 1. Project & Theme Setup

Create custom block theme scaffold

Configure theme.json with:

Typography scale (Plus Jakarta Sans)

Spacing scale (8pt system)

Colour tokens (trust-blue + neutrals)

Radius + shadow tokens

Set up local dev + staging sync

Configure build tooling (if needed for CSS preprocessing)

Deliverable: - Working base theme installed on staging

#### 2. Core Layout Infrastructure

Build global header (sticky, CTA button behaviour)

Build footer (multi-column layout)

Define container width classes (default / wide / reading)

Implement section wrapper pattern (padding + background variants)

Configure responsive breakpoints

Deliverable: - Global layout components functional

#### 3. Pattern Library Implementation (Homepage-First)

Implement reusable block patterns based on Sprint 1 designs: - Hero pattern (split layout + visual container) - Problem card grid pattern - Outcome before/after comparison pattern - 4-step workflow pattern - Feature grid pattern - CTA band (dark variant + light variant) - FAQ accordion pattern

Rules: - Patterns locked for layout - Editors can modify text + images only

Deliverable: - Pattern library registered and available in editor

#### 4. Component Styling

Button variants (primary / secondary / outline)

Card variants (feature / problem / panel)

Icon system integration

Accordion interaction styling

Focus states (accessibility compliant)

Deliverable: - All core components styled and consistent with Figma

#### 5. Homepage Implementation (v1 Build)

Assemble homepage using registered patterns

Integrate dashboard mockup visuals

Configure CTA links to Typeform (new tab)

Add tracking attributes for analytics events

Deliverable: - Fully functional homepage on staging

#### 6. Technical Baseline Checks

Performance test (Lighthouse baseline)

Accessibility pass (keyboard + contrast)

Cross-browser sanity test

Ensure no unnecessary plugins introduced

Deliverable: - Homepage meeting baseline performance targets before moving to other pages

### Sprint 3 — Core Pages + Integrations (Expansion & Data Layer)

Objective: Build remaining core pages using pattern library and fully implement data, CRM, and analytics integrations.

#### 1. Platform Page Build

Assemble full Platform page using:

System overview pattern

Deep-dive section pattern

Use-case card pattern

Governance section pattern

CTA band

Integrate system diagram visuals

QA layout responsiveness

Deliverable: - Fully built Platform page on staging

#### 2. For Clubs Page Build

Assemble For Clubs page using:

Hero variation pattern

Ambition framing section

Growth bottleneck grid

“Who it’s for / not for” pattern

Strong Pilot CTA band

Ensure qualification messaging aligns with Typeform logic

Deliverable: - Fully built For Clubs page on staging

#### 3. About Page Build

Assemble mission section

Founder note pattern (if included)

Vision strip

CTA band integration

Deliverable: - About page complete

#### 4. Resources Hub (Structural Only)

Build blog index template

Style category/tag display (if used)

Configure pagination

Add internal linking components

Deliverable: - Functional Resources hub

#### 5. Typeform Integration & Tracking

Confirm both CTAs open in new tab with correct URLs

Add tracking attributes to CTA buttons (data-cta-type etc.)

Configure GA4 events via GTM:

pilot_cta_click

waitlist_cta_click

Ensure UTM parameters pass into Typeform hidden fields

Validate Typeform → CRM integration

Confirm tagging fields map correctly:

source_page

cta_type

attendance_band

club_type

ground_control

season_intent

Deliverable: - Verified data flow from website → Typeform → CRM - Test submissions logged and confirmed

#### 6. Analytics & Attribution Layer

Configure GA4 property (if not existing)

Set up GTM container

Define conversion events and mark as conversions

Configure basic funnel view (Homepage → CTA click)

Verify event firing via debug tools

Deliverable: - Working analytics baseline with conversion tracking

#### 7. Cross-Page QA Pass

Responsive review across breakpoints

Cross-browser check (Chrome, Safari, Edge)

Accessibility spot-check (headings, alt text, focus order)

Performance regression test

Deliverable: - All core pages stable and ready for SEO sprint

### Sprint 4 — Resources + SEO (Visibility & Authority Layer)

Objective: Implement structured SEO foundations and resource infrastructure to support organic acquisition and authority building.

#### 1. Technical SEO Implementation

Configure SEO plugin (lightweight, e.g., Rank Math or Yoast — minimal features enabled)

Set global title + meta templates

Configure XML sitemap

Validate robots.txt

Implement canonical URLs

Configure Open Graph + Twitter card defaults

Submit sitemap to Google Search Console

Deliverable: - Clean technical SEO baseline verified in Search Console

#### 2. Structured Data (Schema)

Implement Organization schema (site-wide)

Implement Article schema for blog posts

Validate schema using Rich Results Test

Deliverable: - Schema validated and error-free

#### 3. Blog Infrastructure Hardening

Finalise blog index layout

Configure category structure (max 4–6 strategic categories)

Define URL structure (/resources/ or /blog/)

Configure pagination

Ensure internal linking components (Related posts, in-content links)

Deliverable: - Fully functional and scalable blog system

#### 4. On-Page SEO Optimisation (Core Pages)

Optimise H1/H2 hierarchy on Home, Platform, For Clubs

Refine meta titles + descriptions for conversion intent

Add internal links between:

Home → Platform

Home → For Clubs

Blog → Platform / For Clubs

Optimise image alt text

Compress and validate all hero/dashboard visuals

Deliverable: - Core pages optimised and re-tested via Lighthouse + manual review

#### 5. Initial Content Seeding (Launch Baseline)

Publish 3–5 foundational blog articles targeting:

Sponsorship management for semi-pro clubs

Improving sponsor retention

Commercial growth for 1,000–5,000 attendance clubs

Ensure each article links to Pilot CTA

Add contextual CTA blocks inside blog template

Deliverable: - Initial SEO footprint live at launch

#### 6. Performance & Accessibility Regression Pass

Re-run Lighthouse (mobile priority)

Validate Core Web Vitals

Check heading structure across all templates

Validate keyboard navigation in blog templates

Deliverable: - Site meets or exceeds defined performance thresholds

#### 7. Search Console & Analytics Validation

Verify GA4 and Search Console connected

Validate indexing of core pages

Confirm event tracking still firing post-SEO changes

Configure basic SEO dashboard view (traffic + landing pages)

Deliverable: - Visibility layer fully operational before launch

### Sprint 5 — QA + Launch

Content freeze

Full regression QA

Final analytics verification

Launch + post-launch backlog

## 7) Measurement & Iteration

KPI dashboard (traffic, conversion, funnel)

Heatmaps/session replay (optional)

Monthly iteration cadence

## 8) Open Questions / Assumptions

What is the single most valuable conversion today?

Are we selling to clubs first, or using the partner-led story to drive agency interest?

Do we need pricing publicly?

Will we have case studies at launch?

## 9) Decision Log

(Add dated decisions here)

## 10) Backlog

(Add future enhancements here)