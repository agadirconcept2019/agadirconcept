# Sprint 0 — Foundation (Phase 1 Marketing Website)

## 1) Scope confirmation

### Active scope (Phase 1 only)
- Public marketing website pages.
- Marketing CMS/admin for content operations.
- Conversion forms and submission lifecycle.
- Local persistence for submissions.
- Internal notifications (email-ready layer).
- Future SaaS integration **preparation only**.

### Out of scope (explicit)
- Full SaaS Core.
- Full CRM business logic.
- Full Project Manager business logic.
- Full client portal implementation.
- Production billing/ticketing/unified auth/advanced automations.

## 2) In scope vs out of scope matrix

| Domain | In Phase 1 | Out of scope now |
|---|---|---|
| Marketing pages | ✅ Yes | — |
| CMS content operations | ✅ Yes | — |
| Forms + local submissions | ✅ Yes | — |
| Integration logs + statuses | ✅ Yes | — |
| SaaS object orchestration | ❌ No | Full CRM/PM logic |
| Client portal runtime | ❌ No | Full portal |
| Unified auth across ecosystem | ❌ No | SSO and shared auth stack |

## 3) Technical architecture proposal

### Architecture style
Layered modular monolith for Phase 1, with strict boundaries:
- `frontend` (public UI)
- `admin` (CMS UI + admin workflows)
- `forms` (validation + anti-spam + normalization)
- `persistence` (local storage + repositories)
- `notifications` (internal email dispatch abstraction)
- `integrations/saas` (future sync adapter, logs, retry metadata)

### Runtime behavior
1. Public user submits form.
2. `forms` validates and normalizes input.
3. `persistence` stores local submission (`pending` integration status).
4. `notifications` emits internal email event.
5. `integrations/saas` prepares normalized payload + idempotency key and logs initial sync state.
6. User receives success if local pipeline succeeds, regardless of SaaS availability.

## 4) Repository structure proposal

```text
apps/
  marketing/
    src/
      frontend/
      admin/
      forms/
      persistence/
      notifications/
      integrations/saas/
      design-system/
      config/
architecture/
  phase1/
```

## 5) CMS data/content structure proposal

Planned entities:
- `page`
- `post`
- `service`
- `module`
- `case_study`
- `testimonial`
- `faq_item`
- `menu`
- `media_asset`
- `form_definition`
- `submission_record`
- `integration_log`
- `site_setting`

## 6) Separation of concerns (target contracts)

- Public frontend: render-only consumers of published content.
- Admin/CMS backend: content CRUD, media management, menu/settings/forms config.
- Forms/submissions: dedicated input contracts, validation rules, anti-spam checks.
- Local persistence: submission records, integration statuses, retry counters.
- Email/notification layer: isolated adapter (SMTP/provider pluggable later).
- Future SaaS integration layer: payload mapping, idempotency, sync logs, replay-ready metadata.

## 7) Important assumptions

1. Phase 1 can start as a modular monolith to reduce early complexity.
2. Storage engine is not fixed in Sprint 0 (schema-first preparation).
3. External SaaS endpoint may be unavailable; local-first success is mandatory.
4. Bilingual content can be added later; structures remain language-ready.

## 8) Sprint 0 implementation boundary

Implemented now:
- foundation folders and layer placeholders,
- initial architecture and data model artifacts,
- baseline settings/roles/integration contracts,
- design token seed.

Not implemented now:
- CMS CRUD screens,
- public marketing pages,
- form runtime handlers,
- real email sending,
- real SaaS API communication.
