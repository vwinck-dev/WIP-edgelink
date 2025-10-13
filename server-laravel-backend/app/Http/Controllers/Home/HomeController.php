<?php

declare(strict_types = 1);
namespace App\Http\Controllers\Home;

use App\Contracts\Contracts\Home\HomeInterface;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

final class HomeController extends Controller implements HomeInterface
{
    public function index(): View
    {
        return view(view: 'home.index');
    }
}
