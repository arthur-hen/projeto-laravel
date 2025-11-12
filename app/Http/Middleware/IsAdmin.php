<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Verifica se o usuário é administrador.
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário está logado e tem papel de admin
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // Caso contrário, redireciona para a página inicial
        return redirect('/')->with('error', 'Acesso restrito a administradores.');
    }
}
