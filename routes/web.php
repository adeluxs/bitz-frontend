<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// authentication routes
Route::get('/register', [AuthenticationController::class, 'register'])->name('user.register');
Route::post('/register', [AuthenticationController::class, 'userRegisterSubmit'])->name('user.register.submit');
Route::get('/login', [AuthenticationController::class, 'login'])->name('user.login');
Route::post('/login', [AuthenticationController::class, 'userLoginSubmit'])->name('user.login.submit');
Route::get('/forgot-password', [AuthenticationController::class, 'forgotPassword'])->name('user.forgot-password');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout');

// user routes
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/feature', [UserController::class, 'feature'])->name('user.feature');
Route::get('pricing', [UserController::class, 'pricing'])->name('user.pricing');
Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');


// dashboard routes
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/source', [UserController::class, 'source'])->name('dashboard.source');
Route::get('/billing', [UserController::class, 'billing'])->name('dashboard.billing');
Route::get('/connection', [UserController::class, 'connection'])->name('dashboard.connection');
Route::get('performance', [UserController::class, 'performance'])->name('dashboard.performance');
Route::get('/user', [UserController::class, 'user'])->name('dashboard.user');
Route::get('/profile', [UserController::class, 'profile'])->name('dashboard.profile');
Route::get('/support', [UserController::class, 'support'])->name('dashboard.support');
Route::get('/settings', [UserController::class, 'settings'])->name('dashboard.settings');
