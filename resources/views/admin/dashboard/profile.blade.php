@extends('admin.layouts.app')

@section('title', 'Profile')
@section('page-title', 'My Profile')

@section('content')
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-user me-2"></i>Profile Information</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.profile.update') }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input type="text" 
                                   class="form-control @error('name') is-invalid @enderror" 
                                   id="name" 
                                   name="name" 
                                   value="{{ old('name', $admin->name) }}" 
                                   required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email', $admin->email) }}" 
                                   required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="role" class="form-label">Role</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="role" 
                                   value="{{ $admin->isSuperAdmin() ? 'Super Admin' : 'Admin' }}" 
                                   readonly>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="status" 
                                   value="{{ ucfirst($admin->status) }}" 
                                   readonly>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="created_at" class="form-label">Member Since</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="created_at" 
                                   value="{{ $admin->created_at->format('M d, Y H:i A') }}" 
                                   readonly>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="updated_at" class="form-label">Last Updated</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="updated_at" 
                                   value="{{ $admin->updated_at->format('M d, Y H:i A') }}" 
                                   readonly>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Back to Dashboard
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Update Profile
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
