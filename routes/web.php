<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppController;
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

Route::get('/',  [AppController::class, 'index']);
Route::get('/login',  [AppController::class, 'login'])->name('login.page');
Route::post('/submit-form', [AuthController::class, 'loginHandler'])->name('login.handler');
Route::get('/logout',  [AuthController::class, 'logoutHandler'])->name('logout.handler');;
Route::get('/assistive-technologies/users-activity', [AppController::class, 'usersActivity'])->name('users.activity');