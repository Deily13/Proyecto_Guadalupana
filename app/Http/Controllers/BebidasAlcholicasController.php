<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BebidasAlcholicasController extends Controller
{
    public function index()
    {
        $bebidas = Product::where('slug', '=', 'bebidas-alcoholicas', )->get();

        return view('/auth/bebidas-alcoholicas', ['bebidas' => $bebidas]);
    }

    public function mostrarBebidasAlcholicas()
{
    $producto_id = 1; // Supongamos que tienes el ID del producto
    return view('bebidas-alcoholicas', compact('producto_id'));
}
}

//*campos de formulario

//producto
//cantidad
