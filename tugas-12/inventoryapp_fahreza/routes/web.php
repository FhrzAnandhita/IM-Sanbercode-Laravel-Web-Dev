<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'home']);

Route::get('/register', [FormController::class, 'resgister']);
Route::post('/welcome', [FormController::class, 'welcome']);
