@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="row">
    <!-- Welcome Card -->
    <div class="col-12 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="text-primary mb-2">Welcome back, {{ $admin->name }}!</h4>
                        <p class="text-muted mb-0">Here's what's happening with your admin panel today.</p>
                    </div>
                    <div class="col-md-4 text-end">
                        <i class="fas fa-user-shield fa-3x text-primary opacity-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-primary h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Users</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\User::count() ?? 0 }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-success h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Admins</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Admin::count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-shield fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-info h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Your Role</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $admin->isSuperAdmin() ? 'Super Admin' : 'Admin' }}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-crown fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-warning h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Last Login</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $admin->updated_at->format('M d, Y') }}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clock fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-info h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Services</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Service::count() }}</div>
                        <div class="text-xs text-muted">Active: {{ \App\Models\Service::where('is_active', true)->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-cogs fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="row">
    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Quick Actions</h6>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <a href="{{ route('admin.services.index') }}" class="list-group-item list-group-item-action">
                        <i class="fas fa-cogs me-3 text-info"></i>
                        <strong>Manage Services</strong>
                        <p class="mb-0 text-muted">Add, edit, or delete website services</p>
                    </a>
                    <a href="{{ route('admin.services.create') }}" class="list-group-item list-group-item-action">
                        <i class="fas fa-plus me-3 text-success"></i>
                        <strong>Add New Service</strong>
                        <p class="mb-0 text-muted">Create a new service for the website</p>
                    </a>
                    <a href="{{ route('admin.profile') }}" class="list-group-item list-group-item-action">
                        <i class="fas fa-user me-3 text-primary"></i>
                        <strong>Manage Profile</strong>
                        <p class="mb-0 text-muted">Update your personal information</p>
                    </a>
                    <a href="{{ route('admin.password.change') }}" class="list-group-item list-group-item-action">
                        <i class="fas fa-lock me-3 text-warning"></i>
                        <strong>Change Password</strong>
                        <p class="mb-0 text-muted">Update your account password</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">System Information</h6>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <td><strong>Laravel Version:</strong></td>
                        <td>{{ app()->version() }}</td>
                    </tr>
                    <tr>
                        <td><strong>PHP Version:</strong></td>
                        <td>{{ phpversion() }}</td>
                    </tr>
                    <tr>
                        <td><strong>Server Time:</strong></td>
                        <td>{{ now()->format('M d, Y H:i:s') }}</td>
                    </tr>
                    <tr>
                        <td><strong>Your IP:</strong></td>
                        <td>{{ request()->ip() }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .border-left-primary {
        border-left: 0.25rem solid #4e73df !important;
    }
    .border-left-success {
        border-left: 0.25rem solid #1cc88a !important;
    }
    .border-left-info {
        border-left: 0.25rem solid #36b9cc !important;
    }
    .border-left-warning {
        border-left: 0.25rem solid #f6c23e !important;
    }
    .text-gray-800 {
        color: #5a5c69 !important;
    }
    .text-gray-300 {
        color: #dddfeb !important;
    }
</style>
@endpush
