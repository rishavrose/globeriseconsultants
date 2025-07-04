<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteSetting;
use App\Services\SettingsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WebsiteSettingsController extends Controller
{
    /**
     * Display a listing of the settings.
     */
    public function index()
    {
        $settings = WebsiteSetting::orderBy('group')->orderBy('sort_order')->get();
        $groupedSettings = $settings->groupBy('group');
        
        return view('admin.settings.index', compact('groupedSettings'));
    }

    /**
     * Show the form for creating a new setting.
     */
    public function create()
    {
        $groups = ['general', 'contact', 'social', 'seo', 'appearance'];
        $types = [
            'text' => 'Text',
            'textarea' => 'Textarea',
            'email' => 'Email',
            'phone' => 'Phone',
            'url' => 'URL',
            'image' => 'Image',
            'file' => 'File'
        ];
        
        return view('admin.settings.create', compact('groups', 'types'));
    }

    /**
     * Store a newly created setting in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|string|unique:website_settings,key|max:255',
            'label' => 'required|string|max:255',
            'type' => 'required|in:text,textarea,email,phone,url,image,file',
            'group' => 'required|string|max:255',
            'value' => $this->getValueValidationRule($request->type),
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $data = $request->all();
        
        // Handle file uploads
        if ($request->hasFile('value') && in_array($request->type, ['image', 'file'])) {
            $file = $request->file('value');
            $path = $file->store('settings', 'public');
            $data['value'] = $path;
        }

        // Generate key from label if not provided
        if (empty($data['key'])) {
            $data['key'] = Str::slug($data['label'], '_');
        }

        WebsiteSetting::create($data);
        
        // Clear settings cache
        SettingsService::clearCache();

        return redirect()->route('admin.settings.index')
            ->with('success', 'Setting created successfully.');
    }

    /**
     * Show the form for editing the specified setting.
     */
    public function edit(WebsiteSetting $setting)
    {
        $groups = ['general', 'contact', 'social', 'seo', 'appearance'];
        $types = [
            'text' => 'Text',
            'textarea' => 'Textarea',
            'email' => 'Email',
            'phone' => 'Phone',
            'url' => 'URL',
            'image' => 'Image',
            'file' => 'File'
        ];
        
        return view('admin.settings.edit', compact('setting', 'groups', 'types'));
    }

    /**
     * Update the specified setting in storage.
     */
    public function update(Request $request, WebsiteSetting $setting)
    {
        $request->validate([
            'key' => 'required|string|max:255|unique:website_settings,key,' . $setting->id,
            'label' => 'required|string|max:255',
            'type' => 'required|in:text,textarea,email,phone,url,image,file',
            'group' => 'required|string|max:255',
            'value' => $this->getValueValidationRule($request->type, $setting),
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $data = $request->all();
        
        // Handle file uploads
        if ($request->hasFile('value') && in_array($request->type, ['image', 'file'])) {
            // Delete old file
            if ($setting->value && Storage::disk('public')->exists($setting->value)) {
                Storage::disk('public')->delete($setting->value);
            }
            
            $file = $request->file('value');
            $path = $file->store('settings', 'public');
            $data['value'] = $path;
        } elseif (!$request->hasFile('value') && in_array($request->type, ['image', 'file'])) {
            // Keep existing file if no new file uploaded
            unset($data['value']);
        }

        $setting->update($data);
        
        // Clear settings cache
        SettingsService::clearCache();

        return redirect()->route('admin.settings.index')
            ->with('success', 'Setting updated successfully.');
    }

    /**
     * Remove the specified setting from storage.
     */
    public function destroy(WebsiteSetting $setting)
    {
        // Delete associated file if exists
        if (in_array($setting->type, ['image', 'file']) && $setting->value) {
            if (Storage::disk('public')->exists($setting->value)) {
                Storage::disk('public')->delete($setting->value);
            }
        }
        
        $setting->delete();
        
        // Clear settings cache
        SettingsService::clearCache();

        return redirect()->route('admin.settings.index')
            ->with('success', 'Setting deleted successfully.');
    }

    /**
     * Toggle setting status
     */
    public function toggleStatus(WebsiteSetting $setting)
    {
        $setting->update(['is_active' => !$setting->is_active]);
        
        // Clear settings cache
        SettingsService::clearCache();
        
        $status = $setting->is_active ? 'activated' : 'deactivated';
        return redirect()->route('admin.settings.index')
            ->with('success', "Setting {$status} successfully.");
    }

    /**
     * Get validation rule for value field based on type
     */
    private function getValueValidationRule($type, $setting = null)
    {
        switch ($type) {
            case 'email':
                return 'nullable|email|max:255';
            case 'url':
                return 'nullable|url|max:255';
            case 'phone':
                return 'nullable|string|max:20';
            case 'image':
                $rule = 'nullable';
                if (!$setting || !$setting->value) {
                    $rule = 'required';
                }
                return $rule . '|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
            case 'file':
                $rule = 'nullable';
                if (!$setting || !$setting->value) {
                    $rule = 'required';
                }
                return $rule . '|file|max:10240';
            case 'textarea':
                return 'nullable|string';
            default:
                return 'nullable|string|max:255';
        }
    }
}
