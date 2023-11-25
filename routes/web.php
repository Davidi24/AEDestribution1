<?php
use App\Http\Controllers\LogInController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\faturatController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [LogInController::class, 'loginview']);
Route::get('/index', [indexController::class, 'indexView'])->name('index');
Route::get('/faturat', [faturatController::class, 'getFaturat']);

Route::get('/', function () {
    return view('LogIn.login');
});
Route::post('/login', [LogInController::class, 'checkUser'])->name('login');
Route::post('/changePassword', [UserController::class, 'changePassword']);
Route::post('/CheckIfFirtsLogin', [UserController::class, 'CheckIfFirtsLogin']);



