<?php

namespace App\Http\Controllers;

use App\Models\Bolsa;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HamburguesasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('procesarPedido');
    }
    //
    public function index()
    {
        $hamburguesas = Product::where('slug', '=', 'hamburguesas')->get();
        return view('/auth/hamburguesas', ['hamburguesas' => $hamburguesas]);
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

    // Crear una nueva entrada en la bolsa
    $bolsa = new Bolsa();
    $bolsa->product_id = $producto->id;
    $bolsa->user_id = Auth::id();
    $bolsa->cantidad = $validatedData['cantidad'];
    $bolsa->save();



    return back()->with('success', 'Pedido procesado correctamente.');
    }
}


