<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\RegisterController;
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




// Login route

Route::get('/login', [LoginController::class, 'index']);

// Login authentication route

Route::post('/login/process', [LoginController::class, 'authenticateLoginRequest'])->name('login.process');

//Register User

Route::get('/register', [RegisterController::class, 'index']);

//Register authentication User

Route::post('/register/process', [RegisterController::class, 'register'])->name('register.process');

//Dashboard Route

Route::get('main' , fn() => view('dash'))->name('main');

//logout

Route::post('/logout', [logoutController::class , 'logout'])->name('logout');
