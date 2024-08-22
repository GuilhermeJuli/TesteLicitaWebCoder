@extends('master')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Criar Produto</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <h1>Criar Produto</h1>
    
    @if (session()->has('message'))
        <p>{{ session()->get('message') }}</p>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        
        <div>
            <label for="nome_produto">Nome do Produto:</label>
            <input type="text" name="nome_produto" id="nome_produto" placeholder="Nome do Produto" value="">
        </div>
        
        <div>
            <label for="valor_produto">Valor do Produto:</label>
            <input type="text" name="valor_produto" id="valor_produto" placeholder="Valor do Produto" value="">
        </div>

        <div>
            <label for="marca_produto">Marca do Produto:</label>
            <input type="text" name="marca_produto" id="marca_produto" placeholder="Marca do Produto" value="">
        </div>

        <div>
            <label for="estoque">Estoque do Produto:</label>
            <input type="text" name="estoque" id="estoque" placeholder="Estoque do Produto" value="">
        </div>

        <div>
            <label for="cidade_id">Cidade:</label>
            <input type="text" name="cidade_id" id="cidade_id" placeholder="Cidade" value="">
        </div>

        <button class="btn btn-primary" type="submit">Criar Produto</button>
    </form>

    <a href="{{ route('products.index') }}" class="btn btn-primary">Voltar</a>
</body>
</html>
@endsection
