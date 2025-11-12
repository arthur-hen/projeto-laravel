@extends('template_admin.index')

@section('conteudo')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 text-capitalize mb-3">
            {{ isset($carro) ? 'Editar Veículo' : 'Cadastrar Novo Veículo' }}
        </h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erro!</strong> Verifique os campos abaixo:
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form 
        action="{{ isset($carro) ? route('admin.carros.atualizar', $carro->id) : route('admin.carros.salvar') }}" method="POST" class="bg-light p-4 rounded-3 shadow-sm">
        @csrf
        @if(isset($carro))
            @method('PUT')
        @endif

        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label fw-bold">Marca</label>
                <input type="text" name="marca" class="form-control" value="{{ old('marca', $carro->marca ?? '') }}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold">Modelo</label>
                <input type="text" name="modelo" class="form-control" value="{{ old('modelo', $carro->modelo ?? '') }}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold">Cor</label>
                <input type="text" name="cor" class="form-control" value="{{ old('cor', $carro->cor ?? '') }}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold">Ano</label>
                <input type="number" name="ano_fabricacao" class="form-control" value="{{ old('ano_fabricacao', $carro->ano_fabricacao ?? '') }}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold">Quilometragem</label>
                <input type="number" name="quilometragem" class="form-control" value="{{ old('quilometragem', $carro->quilometragem ?? '') }}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold">Valor (R$)</label>
                <input type="number" step="0.01" name="valor" class="form-control" value="{{ old('valor', $carro->valor ?? '') }}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold">Link da Foto 1</label>
                <input type="url" name="foto1" class="form-control" value="{{ old('foto1', $carro->foto1 ?? '') }}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold">Link da Foto 2</label>
                <input type="url" name="foto2" class="form-control" value="{{ old('foto2', $carro->foto2 ?? '') }}" required>
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold">Link da Foto 3</label>
                <input type="url" name="foto3" class="form-control" value="{{ old('foto3', $carro->foto3 ?? '') }}" required>
            </div>
        </div>

        <div class="mt-4 text-center">
            <button type="submit" class="btn btn-success rounded-pill px-5 py-2">
                <i class="fas fa-save me-2"></i>{{ isset($carro) ? 'Salvar Alterações' : 'Cadastrar Veículo' }}
            </button>
            <a href="{{ route('admin.index') }}" class="btn btn-secondary rounded-pill px-5 py-2 ms-2">
                Voltar
            </a>
        </div>
    </form>
</div>
@endsection
