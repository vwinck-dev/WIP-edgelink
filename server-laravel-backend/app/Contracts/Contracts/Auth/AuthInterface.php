<?php

declare(strict_types = 1);
namespace App\Contracts\Contracts\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

interface AuthInterface
{
    public function index(?string $path): View;

    public function login(string $authMethod): RedirectResponse;

    public function logout(): RedirectResponse;

    public function register(): RedirectResponse;
}
