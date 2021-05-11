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

            $table->string('nome', 255)->nullable();
            $table->string('telefone', 22)->nullable()->default(0.00);
            $table->string('cpf', 22)->nullable()->default(0.00);
            $table->string('dataNascimento', 22)->nullable()->default(0.00);
            $table->string('sexo', 10)->nullable()->default(0.00);
            $table->string('naturalidade', 22)->nullable();
            $table->string('endereco', 255)->nullable();
            $table->string('numeroCasa', 22)->nullable();
            $table->string('bairro', 22)->nullable();
            $table->string('complemento', 255)->nullable();
            $table->string('cidade', 255)->nullable();
            $table->string('cep', 22)->nullable();
            $table->string('uf', 22)->nullable();
            $table->string('estadocivil', 22)->nullable();
            $table->string('observacoes', 22)->nullable();
            $table->string('estadoMem', 22)->nullable();
            
            $table->softDeletes();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable(); 
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
