
@extends('layout.principal_painel')

@section('title', 'Cadastro de Usuário')

@section('content')

    <div class="row justify-content-center d-flex ">
        <div class="col-8 rounded-5 shadow-lg p-3 mb-5 mt-5 bg-body-tertiary">
            <img src="s.jpg" alt="Bootstrap" width="240" height="80" class="d-block mx-auto mb-4 mt-3">
            <h2 class="text-center mt-4 text-danger fonte"><b>PAINEL DE AVISOS</b></h2>
            <div class="row justify-content-left d-flex" style="margin-left: 30px;">
                <div class="col-lg-11 col-md-11 col-sm-12 mt-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-sm" id="email" name="email"
                        placeholder="Digite seu email">
                </div>
                <br>
               <div class="col-12 d-flex justify-content-center gap-3 mt-5 mb-3"> 
                <button type="button" class="btn btn-outline-danger">Enviar Email</button> 
            </div>
        </div>
    </div>
@endsection
