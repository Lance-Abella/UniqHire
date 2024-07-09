<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgencyController;
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
    Route::get('/home', [AuthController::class, 'showHomePage'])->name('home');


    //Admin Middleware
    Route::get('/pwd/all', [AdminController::class, 'showPwds'])->middleware('role:Admin')->name('pwd-list');
    Route::get('/training-agency/all', [AdminController::class, 'showTrainers'])->middleware('role:Admin')->name('trainer-list');


    //Trainer Middleware
    Route::get('/training-programs/manage', [AgencyController::class, 'showPrograms'])->middleware('role:Trainer')->name('programs-manage');
    Route::get('/training-programs/add', [AgencyController::class, 'showAddForm'])->middleware('role:Trainer')->name('programs-add');
    Route::post('/training-programs/add', [AgencyController::class, 'addProgram'])->middleware('role:Trainer');
    Route::delete('/training-programs/{id}', [AgencyController::class, 'deleteProgram'])->middleware('role:Trainer')->name('programs-delete');
    Route::get('/training-programs/{id}/edit', [AgencyController::class, 'editProgram'])->middleware('role:Trainer')->name('programs-edit');
    Route::put('/training-programs/{id}', [AgencyController::class, 'updateProgram'])->middleware('role:Trainer')->name('programs-update');



});


// Route::middleware('role:Admin')->group(function(){
//     Route::get('/', function () {
//         return view('welcome');
//     })->name('home');

//     Route::get('/admin/dashboard', function() {
//         return view('admin.dashboard');
//     })->name('admin-dash');
// });
