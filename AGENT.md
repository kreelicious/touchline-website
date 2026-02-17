# AGENT.md  
Touchline Marketing Website — Development Agent Rules

## Canonical Specification

The authoritative design and UI specification lives in:

/docs/spec/design-system.md

All tokens, typography, spacing, component rules, and UI behaviour must match that document.
If a rule is unclear, do not invent one — flag it.
---

## 1. Project Context

This repository contains the **Touchline marketing website**, built as a **WordPress block theme**.

The site exists to:

- Attract ambitious semi-pro and lower-league professional football clubs (1,000–5,000 attendance)
- Drive **Apply for Pilot** and **Join Waitlist** conversions
- Establish trust with board members and chairpersons
- Present Touchline as modern, credible, and optimistic

This is not a generic WordPress theme.  
It is a **conversion-focused SaaS marketing system**.

---

## 2. Core Architectural Principles

### 2.1 Block Theme Only

- Must be a **WordPress block theme**
- `theme.json` is the source of truth
- Avoid traditional PHP templating where possible
- Use template parts and patterns instead of page builders

---

### 2.2 Patterns-First System

All marketing pages must be built from reusable patterns.

Patterns are the primary building blocks:

- `hero-home`
- `problem-cards`
- `workflow-4-step`
- `feature-grid`
- `outcome-before-after`
- `faq-accordion`
- `cta-band-dark`
- `cta-band-light`

No one-off section builds unless explicitly approved.

---

### 2.3 Highly Constrained Editor

Marketing pages must:

- Restrict allowed blocks
- Encourage pattern usage
- Prevent layout breakage
- Prevent arbitrary color overrides
- Prevent inline styling abuse

Posts (blog) may allow more flexibility than Pages.

---

## 3. Design System Rules

### 3.1 Source of Truth

All design tokens must live in:

theme/touchline/theme.json


No scattered styling logic.

---

### 3.2 Styling Philosophy

- Prefer `theme.json` over CSS
- Prefer presets over custom values
- Prefer system classes over inline styles
- CSS should be minimal and intentional
- No random utility bloat

---

### 3.3 Visual Direction

**Tone:**

- Trust-based
- Modern and optimistic
- Slightly softer and approachable
- Subtly dimensional
- Not flashy
- Not startup-hype

**Icons:**

- Slightly rounded
- Filled style preferred
- Consistent stroke weight

**Typography:**

- Clean Google font
- Distinct but not quirky
- Professional and credible

---

## 4. Conversion & CTA Rules

Primary CTAs:

- Apply for Pilot
- Join Waitlist

Every CTA button must include:

data-cta-type="pilot|waitlist"
data-source-page="home|platform|for-clubs|blog|resources|header|cta-band"


Events:

- `pilot_cta_click`
- `waitlist_cta_click`

No CTA should exist without tracking attributes.

---

## 5. Performance Requirements

Every PR must:

- Pass Lighthouse ≥ 90 in:
  - Performance
  - SEO
  - Best Practices
  - Accessibility
- No console errors
- No layout shift in hero
- No blocking JS unless necessary
- No oversized images

Avoid:

- Large animation libraries
- Heavy front-end frameworks
- Over-engineered JS

This is a marketing site, not a web app.

---

## 6. Accessibility Standards

- Proper heading hierarchy (single H1 per page)
- Buttons must be actual buttons or accessible links
- Sufficient color contrast
- Keyboard navigable
- No click-only interactions
- Semantic HTML always preferred

---

## 7. Development Workflow

### 7.1 Sprint Structure

Each sprint should:

1. Define pattern(s) to build
2. Implement in isolation
3. Test in template assembly
4. Run Lighthouse
5. Refactor before merge

---

### 7.2 PR Rules

Each PR must:

- Be small and focused
- Include a short summary of changes
- Confirm Lighthouse results
- Confirm accessibility check
- Confirm no visual regressions

No massive dump PRs.

---

## 8. Folder Discipline

Never restructure without approval.

Theme structure:

theme/touchline/
templates/
parts/
patterns/
inc/
assets/
styles/


Patterns live only in `/patterns`.

No random duplication of components.

---

## 9. What to Avoid

- Page builders
- Elementor
- Inline styling chaos
- Hardcoded spacing
- Magic numbers
- Overly clever abstractions
- Feature creep
- Startup landing page clichés

---

## 10. Decision Logging

All meaningful architectural or design decisions must be logged in:

/docs/decisions.md


Include:

- Date
- Decision
- Reason
- Tradeoffs

---

## 11. Deployment

Target:

- WordPress (Cloudways environment)
- Theme exported via zip
- No database-coupled assumptions
- Must work clean on fresh WP install

---

## 12. Guiding Principle

This website should feel like:

> A serious, well-run football club stepping into a more professional future.

Not a tech startup.  
Not a hobby project.  
Not a design experiment.

Clarity over cleverness.  
Trust over trendiness.  
Structure over chaos.