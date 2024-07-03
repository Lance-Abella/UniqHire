<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function() {
    return view('auth.login');
})->name('login-page');

Route::get('/register', function() {
    return view('auth.register');
})->name('register-form');

// Route::get('/register', [AuthController::class, 'showRegistration'])->name('register-form');

Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');
})->name('admin-dash');