@extends('header')

@section('content')
 
@if($errors->any())
  <h3>Houve alguns erros ao processar o formulário</h3>
  <ul>
     @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
  </ul>
@endif

<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="https://www.ideiaspara.com.br/dominios/skillemblemas/imagens/usuario.svg" alt="" width="72" height="72">
      <h2>Atualização de Cadastro</h2>
    </div>

      <div class="col-md-12 col-lg-12">
        <h4 class="mb-3">Informações Pessoais</h4>
        <form action="{{ route('pessoas.update', $pessoa->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="nome" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" value="{{ $pessoa->nome }}" name="nome" placeholder="" value="">
              <div class="invalid-feedback">
                O primeiro nome válido é obrigatório.
              </div>
            </div>
            
            <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                <input type="email" class="form-control" value="{{ $pessoa->email }}" name="email" placeholder="email@example.com">
                <div class="invalid-feedback">
                Insira um endereço de e-mail válido.
                </div>
            </div>
            
            <div class="col-md-3">
              <label for="cpf" class="form-label">CPF</label>
              <input type="text" class="form-control" value="{{ $pessoa->cpf }}" name="cpf" id="cpf" oninput="mascara(this)" placeholder="">
              <div class="invalid-feedback">
              CPF obrigatório.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cep" class="form-label">CEP</label>
              <input type="text" class="form-control" value="{{ $pessoa->cep }}" name="cep" id="cep" size="10" maxlength="9" placeholder="" onblur="pesquisacep(this.value);" placeholder="">
              <div class="invalid-feedback">
              CEP obrigatório.
              </div>
            </div>

            <div class="col-md-3">
              <label for="bairro" class="form-label">Bairro</label>
              <input type="text" class="form-control" value="{{ $pessoa->bairro }}" name="bairro" placeholder="">
              <div class="invalid-feedback">
              Bairro obrigatório.
              </div>
            </div>

            <div class="col-12">
              <label for="endereco" class="form-label">Endereço</label>
              <input type="text" class="form-control" value="{{ $pessoa->endereco }}" name="endereco" placeholder="R. 1234">
              <div class="invalid-feedback">
              Por favor insira seu endereço.
              </div>
            </div>

            <div class="col-md-5">
              <label for="estado" class="form-label">UF</label>
              <select class="form-select" name="estado" id="uf">
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

            <div class="col-md-4">
              <label for="cidade" class="form-label">Cidade</label>
              <input type="text" class="form-control" value="{{ $pessoa->cidade }}" name="cidade" id="cidade" placeholder="">
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