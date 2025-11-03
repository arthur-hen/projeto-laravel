@extends("template_admin.index")

@section("conteudo")
<h2> alterar carro </h2>



    <div class="container">
        <form method="POST" action="">
        @csrf
        <input type="text" name="id" value="{{ $carro->id }}" disabled/>

     <div class="row">
        <span> Marca </span>
        <input type="text" name="marca"
        value="{{ $carro->marca }}" />
    </div>

    <div class="row">
        <span> Modelo </span>
        <input type="text" name="modelo" 
        value="{{ $carro->modelo }}" />
    </div>

   

    <div class="row">
        <span> cor </span>
        <input type="text" name="cor" 
        value="{{ $carro->cor }}" />
    </div>

        <div class="row">
        <span> ano fab.</span>
        <input type="text" name="ano_fabricacao"
        value="{{ $carro->ano_fabricacao }}"  />
    </div>
    <div class="row">
        <input type="submit" title="SALVAR" class="btn btn-success"/>
    </div>

    </form>
     </div>
@endsection