<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::get('/login', [AuthController::class, 'showLogin'])->name('login-page');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegistration'])->name('register-form');

Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::view('/home', 'homepage')->name('home');


    Route::middleware('role:Admin')->group(function() {
        Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin-dash');
    });
});


// Route::middleware('role:Admin')->group(function(){
//     Route::get('/', function () {
//         return view('welcome');
//     })->name('home');

//     Route::get('/admin/dashboard', function() {
//         return view('admin.dashboard');
//     })->name('admin-dash');
// });
