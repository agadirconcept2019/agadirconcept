# Marketing app (Laravel / PHP 8+ / MySQL)

## 1) Exact Laravel target

- pages CRUD
- posts/articles CRUD
- menus CRUD
- reusable blocks CRUD
- settings persistence
- media upload + metadata update/delete


```bash
cd apps/marketing
cp .env.example .env
composer install
php artisan key:generate

```sql
CREATE DATABASE agadir_marketing CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```


- `DB_CONNECTION=mysql`
- `DB_HOST`, `DB_PORT`
- `DB_DATABASE=agadir_marketing`
- `DB_USERNAME`, `DB_PASSWORD`


```bash
php artisan migrate
```

### D. Create first admin account
```bash
php artisan cms:create-admin "Super Admin" admin@agadirconcept.test "ChangeMeNow123!"
```


```bash
php artisan serve
```
Open: `http://127.0.0.1:8000/admin/login`


