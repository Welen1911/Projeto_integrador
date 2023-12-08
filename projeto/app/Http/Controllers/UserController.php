<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Estado;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tipoConta()
    {
        $user = User::find(auth()->user()->id);

        return view('cadastro_user', compact('user'));
    }

    public function setTipoConta(Request $request)
    {
        if ($request->option == 1) {
            $tipo = "candidato";
        } else if ($request->option == 2) {
            $tipo = "empresa";
        } else {
            return response()->json(["Erro" => "Selecione um tipo de conta"], 500);
        }
        $user = User::find(auth()->user()->id);
        $user->update([
            'tipo_conta' => $tipo
        ]);

        return response()->json(["Sucesso" => $user], 200);
    }

    public function informationStore(Request $request)
    {

        $user = User::find(auth()->user()->id);


        $estado = Estado::where('nome', $request->estado)->first();
        

        if (!$estado) {
        
            $estado = Estado::create([
                'nome' => $request->estado,
            ]);
        }

        $cidade = Cidade::where('cep', $request->cep)->first();


        if (!$cidade) {
            
            $cidade = Cidade::create([
                'nome' => $request->cidade,
                'cep' => $request->cep,
                'estado_id' => $estado->id,
            ]);

        }

        $user->endereco()->create([
            'bairro' => $request->bairro,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'cidade_id' => $cidade->id,
        ]);

        $user->telefones()->create([
            'celular' => $request->celular,
            'fixo' => $request->fixo,
        ]);

        return redirect('/dashboard');
    }

    public function mudarNome(Request $request) {
        $user = User::find(auth()->user()->id);

        $user->update([
            'name' => $request->name,
        ]);

        return response()->json(['Sucesso' => $user], 200);
    }
}
