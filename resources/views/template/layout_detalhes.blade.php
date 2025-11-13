<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iCarros - Detalhes</title>

    {{-- CSS principal --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    {{-- Navbar aqui diretamente --}}
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="/carros" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-danger">iCarros</h2>
    </a>
</nav>


    {{-- Aqui entra o conteúdo da página --}}
    <main class="py-5">
        @yield('conteudo')
    </main>

   <footer class="bg-dark text-white text-center py-4 mt-5">
    © {{ date('Y') }} iCarros — Todos os direitos reservados.
</footer>


    {{-- Scripts --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
