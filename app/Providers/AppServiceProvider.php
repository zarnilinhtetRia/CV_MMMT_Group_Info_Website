<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\EnsureUserRole;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Route::middleware('role.user', EnsureUserRole::class);
        // // Route::aliasMiddleware('role.user', EnsureUserRole::class);

        // Route::middleware(['auth', 'verified', 'role.user'])->group(function () {
        //     Route::resource('blogs', BlogController::class);
        // });

        // Route::get('/dashboard', function () {
        //     return view('index');
        // })->middleware(['auth', 'verified', 'role.user'])->name('dashboard');
    }
}
