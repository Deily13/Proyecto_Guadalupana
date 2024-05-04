<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bolsa;
use App\Models\Product;

class BolsaController extends Controller
{
    public function index()
    {

        return view('/auth/bolsa');
    }

    public function mostrarBolsa()
    {
        $productos = Bolsa::all(); // Obtener todos los productos de la bolsa
        return view('/auth/bolsa', compact('productos')); // Pasar los productos a la vista
    }

    public function eliminarProducto($id)
    {
        // Buscar el producto en la bolsa
        $bolsa = Bolsa::find($id);
    
        // Si el producto existe, eliminarlo
        if ($bolsa) {
            $bolsa->delete();
            return back()->with('success', 'Producto eliminado correctamente.');
        } else {
            return back()->with('error', 'El producto no se encontró.');
        }
    }
}
