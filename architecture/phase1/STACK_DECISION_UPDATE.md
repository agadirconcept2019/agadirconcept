# Stack decision update (binding)

Date: 2026-04-06

## Official stack
- PHP 8+
- Laravel 12.x
- MySQL

## Sprint 1 correction status
- Python runtime prototype is deprecated.
- Sprint 1 now targets a full Laravel 12 baseline structure (not partial framework-like files).
- Session auth + CSRF admin baseline remains in place.

## Version risk note
- Uses Laravel 12 boot conventions (`bootstrap/app.php`, `bootstrap/providers.php`).
- Mixing Laravel 10-era assumptions can break boot/runtime behavior.

## Scope boundary
Only Sprint 1 CMS basics are implemented. Sprint 2 is not started.
