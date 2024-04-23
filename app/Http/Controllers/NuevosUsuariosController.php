<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuevosUsuariosController extends Controller
{
    //
    public function index()
    {

        return view('/auth/administrador/nuevis-usuarios');
    }
}
