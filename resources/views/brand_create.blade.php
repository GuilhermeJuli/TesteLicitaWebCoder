@extends('master')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Criar Marca</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <h1>Criar Marca</h1>
    
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

    <form action="{{ route('brand.store') }}" method="POST">
        @csrf
        
        <div>
            <label for="nome_marca">Nome da Marca:</label>
            <input type="text" name="nome_marca" id="nome_marca" placeholder="Nome da Marca" value="">
        </div>
        
        <div>
            <label for="fabricante">Fabricante:</label>
            <input type="text" name="fabricante" id="fabricante" placeholder="Fabricante" value="">
        </div>

        <button class="btn btn-primary" type="submit">Criar Marca</button>
    </form>

    <a href="{{ route('brand.index') }}" class="btn btn-primary">Voltar</a>
</body>
</html>
@endsection
