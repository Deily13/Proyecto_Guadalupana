<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido; // Asegúrate de importar el modelo de Pedido si aún no lo has hecho

class PedidoController extends Controller
{
    /**
     * Procesa un nuevo pedido.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function procesarPedido(Request $request)
    {
        // Validar los datos del formulario del pedido
        $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'direccion_entrega' => 'required|string|max:255',
            // Agrega más reglas de validación según tus necesidades
        ]);

        // Crear un nuevo pedido con los datos recibidos
        $pedido = new Pedido();
        $pedido->nombre_cliente = $request->nombre_cliente;
        $pedido->direccion_entrega = $request->direccion_entrega;
        // Agrega más campos según los datos que necesites en tu pedido
        $pedido->save();

        // Redirigir a alguna ruta después de procesar el pedido
        return redirect()->route('ruta_donde_quieres_redirigir')->with('success', 'Pedido procesado correctamente.');
    }

    /**
     * Edita un pedido existente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editarPedido(Request $request, $id)
    {
        // Buscar el pedido por su ID
        $pedido = Pedido::findOrFail($id);

        // Validar los datos del formulario de edición del pedido
        $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'direccion_entrega' => 'required|string|max:255',
            // Agrega más reglas de validación según tus necesidades
        ]);

        // Actualizar los datos del pedido
        $pedido->nombre_cliente = $request->nombre_cliente;
        $pedido->direccion_entrega = $request->direccion_entrega;
        // Actualiza más campos según los datos que necesites en tu pedido
        $pedido->save();

        // Redirigir a alguna ruta después de editar el pedido
        return redirect()->route('ruta_donde_quieres_redirigir')->with('success', 'Pedido editado correctamente.');
    }

    /**
     * Elimina un pedido existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminarPedido($id)
    {
        // Buscar el pedido por su ID y eliminarlo
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        // Redirigir a alguna ruta después de eliminar el pedido
        return redirect()->route('ruta_donde_quieres_redirigir')->with('success', 'Pedido eliminado correctamente.');
    }
}

