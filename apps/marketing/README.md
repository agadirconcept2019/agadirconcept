# Marketing app (Laravel / PHP 8+ / MySQL)

## 1) Exact Laravel target
- **Laravel 12.x** (declared in `composer.json` as `"laravel/framework": "^12.0"`).

## 2) Laravel 12 structure alignment
Current structure follows Laravel 11/12 boot conventions:
- `artisan`
- `bootstrap/app.php`
- `public/index.php`
- `routes/web.php`
- `routes/console.php`
- `app/Http/Middleware/*`
- `app/Http/Controllers/*`
- `app/Models/*`
- `database/migrations/*`
- `resources/views/*`

## 3) Sprint 1 scope (implemented)
- admin login/logout with session auth
- pages CRUD
- posts/articles CRUD
- menus CRUD
- reusable blocks CRUD
- settings persistence
- media upload + metadata update/delete

## 4) Local runbook (real environment)
### A. Install dependencies
```bash
cd apps/marketing
cp .env.example .env
composer install
php artisan key:generate
```

### B. Create database (MySQL)
```sql
CREATE DATABASE agadir_marketing CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Set `.env` values:
- `DB_CONNECTION=mysql`
- `DB_HOST`, `DB_PORT`
- `DB_DATABASE=agadir_marketing`
- `DB_USERNAME`, `DB_PASSWORD`

### C. Run migrations (includes sessions table)
```bash
php artisan migrate
```

### D. Create first admin account
```bash
php artisan cms:create-admin "Super Admin" admin@agadirconcept.test "ChangeMeNow123!"
```

### E. Start local server
```bash
php artisan serve
```
Open: `http://127.0.0.1:8000/admin/login`

## 5) Functional validation checklist
1. Login with created admin account.
2. Pages: create/edit/delete and verify list refresh.
3. Posts: create/edit/delete and verify list refresh.
4. Menus: create/edit/delete with valid JSON items payload.
5. Reusable blocks: create/edit/delete with valid JSON payload.
6. Settings: upsert group/key/value_json and verify persistence after refresh.
7. Media: upload file, edit metadata, delete file + record.

## 6) Version mismatch risk note
- This codebase intentionally follows **Laravel 12 boot style** (`bootstrap/app.php` routing/middleware config).
- If someone forces Laravel 10-style assumptions (legacy `Http\Kernel` + older bootstrap), wiring mismatches may occur.
- Keep framework at Laravel 12.x to avoid convention drift.
