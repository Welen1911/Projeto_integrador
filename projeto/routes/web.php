<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Gate;
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
    if (Gate::allows('isEmpresa')) {
        if (Gate::allows('empresa_create')) {
            return view('empresa_dash');
        }
        return "Tu é uma empresa, mas ainda não foi criado :(";
    } else if (Gate::allows('isCandidato')) {
        if (Gate::allows('candidato_create')) {
            return view('candidato_dash');
        }
        return "Tu é um candidato sem ser criado :(";
    }
})->middleware(['auth', 'tipo_conta'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::prefix('/conta')->group(base_path('routes/conta.php'));

Route::prefix('/vagas')->group(base_path('routes/vaga.php'));
