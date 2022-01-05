<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'razao_social', 'nome', 'tipo', 'documento', 'estado', 'cidade', 'email', 'telefone', 'endereco', 'status',
    ];
}

