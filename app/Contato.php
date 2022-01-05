<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'nome', 'email', 'telefone', 'funcao', 'cliente_id',
    ];
}
