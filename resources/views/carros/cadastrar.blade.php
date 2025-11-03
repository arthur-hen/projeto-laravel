@extends("template_admin.index")

@section("conteudo")
<h2> cadastrar novo carro </h2>

    <div class="container">
        <form method="POST" action="{{ route('carros.novo') }}">
        @csrf

    <div class="row">
        <span> Modelo </span>
        <input type="text" name="modelo" />
    </div>

    <div class="row">
        <span> Marca </span>
        <input type="text" name="marca" />
    </div>

    <div class="row">
        <span> cor </span>
        <input type="text" name="cor" />
    </div>

        <div class="row">
        <span> ano fab.</span>
        <input type="text" name="ano_fabricacao" />
    </div>
    <div class="row">
        <input type="submit" title="SALVAR" class="btn btn-success"/>
    </div>

    </form>
     </div>
@endsection