<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('social.login');

Route::get('/auth/callback', [RegisteredUserController::class, 'storeProvider']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'tipo_conta'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/vagas/1', function () {
    return view('vagas.vaga');
});

Route::get('/vagas', function () {
    return view('vagas.listVagas');
});

Route::get('/tipo_conta', function () {
    return view('tipo_conta');
})->name('tipo_conta');


Route::post('/tipo_conta', [RegisteredUserController::class, 'setTipoConta'])
->name('tipo_conta.update');
