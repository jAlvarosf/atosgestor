<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {

            $table->id();

            $table->string('nome');
            $table->integer('telefone');
            $table->integer('cpf');
            $table->string('dataNascimento');
            $table->string('sexo');
            $table->string('naturalidade');
            $table->string('endereco');
            $table->integer('numeroCasa');
            $table->string('bairro');
            $table->string('complemento');
            $table->string('cidade');
            $table->integer('cep');
            $table->string('uf');
            $table->string('estadocivil');
            $table->string('observacoes');
            $table->string('estadoMem');
            
            $table->softDeletes();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
