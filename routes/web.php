<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [UserController::class, 'register'])->name('user.register');
Route::post('register', [UserController::class, 'post_register']);

Route::get('login', [UserController::class, 'login'])->name('user.login');
Route::post('login', [UserController::class, 'post_login']);

Route::get('home', [HomeController::class, 'home'])->name('user.home');
Route::get('logout', [UserController::class, 'logout'])->name('user.logout');
