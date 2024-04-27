<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    //
    public function index()
    {

        return view('/auth/administrador/roles');
    }


    /*
Formulario de agregar un usuario
nombre = nombre
apelllido =apellido
usuario = user
correo = correo
tipo id = tipoId
n id = numeroId
movil = movil
dirrecion = direccion
rol = rol
clave = clave
*/

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'user' => 'required',
            'correo' => 'required',
            'tipoId' => 'required',
            'numeroId' => 'required',
            'movil' => 'required',
            'direccion' => 'required',
            'rol' => 'required',
            'clave' => 'required',
        ]);

       // $roles = Roles::create($validatedData);
    }


    /*
Formulario de buscar 
nombre = nombre
apellido = apellido
correo = correo
rol = rol
*/

}
