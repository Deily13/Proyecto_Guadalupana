<?php

namespace App\Http\Controllers;

class PedidoController extends Controller
{

    public function index()
    {
        return view('/auth/administrador/pedidos');

    }
}