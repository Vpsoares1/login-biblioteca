<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario_agendamento;

class Usuario_agendamentoController extends Controller
{
     public function cadastro_html(Request $request)
    {
        return view('cadastro_usuario_agendamento');
    }
}
