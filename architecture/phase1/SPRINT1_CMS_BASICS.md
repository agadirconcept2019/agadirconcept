# Sprint 1 — CMS Basics (Laravel 12 runnable baseline)

## Stack
- PHP 8+
- Laravel 12.x
- MySQL

## Goal
Provide a real runnable Laravel CMS baseline for Sprint 1 only.

## Implemented
- Full Laravel baseline skeleton files (bootstrap/config/providers/routes/public/artisan/storage).
- Session-based admin authentication with DB-backed admin users.
- CSRF-protected write actions in admin forms.
- CRUD modules for pages, posts, menus, reusable blocks, settings, media.
- Migrations for sessions, admin_users, and all CMS entities.

## Runtime verification runbook
1. `cd apps/marketing`
2. `cp .env.example .env`
3. `composer install`
4. `php artisan key:generate`
5. `php artisan --version`
6. `php artisan list`
7. Create MySQL DB `agadir_marketing`
8. Configure DB credentials in `.env`
9. `php artisan migrate`
10. `php artisan cms:create-admin "Super Admin" admin@agadirconcept.test "ChangeMeNow123!"`
11. `php artisan serve`
12. Open `/admin/login` and run smoke tests

## Smoke tests
- login success/failure
- pages CRUD
- posts CRUD
- menus CRUD
- reusable blocks CRUD
- settings persistence
- media upload foundation

## Explicitly not implemented
- Sprint 2 public marketing pages
- SaaS Core / CRM / Project Manager / Client Portal
