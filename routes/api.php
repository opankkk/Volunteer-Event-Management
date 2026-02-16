<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EventController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);

// Protected Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/events', [EventController::class, 'store']);
    Route::post('/events/{id}/join', [EventController::class, 'join']);
});