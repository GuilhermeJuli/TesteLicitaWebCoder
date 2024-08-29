@extends('master')

@section('content')
    <h1>Lista de Produtos</h1>
    <ul>
        @foreach($products as $product)
            <li id="product-{{ $product->cod_produto }}">
                <strong>| Código do Produto: </strong> {{ $product->cod_produto }}<br>
                <strong>| Nome do Produto: </strong> {{ $product->nome_produto }}<br>
                <strong>| Valor R$: </strong> {{ $product->valor_produto }}<br>
                <strong>| Estoque Unitário: </strong> {{ $product->estoque }}<br>
                <strong>| Data de Criação do Produto: </strong> {{ $product->created_at }}<br>
                <strong>| Data de Alteração das Descrições do Produto: </strong> {{ $product->updated_at }}
                <div>
                    <button type="button" class="btn btn-primary">
                        <a href="{{ route('product.edit', ['cod_produto' => $product->cod_produto]) }}">Editar</a>
                    </button>
                    <button type="button" class="btn btn-secondary">
                        <a href="{{ route('product.show', ['cod_produto' => $product->cod_produto]) }}">Detalhes</a>
                    </button>
                    <form action="{{ route('product.destroy', $product->cod_produto) }}" method="POST" style="display: inline" onsubmit="return confirm('Tem certeza que deseja excluir este produto?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</but>
                    </form>

                </div>
            </li>
        @endforeach
    </ul>

    <script>
        function confirmDelete() {
            return confirm('Tem certeza que deseja excluir este Produto?');
        }
    </script>
@endsection
