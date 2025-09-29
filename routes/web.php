<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BiodataController;

Route::get('/', function(){
    return view('welcome');
});

// Passing data lewat URL
Route::get('/halo/{nama}', [AuthController::class, 'halo']);

// Form login
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

// Dashboard setelah login
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::get('/jus/{param1}',[JusController::class, 'show']);

Route::get('/home',[BiodataController::class,'index']);

Route::get('/', [HomeController::class, 'index'])->name('home');