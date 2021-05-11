<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use Illuminate\Http\Request;
use App\Models\Pessoa;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('secretaria.index')->with('pessoas', $pessoas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('secretaria.create-pessoa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'cpf' => 'required',
            'dataNascimento' => 'required',
            'sexo',
            'naturalidade',
            'endereco',
            'numeroCasa',
            'bairro',
            'complemento',
            'cidade',
            'cep',
            'uf',
            'estadocivil',
            'observacoes',
            'estadoMem',
            'created_at',
            'updated_at',
        ]);

        Pessoa::create($request->all());

        return redirect()->route('secretaria.index')
            ->with('Sucesso', 'Pessoa Creada Com Sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @param  \App\Models\Pessoa  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function show(Secretaria $pessoas)
    {
        return view('secretaria.index', compact('pessoas'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoas = Pessoa::find($id);
        return view('secretaria.edit-pessoa')->with('pessoa',$pessoas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Secretaria  $secretaria
     * @param  \App\Models\Pessoa  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoas)
    {
        $request->validate([
            'nome',
            'telefone',
            'cpf',
            'dataNascimento',
            'sexo',
            'naturalidade',
            'endereco',
            'numeroCasa',
            'bairro',
            'complemento',
            'cidade',
            'cep',
            'uf',
            'estadocivil',
            'observacoes',
            'estadoMem',
            'created_at',
            'updated_at',
        ]);

        $pessoas->update($request->all());

        return redirect()->route('secretaria.index')
            ->with('Sucesso', 'Pessoa Atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @param  \App\Models\Pessoa  $pessoas
     * @return \Illuminate\Http\Response
     * 
     */
    public function destroy(Pessoa $pessoas)
    {
        $pessoas->delete();

        return redirect()->route('secretaria.index')
            ->with('Sucesso', 'Pessoa Creada Com Sucesso.');
    }
}
