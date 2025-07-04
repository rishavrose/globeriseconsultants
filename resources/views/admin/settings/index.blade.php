@extends('admin.layouts.app')

@section('title', 'Website Settings')
@section('page-title', 'Website Settings')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">Manage Website Settings</h4>
    <a href="{{ route('admin.settings.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>Add New Setting
    </a>
</div>

@if($groupedSettings->isEmpty())
    <div class="card">
        <div class="card-body text-center py-5">
            <i class="fas fa-cogs fa-3x text-muted mb-3"></i>
            <h5 class="text-muted">No settings found</h5>
            <p class="text-muted">Start by creating your first website setting.</p>
            <a href="{{ route('admin.settings.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Add Setting
            </a>
        </div>
    </div>
@else
    @foreach($groupedSettings as $group => $settings)
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0 text-capitalize">
                    <i class="fas fa-folder me-2"></i>{{ ucfirst($group) }} Settings
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Label</th>
                                <th>Key</th>
                                <th>Type</th>
                                <th>Value</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($settings as $setting)
                                <tr>
                                    <td>
                                        <strong>{{ $setting->label }}</strong>
                                        @if($setting->description)
                                            <br><small class="text-muted">{{ $setting->description }}</small>
                                        @endif
                                    </td>
                                    <td><code>{{ $setting->key }}</code></td>
                                    <td>
                                        <span class="badge bg-secondary">{{ ucfirst($setting->type) }}</span>
                                    </td>
                                    <td>
                                        @if($setting->type === 'image' && $setting->value)
                                            <img src="{{ asset('storage/' . $setting->value) }}" alt="{{ $setting->label }}" 
                                                 style="max-width: 100px; max-height: 50px;" class="img-thumbnail">
                                        @elseif($setting->type === 'textarea')
                                            <div style="max-width: 200px; max-height: 80px; overflow: hidden;">
                                                {{ Str::limit($setting->value, 100) }}
                                            </div>
                                        @elseif($setting->type === 'url' && $setting->value)
                                            <a href="{{ $setting->value }}" target="_blank" class="text-primary">
                                                {{ Str::limit($setting->value, 30) }}
                                            </a>
                                        @elseif($setting->type === 'email' && $setting->value)
                                            <a href="mailto:{{ $setting->value }}" class="text-primary">{{ $setting->value }}</a>
                                        @else
                                            {{ $setting->value ? Str::limit($setting->value, 50) : '-' }}
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.settings.toggle', $setting) }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-sm {{ $setting->is_active ? 'btn-success' : 'btn-secondary' }}">
                                                <i class="fas {{ $setting->is_active ? 'fa-check' : 'fa-times' }} me-1"></i>
                                                {{ $setting->is_active ? 'Active' : 'Inactive' }}
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.settings.edit', $setting) }}" 
                                               class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.settings.destroy', $setting) }}" 
                                                  method="POST" class="d-inline"
                                                  onsubmit="return confirm('Are you sure you want to delete this setting?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endforeach
@endif
@endsection

@push('styles')
<style>
    .table th {
        border-top: none;
        font-weight: 600;
        color: #495057;
        background-color: #f8f9fa;
    }
    
    .btn-group .btn {
        border-radius: 0.25rem;
        margin-right: 2px;
    }
    
    .img-thumbnail {
        border-radius: 0.5rem;
    }
</style>
@endpush
