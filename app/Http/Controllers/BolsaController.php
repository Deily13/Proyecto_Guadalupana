<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart; // Asegúrate de importar la clase Cart si aún no lo has hecho
use App\Models\Product; // Ajusta la importación del modelo Product si aún no lo has hecho
use App\Models\CartItem;

class BolsaController extends Controller
{
    /**
     * Muestra la bolsa de compras con los productos.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Llama al método mostrarBolsa para obtener los productos y pasarlos a la vista
        return $this->mostrarBolsa();
    }

    /**
     * Muestra la bolsa de compras con los productos.
     *
     * @return \Illuminate\View\View
     */
    public function mostrarBolsa()
    {
        // Supongamos que obtienes la lista de productos desde algún lugar
        $productos = Product::all(); // Esto es solo un ejemplo, ajusta según tu lógica real

        // Supongamos que calculas el total de alguna manera
        $total = 0; // Esto es solo un ejemplo, ajusta según tu lógica real

        return view('auth.bolsa', compact('productos', 'total'));
    }

    /**
     * Elimina un producto del carrito.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeitem(Request $request)
    {
        Cart::remove([
            'id' => $request->id,
        ]);
        return back()->with('success', "Producto eliminado con éxito de su carrito.");
    }

    /**
     * Vacía el carrito de compras.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function clear()
    {
        Cart::clear();
        return back()->with('success', "Carrito vaciado con éxito.");
    }

    public function eliminarProducto(Request $request)
    {
        // Encuentra el registro correspondiente en la tabla cart_items y elimínalo
        $productoId = $request->id;
        $userId = Auth::id();

        // Eliminar el producto de la bolsa del usuario actual
        CartItem::where('user_id', $userId)->where('product_id', $productoId)->delete();

        return response()->json(['message' => 'Producto eliminado permanentemente de la bolsa']);
    }

}
