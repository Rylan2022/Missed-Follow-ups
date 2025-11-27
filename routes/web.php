<?php

use App\Http\Controllers\AuthControllerAdv;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register', [AuthControllerAdv::class, 'registerPage'])->name('getregister');
Route::get('/login', [AuthControllerAdv::class, 'loginPage'])->name('getlogin');

Route::post('/postRegister', [AuthControllerAdv::class, 'register'])->name('postRegister');
Route::post('/postLogin', [AuthControllerAdv::class, 'login'])->name('postlogin');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthControllerAdv::class, 'logout'])->name('logout');

});
