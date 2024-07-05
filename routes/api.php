<?php

use App\Http\Controllers\KiwifyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/kiwify-webhook', [KiwifyController::class, 'GetKiwifyWebhook']);
Route::post('/kiwify-webhook', [KiwifyController::class, 'KiwifyWebhook']);
