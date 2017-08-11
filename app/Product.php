<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Os atributos que podem ser atribuidos e salvos na tabela
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'descricao', 'unidadeM'
    ];
}
