@extends('template.index')
@section('conteudo')

<div class="container-fluid mt-5 pt-3"> 
  <div class="row">
    <div class="col-md-3"></div>

    <div class="col-md-6">
      <h2 class="mb-4">Registrar Usuário</h2>

      <form method="POST" action="{{ route('register.store') }}">
        @csrf 

        <div class="mb-3">
          <label>Nome:</label>
          <input type="text" class="form-control" name="name"/>
        </div>

        <div class="mb-3">
          <label>Email:</label>
          <input type="email" class="form-control" name="email"/>
        </div>

        <div class="mb-3">
          <label>Senha:</label>
          <input type="password" class="form-control" name="password"/>
        </div>

        <div class="mb-3">
          <label>Confirmar:</label>
          <input type="password" class="form-control" name="password_confirmation"/>
        </div>

        <button type="submit" class="btn btn-primary">CRIAR</button>
      </form>
    </div>
  </div>
</div>

@endsection
