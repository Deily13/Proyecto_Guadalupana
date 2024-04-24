<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditarProductoController extends Controller
{
    //
    public function index()
    {

        return view('/auth/administrador/editar-productos');
    }
}
