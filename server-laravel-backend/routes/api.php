<?php

declare(strict_types = 1);

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\{JsonResponse, Request};
use Illuminate\Support\Facades\Route;

Route::post(uri: '/login/{authMethod}', action: [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function (): void {});

Route::get(uri: '/ping', action: fn (Request $request): JsonResponse => response()->json(data: [
    'message'   => 'pong',
    'timestamp' => now()->toIso8601String(),
]));
