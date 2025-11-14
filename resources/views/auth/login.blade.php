@extends('template.index')

@section('conteudo')

<div class="container-fluid mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="mb-4 text-center">Login</h2>

            
            @if (session('status'))
            <div class="alert alert-info">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Nome de usuário --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Usuário</label>
                    <input id="name" type="text"
                        name="name"
                        value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror"
                        required autofocus autocomplete="username">

                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                

        {{-- Senha --}}
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input id="password" type="password"
                name="password"
                class="form-control @error('password') is-invalid @enderror"
                required autocomplete="current-password">

            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-primary">
                Entrar
            </button>
        </div>
        </form>
    </div>
</div>
</div>

@endsection