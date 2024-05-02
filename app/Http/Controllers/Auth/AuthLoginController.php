<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Otras funciones del controlador...

    protected function authenticated(Request $request, $user)
    {
        // Verifica si el usuario tiene el rol de administrador
        if ($user->rol === 'admin') {
            return redirect('/admin'); // Redirige a la vista de administrador
        }

        // Si el usuario no es administrador, puedes redirigirlo a otra vista, por ejemplo, la página de inicio
        return redirect('/dashboard'); // Cambia '/inicio' por la ruta que desees para los usuarios no administradores
    }
}
