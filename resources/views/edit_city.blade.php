<!-- resources/views/edit_product.blade.php -->
@section('content')

@endsection
<!DOCTYPE html>
<html>
<head>
    <title>Editar Cidades</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <h1 style="color:aliceblue">Editar Cidades na Lista</h1>
@if (session()->has('message'))
    <p>{{ session()->get('message') }}</p>

@endif
<form action="{{ route('brand.update', ['cod_marca' => $city->cod_cidade]) }}" method="POST">
    @csrf
    <div>
    @method('PUT')

    <label style="color: black;" for="nome_marca">Nome da Cidade:</label>
    <input type="text" name="nome_marca" id="nome_marca" value="{{ $city->nome_cidade }}" required>

    <button class="btn btn-primary" type="submit">Atualizar</button>
    </div>
</form>

    <a style="color:aliceblue; margin-top:150px" href="{{ route('brand.index') }}" class="btn btn-primary">Voltar</a>
</body>
</html>
