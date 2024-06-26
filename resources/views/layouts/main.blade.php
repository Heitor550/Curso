<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta tags obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Título dinâmico -->
    <title>@yield('title')</title>

    <!-- Preconexão para melhorar o desempenho de carregamento das fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Importação da fonte Roboto do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- Importação do CSS do Bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="antialiased">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/logo.png" alt="Minha Logo"> <!-- Adicione o caminho correto para a imagem -->
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Seção de conteúdo dinâmico -->
    @yield('content')

    <!-- Rodapé fixo -->
    <footer>
        <p>Eventos... &copy; 2024</p>
    </footer>
    <script src="https://unpkg.com/ionicons/dist/ionicons.js"></script>
</body>
</html>