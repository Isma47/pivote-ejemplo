<?php

use App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\loginController;

Route::get('/', [loginController::class, 'index'])->name('index');
Route::post('/', [loginController::class, 'stor']);


Route::get('/dashboard', [loginController::class, 'view'])->name('index.dahs');