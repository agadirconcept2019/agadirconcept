# Sprint 1 — CMS Basics (Laravel implementation)

## Exact version target
- Laravel **12.x**
- PHP 8+
- MySQL

## Structure alignment confirmation
The app uses Laravel 11/12 style boot files and routing/middleware configuration in `bootstrap/app.php`, aligned with Laravel 12 conventions.

## Implemented Sprint 1 runtime baseline
- session-based admin authentication
- CSRF-protected admin write actions
- pages/posts/menus/blocks/settings/media foundations
- routes/controllers/models/migrations/blade wiring

## Real-environment runbook
1. `cd apps/marketing`
2. `cp .env.example .env`
3. `composer install`
4. `php artisan key:generate`
5. Create MySQL DB `agadir_marketing`
6. Configure DB credentials in `.env`
7. `php artisan migrate`
8. `php artisan cms:create-admin "Super Admin" admin@agadirconcept.test "ChangeMeNow123!"`
9. `php artisan serve`
10. Open `/admin/login`

## Functional validation steps
- login success/failure behavior
- pages CRUD
- posts CRUD
- menus CRUD (JSON payload)
- reusable blocks CRUD (JSON payload)
- settings persistence
- media upload + metadata update + delete

## Explicitly not implemented
- Sprint 2 public marketing pages
- SaaS Core / CRM / Project Manager / Client Portal
