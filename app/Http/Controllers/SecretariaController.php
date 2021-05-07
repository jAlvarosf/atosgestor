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
        $pessoas=Pessoa::all();
        return view('secretaria.index')->with('pessoas',$pessoas);
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
        $pessoas = new Pessoa();

        $pessoas->nome = $request->get('nome');
        $pessoas->telefone = $request->get('telefone');       
        $pessoas->cpf = $request->get('cpf');
        $pessoas->dataNascimento = $request->get('dataNascimento');
        $pessoas->sexo = $request->get('sexo');
        $pessoas->naturalidade = $request->get('naturalidade');
        $pessoas->endereco = $request->get('endereco');
        $pessoas->numeroCasa = $request->get('numeroCasa');
        $pessoas->bairro = $request->get('bairro');
        $pessoas->complemento = $request->get('complemento');
        $pessoas->cidade = $request->get('cidade');
        $pessoas->cep = $request->get('cep');
        $pessoas->uf = $request->get('uf');
        $pessoas->estadocivil = $request->get('estadocivil');
        $pessoas->observacoes = $request->get('observacoes');
        $pessoas->estadoMem = $request->get('estadoMem');

        $pessoas->save();

        return redirect('/secretaria');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function show(Secretaria $secretaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function edit(Secretaria $secretaria)
    {
        return view('secretaria.create-pessoa');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Secretaria $secretaria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secretaria  $secretaria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secretaria $secretaria)
    {
        //
    }
}
