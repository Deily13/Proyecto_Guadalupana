<?php

namespace App\Http\Controllers;

use App\Models\User;

class ListaPedidosController extends Controller
{
    //
    public function index()
    {
        $pedidos = User::whereHas('bolsa', function($query){
            $query->where('pay', true);
        })
        ->with([
            'bolsa'=> function($query){
            $query->where('pay', true);
            },
            'bolsa.product'
        ])
        ->get();

        // dd(json_decode($pedidos));
        return view('/auth/administrador/lista-pedidos', ['pedidos' => $pedidos]);
    }
}