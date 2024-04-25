<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class EditarProductoController extends Controller
{
    //
    public function index()
    {

        $bebidas = Product::where('slug', 'bebidas-alcoholicas')->get();
        $hamburguesas = Product::where('slug', 'hamburguesas')->get();
        $helados = Product::where('slug', 'helados')->get();
        $comidas = Product::where('slug', 'comidas-rapidas')->get();
        $refrescos = Product::where('slug', 'refrescos')->get();
        $combos = Product::where('slug', 'combos')->get();

        
        return view('/auth/administrador/editar-productos', [
            'bebidas' => $bebidas,
            'hamburguesas' => $hamburguesas,
            'helados' => $helados,
            'comidas' => $comidas,
            'refrescos' => $refrescos,
            'combos' => $combos
        ]);
    }
}
