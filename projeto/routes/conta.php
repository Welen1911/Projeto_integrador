<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/tipo', [UserController::class, 'tipoConta'])->name('cadastro_user')->middleware('auth');

Route::post('/tipo_conta', [UserController::class, 'setTipoConta'])
    ->middleware('auth');

Route::post('/infor', [UserController::class, 'informationStore'])
    ->name('infor.store')
    ->middleware('auth');

Route::post('/mudarNome', [UserController::class, 'mudarNome'])
->name('user.mudarNome');
