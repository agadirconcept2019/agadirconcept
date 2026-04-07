<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\ReusableBlockController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\PublicSite\PageController;
use Illuminate\Support\Facades\Route;

// Public marketing pages (Sprint 2)
Route::get('/', [PageController::class, 'home'])->name('public.home');
Route::get('/services', [PageController::class, 'services'])->name('public.services');
Route::get('/services/{slug}', [PageController::class, 'serviceDetail'])->name('public.services.show');
Route::get('/about', [PageController::class, 'about'])->name('public.about');
Route::get('/contact-quote', [PageController::class, 'contactQuote'])->name('public.contact-quote');
Route::get('/faq', [PageController::class, 'faq'])->name('public.faq');
Route::get('/platform', [PageController::class, 'platform'])->name('public.platform');
Route::get('/modules', [PageController::class, 'modules'])->name('public.modules');
Route::get('/modules/crm', [PageController::class, 'crmModule'])->name('public.modules.crm');
Route::get('/modules/project-manager', [PageController::class, 'projectManagerModule'])->name('public.modules.project-manager');
Route::get('/client-space', [PageController::class, 'clientSpace'])->name('public.client-space');

// Admin CMS (validated Sprint 1 foundation)
Route::prefix('admin')->name('admin.')->group(function (): void {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

    Route::middleware(['admin.auth'])->group(function (): void {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::view('/', 'admin.dashboard')->name('dashboard');
        Route::resource('pages', AdminPageController::class)->except(['show']);
        Route::resource('posts', AdminPostController::class)->except(['show']);
        Route::resource('menus', MenuController::class)->except(['show']);

        Route::get('media', [MediaController::class, 'index'])->name('media.index');
        Route::post('media', [MediaController::class, 'store'])->name('media.store');
        Route::put('media/{media}', [MediaController::class, 'update'])->name('media.update');
        Route::delete('media/{media}', [MediaController::class, 'destroy'])->name('media.destroy');

        Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
        Route::post('settings', [SettingController::class, 'store'])->name('settings.store');
        Route::delete('settings/{setting}', [SettingController::class, 'destroy'])->name('settings.destroy');

        Route::resource('blocks', ReusableBlockController::class)->parameters(['blocks' => 'block'])->except(['show']);
    });
});
