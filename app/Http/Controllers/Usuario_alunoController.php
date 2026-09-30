<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario_alunoController extends Controller
{
    public function cadastro_html(Request $request)
    {
        return view('usuario_aluno');
    }
}
