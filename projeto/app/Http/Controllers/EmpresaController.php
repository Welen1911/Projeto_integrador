<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresaRequest;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = auth()->user()->empresa;

        return view('empresa_dash', compact('empresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaRequest $request)
    {
        $empresa = Empresa::create([
            'user_id' => auth()->user()->id,
            'cnpj' => $request->cnpj,
            'descricao' => $request->descricao,
        ]);

        return redirect('dashboard')->with('message', 'Cadastro feito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        if (Gate::allows('isEmpresa') && Gate::allows('empresa_create')) {
            return view('empresa.edit', compact('empresa'));
        } else {
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(EmpresaRequest $request, Empresa $empresa)
    {
        if (Gate::allows('isEmpresa') && Gate::allows('empresa_create')) {
            $empresa->update([
                'descricao' => $request->descricao,
                'cnpj' => $request->cnpj,
            ]);

            return redirect()->route('dashboard')->with('message', 'Perfil atualizado!');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        if (Gate::allows('isEmpresa') && Gate::allows('empresa_create')) {
            $empresa->delete();

            return redirect()->route('dashboard');
        } else {
            return back();
        }
    }

    public function perfil(string $id) {
        $empresa = Empresa::find($id);
        $vagas = $empresa->vagas()->paginate(3);
        return view('empresa_perfil', compact('empresa', 'vagas'));
    }
}
