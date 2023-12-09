<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

Route::resource('empresa', EmpresaController::class)->middleware('auth');