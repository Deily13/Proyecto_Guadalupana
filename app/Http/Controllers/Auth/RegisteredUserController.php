<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],
            'first_name' => ['required', 'string', 'max:255'], // Nombre
            'last_name' => ['required', 'string', 'max:255'], // Apellidos
            'identification_type' => ['required', 'string', 'max:255'], // Tipo de Identificación
            'identification_number' => ['required', 'string', 'max:255'], // Número de Identificación
            'phone_number' => ['required', 'string', 'max:255'], // Número de Celular
            'address' => ['required', 'string', 'max:255'], // Dirección
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'first_name' => $request->first_name, // Nombre
            'last_name' => $request->last_name, // Apellidos
            'identification_type' => $request->identification_type, // Tipo de Identificación
            'identification_number' => $request->identification_number, // Número de Identificación
            'phone_number' => $request->phone_number, // Número de Celular
            'address' => $request->address, // Dirección
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
