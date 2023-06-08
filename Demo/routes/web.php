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

//Admin Routes

Route::group(['prefix' => 'admin'], function () {

    // login

    Route::get('login', [LoginController::class, 'index'])->name('login');

    // Login authentication route

    Route::post('/login/process', [LoginController::class, 'authenticateLoginRequest'])->name('login.process');

    //Dashboard Route

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('admin');

    //logout

    Route::post('/logout', [logoutController::class, 'logout'])->name('logout');

    // Add Users

    Route::get('create', [CreateController::class, 'index'])->name('create')->middleware('admin');

    // Delete Employee

    Route::delete('delete', [UserController::class, 'destroy'])->name('del')->middleware('admin');

    // Display edit form for employee

    Route::get('edit/{id}', [EditController::class, 'index'])->name('edit')->middleware('admin');

    // Process employee update

    Route::match(['put', 'post'], 'edit/{id}', [EditController::class, 'update'])->name('edit.process')->middleware('admin');

    // Authentication process

    Route::post('create/user', [CreateController::class, 'Request'])->name('create.process')->middleware('admin');

    // Admin Setting

    Route::get('settings', [AdminController::class, 'accountInfo'])->name('profile')->middleware('admin');

    Route::post('update', [AdminController::class, 'accountInfoStore'])->name('update')->middleware('admin');

    // All employee

    Route::get('employee', [UserController::class, 'index'])->name('employee')->middleware('admin');

    // Reports

    Route::get('reports', [ReportController::class, 'index'])->name('reports')->middleware('admin');

    Route::get('reports/update', [ReportController::class, 'search'])->name('report.search')->middleware('admin');


});


//Employee Route

Route::group(['prefix' => 'employee'], function () {

    //Employee Dashboard

    Route::get('dashboard', [App\Http\Controllers\employee\DashboardController::class, 'index'])->name('emp/dashboard')->middleware('user');

    //Employee Attendence

    Route::get('attendence', [AttendenceController::class, 'index'])->name('attendence')->middleware('user');

    //Start Timer

    Route::post('timer/start', [AttendenceController::class, 'startTime'])->name('timer.start')->middleware('user');

    //Stop Timer

    Route::post('timer/stop', [AttendenceController::class, 'stopTime'])->name('timer.stop')->middleware('user');

    //Employee Profile

    Route::get('settings', [SettingController::class, 'employee'])->name('emp/profile')->middleware('user');

    //Employee Update

    Route::post('update', [SettingController::class, 'employeeupdate'])->name('update')->middleware('user');

    //Employee's Attendences

    Route::get('all', [AttendenceController::class, 'index'])->name('all')->middleware('user');

    //Search

    Route::get('search', [SearchController::class, 'search'])->name('emp.search')->middleware('user');


});







