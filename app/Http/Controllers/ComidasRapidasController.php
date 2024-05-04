<?php

namespace App\Http\Controllers;

use App\Models\Bolsa;
use App\Models\Product;
use Illuminate\Http\Request;

class ComidasRapidasController extends Controller
{
    //
    public function index()
    {
        $comidas = Product::where('slug', '=', 'comidas-rapidas')->get();
        return view('/auth/comidas-rapidas', ['comidas' => $comidas]);
    }

    public function procesarPedido(Request $request)
    {
          // Validación de los datos del formulario
    $validatedData = $request->validate([
        'producto_id' => 'required|exists:products,id',
        'cantidad' => 'required|numeric|min:1'
    ]);

    // Obtener el producto
    $producto = Product::find($validatedData['producto_id']);
    if (!$producto) {
        return back()->with('error', 'El producto no existe.');
    }

    $bolsaExistente = Bolsa::where('id', $validatedData['producto_id'])->first();
    if ($bolsaExistente) {
        // Si el producto ya está en la bolsa, regresar con un mensaje
        return back()->with('error', 'Ya agregaste este producto a la bolsa.');
    }

    // Crear una nueva entrada en la bolsa
    $bolsa = new Bolsa();
    $bolsa->id = $producto->id;
    $bolsa->nombre = $producto->nombre;
    $bolsa->Descripción = $producto->Descripción; 
    $bolsa->cantidad = $validatedData['cantidad'];
    $bolsa->precio_total = $producto->precio * $validatedData['cantidad']; 
    $bolsa->save();



    return back()->with('success', 'Pedido procesado correctamente.');
    }
}


//*campos de formulario

//producto 
//cantidad