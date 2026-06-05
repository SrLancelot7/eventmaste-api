<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;

Route::get('/categories',        [CategoryController::class, 'index']);
Route::post('/categories',       [CategoryController::class, 'store']);
Route::delete('/categories/{id}',[CategoryController::class, 'destroy']);

Route::get('/events',            [EventController::class, 'index']);
Route::post('/events',           [EventController::class, 'store']);