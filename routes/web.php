<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Usuario_agendamentoController;
use App\Http\Controllers\Usuario_alunoController;
use App\Http\Controllers\Usuario_agendamento_alunoController;
use App\Http\Controllers\Senha_usuario_agendamentoController;
use App\Http\Controllers\Senha_usuario_alunoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro_usuario', [UsuarioController::class, 'cadastro_html'])->name('cadastro_usuario');
Route::get('/cadastro_usuario_agendamento', [Usuario_agendamentoController::class, 'cadastro_html'])->name('cadastro_usuario_agendamento');
Route::get('/usuario_aluno', [Usuario_alunoController::class, 'cadastro_html'])->name('usuario_aluno');
Route::get('/usuario_agendamento_aluno', [Usuario_agendamento_alunoController::class, 'cadastro_html'])->name('usuario_agendamento_aluno');
Route::get('/senha_usuario_agendamento', [Senha_usuario_agendamentoController::class, 'cadastro_html'])->name('senha_usuario_agendamento');
Route::get('/senha_usuario_aluno', [Senha_usuario_alunoController::class, 'cadastro_html'])->name('senha_usuario_aluno');