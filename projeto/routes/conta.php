<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/tipo', function () {
    return view('cadastro_user');
})->name('cadastro_user');

Route::post('/tipo', [RegisteredUserController::class, 'setTipoConta'])
->name('tipo_conta.update');