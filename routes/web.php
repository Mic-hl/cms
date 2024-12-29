<?php

use App\Http\Controllers\ProjectController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Create dashboard route
    // Pass the user information as well as the role to the route
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard', [
            'user' => auth()->user(),
            'roles' => auth()->user() ? auth()->user()->roles->pluck('name')->toArray() : [],
        ]);
    })->name('dashboard');

    // Create project routes using the ProjectController as a ResourceController
    // Use RoleMiddleware and restrict the access to admins
    Route::resource('/projects',ProjectController::class)
        ->middleware(RoleMiddleware::class . ':admin');
});
