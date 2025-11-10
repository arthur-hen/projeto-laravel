<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel Administrativo - Cental Carros</title>

    <!-- CSS base do template -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Ícones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

    <style>
        body {
            background-color: #f4f6f9;
        }

        .navbar {
            background-color: #212529 !important;
        }

        .navbar-brand h1 {
            color: #fff !important;
        }

        .content-area {
            min-height: 80vh;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        footer {
            background: #212529;
            color: #ccc;
            padding: 20px 0;
            text-align: center;
        }

        footer a {
            color: #0d6efd;
        }

        .sidebar {
            background: #343a40;
            color: #fff;
            height: 100%;
            min-height: 100vh;
            position: fixed;
            width: 220px;
            padding-top: 60px;
        }

        .sidebar a {
            color: #adb5bd;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
        }

        .sidebar a:hover, .sidebar a.active {
            background-color: #0d6efd;
            color: white;
        }

        .main-content {
            margin-left: 220px;
        }

        .logout-btn {
            color: #fff;
            border: none;
            background: none;
        }

        .logout-btn:hover {
            color: #dc3545;
        }
    </style>
</head>

<body>
    <!-- Barra de navegação superior -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('admin.carros.index') }}"></a>

                <h1 class="h4 mb-0"><i class="fas fa-tools me-2"></i>Painel Admin</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <span class="nav-link text-white">Olá, {{ Auth::user()->name ?? 'Administrador' }}</span>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="logout-btn nav-link">Sair <i class="fas fa-sign-out-alt"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Barra lateral -->
    <div class="sidebar">
        <h5 class="px-3 mb-4 text-uppercase text-secondary">Menu</h5>
        <a href="{{ route('admin.carros.index') }}" class="{{ request()->is('admin') ? 'active' : '' }}">
            <i class="fas fa-car me-2"></i> Veículos
        </a>
        <a href="{{ route('admin.carros.create') }}">
            <i class="fas fa-plus me-2"></i> Cadastrar Carro
        </a>
        <a href="{{ url('/') }}">
            <i class="fas fa-globe me-2"></i> Ir para o site
        </a>
    </div>

    <!-- Área principal -->
    <div class="main-content">
        <div class="container content-area">
            @yield('conteudo')
        </div>

        <!-- Rodapé -->
        <footer>
            <p>&copy; {{ date('Y') }} Cental Carros. Todos os direitos reservados. |
                <a href="https://htmlcodex.com" target="_blank">HTML Codex</a>
            </p>
        </footer>
    </div>

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
