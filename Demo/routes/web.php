<?php

use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\logoutController;
use App\Http\Controllers\admin\RegisterController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {

// Login route

    Route::get('login', [LoginController::class, 'index'])->name('login');

// Login authentication route

    Route::post('/login/process', [LoginController::class, 'authenticateLoginRequest'])->name('login.process');

//Register User

    Route::get('/register', [RegisterController::class, 'index'])->name('register');

//Register authentication User

    Route::post('/register/process', [RegisterController::class, 'register'])->name('register.process');

//Dashboard Route

    Route::get('main', fn() => view('dash'))->name('main');

//logout

    Route::post('/logout', [logoutController::class, 'logout'])->name('logout');


// Add Users

//    Route::get('/users', fn() => view('user'))->name('users');

    Route::get('create', [\App\Http\Controllers\admin\CreateController::class, 'index'])->name('create');

  // Edit Users

    Route::get('edits' , fn()=>view('edit'))->name('edits');


    Route::post('create/user', [\App\Http\Controllers\admin\CreateController::class, 'Request'])->name('create.process');


// Users Setting

    Route::get('/settings', fn() => view('setting'))->name('settings');


// All users

    Route::get('show', [\App\Http\Controllers\admin\UserController::class, 'index'])->name('show');

// Reports

    Route::get('Rep' , fn() => view('Report'))->name('Rep');


});






