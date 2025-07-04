<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'icon',
        'link',
        'sort_order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get active services ordered by sort_order
     */
    public static function getActiveServices()
    {
        return self::where('is_active', true)
                   ->orderBy('sort_order', 'asc')
                   ->orderBy('created_at', 'asc')
                   ->get();
    }

    /**
     * Get all services for admin
     */
    public static function getAllServices()
    {
        return self::orderBy('sort_order', 'asc')
                   ->orderBy('created_at', 'asc')
                   ->get();
    }
}
