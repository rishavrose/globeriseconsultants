# Website Settings Management System

This system allows administrators to manage various website settings like logo, title, contact information, social media links, and more from the admin panel.

## Features

- **Dynamic Settings Management**: Add, edit, delete, and toggle website settings
- **Multiple Field Types**: Text, textarea, email, phone, URL, image, and file uploads
- **Grouped Organization**: Settings are organized into logical groups (general, contact, social, seo, appearance)
- **Caching**: Settings are cached for better performance
- **Global Access**: Settings are available throughout the application via helper functions
- **File Management**: Automatic file upload and deletion for image/file type settings

## Admin Panel Access

1. Login to admin panel: `/admin/login`
2. Navigate to "Website Settings" from the sidebar
3. View all settings grouped by category
4. Add new settings using the "Add New Setting" button
5. Edit existing settings by clicking the edit icon
6. Toggle settings on/off using the status button
7. Delete settings using the delete icon (with confirmation)

## Available Setting Types

- **Text**: Single line text input
- **Textarea**: Multi-line text input
- **Email**: Email validation
- **Phone**: Phone number input
- **URL**: URL validation
- **Image**: Image file upload (JPEG, PNG, JPG, GIF, SVG up to 2MB)
- **File**: Any file upload (up to 10MB)

## Setting Groups

- **General**: Site title, tagline, description, logo, favicon
- **Contact**: Email, phone, address, business hours
- **Social**: Social media links (Facebook, Twitter, Instagram, LinkedIn, YouTube)
- **SEO**: Meta keywords, Google Analytics ID, Google Maps API key
- **Appearance**: Primary color, secondary color, footer text

## Usage in Code

### Helper Functions

```php
// Get a setting value
$siteTitle = setting('site_title', 'Default Title');

// Get all settings as array
$allSettings = settings();
```

### In Blade Views

```blade
<!-- Display site title -->
<h1>{{ setting('site_title', 'Default Title') }}</h1>

<!-- Display logo if exists -->
@if(setting('site_logo'))
    <img src="{{ Storage::url(setting('site_logo')) }}" alt="Logo">
@endif

<!-- Display contact email with link -->
@if(setting('contact_email'))
    <a href="mailto:{{ setting('contact_email') }}">{{ setting('contact_email') }}</a>
@endif

<!-- Display social media links -->
@if(setting('facebook_url'))
    <a href="{{ setting('facebook_url') }}" target="_blank">Facebook</a>
@endif
```

### In Controllers

```php
use App\Services\SettingsService;

class HomeController extends Controller
{
    public function index()
    {
        $siteTitle = SettingsService::get('site_title', 'Default Title');
        $allSettings = SettingsService::all();
        
        return view('home', compact('siteTitle', 'allSettings'));
    }
}
```

## Pre-loaded Settings

The system comes with these default settings:

### General Settings
- `site_title`: Website title
- `site_tagline`: Website tagline/slogan
- `site_description`: Website description for SEO
- `site_logo`: Main website logo
- `favicon`: Website favicon

### Contact Settings
- `contact_email`: Main contact email
- `contact_phone`: Main contact phone
- `contact_address`: Business address
- `business_hours`: Operating hours

### Social Media Settings
- `facebook_url`: Facebook page URL
- `twitter_url`: Twitter profile URL
- `instagram_url`: Instagram profile URL
- `linkedin_url`: LinkedIn company page URL
- `youtube_url`: YouTube channel URL

### SEO Settings
- `meta_keywords`: Meta keywords for SEO
- `google_analytics_id`: Google Analytics tracking ID
- `google_maps_api_key`: Google Maps API key

### Appearance Settings
- `primary_color`: Primary brand color (hex code)
- `secondary_color`: Secondary brand color (hex code)
- `footer_text`: Footer copyright text

## Cache Management

The system automatically manages caching:
- Settings are cached for 1 hour (3600 seconds)
- Cache is cleared automatically when settings are updated
- Manual cache clearing can be done using `SettingsService::clearCache()`

## File Uploads

- Images and files are stored in `storage/app/public/settings/`
- Old files are automatically deleted when new ones are uploaded
- Files are accessible via `Storage::url($setting->value)`

## Database Structure

The `website_settings` table contains:
- `id`: Primary key
- `key`: Unique setting identifier
- `value`: Setting value
- `type`: Field type (text, textarea, email, etc.)
- `group`: Setting group (general, contact, etc.)
- `label`: Human-readable label
- `description`: Optional description
- `is_active`: Whether setting is active
- `sort_order`: Display order within group
- `created_at` / `updated_at`: Timestamps

## Security Considerations

- Only admin users can access settings management
- File uploads are validated for type and size
- All inputs are validated and sanitized
- Settings cache prevents database queries on every request
- CSRF protection on all forms

## Extending the System

### Adding New Setting Types

1. Add the new type to the validation rules in `WebsiteSettingsController`
2. Add the new type to the types array in create/edit views
3. Update the JavaScript in create/edit views to handle the new field type
4. Update the `getValueValidationRule` method in the controller

### Adding New Groups

1. Add the group to the groups array in create/edit views
2. Optionally add it to the seeder for default settings

### Custom Settings Display

You can create custom views for specific setting groups by extending the index view or creating separate controllers for specific setting types.
