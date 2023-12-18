<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Candidato;
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
        $areas = Area::all();
        return view('candidato.cadastro', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $candidato = Candidato::create([
            'user_id' => auth()->user()->id,
            'sobre' => $request->sobre,
            'area_id' => $request->area,
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

        return redirect('dashboard');
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
            $areas = Area::all();
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
    public function update(Request $request, Candidato $candidato)
    {
        if (Gate::allows('isCandidato') && Gate::allows('candidato_create')) {
            dd($request->all());
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
        //
    }
}
