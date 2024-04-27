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

    //*campos de formulario

//imagen 
//nombre producto
//descripcion
//precio
//disponible
//vista de destino

/*
public function store(Request $request)
{
    // Validar los datos del formulario
    $validatedData = $request->validate([
       'image' => 'required',
       'nombreProduct' => 'required',
       'descripcion' => 'required',
       'precio' => 'required',
       'disponible' => 'required',
       'vista' => 'required',
    ]);

   // $editar-productos = EditarProducto::create($validatedData);
}
*/
}


