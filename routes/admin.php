<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\WebsiteSettingsController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// Admin Authentication Routes (without middleware)
Route::prefix('admin')->name('admin.')->group(function () {
    // Login routes
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    
    // Protected admin routes (with middleware)
    Route::middleware(['admin'])->group(function () {
        // Dashboard
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        
        // Profile
        Route::get('/profile', [AdminDashboardController::class, 'profile'])->name('profile');
        Route::put('/profile', [AdminDashboardController::class, 'updateProfile'])->name('profile.update');
        
        // Password Change
        Route::get('/change-password', [AdminAuthController::class, 'showChangePasswordForm'])->name('password.change');
        Route::post('/change-password', [AdminAuthController::class, 'changePassword'])->name('password.update');
        
        // Website Settings
        Route::resource('settings', WebsiteSettingsController::class);
        Route::post('/settings/{setting}/toggle', [WebsiteSettingsController::class, 'toggleStatus'])->name('settings.toggle');
        
        // Services Management
        Route::resource('services', ServiceController::class);
        
        // Logout
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    });
});
