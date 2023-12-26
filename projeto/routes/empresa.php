<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

Route::resource('empresa', EmpresaController::class)->middleware('auth');

Route::get('/perfil/{id}', [EmpresaController::class, 'perfil'])->name('empresa.perfil')->middleware('auth');
