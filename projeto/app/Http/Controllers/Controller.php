<?php

namespace App\Http\Controllers;

use App\Models\Candidatura;
use App\Models\Endereco;
use App\Models\User;
use App\Models\Vaga;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function api()
    {
        $users = User::all();
        $vagas = Vaga::all();
        $endereco = Endereco::all();
        $candidaturas = Candidatura::all();

        return response()->json([$users, $vagas, $endereco, $candidaturas], 200);
    }
}
