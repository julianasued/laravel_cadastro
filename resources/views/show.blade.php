@extends('header')

@section('content')

 <div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="https://www.ideiaspara.com.br/dominios/skillemblemas/imagens/usuario.svg" alt="" width="72" height="72">
      <h2>Informações de Cadastro</h2>
    </div>

      <div class="col-md-12 col-lg-12">
        <h4 class="mb-3">Informações Pessoais</h4>
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="nome" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" name="nome" placeholder="{{ $pessoa->nome }}" value="" disabled="">
            </div>
            
            <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                <input type="email" class="form-control" name="email" placeholder="{{ $pessoa->email }}" disabled="">
            </div>
            
            <div class="col-md-3">
              <label for="cpf" class="form-label">CPF</label>
              <input type="text" class="form-control" name="cpf" placeholder="{{ $pessoa->cpf }}" disabled="">
            </div>

            <div class="col-md-3">
              <label for="cep" class="form-label">CEP</label>
              <input type="text" class="form-control" name="cep" placeholder="{{ $pessoa->cep }}" disabled="">
            </div>

            <div class="col-md-3">
              <label for="bairro" class="form-label">Bairro</label>
              <input type="text" class="form-control" name="bairro" placeholder="{{ $pessoa->bairro }}" disabled="">
            </div>

            <div class="col-12">
              <label for="endereco" class="form-label">Endereço</label>
              <input type="text" class="form-control" name="endereco" placeholder="{{ $pessoa->endereco }}" disabled="">
            </div>

            <div class="col-md-5">
              <label for="estado" class="form-label">UF</label>
              <input type="text" class="form-control" name="estado" placeholder="{{ $pessoa->estado }}" disabled="">
            </div>

            <div class="col-md-5">
              <label for="cidade" class="form-label">Cidade</label>
              <input type="text" class="form-control" name="estado" placeholder="{{ $pessoa->cidade }}" disabled="">
            </div>
          </div>

          <hr class="my-4">
@stop