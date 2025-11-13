@extends('template.layout_detalhes')

@section('conteudo')
<div class="container py-5">

    <!-- CARD PRINCIPAL -->
    <div class="card shadow-lg mx-auto" style="max-width: 900px; border-radius: 20px;">
        
        <!-- FOTO PRINCIPAL -->
        <img src="{{ $carro->foto1 }}" class="w-100" 
             style="height: 420px; object-fit: cover; border-radius: 20px 20px 0 0;">

        <div class="card-body text-center">

            <h2 class="text-capitalize mt-3">{{ $carro->marca }} {{ $carro->modelo }}</h2>

            <h3 class="text-primary fw-bold">
                R$ {{ number_format($carro->valor, 2, ',', '.') }}
            </h3>

            <hr>

            <!-- TABELA DE ESPECIFICAÇÕES -->
            <table class="table table-bordered text-start" style="border-radius: 10px; overflow: hidden;">
                <tr>
                    <td><strong>Cor:</strong> {{ $carro->cor }}</td>
                </tr>
                <tr>
                    <td><strong>Ano:</strong> {{ $carro->ano_fabricacao }}</td>
                </tr>
                <tr>
                    <td><strong>KM:</strong> {{ number_format($carro->quilometragem, 0, ',', '.') }} km</td>
                </tr>
                <tr>
                    <td><strong>Descrição:</strong> {{ $carro->descricao ?? 'Sem descrição cadastrada.' }}</td>
                </tr>
            </table>

            <h4 class="mt-4 mb-3">Mais fotos</h4>

            <!-- GALERIA DE FOTOS -->
            <div class="row g-3">
                <div class="col-md-6">
                    <img src="{{ $carro->foto2 }}" 
                         class="img-fluid rounded shadow"
                         style="height: 230px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-md-6">
                    <img src="{{ $carro->foto3 }}" 
                         class="img-fluid rounded shadow"
                         style="height: 230px; width: 100%; object-fit: cover;">
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
