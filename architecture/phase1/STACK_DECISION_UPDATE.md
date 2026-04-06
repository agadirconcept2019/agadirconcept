# Stack decision update (binding)

Date: 2026-04-06

## Official implementation stack
- PHP 8+
- Laravel 12.x
- MySQL

## Sprint 1 implementation notes
- Python runtime prototype is deprecated.
- Laravel runtime uses session authentication + CSRF-protected admin writes.
- CMS entities in scope: pages, posts, media, menus, settings, reusable blocks.

## Version convention risk
- This implementation follows Laravel 12 boot conventions (`bootstrap/app.php` middleware/routing configuration).
- Mixing Laravel 10-era assumptions can break runtime wiring.

## Scope remains unchanged
Only Sprint 1 CMS basics are implemented. No Sprint 2 public pages and no SaaS/Core/CRM/Project Manager/Client Portal logic.
