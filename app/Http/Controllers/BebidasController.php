<?php

namespace App\Http\Controllers;

use App\Models\Bolsa;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BebidasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('procesarPedido');
    }
   
    public function index()
    {
        $refrescos = Product::where('slug', '=', 'refrescos')->get();
        return view('/auth/bebidas', ['refrescos' => $refrescos]);
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

