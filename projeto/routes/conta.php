<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/tipo', function () {
    return view('tipo_conta');
})->name('tipo_conta');

Route::post('/tipo', [RegisteredUserController::class, 'setTipoConta'])
->name('tipo_conta.update');