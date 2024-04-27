<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    //
    public function index(){
        return view('/auth/administrador/pedidos');
}
}


//no hay formularios solo boton de finalizar pedido
