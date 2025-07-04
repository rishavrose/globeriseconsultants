<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class WebsiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
        'group',
        'label',
        'description',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get setting value by key
     */
    public static function getValue($key, $default = null)
    {
        $setting = static::where('key', $key)->where('is_active', true)->first();
        return $setting ? $setting->value : $default;
    }

    /**
     * Set setting value by key
     */
    public static function setValue($key, $value)
    {
        return static::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
    }

    /**
     * Get all settings grouped by group
     */
    public static function getGroupedSettings()
    {
        return static::where('is_active', true)
            ->orderBy('group')
            ->orderBy('sort_order')
            ->get()
            ->groupBy('group');
    }

    /**
     * Get image URL for image type settings
     */
    public function getImageUrlAttribute()
    {
        if ($this->type === 'image' && $this->value) {
            return Storage::url($this->value);
        }
        return null;
    }

    /**
     * Get formatted value based on type
     */
    public function getFormattedValueAttribute()
    {
        switch ($this->type) {
            case 'image':
                return $this->image_url;
            case 'url':
                return $this->value ? url($this->value) : null;
            case 'email':
                return $this->value;
            case 'phone':
                return $this->value;
            default:
                return $this->value;
        }
    }
}
