<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected function mapWebRoutes()
{
    Route::middleware('web')
         ->group(base_path('routes/web.php'));
}
}