<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerApiController;
use App\Http\Controllers\ExerciseApiController;
use App\Http\Controllers\FoodApiController;
use App\Http\Controllers\ActivityApiController;
use App\Http\Controllers\MealApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('customers', CustomerApiController::class)->names('api.customers');
Route::apiResource('exercises', ExerciseApiController::class)->names('api.exercises');
Route::apiResource('foods', FoodApiController::class)->names('api.foods');
Route::apiResource('activities', ActivityApiController::class)->names('api.activities');
Route::apiResource('meals', MealApiController::class)->names('api.meals');
