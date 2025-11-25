<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SentumAuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
})->name('getregister');
Route::get('/login', function () {
    return view('login');
})->name('getlogin');


Route::post('/postRegister', [AuthController::class, 'register'])->name('postRegister');
Route::post('/postLogin', [AuthController::class, 'login'])->name('postlogin');
