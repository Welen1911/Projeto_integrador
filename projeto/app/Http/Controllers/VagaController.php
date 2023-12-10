<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Atribuito;
use App\Models\Requisito;
use App\Models\Vaga;
use App\Models\Vinculo;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vagas = Vaga::all();

        return view('vagas.listVagas', compact('vagas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        return view('vagas.cadastro', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vinculo = Vinculo::where('nome', $request->vinculo)->first();

        if (!$vinculo) {
            $vinculo = Vinculo::create([
                'nome' => $request->vinculo,
            ]);
        }

        $vaga = Vaga::create([
            'empresa_id' => auth()->user()->empresa->id,
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'area_id' => $request->area,
            'titulo' => $request->titulo,
            'vinculo_id' => $vinculo->id,
        ]);

        $qtdAtributo = $request->atributo != null ?
            count($request->atributo) : 0;

        for ($i = 0; $i < $qtdAtributo; $i++) {
            $vaga->atributos()->create([
                'titulo' => $request->atributo[$i],
            ]);
        }

        $qtdRequisitos = $request->requisito != null ?
            count($request->requisito) : 0;

        for ($i = 0; $i < $qtdRequisitos; $i++) {
            $vaga->requisitos()->create([
                'titulo' => $request->requisito[$i],
            ]);
        }

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function show(Vaga $vaga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaga $vaga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaga $vaga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaga $vaga)
    {
        //
    }
}
