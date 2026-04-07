<?php

use App\Models\AdminUser;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

Artisan::command('cms:create-admin {name} {email} {password}', function (): void {
    $admin = AdminUser::query()->updateOrCreate(
        ['email' => (string) $this->argument('email')],
        [
            'name' => (string) $this->argument('name'),
            'password_hash' => Hash::make((string) $this->argument('password')),
        ]
    );

    $this->info("Admin user ready: {$admin->email}");
});
