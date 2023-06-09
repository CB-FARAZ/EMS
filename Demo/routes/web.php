<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CreateController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\EditController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\logoutController;
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\employee\AttendenceController;
use App\Http\Controllers\employee\SearchController;
use App\Http\Controllers\employee\SettingController;


//use App\Http\Controllers\admin\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Welcome  Route

Route::get('/', function () {

    return view('admin/login');

});

// login

Route::get('login', [LoginController::class, 'index'])->name('login')->prefix('admin');

// Login authentication route

Route::post('/login/process', [LoginController::class, 'authenticateLoginRequest'])->name('login.process')->prefix('admin');

//Admin Routes

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {


    //Dashboard Route

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //logout

    Route::post('/logout', [logoutController::class, 'logout'])->name('logout');

    //Employee Login

    Route::get('/admin/login-as-user/{userId}', [AdminController::class, 'loginAsUser'])->name('admin.loginAsUser');


    // Add Users

    Route::get('create', [CreateController::class, 'index'])->name('create');

    // Delete Employee

    Route::delete('delete', [UserController::class, 'destroy'])->name('del');

    // Display edit form for employee

    Route::get('edit/{id}', [EditController::class, 'index'])->name('edit');

    // Process employee update

    Route::match(['put', 'post'], 'edit/{id}', [EditController::class, 'update'])->name('edit.process');

    // Authentication process

    Route::post('create/user', [CreateController::class, 'Request'])->name('create.process');

    // Admin Setting

    Route::get('settings', [AdminController::class, 'accountInfo'])->name('profile');

    Route::post('update', [AdminController::class, 'accountInfoStore'])->name('update');

    // All employee

    Route::get('employee', [UserController::class, 'index'])->name('employee');

    // Reports

    Route::get('reports', [ReportController::class, 'index'])->name('reports');

    Route::get('reports/update', [ReportController::class, 'search'])->name('report.search');


});


//Employee Route

Route::group(['prefix' => 'employee', 'middleware' => 'user'], function () {

    //Employee Dashboard

    Route::get('dashboard', [App\Http\Controllers\employee\DashboardController::class, 'index'])->name('emp/dashboard');

    //Employee Attendence

    Route::get('attendence', [AttendenceController::class, 'index'])->name('attendence');

    //Start Timer

    Route::post('timer/start', [AttendenceController::class, 'startTime'])->name('timer.start');

    //Stop Timer

    Route::post('timer/stop', [AttendenceController::class, 'stopTime'])->name('timer.stop');

    //Employee Profile

    Route::get('settings', [SettingController::class, 'employee'])->name('emp/profile');

    //Employee Update

    Route::post('update', [SettingController::class, 'employeeupdate'])->name('update');

    //Employee's Attendences

    Route::get('all', [AttendenceController::class, 'index'])->name('all');

    //Search

    Route::get('search', [SearchController::class, 'search'])->name('emp.search');


});







