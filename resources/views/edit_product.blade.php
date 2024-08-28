<!-- resources/views/edit_product.blade.php -->
@section('content')

@endsection
<!DOCTYPE html>
<html>
<head>
    <title>Editar Produto</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <h1 style="color:aliceblue">Editar Produto no Estoque</h1>
@if (session()->has('message'))
    <p style="color:green; font-size:20px ">{{ session()->get('message') }}</p>

@endif
    <form action="{{ route('product.update', ['cod_produto' => $product->cod_produto]) }}" method="POST">
    @csrf
    <div>
        @method('PUT')
        <input type="hidden" name="_method" value="PUT">
        <label for="nome_produto">Nome do Produto:</label>
        <input type="text" name="nome_produto" id="nome_produto" value="{{ $product->nome_produto }}" required>
        
        <label for="valor_produto">Valor do Produto:</label>
        <input type="text" name="valor_produto" id="valor_produto" value="{{ $product->valor_produto }}" required>
        
        <label for="estoque">Estoque:</label>
        <input type="number" name="estoque" id="estoque" value="{{ $product->estoque }}" required>

        <button type="submit">Atualizar</button>
    </div>
    </form>
    <button type="button">
        <a style="color:aliceblue; margin-top:150px" href="{{ route('products.index') }}" class="btn btn-primary">Voltar</a>
    </button>
</body>
</html>
