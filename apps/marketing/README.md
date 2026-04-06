# Marketing app (Laravel / PHP 8+ / MySQL)

## 1) Exact Laravel target
- **Laravel 12.x** (`composer.json` uses `laravel/framework: ^12.0`).

## 2) Full Laravel baseline structure present
Core Laravel app skeleton files are present:
- `artisan`
- `bootstrap/app.php`
- `bootstrap/providers.php`
- `public/index.php`
- `app/Providers/AppServiceProvider.php`
- `config/*.php` (`app`, `database`, `session`, `filesystems`, `cache`, `queue`, `logging`, `mail`, `services`, `cms`)
- `routes/web.php`, `routes/console.php`
- `database/migrations/*`, `database/seeders/DatabaseSeeder.php`
- `resources/views/*`
- `storage/*` runtime directories

## 3) Sprint 1 CMS scope implemented
- session-based admin login/logout
- pages CRUD
- posts/articles CRUD
- menus CRUD
- reusable blocks CRUD
- settings persistence
- media upload + metadata update/delete

## 4) Real environment runbook
### A. Install dependencies and bootstrap env
```bash
cd apps/marketing
cp .env.example .env
composer install
php artisan key:generate
php artisan --version
php artisan list
```

### B. Create MySQL database
```sql
CREATE DATABASE agadir_marketing CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Set `.env`:
- `DB_CONNECTION=mysql`
- `DB_HOST`, `DB_PORT`
- `DB_DATABASE=agadir_marketing`
- `DB_USERNAME`, `DB_PASSWORD`

### C. Run migrations
```bash
php artisan migrate
```

### D. Create first admin account
```bash
php artisan cms:create-admin "Super Admin" admin@agadirconcept.test "ChangeMeNow123!"
```

### E. Start app
```bash
php artisan serve
```
Open: `http://127.0.0.1:8000/admin/login`

## 5) Smoke test checklist
1. Login page loads.
2. Login succeeds with created admin and fails with wrong password.
3. Pages: create/edit/delete works.
4. Posts: create/edit/delete works.
5. Menus: create/edit/delete works with valid JSON payload.
6. Reusable blocks: create/edit/delete works with valid JSON payload.
7. Settings: save key/value JSON and verify persistence after refresh.
8. Media: upload, update metadata, delete file and record.

## 6) Version mismatch risk
- This repository uses Laravel 12 boot conventions (`bootstrap/app.php` + `bootstrap/providers.php`).
- Forcing Laravel 10-era wiring assumptions can break runtime startup/middleware registration.

## 7) Sprint 1.1 post-validation sync
- Added Laravel 12 `withExceptions(...)` wiring in `bootstrap/app.php`.
- Added `public/.htaccess` for Apache routing/front-controller behavior.
- Preserved validated CMS runtime modules with no Sprint 2 expansion.


## Sprint 2 public pages
- `/` home
- `/services` services overview
- `/services/{slug}` detailed service pages
- `/about`
- `/contact-quote`
- `/faq`

Admin CMS routes remain under `/admin/*` unchanged.
