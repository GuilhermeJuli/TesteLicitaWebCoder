<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@5.5.2/dist/ionicons/ionicons.css">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@5.5.3/dist/ionicons/ionicons.css">
    <title>Teste LicitaNet PHP</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/caixa.png') }}" alt="Ícone" style="width: 90px; height: 90px;">
            </a>
            <h1><strong>LicitaNet - Teste Code</strong> </h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Lista de Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('brand.store') }}">Lista de Marcas/Fornecedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('city.store') }}">Lista de Cidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product.create') }}">Criar Produto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('city.create') }}">Criar Cidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('brand.create') }}">Criar Fornecedor</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer style="color: aliceblue;" class="text-center mt-4">
        <p>Teste Desenvolvido por: Guilherme Moraes Julio - Desenvolvedor de Sistemas de Informação - 22 de Agosto de 2024</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
