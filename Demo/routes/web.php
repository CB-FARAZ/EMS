<?php

use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\logoutController;
use Illuminate\Support\Facades\Route;

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

    Route::get('dashboard', fn() => view('admin/dash'))->name('dashboard');

    //logout

    Route::post('/logout', [logoutController::class, 'logout'])->name('logout');

    // Add Users

    Route::get('create', [\App\Http\Controllers\admin\CreateController::class, 'index'])->name('create');

    // Delete Employee

    Route::delete('delete', [\App\Http\Controllers\admin\UserController::class, 'destroy'])->name('del');

    // Display edit form for employee
    Route::get('edit/{id}', [\App\Http\Controllers\admin\EditController::class, 'index'])->name('edit');

    // Process employee update
    Route::match(['put', 'post'], 'edit/{id}', [\App\Http\Controllers\admin\EditController::class, 'update'])->name('edit.process');

    // Authentication process

    Route::post('create/user', [\App\Http\Controllers\admin\CreateController::class, 'Request'])->name('create.process');

    // Admin Setting

    Route::get('settings', [\App\Http\Controllers\admin\AdminController::class, 'accountInfo'])->name('profile');

    Route::post('update', [\App\Http\Controllers\admin\AdminController::class, 'accountInfoStore'])->name('update');

    // All employee

    Route::get('employee', [\App\Http\Controllers\admin\UserController::class, 'index'])->name('employee');

    // Reports

    Route::get('reports', fn() => view('admin/Report'))->name('reports');


});


    //Employee Route

    Route::group(['prefix' => 'employee'], function () {

    //Employee Dashboard

    Route::get('dashboard', fn() => view('employee.dash'))->name('emp/dashboard');

    //Employee Attendence

    Route::get('attendence', [\App\Http\Controllers\employee\AttendenceController::class, 'index'])->name('attendence');

    Route::post('timer/start' , [\App\Http\Controllers\employee\AttendenceController::class , 'starttime'])->name('timer.start');

    Route::post('timer/stop' , [\App\Http\Controllers\employee\AttendenceController::class , 'stoptime'])->name('timer.stop');


});







