<?php

declare(strict_types = 1);
namespace App\Abstracts\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

abstract class AuthAbstract extends Controller
{
    abstract public function index(?string $path = 'login'): View;

    final public function login(string $authMethod = 'sanctum'): RedirectResponse
    {
        return redirect()->back()->withErrors(provider: 'login', key: __('auth.login-error'));
    }

    final public function register(): RedirectResponse
    {
        return redirect()->back()->withErrors(provider: 'register', key: __('auth.register-error'));
    }

    final public function logout(): RedirectResponse
    {
        return redirect()->back()->withErrors(provider: 'logout', key: __('auth.logout-error'));
    }
}
