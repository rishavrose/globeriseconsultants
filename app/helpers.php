<?php

use App\Services\SettingsService;

if (!function_exists('setting')) {
    /**
     * Get website setting value
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function setting($key, $default = null)
    {
        return SettingsService::get($key, $default);
    }
}

if (!function_exists('settings')) {
    /**
     * Get all website settings
     *
     * @return array
     */
    function settings()
    {
        return SettingsService::all();
    }
}
