<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Bolsa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BebidasAlcholicasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('procesarPedido');
    }

    public function index()
    {
        $bebidas = Product::where('slug', '=', 'bebidas-alcoholicas', )->get();

        return view('/auth/bebidas-alcoholicas', ['bebidas' => $bebidas]);
    }


    public function procesarPedido(Request $request)
    {
          
    $validatedData = $request->validate([
        'producto_id' => 'required|exists:products,id',
        'cantidad' => 'required|numeric|min:1'
    ]);

    
    $producto = Product::find($validatedData['producto_id']);
    if (!$producto) {
        return back()->with('error', 'El producto no existe.');
    }

   
    $bolsa = new Bolsa();
    $bolsa->product_id = $producto->id;
    $bolsa->user_id = Auth::id();
    $bolsa->cantidad = $validatedData['cantidad'];
    $bolsa->save();



    return back()->with('success', 'Pedido procesado correctamente.');
    }

}

