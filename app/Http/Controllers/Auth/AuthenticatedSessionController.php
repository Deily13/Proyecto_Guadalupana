<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

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
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
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

    public function index()
    {
        // Obtén el usuario autenticado
        $user = Auth::user();

        // Obtén la bolsa de compras del usuario
        $bolsa = $user->bolsa;

        // Si el usuario no tiene una bolsa de compras, crea una nueva
        if (!$bolsa) {
            $bolsa = $user->bolsa()->create();
        }

        // Obtén los productos en la bolsa de compras
        $productos = $bolsa->productos;

        // Calcula el total de la bolsa de compras
        $total = $productos->sum('precio');

        return view('auth.bolsa', compact('productos', 'total'));
    }
}
