<?php

use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\CandidaturaController;
use Illuminate\Support\Facades\Route;

Route::resource('candidato', CandidatoController::class)->middleware('auth');

Route::resource('candidatura', CandidaturaController::class)->middleware('auth');