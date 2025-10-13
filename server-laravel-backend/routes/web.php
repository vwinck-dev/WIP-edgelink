<?php

declare(strict_types = 1);

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(callback: function (): void {
    Route::get(uri: '/', action: [HomeController::class, 'index'])->name(name: 'home');
    Route::get(uri: '/auth/{path?}', action: [AuthController::class, 'index'])->name(name: 'login');
    Route::get(uri: '/auth/{path?}', action: [AuthController::class, 'index'])->name(name: 'register');

    Route::middleware(['throttle:5,1'])->post(
        uri: '/login/{authMethod}',
        action: [AuthController::class, 'login']
    )->name(name: 'auth.login');
});

Route::middleware(['auth'])->group(callback: function (): void {
    Route::get(uri: '/dashboard', action: [DashboardController::class, 'index'])->name(name: 'dashboard');
});
