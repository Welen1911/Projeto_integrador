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
            return redirect()->route('empresa.index')->with('message', session('message'));
        }
        return redirect()->route('empresa.create');
    } else if (Gate::allows('isCandidato')) {
        if (Gate::allows('candidato_create')) {
            return redirect()->route('candidato.index')->with('message', session('message'));
        }
        return redirect()->route('candidato.create');
    }
})->middleware(['auth', 'tipo_conta'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::prefix('/conta')->group(base_path('routes/conta.php'));

Route::prefix('/candidato')->group(base_path('routes/candidato.php'));

Route::prefix('/empresa')->group(base_path('routes/empresa.php'));

Route::prefix('/vagas')->group(base_path('routes/vaga.php'));
