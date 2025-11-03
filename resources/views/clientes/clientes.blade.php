@extends('template_admin.index')
@section('conteudo')

<div class="container-fluid mt-4">
  <div class="card shadow-sm">
    <div class="card-body">
      <h4 class="card-title mb-3">Lista de Clientes</h4>

      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      <a href="/clientes/cadastrar" class="btn btn-primary mb-3">Novo Cliente</a>

      <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
          <thead class="table-dark text-center">
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>CPF</th>
              <th>Email</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($clientes as $c)
            <tr>
              <td>{{ $c->id }}</td>
              <td>{{ $c->nome }}</td>
              <td>{{ $c->cpf }}</td>
              <td>{{ $c->email }}</td>
              <td class="text-center">
                <a href="/clientes/alterar/{{ $c->id }}" class="btn btn-warning btn-sm">Alterar</a>
                <a href="/clientes/excluir/{{ $c->id }}" onclick="return confirm('Deseja excluir este cliente?')" class="btn btn-danger btn-sm">Excluir</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
