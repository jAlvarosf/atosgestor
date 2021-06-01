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
        $pessoa = Pessoa::find($id);
        return view('secretaria.edit-pessoa')->with('pessoa',$pessoa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Secretaria  $secretaria
     * @param  \App\Models\Pessoa  $pessoas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::find($id);
        
        $pessoa->nome = $request->get('nome');
        $pessoa->telefone = $request->get('telefone');
        $pessoa->cpf = $request->get('cpf');
        $pessoa->dataNascimento = $request->get('dataNascimento');
        $pessoa->sexo = $request->get('sexo');
        $pessoa->naturalidade = $request->get('naturalidade');
        $pessoa->endereco = $request->get('endereco');
        $pessoa->numeroCasa = $request->get('numeroCasa');
        $pessoa->bairro = $request->get('bairro');
        $pessoa->complemento = $request->get('complemento');
        $pessoa->cidade = $request->get('cidade');
        $pessoa->cep = $request->get('cep');
        $pessoa->uf = $request->get('uf');
        $pessoa->estadocivil = $request->get('estadocivil');
        $pessoa->observacoes = $request->get('observacoes');
        $pessoa->estadoMem = $request->get('estadoMem');
        $pessoa->created_at = $request->get('created_at');
        $pessoa->updated_at = $request->get('updated_at');

        $pessoa->save();

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
    public function destroy($id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->delete();

        return redirect()->route('secretaria.index')
            ->with('Sucesso', 'Pessoa excluida Com Sucesso.');
    }
}
