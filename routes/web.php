<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BiodataController;

Route::get('/jus', function () {
    return 'Halo Kedai Jus';
})->name('jus.show');

Route::get('/jus/{param1}',[JusController::class, 'show']);

Route::get('/home',[BiodataController::class,'index']);

Route::get('/', [HomeController::class, 'index'])->name('home');
