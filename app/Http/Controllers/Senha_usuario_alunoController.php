<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Senha_usuario_alunoController extends Controller
{
    public function cadastro_html(Request $request)
    {
        return view('senha_usuario_aluno');
    }
}
