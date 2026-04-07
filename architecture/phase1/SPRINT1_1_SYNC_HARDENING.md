# Sprint 1.1 — Post-validation sync / hardening

## Scope
Sprint 1.1 only. No Sprint 2 work.

## Purpose
Sync repository baseline with the validated hosting runtime and harden Laravel boot/routing entrypoints.

## Applied updates
1. `bootstrap/app.php`
   - kept Laravel 12 routing + middleware wiring
   - added explicit `withExceptions(...)` hook per Laravel 12 boot conventions
2. `public/.htaccess`
   - added Apache front-controller rewrite rules for Laravel routing
3. `artisan`
   - retained Laravel-compatible console entrypoint
4. CMS runtime preservation
   - session auth, CSRF, migrations, admin CRUD modules unchanged functionally

## Boundary confirmation
- Laravel 12 / PHP 8+ / MySQL preserved
- Sprint 2 not started
