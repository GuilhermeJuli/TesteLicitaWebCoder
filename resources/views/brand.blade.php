@extends('master')

@section('content')

    <h1>Lista de Marcas/Fornecedores</h1>

    <ul>

    @foreach($brand as $brand)
    <li>
        <strong>| Código da Marca/Fornecedor: </strong> {{ $brand->cod_marca }}<br>
        <strong>| Nome da Marca/Fornecedor: </strong> {{ $brand->nome_marca }}<br>
        <strong>| Fabricante: </strong> {{ $brand->fabricante }}<br>
        <strong>| Data de Alteração das Descrições da Marca/Fabricante: </strong> {{ $brand->updated_at }}

        <div>
            <button type="button" class="btn btn-primary">
                <a href="{{ route('brand.edit', ['cod_marca' => $brand->cod_marca]) }}">Editar</a>
            </button>
            <button type="button" class="btn btn-secondary">
                <a href="{{ route('brand.show', ['cod_marca' => $brand->cod_marca]) }}">Detalhes</a>
            </button>
            <form action="{{ route('brand.destroy', ['cod_marca' => $brand->cod_marca]) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                @csrf
                @method('DELETE')
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </div>
    </li>
@endforeach


    </ul>

    <script>
        function confirmDelete() {
            return confirm('Tem certeza que deseja excluir este fornecedor?');
        }
    </script>

@endsection
