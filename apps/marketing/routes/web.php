<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ReusableBlockController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\PublicSite\PageController as PublicPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicPageController::class, 'home'])->name('public.home');
Route::get('/services', [PublicPageController::class, 'services'])->name('public.services');
Route::get('/services/{slug}', [PublicPageController::class, 'serviceDetail'])->name('public.services.show');
Route::get('/about', [PublicPageController::class, 'about'])->name('public.about');
Route::get('/contact-quote', [PublicPageController::class, 'contactQuote'])->name('public.contact-quote');
Route::get('/faq', [PublicPageController::class, 'faq'])->name('public.faq');

Route::prefix('admin')->name('admin.')->group(function (): void {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');

    Route::middleware(['admin.auth'])->group(function (): void {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::view('/', 'admin.dashboard')->name('dashboard');

        Route::resource('pages', PageController::class)->except(['show']);
        Route::resource('posts', PostController::class)->except(['show']);
        Route::resource('menus', MenuController::class)->except(['show']);

        Route::get('media', [MediaController::class, 'index'])->name('media.index');
        Route::post('media', [MediaController::class, 'store'])->name('media.store');
        Route::put('media/{media}', [MediaController::class, 'update'])->name('media.update');
        Route::delete('media/{media}', [MediaController::class, 'destroy'])->name('media.destroy');

        Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
        Route::post('settings', [SettingController::class, 'store'])->name('settings.store');
        Route::delete('settings/{setting}', [SettingController::class, 'destroy'])->name('settings.destroy');

        Route::resource('blocks', ReusableBlockController::class)
            ->parameters(['blocks' => 'block'])
            ->except(['show']);
    });
});
