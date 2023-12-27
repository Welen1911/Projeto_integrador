<?php

use App\Http\Controllers\VagaController;
use Illuminate\Support\Facades\Route;

Route::get('/1', function () {
    return view('vagas.vaga');
});

Route::resource('/vaga', VagaController::class);

