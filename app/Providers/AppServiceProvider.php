<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

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
        Inertia::share([
            'auth' => function () {
                $user = auth()->user();

                return [
                    'user' => $user ? $user->only(['id', 'name', 'email']) : null,
                    // Extract role names as an array of strings
                    'roles' => $user ? $user->roles->pluck('name')->toArray() : [],
                ];
            },
        ]);
    }
}
