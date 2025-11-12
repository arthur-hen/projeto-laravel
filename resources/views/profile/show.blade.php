@extends('template.index')

@section('conteudo')
<div class="container py-5">
    <div class="card shadow-lg border-0 mx-auto" style="max-width: 500px;">
        <div class="card-header bg-primary text-white text-center">
            <h4>Perfil do Usuário</h4>
        </div>
        <div class="card-body">
            <p><strong>Nome:</strong> {{ Auth::user()->name }}</p>
            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>

            <div class="text-center mt-4">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-sign-out-alt me-2"></i> Sair
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
