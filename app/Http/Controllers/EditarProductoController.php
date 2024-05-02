<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class EditarProductoController extends Controller
{

    public function index()
    {
        $bebidas = Product::where('slug', 'bebidas-alcoholicas')->get();
        $hamburguesas = Product::where('slug', 'hamburguesas')->get();
        $helados = Product::where('slug', 'helados')->get();
        $comidas = Product::where('slug', 'comidas-rapidas')->get();
        $refrescos = Product::where('slug', 'refrescos')->get();
        $combos = Product::where('slug', 'combos')->get();

        // Redirigir a la vista y pasar las variables
        return view('auth.administrador.editar-productos', [
            'bebidas' => $bebidas,
            'hamburguesas' => $hamburguesas,
            'helados' => $helados,
            'comidas' => $comidas,
            'refrescos' => $refrescos,
            'combos' => $combos
        ]);
    }


    public function store(Request $request)
    {
        $product = new Product;
        $product->image = $request->input('image');
        $product->nombre = $request->input('nombre');
        $product->Descripción = $request->input('Descripción');
        $product->precio = $request->input('precio');
        $product->stock = $request->input('Stock');
        $product->slug = $request->input('slug');
        $product->save();

        // Almacenar el mensaje en la sesión
        session()->flash('message', 'Producto guardado con éxito');

        return redirect()->route('editar-productos');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        // Almacenar el mensaje en la sesión
        session()->flash('message', 'Producto eliminado con éxito');

        return redirect()->route('editar-productos');
    }


    public function update(Request $request, $id) {
        // Valida los datos enviados desde el formulario
        $request->validate([
            'productImage' => 'required|url',
            'productName' => 'required|string|max:255',
            'productPrice' => 'required|numeric',
            'productFeatures' => 'required|string',
            // Agrega más reglas de validación según sea necesario para otros campos del formulario
        ]);

        // Busca el producto en la base de datos
        $product = Product::find($id);

        // Actualiza los campos del producto con los nuevos valores enviados desde el formulario
        $product->image = $request->input('productImage');
        $product->nombre = $request->input('productName');
        $product->precio = $request->input('productPrice');
        $product->Descripción = $request->input('productFeatures');
        $product->stock = $request->input('productDisponible');
        // Actualiza más campos según sea necesario

        // Guarda los cambios en la base de datos
        $product->save();

        // Redirige a la página anterior o a donde desees después de la actualización

        session()->flash('message', 'Producto actualizado correctamente');

        return redirect()->route('editar-productos');

    }
}
