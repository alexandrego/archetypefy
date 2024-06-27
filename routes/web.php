<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchetypefyController;
use App\Http\Controllers\CheckCodeController;
use App\Http\Controllers\QuestionController;

// Rotas públicas
Route::get('/', [ArchetypefyController::class, 'Index'])->name('login');
Route::get('/confirmCode', [ArchetypefyController::class, 'ConfirmCode']);

// Rotas quando logado
Route::get('/dashboard', [ArchetypefyController::class, 'Dashboard'])->middleware('auth');
Route::get('/atention', [ArchetypefyController::class, 'Atention'])->middleware('auth');
Route::get('/startTest', [ArchetypefyController::class, 'StartTest'])->middleware('auth');

// Rotas para envio de emails
Route::get('/mailCode', [ArchetypefyController::class, 'MailCode']);
Route::post('/dataArchetypefy', [ArchetypefyController::class, 'store']);

// Rotas para confirmar código de verificação
Route::post('/checkCode', [CheckCodeController::class,'store']);
Route::post('/logout', [CheckCodeController::class,'destroy']);

// Rotas de perguntas
Route::get('/question1', [QuestionController::class, 'Question1'])->middleware('auth');
Route::post('/question1', [QuestionController::class, 'SaveQuestion1'])->middleware('auth');

Route::get('/question2', [QuestionController::class, 'Question2'])->middleware('auth');
Route::post('/question2', [QuestionController::class, 'SaveQuestion2'])->middleware('auth');

// Route::post('/question', [QuestionController::class, 'store'])->middleware('auth');
// Route::post('/answer', [ArchetypefyController::class, 'Answer'])->middleware('auth');
// Route::get('/result', [ArchetypefyController::class, 'Result'])->middleware('auth');
// Route::get('/result/{id}', [ArchetypefyController::class, 'Result'])->middleware('auth');
// Route::get('/result/{id}/{id2}', [ArchetypefyController::class, 'Result'])->middleware('auth');


// Route::get('/', function () {
//     return view('welcome');
// });
