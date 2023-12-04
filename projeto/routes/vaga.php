<?php

use Illuminate\Support\Facades\Route;

Route::get('/1', function () {
    return view('vagas.vaga');
});

Route::get('', function () {
    return view('vagas.listVagas');
});