<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserInfoController;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Route;



Route::get('/login', [AuthController::class, 'showLogin'])->name('login-page');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegistration'])->name('register-form');
Route::post('/register', [AuthController::class, 'register']);

// Route::post('/register/pwd', [AuthController::class, 'pwdSection'])->name('pwd-section');

// Route::get('/displayusers/{$id}', [UserInfoController::class, 'showAll']);

Route::get('/all', [AuthController::class, 'showAccs']);


Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/pwdusers', [AuthController::class, 'showAccs'])->name('admin-pwdusers');

Route::middleware('auth')->group(function(){
    Route::get('/home', function(){
        return view('homepage');
    })->name('home');

    Route::get('/pwd/all', [AdminController::class, 'showPwds'])->middleware('role:Admin')->name('pwd-list');

    Route::get('/trainer/all', [AdminController::class, 'showTrainers'])->middleware('role:Admin')->name('trainer-list');
});


// Route::middleware('role:Admin')->group(function(){
//     Route::get('/', function () {
//         return view('welcome');
//     })->name('home');

//     Route::get('/admin/dashboard', function() {
//         return view('admin.dashboard');
//     })->name('admin-dash');
// });
