<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchetypefyController;
use App\Http\Controllers\CheckCodeController;
use App\Http\Controllers\ComportamentoController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TemperamentoController;

// Rotas públicas
    Route::get('/', [ArchetypefyController::class, 'Index'])->name('login');
    Route::get('/confirmCode', [ArchetypefyController::class, 'ConfirmCode']);

// Rotas quando logado
    Route::get('/dashboard', [ArchetypefyController::class, 'Dashboard'])->name('dashboard')->middleware('auth');
    Route::get('/atention', [ArchetypefyController::class, 'Atention'])->middleware('auth');
    Route::get('/startTest', [ArchetypefyController::class, 'StartTest'])->middleware('auth');

// Rotas para envio de emails
    Route::get('/mailCode', [ArchetypefyController::class, 'MailCode']);
    Route::post('/dataArchetypefy', [ArchetypefyController::class, 'store']);
    Route::get('/mailResult', [QuestionController::class, 'MailResult']);

// Rotas para confirmar código de verificação
    Route::post('/checkCode', [CheckCodeController::class,'store']);
    Route::post('/logout', [CheckCodeController::class,'destroy']);

// Rotas de perguntas Identidade de Arquétipos
    Route::get('/question1', [QuestionController::class, 'Question1'])->middleware('auth');
    Route::post('/question1', [QuestionController::class, 'SaveQuestion1'])->middleware('auth');

    Route::get('/question2', [QuestionController::class, 'Question2'])->middleware('auth');
    Route::post('/question2', [QuestionController::class, 'SaveQuestion2'])->middleware('auth');

    Route::get('/question3', [QuestionController::class, 'Question3'])->middleware('auth');
    Route::post('/question3', [QuestionController::class, 'SaveQuestion3'])->middleware('auth');

    Route::get('/question4', [QuestionController::class, 'Question4'])->middleware('auth');
    Route::post('/question4', [QuestionController::class, 'SaveQuestion4'])->middleware('auth');

    Route::get('/question5', [QuestionController::class, 'Question5'])->middleware('auth');
    Route::post('/question5', [QuestionController::class, 'SaveQuestion5'])->middleware('auth');

    Route::get('/question6', [QuestionController::class, 'Question6'])->middleware('auth');
    Route::post('/question6', [QuestionController::class, 'SaveQuestion6'])->middleware('auth');

    Route::get('/question7', [QuestionController::class, 'Question7'])->middleware('auth');
    Route::post('/question7', [QuestionController::class, 'SaveQuestion7'])->middleware('auth');

    Route::get('/question8', [QuestionController::class, 'Question8'])->middleware('auth');
    Route::post('/question8', [QuestionController::class, 'SaveQuestion8'])->middleware('auth');

    Route::get('/question9', [QuestionController::class, 'Question9'])->middleware('auth');
    Route::post('/question9', [QuestionController::class, 'SaveQuestion9'])->middleware('auth');

    Route::get('/question10', [QuestionController::class, 'Question10'])->middleware('auth');
    Route::post('/question10', [QuestionController::class, 'SaveQuestion10'])->middleware('auth');

    Route::get('/question11', [QuestionController::class, 'Question11'])->middleware('auth');
    Route::post('/question11', [QuestionController::class, 'SaveQuestion11'])->middleware('auth');

    Route::get('/question12', [QuestionController::class, 'Question12'])->middleware('auth');
    Route::post('/question12', [QuestionController::class, 'SaveQuestion12'])->middleware('auth');

    Route::get('/question13', [QuestionController::class, 'Question13'])->middleware('auth');
    Route::post('/question13', [QuestionController::class, 'SaveQuestion13'])->middleware('auth');

    Route::get('/question14', [QuestionController::class, 'Question14'])->middleware('auth');
    Route::post('/question14', [QuestionController::class, 'SaveQuestion14'])->middleware('auth');

    Route::get('/question15', [QuestionController::class, 'Question15'])->middleware('auth');
    Route::post('/question15', [QuestionController::class, 'SaveQuestion15'])->middleware('auth');

    Route::get('/question16', [QuestionController::class, 'Question16'])->middleware('auth');
    Route::post('/question16', [QuestionController::class, 'SaveQuestion16'])->middleware('auth');

    Route::get('/question17', [QuestionController::class, 'Question17'])->middleware('auth');
    Route::post('/question17', [QuestionController::class, 'SaveQuestion17'])->middleware('auth');

    Route::get('/question18', [QuestionController::class, 'Question18'])->middleware('auth');
    Route::post('/question18', [QuestionController::class, 'SaveQuestion18'])->middleware('auth');

    Route::get('/question19', [QuestionController::class, 'Question19'])->middleware('auth');
    Route::post('/question19', [QuestionController::class, 'SaveQuestion19'])->middleware('auth');

    Route::get('/question20', [QuestionController::class, 'Question20'])->middleware('auth');
    Route::post('/question20', [QuestionController::class, 'SaveQuestion20'])->middleware('auth');

    Route::get('/question21', [QuestionController::class, 'Question21'])->middleware('auth');
    Route::post('/question21', [QuestionController::class, 'SaveQuestion21'])->middleware('auth');

    Route::get('/question22', [QuestionController::class, 'Question22'])->middleware('auth');
    Route::post('/question22', [QuestionController::class, 'SaveQuestion22'])->middleware('auth');

    Route::get('/question23', [QuestionController::class, 'Question23'])->middleware('auth');
    Route::post('/question23', [QuestionController::class, 'SaveQuestion23'])->middleware('auth');

    Route::get('/question24', [QuestionController::class, 'Question24'])->middleware('auth');
    Route::post('/question24', [QuestionController::class, 'SaveQuestion24'])->middleware('auth');

    Route::get('/question25', [QuestionController::class, 'Question25'])->middleware('auth');
    Route::post('/question25', [QuestionController::class, 'SaveQuestion25'])->middleware('auth');

    Route::get('/question26', [QuestionController::class, 'Question26'])->middleware('auth');
    Route::post('/question26', [QuestionController::class, 'SaveQuestion26'])->middleware('auth');

    Route::get('/question27', [QuestionController::class, 'Question27'])->middleware('auth');
    Route::post('/question27', [QuestionController::class, 'SaveQuestion27'])->middleware('auth');

    Route::get('/question28', [QuestionController::class, 'Question28'])->middleware('auth');
    Route::post('/question28', [QuestionController::class, 'SaveQuestion28'])->middleware('auth');

    Route::get('/question29', [QuestionController::class, 'Question29'])->middleware('auth');
    Route::post('/question29', [QuestionController::class, 'SaveQuestion29'])->middleware('auth');

    Route::get('/question30', [QuestionController::class, 'Question30'])->middleware('auth');
    Route::post('/question30', [QuestionController::class, 'SaveQuestion30'])->middleware('auth');

    Route::get('/question31', [QuestionController::class, 'Question31'])->middleware('auth');
    Route::post('/question31', [QuestionController::class, 'SaveQuestion31'])->middleware('auth');

    Route::get('/question32', [QuestionController::class, 'Question32'])->middleware('auth');
    Route::post('/question32', [QuestionController::class, 'SaveQuestion32'])->middleware('auth');

    Route::get('/question33', [QuestionController::class, 'Question33'])->middleware('auth');
    Route::post('/question33', [QuestionController::class, 'SaveQuestion33'])->middleware('auth');

    Route::get('/question34', [QuestionController::class, 'Question34'])->middleware('auth');
    Route::post('/question34', [QuestionController::class, 'SaveQuestion34'])->middleware('auth');

    Route::get('/question35', [QuestionController::class, 'Question35'])->middleware('auth');
    Route::post('/question35', [QuestionController::class, 'SaveQuestion35'])->middleware('auth');

    Route::get('/question36', [QuestionController::class, 'Question36'])->middleware('auth');
    Route::post('/question36', [QuestionController::class, 'SaveQuestion36'])->middleware('auth');

    Route::get('/question37', [QuestionController::class, 'Question37'])->middleware('auth');
    Route::post('/question37', [QuestionController::class, 'SaveQuestion37'])->middleware('auth');

    Route::get('/question38', [QuestionController::class, 'Question38'])->middleware('auth');
    Route::post('/question38', [QuestionController::class, 'SaveQuestion38'])->middleware('auth');

    Route::get('/question39', [QuestionController::class, 'Question39'])->middleware('auth');
    Route::post('/question39', [QuestionController::class, 'SaveQuestion39'])->middleware('auth');

    Route::get('/question40', [QuestionController::class, 'Question40'])->middleware('auth');
    Route::post('/question40', [QuestionController::class, 'SaveQuestion40'])->middleware('auth');

    Route::get('/question41', [QuestionController::class, 'Question41'])->middleware('auth');
    Route::post('/question41', [QuestionController::class, 'SaveQuestion41'])->middleware('auth');

    Route::get('/question42', [QuestionController::class, 'Question42'])->middleware('auth');
    Route::post('/question42', [QuestionController::class, 'SaveQuestion42'])->middleware('auth');

    Route::get('/question43', [QuestionController::class, 'Question43'])->middleware('auth');
    Route::post('/question43', [QuestionController::class, 'SaveQuestion43'])->middleware('auth');

    Route::get('/question44', [QuestionController::class, 'Question44'])->middleware('auth');
    Route::post('/question44', [QuestionController::class, 'SaveQuestion44'])->middleware('auth');

    Route::get('/question45', [QuestionController::class, 'Question45'])->middleware('auth');
    Route::post('/question45', [QuestionController::class, 'SaveQuestion45'])->middleware('auth');

    Route::get('/question46', [QuestionController::class, 'Question46'])->middleware('auth');
    Route::post('/question46', [QuestionController::class, 'SaveQuestion46'])->middleware('auth');

    Route::get('/question47', [QuestionController::class, 'Question47'])->middleware('auth');
    Route::post('/question47', [QuestionController::class, 'SaveQuestion47'])->middleware('auth');

    Route::get('/question48', [QuestionController::class, 'Question48'])->middleware('auth');
    Route::post('/question48', [QuestionController::class, 'SaveQuestion48'])->middleware('auth');

    Route::get('/result', [QuestionController::class, 'Result'])->middleware('auth');

// Rotas para perguntas Identidade de Temperamentos
    Route::get('/temper1', [TemperamentoController::class, 'Temper1'])->middleware('auth');
    Route::post('/temper2', [TemperamentoController::class, 'SaveTemper1'])->middleware('auth');

    Route::get('/temper2', [TemperamentoController::class, 'Temper2'])->middleware('auth');
    Route::post('/temper3', [TemperamentoController::class, 'SaveTemper2'])->middleware('auth');

    Route::get('/temper3', [TemperamentoController::class, 'Temper3'])->middleware('auth');
    Route::post('/temper4', [TemperamentoController::class, 'SaveTemper3'])->middleware('auth');

    Route::get('/temper4', [TemperamentoController::class, 'Temper4'])->middleware('auth');
    Route::post('/temper5', [TemperamentoController::class, 'SaveTemper4'])->middleware('auth');

    Route::get('/temper5', [TemperamentoController::class, 'Temper5'])->middleware('auth');
    Route::post('/temper6', [TemperamentoController::class, 'SaveTemper5'])->middleware('auth');

    Route::get('/temper6', [TemperamentoController::class, 'Temper6'])->middleware('auth');
    Route::post('/temper7', [TemperamentoController::class, 'SaveTemper6'])->middleware('auth');

    Route::get('/temper7', [TemperamentoController::class, 'Temper7'])->middleware('auth');
    Route::post('/temper8', [TemperamentoController::class, 'SaveTemper7'])->middleware('auth');

    Route::get('/temper8', [TemperamentoController::class, 'Temper8'])->middleware('auth');
    Route::post('/temper9', [TemperamentoController::class, 'SaveTemper8'])->middleware('auth');

    Route::get('/temper9', [TemperamentoController::class, 'Temper9'])->middleware('auth');
    Route::post('/temper10', [TemperamentoController::class, 'SaveTemper9'])->middleware('auth');

    Route::get('/temper10', [TemperamentoController::class, 'Temper10'])->middleware('auth');
    Route::post('/temper11', [TemperamentoController::class, 'SaveTemper10'])->middleware('auth');

    Route::get('/temper11', [TemperamentoController::class, 'Temper11'])->middleware('auth');
    Route::post('/temper12', [TemperamentoController::class, 'SaveTemper11'])->middleware('auth');

    Route::get('/temper12', [TemperamentoController::class, 'Temper12'])->middleware('auth');
    Route::post('/temper13', [TemperamentoController::class, 'SaveTemper12'])->middleware('auth');

    Route::get('/temper13', [TemperamentoController::class, 'Temper13'])->middleware('auth');
    Route::post('/temper14', [TemperamentoController::class, 'SaveTemper13'])->middleware('auth');

    Route::get('/temper14', [TemperamentoController::class, 'Temper14'])->middleware('auth');
    Route::post('/temper15', [TemperamentoController::class, 'SaveTemper14'])->middleware('auth');

    Route::get('/temper15', [TemperamentoController::class, 'Temper15'])->middleware('auth');
    Route::post('/temper16', [TemperamentoController::class, 'SaveTemper15'])->middleware('auth');

    Route::get('/temper16', [TemperamentoController::class, 'Temper16'])->middleware('auth');
    Route::post('/temper17', [TemperamentoController::class, 'SaveTemper16'])->middleware('auth');

    Route::get('/temper17', [TemperamentoController::class, 'Temper17'])->middleware('auth');
    Route::post('/temper18', [TemperamentoController::class, 'SaveTemper17'])->middleware('auth');

    Route::get('/temper18', [TemperamentoController::class, 'Temper18'])->middleware('auth');
    Route::post('/temper19', [TemperamentoController::class, 'SaveTemper18'])->middleware('auth');

    Route::get('/temper19', [TemperamentoController::class, 'Temper19'])->middleware('auth');
    Route::post('/temper20', [TemperamentoController::class, 'SaveTemper19'])->middleware('auth');

    Route::get('/temper20', [TemperamentoController::class, 'Temper20'])->middleware('auth');
    Route::post('/temperResult', [TemperamentoController::class, 'SaveTemper20'])->middleware('auth');

    Route::get('/resultTemper', [TemperamentoController::class, 'ResultTemper'])->middleware('auth');

// Rotas para perfil comportamental
    Route::get('/comportamento1', [ComportamentoController::class, 'Comportamento1'])->middleware('auth');
    Route::post('/comportamento2', [ComportamentoController::class, 'SaveComportamento1'])->middleware('auth');

    Route::get('/comportamento2', [ComportamentoController::class, 'Comportamento2'])->middleware('auth');
    Route::post('/comportamento3', [ComportamentoController::class, 'SaveComportamento2'])->middleware('auth');

    Route::get('/comportamento3', [ComportamentoController::class, 'Comportamento3'])->middleware('auth');
    Route::post('/comportamento4', [ComportamentoController::class, 'SaveComportamento3'])->middleware('auth');

    Route::get('/comportamento4', [ComportamentoController::class, 'Comportamento4'])->middleware('auth');
    Route::post('/comportamento5', [ComportamentoController::class, 'SaveComportamento4'])->middleware('auth');

    Route::get('/comportamento5', [ComportamentoController::class, 'Comportamento5'])->middleware('auth');
    Route::post('/comportamento6', [ComportamentoController::class, 'SaveComportamento5'])->middleware('auth');

    Route::get('/comportamento6', [ComportamentoController::class, 'Comportamento6'])->middleware('auth');
    Route::post('/comportamento7', [ComportamentoController::class, 'SaveComportamento6'])->middleware('auth');

    Route::get('/comportamento7', [ComportamentoController::class, 'Comportamento7'])->middleware('auth');
    Route::post('/comportamento8', [ComportamentoController::class, 'SaveComportamento7'])->middleware('auth');

    Route::get('/comportamento8', [ComportamentoController::class, 'Comportamento8'])->middleware('auth');
    Route::post('/comportamento9', [ComportamentoController::class, 'SaveComportamento8'])->middleware('auth');

    Route::get('/comportamento9', [ComportamentoController::class, 'Comportamento9'])->middleware('auth');
    Route::post('/comportamento10', [ComportamentoController::class, 'SaveComportamento9'])->middleware('auth');

    Route::get('/comportamento10', [ComportamentoController::class, 'Comportamento10'])->middleware('auth');
    Route::post('/comportamento11', [ComportamentoController::class, 'SaveComportamento10'])->middleware('auth');

    Route::get('/comportamento11', [ComportamentoController::class, 'Comportamento11'])->middleware('auth');
    Route::post('/comportamento12', [ComportamentoController::class, 'SaveComportamento11'])->middleware('auth');

    Route::get('/comportamento12', [ComportamentoController::class, 'Comportamento12'])->middleware('auth');
    Route::post('/comportamento13', [ComportamentoController::class, 'SaveComportamento12'])->middleware('auth');

    Route::get('/comportamento13', [ComportamentoController::class, 'Comportamento13'])->middleware('auth');
    Route::post('/comportamento14', [ComportamentoController::class, 'SaveComportamento13'])->middleware('auth');

    Route::get('/comportamento14', [ComportamentoController::class, 'Comportamento14'])->middleware('auth');
    Route::post('/comportamento15', [ComportamentoController::class, 'SaveComportamento14'])->middleware('auth');

    Route::get('/comportamento15', [ComportamentoController::class, 'Comportamento15'])->middleware('auth');
    Route::post('/comportamento16', [ComportamentoController::class, 'SaveComportamento15'])->middleware('auth');

    Route::get('/comportamento16', [ComportamentoController::class, 'Comportamento16'])->middleware('auth');
    Route::post('/comportamento17', [ComportamentoController::class, 'SaveComportamento16'])->middleware('auth');

    Route::get('/comportamento17', [ComportamentoController::class, 'Comportamento17'])->middleware('auth');
    Route::post('/comportamento18', [ComportamentoController::class, 'SaveComportamento17'])->middleware('auth');

    Route::get('/comportamento18', [ComportamentoController::class, 'Comportamento18'])->middleware('auth');
    Route::post('/comportamento19', [ComportamentoController::class, 'SaveComportamento18'])->middleware('auth');

    Route::get('/comportamento19', [ComportamentoController::class, 'Comportamento19'])->middleware('auth');
    Route::post('/comportamento20', [ComportamentoController::class, 'SaveComportamento19'])->middleware('auth');

    Route::get('/comportamento20', [ComportamentoController::class, 'Comportamento20'])->middleware('auth');
    Route::post('/comportamento21', [ComportamentoController::class, 'SaveComportamento20'])->middleware('auth');

    Route::get('/comportamento21', [ComportamentoController::class, 'Comportamento21'])->middleware('auth');
    Route::post('/comportamento22', [ComportamentoController::class, 'SaveComportamento21'])->middleware('auth');

    Route::get('/comportamento22', [ComportamentoController::class, 'Comportamento22'])->middleware('auth');
    Route::post('/comportamento23', [ComportamentoController::class, 'SaveComportamento22'])->middleware('auth');

    Route::get('/comportamento23', [ComportamentoController::class, 'Comportamento23'])->middleware('auth');
    Route::post('/comportamento24', [ComportamentoController::class, 'SaveComportamento23'])->middleware('auth');

    Route::get('/comportamento24', [ComportamentoController::class, 'Comportamento24'])->middleware('auth');
    Route::post('/comportamento25', [ComportamentoController::class, 'SaveComportamento24'])->middleware('auth');

    Route::get('/comportamento25', [ComportamentoController::class, 'Comportamento25'])->middleware('auth');
    Route::post('/comportamento26', [ComportamentoController::class, 'SaveComportamento25'])->middleware('auth');

    Route::get('/comportamento26', [ComportamentoController::class, 'Comportamento26'])->middleware('auth');
    Route::post('/comportamento27', [ComportamentoController::class, 'SaveComportamento26'])->middleware('auth');

    Route::get('/comportamento27', [ComportamentoController::class, 'Comportamento27'])->middleware('auth');
    Route::post('/comportamento28', [ComportamentoController::class, 'SaveComportamento27'])->middleware('auth');

    Route::get('/comportamento28', [ComportamentoController::class, 'Comportamento28'])->middleware('auth');
    Route::post('/comportamento29', [ComportamentoController::class, 'SaveComportamento28'])->middleware('auth');

    Route::get('/comportamento29', [ComportamentoController::class, 'Comportamento29'])->middleware('auth');
    Route::post('/comportamento30', [ComportamentoController::class, 'SaveComportamento29'])->middleware('auth');

    Route::get('/comportamento30', [ComportamentoController::class, 'Comportamento30'])->middleware('auth');
    Route::post('/comportamento31', [ComportamentoController::class, 'SaveComportamento30'])->middleware('auth');

    Route::get('/comportamento31', [ComportamentoController::class, 'Comportamento31'])->middleware('auth');
    Route::post('/comportamento32', [ComportamentoController::class, 'SaveComportamento31'])->middleware('auth');

    Route::get('/comportamento32', [ComportamentoController::class, 'Comportamento32'])->middleware('auth');
    Route::post('/comportamento33', [ComportamentoController::class, 'SaveComportamento32'])->middleware('auth');

    Route::get('/comportamento33', [ComportamentoController::class, 'Comportamento33'])->middleware('auth');
    Route::post('/comportamento34', [ComportamentoController::class, 'SaveComportamento33'])->middleware('auth');

    Route::get('/comportamento34', [ComportamentoController::class, 'Comportamento34'])->middleware('auth');
    Route::post('/comportamento35', [ComportamentoController::class, 'SaveComportamento34'])->middleware('auth');

    Route::get('/comportamento35', [ComportamentoController::class, 'Comportamento35'])->middleware('auth');
    Route::post('/comportamento36', [ComportamentoController::class, 'SaveComportamento35'])->middleware('auth');

    Route::get('/comportamento36', [ComportamentoController::class, 'Comportamento36'])->middleware('auth');
    Route::post('/comportamento37', [ComportamentoController::class, 'SaveComportamento36'])->middleware('auth');

    Route::get('/comportamento37', [ComportamentoController::class, 'Comportamento37'])->middleware('auth');
    Route::post('/comportamento38', [ComportamentoController::class, 'SaveComportamento37'])->middleware('auth');

    Route::get('/comportamento38', [ComportamentoController::class, 'Comportamento38'])->middleware('auth');
    Route::post('/comportamento39', [ComportamentoController::class, 'SaveComportamento38'])->middleware('auth');

    Route::get('/comportamento39', [ComportamentoController::class, 'Comportamento39'])->middleware('auth');
    Route::post('/comportamento40', [ComportamentoController::class, 'SaveComportamento39'])->middleware('auth');

    Route::get('/comportamento40', [ComportamentoController::class, 'Comportamento40'])->middleware('auth');
    Route::post('/comportamentoResult', [ComportamentoController::class, 'SaveComportamento40'])->middleware('auth');

    Route::get('/resultComportamento', [ComportamentoController::class, 'ResultComportamento'])->middleware('auth');
