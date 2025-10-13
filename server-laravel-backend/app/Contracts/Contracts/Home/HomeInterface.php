<?php

declare(strict_types = 1);
namespace App\Contracts\Contracts\Home;

use Illuminate\View\View;

interface HomeInterface
{
    public function index(): View;
}
