@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Cidade</title>
</head>
<body>
    <h1>Detalhes da Cidade</h1>
    <p><strong>Código da Cidade:</strong> {{ $city->cod_cidade }}</p>
    <p><strong>Nome da Cidade:</strong> {{ $city->nome_cidade }}</p>
    <a href="{{ route('city.index') }}">Voltar para a lista de cidades</a>
</body>
</html>
@endsection
