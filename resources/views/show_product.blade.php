@extends('master')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Produto</title>
</head>
<body>
    <h1>Detalhes do Produto</h1>

    <p><strong>Código do Produto:</strong> {{ $product->cod_produto }}</p>
    <p><strong>Nome do Produto:</strong> {{ $product->nome_produto }}</p>
    <p><strong>Valor R$:</strong> {{ $product->valor_produto }}</p>
    <p><strong>Estoque:</strong> {{ $product->estoque }}</p>

    <a style="color: black;" href="{{ route('product.index') }}"> <=Voltar</a>
</body>
</html>
@endsection
