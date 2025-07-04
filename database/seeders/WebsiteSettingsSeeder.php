<?php

namespace Database\Seeders;

use App\Models\WebsiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // General Settings
            [
                'key' => 'site_title',
                'label' => 'Site Title',
                'value' => 'Globe Rise Consultants',
                'type' => 'text',
                'group' => 'general',
                'description' => 'Main title of the website',
                'sort_order' => 1,
            ],
            [
                'key' => 'site_tagline',
                'label' => 'Site Tagline',
                'value' => 'Your Global Immigration Partner',
                'type' => 'text',
                'group' => 'general',
                'description' => 'Short description or tagline for the site',
                'sort_order' => 2,
            ],
            [
                'key' => 'site_description',
                'label' => 'Site Description',
                'value' => 'Globe Rise Consultants provides comprehensive immigration and visa services to help you achieve your global mobility goals.',
                'type' => 'textarea',
                'group' => 'general',
                'description' => 'Meta description for SEO',
                'sort_order' => 3,
            ],
            [
                'key' => 'site_logo',
                'label' => 'Site Logo',
                'value' => null,
                'type' => 'image',
                'group' => 'general',
                'description' => 'Main logo of the website',
                'sort_order' => 4,
            ],
            [
                'key' => 'favicon',
                'label' => 'Favicon',
                'value' => null,
                'type' => 'image',
                'group' => 'general',
                'description' => 'Website favicon (16x16 or 32x32 pixels)',
                'sort_order' => 5,
            ],

            // Contact Settings
            [
                'key' => 'contact_email',
                'label' => 'Contact Email',
                'value' => 'info@globeriseconsultants.com',
                'type' => 'email',
                'group' => 'contact',
                'description' => 'Main contact email address',
                'sort_order' => 1,
            ],
            [
                'key' => 'contact_phone',
                'label' => 'Contact Phone',
                'value' => '+1 (555) 123-4567',
                'type' => 'phone',
                'group' => 'contact',
                'description' => 'Main contact phone number',
                'sort_order' => 2,
            ],
            [
                'key' => 'contact_address',
                'label' => 'Contact Address',
                'value' => '123 Business Street, Suite 100, City, State 12345',
                'type' => 'textarea',
                'group' => 'contact',
                'description' => 'Physical address of the business',
                'sort_order' => 3,
            ],
            [
                'key' => 'business_hours',
                'label' => 'Business Hours',
                'value' => 'Monday - Friday: 9:00 AM - 6:00 PM\nSaturday: 10:00 AM - 4:00 PM\nSunday: Closed',
                'type' => 'textarea',
                'group' => 'contact',
                'description' => 'Business operating hours',
                'sort_order' => 4,
            ],

            // Social Media Settings
            [
                'key' => 'facebook_url',
                'label' => 'Facebook URL',
                'value' => null,
                'type' => 'url',
                'group' => 'social',
                'description' => 'Facebook page URL',
                'sort_order' => 1,
            ],
            [
                'key' => 'twitter_url',
                'label' => 'Twitter URL',
                'value' => null,
                'type' => 'url',
                'group' => 'social',
                'description' => 'Twitter profile URL',
                'sort_order' => 2,
            ],
            [
                'key' => 'instagram_url',
                'label' => 'Instagram URL',
                'value' => null,
                'type' => 'url',
                'group' => 'social',
                'description' => 'Instagram profile URL',
                'sort_order' => 3,
            ],
            [
                'key' => 'linkedin_url',
                'label' => 'LinkedIn URL',
                'value' => null,
                'type' => 'url',
                'group' => 'social',
                'description' => 'LinkedIn company page URL',
                'sort_order' => 4,
            ],
            [
                'key' => 'youtube_url',
                'label' => 'YouTube URL',
                'value' => null,
                'type' => 'url',
                'group' => 'social',
                'description' => 'YouTube channel URL',
                'sort_order' => 5,
            ],

            // SEO Settings
            [
                'key' => 'meta_keywords',
                'label' => 'Meta Keywords',
                'value' => 'immigration, visa, consultants, global mobility, immigration services',
                'type' => 'textarea',
                'group' => 'seo',
                'description' => 'Meta keywords for SEO (comma separated)',
                'sort_order' => 1,
            ],
            [
                'key' => 'google_analytics_id',
                'label' => 'Google Analytics ID',
                'value' => null,
                'type' => 'text',
                'group' => 'seo',
                'description' => 'Google Analytics tracking ID (e.g., GA-XXXXXXXXX-X)',
                'sort_order' => 2,
            ],
            [
                'key' => 'google_maps_api_key',
                'label' => 'Google Maps API Key',
                'value' => null,
                'type' => 'text',
                'group' => 'seo',
                'description' => 'API key for Google Maps integration',
                'sort_order' => 3,
            ],

            // Appearance Settings
            [
                'key' => 'primary_color',
                'label' => 'Primary Color',
                'value' => '#3498db',
                'type' => 'text',
                'group' => 'appearance',
                'description' => 'Primary brand color (hex code)',
                'sort_order' => 1,
            ],
            [
                'key' => 'secondary_color',
                'label' => 'Secondary Color',
                'value' => '#2c3e50',
                'type' => 'text',
                'group' => 'appearance',
                'description' => 'Secondary brand color (hex code)',
                'sort_order' => 2,
            ],
            [
                'key' => 'footer_text',
                'label' => 'Footer Text',
                'value' => '© 2024 Globe Rise Consultants. All rights reserved.',
                'type' => 'textarea',
                'group' => 'appearance',
                'description' => 'Copyright text in footer',
                'sort_order' => 3,
            ],
        ];

        foreach ($settings as $setting) {
            WebsiteSetting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
