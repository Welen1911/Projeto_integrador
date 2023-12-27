<?php

namespace App\Http\Controllers;

use App\Http\Requests\VagaRequest;
use App\Models\Area;
use App\Models\Atribuito;
use App\Models\Requisito;
use App\Models\Vaga;
use App\Models\Vinculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Ramsey\Uuid\Type\Integer;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $vagas = Vaga::paginate(4);
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
    public function store(VagaRequest $request)
    {
        if (Gate::allows('isEmpresa') && Gate::allows('empresa_create')) {

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

            return redirect('dashboard')->with('message', 'Vaga criada!');
        } else {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function show(Vaga $vaga)
    {
        return view('vagas.vaga', compact('vaga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaga $vaga)
    {
        $areas = Area::all();
        return view('vagas.edit', compact('vaga', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function update(VagaRequest $request, Vaga $vaga)
    {
        if (Gate::allows('isEmpresa') && Gate::allows('empresa_create')) {
            $vinculo = Vinculo::where('nome', $request->vinculo)->first();

            if (!$vinculo) {
                $vinculo = Vinculo::create([
                    'nome' => $request->vinculo,
                ]);
            }

            $vaga->update([
                'titulo' => $request->titulo,
                'descricao' => $request->descricao,
                'area_id' => $request->area,
                'vinculo_id' => $vinculo->id,
            ]);

            if ($request->atributoExists) {
                foreach ($request->atributoExists as $key => $value) {

                    $atributo = Atribuito::find($key);
                    if ($atributo) {
                        $atributo->update([
                            'titulo' => $value[0],
                        ]);
                    }
                }
            }

            $qtdAtributo = $request->atributo != null ?
                count($request->atributo) : 0;

            for ($i = 0; $i < $qtdAtributo; $i++) {
                $vaga->atributos()->create([
                    'titulo' => $request->atributo[$i],
                ]);
            }

            if ($request->requisitoExists) {
                foreach ($request->requisitoExists as $key => $value) {

                    $requisito = Requisito::find($key);
                    if ($requisito) {
                        $requisito->update([
                            'titulo' => $value[0],
                        ]);
                    }
                }
            }

            $qtdRequisitos = $request->requisito != null ?
                count($request->requisito) : 0;

            for ($i = 0; $i < $qtdRequisitos; $i++) {
                $vaga->requisitos()->create([
                    'titulo' => $request->requisito[$i],
                ]);
            }

            return redirect()->route('dashboard')->with('message', 'Vaga atualizada!');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaga $vaga)
    {
        if (Gate::allows('isEmpresa') && Gate::allows('empresa_create')) {
            $vaga->delete();

            return redirect()->route('dashboard')->with('message', 'Vaga excluída!');
        } else {
            return back();
        }
    }
}
