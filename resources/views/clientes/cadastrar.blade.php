@extends('template_admin.index')
@section('conteudo')

<div class="container mt-4">
    <h4>Cadastrar Cliente</h4>

    <form action="/clientes/salvar" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>CPF</label>
            <input type="text" name="cpf" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="text" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="/clientes" class="btn btn-secondary">Voltar</a>
    </form>
</div>

@endsection
