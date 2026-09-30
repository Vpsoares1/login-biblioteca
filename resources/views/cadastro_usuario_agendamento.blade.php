

@extends('layout.principal')

@section('title', 'Cadastro de Usuário')

@section('content')

    <div class="row justify-content-center d-flex ">
        <div class="col-8 rounded-5 shadow-lg p-3 mb-5 mt-4 bg-body-tertiary">
            <img src="s.jpg" alt="Bootstrap" width="240" height="80" class="d-block mx-auto mb-4 mt-3">
            <h2 class="text-center mt-4 text-danger fonte"><b>BIBLIOTECA SESI</b></h2>
            <div class="row justify-content-left d-flex" style="margin-left: 30px;">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label for="email" class="form-label">Email ou CPF</label>
                    <input type="email" class="form-control form-control-sm" id="email" name="email"
                        placeholder="Digite seu email ou CPF">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control form-control-sm" id="senha" name="senha"
                        placeholder="Digite sua senha">
                </div>
                <br>
               <div class="col-12 d-flex justify-content-center gap-3 mt-5 mb-3"> 
                <button type="button" class="btn btn-outline-danger"> Esqueci a senha </button> 
                <button type="button" class="btn btn-danger"> Entrar </button> </div>
            </div>
        </div>
    </div>
@endsection
