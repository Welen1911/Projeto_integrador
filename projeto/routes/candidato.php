<?php

use App\Http\Controllers\CandidatoController;
use Illuminate\Support\Facades\Route;

Route::resource('candidato', CandidatoController::class)->middleware('auth');