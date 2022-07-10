<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use \Illuminate\Database\Eloquent\Relations\{
    HasOne,
    BelongsTo
};

class Endereco extends Model
{


    protected $fillable = [
        'nome',
        'telefone',
        'rua',
        'numero',
        'compl',
        'bairro',
        'cidade',
        'uf',
 
  
        
    ];

 
}

