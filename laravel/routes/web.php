<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\ActivityController;


use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/test', function () {
    return 'yeni rota test';
});

Route::resource('customers',CustomerController::class);
Route::resource('exercises',ExerciseController::class);

Route::resource('foods',FoodController::class);
Route::resource('meals',MealController::class);
Route::resource('activities',ActivityController::class);