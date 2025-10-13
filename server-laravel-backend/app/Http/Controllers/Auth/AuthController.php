<?php

declare(strict_types = 1);
namespace App\Http\Controllers\Auth;

use App\Abstracts\Controllers\Auth\AuthAbstract;
use App\Contracts\Contracts\Auth\AuthInterface;
use Illuminate\View\View;

final class AuthController extends AuthAbstract implements AuthInterface
{
    public function index(?string $path = 'login'): View
    {
        return match($path) {
            'login'    => view(view: 'auth.login'),
            'register' => view(view: 'auth.register'),
            default    => view(view: 'auth.login'),
        };
    }
}
