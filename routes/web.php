<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\JobDetailsController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', HomeController::class)->name('frontend.home');
Route::get('/jobs/{job}', JobDetailsController::class)->name('frontend.job_details');


// Admin Dashboard Routes
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('admin.dashboard');
    Route::resource('jobs', JobController::class, ['as' => 'admin']);
});

require __DIR__ . '/auth.php';
