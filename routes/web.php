<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::post('/home/signup', [HomeController::class, 'signup'])->name('home.signup');
Route::get('/auth', [AuthController::class, 'index'])->name('auth.index');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');