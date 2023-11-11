<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\faturatController;
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

Route::get('/', function () {
    return view('LogIn.login');
});


Route::get('/login', [LogInController::class, 'loginview']);
Route::post('/login', [LogInController::class, 'checkUser']);
Route::get('/index', [indexController::class, 'indexView'])->name('index');
Route::get('/faturat', [faturatController::class, 'getFaturat']);
Route::post('/changePassword', [UserController::class, 'changePassword']);
