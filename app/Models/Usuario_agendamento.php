<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario_agendamento extends Model
{
    protected $table = 'usuario_agendamento';   

    protected $fillable = [
        'cpf',
        'email',
        'senha',
    ];
}
