@extends('master')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Fornecedor</title>
</head>
<body>
    <h1>Detalhes do Fornecedor</h1>

    <p><strong>Código do Fornecedor:</strong> {{ $brand->cod_marca }}</p>
    <p><strong>Nome do Produto:</strong> {{ $brand->nome_marca }}</p>
    <p><strong>Fabricante:</strong> {{ $brand->fabricante }}</p>
</body>
</html>
@endsection
