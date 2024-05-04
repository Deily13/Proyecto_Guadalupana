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
            return redirect('/auth/administrador/admin'); // Redirige a la vista de administrador
        } elseif ($user->rol === 'usuario') {
            return redirect('/dashboard'); // Redirige a la vista de usuario
        }

        // Aquí puedes manejar otros roles si existen
        // ...

        // Si el rol no es reconocido, redirigir a una ruta por defecto
        return redirect('/welcome'); 
    }
}
