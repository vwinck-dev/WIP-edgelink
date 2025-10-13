<?php

declare(strict_types = 1);
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

final class AuthController extends Controller
{
    public function index(string $path = 'login'): void {}

    public function login(string $authMethod = 'sanctum'): void {}

    public function logout(): void {}

    public function register(): void {}
}
