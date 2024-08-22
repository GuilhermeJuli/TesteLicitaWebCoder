@extends('master')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Criar Cidade</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <h1>Criar Cidade</h1>
    
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

    <form action="{{ route('city.store') }}" method="POST">
        @csrf
        
        <div>
            <label for="nome_marca">Nome da Cidade:</label>
            <input type="text" name="nome_cidade" id="nome_cidade" placeholder="Nome da Cidade" value="">
        </div>
        <button class="btn btn-primary" type="submit">Criar Cidade</button>
    </form>

    <a href="{{ route('city.index') }}" class="btn btn-primary">Voltar</a>
</body>
</html>
@endsection
