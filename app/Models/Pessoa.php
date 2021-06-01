<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pessoas';
    public $timestamps = true;

    protected $fillable = [
        'id',
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
        'updated_at'
    ];

}
