<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/tipo', [UserController::class, 'tipoConta'])->name('cadastro_user')->middleware('auth');

Route::post('/tipo_conta', [UserController::class, 'setTipoConta'])
    ->middleware('auth');

Route::post('/infor', [UserController::class, 'informationStore'])
    ->name('infor.store')
    ->middleware('auth');

Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit')->middleware('auth');;

Route::put('/user/edit/{id}', [UserController::class, 'update'])->name('user.update')->middleware('auth');;

Route::delete('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy')->middleware('auth');;

