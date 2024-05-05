<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ListaPedidosController extends Controller
{
    //
    public function index()
    {
        $pedidos = User::whereHas('bolsa', function($query){
            $query->where('pay', false);
        })
        ->with([
            'bolsa'=> function($query){
            $query->where('pay', false);
            },
            'bolsa.product'
        ])
        ->get();

        // dd(json_decode($pedidos));
        return view('/auth/administrador/lista-pedidos', compact('pedidos'));
    }
}