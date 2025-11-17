<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SentumAuthController;

Route::get('/', function () {
    return view('welcome');
});