<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Carros;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */

   
public function store(LoginRequest $request)

{
    $request->authenticate();
    $request->session()->regenerate();

    $user = Auth::user();

    // Se o usuário for admin → retorna diretamente a view administrativa
    if ($user->is_admin) {
        return response()->view('admin.carros.index', [
            'carros' => Carros::all(),
            'user' => $user
        ]);
    }

    // Caso contrário → retorna a view pública
    return response()->view('template.index', [
        'user_name' => $user->name
    ]);

}



    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
