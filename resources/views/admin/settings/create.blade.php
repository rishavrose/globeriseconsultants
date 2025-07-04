@extends('admin.layouts.app')

@section('title', 'Add Website Setting')
@section('page-title', 'Add Website Setting')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="fas fa-plus-circle me-2"></i>Add New Website Setting
                    </h5>
                    <a href="{{ route('admin.settings.index') }}" class="btn btn-outline-secondary btn-sm">
                        <i class="fas fa-arrow-left me-1"></i>Back to Settings
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="label" class="form-label">Label <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('label') is-invalid @enderror" 
                                       id="label" name="label" value="{{ old('label') }}" required>
                                @error('label')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="key" class="form-label">Key <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('key') is-invalid @enderror" 
                                       id="key" name="key" value="{{ old('key') }}" 
                                       placeholder="e.g., site_title, contact_email">
                                <small class="form-text text-muted">Unique identifier for this setting</small>
                                @error('key')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                                <select class="form-select @error('type') is-invalid @enderror" 
                                        id="type" name="type" required>
                                    <option value="">Select Type</option>
                                    @foreach($types as $value => $label)
                                        <option value="{{ $value }}" {{ old('type') == $value ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="group" class="form-label">Group <span class="text-danger">*</span></label>
                                <select class="form-select @error('group') is-invalid @enderror" 
                                        id="group" name="group" required>
                                    <option value="">Select Group</option>
                                    @foreach($groups as $group)
                                        <option value="{{ $group }}" {{ old('group') == $group ? 'selected' : '' }}>
                                            {{ ucfirst($group) }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('group')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3" id="value-field">
                        <label for="value" class="form-label">Value</label>
                        <input type="text" class="form-control @error('value') is-invalid @enderror" 
                               id="value" name="value" value="{{ old('value') }}">
                        @error('value')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" name="description" rows="2" 
                                  placeholder="Optional description for this setting">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="sort_order" class="form-label">Sort Order</label>
                                <input type="number" class="form-control @error('sort_order') is-invalid @enderror" 
                                       id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}" min="0">
                                @error('sort_order')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="is_active" 
                                           name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">
                                        Active
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary me-2">Cancel</a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i>Create Setting
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const labelInput = document.getElementById('label');
    const keyInput = document.getElementById('key');
    const typeSelect = document.getElementById('type');
    const valueField = document.getElementById('value-field');
    
    // Auto-generate key from label
    labelInput.addEventListener('input', function() {
        if (!keyInput.value) {
            const slug = this.value.toLowerCase()
                .replace(/[^a-z0-9 ]/g, '')
                .replace(/ +/g, '_');
            keyInput.value = slug;
        }
    });
    
    // Change value field based on type
    typeSelect.addEventListener('change', function() {
        updateValueField(this.value);
    });
    
    function updateValueField(type) {
        let html = '';
        const currentValue = document.getElementById('value') ? document.getElementById('value').value : '';
        
        switch(type) {
            case 'textarea':
                html = `
                    <label for="value" class="form-label">Value</label>
                    <textarea class="form-control" id="value" name="value" rows="4">${currentValue}</textarea>
                `;
                break;
            case 'image':
                html = `
                    <label for="value" class="form-label">Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="value" name="value" accept="image/*" required>
                    <small class="form-text text-muted">Accepted formats: JPEG, PNG, JPG, GIF, SVG (Max: 2MB)</small>
                `;
                break;
            case 'file':
                html = `
                    <label for="value" class="form-label">File <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" id="value" name="value" required>
                    <small class="form-text text-muted">Max file size: 10MB</small>
                `;
                break;
            case 'email':
                html = `
                    <label for="value" class="form-label">Email</label>
                    <input type="email" class="form-control" id="value" name="value" value="${currentValue}" placeholder="email@example.com">
                `;
                break;
            case 'phone':
                html = `
                    <label for="value" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="value" name="value" value="${currentValue}" placeholder="+1234567890">
                `;
                break;
            case 'url':
                html = `
                    <label for="value" class="form-label">URL</label>
                    <input type="url" class="form-control" id="value" name="value" value="${currentValue}" placeholder="https://example.com">
                `;
                break;
            default:
                html = `
                    <label for="value" class="form-label">Value</label>
                    <input type="text" class="form-control" id="value" name="value" value="${currentValue}">
                `;
        }
        
        valueField.innerHTML = html;
    }
    
    // Initialize field based on current selection
    if (typeSelect.value) {
        updateValueField(typeSelect.value);
    }
});
</script>
@endpush
