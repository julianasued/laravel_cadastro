@extends('header')

@section('content')

@if($status = Session::get('mensagem'))
<div class="alert alert-success" role="alert">{{ $status }}</div>
@endif
<main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">

  <h3>Lista de Cadastro:</h3>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">CPF</th>
          <th scope="col">Ações</th>
          <th scope="col">Usuário</th>
          <th scope="col">Pagamento</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pessoas as $pessoa)
        <tr>
          <td>{{ $pessoa->id }}</td>
          <td>{{ $pessoa->nome }}</td>
          <td>{{ $pessoa->email }}</td>
          <td>{{ $pessoa->cpf }}</td>
          <td>
            <form action="{{ route('pessoas.destroy', $pessoa->id) }}" method="post">
              <a href="{{ route('pessoas.show', 
                  $pessoa->id) }}" class="btn btn-info btn-sm">Detalhes</a> |
              <a href="{{ route('pessoas.edit', 
                  $pessoa->id) }}" class="btn btn-warning btn-sm">Editar</a> |

              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
            </form>
          </td>
          <td>
            <input data-id="{{$pessoa->id}}" class="toggle-class" type="checkbox" 
            data-onstyle="success" 
              data-offstyle="danger" data-toggle="toggle" data-on="Ativo" data-off="Inativo"
               {{ $pessoa->status ? 'checked' : ''}}>
          </td>
          <td>
            <input data-id="{{$pessoa->id}}" class="toggle-class toggle-pagamento" type="checkbox" 
            data-onstyle="success" 
              data-offstyle="danger" data-toggle="toggle" data-on="PAGO" data-off="PENDENTE"
               {{ $pessoa->pagamentos ? 'checked' : ''}}>
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
</main>
@stop