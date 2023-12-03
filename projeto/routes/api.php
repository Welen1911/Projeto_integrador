<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\VagaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'api']);

Route::post('/', [VagaController::class, 'requisitos']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


