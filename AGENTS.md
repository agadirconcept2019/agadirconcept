# AGENTS.md — Agadir Concept

## Project overview

This repository is for **Phase 1 only** of the Agadir Concept ecosystem.

The full ecosystem has 3 separate parts:

1. Marketing website
2. SaaS application (Core + modules) — future phase
3. Client portal — future phase

Your current mission is to work on **Phase 1: the marketing website only**.

---

## Mandatory scope boundary

### In scope
You may work on:

- public marketing pages
- CMS/admin for marketing content
- services pages
- platform presentation pages
- modules presentation pages
- blog/articles
- media management
- menus/navigation
- reusable content blocks/sections
- forms
- lead capture
- quote request flows
- brief/project request flows
- service order/pre-order flows
- email notifications
- local submission storage
- integration-preparation layer for the future SaaS
- integration logs/statuses for future SaaS sync
- SEO-ready structure
- responsive UI
- accessibility basics
- performance basics
- legal pages

### Out of scope
Do NOT implement now:

- full SaaS Core
- full CRM business logic
- full Project Manager business logic
- full client portal
- real production billing engine
- real support ticketing system
- full unified authentication across products
- deep automation workflows
- advanced module runtime system for the SaaS

You may only prepare these future phases structurally where needed.

---

## Product positioning to reflect

Agadir Concept must be presented as:

**A web development and business web application agency, supported by a modular SaaS platform for client and project management.**

Main services to highlight:

- Web Development
- Web Application Development
- Hosting & Domain Names
- Maintenance & Support
- Automation & Integrations

Services removed from the main catalog:

- Graphic Design
- Social Media

SEO remains a secondary/complementary section, not a primary pillar.

---

## Architecture rules

### Separation of concerns is mandatory
Keep strict separation between:

- public frontend
- CMS/admin backend
- local marketing business services
- form handling
- local persistence
- email/notification layer
- future SaaS integration layer

Do not mix all concerns in the same files or modules.

### The marketing website must remain autonomous
The website must still work even if the future SaaS is unavailable.

All form submissions must be able to:

- validate input
- save locally
- notify internally
- prepare future SaaS synchronization
- expose integration status

### Future SaaS integration must be prepared, not fully implemented
Prepare structure for future sync events such as:

- contact_submitted
- quote_requested
- website_brief_submitted
- webapp_brief_submitted
- domain_hosting_request_submitted
- audit_request_submitted
- service_order_created

Prepare:
- normalized payload mapping
- integration statuses
- local/external references
- retry-ready structure
- integration logs

But do not build the full SaaS now.

---

## CMS expectations

The marketing website must be manageable like a practical CMS similar to WordPress in day-to-day use.

Minimum expected CMS capabilities:

- pages
- posts/articles
- media library
- menus
- reusable sections/blocks
- site settings
- forms
- services content type
- modules content type
- case studies / realizations
- testimonials
- FAQ
- submission records
- integration log visibility

The admin experience must be usable by a non-developer.

---

## UX/UI expectations

The UI must be:

- premium
- professional
- modern
- elegant
- clear
- conversion-oriented
- responsive
- coherent across all pages

Forms must be clean, reassuring, accessible, and easy to use.

---

## Technical quality rules

### Security
Always apply:
- strict input validation
- CSRF protection
- access control for admin areas
- upload safety
- anti-spam measures on forms
- safe error handling

### Accessibility
Always apply:
- semantic HTML
- explicit labels
- visible focus states
- keyboard navigation support
- sufficient contrast
- accessible forms

### Performance
Prefer:
- optimized assets
- optimized images
- conditional loading where relevant
- reusable components
- minimal unnecessary JS/CSS

### Maintainability
Always prefer:
- modular structure
- reusable components
- clear naming
- low coupling
- no hacks
- no dead code

---

## Delivery rules

- Work in coherent batches
- Do not introduce regressions
- Preserve validated behavior
- Document important architectural decisions
- Keep the codebase understandable
- Do not fake future SaaS completion
- Clearly separate what is implemented now vs planned later

For every substantial change, report:
- what was added
- what was modified
- what remains for later
- how to test it

---

## Execution order

Follow this order unless explicitly told otherwise:

1. Foundation
2. CMS basics
3. Main marketing pages
4. Platform/modules pages
5. Forms and conversion flows
6. SaaS pre-integration layer
7. QA / SEO / accessibility / polish

---

## Definition of done for Phase 1

Phase 1 is successful only if:

- the marketing site is fully usable on its own
- the CMS is usable by a non-developer
- main pages are editable
- forms work correctly
- submissions are stored locally
- future SaaS integration is structurally prepared
- no SaaS business logic is incorrectly embedded into the site
- the UI is premium and responsive
