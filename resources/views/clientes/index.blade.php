@extends('template_admin.index')
@section('conteudo')

<div class="container mt-4">
    <h4>Lista de Clientes</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="/clientes/cadastrar" class="btn btn-primary mb-3">Novo Cliente</a>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
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
                <td>
                    <a href="/clientes/alterar/{{ $c->id }}" class="btn btn-warning btn-sm">Alterar</a>
                    <a href="/clientes/excluir/{{ $c->id }}" onclick="return confirm('Deseja excluir este cliente?')" class="btn btn-danger btn-sm">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
