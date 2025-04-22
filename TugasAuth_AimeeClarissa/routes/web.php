<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;


// ====================
// Auth Routes
// ====================
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ====================
// Dashboard Routes (hanya untuk user yang login)
// ====================
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard/create', [DashboardController::class, 'create'])->name('dashboard.create');
    Route::post('/dashboard', [DashboardController::class, 'store'])->name('dashboard.store');
});


//route home
Route::get('/', [HomeController::class, 'index']);