<?php

use App\Http\Controllers\Api\KiwifyController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'Index']); // Get - http://127.0.0.1:8000/api/users?page=1
Route::get('/users/{user}', [UserController::class, 'Show']); // Get - http://127.0.0.1:8000/api/users/1

Route::post('/users', [UserController::class, 'Store']); // Post - http://127.0.0.1:8000/api/users

Route::post('/kiwify', [KiwifyController::class, 'KiwifyWebhook']);
Route::post('/kiwifyCanceledOrRefunded', [KiwifyController::class, 'KiwifyCanceledOrRefunded']);
