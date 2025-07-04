<?php

namespace App\Providers;

use App\Services\SettingsService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share settings with all views
        View::composer('*', function ($view) {
            try {
                $settings = SettingsService::all();
                $view->with('globalSettings', $settings);
            } catch (\Exception $e) {
                // In case of database issues during migration, etc.
                $view->with('globalSettings', []);
            }
        });
    }
}
