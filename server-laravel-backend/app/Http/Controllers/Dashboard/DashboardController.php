<?php

declare(strict_types = 1);
namespace App\Http\Controllers\Dashboard;

use App\Contracts\Contracts\Dashboard\DashboardInterface;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

final class DashboardController extends Controller implements DashboardInterface
{
    public function index(): View
    {
        return view(view: 'dashboard.index');
    }
}
