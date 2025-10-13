<?php

declare(strict_types = 1);
namespace App\Contracts\Contracts\Dashboard;

use Illuminate\View\View;

interface DashboardInterface
{
    public function index(): View;
}
