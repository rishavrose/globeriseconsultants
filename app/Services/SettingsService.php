<?php

namespace App\Services;

use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\Cache;

class SettingsService
{
    /**
     * Get a setting value by key
     */
    public static function get($key, $default = null)
    {
        return Cache::remember("setting.{$key}", 3600, function () use ($key, $default) {
            return WebsiteSetting::getValue($key, $default);
        });
    }

    /**
     * Set a setting value by key
     */
    public static function set($key, $value)
    {
        Cache::forget("setting.{$key}");
        return WebsiteSetting::setValue($key, $value);
    }

    /**
     * Get all settings grouped by group
     */
    public static function getGroupedSettings()
    {
        return Cache::remember('settings.grouped', 3600, function () {
            return WebsiteSetting::getGroupedSettings();
        });
    }

    /**
     * Clear settings cache
     */
    public static function clearCache()
    {
        $settings = WebsiteSetting::all();
        foreach ($settings as $setting) {
            Cache::forget("setting.{$setting->key}");
        }
        Cache::forget('settings.grouped');
    }

    /**
     * Get all settings as key-value pairs
     */
    public static function all()
    {
        return Cache::remember('settings.all', 3600, function () {
            return WebsiteSetting::where('is_active', true)
                ->pluck('value', 'key')
                ->toArray();
        });
    }
}
