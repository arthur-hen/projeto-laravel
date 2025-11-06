@extends('template_admin.index')

@section('conteudo')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 text-capitalize mb-3">Painel <span class="text-primary">Administrativo</span></h1>
        <p class="text-muted">Gerencie todos os veículos cadastrados no sistema</p>
    </div>

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('admin.carros.create') }}" class="btn btn-primary rounded-pill px-4 py-2">
            <i class="fas fa-plus me-2"></i>Adicionar Novo Veículo
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Cor</th>
                    <th>Ano</th>
                    <th>KM</th>
                    <th>Valor (R$)</th>
                    <th>Fotos</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($carros as $carro)
                <tr>
                    <td>{{ $carro->id }}</td>
                    <td>{{ $carro->marca }}</td>
                    <td>{{ $carro->modelo }}</td>
                    <td>{{ $carro->cor }}</td>
                    <td>{{ $carro->ano_fabricacao }}</td>
                    <td>{{ $carro->quilometragem }}</td>
                    <td>{{ number_format($carro->valor, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ $carro->foto1 }}" target="_blank">1</a>,
                        <a href="{{ $carro->foto2 }}" target="_blank">2</a>,
                        <a href="{{ $carro->foto3 }}" target="_blank">3</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.carros.edit', $carro->id) }}" class="btn btn-sm btn-warning rounded-pill px-3 me-1">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.carros.destroy', $carro->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger rounded-pill px-3" onclick="return confirm('Tem certeza que deseja excluir este veículo?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-muted py-4">Nenhum veículo cadastrado.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
