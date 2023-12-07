<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('cadastro_user');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('social.login');

Route::get('/auth/callback', [RegisteredUserController::class, 'storeProvider']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'tipo_conta'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix('conta')->group(base_path('routes/conta.php'));

Route::prefix('/vagas')->group(base_path('routes/vaga.php'));

Route::get('teste', function () {
    return view('cadastro_user');
});