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

            $table->integer('codigo');
            $table->string('nome');
            $table->unique('cpf');
            $table->integer('data-nascimento');
            $table->string('sexo');
            $table->string('endereco');
            $table->integer('numero-casa');
            $table->string('bairro');
            $table->string('complemento');
            $table->string('cidade');
            $table->integer('cep');
            $table->string('uf');
            $table->string('estado-civil');
            $table->string('observacoes');
            $table->integer('telefone');
            $table->string('status');

            // $table->softDeletes();
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
