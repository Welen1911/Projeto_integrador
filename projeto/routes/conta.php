<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/tipo', function () {
    return view('cadastro_user');
})->name('cadastro_user')->middleware('auth');;

Route::get('/tipo_conta', [RegisteredUserController::class, 'setTipoConta'])->middleware('auth');;
