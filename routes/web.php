<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', function(){
    return view('welcome');
});

// Home routes
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::post('/home/signup', [HomeController::class, 'signup'])->name('home.signup');

// Login routes
Route::get('/auth', [AuthController::class, 'index'])->name('auth.index');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');

// Register route
Route::get('/auth/register', [AuthController::class, 'showRegisterForm'])->name('register.show');
Route::post('/auth/register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/redirect/{tujuan}', [HomeController::class, 'redirectTo']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
