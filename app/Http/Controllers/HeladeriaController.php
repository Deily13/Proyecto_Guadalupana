<?php

namespace App\Http\Controllers;

use App\Models\Bolsa;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HeladeriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('procesarPedido');
    }
    //
    public function index()
    {
        $helados = Product::where('slug', '=', 'helados')->get();
        return view('/auth/heladeria', ['helados' => $helados]);
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

    // Crear una nueva entrada en la bolsa
    $bolsa = new Bolsa();
    $bolsa->product_id = $producto->id;
    $bolsa->user_id = Auth::id();
    $bolsa->cantidad = $validatedData['cantidad'];

    if ($request->has('sabor')) {
        $bolsa->sabor = $request->sabor;
    }

    $bolsa->save();



    return back()->with('success', 'Pedido procesado correctamente.');
    }
}


