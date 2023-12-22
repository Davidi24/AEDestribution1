<?php
use App\Http\Controllers\LogInController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\faturatController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/createClient', [ClientController::class, 'createUserView']);
Route::get('/login', [LogInController::class, 'loginview']);
Route::get('/indexx', [indexController::class, 'indexView']);
Route::get('/getClients', [ClientController::class, 'getClients']);
Route::get('/faturat', [faturatController::class, 'getFaturat']);
Route::get('/gettable', [PageController::class, 'CreateTableView']);


Route::get('/', function () {
    return view('LogIn.login');
});
Route::post('/login', [LogInController::class, 'checkUser'])->name('login');
Route::post('/changePassword', [UserController::class, 'changePassword']);
Route::post('/CheckIfFirtsLogin', [UserController::class, 'CheckIfFirtsLogin']);
Route::post('/tableinfo', [ClientController::class, 'getClientInfoFaturat']);
Route::post('/createClients', [ClientController::class, 'CreateClient'])->name('CreateClient');





