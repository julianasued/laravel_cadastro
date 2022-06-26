@extends('header')

@section('content')
 
@if($errors->any())
  <h3>Houve alguns erros ao processar o formulário</h3>
  <ul>
     @foreach($errors->all() as $error)
        <li class="alert alert-danger" role="alert">{{ $error }}</li>
     @endforeach
  </ul>
@endif

<div class="container">
  <main>
    <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://www.ideiaspara.com.br/dominios/skillemblemas/imagens/usuario.svg" alt="" width="72" height="72">
      <h2>Formulário de Cadastro</h2>
    </div>

      <div class="col-md-12 col-lg-12">
        <h4 class="mb-3">Informações Pessoais</h4>
        <form action="{{ route('pessoas.store') }}" method="post" class="needs-validation" novalidate>
          @csrf
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="nome" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" name="nome" id="" placeholder="" value="" required>
              <div class="invalid-feedback">
                O primeiro nome válido é obrigatório.
              </div>
            </div>
            
            <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                <input type="email" class="form-control" name="email" id="" placeholder="email@example.com" required>
                <div class="invalid-feedback">
                Insira um endereço de e-mail válido.
                </div>
            </div>
            
            <div class="col-md-3">
              <label for="cpf" class="form-label">CPF</label>
              <input type="text" class="form-control" name="cpf" id="cpf" oninput="mascara(this)" placeholder="" required>
              <div class="invalid-feedback">
              CPF obrigatório.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cep" class="form-label">CEP</label>
              <input type="text" class="form-control" name="cep" id="cep" size="10" maxlength="9" placeholder="00000-000" onblur="pesquisacep(this.value);" required>
              <div class="invalid-feedback">
              CEP obrigatório.
              </div>
            </div>

            <div class="col-md-3">
              <label for="bairro" class="form-label">Bairro</label>
              <input type="text" class="form-control" name="bairro" id="bairro" placeholder="" required>
              <div class="invalid-feedback">
              Bairro obrigatório.
              </div>
            </div>

            <div class="col-12">
              <label for="endereco" class="form-label">Endereço</label>
              <input type="text" class="form-control" name="endereco" id="rua" placeholder="R. 1234" required>
              <div class="invalid-feedback">
              Por favor insira seu endereço.
              </div>
            </div>

            <div class="col-md-5">
              <label for="estado" class="form-label">UF</label>
              <select class="form-select" name="estado" id="uf" required>
                <option value="">Estado</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
              </select>
              <div class="invalid-feedback">
              Selecione um estado válido.
              </div>
            </div>

            <div class="col-md-5">
              <label for="cidade" class="form-label">Cidade</label>
              <input type="text" class="form-control" name="cidade" id="cidade" placeholder="" required>

              <div class="invalid-feedback">
              Forneça um estado válido.
              </div>
            </div>

          </div>

          <hr class="my-4">

          <button class="w-25 btn btn-primary btn-lg" type="submit">Salvar</button>
        </div>
      </form>
      </main>
    </div>
@stop