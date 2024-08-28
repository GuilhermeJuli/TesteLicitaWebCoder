@extends('master')

@section('content')

    <h1>Lista de Cidades Cadastradas</h1>

    <ul>

    @foreach($city as $city)
    <li>
        <strong>| Nome da Cidade: </strong> {{ $city->nome_cidade }}<br>
        <strong>| Data de Alteração das Descrições da Marca/Fabricante: </strong> {{ $city->updated_at }}

        <div>
            <button type="button" class="btn btn-primary">
            <a href="{{ route('city.edit', ['cod_cidade' => $city->cod_cidade]) }}">Editar</a>
            </button>
            <button type="button" class="btn btn-secondary">
            <a href="{{ route('city.show', ['cod_cidade' => $city->cod_cidade]) }}">Detalhes</a>
            </button>

            <form action="{{ route('city.destroy', ['cod_cidade' => $city->cod_cidade]) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </div>
    </li>
@endforeach
    </ul>
    <script>
        function confirmDelete() {
            return confirm('Tem certeza que deseja excluir esta Cidade?');
        }
    </script>

@endsection
