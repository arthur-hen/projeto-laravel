@Extends('template_admin.index')

@section('Conteudo')
    <h2>Carros</h2>

    <table class="table table-striped"> 
        <thead>
            <tr>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Ano</th>
                <th>Opções</th>
            </tr>
        </thead>

   
    <tbody>

    @foreach ($carros as $linha)
    <tr>
        <td> {{ $linha->modelo }}</td>
        <td> {{ $linha->marca }}</td>
        <td> {{ $linha->ano_fabricacao }}</td>
        <td> <a href="{{ route('carro.buscar', $linha->id ) }}" class='btn btn-primary'> 
            E
         </a></td>
    </tr>

      @endforeach
    </tbody>
    </table>
@endsection