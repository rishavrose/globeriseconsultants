<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the services for admin
     */
    public function index()
    {
        $services = Service::getAllServices();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new service
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created service in storage
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'boolean'
        ]);

        Service::create([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
            'link' => $request->link,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active')
        ]);

        return redirect()->route('admin.services.index')
                         ->with('success', 'Service created successfully!');
    }

    /**
     * Show the form for editing the specified service
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified service in storage
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'link' => 'nullable|url|max:255',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'boolean'
        ]);

        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
            'link' => $request->link,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active')
        ]);

        return redirect()->route('admin.services.index')
                         ->with('success', 'Service updated successfully!');
    }

    /**
     * Remove the specified service from storage
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.services.index')
                         ->with('success', 'Service deleted successfully!');
    }

    /**
     * Get services for frontend
     */
    public function getServices()
    {
        return Service::getActiveServices();
    }
}
