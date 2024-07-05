<?php

use App\Http\Controllers\KiwifyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/kiwify-webhook', [KiwifyController::class, 'KiwifyWebhook']);
