<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatoEditRequest;
use App\Http\Requests\CandidatoRequest;
use App\Models\Area;
use App\Models\Candidato;
use App\Models\Experienca;
use App\Models\Formacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidato = auth()->user()->candidato;
        return view('candidato_dash', compact('candidato'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::orderBy('nome', 'asc')->get();
        return view('candidato.cadastro', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidatoRequest $request)
    {
        if (Gate::allows('isCandidato')) {
            $candidato = Candidato::create([
                'user_id' => auth()->user()->id,
                'sobre' => $request->sobre,
                'area_id' => $request->area,
                'curriculo' => $request->curriculo ?
                    $request->curriculo->storeAs(
                        'curriculos',
                        now() . ".{$request->curriculo->getClientOriginalExtension()}",
                    )
                    : null,
            ]);

            $cont = $request->cursando != null ?
                count($request->cursando) : 0;


            for ($i = 0; $i < $cont; $i++) {
                $candidato->formacaos()->create([
                    'instituto' => $request->instituto[$i],
                    'tipo' => $request->tipo[$i],
                    'curso' => $request->curso[$i],
                    'cursando' => $request->cursando[$i],
                ]);
            }

            $cont = $request->trabalhando != null ?
                count($request->trabalhando) : 0;

            for ($i = 0; $i < $cont; $i++) {
                $candidato->experiencias()->create([
                    'empresa' => $request->empresa[$i],
                    'descricao' => $request->descricao[$i],
                    'trabalhando' => $request->trabalhando[$i],
                ]);
            }

            return redirect('dashboard')->with('message', 'Cadastro feito!');
        } else {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function show(Candidato $candidato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidato $candidato)
    {
        if (Gate::allows('isCandidato') && Gate::allows('candidato_create')) {
            $areas = Area::orderBy('nome', 'asc')->get();
            return view('candidato.edit', compact('candidato', 'areas'));
        } else {
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function update(CandidatoEditRequest $request, Candidato $candidato)
    {
        if (Gate::allows('isCandidato') && Gate::allows('candidato_create')) {

            if ($request->curriculo) {
                if ($candidato->curriculo) {
                    unlink("storage/{$candidato->curriculo}");
                }

                $curriculo = $request->curriculo->storeAs(
                    'curriculos',
                    now() . ".{$request->curriculo->getClientOriginalExtension()}",
                );
            } else {
                $curriculo = null;
            }
            $candidato->update([
                'sobre' => $request->sobre,
                'area_id' => $request->area,
                'curriculo' => $curriculo,
            ]);

            if ($request->formacaoExists) {
                foreach ($request->formacaoExists as $key => $value) {

                    $formacao = Formacao::find($key);
                    if ($formacao) {
                        $formacao->update([
                            'instituto' => $value[0],
                            'curso' => $value[1],
                            'tipo' => $value[2],
                            'cursando' => $value[3],
                            'candidato_id' => auth()->user()->candidato->id,
                        ]);
                    }
                }
            }

            $cont = $request->cursando != null ?
                count($request->cursando) : 0;


            for ($i = 0; $i < $cont; $i++) {
                $candidato->formacaos()->create([
                    'instituto' => $request->instituto[$i],
                    'tipo' => $request->tipo[$i],
                    'curso' => $request->curso[$i],
                    'cursando' => $request->cursando[$i],
                ]);
            }

            if ($request->experienciaExists) {
                foreach ($request->experienciaExists as $key => $value) {

                    $experiencia = Experienca::find($key);
                    if ($experiencia) {
                        $experiencia->update([
                            'descricao' => $value[0],
                            'empresa' => $value[1],
                            'trabalhando' => $value[2],
                            'candidato_id' => auth()->user()->candidato->id,
                        ]);
                    }
                }
            }

            $cont = $request->trabalhando != null ?
                count($request->trabalhando) : 0;

            for ($i = 0; $i < $cont; $i++) {
                $candidato->experiencias()->create([
                    'empresa' => $request->empresa[$i],
                    'descricao' => $request->descricao[$i],
                    'trabalhando' => $request->trabalhando[$i],
                ]);
            }

            return redirect()->route('dashboard')->with('message', 'Perfil atualizado!');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidato $candidato)
    {
        if (Gate::allows('isCandidato') && Gate::allows('candidato_create')) {
            if ($candidato->curriculo) {
                unlink("storage/{$candidato->curriculo}");
            }

            $candidato->delete();

            return redirect()->route('dashboard');
        } else {
            return back();
        }
    }

    public function perfil(string $id)
    {
        $candidato = Candidato::find($id);
        return view('candidato_perfil', compact('candidato'));
    }
}
